<?php

//Obliga a tipar correctamente las funciones
declare(strict_types=1);

//$data = require_once __DIR__ . '/data.php';

//Función para crear una tabla con uno o dos arrays
function showTable(array $data, ?array $header = null)
{


    //Encabezado
    //Saco los encabezados a un array
    if ($header === null) {
        $encabezado = array_keys($data[0]);
    } else {
        $encabezado = array_keys($header[0]);
    }

    echo "<table>";

    //Encabezado
    echo "<thead><tr>";

    //Celda en blanco
    echo "<th  class='p-2 bg-warning border-3'></th>";

    //Creo las celdas de los encabezados
    foreach ($encabezado as $key) {
        // filtro los encabezados no necesarios
        if ($key == "id" || $key == "title" || $key == "name" || $key == "surname") {
            echo "<th class='p-2 bg-warning border-3 text-center'>" . strtoupper($key) . "</th>";
        }
    }

    echo "</tr></thead>";

    //Cuerpo
    echo "<tbody>";

    //Muestro los datos
    foreach ($data as $fila) {
        echo "<tr>";

        //Botón editar
        echo "<td class='p-2 border-2'>";

//        Etiqueta a con href preparado para pasar los datos de un contacto selecionado mediante get
        echo "<a href='contact_form.php?"

            . "&id=" . $fila["id"]
            . "&title=" . $fila["title"]
            . "&name=" . $fila["name"]
            . "&surname=" . $fila["surname"]
            . "&birthdate=" . $fila["birthdate"]
            . "&phone=" . $fila["phone"]
            . "&email=" . $fila["email"]
            . "&favourite=" . $fila["favourite"]
            . "&important=" . $fila["important"]
            . "&archived=" . $fila["archived"]
            . "&disabled=" . "disabled"

            . "' class='m-2 border-1 btn btn-secondary'>Edit/Wiew</a>";

        echo "</td>";

        foreach ($fila as $key => $element) {

            //Muestro los datos segun el encabezado que aparece en el enunciado de la práctica
            if ($key == "id" || $key == "title" || $key == "name" || $key == "surname") {
                echo "<td class='p-2 border-2'>$element</td>";
            }
        }
        echo "</tr>";
    }

    echo "</tbody>";

    echo "</table>";
}

//funcioón para comprobar los errores del formlario
function validateProvider(array $provider): array
{

//    inicio una array que voy llenando segun los errores que encuentre
    $errors = [];

//    si está vacío
    if (empty($provider['name'])) {
        $errors['name'] = "Name is required";
    }

    if (empty($provider['name'])) {
        $errors['name'] = "Name is required";
    }

    if (empty($provider['surname'])) {
        $errors['surname'] = "Surname is required";
    }

    if (empty($provider['birthdate'])) {
        $errors['birthdate'] = "Birthdate is required";
    }

    if (empty($provider['phone'])) {
        $errors['phone'] = "Phone is required";
//        Con expresiión regular
    } elseif (!preg_match("/[0-9]{9}/", $provider['phone'])) {
        $errors['phone'] = "Invalid phone format";
    }

    if (empty($provider['email'])) {
        $errors['email'] = "Email is required";
//        Con un filtro de PHP
    } elseif (!filter_var($provider['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Invalid email format";
    }

//    Devuelvo el array vacío si no hay errores o con los mensajes si se encuentra alguno
    return $errors;
}



