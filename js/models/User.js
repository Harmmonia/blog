/*global $ */
 function User (options) {
        if (options) {
            this.id= options.id;     
            this.email= options.email;
            this.password= options.password;
            this.name= options.name;
            this.age= options.age;
            this.gender= options.gender;
        }
        
    }

User.prototype.getSession=function() {
    return $.ajax ({
        url: "https://blog-katea.c9users.io/api/login/check-session",
        type: "POST",
        success: function (resp) {
        
        },
        error: function (xhr, status, error) {
            
        }
    });
}

User.prototype.logout=function() {
    return $.ajax ({
        url: "https://blog-katea.c9users.io/api/users/logout",
        type: "POST",
        success: function (resp) {
        
        },
        error: function (xhr, status, error) {
            alert ("Logout error!");
        }
    });
}

User.prototype.login= function () {
    var dataLogin= {
        email: this.email,
        password: this.password
    }
 var that = this;
    return $.ajax ({
        url: "https://blog-katea.c9users.io/api/users/login",
        type: "POST",
        data: dataLogin,
        // data: {
        //     email: mail,
        //     password: pass,
        // },
       
        success: function (resp) {
        
        },
       
        error: function (xhr, status, error) {
            alert ("Login error!");
        }
    });
    
   
};
