<?php
//phpinfo();die;
require_once __DIR__ . '/bootstrap.php';

try {
    $personService = $container->get('Example\\IPersonService');
//    $personService->insert(new \Example\Person(null, 'Manolo'.date('d/M/y HH:ss'), 'abc@sdsa'));

    $people = $_GET['name']? $personService->findAllByName($_GET['name']) : $personService->findAll();


    echo $twig->render('index.twig', [
        'assetsPath' => 'view/',
        'people' => $people
    ]);
} catch (Exception $e) {
    echo $e->getMessage();
}