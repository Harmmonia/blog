{"changed":false,"filter":false,"title":"admin.js","tooltip":"/js/views/admin.js","value":"/* global $ */\n/* global User, Users */\n$(document).ready(onHtmlLoaded);\n\nfunction onHtmlLoaded() {\n    \n    var homepage = \"https://blog-katea.c9users.io/\";\n    \n    var showContent = function() {\n        document.getElementsByTagName(\"body\")[0].style.display = \"block\";\n    }\n    \n    var user = new User();\n    user.getSession()\n        .fail(function() {\n             window.location.href= homepage; \n        })\n        .done(function(result) {\n            showContent();\n        });\n    \n    \n    $(\"#logout-btn\").on(\"click\", function(ev){\n        ev.preventDefault();\n        \n        var userXhr = user.logout();\n        userXhr.done(function() {\n            window.location.href= homepage;   \n        });   \n    });\n    \n    \n           \n}","undoManager":{"mark":-1,"position":-1,"stack":[]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":17,"column":32},"end":{"row":17,"column":32},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1486032532821}