{"filter":false,"title":"login&create.php","tooltip":"/templates/login&create.php","undoManager":{"mark":70,"position":70,"stack":[[{"start":{"row":0,"column":0},"end":{"row":11,"column":0},"action":"insert","lines":["if ($_SERVER['REQUEST_METHOD'] == 'POST') {","    switch ($_POST['submit']) {","    case 'Login':","        include 'login.php';","        break;","    case 'Create account':","        include 'create.php';","        break;","    }   ","    exit;","} ",""],"id":1}],[{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"insert","lines":["",""],"id":2}],[{"start":{"row":0,"column":0},"end":{"row":0,"column":1},"action":"insert","lines":["<"],"id":3}],[{"start":{"row":0,"column":1},"end":{"row":0,"column":2},"action":"insert","lines":["?"],"id":4}],[{"start":{"row":0,"column":2},"end":{"row":0,"column":3},"action":"insert","lines":["p"],"id":5}],[{"start":{"row":0,"column":3},"end":{"row":0,"column":4},"action":"insert","lines":["h"],"id":6}],[{"start":{"row":0,"column":4},"end":{"row":0,"column":5},"action":"insert","lines":["p"],"id":7}],[{"start":{"row":12,"column":0},"end":{"row":13,"column":0},"action":"insert","lines":["",""],"id":8}],[{"start":{"row":13,"column":0},"end":{"row":13,"column":1},"action":"insert","lines":["?"],"id":9}],[{"start":{"row":13,"column":1},"end":{"row":13,"column":2},"action":"insert","lines":[">"],"id":10}],[{"start":{"row":1,"column":0},"end":{"row":2,"column":0},"action":"insert","lines":["",""],"id":11}],[{"start":{"row":14,"column":2},"end":{"row":15,"column":0},"action":"insert","lines":["",""],"id":12}],[{"start":{"row":15,"column":0},"end":{"row":16,"column":0},"action":"insert","lines":["",""],"id":13}],[{"start":{"row":16,"column":0},"end":{"row":26,"column":41},"action":"insert","lines":["<form method='POST'>","    <input type=\"text\" name=\"email\" placeholder=\"enter email\">","    <input type=\"password\" name=\"password\" placeholder=\"enter password\">","    <input type=\"submit\" name=\"submit\" value=\"Login\">","    <p>Don't have an account? Create one!</p>","    <input type=\"submit\" name=\"submit\" value=\"Create account\">","    <!--<button class=button type=\"button\" name=\"create\" value=\"Create\">Create account</button>-->","<!---->","</form>","","<?php require(\"includes/footer.php\"); ?> "],"id":14}],[{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"insert","lines":["",""],"id":15}],[{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"insert","lines":["<?php require(\"includes/header.php\"); ?>  ",""],"id":16}],[{"start":{"row":24,"column":4},"end":{"row":25,"column":7},"action":"remove","lines":["<!--<button class=button type=\"button\" name=\"create\" value=\"Create\">Create account</button>-->","<!---->"],"id":17}],[{"start":{"row":24,"column":0},"end":{"row":24,"column":4},"action":"remove","lines":["    "],"id":18}],[{"start":{"row":23,"column":62},"end":{"row":24,"column":0},"action":"remove","lines":["",""],"id":19}],[{"start":{"row":25,"column":0},"end":{"row":33,"column":7},"action":"insert","lines":["<form method=\"POST\">","    <input type=\"text\" name=\"email\" placeholder=\"Email*\"/>","    <?php if (isset($errors[\"email\"])) echo $errors[\"email\"];?>","    <input type=\"password\" name=\"password\" placeholder=\"Password*\"/>","    <?php if (isset($errors[\"password\"])) echo $errors[\"password\"];?>","    <input type=\"password\" name=\"repassword\" placeholder=\"Repeat password*\"/>","    <?php if (isset($errors[\"repassword\"])) echo $errors[\"repassword\"];?>","    <input type=\"submit\" value=\"Create\"/>","</form>"],"id":20}],[{"start":{"row":25,"column":0},"end":{"row":26,"column":0},"action":"insert","lines":["",""],"id":21}],[{"start":{"row":23,"column":62},"end":{"row":23,"column":65},"action":"insert","lines":["-->"],"id":22},{"start":{"row":23,"column":4},"end":{"row":23,"column":8},"action":"insert","lines":["<!--"]}],[{"start":{"row":22,"column":3},"end":{"row":22,"column":45},"action":"remove","lines":[" <p>Don't have an account? Create one!</p>"],"id":23}],[{"start":{"row":25,"column":0},"end":{"row":25,"column":42},"action":"insert","lines":[" <p>Don't have an account? Create one!</p>"],"id":24}],[{"start":{"row":25,"column":0},"end":{"row":25,"column":1},"action":"remove","lines":[" "],"id":25}],[{"start":{"row":26,"column":0},"end":{"row":27,"column":0},"action":"insert","lines":["",""],"id":26}],[{"start":{"row":34,"column":4},"end":{"row":34,"column":41},"action":"remove","lines":["<input type=\"submit\" value=\"Create\"/>"],"id":27},{"start":{"row":34,"column":4},"end":{"row":34,"column":62},"action":"insert","lines":["<input type=\"submit\" name=\"submit\" value=\"Create account\">"]}],[{"start":{"row":35,"column":7},"end":{"row":36,"column":0},"action":"insert","lines":["",""],"id":28}],[{"start":{"row":23,"column":0},"end":{"row":24,"column":0},"action":"remove","lines":["    <!--<input type=\"submit\" name=\"submit\" value=\"Create account\">-->",""],"id":29}],[{"start":{"row":22,"column":3},"end":{"row":23,"column":0},"action":"remove","lines":["",""],"id":30}],[{"start":{"row":22,"column":2},"end":{"row":22,"column":3},"action":"remove","lines":[" "],"id":31}],[{"start":{"row":22,"column":1},"end":{"row":22,"column":2},"action":"remove","lines":[" "],"id":32}],[{"start":{"row":22,"column":0},"end":{"row":22,"column":1},"action":"remove","lines":[" "],"id":33}],[{"start":{"row":21,"column":53},"end":{"row":22,"column":0},"action":"insert","lines":["",""],"id":34},{"start":{"row":22,"column":0},"end":{"row":22,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":24,"column":0},"end":{"row":24,"column":41},"action":"remove","lines":["<p>Don't have an account? Create one!</p>"],"id":35}],[{"start":{"row":22,"column":4},"end":{"row":22,"column":45},"action":"insert","lines":["<p>Don't have an account? Create one!</p>"],"id":36}],[{"start":{"row":22,"column":45},"end":{"row":23,"column":0},"action":"insert","lines":["",""],"id":37},{"start":{"row":23,"column":0},"end":{"row":23,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":28,"column":4},"end":{"row":34,"column":62},"action":"remove","lines":["<input type=\"text\" name=\"email\" placeholder=\"Email*\"/>","    <?php if (isset($errors[\"email\"])) echo $errors[\"email\"];?>","    <input type=\"password\" name=\"password\" placeholder=\"Password*\"/>","    <?php if (isset($errors[\"password\"])) echo $errors[\"password\"];?>","    <input type=\"password\" name=\"repassword\" placeholder=\"Repeat password*\"/>","    <?php if (isset($errors[\"repassword\"])) echo $errors[\"repassword\"];?>","    <input type=\"submit\" name=\"submit\" value=\"Create account\">"],"id":38}],[{"start":{"row":23,"column":4},"end":{"row":23,"column":5},"action":"insert","lines":["v"],"id":39}],[{"start":{"row":23,"column":4},"end":{"row":23,"column":5},"action":"remove","lines":["v"],"id":40}],[{"start":{"row":23,"column":4},"end":{"row":29,"column":62},"action":"insert","lines":["<input type=\"text\" name=\"email\" placeholder=\"Email*\"/>","    <?php if (isset($errors[\"email\"])) echo $errors[\"email\"];?>","    <input type=\"password\" name=\"password\" placeholder=\"Password*\"/>","    <?php if (isset($errors[\"password\"])) echo $errors[\"password\"];?>","    <input type=\"password\" name=\"repassword\" placeholder=\"Repeat password*\"/>","    <?php if (isset($errors[\"repassword\"])) echo $errors[\"repassword\"];?>","    <input type=\"submit\" name=\"submit\" value=\"Create account\">"],"id":41}],[{"start":{"row":32,"column":0},"end":{"row":35,"column":7},"action":"remove","lines":["","<form method=\"POST\">","    ","</form>"],"id":42}],[{"start":{"row":31,"column":0},"end":{"row":32,"column":0},"action":"remove","lines":["",""],"id":43}],[{"start":{"row":0,"column":0},"end":{"row":0,"column":1},"action":"insert","lines":["/"],"id":44}],[{"start":{"row":0,"column":0},"end":{"row":0,"column":1},"action":"remove","lines":["/"],"id":45}],[{"start":{"row":0,"column":42},"end":{"row":0,"column":45},"action":"insert","lines":["-->"],"id":46},{"start":{"row":0,"column":0},"end":{"row":0,"column":4},"action":"insert","lines":["<!--"]}],[{"start":{"row":33,"column":41},"end":{"row":33,"column":44},"action":"insert","lines":["-->"],"id":47},{"start":{"row":33,"column":0},"end":{"row":33,"column":4},"action":"insert","lines":["<!--"]}],[{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"remove","lines":["<!--<?php require(\"includes/header.php\"); ?>  -->",""],"id":48}],[{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"remove","lines":["",""],"id":49}],[{"start":{"row":31,"column":0},"end":{"row":31,"column":48},"action":"remove","lines":["<!--<?php require(\"includes/footer.php\"); ?> -->"],"id":50}],[{"start":{"row":30,"column":0},"end":{"row":31,"column":0},"action":"remove","lines":["",""],"id":51}],[{"start":{"row":29,"column":0},"end":{"row":30,"column":0},"action":"remove","lines":["",""],"id":52}],[{"start":{"row":28,"column":7},"end":{"row":29,"column":0},"action":"remove","lines":["",""],"id":53}],[{"start":{"row":20,"column":4},"end":{"row":21,"column":0},"action":"insert","lines":["",""],"id":54},{"start":{"row":21,"column":0},"end":{"row":21,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":22,"column":4},"end":{"row":23,"column":0},"action":"insert","lines":["",""],"id":55},{"start":{"row":23,"column":0},"end":{"row":23,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":30,"column":7},"end":{"row":31,"column":0},"action":"insert","lines":["",""],"id":56}],[{"start":{"row":31,"column":0},"end":{"row":31,"column":41},"action":"insert","lines":["<?php require(\"includes/footer.php\"); ?> "],"id":57}],[{"start":{"row":31,"column":0},"end":{"row":32,"column":0},"action":"insert","lines":["",""],"id":58}],[{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"insert","lines":["",""],"id":59}],[{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"insert","lines":["<?php require(\"includes/header.php\"); ?>",""],"id":60}],[{"start":{"row":1,"column":0},"end":{"row":2,"column":0},"action":"insert","lines":["",""],"id":61}],[{"start":{"row":2,"column":0},"end":{"row":3,"column":0},"action":"insert","lines":["",""],"id":62}],[{"start":{"row":5,"column":0},"end":{"row":5,"column":23},"action":"insert","lines":["include_once('db.php');"],"id":63}],[{"start":{"row":2,"column":0},"end":{"row":3,"column":0},"action":"remove","lines":["",""],"id":64}],[{"start":{"row":1,"column":0},"end":{"row":2,"column":0},"action":"remove","lines":["",""],"id":65}],[{"start":{"row":3,"column":0},"end":{"row":4,"column":0},"action":"insert","lines":["",""],"id":66}],[{"start":{"row":5,"column":0},"end":{"row":6,"column":0},"action":"insert","lines":["",""],"id":67}],[{"start":{"row":6,"column":0},"end":{"row":7,"column":0},"action":"insert","lines":["",""],"id":68}],[{"start":{"row":4,"column":0},"end":{"row":5,"column":0},"action":"remove","lines":["include_once('db.php');",""],"id":69}],[{"start":{"row":3,"column":0},"end":{"row":4,"column":0},"action":"remove","lines":["",""],"id":70}],[{"start":{"row":2,"column":5},"end":{"row":3,"column":0},"action":"remove","lines":["",""],"id":71}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":11,"column":10},"end":{"row":11,"column":10},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1479905308195,"hash":"d30f89787d717dcbc86187d0d6bf14241b8baf29"}