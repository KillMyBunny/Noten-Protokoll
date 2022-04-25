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
        if (!isset($_SESSION)){
            session_start();
        }
                    //TODO REPLACE WITH USER_ID FROM SESSION
        $userId = $_SESSION['id'];

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
            session_start();
            $Note = $_POST['noteInput'];
            $userID = $_SESSION['id'];
            $Date = $_POST['dateInput'];

            $noteRepository = new NoteRepository();
            $noteRepository->create($Note, $Date, $userID);


        // Anfrage an die URI /user weiterleiten (HTTP 302)
        header('Location: /note');
    }

    public function update(){

    }
    public function doUpdate(){

    }
    public function delete(){
        $noteRepository = new NoteRepository();
        $noteRepository->deleteById($_GET['id']);

        header('Location: /note');
    }
}