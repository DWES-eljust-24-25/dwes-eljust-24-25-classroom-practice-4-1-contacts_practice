<?php


function showTable(array $data, ?array $header = null)
{

    //Saco los encabezados a un array
    if ($header === null) {
        $encabezado = array_keys($data[0]);
    }else{
        $encabezado = array_keys($header[0]);
    }

    echo "<table border='1'>";

    //Encabezado
    echo "<thead><tr>";

    //Creo las celdas de los encabezados
    foreach ($encabezado as $item) {
        echo "<th style='padding: 5px;'>$item </th>";
    }

    echo "</tr></thead>";

    //Cuerpo de la tabla
    echo "<tbody>";

    //Muestro los datos
    foreach ($data as $fila) {
        echo "<tr>";
        foreach ($fila as $key => $element) {

            //Centro los numéricos
            if (is_numeric($element)) {
                echo "<td style='text-align: center;padding: 5px;'>$element</td>";
            } else {
                echo "<td style='padding: 5px;'>$element</td>";
            }
        }
        echo "</tr>";
    }

    echo "</tbody>";

    echo "</table>";
}
//In this script, place the functions
