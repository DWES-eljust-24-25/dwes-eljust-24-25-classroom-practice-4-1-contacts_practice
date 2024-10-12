<?php

function checkContactDate(string $cadena): bool
{


    //Separo usando - como caracter de separación y lo añado a a las variables qe se crean en la lista
//    https://www.hashbangcode.com/article/using-list-explode-php
    list($anyo, $mes, $day) = explode("-", $cadena);

    // Convertimos los valores a enteros para las comparaciones
    $anyo = intval($anyo);
    $mes = intval($mes);
    $day = intval($day);

    //Para comprobar febrero.
    $february = ((($anyo % 4) == 0) && ((($anyo % 100) != 0) || (($anyo % 400) == 0)));

    // Valido el año
    if ($anyo < 1000 || $anyo > 3000) {
        return false; // falso si no es correcto
    }

    // Valido el mes
    if ($mes < 1 || $mes > 12) {
        return false; // falso si no es correcto
    }

    // Valido el día según el mes

    //Array con los días de cada mes por orden
    $daysInMonth = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];

    //Si el mes es febrero
    if ($mes == 2) {
        //Comprueba si un año es bisiesto. Si es bisiesto cambia el 28 por el 29
        //El 1 marca la posición de febrero de $daysInMonth
        $daysInMonth[1] = $february ? 29 : 28;
    }

    //Comprueba el día segun el mes recorriendo el array de días
    //Le resta uno a $mes para coincidir con el array $daysInMonth
    if ($day < 1 || $day > $daysInMonth[$mes - 1]) {
        return false;
    }

    // Si todas las condiciones se cumplen, la fecha es válida
    return true;
}

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
        echo "<button class='m-2 border-1'>Edit/Wiew</button>";
        echo "</td>";

        foreach ($fila as $key => $element) {

            //Muestro los datos segun el encabezado permitido
            if ($key == "id" || $key == "title" || $key == "name" || $key == "surname") {
                echo "<td class='p-2 border-2'>$element</td>";
            }
        }
        echo "</tr>";
    }

    echo "</tbody>";

    echo "</table>";
}

function validateProvider(array $provider): array
{

    $dateFormat= "^\d{4}([\-/.])(0?[1-9]|1[1-2])\1(3[01]|[12][0-9]|0?[1-9])$";

    $errors = [];
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
    } elseif (!preg_match("/[0-9]{9}/", $provider['phone'])) {
        $errors['phone'] = "Invalid phone format";
    }

    if (empty($provider['email'])) {
        $errors['email'] = "Email is required";
    } elseif (!filter_var($provider['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Invalid email format";
    }


    return $errors;
}



