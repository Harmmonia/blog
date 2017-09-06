/* global $ */
/* global User, Users */
$(document).ready(onHtmlLoaded);

function onHtmlLoaded() {
    // var user = new Users();
    
    $("#login-btn").on("click", function(ev){
        ev.preventDefault();
      var userEmail= $("#email").val();
      var userPassword= $("#password").val();
      
      var userLogin = new User ({
          email: userEmail,
          password: userPassword
      });
      var userXhr = userLogin.login();
      userXhr.done(function() {
       
        window.location.href= "https://blog-katea.c9users.io/admin.html";   
      });   
    });
    
    
           
}