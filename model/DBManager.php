<?php

abstract class DBManager{
    protected function dbConnect()
    {
        $db = new \PDO('mysql:host=localhost;dbname=project_php;charset=utf8', 'root', '');
        return $db;
    }

    protected function getAll($table, $obj)
    {
        $var = [];
        $req = $this->dbConnect()->prepare('SELECT * FROM ' .$table. ' ORDER BY id desc');
        $req->execute();
        while($data = $req->fetch(PDO::FETCH_ASSOC))
        {
            $var[] = new $obj($data);
        }
        return $var;
        $req->closeCursor();
    }
    //test
}