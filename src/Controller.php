<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 09/04/19
 * Time: 08:49
 */

namespace Example;


use Example\db\EmployeeDB;

class Controller {
    private $employeeDB;

    public function __construct() {
        $this->employeeDB = new EmployeeDB();
    }

    public function resolve() {

        switch ($_POST['flag']) {
            case 'cadastro_func':
                $obj = new Employee();
                $obj->setName($_POST['name']);
                $obj->setId($_POST['id']);
                try {
                    $this->employeeDB->save($obj);
                    $mensagem = 'Dados salvos com sucesso';
                } catch (\Exception $e) {
                    $mensagem = 'Erro na gravação';
                }
                header('Location: mensagens.php?mensagem'.$mensagem);

                break;
            case 'consulta_func':
                try {
                    $obj = $this->employeeDB->search($_POST['id']);
                    header('Location: exibe_consulta_func.php?id='.$obj->getId() . '&name='.$obj->getName());
                } catch (\Exception $e) {
                    $mensagem = 'Esse funcionário não está cadastrado';
                    header('Location: mensagens.php?mensagem'.$mensagem);
                }

                break;
        }

    }
}