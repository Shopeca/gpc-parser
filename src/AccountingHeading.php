<?php

	namespace Shopeca\Parser\Gpc;

	class AccountingHeading extends AccountingItem {

		protected $type = "074";
		private $accountName;
		private $oldBalanceDate;
		private $oldBalance;
		private $oldBalanceSign;
		private $newBalance;
		private $newBalanceSign;
		private $debit;
		private $debitSign;
		private $credit;
		private $creditSign;
		private $listNumber;
		private $accountingDate;

		/**
		 * @return mixed
		 */
		public function getAccountName () {
			return $this->accountName;
		}

		/**
		 * @param mixed $accountName
		 * @return AccountingHeading
		 */
		public function setAccountName ( $accountName ) {
			$this->accountName = $accountName;
			return $this;
		}

		/**
		 * @return mixed
		 */
		public function getOldBalanceDate () {
			return $this->oldBalanceDate;
		}

		/**
		 * @param mixed $oldBalanceDate
		 * @return AccountingHeading
		 */
		public function setOldBalanceDate ( $oldBalanceDate ) {
			$this->oldBalanceDate = $oldBalanceDate;
			return $this;
		}

		/**
		 * @return mixed
		 */
		public function getOldBalance () {
			return $this->oldBalance;
		}

		/**
		 * @param mixed $oldBalance
		 * @return AccountingHeading
		 */
		public function setOldBalance ( $oldBalance ) {
			$this->oldBalance = $oldBalance;
			return $this;
		}

		/**
		 * @return mixed
		 */
		public function getOldBalanceSign () {
			return $this->oldBalanceSign;
		}

		/**
		 * @param mixed $oldBalanceSign
		 * @return AccountingHeading
		 */
		public function setOldBalanceSign ( $oldBalanceSign ) {
			$this->oldBalanceSign = $oldBalanceSign;
			return $this;
		}

		/**
		 * @return mixed
		 */
		public function getNewBalance () {
			return $this->newBalance;
		}

		/**
		 * @param mixed $newBalance
		 * @return AccountingHeading
		 */
		public function setNewBalance ( $newBalance ) {
			$this->newBalance = $newBalance;
			return $this;
		}

		/**
		 * @return mixed
		 */
		public function getNewBalanceSign () {
			return $this->newBalanceSign;
		}

		/**
		 * @param mixed $newBalanceSign
		 * @return AccountingHeading
		 */
		public function setNewBalanceSign ( $newBalanceSign ) {
			$this->newBalanceSign = $newBalanceSign;
			return $this;
		}

		/**
		 * @return mixed
		 */
		public function getDebit () {
			return $this->debit;
		}

		/**
		 * @param mixed $debit
		 * @return AccountingHeading
		 */
		public function setDebit ( $debit ) {
			$this->debit = $debit;
			return $this;
		}

		/**
		 * @return mixed
		 */
		public function getDebitSign () {
			return $this->debitSign;
		}

		/**
		 * @param mixed $debitSign
		 * @return AccountingHeading
		 */
		public function setDebitSign ( $debitSign ) {
			$this->debitSign = $debitSign;
			return $this;
		}

		/**
		 * @return mixed
		 */
		public function getCredit () {
			return $this->credit;
		}

		/**
		 * @param mixed $credit
		 * @return AccountingHeading
		 */
		public function setCredit ( $credit ) {
			$this->credit = $credit;
			return $this;
		}

		/**
		 * @return mixed
		 */
		public function getCreditSign () {
			return $this->creditSign;
		}

		/**
		 * @param mixed $creditSign
		 * @return AccountingHeading
		 */
		public function setCreditSign ( $creditSign ) {
			$this->creditSign = $creditSign;
			return $this;
		}

		/**
		 * @return mixed
		 */
		public function getListNumber () {
			return $this->listNumber;
		}

		/**
		 * @param mixed $listNumber
		 * @return AccountingHeading
		 */
		public function setListNumber ( $listNumber ) {
			$this->listNumber = $listNumber;
			return $this;
		}

		/**
		 * @return mixed
		 */
		public function getAccountingDate () {
			return $this->accountingDate;
		}

		/**
		 * @param mixed $accountingDate
		 * @return AccountingHeading
		 */
		public function setAccountingDate ( $accountingDate ) {
			$this->accountingDate = $accountingDate;
			return $this;
		}

	}
