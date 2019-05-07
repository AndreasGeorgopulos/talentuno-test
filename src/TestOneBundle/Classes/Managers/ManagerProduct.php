<?php
	
	namespace App\TestOneBundle\Classes\Managers;
	
	use App\TestOneBundle\Classes\Models\Product;
	use App\TestOneBundle\Interfaces\ManagerInterface;
	use App\TestOneBundle\Traits\TObjectToArray;
	
	class ManagerProduct implements ManagerInterface{
		use TObjectToArray;
		
		/**
		 * @return array
		 */
		public function findAll(): array
		{
			$products = [
				['productId' => 1, 'price' => '1500.00', 'description' => 'First product'],
				['productId' => 2, 'price' => '2500.00', 'description' => 'Second product'],
				['productId' => 3, 'price' => '3800.00', 'description' => 'Third product'],
			];
			
			$result = [];
			foreach ($products as $p) {
				$product = new Product();
				$product->setProductId($p['productId']);
				$product->setPrice($p['price']);
				$product->setDescription($p['description']);
				$result[] = $this->convertToArray($product);
			}
			return $result;
		}
	}