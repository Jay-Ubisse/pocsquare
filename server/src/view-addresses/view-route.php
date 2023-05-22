<?php
    require "../../config/connect.php";
    session_start();

    $id = $_POST['id'];

    //dados das entidades administrativas
    $adminEntityQuery = "SELECT * FROM $database_name.administrative_entities WHERE entity_id = $id";
    $adminEntityResult = $dbcon->query($adminEntityQuery);
    $adminEntityRows = $adminEntityResult->fetch(PDO::FETCH_ASSOC);

    $_SESSION["province"] = $adminEntityRows["province"];
    $_SESSION["district"] = $adminEntityRows["district"];
    $_SESSION["administrative_post"] = $adminEntityRows["administrative_post"];
    $_SESSION["neighborhood_locality"] = $adminEntityRows["neighborhood_locality"];

    //dados das entidades Locais
    $localEntityQuery = "SELECT * FROM $database_name.local_entities WHERE entity_id = $id";
    $localEntityResult = $dbcon->query($localEntityQuery);
    $localEntityRows = $localEntityResult->fetch(PDO::FETCH_ASSOC);

    $_SESSION["cell"] = $localEntityRows["cell"];
    $_SESSION["circle"] = $localEntityRows["circle"];
    $_SESSION["village"] = $localEntityRows["village"];
    $_SESSION["township"] = $localEntityRows["township"];

    
?>