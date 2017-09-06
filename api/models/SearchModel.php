<?php

require_once "DB.php";

class SearchArt extends DB {
    function getAll($search = "", $start = 0, $limit = 50) {
        $sql = 'select * from articles';
        $data = array();
        
        if ($search !== "") {
            $data = ['%' . $search . '%'];
            $sql .= ' where name like ?';
        }
        
        $sql .= ' limit ' . $start . ',' . $limit;
        
        return $this->selectAll($sql, $data);
    }
    
    function countArticles($search) {
        
        $sql = "select id from articles";
        $data = [];
        
        if ($search !== "") {
            $data = ['%' . $search . '%'];
            $sql .= ' where name like ?';
        }
        
        $this->selectAll($sql, $data);
        return $this->countAll();
    }
}