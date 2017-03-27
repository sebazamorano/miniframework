<?php
namespace Mini;

class View
{
    public static function render($view, $data = [])
    {
        extract($data);
        return require dirname(dirname(__DIR__)) . "/mini/views/{$view}.view.php";
    }
}