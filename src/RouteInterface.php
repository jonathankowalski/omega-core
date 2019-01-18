<?php

namespace Omega\Core;

interface RouteInterface
{
    public function __construct($method, $path, ControllerInterface $controller);
    public function getMethod() : string;
    public function getPath() : string;
    public function getController() : ControllerInterface;
}
