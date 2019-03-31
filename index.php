<?php
require __DIR__ . '/vendor/autoload.php';

try {
    $containerBuilder = new DI\ContainerBuilder();
    $containerBuilder->addDefinitions('config.php');
    $container = $containerBuilder->build();
    $personService = $container->get('Example\\IPersonService');
    $allPeople = $personService->findAllByName("oi");

    $latte = new Latte\Engine;
    $latte->setTempDirectory('cache/');
    $parameters['items'] = ['one', 'two', 'three'];
    $latte->render('view/index.latte', $parameters);
    

} catch (Exception $e) {
    echo $e->getMessage();
}