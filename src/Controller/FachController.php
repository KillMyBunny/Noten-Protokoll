<?php

namespace App\Controller;

use App\View\View;

class FachController
{
    public function index()
    {
        // In diesem Fall möchten wir dem Benutzer die View mit dem Namen
        //   "default_index" rendern. Wie das genau funktioniert, ist in der
        //   View Klasse beschrieben.
        $view = new View('Fach/index');
        $view->title = 'Startseite';
        $view->heading = 'Login';
        $view->display();
    }
}