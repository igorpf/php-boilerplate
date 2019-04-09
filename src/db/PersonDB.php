<?php
namespace Example\Db;

use Example\Person;

class PersonDB implements IPersonDB {
    
    public function findAllByName($name) : array {
    	$objDb = $this->getPDO();
    	$objStmt = $objDb->prepare('SELECT id, username, email FROM person WHERE username LIKE ?');
    	$objStmt->execute(["$name%"]);
        return $this->mapResultSetToPerson($objStmt);
    }

    public function findAll(): array {
        $objDb = $this->getPDO();
        $objStmt = $objDb->query('SELECT id, username, email FROM person');
        return $this->mapResultSetToPerson($objStmt);
    }

    public function getPDO(): \PDO {
        return new \PDO('pgsql:host=localhost;dbname=testdb', 'test', 'test');
    }

    public function mapResultSetToPerson(\PDOStatement $objStmt): array {
        return $objStmt->fetchAll(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, get_class($this));
    }

    public function insert(Person $objPerson): void {
        $objDb = $this->getPDO();
        try {
            $objDb->beginTransaction();
            $objStmt = $objDb->prepare('INSERT INTO person (username, email) VALUES (?, ?)');
            $objStmt->execute([$objPerson->getUsername(), $objPerson->getEmail()]);
            $objDb->commit();
        } catch (\Exception $e) {
            $objDb->rollBack();
        }
    }
}