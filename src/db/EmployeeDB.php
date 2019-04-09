<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 09/04/19
 * Time: 08:19
 */

namespace Example\db;

use Example\Employee;

class EmployeeDB {
    public function save(Employee $employee) {
        try {
            $objPdo = new \PDO('pgsql:host=localhost;dbname=test', 'test', 'test');
            $objPdo->beginTransaction();
            $objStmt = $objPdo->prepare('INSERT INTO employee (id, name) values (?,?)');
            $objStmt->execute([$employee->getId(), $employee->getName()]);
            $objPdo->commit();
        } catch (\Exception $e) {
            if ($objPdo)
                $objPdo->rollBack();
            throw new \Exception("erro ao inserir dados", 0 , $e);
        }

    }

    public function search(int $id) {
        try {
            $objPdo = new \PDO('pgsql:host=localhost;dbname=test', 'test', 'test');
            $objStmt = $objPdo->prepare('SELECT id, name FROM employee WHERE id=?' );
            $objStmt->execute([$id]);
            $result = $objStmt->fetch();
            if ($result == false)
                throw new \Exception("");
            return $result;
        } catch (\Exception $e) {
            throw new \Exception("");
        }

    }
}