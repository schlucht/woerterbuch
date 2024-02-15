<?php

use ots\Middleware\MustacheMiddleware;

$app->addMiddleware($container->get(MustacheMiddleware::class));