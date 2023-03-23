<?php
require "../../config/connect.php";
session_start();

$province = $_POST['province'];
$district = trim($_POST['district']);

$checkDistrictQuery = "SELECT * FROM pocsquare.districts WHERE province = '$province'";
$checkDistrictResult = $dbcon->query($checkDistrictQuery);

$rows = $checkDistrictResult->fetchAll(PDO::FETCH_ASSOC);

$isFound = false;
foreach ($rows as $row) {
    if(strcasecmp($district , $row['district_name']) == 0) {
        $isFound = true;
        $_SESSION['registration-info'] = "Este distrito já foi adicionado!";
        $_SESSION['error'] = true;
        header("location: ../../../admin/add-location/location/district/");
    }
}

if(!$isFound) {
    try {

        $dbcon->beginTransaction();
    
        $saveDistrictQuery = "INSERT INTO pocsquare.districts 
                                        (province, district_name) 
                                        VALUES (?, ?)";
        $stmt = $dbcon->prepare($saveDistrictQuery);
        $stmt->execute([$province, $district]);
    
    
        $dbcon->commit();
        
        $_SESSION['registration-info'] = "Distrito adicionado com sucesso!";
        $_SESSION['error'] = false;
        header("location: ../../../admin/add-location/location/district/");
    
    } 
    catch(PDOException $ex) {
        //Something went wrong rollback!
        $dbcon->rollBack();
        echo $ex->getMessage();
    }
}
?>