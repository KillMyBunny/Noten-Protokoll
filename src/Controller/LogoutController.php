<?php

namespace App\Controller;

use App\Service\AuthenticationService;
use App\View\View;

class LogoutController
{
    public function index(){


        $view = new View('logout/index');
        $this->logout();
        $view->title = 'Note';
        $view->heading = 'Note';
        $view->display();
    }

    public function logout(){
        $authenficationService = new AuthenticationService();
        $authenficationService->logout();
        header('Location: /default');
    }
}