<?php
	namespace App\TestOneBundle\Classes\Connectors;
	
	use App\TestOneBundle\Interfaces\ConnectorInterface;
	
	class ConnectorCustomer implements ConnectorInterface {
		
		/**
		 * @param string $url
		 * @param array $data
		 */
		public function sendData(string $url, array $data): void
		{
			$newLine = chr(10);
			printf('%s %s', $url, $newLine);
			foreach ($data as $item) {
				printf('Name: %s %s; E-mail: %s %s', $item['firstName'], $item['lastName'], $item['email'], $newLine);
			}
			printf('%s', $newLine);
		}
	}