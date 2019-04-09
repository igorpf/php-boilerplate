<?php

namespace Example;

class Person {

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $email;

    /**
     * @var number
     */
    private $id;

    public function __construct($id = null, $username = '', $email = '') {
        $this->id = $id;
        $this->username = $username;
        $this->email = $email;
    }


    public function getUsername() {
        return $this->username;
    }

    public function setUsername() {
        return $this->username;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email): void {
        $this->email = $email;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id): void {
        $this->id = $id;
    }


}