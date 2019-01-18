<?php

namespace Omega\Core;

class Bootstrap
{
    /**
     * @var EngineInterface
     */
    private $engine;

    /**
     * @var ErrorHandlerInterface[]
     */
    private $errorHandlers;

    public function setEngine(EngineInterface $engine) : Bootstrap
    {
        $this->engine = $engine;
        return $this;
    }

    public function addErrorHandler(ErrorHandlerInterface $handler) : Bootstrap
    {
        $hash = spl_object_hash($handler);
        if (!isset($this->errorHandlers[$hash])) {
            $this->errorHandlers[$hash] = $handler;
            $this->errorHandlers[$hash]->handle();
        }
        return $this;
    }

    /**
     * @param RouteInterface[] $routes
     */
    public function addRoutes(array $routes) : Bootstrap
    {
        $this->engine->addRoutes($routes);
        return $this;
    }

    public function getApp() : EngineInterface
    {
        return $this->engine;
    }
}
