<?php
	namespace App\TestOneBundle\Classes\Connectors;
	
	use App\TestOneBundle\Interfaces\ConnectorInterface;
	
	class ConnectorCart implements ConnectorInterface {
		
		/**
		 * @param string $url
		 * @param array $data
		 */
		public function sendData(string $url, array $data): void
		{
			$newLine = chr(10);
			printf('%s %s', $url, $newLine);
			printf('%s %s', $data['email'], $newLine);
			foreach ($data['items'] as $item) {
				printf('ProductId: %d; Quantity: %d %s', $item['productId'], $item['quantity'], $newLine);
			}
			printf('%s', $newLine);
		}
	}