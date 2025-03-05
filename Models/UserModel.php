<?php

namespace Models;

class UserModel extends BaseModel
{
    function getAll()
    {
        $result = $this->query('SELECT * FROM user');
        $data = [];
        while($row = $result->fetchArray(SQLITE3_ASSOC)){
            $data[] = $row;
        }
        return $data;
    }
}
