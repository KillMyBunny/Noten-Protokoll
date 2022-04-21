<?php

namespace App\Controller;

use App\Repository\Homerepository;
use App\View\View;

class HomeController
{
    public function index()
    {
        $userRepository = new HomeRepository();

        $view = new View('home/index');
        $view->title = 'Benutzer';
        $view->heading = 'Benutzer';
        //$view->homes = $HomeRepository->readAll();
        $view->display();
    }
}