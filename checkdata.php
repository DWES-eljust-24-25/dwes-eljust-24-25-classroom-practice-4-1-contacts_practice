<?php
session_start();


session_start();

require_once __DIR__ . "/html/head.php";

if (isset($_SESSION['provider'])) {
    $provider = $_SESSION['provider'];
    echo "<p>id: " . $provider['id'] . "</p>";
    echo "<p>title: " . $provider['title'] . "</p>";
    echo "<p>name: " . $provider['name'] . "</p>";
    echo "<p>surname: " . $provider['surname'] . "</p>";
    echo "<p>birthdate: " . $provider['birthdate'] . "</p>";
    echo "<p>phone: " . $provider['phone'] . "</p>";
    echo "<p>email: " . $provider['email'] . "</p>";

    if ($provider[favourite]){
        echo "<p>favourite: " . $provider['favourite'] . "</p>";
    }else{
        echo "<p>favourite: " . $provider['favourite'] . "</p>";
    }

    if ($provider[important]){
        echo "<p>important: " . $provider['important'] . "</p>";
    }else{
        echo "<p>important: " . $provider['important'] . "</p>";
    }

    if ($provider[archived]){
        echo "<p>archived: " . $provider['archived'] . "</p>";
    }else{
        echo "<p>archived: " . $provider['archived'] . "</p>";
    }


} else {
    echo "<p>No provider data</p>";
}

require_once __DIR__ . "/html/footer.php";
session_destroy();

