/* global $*/

function Contact(options) {
    this.id = options.id;
    this.name = options.name;
    this.email = options.email;
    this.message = options.message;
    this.created_at = options.created_at;
}

Contact.prototype.add = function(formData){
    //ajax request to save message goes here
    $.ajax({
        url:"https://blog-katea.c9users.io/api/contact/add",
        type:"POST",
        data:formData,
        processData:false,
        contentType: false,
        success: function(resp) {
            alert("Your message was sent! Thank you for contacting me.");
        },
        error: function(){
            alert("Something went wrong. Message was not sent");
        }
    });
}