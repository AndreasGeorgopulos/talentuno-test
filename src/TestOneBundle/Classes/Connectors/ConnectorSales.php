<?php
	
	namespace App\TestOneBundle\Classes\Connectors;
	
	use App\TestOneBundle\Interfaces\ConnectorInterface;
	
	class ConnectorSales implements ConnectorInterface {
		
		/**
		 * @param string $url
		 * @param array $data
		 */
		public function sendData(string $url, array $data): void
		{
			$newLine = chr(10);
			printf('%s %s', $url, $newLine);
			foreach ($data as $order) {
				printf('OrderId: %s; E-mail: %s %s', $order['orderId'], $order['email'], $newLine);
				foreach ($order['items'] as $orderItem) {
					printf(' + ProductId: %s; Quantity: %s %s', $orderItem['productId'], $orderItem['quantity'], $newLine);
				}
			}
			printf('%s', $newLine);
		}
	}