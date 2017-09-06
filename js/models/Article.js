//functie constructor
/* global $*/
function Article(options){
    if (options) {
    this.id=options.id;
    this.title=options.title;
    this.content=options.content;
    this.file=options.file;
    this.created_at=options.created_at;
    }
    
}

Article.prototype.add= function(formData) {
      return $.ajax({
            url: "https://blog-katea.c9users.io/api/articles/add",
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success:function() {
                alert("Succes! Your operation is complete.");
            },
            error:function(xhr, status, error){
               alert ("Error! Invalid request");
            }
     });
};

Article.prototype.editArticle= function () {
     var that = this;
     var dataToSend = {
       title: this.title,
       content: this.content,
       id: this.id,
       created_at: this.created_at
   };
    return $.ajax ({
         url: "https://blog-katea.c9users.io/api/articles/edit",
         type: "PUT",
         data: dataToSend,
         success: function (resp) {
            //   var articleToEdit = new Article (resp);
            //   that.models= [];
            //   that.models.push(articleToEdit);
          },
          error: function (xhr, status, error) {
                // alert ("Something went wrong!");
                console.log("Unable to edit this article: " + status);
         }
    
    });
};
    
