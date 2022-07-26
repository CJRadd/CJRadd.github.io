<?php

if(isset($_GET["name"]) && isset($_GET["email"]) && isset($_GET["message"])) {
    $name = htmlspecialchars($_GET["name"]);
    $email = htmlspecialchars($_GET["email"]);
    $message = htmlspecialchars($_GET["message"]);
    

    // Displaying a welcome message
    echo "Hello $name, $email, $message ";
    echo "<p>oops</p>";
} else {
    echo "<p>Hi there! Welcome to our website.</p>";
}

?>