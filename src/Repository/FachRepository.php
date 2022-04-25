<?php

namespace App\Repository;
use App\Database\ConnectionHandler;
use Exception;

class FachRepository extends Repository
{
    protected $tableName = 'note';

    public function create ($f_name){
        $query = "INSERT INTO $this->tableName ($f_name)";

        $statement = ConnectionHandler::getConnection()->prepare($query);
        $statement->bind_param('s', $f_name);

        if (!$statement->execute()){
            throw new Exception($statement-error);
        }

        return $statement->insert_id;
    }
}