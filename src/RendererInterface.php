<?php

namespace Omega\Core;

interface RendererInterface
{
    public function render($id, array $params) : string;
}
