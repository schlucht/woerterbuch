<?php

namespace ots\Controller;

use ots\Middleware\MustacheMiddleware;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class IndexController
{

    public function indexAction(Request $request, Response $response, array $args= [])
    {        
        $template = $request->getAttribute(MustacheMiddleware::TEMPLATE_KEY);

        $template->setTemplate('index');
        $template->setData(['text' => 'World and Earth!']);

        return $response;
    }
}