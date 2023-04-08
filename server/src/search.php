<?php
    require "../config/connect.php";
    
    $data = $_POST["data"];

    $sql = "SELECT * FROM $database_name.main_address_info WHERE province LIKE '%$data%' OR district LIKE '%$data%' OR neighborhood LIKE '%$data%' OR locality LIKE '%$data%' OR road_name LIKE '%data%' OR cep LIKE '%data%'";
    $result = $dbcon->query($sql);

    $rows = $result->fetchAll(PDO::FETCH_ASSOC);
    if ($rows) {
        echo "<ul class='my-5'>";
        foreach ($rows as $row) {
            if ($row['neighborhood'] == " ") {
                $neighborhoodOrLocality = $row['locality'];
            } else {
                $neighborhoodOrLocality = $row['neighborhood'];
            }
            echo "<li onclick=\"showInfo('" . $row['province'] . "," . $row['district'] . "," . $row['neighborhood'] . "," . $row['locality'] . "," . $row['city_block'] . "," . $row['road_name'] . "," . $row['door_number'] . "," . $row['cep'] .  "," . $row['phone_number'] .  "," . $row['email'] .  "," . $row['website'] .  "')\" class='my-2 p-3 px-5 text-lg font-medium hover:bg-slate-300'>" . $row['road_name'] . ", " . $neighborhoodOrLocality . ", " . $row['district'] . ", " . $row['province'] . "</li>";
        }
        echo "</ul>";        
    }  else {
        echo  "Nenhum resultado.";
    }
?>