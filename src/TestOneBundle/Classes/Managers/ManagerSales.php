<?php
	namespace App\TestOneBundle\Classes\Managers;
	
	use App\TestOneBundle\Classes\Models\Order;
	use App\TestOneBundle\Classes\Models\OrderItem;
	use App\TestOneBundle\Interfaces\ManagerInterface;
	use App\TestOneBundle\Traits\TObjectToArray;
	
	class ManagerSales implements ManagerInterface {
		use TObjectToArray;
		
		/**
		 * @return array
		 */
		public function findAll(): array
		{
			$orders = [
				['orderId' => 1, 'email' => 'andreas.georgopulos@gmail.com', 'items' => [['productId' => 1, 'quantity' => 2], ['productId' => 2, 'quantity' => 3]]],
				['orderId' => 2, 'email' => 'andreas.georgopulos@gmail.com', 'items' => [['productId' => 3, 'quantity' => 1]]],
			];
			
			$result = [];
			foreach ($orders as $o) {
				$order = new Order();
				$order->setOrderId($o['orderId']);
				$order->setEmail($o['email']);
				
				foreach ($o['items'] as $oi) {
					$orderItem = new OrderItem();
					$orderItem->setProductId($oi['productId']);
					$orderItem->setQuantity($oi['quantity']);
					$order->addItem($orderItem);
				}
				
				$result[] = $this->convertToArray($order);
			}
			return $result;
		}
	}