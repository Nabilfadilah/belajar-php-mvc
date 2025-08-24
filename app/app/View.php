<?php

namespace Nabil\MVC\app;

class View
{

    public static function render(string $view, $model)
    {
        require __DIR__ . '/../view/' . $view . '.php';
    }
}
