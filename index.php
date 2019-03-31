<?php
require_once __DIR__ . '/bootstrap.php';

try {
    $personService = $container->get('Example\\IPersonService');
    $people = $personService->findAllByName('oi');
    
    echo $twig->render('index.twig', [
        'assetsPath' => 'view/',
        'people' => $people
    ]);
} catch (Exception $e) {
    echo $e->getMessage();
}