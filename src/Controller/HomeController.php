<?php

namespace App\Controller;

use App\View\View;

class HomeController
{
    public function index()
    {
        // In diesem Fall möchten wir dem Benutzer die View mit dem Namen
        //   "default_index" rendern. Wie das genau funktioniert, ist in der
        //   View Klasse beschrieben.
        if (!isset($_SESSION)){
            session_start();
        }
        $view = new View('/Home/index');
        $view->title = 'Startseite';
        $view->heading = 'Login';
        $view->display();
    }


}