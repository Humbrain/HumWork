<?php

namespace Humwork;

use Humwork\middlewares\Middleware;
use Humwork\modules\Module;

class App
{
    /** @var Module[] */
    private array $modules = [];

    /** @var Middleware[] */
    private array $middlewares = [];


    public function __construct()
    {
    }

    /**
     * Add a module to the app
     * @return $this
     *
     */
    public function addModule(Module $module): self
    {
        $this->modules[] = $module;
        return $this;
    }

    /**
     * Add a middleware to the app
     * @return $this
     *
     */
    public function addMiddleware(Middleware $middleware): self
    {
        $this->middlewares[] = $middleware;
        return $this;
    }


    /**
     * Run the app
     */
    public function run()
    {
    }
}
