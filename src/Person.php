<?php
namespace Example;

class Person {

    /**
    * @var string
    */
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setName() {
        return $this->name;
    }
}