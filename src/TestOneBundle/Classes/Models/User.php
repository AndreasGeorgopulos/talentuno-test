<?php
	
	namespace App\TestOneBundle\Classes\Models;
	
	class User {
		
		protected $email;
		protected $firstName;
		protected $lastName;
		
		public function getEmail () : string {
			return $this->email;
		}
		
		public function setEmail (string $email) {
			$this->email = $email;
		}
		
		public function getFirstName () : string {
			return $this->firstName;
		}
		
		public function setFirstName (string $firstName) {
			$this->firstName = $firstName;
		}
		
		public function getLastName () : string {
			return $this->lastName;
		}
		
		public function setLastName (string $lastName) {
			$this->lastName = $lastName;
		}
	}