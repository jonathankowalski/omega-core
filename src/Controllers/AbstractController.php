<?php

namespace Omega\Core\Controllers;

use Omega\Core\ControllerInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

// @todo add RequestHandlerInterface
abstract class AbstractController implements ControllerInterface
{
    public function __invoke(RequestInterface $request, ResponseInterface $response) : ResponseInterface
    {
        return $this->getHandle($request, $response);
    }
}
