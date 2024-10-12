<?php
session_start();

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

    $_SESSION['provider'] = $provider;

    $errors = validateProvider($provider);

    if (empty($errors)) {
        header("location: checkdata.php?");
    }

}

require_once __DIR__ . "/html/head.php";

?>

    <div class="row">
        <div class="col-2"></div>
        <div class="col">
            <h1 class="text-center">Contact</h1>

            <?php require_once __DIR__ . "/html/formulario.php"; ?>

        </div>
        <div class="col-2"></div>
    </div>

<?php
require_once __DIR__ . "/html/footer.php";
//session_destroy(); no destruir la sesion del que envía los datos
?>

