<?php

use Slim\App;
use Slim\Factory\AppFactory;
use Psr\Container\ContainerInterface;
use ots\Repository\WordRepository;
use ots\Repository\PdoWordRepository;
use PDO;


$dependencies = [];

$dependencies[PDO::class] = 
    \DI\create(PDO::class)->constructor(
        \DI\env('DB_DSN'),
        \DI\env('DB_USERNAME'),
        \DI\env('DB_PASSWORS'),
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false,
    ]);

$dependencies[WordRepository::class] = function(ContainerInterface $container) {
    return new PdoWordRepository($container->get(PDO::class));
};

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