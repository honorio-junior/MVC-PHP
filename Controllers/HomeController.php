<?php
namespace Controllers;

require_once dirname(__DIR__) . '/autoload.php';

use Models\UserModel;
use Views\RenderView;


class HomeController
{
    function index()
    {
        return new RenderView('index');
    }

}
