<?php
namespace Example\Db;

use Example\Person;

interface IPersonDB {
    
    public function findAllByName($name) : array;
    public function findAll() : array;
    public function insert(Person $objPerson) : void;
}