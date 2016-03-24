<?php
include "fonction.php";
getHeader(True,"Test");

if (!empty($_POST["nom"])) {
    $_SESSION["username"] = $_POST["nom"];

}

foreach ($_SESSION as $value){
    echo "<p> valeur de la session : {$value} <p>";

}





?>



