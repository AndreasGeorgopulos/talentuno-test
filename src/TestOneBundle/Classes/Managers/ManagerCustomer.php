<?php
	
	namespace App\TestOneBundle\Classes\Managers;
	
	use App\TestOneBundle\Classes\Models\User;
	use App\TestOneBundle\Interfaces\ManagerInterface;
	use App\TestOneBundle\Traits\TObjectToArray;
	
	class ManagerCustomer implements ManagerInterface {
		use TObjectToArray;
		
		/**
		 * @return array
		 */
		public function findAll(): array
		{
			$users = [
				['email' => 'andreas.georgopulos@gmail.com', 'firstName' => 'Andreas', 'lastName' => 'Georgopulos'],
				['email' => 'john.smith@gmail.com', 'firstName' => 'John', 'lastName' => 'Smith'],
			];
			
			$result = [];
			foreach ($users as $u) {
				$user = new User();
				$user->setEmail($u['email']);
				$user->setFirstName($u['firstName']);
				$user->setLastName($u['lastName']);
				$result[] = $this->convertToArray($user);
			}
			return $result;
		}
	}