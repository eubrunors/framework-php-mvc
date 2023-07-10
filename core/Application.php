<?php

namespace app\core;

/**
 *Class
 * .
 */
class Application
{
    public Router $router;
    public function __construct()
    {
        $this->router = new Router();
    }
}