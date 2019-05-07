<?php
	
	namespace App\TestOneBundle\Traits;
	
	trait TObjectToArray {
		protected function convertToArray($object) {
			$array = [];
			foreach ((array) $object as $key => $value) {
				$array[preg_replace('/\000(.*)\000/', '', $key)] = $value;
			}
			return $array;
		}
	}