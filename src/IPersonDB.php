<?php
namespace Example;

interface IPersonDB {   
    
    public function findAllByName($name) : array;
}