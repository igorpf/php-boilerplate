<?php
require_once __DIR__ . '/vendor/autoload.php';

function buildContainer() : DI\Container {
    $containerBuilder = new DI\ContainerBuilder();
    $containerBuilder->addDefinitions('config.php');
    return $containerBuilder->build();
}

function buildTwig() : \Twig\Environment {
    $loader = new \Twig\Loader\FilesystemLoader([
        'view/', 'view/templates/'
    ]);
    return new \Twig\Environment($loader, [
            'cache' => 'cache/',
            'debug' => true,
            'auto_reload' => true
        ]
    );
}

$container = buildContainer();
$twig = buildTwig();