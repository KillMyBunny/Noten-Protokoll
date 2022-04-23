<?php

namespace App\Controller;

use App\Repository\NoteRepository;
use App\Repository\UserRepository;
use App\View\View;

class NoteController
{
    public function index(){

        $noteRepository = new NoteRepository;

        $view = new View('Note/index');
        $view->title = 'Note';
        $view->heading = 'Note';

        //TODO REPLACE WITH USER_ID FROM SESSION
        $userId = 1;

        $view->notes = $noteRepository->readByUserId($userId);
        $view->display();
    }
    public function create(){
        $View = new View('Note/create');
        $View->title= 'Note erstellen';
        $View->heading = 'Note erstellen';
        $View->display();
    }

    public function doCreate()
    {
        if (isset($_POST['noteSave'])) {
            $Note = $_POST['noteInput'];
            $Date = $_POST['dateInput'];
            $userID = $_POST['userLable'];

            $userRepository = new UserRepository();
            $userRepository->create($Note, $Date, $userID);
        }

        // Anfrage an die URI /user weiterleiten (HTTP 302)
        header('Location: /Note');
    }
    public function delete(){
        $noteRepository = new NoteRepository();
        $noteRepository->deleteById($_GET['id']);

        header('Location: /note');
    }
}