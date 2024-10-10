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

