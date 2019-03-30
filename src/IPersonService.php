<?php
namespace Example;

interface IPersonService {   
    
    public function findAllByName($name) : array;
}