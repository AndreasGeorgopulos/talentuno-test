<?php
	
	namespace App\TestOneBundle\Classes\Models;
	
	use App\TestOneBundle\Traits\TObjectToArray;
	
	class Cart {
		use TObjectToArray;
		
		protected $email;
		protected $items = [];
		
		public function getEmail () : string {
			return $this->email;
		}
		
		public function setEmail (string $email) {
			$this->email = $email;
		}
		
		public function addItem (CartItem $cartItem) {
			$this->items[] = $this->convertToArray($cartItem);
		}
		
		public function getItems () : array {
			return $this->items;
		}
	}