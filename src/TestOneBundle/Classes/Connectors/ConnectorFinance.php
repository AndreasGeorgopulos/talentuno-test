<?php
	
	namespace App\TestOneBundle\Classes\Connectors;
	
	use App\TestOneBundle\Interfaces\ConnectorInterface;
	
	class ConnectorFinance implements ConnectorInterface {
		
		/**
		 * @param string $url
		 * @param array $data
		 */
		public function sendData(string $url, array $data): void
		{
			$newLine = chr(10);
			printf('%s %s', $url, $newLine);
			foreach ($data as $invoice) {
				printf('OrderId: %s; E-mail: %s; Description: %s %s', $invoice['orderId'], $invoice['email'], $invoice['description'], $newLine);
			}
			printf('%s', $newLine);
		}
	}