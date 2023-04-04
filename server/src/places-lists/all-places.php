<?php
    require "../../config/connect.php";

    $sql = "SELECT * FROM $database_name.administrative_entities";
    $result = $dbcon->query($sql);

    $rows = $result->fetchAll(PDO::FETCH_ASSOC);
    if ($rows) {
        foreach ($rows as $row) {
            echo "<tr>";
            echo  "<td class='border-collapse border-2 border-orange-700 text-lg font-medium py-2 px-5'>". $row['code'] . " - " . $row['province']. ", " . $row['district'] . ", " . $row['administrative_post'] . "</td>\n";
            echo  "<td class='border-collapse border-2 border-orange-700 text-green-600 py-2 px-5'> <i class=\"fa-solid fa-pen-to-square fa-lg\"></i></td>\n";
            echo  "<td class='border-collapse border-2 border-orange-700 text-red-600 py-2 px-5'> <i class=\"fa-solid fa-xmark fa-lg\"></i> </td>\n";
            echo  "</tr>";
        }       
    }  else {
        echo  "Nenhum resultado.";
    }
?>