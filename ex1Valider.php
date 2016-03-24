<?php
include "fonction.php";
getHeader(True,"validation");

if (!empty($_POST["nom"])) {
    $_SESSION["user"] = $_POST["nom"];
    echo $_SESSION["user"];
}



getFooter();
?>