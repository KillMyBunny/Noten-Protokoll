<?php

namespace App\Controller;

use App\View\View;
use App\Service\AuthenticationService;

class LoginController
{
    public function index()
    {
        $result = AuthenticationService::login($_POST['username'], $_POST['password']);


       if($result){
           header('Location: /note');
       } else {
           echo 'Try Again!';
           $defaultController = new DefaultController();
           $defaultController->index();
       }
    }

    public function logout() {
        AuthenticationService::logout();

        $defaultController = new DefaultController();
        $defaultController->index();
    }
}