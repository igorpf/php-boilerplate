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

    public function findAll(): array {
        return $this->personDB->findAll();
    }

    public function insert(Person $objPerson): void {
        $this->personDB->insert($objPerson);
    }
}