<?php

namespace Omega\Core\Routes;

use Omega\Core\RouteInterface;

class SimpleRoute implements RouteInterface
{
    private $method;
    private $path;

    /**
     * @var ControllerInterface
     */
    private $controller;

    public function __construct($method, $path, ControllerInterface $controller)
    {
        $this->method = $method;
        $this->path = $path;
        $this->controller = $controller;
    }

    public function getMethod() : string
    {
        return $this->method;
    }

    public function getPath() : string
    {
        return $this->path;
    }

    /**
     * @return ControllerInterface
     */
    public function getController() : ControllerInterface
    {
        return $this->controller;
    }

}
