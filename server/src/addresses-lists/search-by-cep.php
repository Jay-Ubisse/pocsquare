<?php
    require "../../config/connect.php";
    session_start();

    $cep = $_POST['inputData'];
    $date = $_POST['inputDate'];

    $table = "main_address_info";
    $sql = "SELECT * FROM $database_name.$table WHERE cep LIKE '%$cep%' ORDER BY cep";
    $result = $dbcon->query($sql);

    echo    "<tr>";
    echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-2'>CEP</th>";
    echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-2'>Endereço</th>";
    echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-2'>Usuário responsável</th>";
    echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-2'>Ver detalhes</th>";
    echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-2'>Editar</th>";
    echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-2'>Eliminar</th>";
    echo   "</tr>";

    $rows = $result->fetchAll(PDO::FETCH_ASSOC);
    if ($rows) {
        foreach ($rows as $row) {
            echo "<tr class='font-normal'>";
            echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-2'>". $row['cep'] . "</td>\n";
            echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-2'>" . $row['road_name'] . ", " . $row['district'] . ", " . $row['province'] . "</td>\n";
            echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-2'>" . $row['responsible']  . "</td>\n";
            echo  "<td class='border-collapse border-2 border-orange-700 text-blue-600 py-2 px-2 text-center'>
                <a href='' onclick=\"viewInfo('" . $row['entity_id'] . "')\"><i class=\"fa-solid fa-circle-info\"></i></a></td>\n";
            echo  "<td class='border-collapse border-2 border-orange-700 text-green-600 py-2 px-2 text-center'>
                <a href='' onclick=\"updateAddress('" . $row['entity_id'] . "')\"><i class=\"fa-solid fa-pen-to-square fa-lg\"></i></a></td>\n";
            echo  "<td class='border-collapse border-2 border-orange-700 text-red-600 py-2 px-2 text-center'>
                <a href='' onclick=\"sendDataForDeletion('" . $row['entity_id'] . "," . $table . "')\"><i class=\"fa-solid fa-xmark fa-lg\"></i></a></td>\n";
            echo  "</tr>";
        }       
    }  else {
        echo  "Nenhum resultado.";
    }
?>