<?php

if(isset($_GET["name"]) && isset($_GET["email"]) && isset($_GET["message"])) {
    $name = htmlspecialchars($_GET["name"]);
    $email = htmlspecialchars($_GET["email"]);
    $message = htmlspecialchars($_GET["message"]);
    

    mail('chaniscoj@gmail.com', $name, $message);
    echo "worked!";
} else {
    echo "try again";
}

?>