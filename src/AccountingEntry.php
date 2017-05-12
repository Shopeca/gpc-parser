<?php

	namespace Shopeca\Parser\Gpc;

	class AccountingEntry extends AccountingItem {

		protected $type = "075";
		private $targetAccount;
		private $documentNumber;
		private $amount;
		private $accountingType;
		private $variableSymbol;
		private $constantSymbol;
		private $specificSymbol;
		private $foreignCurrency;
		private $targetName;
		private $currencyCode;
		private $dueDate;

		/**
		 * @return mixed
		 */
		public function getTargetAccount () {
			return $this->targetAccount;
		}

		/**
		 * @param mixed $targetAccount
		 * @return AccountingEntry
		 */
		public function setTargetAccount ( $targetAccount ) {
			$this->targetAccount = $targetAccount;
			return $this;
		}

		/**
		 * @return mixed
		 */
		public function getDocumentNumber () {
			return $this->documentNumber;
		}

		/**
		 * @param mixed $documentNumber
		 * @return AccountingEntry
		 */
		public function setDocumentNumber ( $documentNumber ) {
			$this->documentNumber = $documentNumber;
			return $this;
		}

		/**
		 * @return mixed
		 */
		public function getAmount () {
			return $this->amount;
		}

		/**
		 * @param mixed $amount
		 * @return AccountingEntry
		 */
		public function setAmount ( $amount ) {
			$this->amount = $amount;
			return $this;
		}

		/**
		 * @return mixed
		 */
		public function getAccountingType () {
			return $this->accountingType;
		}

		/**
		 * @param mixed $accountingType
		 * @return AccountingEntry
		 */
		public function setAccountingType ( $accountingType ) {
			$this->accountingType = $accountingType;
			return $this;
		}

		/**
		 * @return mixed
		 */
		public function getVariableSymbol () {
			return $this->variableSymbol;
		}

		/**
		 * @param mixed $variableSymbol
		 * @return AccountingEntry
		 */
		public function setVariableSymbol ( $variableSymbol ) {
			$this->variableSymbol = $variableSymbol;
			return $this;
		}

		/**
		 * @return mixed
		 */
		public function getConstantSymbol () {
			return $this->constantSymbol;
		}

		/**
		 * @param mixed $constantSymbol
		 * @return AccountingEntry
		 */
		public function setConstantSymbol ( $constantSymbol ) {
			$this->constantSymbol = $constantSymbol;
			return $this;
		}

		/**
		 * @return mixed
		 */
		public function getSpecificSymbol () {
			return $this->specificSymbol;
		}

		/**
		 * @param mixed $specificSymbol
		 * @return AccountingEntry
		 */
		public function setSpecificSymbol ( $specificSymbol ) {
			$this->specificSymbol = $specificSymbol;
			return $this;
		}

		/**
		 * @return mixed
		 */
		public function getForeignCurrency () {
			return $this->foreignCurrency;
		}

		/**
		 * @param mixed $foreignCurrency
		 * @return AccountingEntry
		 */
		public function setForeignCurrency ( $foreignCurrency ) {
			$this->foreignCurrency = $foreignCurrency;
			return $this;
		}

		/**
		 * @return mixed
		 */
		public function getTargetName () {
			return $this->targetName;
		}

		/**
		 * @param mixed $targetName
		 * @return AccountingEntry
		 */
		public function setTargetName ( $targetName ) {
			$this->targetName = $targetName;
			return $this;
		}

		/**
		 * @return mixed
		 */
		public function getCurrencyCode () {
			return $this->currencyCode;
		}

		/**
		 * @param mixed $currencyCode
		 * @return AccountingEntry
		 */
		public function setCurrencyCode ( $currencyCode ) {
			$this->currencyCode = $currencyCode;
			return $this;
		}

		/**
		 * @return mixed
		 */
		public function getDueDate () {
			return $this->dueDate;
		}

		/**
		 * @param mixed $dueDate
		 * @return AccountingEntry
		 */
		public function setDueDate ( $dueDate ) {
			$this->dueDate = $dueDate;
			return $this;
		}

	}
