<?php
require "models/CommentsModel.php";

class Comments {
  
    private $commentsModel;
    
    function __construct() {
        $this->commentsModel = new CommentsModel();
    }
    
    
    function selectComments() {
        if (isset($_GET['id'])) {
            return $this->commentsModel->selectComments($_GET['id']);
        }
    }
    
    function addComment() {
        // if (($_POST['user_name'] == $_SESSION['name']) || ($_POST['user_name'] == $_SESSION['adminName'])){ 
           return $this->commentsModel->addComment($_POST);
        // }
    }
    
    function deleteComment() {
        global $DELETE; 
        return $this->commentsModel->deleteComment($DELETE);
    }
}
?>