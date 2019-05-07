<?php
	
	namespace App\TestOneBundle\Classes\Models;
	
	use App\TestOneBundle\Traits\TObjectToArray;
	
	class Order {
		use TObjectToArray;
		
		protected $orderId;
		protected $email;
		protected $items = [];
		
		public function getOrderId () : int {
			return $this->orderId;
		}
		
		public function setOrderId (int $orderId) {
			$this->orderId = $orderId;
		}
		
		public function getEmail () : string {
			return $this->email;
		}
		
		public function setEmail (string $email) {
			$this->email = $email;
		}
		
		public function addItem (OrderItem $orderItem) {
			$this->items[] = $this->convertToArray($orderItem);
		}
		
		public function getItems () : array {
			return $this->items;
		}
	}