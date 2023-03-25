<?php

namespace Core;

abstract class Controller
{
    public function renderView(string $view, array $viewData = [])
    {
        require VIEWS . "/$view.php";
    }
}