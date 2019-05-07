<?php
	namespace App\TestOneBundle\Classes\Managers;
	
	use App\TestOneBundle\Classes\Models\Cart;
	use App\TestOneBundle\Classes\Models\CartItem;
	use App\TestOneBundle\Interfaces\ManagerInterface;
	use App\TestOneBundle\Traits\TObjectToArray;
	
	class ManagerCart implements ManagerInterface {
		use TObjectToArray;
		
		/**
		 * @return array
		 */
		public function findAll(): array
		{
			$email = 'andreas.georgopulos@gmail.com';
			$cartItems = [
				['productId' => 1, 'quantity' => 2],
				['productId' => 3, 'quantity' => 3],
			];
			
			$cart = new Cart();
			$cart->setEmail($email);
			foreach ($cartItems as $item) {
				$cartItem = new CartItem();
				$cartItem->setProductId($item['productId']);
				$cartItem->setQuantity($item['quantity']);
				$cart->addItem($cartItem);
			}
			return $this->convertToArray($cart);
		}
	}