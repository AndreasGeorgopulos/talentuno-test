<?php
	namespace App\TestOneBundle\Classes\Managers;
	
	use App\TestOneBundle\Classes\Models\Invoice;
	use App\TestOneBundle\Interfaces\ManagerInterface;
	use App\TestOneBundle\Traits\TObjectToArray;
	
	class ManagerFinance implements ManagerInterface {
		use TObjectToArray;
		
		/**
		 * @return array
		 */
		public function findAll(): array
		{
			$invoices = [
				['email' => 'andreas.georgopulos@gmail.com', 'orderId' => 1, 'description' => 'First invoice'],
				['email' => 'andreas.georgopulos@gmail.com', 'orderId' => 2, 'description' => 'Second invoice'],
				['email' => 'andreas.georgopulos@gmail.com', 'orderId' => 3, 'description' => 'Third invoice'],
			];
			
			$result = [];
			foreach ($invoices as $i) {
				$invoice = new Invoice();
				$invoice->setEmail($i['email']);
				$invoice->setOrderId($i['orderId']);
				$invoice->setDescription($i['description']);
				$result[] = $this->convertToArray($invoice);
			}
			
			return $result;
		}
	}