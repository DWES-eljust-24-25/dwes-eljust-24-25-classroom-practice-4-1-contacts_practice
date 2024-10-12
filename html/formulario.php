

<form class="border border-2 p-3" action="

<?php

if (count($errors) == 0){
    echo htmlspecialchars('checkdata.php');
//    echo htmlspecialchars($_SERVER['PHP_SELF']);
}

?>

" method="post">
    <!--            <form class="border border-2 p-3" action="checkdata.php" method="get">-->

<!--    ID-->
    <div class="row g-3 align-items-center mb-3">
        <div class="col-auto">
            <label for="id" class="col-form-label">ID</label>
        </div>
        <div class="col-auto">
            <input type="text" id="id" class="form-control" name="id" value="0" readonly>
        </div>
    </div>

<!--    Title-->
    <div class="mb-3">
        <p>Title</p>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="title" id="radio01"
                <?= $provider['title'] == "Mr." ? "checked" : 'checked' ?> value="Mr.">
            <label class="form-check-label" for="radio01">Mr.</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="title" id="radio02"
                <?= $provider['title'] == "Mrs." ? "checked" : '' ?> value="Mrs.">
            <label class="form-check-label" for="radio02">Mrs.</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="title" id="radio03"
                <?= $provider['title'] == "Miss"? "checked" : '' ?> value="Miss">
            <label class="form-check-label" for="radio03">Miss</label>
        </div>
    </div>

<!--    name-->
    <div class="row g-3 align-items-center mb-3  needs-validation">
        <div class="col-auto">
            <label for="name" class="col-form-label">First name</label>
        </div>
        <div class="col-auto">
            <input type="text" id="name" name="name" class="form-control"
                   value="<?= $provider['name'] ?? '' ?>">
            <span style="color:red"> <?= $errors['name'] ?? '' ?> </span>
        </div>

<!--        Surname-->
        <div class="col-auto">
            <label for="surname" class="col-form-label">Surname</label>
        </div>
        <div class="col-auto">
            <input type="text" id="surname" name="surname" class="form-control"
                   value="<?= $provider['surname'] ?? '' ?>">
            <span style="color:red"> <?= $errors['surname'] ?? '' ?> </span>
        </div>
    </div>

    <div class="row g-3 align-items-center mb-3">
<!--        Date-->
        <div class="col-auto">
            <label for="birthdate" class="col-form-label">Birthdate date</label>
        </div>
        <div class="col-auto">
            <input type="date" id="birthdate" name="birthdate" class="form-control"
                   value="<?= $provider['birthdate'] ?? '' ?>">
            <span style="color:red"> <?= $errors['birthdate'] ?? '' ?> </span>
        </div>
    </div>

<!--    Phone-->
    <div class="row g-3 align-items-center mb-3">
        <div class="col-auto">
            <label for="phone" class="col-form-label">Phone</label>
        </div>
        <div class="col-auto">
            <input type="text" id="phone" name="phone" class="form-control"
                   value="<?= $provider['phone'] ?? '' ?>">
            <span style="color:red"> <?= $errors['phone'] ?? '' ?> </span>
        </div>
    </div>

<!--    Email-->
    <div class="row g-3 align-items-center mb-3">
        <div class="col-auto">
            <label for="email" class="col-form-label">Email</label>
        </div>
        <div class="col-auto">
            <input type="text" id="phone" name="email" class="form-control"
                   value="<?= $provider['email'] ?? '' ?>">
            <span style="color:red"> <?= $errors['email'] ?? '' ?> </span>
        </div>
    </div>

<!--    CheckBox-->
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

<!--    Buttons-->
    <div class="mt-3">
        <input type="submit" class="btn btn-secondary" value="Save">
        <input type="submit" class="btn btn-secondary" value="Update" disabled>
        <input type="submit" class="btn btn-secondary" value="Delete" disabled>
    </div>
</form>
