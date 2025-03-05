<?php
namespace Controllers;

use Models\UserModel;

class HomeController extends BaseController
{
    function index()
    {
        $db = new UserModel;
        $users = $db->getAll();
        return $this->view('index', ['users' => $users]);
    }

}
