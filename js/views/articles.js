/* global $ */
/* global Articles */
/* global Article */
$(document).ready(onHtmlLoaded);

function onHtmlLoaded() {
    // var searchValue= getUrlParam("search");
    // var pageValue= getUrlParam("page");
    var articlesContainer = $("#js-objects");
    var paginationContainer= $('#pagination');
     var articles= new Articles();
     var searchValue = "";
        var articlesShow= articles.getAll();
       articlesShow.done(function(){
         listArticles();
       
        for(var i=1; i <= articles.nrPage; i++) {
        var btnPage = $('<button data-value='+ i +'>' + '</button>'); 
            var numberPage= i;
            btnPage.html(numberPage);
            paginationContainer.append(btnPage);
            btnPage.addClass("css-buttons");
            
            btnPage.on("click", function(){
             var page= $(this).data("value");
             articles.getAll(searchValue, page).done(listArticles);
            });
        }
        
        var searchBtn= $('#js-btn');
        searchBtn.on("click",function(ev){
         ev.preventDefault();
         searchValue = $("input[name='search']").val();
         articles.getAll(searchValue, "").done(listArticles) ;
                
            });
        
    });
    
    function listArticles () {
        articlesContainer.html('');

          for (var i=0; i<articles.models.length; i++) {
        
           var containerBox= $("<div></div>").addClass("container-box");
           
           var articleBox = $("<div></div>").addClass("article-box");
           
           containerBox.append(articleBox);
           
           var articleId=articles.models[i].id;
           var textContainer= $("<div article-id=" +articleId+ ">" + "</div>").addClass("articleText");
           var dateCreate= $("<p>" + articles.models[i].created_at + "</p>").addClass("home-header");
           var imageContainer = $("<img>").addClass("articleImage");
           textContainer.addClass("preview");
        
            imageContainer.attr("src", "../../uploads/" + articles.models[i].file);
            var title= $("<h3>" + "<a href=\"https://blog-katea.c9users.io/article.html?id=" + articleId +"\">" +articles.models[i].title+"</a></h3>").addClass("home-title");
            var content= $("<p>"+articles.models[i].content+ "</p>").addClass("post");
            textContainer.append(title, dateCreate, content);
            articleBox.append(imageContainer, textContainer);
            articlesContainer.append(articleBox);
       
       }  
    }
    
function getUrlParam(name){
    var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
    if (results==null){
       return null;
    }
    else{
       return results[1] || 0;
    }
    
}
}