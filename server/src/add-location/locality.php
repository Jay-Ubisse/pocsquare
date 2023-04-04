<?php
require "../../config/connect.php";
session_start();

$province = $_POST['province'];
$locality = trim($_POST['locality']);

switch ($province) {
    case 'Maputo Cidade':
        $checkLocality = "SELECT * FROM $database_name.mc_locality";
        $isFound = checkLocality($checkLocality);
        if($isFound) {
            errorMEssage();
        } else {
            saveLocality("mc_locality");
        }
        break;
    case 'Maputo Província':
        $checkLocality = "SELECT * FROM $database_name.mp_locality";
        $isFound = checkLocality($checkLocality);
        if($isFound) {
            errorMEssage();
        } else {
            saveLocality("mp_locality");
        }
        break;
    case 'Gaza':
        $checkLocality = "SELECT * FROM $database_name.gz_locality";
        $isFound = checkLocality($checkLocality);
        if($isFound) {
            errorMEssage();
        } else {
            saveLocality("gz_locality");
        }
        break;
    case 'Inhambane':
        $checkLocality = "SELECT * FROM $database_name.in_locality";
        $isFound = checkLocality($checkLocality);
        if($isFound) {
            errorMEssage();
        } else {
            saveLocality("in_locality");
        }
        break;
    case 'Manica':
        $checkLocality = "SELECT * FROM $database_name.mn_locality";
        $isFound = checkLocality($checkLocality);
        if($isFound) {
            errorMEssage();
        } else {
            saveLocality("mn_locality");
        }
        break;
    case 'Sofala':
        $checkLocality = "SELECT * FROM $database_name.sf_locality";
        $isFound = checkLocality($checkLocality);
        if($isFound) {
            errorMEssage();
        } else {
            saveLocality("sf_locality");
        }
        break;
    case 'Tete':
        $checkLocality = "SELECT * FROM $database_name.tt_locality";
        $isFound = checkLocality($checkLocality);
        if($isFound) {
            errorMEssage();
        } else {
            saveLocality("tt_locality");
        }
        break;
    case 'Nampula':
        $checkLocality = "SELECT * FROM $database_name.np_locality";
        $isFound = checkLocality($checkLocality);
        if($isFound) {
            errorMEssage();
        } else {
            saveLocality("np_locality");
        }
        break;
    case 'Niassa':
        $checkLocality = "SELECT * FROM $database_name.ns_locality";
        $isFound = checkLocality($checkLocality);
        if($isFound) {
            errorMEssage();
        } else {
            saveLocality("ns_locality");
        }
        break;
    case 'Zambézia':
        $checkLocality = "SELECT * FROM $database_name.zb_locality";
        $isFound = checkLocality($checkLocality);
        if($isFound) {
            errorMEssage();
        } else {
            saveLocality("zb_locality");
        }
        break;
    case 'Cabo Delgado':
        $checkLocality = "SELECT * FROM $database_name.cd_locality";
        $isFound = checkLocality($checkLocality);
        if($isFound) {
            errorMEssage();
        } else {
            saveLocality("cd_locality");
        }
        break;
    default:
        # code...
        break;
}


function checkLocality($checkLocality) {
    global $locality, $province, $dbcon;

    $checkLocalityResult = $dbcon->query($checkLocality);
    $rows = $checkLocalityResult->fetchAll(PDO::FETCH_ASSOC);

    $isFound = false;
    foreach ($rows as $row) {
        if(strcasecmp($locality , $row['locality_name']) == 0) {
            $isFound = true;
        }
    }

    return $isFound;
}

function saveLocality($table) {
    global $locality, $province, $dbcon, $database_name;

    try {

        $dbcon->beginTransaction();
    
        $saveLocalityQuery = "INSERT INTO $database_name." . $table . " (province, locality_name) VALUES (?, ?)";
        $stmt = $dbcon->prepare($saveLocalityQuery);
        $stmt->execute([$province, $locality]);
    
    
        $dbcon->commit();
        
        $_SESSION['registration-info'] = "Localidade adicionada com sucesso!";
        $_SESSION['error'] = false;
        header("location: ../../../admin/add-location/location/locality/");
    
    } 
    catch(PDOException $ex) {
        //Something went wrong rollback!
        $dbcon->rollBack();
        echo $ex->getMessage();
    }
}

function errorMessage() {
    $_SESSION['registration-info'] = "Esta localidade já foi adicionada!";
    $_SESSION['error'] = true;
    header("location: ../../../admin/add-location/location/locality/");
}

?>