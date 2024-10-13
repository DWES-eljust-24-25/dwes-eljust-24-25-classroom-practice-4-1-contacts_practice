<?php

//inicio sesión
session_start();

//Paso datos importados a un array
$provider = $_SESSION['provider'];

//importo cabecera
require_once __DIR__ . "/html/head.php";

//Compruebo si llegan datos desde el formulario y si es correcto los muestro
if (isset($_SESSION['provider'])) {

    echo "<p>id: " . $provider['id'] . "</p>";
    echo "<p>title: " . $provider['title'] . "</p>";
    echo "<p>name: " . $provider['name'] . "</p>";
    echo "<p>surname: " . $provider['surname'] . "</p>";
    echo "<p>birthdate: " . $provider['birthdate'] . "</p>";
    echo "<p>phone: " . $provider['phone'] . "</p>";
    echo "<p>email: " . $provider['email'] . "</p>";


    echo "<p>favourite: " . $provider['favourite'] . "</p>";
    echo "<p>important: " . $provider['important'] . "</p>";
    echo "<p>archived: " . $provider['archived'] . "</p>";


} else {
    echo "<p>No provider data</p>";
}

?>

<!--    <a class="btn btn-secondary" href="contact_form.php">Form return</a>-->
    <a class="btn btn-secondary" href="contact_list.php?

    <?=
    "&id=" . $provider["id"]
    . "&title=" . $provider["title"]
    . "&name=" . $provider["name"]
    . "&surname=" . $provider["surname"]
    . "&birthdate=" . $provider["birthdate"]
    . "&phone=" . $provider["phone"]
    . "&email=" . $provider["email"]
    . "&favourite=" . $provider["favourite"]
    . "&important=" . $provider["important"]
    . "&archived=" . $provider["archived"]
    ?>
">Data table</a>

<?php

//Importo el footer
require_once __DIR__ . "/html/footer.php";

