<?php
    require "../../config/connect.php";

    $sql = "SELECT * FROM pocsquare.administrative_entities";
    $result = $dbcon->query($sql);

    $rows = $result->fetchAll(PDO::FETCH_ASSOC);
    if ($rows) {
        foreach ($rows as $row) {
            echo "<tr>";
            echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-5'>". $row['code'] . " - " . $row['province']. ", " . $row['district'] . ", " . $row['administrative_post'] . "</td>\n";
            echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-5'> X </td>\n";
            echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-5'> edit </td>\n";
            echo  "</tr>";
        }       
    }  else {
        echo  "Nenhum resultado.";
    }
?>