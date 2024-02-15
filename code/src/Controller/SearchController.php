<?php

namespace ots\Controller;

use ots\Middleware\MustacheMiddleware;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;


class SearchController
{
    public function __invoke(ServerRequestInterface $request, ResponseInterface $response)
    {
        $template = $request->getAttribute(MustacheMiddleware::TEMPLATE_KEY);
        $template->setTemplate('search');

        $formData = $request->getParsedBody()['search'] ?? '';

        $template->setData(['searchTerm' => $formData]);

        return $response;
    }
}