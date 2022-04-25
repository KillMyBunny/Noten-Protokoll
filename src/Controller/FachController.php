<?php

namespace App\Controller;

use App\Repository\FachRepository;
use App\View\View;

class   FachController
{
    public function index(){

        $fachRepository = new FachRepository;

        $view = new View('Note/index');
        $view->title = 'Note';
        $view->heading = 'Note';
        //TODO REPLACE WITH USER_ID FROM SESSION
        $view->fach = $fachRepository->readAll();
        $view->display();
    }
}