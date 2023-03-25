<?php

namespace Core;

class Application
{
    public function __construct(private Router $router = new Router()) {
    }

    public function run()
    {
        try {
            $response = $this->router->resolve();
        } catch (\RuntimeException) {
            $response = 'Not found!';
        } catch (\Throwable $e) {
            var_dump($e);
        }

        echo $response;
    }
}