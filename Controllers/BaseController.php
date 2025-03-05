<?php
namespace Controllers;

class BaseController
{
    function view(string $view, ?array $data = null)
    {
        if(!empty($data)){
            extract($data);
        }

        require_once dirname(__DIR__) . '/views/' . $view . '.php';
    }
}
