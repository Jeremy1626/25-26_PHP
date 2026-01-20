<?php

//var_dump($_POST);


/*
 * Store this information for the example
 * DO NOT DO THIS ON A PRODUCTION SITE
 * username: yeah
 * password: bro
 * password hash: 0cfe0ef3a357503c4a4538414b870ca1
 */

// Authenticate Variables
$username = "yeah";
$passHash = "0cfe0ef3a357503c4a4538414b870ca1";

// Authenticate Username
if($username === $_POST["user"]){
    //echo "username authenticated";
    if($passHash === md5($_POST["pass"])){
        echo "password authenticated";
        session_start();
        $_SESSION["status"] = "loggedIN";
        $_SESSION["username"] = $_POST["user"];
    }

}

?>