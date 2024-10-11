<?php
//In this script do the self-validated form

$contacts = require_once __DIR__ . '/data.php';
require_once __DIR__ . "/functions.php";

$provider = [];

global $errors;

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

            <form class="border border-2 p-3" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
                  method="post">
                <!--            <form class="border border-2 p-3" action="checkdata.php" method="get">-->

                <div class="row g-3 align-items-center mb-3">
                    <div class="col-auto">
                        <label for="id" class="col-form-label">ID</label>
                    </div>
                    <div class="col-auto">
                        <input type="text" id="id" class="form-control" name="id" value="0" readonly>
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
                        <input type="text" id="name" name="name" class="form-control"
                               value="<?= $provider['name'] ?? '' ?>">
                    </div>
                    <div class="invalid-feedback">
                        <span class="error" style="color: red"> <?= $errors['name'] ?? '' ?> </span> <br><br>
                    </div>

                    <div class="col-auto">
                        <label for="surname" class="col-form-label">Surname</label>
                    </div>
                    <div class="col-auto">
                        <input type="text" id="surname" name="surname" class="form-control"
                               value="<?= $provider['surname'] ?? '' ?>">
                    </div>
                </div>

                <div class="row g-3 align-items-center mb-3">
                    <div class="col-auto">
                        <label for="birthdate" class="col-form-label">birthdate date</label>
                    </div>
                    <div class="col-auto">
                        <input type="date" id="birthdate" name="birthdate" class="form-control"
                               value="<?= $provider['birthdate'] ?? '' ?>">
                    </div>
                </div>
                <div class="row g-3 align-items-center mb-3">
                    <div class="col-auto">
                        <label for="phone" class="col-form-label">Phone</label>
                    </div>
                    <div class="col-auto">
                        <input type="text" id="phone" name="phone" class="form-control"
                               value="<?= $provider['phone'] ?? '' ?>">
                    </div>
                </div>
                <div class="row g-3 align-items-center mb-3">
                    <div class="col-auto">
                        <label for="email" class="col-form-label">Email</label>
                    </div>
                    <div class="col-auto">
                        <input type="text" id="phone" name="email" class="form-control"
                               value="<?= $provider['email'] ?? '' ?>">
                    </div>
                </div>

                <p>Type</p>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="favourite"
                           id="check01" <?= $provider['favourite'] == true ? "checked" : '' ?>>
                    <label class="form-check-label" for="check01">
                        Favourite
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="important"
                           id="check02" <?= $provider['important'] == true ? "checked" : '' ?>>
                    <label class="form-check-label" for="check02">
                        Important
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="archived"
                           id="check03" <?= $provider['archived'] ? "checked" : '' ?>>
                    <label class="form-check-label" for="check03">
                        Archived
                    </label>
                </div>

                <div class="mt-3">
                    <input type="submit" class="btn btn-secondary" value="Save">
                    <input type="submit" class="btn btn-secondary" value="Update" disabled>
                    <input type="submit" class="btn btn-secondary" value="Delete" disabled>
                </div>
            </form>
        </div>
        <div class="col-2"></div>
    </div>
</div>

<?php require_once __DIR__ . "/html/footer.php"; ?>

