<?php
include "fonction.php";
getHeader(True,"validation");

if (!empty($_POST["nom"])) {
    $_SESSION["user"] = $_POST["nom"];
    echo $_SESSION["user"];
}
if(array_key_exists("remember",$_POST))
setcookie('user', $_POST["nom"], (time() + 3000 ));


getFooter();
?>