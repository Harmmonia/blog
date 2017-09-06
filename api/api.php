<?php
session_start();
$routes["login/check-session"]= array(
                    "class"=>"Login",
                    "method"=>"checkSession");
                    
$routes["articles"]= array(
                    "class"=>"Articles",
                    "method"=>"getAll");

$routes["articles/item"]= array(
                    "class"=>"Articles",
                    "method"=>"getItem");

                 
$routes["articles/add"]= array(
                    "class"=>"Articles",
                    "method"=>"addItem");

$routes["articles/edit"]= array(
                    "class"=>"Articles",
                    "method"=>"editItem");
                    
$routes["articles/delete"]= array(
                    "class"=>"Articles",
                    "method"=>"deleteItem");
 
 
 
// $routes["comments"] = array(
//                           "class"=>"Comments",
//                           "method"=>"getAll");
$routes["comments/item"] = array(
                          "class"=>"Comments",
                          "method"=>"selectComments");                             
$routes["comments/add"] = array(
                          "class"=>"Comments",
                          "method"=>"addComment");                 
$routes["comments/delete"] = array(
                          "class"=>"Comments",
                          "method"=>"deleteComment");
$routes["users"] = array(
                          "class"=>"Users",
                          "method"=>"getAll");
$routes["users/login"] = array(
                          "class"=>"Login",
                          "method"=>"loginUser"); 
                          
$routes["users/logout"] = array(
                          "class"=>"Login",
                          "method"=>"logoutUser");   
$routes["users/adminLogout"] = array(
                          "class"=>"Login",
                          "method"=>"adminLogout");  
$routes["users/admin"] = array(
                          "class"=>"Login",
                          "method"=>"adminLogin");  
$routes["users/sessionAdmin"] = array(
                          "class"=>"Login",
                          "method"=>"checkAdminSession");  
                          
$routes["users/createaccount"] = array(
                          "class"=>"Login",
                          "method"=>"createAccount");
                          
$routes["contact/add"] = array (
                          "class"=>"Contact",
                          "method"=>"addItem"); 


define("API_DIR", "/api/");
$redirectUrl= $_SERVER["REDIRECT_URL"];
   $page = str_replace(API_DIR, "", $redirectUrl);
   $page = rtrim($page, "/");

if(array_key_exists($page,$routes)){    
  $method = $_SERVER['REQUEST_METHOD'];
  switch ($method) {
    case "POST":
        // POST - add data
        $content = file_get_contents("php://input");
        $data = json_decode($content, true);
       //if $data = value =received json + set data on $_POST,else exists on $_POST
        if($data){
            $_POST=$data;
        }
        break; 
    case "PUT":
        $content = file_get_contents("php://input");
        $PUT= json_decode($content, true);
        break;
    case "DELETE":
        $content = file_get_contents("php://input");
        $DELETE = json_decode($content, true);
        break;
   }  
   
require "controllers/" . $routes[$page]["class"] . ".php";
$controller=new $routes[$page]["class"];
$result=$controller->$routes[$page]["method"]();

}
else
{
    $result=["error"=>"PAGE NOT FOUND"];
    
    // echo "current status".http_response_code();
    http_response_code(404);
}

header("Content-Type: application/json");
echo json_encode($result);

?>