<?php

//inicio sesión
session_start();

require_once __DIR__ . "/functions.php";

//Variables del script
//contendra los datos del formularío y para sus value
$provider = [
    'title' => '',
    'favourite' => false,
    'important' => false,
    'archived' => false,
];

//Contendra los mensajes de error del formulario
$errors = [];

//Si recibo los datos desde contact_list.php por get entra y rellena $provaider
//He pasado todos los datos, ya que he sido incapaz de leer los datos con solo el id y usando foreach.
//He perdido muchas horas intentandolo
if (isset($_GET['id'])) {

    isset($_GET['id']) ? $provider['id'] = $_GET['id'] : '';
    isset($_GET['title']) ? $provider['title'] = $_GET['title'] : '';
    isset($_GET['name']) ? $provider['name'] = $_GET['name'] : '';
    isset($_GET['surname']) ? $provider['surname'] = $_GET['surname'] : '';
    isset($_GET['birthdate']) ? $provider['birthdate'] = $_GET['birthdate'] : '';
    isset($_GET['phone']) ? $provider['phone'] = $_GET['phone'] : '';
    isset($_GET['email']) ? $provider['email'] = $_GET['email'] : '';
    isset($_GET['favourite']) ? $provider['favourite'] = $_GET['favourite'] : '';
    isset($_GET['important']) ? $provider['important'] = $_GET['important'] : '';
    isset($_GET['archived']) ? $provider['archived'] = $_GET['archived'] : '';
}

//Si se envía el formulario rellena o canbia los datos provaider
//y envía el resultado a checkdata.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

//    lee los datos del formulario. Trim borra espacios vacios delante y retras
    $provider['id'] = trim(strip_tags($_POST['id']));
    $provider['title'] = trim(strip_tags($_POST['title']));
    $provider['name'] = trim(strip_tags($_POST['name']));
    $provider['surname'] = trim(strip_tags($_POST['surname']));
    $provider['birthdate'] = trim(strip_tags($_POST['birthdate']));
    $provider['phone'] = trim(strip_tags($_POST['phone']));
    $provider['email'] = trim(strip_tags($_POST['email']));

//    Comprovación de los checkbox
    (isset($_REQUEST['favourite'])) ? $provider['favourite'] = true : $provider['favourite'] = false;
    (isset($_REQUEST['important'])) ? $provider['important'] = true : $provider['important'] = false;
    (isset($_REQUEST['archived'])) ? $provider['archived'] = true : $provider['archived'] = false;

//    Copio provaider a la sesión provaider
    $_SESSION['provider'] = $provider;

//    ompruebo errores en el formulario
    $errors = validateProvider($provider);

//    Si el formulario está correcto envío los datos
    if (empty($errors)) {
        header("location: checkdata.php?");
    }

}

//importo cabecera
require_once __DIR__ . "/html/head.php";

?>

    <div class="row">
        <div class="col-2"></div>
        <div class="col">
            <h1 class="text-center">Contact</h1>

            <!--        importo el formulario desde formulario.php-->
            <?php require_once __DIR__ . "/html/formulario.php"; ?>

        </div>
        <div class="col-2"></div>
    </div>

<?php
//Importo el footer
require_once __DIR__ . "/html/footer.php";
//session_destroy(); no destruir la sesion del que envía los datos


