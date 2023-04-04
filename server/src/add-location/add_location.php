<?php
require "../../config/connect.php";
session_start();

$province = $_POST['province'];
$district = trim($_POST['district']);
$admin_post = trim($_POST['admin-post']);
$locality = trim($_POST['locality']);
$neighborhood = trim($_POST['neighborhood']);
$cell = trim($_POST['cell']);
$circle = trim($_POST['circle']);
$zone = trim($_POST['zone']);
$village = trim($_POST['village']);
$township = trim($_POST['township']);

if (isset($_POST['district'])) {
    $entity_field = 'district';
    $selected_field = $district;
    $success_message = 'Distrito adicionado com sucesso!';
    $failure_message = 'Este distrito já foi adicionado!';
}
if (isset($_POST['admin-post'])) {
    $entity_field = 'admin_post';
    $selected_field = $admin_post;
    $success_message = 'P. Administrativo adicionado com sucesso!';
    $failure_message = 'Este p. administrativo já foi adicionado!';
}
if (isset($_POST['locality'])) {
    $entity_field = 'locality';
    $selected_field = $locality;
    $success_message = 'Localidade adicionada com sucesso!';
    $failure_message = 'Esta localidade já foi adicionada!';
}
if (isset($_POST['neighborhood'])) {
    $entity_field = 'neighborhood';
    $selected_field = $neighborhood;
    $success_message = 'Bairro adicionado com sucesso!';
    $failure_message = 'Este bairro já foi adicionado!';
}
if (isset($_POST['cell'])) {
    $entity_field = 'cell';
    $selected_field = $cell;
    $success_message = 'Célula adicionada com sucesso!';
    $failure_message = 'Esta célula já foi adicionada!';
}
if (isset($_POST['circle'])) {
    $entity_field = 'circle';
    $selected_field = $circle;
    $success_message = 'Círculo adicionado com sucesso!';
    $failure_message = 'Este círculo já foi adicionado!';
}
if (isset($_POST['zone'])) {
    $entity_field = 'zone';
    $selected_field = $zone;
    $success_message = 'Zona adicionada com sucesso!';
    $failure_message = 'Esta zona já foi adicionada!';
}
if (isset($_POST['village'])) {
    $entity_field = 'village';
    $selected_field = $village;
    $success_message = 'Vila adicionada com sucesso!';
    $failure_message = 'Esta vila já foi adicionada!';
}
if (isset($_POST['township'])) {
    $entity_field = 'township';
    $selected_field = $township;
    $success_message = 'Povoação adicionado com sucesso!';
    $failure_message = 'Esta povoação já foi adicionada!';
}

function selectProvince($entity_field, $selected_field, $success_message, $failure_message) {
    global $province, $database_name;

    switch ($province) {
        case 'Maputo Cidade':
            $checkLocationQuery = "SELECT * FROM $database_name.mc_$entity_field";
            $isFound = checkLocation($checkLocationQuery, $selected_field);
            if($isFound) {
                errorMessage($failure_message);
            } else {
                saveLocation("mc_$entity_field", $selected_field, $entity_field, $success_message);
            }
            break;
        case 'Maputo Província':
            $checkLocationQuery = "SELECT * FROM $database_name.mp_$entity_field";
            $isFound = checkLocation($checkLocationQuery, $selected_field);
            if($isFound) {
                errorMessage($failure_message);
            } else {
                saveLocation("mp_$entity_field", $selected_field, $entity_field, $success_message);
            }
            break;
        case 'Gaza':
            $checkLocationQuery = "SELECT * FROM $database_name.gz_$entity_field";
            $isFound = checkLocation($checkLocationQuery, $selected_field);
            if($isFound) {
                errorMessage($failure_message);
            } else {
                saveLocation("gz_$entity_field", $selected_field, $entity_field, $success_message);
            }
            break;
        case 'Inhambane':
            $checkLocationQuery = "SELECT * FROM $database_name.in_$entity_field";
            $isFound = checkLocation($checkLocationQuery, $selected_field);
            if($isFound) {
                errorMessage($failure_message);
            } else {
                saveLocation("in_$entity_field", $selected_field, $entity_field, $success_message);
            }
            break;
        case 'Manica':
            $checkLocationQuery = "SELECT * FROM $database_name.mn_$entity_field";
            $isFound = checkLocation($checkLocationQuery, $selected_field);
            if($isFound) {
                errorMessage($failure_message);
            } else {
                saveLocation("mn_$entity_field", $selected_field, $entity_field, $success_message);
            }
            break;
        case 'Sofala':
            $checkLocationQuery = "SELECT * FROM $database_name.sf_$entity_field";
            $isFound = checkLocation($checkLocationQuery, $selected_field);
            if($isFound) {
                errorMessage($failure_message);
            } else {
                saveLocation("sf_$entity_field", $selected_field, $entity_field, $success_message);
            }
            break;
        case 'Tete':
            $checkLocationQuery = "SELECT * FROM $database_name.tt_$entity_field";
            $isFound = checkLocation($checkLocationQuery, $selected_field);
            if($isFound) {
                errorMessage($failure_message);
            } else {
                saveLocation("tt_$entity_field", $selected_field, $entity_field, $success_message);
            }
            break;
        case 'Nampula':
            $checkLocationQuery = "SELECT * FROM $database_name.np_$entity_field";
            $isFound = checkLocation($checkLocationQuery, $selected_field);
            if($isFound) {
                errorMessage($failure_message);
            } else {
                saveLocation("np_$entity_field", $selected_field, $entity_field, $success_message);
            }
            break;
        case 'Niassa':
            $checkLocationQuery = "SELECT * FROM $database_name.ns_$entity_field";
            $isFound = checkLocation($checkLocationQuery, $selected_field);
            if($isFound) {
                errorMessage($failure_message);
            } else {
                saveLocation("ns_$entity_field", $selected_field, $entity_field, $success_message);
            }
            break;
        case 'Zambézia':
            $checkLocationQuery = "SELECT * FROM $database_name.zb_$entity_field";
            $isFound = checkLocation($checkLocationQuery, $selected_field);
            if($isFound) {
                errorMessage($failure_message);
            } else {
                saveLocation("zb_$entity_field", $selected_field, $entity_field, $success_message);
            }
            break;
        case 'Cabo Delgado':
            $checkLocationQuery = "SELECT * FROM $database_name.cd_$entity_field";
            $isFound = checkLocation($checkLocationQuery, $selected_field);
            if($isFound) {
                errorMessage($failure_message);
            } else {
                saveLocation("cd_$entity_field", $selected_field, $entity_field, $success_message);
            }
            break;
        default:
            # code...
            break;
    }
}

function checkLocation($checkLocationQuery,  $selected_field) {
    global  $dbcon;

    $checkLocalityResult = $dbcon->query($checkLocationQuery);
    $rows = $checkLocalityResult->fetchAll(PDO::FETCH_ASSOC);

    $isFound = false;
    foreach ($rows as $row) {
        if(strcasecmp($selected_field , $row['locality_name']) == 0) {
            $isFound = true;
        }
    }

    return $isFound;
}

function saveLocation($table, $selected_field, $entity_field, $success_message) {
    global $province, $dbcon, $database_name;

    try {

        $dbcon->beginTransaction();
    
        $saveLocalityQuery = "INSERT INTO $database_name." . $table . " (province, $entity_field _name) VALUES (?, ?)";
        $stmt = $dbcon->prepare($saveLocalityQuery);
        $stmt->execute([$province, $selected_field]);
    
    
        $dbcon->commit();
        
        $_SESSION['registration-info'] = $success_message;
        $_SESSION['error'] = false;
        header("location: ../../../admin/add-location/location/locality/");
    
    } 
    catch(PDOException $ex) {
        //Something went wrong rollback!
        $dbcon->rollBack();
        echo $ex->getMessage();
    }
}

function errorMessage($failure_message) {
    $_SESSION['registration-info'] = $failure_message;
    $_SESSION['error'] = true;
    header("location: ../../../admin/add-location/location/locality/");
}




?>