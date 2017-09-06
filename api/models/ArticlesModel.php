<?php
require_once "DB.php";

class ArticlesModel extends DB {
 function getAll($search = "", $start = 0, $limit =3 ) {
    $sql = 'select * from articles';
    $data = array();
        
        if ($search !== "") {
            $data = ['%' . $search . '%', '%' . $search . '%'];
            $sql .= ' where title like ? or content like ?';
         }
          $sql .= ' limit ' .$start . ',' .$limit;
          
   return $this->selectAll($sql, $data);
 }
   
   function countArticles($search) {
        $sql = "select * from articles";
        $data = [];
        if ($search !== "") {
            
             $data = ['%' . $search . '%', '%' . $search . '%'];
             $sql .= ' where title like ? or content like ?';
        }
        $this->selectAll($sql, $data);
        return $this->countAll();
    }
    
    function selectArticle($id) {
        $sql = "select * from articles where id =" .$id;
        
       return $this->selectAll($sql);
    }
  
       function insertArticle($item) {
        $data = [$item['title'],
                 $item['content'],
                 $item['file']];
        $sql = 'insert into articles (title, content, file) values (?, ?, ?);';
        return $this->insertItem($sql, $data);
    }
    
    
    function updateArticle($item){
      
        $data = [$item['title'],
                 $item['content'],
                 $item['id']];
        $sql = 'update articles set title=?, content=? where id=?';
        return $this->updateItem($sql, $data); 

    }
    
    function deleteArticle($item){
        $data=[$item['id']];
        $sql = 'delete from articles where id=?';
        return $this->deleteItem($sql,$data);
    }

}
?>