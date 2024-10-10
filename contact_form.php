<?php
//In this script do the self-validated form

$contacts = require_once __DIR__.'/data.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">

    <div class="row">
        <div class="col-2"></div>
        <div class="col">
            <h1 class="text-center">Contact</h1>

            <form class="border border-2 p-3" action="checkdata.php" method="get">

                <div class="row g-3 align-items-center mb-3" >
                    <div class="col-auto">
                        <label for="id" class="col-form-label">ID</label>
                    </div>
                    <div class="col-auto">
                        <input type="text" id="id" class="form-control" readonly>
                    </div>
                </div>

                <div class="mb-3">
                    <p>Title</p>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="title" id="radio01" value="Mr.">
                        <label class="form-check-label" for="radio01">Mr.</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="title" id="radio02" value="Mrs.">
                        <label class="form-check-label" for="radio02">Mrs.</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="title" id="radio03" value="Miss">
                        <label class="form-check-label" for="radio03">Miss</label>
                    </div>
                </div>

                <div class="row g-3 align-items-center mb-3">
                    <div class="col-auto">
                        <label for="name" class="col-form-label">First name</label>
                    </div>
                    <div class="col-auto">
                        <input type="text" id="name" name="name" class="form-control">
                    </div>
                    <div class="col-auto">
                        <label for="surname" class="col-form-label">Surname</label>
                    </div>
                    <div class="col-auto">
                        <input type="text" id="surname" name="surname" class="form-control"">
                    </div>
                </div>

                <div class="row g-3 align-items-center mb-3">
                    <div class="col-auto">
                        <label for="birth" class="col-form-label">Birth date</label>
                    </div>
                    <div class="col-auto">
                        <input type="date" id="birth" name="birth" class="form-control">
                    </div>
                </div>
                <div class="row g-3 align-items-center mb-3">
                    <div class="col-auto">
                        <label for="phone" class="col-form-label">Phone</label>
                    </div>
                    <div class="col-auto">
                        <input type="password" id="phone" name="phone" class="form-control">
                    </div>
                </div>
                <div class="row g-3 align-items-center mb-3">
                    <div class="col-auto">
                        <label for="pass" class="col-form-label">Password</label>
                    </div>
                    <div class="col-auto">
                        <input type="text" id="pass" name="pass" class="form-control">
                    </div>
                </div>

                <p>Type</p>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="favourite" id="check01">
                    <label class="form-check-label" for="check01">
                        Favourite
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="important" id="check02">
                    <label class="form-check-label" for="check02">
                        Important
                    </label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" value="archived" id="check03">
                    <label class="form-check-label" for="check03">
                        Archived
                    </label>
                </div>

                <input type="submit" class="btn btn-secondary" value="Save">
                <input type="submit" class="btn btn-secondary" value="Update" disabled>
                <input type="submit" class="btn btn-secondary" value="Delete" disabled>
            </form>
        </div>
        <div class="col-2"></div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

