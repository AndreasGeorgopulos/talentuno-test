<?php
	namespace App\TestOneBundle\Classes\Connectors;
	
	use App\TestOneBundle\Interfaces\ConnectorInterface;
	
	class ConnectorProduct implements ConnectorInterface {
		
		/**
		 * @param string $url
		 * @param array $data
		 */
		public function sendData(string $url, array $data): void
		{
			$newLine = chr(10);
			printf('%s %s', $url, $newLine);
			foreach ($data as $item) {
				printf('ProductId: %d; Price: €%s; Description: %s %s', $item['productId'], number_format($item['price'], 2, '.', ','), $item['description'], $newLine);
			}
			printf('%s', $newLine);
		}
	}