<?php

	namespace Shopeca\Parser\Gpc;

	class Parser {

		private $errors = [];

		public function process ($content)
		{
			$r = [];
			if (is_string($content) && strlen($content) > 0) {
				$lines = explode(PHP_EOL, $content);
				$i = 0;
				foreach ($lines as $line) {
					$i++;
					if ($data = $this->processLine($line, $i)) {
						$r[] = $data;
					}
				}
			}
			return $r;
		}

		private function processLine ($line, $index)
		{
			if (strlen($line) === 128) {
				$type = substr($line, 0, 3);
				if ($type == "074") {
					return $this->processHeading($line);
				} elseif ($type == "075") {
					return $this->processItem($line);
				} else {
					$this->errors[] = "Line $index has unknown line type $type";
				}
			} else {
				$this->errors[] = "Line $index has wrong length";
			}
		}

		private function processHeading ($line)
		{
			return (new AccountingHeading)
				->setAccountName(substr($line,19, 20))
				->setOldBalanceDate(\DateTime::createFromFormat('dmy', substr($line,39, 6)))
				->setOldBalance(intval(substr($line,45, 14)) / 100)
				->setOldBalanceSign(substr($line,59, 1))
				->setNewBalance(intval(substr($line,60, 14)) / 100)
				->setNewBalanceSign(substr($line,74, 1))
				->setDebit(intval(substr($line,75, 14)) / 100)
				->setDebitSign(substr($line,89, 1))
				->setCredit(intval(substr($line,90, 14)) / 100)
				->setCreditSign(substr($line,104, 1))
				->setListNumber(substr($line,105, 3))
				->setAccountingDate(\DateTime::createFromFormat('dmy', substr($line,108, 6)))
				->setAccount(substr($line,3, 16));
		}

		private function processItem ($line)
		{
			return (new AccountingEntry())
				->setTargetAccount(substr($line,19, 16))
				->setDocumentNumber(substr($line,35, 13))
				->setAmount(intval(substr($line,48, 12)) / 100)
				->setAccountingType(substr($line,60, 1))
				->setVariableSymbol(substr($line,61, 10))
				->setConstantSymbol(substr($line,71, 10))
				->setSpecificSymbol(substr($line,81, 10))
				->setForeignCurrency(substr($line,91, 6))
				->setTargetName(substr($line,97, 20))
				->setCurrencyCode(substr($line,118, 4))
				->setDueDate(\DateTime::createFromFormat('dmy', substr($line,122, 6)))
				->setAccount(substr($line,3, 16));
		}
	}
