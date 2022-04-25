<?php

namespace App\Repository;

use App\Database\ConnectionHandler;
use Exception;

class NoteRepository extends Repository
{
    protected $tableName = 'note';

    public function create ($Note, $Date, $userID, $fachID){
        $query = "INSERT INTO $this->tableName (Note, Date, userID, fachID) VALUES (?, ?, ?,?)";

        $statement = ConnectionHandler::getConnection()->prepare($query);
        $statement->bind_param('dsii', $Note, $Date, $userID, $fachID);

        if (!$statement->execute()){
            throw new Exception($statement-error);
        }

        return $statement->insert_id;
    }

    public function readByUserId($id)
    {
        $query = "SELECT * FROM {$this->tableName}
                           JOIN fach ON  fach.id = {$this->tableName}.fachID
                           WHERE userID=?";

        $statement = ConnectionHandler::getConnection()->prepare($query);
        $statement->bind_param('i', $id);

        $statement->execute();

        $result = $statement->get_result();
        if (!$result) {
            throw new Exception($statement->error);
        }

        $rows = array();
        while ($row = $result->fetch_object()) {
            $rows[] = $row;
        }

        return $rows;
    }
    public function doUpdateById($id, $note, $datum){

        $query = "UPDATE {$this->tableName} SET note=?, datum=? WHERE id=?";



        $statement = ConnectionHandler::getConnection()->prepare($query);

        $statement->bind_param('ssi', $note, $datum, $id);



        $statement->execute();



        $result = $statement->get_result();



        if (!$result) {

            throw new Exception($statement->error);

        }



        $row = $result->fetch_object();



        $result->close();



        return $row;

    }

}


