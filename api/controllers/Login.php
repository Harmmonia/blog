<?php
require "models/UsersModel.php";

//session_start();
class Login {
    private $usersModel;
    function __construct() {
    $this->usersModel = new UsersModel();
    }
             
    function loginUser() {
        $email=$_POST["email"];
        $passwd=$_POST["password"];
        
        // if (isset($email)){ 
            $errors=array();
            if (empty($email) || empty($passwd)) {
                $errors['errors'] = "Required credentials";
            }
    //   }
        if (isset($email) && isset($passwd)) {
            
            // INSERT INTO `users`(`email`, `password`, `name`, `age`, `gender`, `created_at`, `uptated_at`) VALUES ('admin@owl.com',ENCRYPT('test1234', 'admin@owl.com'),'ADMIN',1,'F',NOW(),NOW())
            $password = crypt($passwd, $email);
            
            // check user from db
            $result = $this->usersModel->selectUser("admin@owl.com", "adQpER2pZjCdo");
            if ($result) {
                //session_start();
                $_SESSION['adminIsLogged'] = TRUE;
                $_SESSION['email']= $email;
                return "Welcome to admin page!";
            } else {
                 return $errors= "Invalid credentials";
            }
                   
        } else {
             return $errors= "Invalid credentials";
        }
    }
    
    function logoutUser() {
        $_SESSION = array();
        unset($_SESSION["adminIsLogged"]);
        unset($_SESSION["email"]);
        session_destroy();
         
        return ["success"=>TRUE];
    }
    
   function checkSession() {
        //if (isset($_SESSION["adminIsLogged"]) && ($_SESSION["adminIsLogged"] == TRUE)) {
            return ["adminIsLogged"=>TRUE, "email" => $_SESSION["email"]];  
        /*} 
        else {
            http_response_code(401);  
            return ["error"=>"UNAUTHORIZED"];
        }*/
    }
}
?>

