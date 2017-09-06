<?php
require_once "DB.php";

class CommentsModel extends DB {

  function selectComments($id) {
        $sql= 'select * from comments where article_id = '. $id;
        return $this->selectAll($sql);
    }
  function addComment($item) {
        $data= [$item['article_id'],
                 $item['user_name'],
                    $item['content']];
     
     $sql = 'insert into comments (article_id, user_name, content) values (?, ?, ?)';
    
     return $this->insertItem($sql, $data);
    }
    
     function deleteComment($item) {
      $data= [$item['user_id']= $_SESSION['id']];
     $sql= 'delete from comments where user_id = ? ';
      return $this->deleteItem($sql, $data);
    }
}
?>