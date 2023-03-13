<?php
    require "../config/connect.php";
    
    $data = $_POST["data"];

    $sql = "SELECT * FROM pocsquare.administrative_entities WHERE province LIKE '%$data%'";
    $result = $dbcon->query($sql);

    $rows = $result->fetchAll(PDO::FETCH_ASSOC);
    if ($rows) {
        echo "<ul class='my-5'>";
        foreach ($rows as $row) {
            echo "<li onclick=\"showInfo('" . $row['province'] . "," . $row['district'] . "," . $row['administrative_post'] . "," . $row['code'] . "')\" class='my-2 p-3 px-5 text-lg font-medium hover:bg-slate-300'>" . $row['administrative_post'] . ", " . $row['district'] . ", " . $row['province'] . "</li>";
        }
        echo "</ul>";        
    }  else {
        echo  "Nenhum resultado.";
    }
?>