<?php

namespace Omega\Core\Controllers;

use Omega\Core\RendererInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

abstract class AbstractRenderedController extends AbstractController
{
    const TEMPLATE_ID = null;

    /**
     * @var RendererInterface
     */
    protected $renderer;

    public function setRenderer(RendererInterface $renderer)
    {
        $this->renderer = $renderer;
        return $this;
    }

    public function getHandle(RequestInterface $request, ResponseInterface $response) : ResponseInterface
    {
        $response->getBody()->write($this->renderer->render(static::TEMPLATE_ID, []));
        return $response;
    }
}
