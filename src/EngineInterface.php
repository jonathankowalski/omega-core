<?php

namespace Omega\Core;

use Psr\Http\Message\ServerRequestInterface;

interface EnginInterface
{
    /**
     * @param array $routes
     * @return RouteInterface[]
     */
    public function addRoutes(array $routes);
    public function run(ServerRequestInterface $request);
}
