<?php
namespace Example;

use Example\Db\IPersonDB;

class PersonService implements IPersonService {

    private $personDB;

    public function __construct(IPersonDB $personDB) {
        $this->personDB = $personDB;
    }
    
    public function findAllByName($name) : array {
        return $this->personDB->findAllByName($name);
    }
}