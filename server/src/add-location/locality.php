<?php
require "../../config/connect.php";
session_start();

$province = $_POST['province'];
$district = trim($_POST['locality']);

switch ($province) {
    case 'Maputo Cidade':
        $checklocalityQuery = "SELECT * FROM pocsquare.mc_locality WHERE";
        break;
    case 'Maputo Provincia':
        $checklocalityQuery = "SELECT * FROM pocsquare.mp_locality WHERE";
        break;
    case 'Gaza':
         $checklocalityQuery = "SELECT * FROM pocsquare.gz_locality WHERE";
        break;
    case 'Inhambane':
        $checklocalityQuery = "SELECT * FROM pocsquare.in_locality WHERE";
        break;
    case 'Manica':
        $checklocalityQuery = "SELECT * FROM pocsquare.mn_locality WHERE";
        break;
    case 'Sofala':
        $checklocalityQuery = "SELECT * FROM pocsquare.sf_locality WHERE";
        break;
    case 'Tete':
        $checklocalityQuery = "SELECT * FROM pocsquare.tt_locality WHERE";
        break;
    case 'Nampula':
        $checklocalityQuery = "SELECT * FROM pocsquare.np_locality WHERE";
        break;
    case 'Niassa':
        $checklocalityQuery = "SELECT * FROM pocsquare.ns_locality WHERE";
        break;
    case 'Zambézia':
        $checklocalityQuery = "SELECT * FROM pocsquare.zb_locality WHERE";
        break;
    case 'Cabo Delgado':
        $checklocalityQuery = "SELECT * FROM pocsquare.cd_locality WHERE";
        break;
    default:
        # code...
        break;
}


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