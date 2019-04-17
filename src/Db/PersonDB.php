<?php
namespace Example\Db;

use Example\Person;

class PersonDB implements IPersonDB {
    
    public function findAllByName($name) : array {
    	// Pretend to do real DB access
    	return [
    		new Person("Person 1"),
    		new Person("Person 2")
    	];
    }
}