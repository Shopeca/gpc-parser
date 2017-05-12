<?php

	namespace Shopeca\Parser\Gpc;

	class AccountingItem {

		protected $type;
		protected $account;

		/**
		 * @return string
		 */
		public function getType () {
			return $this->type;
		}

		/**
		 * @return mixed
		 */
		public function getAccount () {
			return $this->account;
		}

		/**
		 * @param mixed $account
		 * @return AccountingItem
		 */
		public function setAccount ( $account ) {
			$this->account = $account;
			return $this;
		}

	}
