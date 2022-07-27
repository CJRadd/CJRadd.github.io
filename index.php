<?php

if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["message"])) {
    $name = htmlspecialchars($_GET["name"]);
    $email = htmlspecialchars($_GET["email"]);
    $message = htmlspecialchars($_GET["message"]);
    

    // Displaying a welcome message
    echo "console.log('works')";
} else {
    echo "console.log('nope!')";
    
}

?>