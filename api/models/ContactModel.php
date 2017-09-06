<?php
require "DB.php";

class ContactModel extends DB {
     function addItem($item) {
        $data = [$item['name'],
                    $item['email'],
                    $item['message']];
        $sql = "insert into contact (name, email, message) values (?, ?, ?)";
        return $this->insertItem($sql, $data);
    }
}