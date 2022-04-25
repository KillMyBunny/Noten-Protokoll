<?php

namespace App\Controller;

use App\Repository\FachRepository;
use App\Repository\NoteRepository;
use App\Repository\UserRepository;
use App\View\View;

class NoteController
{
    public function index(){

        $noteRepository = new NoteRepository;
        $fachRepository = new FachRepository;

        $view = new View('Note/index');
        $view->title = 'Note';
        $view->heading = 'Note';
        session_start();
        if (!isset($_SESSION)){
            header('/default');
        }
                    //TODO REPLACE WITH USER_ID FROM SESSION
        $userId = $_SESSION['id'];

        $view->notes = $noteRepository->readByUserId($userId);
        $view->display();
    }
    public function create(){


    }

    public function doCreate()
    {
            session_start();
            $Note = $_POST['noteInput'];
            $userID = $_SESSION['id'];
            $Date = $_POST['dateInput'];
            $fachID = 1;
            $noteRepository = new NoteRepository();
            $noteRepository->create($Note, $Date, $userID,$fachID);


        // Anfrage an die URI /user weiterleiten (HTTP 302)
        header('Location: /note');
    }

    public function update()

    {
        $View = new View('Note/update');
        $View->title= 'Note bearbeiten';
        $View->heading = 'Note bearbeiten';
        $View->display();

    }
    public function doUpdate(){
        {

            if (isset($_POST['send'])) {

                $id = $_POST['id'];

                $note = filter_var($_POST['note'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

                $datum = filter_var($_POST['datum'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);




                $noteRepository = new NoteRepository();

                $noteRepository->update($note, $datum, $id);

            }


            // Anfrage an die URI /spiele weiterleiten (HTTP 302)

            header('Location: /note/index');
        }
    }
    public function delete(){
        $noteRepository = new NoteRepository();
        $noteRepository->deleteById($_GET['id']);

        header('Location: /note');
    }
}