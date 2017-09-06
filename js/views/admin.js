/* global $ */
/* global User, Users */
$(document).ready(onHtmlLoaded);

function onHtmlLoaded() {
    
    var homepage = "https://blog-katea.c9users.io/";
    
    var showContent = function() {
        document.getElementsByTagName("body")[0].style.display = "block";
    }
    
    var user = new User();
    user.getSession()
        .fail(function() {
             window.location.href= homepage; 
        })
        .done(function(result) {
            showContent();
        });
    
    
    $("#logout-btn").on("click", function(ev){
        ev.preventDefault();
        
        var userXhr = user.logout();
        userXhr.done(function() {
            window.location.href= homepage;   
        });   
    });
    
    
           
}