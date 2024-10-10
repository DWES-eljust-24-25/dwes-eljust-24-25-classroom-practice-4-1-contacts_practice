<?php
//In this script, do the contact list table
$contacts = require_once __DIR__.'/data.php';
require_once __DIR__.'/functions.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact list</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">

    <div class="row">

        <div class="col-2"></div>


        <div class="col-8">
            <h1 class="mt-5 text-center">Contact list</h1>
            <div class="d-flex justify-content-center mt-3">
<!--                botón de crear usuario-->
                <button class="btn btn-secondary">Create new contact</button>
            </div>

            <div class="mt-3 d-flex justify-content-center">
<!--                tabla-->
                <?php showTable($contacts);?>
            </div>
        </div>

        <div class="col-2"></div>
    </div>




</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

