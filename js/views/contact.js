/* global $*/
/* global Contact*/

$(document).ready(onHtmlLoaded);

function onHtmlLoaded() {
    var contactForm = $("#contactMsj");
    contactForm.on("submit",function(ev){
        ev.preventDefault();
        
        //extract input data
        var nameText = $("input[name='name']").val();
        var emailText = $("input[name='email']").val();
        var messageText = $('#txtarea').val();

        //prepare the form data to be sent to server
        var formData = new FormData();
        formData.append("name",nameText);
        formData.append("email",emailText);
        formData.append("message",messageText);
    
        var contact = new Contact({
            name:nameText,
            email:emailText,
            message:messageText
        })
        contact.add(formData);
    });
}