<?php
	
	namespace App\TestOneBundle\Classes\Models;
	
	class Invoice {
		protected $email;
		protected $orderId;
		protected $description;
		
		public function getEmail () : string {
			return $this->email;
		}
		
		public function setEmail (string $email) {
			$this->email = $email;
		}
		
		public function getOrderId () : int {
			return $this->orderId;
		}
		
		public function setOrderId (int $orderId) {
			$this->orderId = $orderId;
		}
		
		public function getDescription () : string {
			return $this->description;
		}
		
		public function setDescription (string $description) {
			$this->description = $description;
		}
	}