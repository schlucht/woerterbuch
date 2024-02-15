<?php

use Slim\App;
use DI\ContainerBuilder;

require_once __DIR__ . '/vendor/autoload.php';

$containerBuilder = new ContainerBuilder();
$containerBuilder->addDefinitions(__DIR__ . '/config/services.php');
$container = $containerBuilder->build();

$app = $container->get(App::class);
$app->addErrorMiddleware(true, true, true);

require_once __DIR__ . '/config/middleware.php';
require_once __DIR__ . '/config/routes.php';


return $app;
