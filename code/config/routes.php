<?php

use ots\Controller\IndexController;
use ots\Controller\SearchController;

$app->get('/', IndexController::class . ':indexAction');
$app->post('/search', SearchController::class);
