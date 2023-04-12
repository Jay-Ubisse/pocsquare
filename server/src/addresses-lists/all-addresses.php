<?php
    require "../../config/connect.php";
    session_start();

    $sql = "SELECT * FROM $database_name.main_address_info ORDER BY cep";
    $result = $dbcon->query($sql);

    echo    "<tr>";
    echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-5'>CEP</th>";
    echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-5'>Endereço</th>";
    echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-5'>Usuário responsável</th>";
    echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-5'>Ver detalhes</th>";
    echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-5'>Editar</th>";
    echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-5'>Eliminar</th>";
    echo   "</tr>";

    $rows = $result->fetchAll(PDO::FETCH_ASSOC);
    if ($rows) {
        foreach ($rows as $row) {
            echo "<tr class='font-normal'>";
            echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-5'>". $row['cep'] . "</td>\n";
            echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-5'>" . $row['road_name'] . ", " . $row['district'] . ", " . $row['province'] . "</td>\n";
            echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-5'>" . $_SESSION['user-data']['username']  . "</td>\n";
            echo  "<td class='border-collapse border-2 border-orange-700 text-blue-600 py-2 px-5 text-center'><a href=''><i class=\"fa-solid fa-circle-info\"></i></a></td>\n";
            echo  "<td class='border-collapse border-2 border-orange-700 text-green-600 py-2 px-5 text-center'><a href=''><i class=\"fa-solid fa-pen-to-square fa-lg\"></i></a></td>\n";
            echo  "<td class='border-collapse border-2 border-orange-700 text-red-600 py-2 px-5 text-center'><a href=''><i class=\"fa-solid fa-xmark fa-lg\"></i></a></td>\n";
            echo  "</tr>";
        }       
    }  else {
        echo  "Nenhum resultado.";
    }
?>