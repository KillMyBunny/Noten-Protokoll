<?php

namespace App\Repository;

use App\Database\ConnectionHandler;
use Exception;

class NoteRepository extends Repository
{
    protected $tableName = 'note';

    public function create ($Note, $Date, $userID){
        $query = "INSERT INTO $this->tableName ($Note, $Date, $userID)";

        $statement = ConnectionHandler::getConnection()->prepare($query);
        $statement->bind_param('isi', $Note, $Date, $userID);

        if (!$statement->execute()){
            throw new Exception($statement-error);
        }

        return $statement->insert_id;
    }

    public function readByUserId($id)
    {
        $query = "SELECT * FROM {$this->tableName} WHERE userID=?";

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
}

