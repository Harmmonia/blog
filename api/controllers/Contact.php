<?php
require "models/ContactModel.php";

class Contact {
    private $contactModel;
    
    function __construct() {
        $this->contactModel = new ContactModel();
    }
    function addItem() {
        return $this->contactModel->addItem($_POST);    
    }   
}