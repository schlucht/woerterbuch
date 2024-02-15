<?php


use Slim\App;
use Slim\Factory\AppFactory;
use Psr\Container\ContainerInterface;


$dependencies = [];

$dependencies[App::class] = \Di\factory([AppFactory::class, 'createFromContainer']);

$dependencies['mustache.templateDir'] = __DIR__ . '/../templates';
$dependencies['mustache.fileLoader'] = function(ContainerInterface $container) {
    return new Mustache_Loader_FilesystemLoader($container->get('mustache.templateDir'));
};
$dependencies[Mustache_Engine::class] = function(ContainerInterface $container) {
    return new Mustache_Engine([
        'loader' => $container->get('mustache.fileLoader'),
        'partioalloader' => $container->get('mustache.fileLoader'),
    ]);
};

return $dependencies;