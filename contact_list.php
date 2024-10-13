<?php
//Importo los datos de data.php en la cariable para la función showTable
$contacts = require_once __DIR__.'/data.php';

//Importo functios
require_once __DIR__.'/functions.php';

//inicio sesión
//session_start();
//
//$provider = $_SESSION['provider'];

//print_r($provider)
//
$provider= [];

//Si recivo los datos desde contact_list.php por get entra y rellena $provaider
if (isset($_GET['id'])) {

    isset($_GET['id']) ? $provider['id'] = $_GET['id'] : '';
    isset($_GET['title']) ? $provider['title'] = $_GET['title']  : '';
    isset($_GET['name']) ? $provider['name'] = $_GET['name']  : '';
    isset($_GET['surname']) ? $provider['surname'] = $_GET['surname']  : '';
    isset($_GET['birthdate'])? $provider['birthdate'] = $_GET['birthdate']  : '';
    isset($_GET['phone'])? $provider['phone'] = $_GET['phone']  : '';
    isset($_GET['email']) ? $provider['email'] = $_GET['email']  : '';
    isset($_GET['favourite']) ? $provider['favourite'] = $_GET['favourite']  : '';
    isset($_GET['important'])? $provider['important'] = $_GET['important']  : '';
    isset($_GET['archived'])? $provider['archived'] = $_GET['archived']  : '';

}

print_r($provider);



//Importo cabecera
require_once __DIR__ . "/html/head.php";
?>

    <div class="row">

        <div class="col-2"></div>


        <div class="col-8">
            <h1 class="mt-5 text-center">Contact list</h1>
            <div class="d-flex justify-content-center mt-3">
<!--                botón de crear usuario-->
                <a class="btn btn-secondary" href="contact_form.php">Create new contact</a>
            </div>

            <div class="mt-3 d-flex justify-content-center">
<!--                tabla-->
<!--                Llamo a la función showTable() de functions.php-->
                <?php showTable($contacts);?>
            </div>
        </div>

        <div class="col-2"></div>
    </div>

<!--//Importo footer-->
<?php require_once __DIR__ . "/html/footer.php"; ?>
