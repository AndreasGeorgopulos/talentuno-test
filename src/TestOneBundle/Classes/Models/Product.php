<?php
	
	namespace App\TestOneBundle\Classes\Models;
	
	class Product {
		
		protected $productId;
		protected $price;
		protected $description;
		
		public function getProductId () : int {
			return $this->productId;
		}
		
		public function setProductId (int $productId) {
			$this->productId = $productId;
		}
		
		public function getPrice () : float {
			return $this->price;
		}
		
		public function setPrice (float $price) {
			$this->price = $price;
		}
		
		public function getDescription () : string {
			return $this->description;
		}
		
		public function setDescription (string $description) {
			$this->description = $description;
		}
	}