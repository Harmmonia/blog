{"filter":false,"title":"create.php","tooltip":"/templates/create.php","undoManager":{"mark":100,"position":100,"stack":[[{"start":{"row":7,"column":0},"end":{"row":15,"column":7},"action":"insert","lines":["<form method=\"POST\">","    <input type=\"text\" name=\"email\" placeholder=\"Email*\"/>","    <?php if (isset($errors[\"email\"])) echo $errors[\"email\"];?>","    <input type=\"password\" name=\"password\" placeholder=\"Password*\"/>","    <?php if (isset($errors[\"password\"])) echo $errors[\"password\"];?>","    <input type=\"password\" name=\"repassword\" placeholder=\"Repeat password*\"/>","    <?php if (isset($errors[\"repassword\"])) echo $errors[\"repassword\"];?>","    <input type=\"submit\" value=\"Create\"/>","</form>"],"id":258}],[{"start":{"row":8,"column":49},"end":{"row":8,"column":54},"action":"remove","lines":["Email"],"id":259},{"start":{"row":8,"column":49},"end":{"row":8,"column":65},"action":"insert","lines":["Enter your email"]}],[{"start":{"row":8,"column":65},"end":{"row":8,"column":66},"action":"remove","lines":["*"],"id":260}],[{"start":{"row":10,"column":56},"end":{"row":10,"column":65},"action":"remove","lines":["Password*"],"id":261},{"start":{"row":10,"column":56},"end":{"row":10,"column":75},"action":"insert","lines":["Enter your password"]}],[{"start":{"row":12,"column":58},"end":{"row":12,"column":74},"action":"remove","lines":["Repeat password*"],"id":262},{"start":{"row":12,"column":58},"end":{"row":12,"column":79},"action":"insert","lines":["Confirm your password"]}],[{"start":{"row":9,"column":4},"end":{"row":9,"column":5},"action":"insert","lines":["/"],"id":263}],[{"start":{"row":9,"column":5},"end":{"row":9,"column":6},"action":"insert","lines":["/"],"id":264}],[{"start":{"row":9,"column":5},"end":{"row":9,"column":6},"action":"remove","lines":["/"],"id":265}],[{"start":{"row":9,"column":4},"end":{"row":9,"column":5},"action":"remove","lines":["/"],"id":266}],[{"start":{"row":9,"column":63},"end":{"row":9,"column":66},"action":"insert","lines":["-->"],"id":267},{"start":{"row":9,"column":4},"end":{"row":9,"column":8},"action":"insert","lines":["<!--"]}],[{"start":{"row":11,"column":69},"end":{"row":11,"column":72},"action":"insert","lines":["-->"],"id":268},{"start":{"row":11,"column":4},"end":{"row":11,"column":8},"action":"insert","lines":["<!--"]}],[{"start":{"row":13,"column":73},"end":{"row":13,"column":76},"action":"insert","lines":["-->"],"id":269},{"start":{"row":13,"column":4},"end":{"row":13,"column":8},"action":"insert","lines":["<!--"]}],[{"start":{"row":0,"column":20},"end":{"row":0,"column":23},"action":"insert","lines":["-->"],"id":270},{"start":{"row":0,"column":0},"end":{"row":0,"column":4},"action":"insert","lines":["<!--"]},{"start":{"row":1,"column":72},"end":{"row":1,"column":75},"action":"insert","lines":["-->"]},{"start":{"row":1,"column":0},"end":{"row":1,"column":4},"action":"insert","lines":["<!--"]},{"start":{"row":2,"column":82},"end":{"row":2,"column":85},"action":"insert","lines":["-->"]},{"start":{"row":2,"column":0},"end":{"row":2,"column":4},"action":"insert","lines":["<!--"]},{"start":{"row":3,"column":87},"end":{"row":3,"column":90},"action":"insert","lines":["-->"]},{"start":{"row":3,"column":0},"end":{"row":3,"column":4},"action":"insert","lines":["<!--"]},{"start":{"row":4,"column":59},"end":{"row":4,"column":62},"action":"insert","lines":["-->"]},{"start":{"row":4,"column":0},"end":{"row":4,"column":4},"action":"insert","lines":["<!--"]},{"start":{"row":5,"column":7},"end":{"row":5,"column":10},"action":"insert","lines":["-->"]},{"start":{"row":5,"column":0},"end":{"row":5,"column":4},"action":"insert","lines":["<!--"]}],[{"start":{"row":13,"column":77},"end":{"row":13,"column":80},"action":"remove","lines":["-->"],"id":272},{"start":{"row":13,"column":4},"end":{"row":13,"column":8},"action":"remove","lines":["<!--"]}],[{"start":{"row":11,"column":73},"end":{"row":11,"column":76},"action":"remove","lines":["-->"],"id":273},{"start":{"row":11,"column":4},"end":{"row":11,"column":8},"action":"remove","lines":["<!--"]}],[{"start":{"row":9,"column":67},"end":{"row":9,"column":70},"action":"remove","lines":["-->"],"id":274},{"start":{"row":9,"column":4},"end":{"row":9,"column":8},"action":"remove","lines":["<!--"]}],[{"start":{"row":7,"column":20},"end":{"row":7,"column":23},"action":"insert","lines":["-->"],"id":275},{"start":{"row":7,"column":0},"end":{"row":7,"column":4},"action":"insert","lines":["<!--"]},{"start":{"row":8,"column":68},"end":{"row":8,"column":71},"action":"insert","lines":["-->"]},{"start":{"row":8,"column":0},"end":{"row":8,"column":4},"action":"insert","lines":["<!--"]},{"start":{"row":9,"column":63},"end":{"row":9,"column":66},"action":"insert","lines":["-->"]},{"start":{"row":9,"column":0},"end":{"row":9,"column":4},"action":"insert","lines":["<!--"]},{"start":{"row":10,"column":78},"end":{"row":10,"column":81},"action":"insert","lines":["-->"]},{"start":{"row":10,"column":0},"end":{"row":10,"column":4},"action":"insert","lines":["<!--"]},{"start":{"row":11,"column":69},"end":{"row":11,"column":72},"action":"insert","lines":["-->"]},{"start":{"row":11,"column":0},"end":{"row":11,"column":4},"action":"insert","lines":["<!--"]},{"start":{"row":12,"column":82},"end":{"row":12,"column":85},"action":"insert","lines":["-->"]},{"start":{"row":12,"column":0},"end":{"row":12,"column":4},"action":"insert","lines":["<!--"]},{"start":{"row":13,"column":73},"end":{"row":13,"column":76},"action":"insert","lines":["-->"]},{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"insert","lines":["<!--"]},{"start":{"row":14,"column":41},"end":{"row":14,"column":44},"action":"insert","lines":["-->"]},{"start":{"row":14,"column":0},"end":{"row":14,"column":4},"action":"insert","lines":["<!--"]},{"start":{"row":15,"column":7},"end":{"row":15,"column":10},"action":"insert","lines":["-->"]},{"start":{"row":15,"column":0},"end":{"row":15,"column":4},"action":"insert","lines":["<!--"]}],[{"start":{"row":0,"column":24},"end":{"row":0,"column":27},"action":"remove","lines":["-->"],"id":276},{"start":{"row":0,"column":0},"end":{"row":0,"column":4},"action":"remove","lines":["<!--"]},{"start":{"row":1,"column":76},"end":{"row":1,"column":79},"action":"remove","lines":["-->"]},{"start":{"row":1,"column":0},"end":{"row":1,"column":4},"action":"remove","lines":["<!--"]},{"start":{"row":2,"column":86},"end":{"row":2,"column":89},"action":"remove","lines":["-->"]},{"start":{"row":2,"column":0},"end":{"row":2,"column":4},"action":"remove","lines":["<!--"]},{"start":{"row":3,"column":91},"end":{"row":3,"column":94},"action":"remove","lines":["-->"]},{"start":{"row":3,"column":0},"end":{"row":3,"column":4},"action":"remove","lines":["<!--"]},{"start":{"row":4,"column":63},"end":{"row":4,"column":66},"action":"remove","lines":["-->"]},{"start":{"row":4,"column":0},"end":{"row":4,"column":4},"action":"remove","lines":["<!--"]},{"start":{"row":5,"column":11},"end":{"row":5,"column":14},"action":"remove","lines":["-->"]},{"start":{"row":5,"column":0},"end":{"row":5,"column":4},"action":"remove","lines":["<!--"]}],[{"start":{"row":24,"column":8},"end":{"row":29,"column":12},"action":"remove","lines":["// run sign up code","        // if (isset($_POST[\"email\"])) {","        //     $email = $_POST[\"email\"]; ","        // } else {","        //     $email = null;","        // }"],"id":277}],[{"start":{"row":24,"column":4},"end":{"row":24,"column":8},"action":"remove","lines":["    "],"id":278}],[{"start":{"row":24,"column":0},"end":{"row":24,"column":4},"action":"remove","lines":["    "],"id":279}],[{"start":{"row":23,"column":5},"end":{"row":24,"column":0},"action":"remove","lines":["",""],"id":280}],[{"start":{"row":48,"column":12},"end":{"row":48,"column":13},"action":"insert","lines":["$"],"id":281}],[{"start":{"row":44,"column":11},"end":{"row":44,"column":18},"action":"remove","lines":["!$email"],"id":282},{"start":{"row":44,"column":11},"end":{"row":44,"column":70},"action":"insert","lines":["empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)"]}],[{"start":{"row":45,"column":12},"end":{"row":46,"column":41},"action":"remove","lines":["return false;","            //return 'EMAIL NOT PRESENT';"],"id":283},{"start":{"row":45,"column":12},"end":{"row":45,"column":48},"action":"insert","lines":["$errors[\"email\"] = \"Invalid email!\";"]}],[{"start":{"row":42,"column":4},"end":{"row":43,"column":0},"action":"insert","lines":["",""],"id":284},{"start":{"row":43,"column":0},"end":{"row":43,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":42,"column":4},"end":{"row":43,"column":0},"action":"insert","lines":["",""],"id":285},{"start":{"row":43,"column":0},"end":{"row":43,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":43,"column":4},"end":{"row":46,"column":41},"action":"insert","lines":["$errors = array();","        $email = $_POST[\"email\"];","        $passwd = $_POST[\"password\"];","        $repasswd = $_POST[\"repassword\"];"],"id":286}],[{"start":{"row":44,"column":0},"end":{"row":44,"column":4},"action":"remove","lines":["    "],"id":287},{"start":{"row":45,"column":0},"end":{"row":45,"column":4},"action":"remove","lines":["    "]},{"start":{"row":46,"column":0},"end":{"row":46,"column":4},"action":"remove","lines":["    "]}],[{"start":{"row":7,"column":24},"end":{"row":7,"column":27},"action":"remove","lines":["-->"],"id":288},{"start":{"row":7,"column":0},"end":{"row":7,"column":4},"action":"remove","lines":["<!--"]},{"start":{"row":8,"column":72},"end":{"row":8,"column":75},"action":"remove","lines":["-->"]},{"start":{"row":8,"column":0},"end":{"row":8,"column":4},"action":"remove","lines":["<!--"]},{"start":{"row":9,"column":67},"end":{"row":9,"column":70},"action":"remove","lines":["-->"]},{"start":{"row":9,"column":0},"end":{"row":9,"column":4},"action":"remove","lines":["<!--"]},{"start":{"row":10,"column":82},"end":{"row":10,"column":85},"action":"remove","lines":["-->"]},{"start":{"row":10,"column":0},"end":{"row":10,"column":4},"action":"remove","lines":["<!--"]},{"start":{"row":11,"column":73},"end":{"row":11,"column":76},"action":"remove","lines":["-->"]},{"start":{"row":11,"column":0},"end":{"row":11,"column":4},"action":"remove","lines":["<!--"]},{"start":{"row":12,"column":86},"end":{"row":12,"column":89},"action":"remove","lines":["-->"]},{"start":{"row":12,"column":0},"end":{"row":12,"column":4},"action":"remove","lines":["<!--"]},{"start":{"row":13,"column":77},"end":{"row":13,"column":80},"action":"remove","lines":["-->"]},{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"remove","lines":["<!--"]},{"start":{"row":14,"column":45},"end":{"row":14,"column":48},"action":"remove","lines":["-->"]},{"start":{"row":14,"column":0},"end":{"row":14,"column":4},"action":"remove","lines":["<!--"]},{"start":{"row":15,"column":11},"end":{"row":15,"column":14},"action":"remove","lines":["-->"]},{"start":{"row":15,"column":0},"end":{"row":15,"column":4},"action":"remove","lines":["<!--"]}],[{"start":{"row":0,"column":20},"end":{"row":0,"column":23},"action":"insert","lines":["-->"],"id":289},{"start":{"row":0,"column":0},"end":{"row":0,"column":4},"action":"insert","lines":["<!--"]},{"start":{"row":1,"column":72},"end":{"row":1,"column":75},"action":"insert","lines":["-->"]},{"start":{"row":1,"column":0},"end":{"row":1,"column":4},"action":"insert","lines":["<!--"]},{"start":{"row":2,"column":82},"end":{"row":2,"column":85},"action":"insert","lines":["-->"]},{"start":{"row":2,"column":0},"end":{"row":2,"column":4},"action":"insert","lines":["<!--"]},{"start":{"row":3,"column":87},"end":{"row":3,"column":90},"action":"insert","lines":["-->"]},{"start":{"row":3,"column":0},"end":{"row":3,"column":4},"action":"insert","lines":["<!--"]},{"start":{"row":4,"column":59},"end":{"row":4,"column":62},"action":"insert","lines":["-->"]},{"start":{"row":4,"column":0},"end":{"row":4,"column":4},"action":"insert","lines":["<!--"]},{"start":{"row":5,"column":7},"end":{"row":5,"column":10},"action":"insert","lines":["-->"]},{"start":{"row":5,"column":0},"end":{"row":5,"column":4},"action":"insert","lines":["<!--"]}],[{"start":{"row":52,"column":11},"end":{"row":54,"column":45},"action":"remove","lines":["!$password) {","            return false;","            //return 'PASSWORD NOT PROVIDED';"],"id":290},{"start":{"row":52,"column":11},"end":{"row":53,"column":80},"action":"insert","lines":["empty($passwd) || strlen($passwd) < 6) {","            $errors[\"password\"] = \"Invalid password! Use a least 6 characters.\";"]}],[{"start":{"row":56,"column":12},"end":{"row":57,"column":42},"action":"remove","lines":["return false;","            //return 'PASSWORD NOT EQUAL';"],"id":291},{"start":{"row":56,"column":12},"end":{"row":56,"column":63},"action":"insert","lines":["$errors[\"repassword\"] = \"Invalid repeat password!\";"]}],[{"start":{"row":48,"column":64},"end":{"row":49,"column":0},"action":"insert","lines":["",""],"id":292},{"start":{"row":49,"column":0},"end":{"row":49,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":43,"column":4},"end":{"row":46,"column":37},"action":"remove","lines":["$errors = array();","    $email = $_POST[\"email\"];","    $passwd = $_POST[\"password\"];","    $repasswd = $_POST[\"repassword\"];"],"id":293}],[{"start":{"row":46,"column":8},"end":{"row":49,"column":37},"action":"insert","lines":["$errors = array();","    $email = $_POST[\"email\"];","    $passwd = $_POST[\"password\"];","    $repasswd = $_POST[\"repassword\"];"],"id":294}],[{"start":{"row":47,"column":0},"end":{"row":47,"column":4},"action":"insert","lines":["    "],"id":295},{"start":{"row":48,"column":0},"end":{"row":48,"column":4},"action":"insert","lines":["    "]},{"start":{"row":49,"column":0},"end":{"row":49,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":49,"column":41},"end":{"row":50,"column":0},"action":"insert","lines":["",""],"id":296},{"start":{"row":50,"column":0},"end":{"row":50,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":46,"column":8},"end":{"row":47,"column":0},"action":"insert","lines":["",""],"id":297},{"start":{"row":47,"column":0},"end":{"row":47,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":46,"column":8},"end":{"row":46,"column":36},"action":"insert","lines":["if(isset($_POST[\"email\"])) {"],"id":298}],[{"start":{"row":46,"column":36},"end":{"row":47,"column":0},"action":"insert","lines":["",""],"id":299},{"start":{"row":47,"column":0},"end":{"row":47,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":47,"column":0},"end":{"row":47,"column":4},"action":"insert","lines":["    "],"id":300},{"start":{"row":48,"column":0},"end":{"row":48,"column":4},"action":"insert","lines":["    "]},{"start":{"row":49,"column":0},"end":{"row":49,"column":4},"action":"insert","lines":["    "]},{"start":{"row":50,"column":0},"end":{"row":50,"column":4},"action":"insert","lines":["    "]},{"start":{"row":51,"column":0},"end":{"row":51,"column":4},"action":"insert","lines":["    "]},{"start":{"row":52,"column":0},"end":{"row":52,"column":4},"action":"insert","lines":["    "]},{"start":{"row":53,"column":0},"end":{"row":53,"column":4},"action":"insert","lines":["    "]},{"start":{"row":54,"column":0},"end":{"row":54,"column":4},"action":"insert","lines":["    "]},{"start":{"row":55,"column":0},"end":{"row":55,"column":4},"action":"insert","lines":["    "]},{"start":{"row":56,"column":0},"end":{"row":56,"column":4},"action":"insert","lines":["    "]},{"start":{"row":57,"column":0},"end":{"row":57,"column":4},"action":"insert","lines":["    "]},{"start":{"row":58,"column":0},"end":{"row":58,"column":4},"action":"insert","lines":["    "]},{"start":{"row":59,"column":0},"end":{"row":59,"column":4},"action":"insert","lines":["    "]},{"start":{"row":60,"column":0},"end":{"row":60,"column":4},"action":"insert","lines":["    "]},{"start":{"row":61,"column":0},"end":{"row":61,"column":4},"action":"insert","lines":["    "]},{"start":{"row":62,"column":0},"end":{"row":62,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":62,"column":24},"end":{"row":63,"column":0},"action":"insert","lines":["",""],"id":301},{"start":{"row":63,"column":0},"end":{"row":63,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":63,"column":8},"end":{"row":63,"column":12},"action":"remove","lines":["    "],"id":302}],[{"start":{"row":63,"column":8},"end":{"row":63,"column":9},"action":"insert","lines":["}"],"id":303}],[{"start":{"row":27,"column":39},"end":{"row":27,"column":40},"action":"remove","lines":["-"],"id":304}],[{"start":{"row":27,"column":63},"end":{"row":27,"column":64},"action":"remove","lines":["-"],"id":305}],[{"start":{"row":19,"column":28},"end":{"row":19,"column":62},"action":"remove","lines":["// ca sa includem celalalt fisier."],"id":306}],[{"start":{"row":19,"column":27},"end":{"row":19,"column":28},"action":"remove","lines":[" "],"id":307}],[{"start":{"row":21,"column":35},"end":{"row":21,"column":147},"action":"remove","lines":[" // punem cu if ca sa se execute php-ul cand se apasa butonul de submit. isset verifica daca o valoare e setata."],"id":308}],[{"start":{"row":17,"column":0},"end":{"row":70,"column":2},"action":"remove","lines":["<?php","    ","    include_once('db.php');","    ","    if (!isset($_POST[\"submit\"])) {","        die();","    }","        ","        $email = isset($_POST[\"email\"]) ? $_POST[\"email\"] : null; // mai scurt decat cel de sus.","        $password = isset($_POST[\"password\"]) ? $_POST[\"password\"] : null;","        $re_password = isset($_POST[\"repassword\"]) ? $_POST[\"repassword\"] : null;","        ","    if (!validateUserData($email, $password, $re_password)) {","            echo 'INVALID DATA IN FORM';","            die();","        }","    ","    $criptedPassword = hashPassword($password);","    //echo $criptedPassword;","    $userData = [$email, $criptedPassword];","    // 'insert into users (email, password) values (\"' . $email .'\",\"' . $password '\")';","","    $sql = 'insert into users (email, password) values (?, ?)';","    $sth = $dbh->prepare($sql);","    $sth->execute($userData);","    ","    ","    ","    function validateUserData($email, $password, $re_password) {","        if(isset($_POST[\"email\"])) {","                ","            $errors = array();","            $email = $_POST[\"email\"];","            $passwd = $_POST[\"password\"];","            $repasswd = $_POST[\"repassword\"];","            ","            if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {","                $errors[\"email\"] = \"Invalid email!\";","            }","            if(empty($passwd) || strlen($passwd) < 6) {","                $errors[\"password\"] = \"Invalid password! Use a least 6 characters.\";","            }","            if ($password != $re_password) {","                $errors[\"repassword\"] = \"Invalid repeat password!\";","            }","            return true;","        }","    }","   ","    function hashPassword($password) {","        return crypt($password);","    }","","?>"],"id":310},{"start":{"row":17,"column":0},"end":{"row":70,"column":0},"action":"insert","lines":["<?php","    ","    include_once('db.php'); // ca sa includem celalalt fisier.","    ","    if (!isset($_POST[\"submit\"])) { // punem cu if ca sa se execute php-ul cand se apasa butonul de submit. isset verifica daca o valoare e setata.","        die();","    }","        // run sign up code","        // if (isset($_POST[\"email\"])) {","        //     $email = $_POST[\"email\"]; ","        // } else {","        //     $email = null;","        // }","        ","        $email = isset($_POST[\"email\"]) ? $_POST[\"email\"] : null; // mai scurt decat cel de sus.","        $password = isset($_POST[\"password\"]) ? $_POST[\"password\"] : null;","        $re_password = isset($_POST[\"re-password\"]) ? $_POST[\"re-password\"] : null;","        ","    if (!validateUserData($email, $password, $re_password)) {","            echo 'INVALID DATA IN FORM';","            die();","        }","    ","    $criptedPassword = hashPassword($password);","    //echo $criptedPassword;","    $userData = [$email, $criptedPassword];","    // 'insert into users (email, password) values (\"' . $email .'\",\"' . $password '\")';","","    $sql = 'insert into users (email, password) values (?, ?)';","    $sth = $dbh->prepare($sql);","    $sth->execute($userData);","    ","    function validateUserData($email, $password, $re_password) {","        if(!$email) {","            return false;","            //return 'EMAIL NOT PRESENT';","        }","        if(!$password) {","            return false;","            //return 'PASSWORD NOT PROVIDED';","        }","        if ($password != $re_password) {","            return false;","            //return 'PASSWORD NOT EQUAL';","        }","        return true;","    }","   ","    function hashPassword($password) {","        return crypt($password);","    }","","?>",""]}],[{"start":{"row":24,"column":8},"end":{"row":34,"column":8},"action":"remove","lines":["// run sign up code","        // if (isset($_POST[\"email\"])) {","        //     $email = $_POST[\"email\"]; ","        // } else {","        //     $email = null;","        // }","        ","        $email = isset($_POST[\"email\"]) ? $_POST[\"email\"] : null; // mai scurt decat cel de sus.","        $password = isset($_POST[\"password\"]) ? $_POST[\"password\"] : null;","        $re_password = isset($_POST[\"re-password\"]) ? $_POST[\"re-password\"] : null;","        "],"id":311},{"start":{"row":24,"column":8},"end":{"row":55,"column":5},"action":"insert","lines":["if(isset($_POST[\"email\"])) {","        ","        $errors = array();","        $email = $_POST[\"email\"];","        $passwd = $_POST[\"password\"];","        $repasswd = $_POST[\"repassword\"];","        ","        //var_dump($_POST);","        ","        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {","            $errors[\"email\"] = \"Invalid email!\";        ","        }","        if (empty($passwd) || strlen($passwd) < 6) {","            $errors[\"password\"] = \"Invalid password! Use a least 6 characters.\";    ","        }","        if(empty($repasswd) || $repasswd !== $passwd) {","            $errors[\"repassword\"] = \"Invalid repeat password!\";    ","        }","        ","        if (empty($errors)) {","            $salt = '$1$web8$';","            $password = crypt($passwd, $salt);","            $response = file_put_contents('login.txt', $email . \"|\" . $password . PHP_EOL, FILE_APPEND);","        ","            if ($response) {","                header(\"Location: login.php\");","            }","            else {","                echo \"Could not register User. Internal Server Error\";","            }","        }","    }"]}],[{"start":{"row":24,"column":4},"end":{"row":24,"column":8},"action":"remove","lines":["    "],"id":312}],[{"start":{"row":24,"column":4},"end":{"row":25,"column":0},"action":"insert","lines":["",""],"id":313},{"start":{"row":25,"column":0},"end":{"row":25,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":47,"column":12},"end":{"row":47,"column":13},"action":"insert","lines":["/"],"id":314}],[{"start":{"row":47,"column":13},"end":{"row":47,"column":14},"action":"insert","lines":["/"],"id":315}],[{"start":{"row":62,"column":4},"end":{"row":62,"column":5},"action":"insert","lines":["/"],"id":316}],[{"start":{"row":62,"column":5},"end":{"row":62,"column":6},"action":"insert","lines":["/"],"id":317}],[{"start":{"row":64,"column":25},"end":{"row":64,"column":41},"action":"remove","lines":["$criptedPassword"],"id":318},{"start":{"row":64,"column":25},"end":{"row":64,"column":34},"action":"insert","lines":["$password"]}],[{"start":{"row":65,"column":0},"end":{"row":66,"column":0},"action":"remove","lines":["    // 'insert into users (email, password) values (\"' . $email .'\",\"' . $password '\")';",""],"id":319}],[{"start":{"row":0,"column":0},"end":{"row":91,"column":0},"action":"remove","lines":["<!--<form method=\"POST\">-->","<!--        <input type=\"text\" name=\"email\" placeholder=\"Enter your email\"/>-->","<!--        <input type=\"password\" name=\"password\" placeholder=\"Enter your password\"/>-->","<!--        <input type=\"password\" name=\"re-password\" placeholder=\"Confirm your password\"/>-->","<!--        <input type=\"submit\" name=\"submit\" value=\"Submit\"/>-->","<!--</form>-->","","<form method=\"POST\">","    <input type=\"text\" name=\"email\" placeholder=\"Enter your email\"/>","    <?php if (isset($errors[\"email\"])) echo $errors[\"email\"];?>","    <input type=\"password\" name=\"password\" placeholder=\"Enter your password\"/>","    <?php if (isset($errors[\"password\"])) echo $errors[\"password\"];?>","    <input type=\"password\" name=\"repassword\" placeholder=\"Confirm your password\"/>","    <?php if (isset($errors[\"repassword\"])) echo $errors[\"repassword\"];?>","    <input type=\"submit\" value=\"Create\"/>","</form>","","<?php","    ","    include_once('db.php'); // ca sa includem celalalt fisier.","    ","    if (!isset($_POST[\"submit\"])) { // punem cu if ca sa se execute php-ul cand se apasa butonul de submit. isset verifica daca o valoare e setata.","        die();","    }","    ","    if(isset($_POST[\"email\"])) {","        ","        $errors = array();","        $email = $_POST[\"email\"];","        $passwd = $_POST[\"password\"];","        $repasswd = $_POST[\"repassword\"];","        ","        //var_dump($_POST);","        ","        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {","            $errors[\"email\"] = \"Invalid email!\";        ","        }","        if (empty($passwd) || strlen($passwd) < 6) {","            $errors[\"password\"] = \"Invalid password! Use a least 6 characters.\";    ","        }","        if(empty($repasswd) || $repasswd !== $passwd) {","            $errors[\"repassword\"] = \"Invalid repeat password!\";    ","        }","        ","        if (empty($errors)) {","            $salt = '$1$web8$';","            $password = crypt($passwd, $salt);","            //$response = file_put_contents('login.txt', $email . \"|\" . $password . PHP_EOL, FILE_APPEND);","        ","            if ($response) {","                header(\"Location: login.php\");","            }","            else {","                echo \"Could not register User. Internal Server Error\";","            }","        }","    }","    if (!validateUserData($email, $password, $re_password)) {","            echo 'INVALID DATA IN FORM';","            die();","        }","    ","    //$criptedPassword = hashPassword($password);","    //echo $criptedPassword;","    $userData = [$email, $password];","","    $sql = 'insert into users (email, password) values (?, ?)';","    $sth = $dbh->prepare($sql);","    $sth->execute($userData);","    ","    function validateUserData($email, $password, $re_password) {","        if(!$email) {","            return false;","            //return 'EMAIL NOT PRESENT';","        }","        if(!$password) {","            return false;","            //return 'PASSWORD NOT PROVIDED';","        }","        if ($password != $re_password) {","            return false;","            //return 'PASSWORD NOT EQUAL';","        }","        return true;","    }","   ","    function hashPassword($password) {","        return crypt($password);","    }","","?>",""],"id":320}],[{"start":{"row":0,"column":0},"end":{"row":76,"column":0},"action":"insert","lines":["<!doctype html>","<html lang=\"en\">","<head>","    <meta charset=\"UTF-8\">","    <style type=\"text/css\">","        input {","            display: block;","            margin-top: 20px;","        }","    </style>","    <title>SignUp</title>","</head>","<body>","    <form method=\"POST\">","        <input type=\"text\" name=\"email\" placeholder=\"Enter your email\"/>","        <input type=\"password\" name=\"password\" placeholder=\"Enter your password\"/>","        <input type=\"password\" name=\"re-password\" placeholder=\"Confirm your password\"/>","        <input type=\"submit\" name=\"submit\" value=\"Submit\"/>","    </form>","</body>","</html>","","<?php","    ","    include_once('db.php'); // ca sa includem celalalt fisier.","    ","    if (!isset($_POST[\"submit\"])) { // punem cu if ca sa se execute php-ul cand se apasa butonul de submit. isset verifica daca o valoare e setata.","        die();","    }","        // run sign up code","        // if (isset($_POST[\"email\"])) {","        //     $email = $_POST[\"email\"]; ","        // } else {","        //     $email = null;","        // }","        ","        $email = isset($_POST[\"email\"]) ? $_POST[\"email\"] : null; // mai scurt decat cel de sus.","        $password = isset($_POST[\"password\"]) ? $_POST[\"password\"] : null;","        $re_password = isset($_POST[\"re-password\"]) ? $_POST[\"re-password\"] : null;","        ","    if (!validateUserData($email, $password, $re_password)) {","            echo 'INVALID DATA IN FORM';","            die();","        }","    ","    $criptedPassword = hashPassword($password);","    //echo $criptedPassword;","    $userData = [$email, $criptedPassword];","    // 'insert into users (email, password) values (\"' . $email .'\",\"' . $password '\")';","","    $sql = 'insert into users (email, password) values (?, ?)';","    $sth = $dbh->prepare($sql);","    $sth->execute($userData);","    ","    function validateUserData($email, $password, $re_password) {","        if(!$email) {","            return false;","            //return 'EMAIL NOT PRESENT';","        }","        if(!$password) {","            return false;","            //return 'PASSWORD NOT PROVIDED';","        }","        if ($password != $re_password) {","            return false;","            //return 'PASSWORD NOT EQUAL';","        }","        return true;","    }","   ","    function hashPassword($password) {","        return crypt($password);","    }","","?>","",""],"id":321}],[{"start":{"row":29,"column":8},"end":{"row":34,"column":12},"action":"remove","lines":["// run sign up code","        // if (isset($_POST[\"email\"])) {","        //     $email = $_POST[\"email\"]; ","        // } else {","        //     $email = null;","        // }"],"id":322}],[{"start":{"row":29,"column":4},"end":{"row":29,"column":8},"action":"remove","lines":["    "],"id":323}],[{"start":{"row":29,"column":0},"end":{"row":29,"column":4},"action":"remove","lines":["    "],"id":324}],[{"start":{"row":28,"column":5},"end":{"row":29,"column":0},"action":"remove","lines":["",""],"id":325}],[{"start":{"row":24,"column":27},"end":{"row":25,"column":4},"action":"remove","lines":[" // ca sa includem celalalt fisier.","    "],"id":326}],[{"start":{"row":25,"column":36},"end":{"row":25,"column":147},"action":"remove","lines":["// punem cu if ca sa se execute php-ul cand se apasa butonul de submit. isset verifica daca o valoare e setata."],"id":327}],[{"start":{"row":28,"column":4},"end":{"row":28,"column":8},"action":"remove","lines":["    "],"id":328}],[{"start":{"row":28,"column":0},"end":{"row":28,"column":4},"action":"remove","lines":["    "],"id":329}],[{"start":{"row":27,"column":5},"end":{"row":28,"column":0},"action":"remove","lines":["",""],"id":330}],[{"start":{"row":28,"column":66},"end":{"row":28,"column":96},"action":"remove","lines":["// mai scurt decat cel de sus."],"id":331}],[{"start":{"row":28,"column":65},"end":{"row":28,"column":66},"action":"remove","lines":[" "],"id":332}],[{"start":{"row":40,"column":0},"end":{"row":41,"column":0},"action":"remove","lines":["    // 'insert into users (email, password) values (\"' . $email .'\",\"' . $password '\")';",""],"id":333}],[{"start":{"row":0,"column":0},"end":{"row":67,"column":0},"action":"remove","lines":["<!doctype html>","<html lang=\"en\">","<head>","    <meta charset=\"UTF-8\">","    <style type=\"text/css\">","        input {","            display: block;","            margin-top: 20px;","        }","    </style>","    <title>SignUp</title>","</head>","<body>","    <form method=\"POST\">","        <input type=\"text\" name=\"email\" placeholder=\"Enter your email\"/>","        <input type=\"password\" name=\"password\" placeholder=\"Enter your password\"/>","        <input type=\"password\" name=\"re-password\" placeholder=\"Confirm your password\"/>","        <input type=\"submit\" name=\"submit\" value=\"Submit\"/>","    </form>","</body>","</html>","","<?php","    ","    include_once('db.php');","    if (!isset($_POST[\"submit\"])) { ","        die();","    }","        $email = isset($_POST[\"email\"]) ? $_POST[\"email\"] : null;","        $password = isset($_POST[\"password\"]) ? $_POST[\"password\"] : null;","        $re_password = isset($_POST[\"re-password\"]) ? $_POST[\"re-password\"] : null;","        ","    if (!validateUserData($email, $password, $re_password)) {","            echo 'INVALID DATA IN FORM';","            die();","        }","    ","    $criptedPassword = hashPassword($password);","    //echo $criptedPassword;","    $userData = [$email, $criptedPassword];","","    $sql = 'insert into users (email, password) values (?, ?)';","    $sth = $dbh->prepare($sql);","    $sth->execute($userData);","    ","    function validateUserData($email, $password, $re_password) {","        if(!$email) {","            return false;","            //return 'EMAIL NOT PRESENT';","        }","        if(!$password) {","            return false;","            //return 'PASSWORD NOT PROVIDED';","        }","        if ($password != $re_password) {","            return false;","            //return 'PASSWORD NOT EQUAL';","        }","        return true;","    }","   ","    function hashPassword($password) {","        return crypt($password);","    }","","?>","",""],"id":334},{"start":{"row":0,"column":0},"end":{"row":48,"column":41},"action":"insert","lines":["<?php require(\"includes/header.php\"); ?>","","<?php","","    if(isset($_POST[\"email\"])) {","        ","        $errors = array();","        $email = $_POST[\"email\"];","        $passwd = $_POST[\"password\"];","        $repasswd = $_POST[\"repassword\"];","        ","        //var_dump($_POST);","        ","        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {","            $errors[\"email\"] = \"Invalid email!\";        ","        }","        if (empty($passwd) || strlen($passwd) < 6) {","            $errors[\"password\"] = \"Invalid password! Use a least 6 characters.\";    ","        }","        if(empty($repasswd) || $repasswd !== $passwd) {","            $errors[\"repassword\"] = \"Invalid repeat password!\";    ","        }","        ","        if (empty($errors)) {","            $salt = '$1$web8$';","            $password = crypt($passwd, $salt);","            $response = file_put_contents('login.txt', $email . \"|\" . $password . PHP_EOL, FILE_APPEND);","        ","            if ($response) {","                header(\"Location: login.php\");","            }","            else {","                echo \"Could not register User. Internal Server Error\";","            }","        }","    }","?>","","<form method=\"POST\">","    <input type=\"text\" name=\"email\" placeholder=\"Email*\"/>","    <?php if (isset($errors[\"email\"])) echo $errors[\"email\"];?>","    <input type=\"password\" name=\"password\" placeholder=\"Password*\"/>","    <?php if (isset($errors[\"password\"])) echo $errors[\"password\"];?>","    <input type=\"password\" name=\"repassword\" placeholder=\"Repeat password*\"/>","    <?php if (isset($errors[\"repassword\"])) echo $errors[\"repassword\"];?>","    <input type=\"submit\" value=\"Create\"/>","</form>","","<?php require(\"includes/footer.php\"); ?> "]}],[{"start":{"row":20,"column":44},"end":{"row":20,"column":45},"action":"insert","lines":["."],"id":335}],[{"start":{"row":20,"column":46},"end":{"row":20,"column":47},"action":"remove","lines":["r"],"id":336}],[{"start":{"row":20,"column":46},"end":{"row":20,"column":47},"action":"insert","lines":["R"],"id":337}],[{"start":{"row":20,"column":46},"end":{"row":20,"column":47},"action":"remove","lines":["R"],"id":338}],[{"start":{"row":20,"column":45},"end":{"row":20,"column":46},"action":"remove","lines":[" "],"id":339}],[{"start":{"row":20,"column":44},"end":{"row":20,"column":45},"action":"remove","lines":["."],"id":340}],[{"start":{"row":20,"column":44},"end":{"row":20,"column":45},"action":"insert","lines":[" "],"id":341}],[{"start":{"row":20,"column":45},"end":{"row":20,"column":46},"action":"insert","lines":["r"],"id":342}],[{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"remove","lines":["<?php require(\"includes/header.php\"); ?>",""],"id":353}],[{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"remove","lines":["",""],"id":354}],[{"start":{"row":46,"column":0},"end":{"row":46,"column":41},"action":"remove","lines":["<?php require(\"includes/footer.php\"); ?> "],"id":355}],[{"start":{"row":45,"column":0},"end":{"row":46,"column":0},"action":"remove","lines":["",""],"id":356}],[{"start":{"row":44,"column":7},"end":{"row":45,"column":0},"action":"remove","lines":["",""],"id":357}],[{"start":{"row":1,"column":0},"end":{"row":2,"column":0},"action":"insert","lines":["",""],"id":358}],[{"start":{"row":2,"column":0},"end":{"row":3,"column":0},"action":"insert","lines":["",""],"id":359}],[{"start":{"row":3,"column":0},"end":{"row":4,"column":0},"action":"insert","lines":["",""],"id":360}],[{"start":{"row":1,"column":0},"end":{"row":1,"column":78},"action":"insert","lines":["$username=\"your_username\";$password=\"your_password\";$database=\"your_database\";"],"id":361}],[{"start":{"row":1,"column":11},"end":{"row":1,"column":24},"action":"remove","lines":["your_username"],"id":362},{"start":{"row":1,"column":11},"end":{"row":1,"column":16},"action":"insert","lines":["katea"]}],[{"start":{"row":1,"column":29},"end":{"row":1,"column":42},"action":"remove","lines":["your_password"],"id":363}],[{"start":{"row":1,"column":42},"end":{"row":1,"column":55},"action":"remove","lines":["your_database"],"id":364},{"start":{"row":1,"column":42},"end":{"row":1,"column":50},"action":"insert","lines":["accounts"]}],[{"start":{"row":2,"column":0},"end":{"row":2,"column":45},"action":"insert","lines":["mysql_connect(localhost,$username,$password);"],"id":365}],[{"start":{"row":2,"column":45},"end":{"row":3,"column":0},"action":"insert","lines":["",""],"id":366}],[{"start":{"row":3,"column":0},"end":{"row":3,"column":65},"action":"insert","lines":["@mysql_select_db($database) or die( \"Unable to select database\");"],"id":367}],[{"start":{"row":1,"column":0},"end":{"row":1,"column":3},"action":"insert","lines":["// "],"id":368},{"start":{"row":2,"column":0},"end":{"row":2,"column":3},"action":"insert","lines":["// "]},{"start":{"row":3,"column":0},"end":{"row":3,"column":3},"action":"insert","lines":["// "]}],[{"start":{"row":0,"column":5},"end":{"row":3,"column":68},"action":"remove","lines":["","// $username=\"katea\";$password=\"\";$database=\"accounts\";","// mysql_connect(localhost,$username,$password);","// @mysql_select_db($database) or die( \"Unable to select database\");"],"id":369}],[{"start":{"row":0,"column":5},"end":{"row":1,"column":0},"action":"remove","lines":["",""],"id":370}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":21,"column":22},"end":{"row":21,"column":22},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1479985298149,"hash":"f4dc0359a14ce7f00a99247019fcffb31cf064a6"}