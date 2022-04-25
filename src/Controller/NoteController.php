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
<<<<<<< HEAD

=======
        $noteRepository = new NoteRepository;
>>>>>>> 462c0226683fe36311176a8b3f5daf3fd5966c3f
        $View = new View('Note/create');
        $View->title= 'Note erstellen';
        $View->heading = 'Note erstellen';
        $View->userId = $_SESSION['id'];
        $View->notes = $noteRepository->readAll();
        $View->display();



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

        $noteRepository = new NoteRepository();

        $view = new View('Note/update');

        $view->title = 'Note bearbeiten';

        $view->heading = 'Note bearbeiten';

        $view->kommentar = $noteRepository->readById($_GET['id']);

        $view->display();

    }
    public function doUpdate(){
        {







            $id = htmlentities($_POST['id']);

            $note = htmlentities($_POST['Note']);

            $datum = htmlentities($_POST['Datum']);



            $noteRepository = new KommentarRepository();

            $noteRepository->doUpdateById($id, $note, $datum);



            header('Location: /note/index');

            }


            // Anfrage an die URI /spiele weiterleiten (HTTP 302)

            header('Location: /note/index');
        }

    public function delete(){
        $noteRepository = new NoteRepository();
        $noteRepository->deleteById($_GET['id']);

        header('Location: /note');
    }
}