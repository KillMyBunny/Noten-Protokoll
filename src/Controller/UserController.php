<?php

namespace App\Controller;

use App\Repository\UserRepository;
use App\Service\AuthenticationService;
use App\View\View;

/**
 * Siehe Dokumentation im DefaultController.
 */
class UserController
{
    public function index()
    {
        $view = new View('user/index');

        $view->title = 'Register';
        $view->display();
    }

    public function create()
    {
        AuthenticationService::restrictAuthenticated();

        $view = new View('user/create');
        $view->title = 'Benutzer erstellen';
        $view->heading = 'Benutzer erstellen';
        $view->display();
    }

    public function doCreate()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];


        $userRepository = new UserRepository();
        $userRepository->create($username, $password);

        // Anfrage an die URI /user weiterleiten (HTTP 302)
        header('Location: /default');
    }

    public function delete()
    {
        AuthenticationService::restrictAuthenticated();

        $userRepository = new UserRepository();
        $userRepository->deleteById($_GET['id']);

        // Anfrage an die URI /user weiterleiten (HTTP 302)
        header('Location: /user');
    }
}
