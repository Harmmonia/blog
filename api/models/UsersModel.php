<?php

require_once "DB.php";

class UsersModel extends DB {
    function getAll($search = "", $start = 0, $limit = 50) {
        $sql = 'select * from users'; 
        $data = array();
        
        if ($search !== "") {
            $data = ['%' . $search . '%'];
            $sql .= ' where name like ?';
        }
      
        $sql .= ' limit ' .$start . ',' .$limit;
        return $this->selectAll($sql, $data);
    }
    function countUsers($search) {
        
        $sql = "select id from users";
        $data = [];
        
        if ($search !== "") {
            $data = ['%' . $search . '%'];
            $sql .= ' where name like ?';
        }
        
        
        $this->selectAll($sql, $data);
        return $this->countAll();
    }
    
    function selectUser($email, $password) {
        $data= [$email,
                $password];
        $sql = 'select name from users where (email = ? and password = ?) limit 1';
        return $this->selectAll($sql, $data);
    }
}
     
?>