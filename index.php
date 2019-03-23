<?php
require __DIR__ . '/vendor/autoload.php';

try {
    $containerBuilder = new DI\ContainerBuilder();
    $containerBuilder->addDefinitions('config.php');
    $container = $containerBuilder->build();
    $personService = $container->get('Example\\IPersonService');
    $allPeople = $personService->findAllByName("oi");
    
    foreach ($allPeople as $person) {
        echo $person->getName().'<br>';
    }
} catch (Exception $e) {
    echo $e->getMessage();
}