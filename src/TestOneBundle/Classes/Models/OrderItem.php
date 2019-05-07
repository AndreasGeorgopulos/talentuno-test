<?php
	
	namespace App\TestOneBundle\Classes\Models;
	
	class OrderItem {
		protected $productId;
		protected $quantity;
		
		public function getProductId () : int {
			return $this->productId;
		}
		
		public function setProductId (int $productId) {
			$this->productId = $productId;
		}
		
		public function getQuantity () : int {
			return $this->quantity;
		}
		
		public function setQuantity (int $quantity) {
			$this->quantity = $quantity;
		}
	}