<?php

namespace Omega\Core;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

interface ControllerInterface
{
    public function getHandle(RequestInterface $request, ResponseInterface $response) : ResponseInterface;
}
