<?php
require "../config/connect.php";
session_start();

//administrative entities
$province = $_POST["province"];
$district = $_POST["district"];
$administrative_post = $_POST["administrative_post"];
$locality = $_POST["locality"];
$neighborhood = $_POST["neighborhood"];

//local entities
$cell = $_POST["cell"];
$circle = $_POST["circle"];
$village = $_POST["village"];
$zone = $_POST["zone"];
$township = $_POST["township"];


switch ($province) {
    case 'MP':
        $province_name = "Maputo Província";
        $province_id = "02";
        break;
    case 'GZ':
        $province_name = "Gaza";
        $province_id = "03";
        break;
    case 'IN':
        $province_name = "Inhambane";
        $province_id = "04";
        break;
    default:
        break;
}

try {

    $dbcon->beginTransaction();

    $administrative_entities_query = "INSERT INTO administrative_entities () VALUES ()";
    $stmt = $dbcon->prepare("QUERY");
    $stmt->execute();

    $local_entities_query = "INSERT INTO administrative_entities () VALUES ()";
    $stmt = $dbcon->prepare("ANOTHER QUERY??");
    $stmt->execute();

    $dbcon->commit();

} 
catch(PDOException $ex) {
    //Something went wrong rollback!
    $dbcon->rollBack();
    echo $ex->getMessage();
}


?>