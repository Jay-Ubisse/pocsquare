<?php
require "../../config/connect.php";
session_start();

$province = $_POST['province'];
$district = trim($_POST['district']);

switch ($province) {
    case 'Maputo Cidade':
        $checkDistrict = "SELECT * FROM jayubiss_pocsquareocs.mc_district";
        $isFound = checkDistrict($checkDistrict);
        if($isFound) {
            errorMEssage();
        } else {
            saveDistrict("mc_district");
        }
        break;
    case 'Maputo Província':
        $checkDistrict = "SELECT * FROM jayubiss_pocsquareocs.mp_district";
        $isFound = checkDistrict($checkDistrict);
        if($isFound) {
            errorMEssage();
        } else {
            saveDistrict("mp_district");
        }
        break;
    case 'Gaza':
        $checkDistrict = "SELECT * FROM jayubiss_pocsquareocs.gz_district";
        $isFound = checkDistrict($checkDistrict);
        if($isFound) {
            errorMEssage();
        } else {
            saveDistrict("gz_district");
        }
        break;
    case 'Inhambane':
        $checkDistrict = "SELECT * FROM jayubiss_pocsquareocs.in_district";
        $isFound = checkDistrict($checkDistrict);
        if($isFound) {
            errorMEssage();
        } else {
            saveDistrict("in_district");
        }
        break;
    case 'Manica':
        $checkDistrict = "SELECT * FROM jayubiss_pocsquareocs.mn_district";
        $isFound = checkDistrict($checkDistrict);
        if($isFound) {
            errorMEssage();
        } else {
            saveDistrict("mn_district");
        }
        break;
    case 'Sofala':
        $checkDistrict = "SELECT * FROM jayubiss_pocsquareocs.sf_district";
        $isFound = checkDistrict($checkDistrict);
        if($isFound) {
            errorMEssage();
        } else {
            saveDistrict("sf_district");
        }
        break;
    case 'Tete':
        $checkDistrict = "SELECT * FROM jayubiss_pocsquareocs.tt_district";
        $isFound = checkDistrict($checkDistrict);
        if($isFound) {
            errorMEssage();
        } else {
            saveDistrict("tt_district");
        }
        break;
    case 'Nampula':
        $checkDistrict = "SELECT * FROM jayubiss_pocsquareocs.np_district";
        $isFound = checkDistrict($checkDistrict);
        if($isFound) {
            errorMEssage();
        } else {
            saveDistrict("np_district");
        }
        break;
    case 'Niassa':
        $checkDistrict = "SELECT * FROM jayubiss_pocsquareocs.ns_district";
        $isFound = checkDistrict($checkDistrict);
        if($isFound) {
            errorMEssage();
        } else {
            saveDistrict("ns_district");
        }
        break;
    case 'Zambézia':
        $checkDistrict = "SELECT * FROM jayubiss_pocsquareocs.zb_district";
        $isFound = checkDistrict($checkDistrict);
        if($isFound) {
            errorMEssage();
        } else {
            saveDistrict("zb_district");
        }
        break;
    case 'Cabo Delgado':
        $checkDistrict = "SELECT * FROM jayubiss_pocsquareocs.cd_district";
        $isFound = checkDistrict($checkDistrict);
        if($isFound) {
            errorMEssage();
        } else {
            saveDistrict("cd_district");
        }
        break;
    default:
        # code...
        break;
}


function checkDistrict($checkDistrict) {
    global $district, $province, $dbcon;

    $checkDistrictResult = $dbcon->query($checkDistrict);
    $rows = $checkDistrictResult->fetchAll(PDO::FETCH_ASSOC);

    $isFound = false;
    foreach ($rows as $row) {
        if(strcasecmp($district , $row['district_name']) == 0) {
            $isFound = true;
        }
    }

    return $isFound;
}

function saveDistrict($table) {
    global $district, $province, $dbcon;

    try {

        $dbcon->beginTransaction();
    
        $saveDistrictQuery = "INSERT INTO jayubiss_pocsquareocs." . $table . " (province, district_name) VALUES (?, ?)";
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

function errorMessage() {
    $_SESSION['registration-info'] = "Estdistrito já foi adicionado!";
    $_SESSION['error'] = true;
    header("location: ../../../admin/add-location/location/district/");
}

?>