<?php

if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["message"])) {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);
    

    mail('chaniscoj@gmail.com', $name, $message);
    echo "worked!";
} else {
    echo "try again";
}

?>