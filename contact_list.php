<?php
//Importo los datos de data.php en la cariable para la función showTable
$contacts = require_once __DIR__.'/data.php';

//Importo functios
require_once __DIR__.'/functions.php';

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
