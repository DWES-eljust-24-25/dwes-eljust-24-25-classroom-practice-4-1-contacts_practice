<?php
//In this script, do the contact list table
$contacts = require_once __DIR__.'/data.php';

require_once __DIR__.'/functions.php';

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
                <?php showTable($contacts);?>
            </div>
        </div>

        <div class="col-2"></div>
    </div>

<?php require_once __DIR__ . "/html/footer.php"; ?>
