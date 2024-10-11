<?php
//In this script do the self-validated form

$contacts = require_once __DIR__ . '/data.php';
require_once __DIR__ . "/functions.php";

$provider = [];

$errors;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $provider['id'] = trim(strip_tags($_POST['id']));
    $provider['title'] = trim(strip_tags($_POST['title']));
    $provider['name'] = trim(strip_tags($_POST['name']));
    $provider['surname'] = trim(strip_tags($_POST['surname']));
    $provider['birthdate'] = trim(strip_tags($_POST['birthdate']));
    $provider['phone'] = trim(strip_tags($_POST['phone']));
    $provider['email'] = trim(strip_tags($_POST['email']));

//    checkbox
    (isset($_REQUEST['favourite'])) ? $provider['favourite'] = true : $provider['favourite'] = false;
    (isset($_REQUEST['important'])) ? $provider['important'] = true : $provider['important'] = false;
    (isset($_REQUEST['archived'])) ? $provider['archived'] = true : $provider['archived'] = false;

    $errors = validateProvider($provider);
}


print_r($errors);

require_once __DIR__ . "/html/head.php";
?>


<body>
<div class="container mt-5">

<?php
foreach ($provider as $name => $value) {
    echo "<p class='m-1'>$name: $value</p>";
}

?>
    <div class="row">
        <div class="col-2"></div>
        <div class="col">
            <h1 class="text-center">Contact</h1>

            <?php require_once __DIR__ . "/html/formulario.php"; ?>

        </div>
        <div class="col-2"></div>
    </div>
</div>

<?php require_once __DIR__ . "/html/footer.php"; ?>

