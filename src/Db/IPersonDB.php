<?php
namespace Example\Db;

interface IPersonDB {   
    
    public function findAllByName($name) : array;
}