<?php
namespace Example;

interface IPersonService {   
    
    public function findAllByName($name) : array;
    public function findAll() : array;
    public function insert(Person $objPerson) : void;
}