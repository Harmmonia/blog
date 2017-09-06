/*global $ */
/*global Comment */
function Comments () {
   
    this.models=[];
}
Comments.prototype.getComments = function(articleId){
     var that= this;
      return $.ajax({
            url:"https://blog-katea.c9users.io/api/comments/item",
            type:"GET",
            data:{
                id:articleId
            },
            success:function(resp){
              
                  for (var i=0; i<resp.length; i++) {
                     var selectedComments= new Comment (resp[i]);
                    //  that.models= [];
                     that.models.push(selectedComments);
                
                  }
                   
            },
            error:function(){
                alert("Something went wrong! Oops!");
            }
        });
    };
    