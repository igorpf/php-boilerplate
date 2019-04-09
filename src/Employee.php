<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 09/04/19
 * Time: 08:24
 */

namespace Example;


class Employee {
    private $id;
    private $name;
    function __construct() {}
    public function getId() {return $this->id;}
    public function setId($id) {$this->id = $id;}
    public function getName() {return $this->name;}
    public function setName($name) {$this->name = $name;}
}