<?php


function showTable(array $data, ?array $header = null)
{


    //Encabezado
    //Saco los encabezados a un array
    if ($header === null) {
        $encabezado = array_keys($data[0]);
    }else{
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
            echo "<th class='p-2 bg-warning border-3 text-center'>". strtoupper($key)."</th>";
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

    $errors = [];
    if (empty($provider['name'])) {
        $errors['name'] = "* Name is required";
    }elseif (strlen($provider['name']) < 4) {
        $errors['name'] = "* Name must be at least 4 characters long";
    }


    if (empty($provider['email'])) {
        $errors['email'] = "* Email is required";
    } elseif (!filter_var($provider['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "* Invalid email format";
    }

    if(empty($provider['cif'])) {
        $errors['cif'] = "* CIF is required";
    } elseif (!preg_match("/ˆ[A-Z a-z]{1}[0-9]{8}$/", $provider['cif'])) {
        $errors['cif'] = "* Invalid CIF format";
    }


    return $errors;
}



