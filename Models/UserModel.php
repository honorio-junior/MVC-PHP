<?php

namespace Models;

class UserModel extends \SQLite3
{
    function __construct()
    {
        $this->open( __DIR__ .'/database.sqlite');
    }
    function getAll()
    {
        // $result = $this->query('SELECT * FROM user');
        // $data = [];
        // while($row = $result->fetchArray(SQLITE3_ASSOC)){
        //     $data[] = $row;
        // }
        // return $data;
    }
}
