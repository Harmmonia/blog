/* global $*/
/* global Article*/
function Articles() {
    this.models = [];
    this.nrPage = 1;
}

Articles.prototype.getAll = function (searchVal, pageVal) {
    var that = this;
   return $.ajax ({
        url: "https://blog-katea.c9users.io/api/articles",
        type: "GET",
        data: {
          search: searchVal,
          page: pageVal
        
        },
        success: function (resp) {
            //console.log(resp);
            that.models= [];
            for (var i=0; i<resp.items.length; i++) {
            var article = new Article (resp.items[i]);
            that.models.push(article);
            }
            that.nrPage= resp.nrPages;
            
        },
        error: function (xhr, status, error) {
            alert ("Oops! Something went wrong");
        }
    });
};

Articles.prototype.getArticle = function (articleId) {
    var that = this;
    
    return $.ajax ({
    url: "https://blog-katea.c9users.io/api/articles/item",
    type: "GET",
    data: {
      id: articleId,  
    },
    
    success: function (resp) {
    
          var selectedArticle = new Article (resp);
           that.models= [];
           that.models.push(selectedArticle);
          
    },
    error: function (xhr, status, error) {
        // alert ("Something went wrong!");
        console.log("Unable to load this article: " + status);
    }
    
    });
};

Articles.prototype.deleteArticle = function (articleId) {
    
var that = this;
     return $.ajax ({
     url: "https://blog-katea.c9users.io/api/articles/delete",
    type: "DELETE",
     data: {
      id: articleId,  
    },
    success: function (resp) {
        console.log("Article deleted");
          
    },
    error: function (xhr, status, error) {
        // alert ("Something went wrong!");
        console.log("Error! Article not deleted: " + status);
    }
    
    });
};