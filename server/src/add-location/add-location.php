<?php
require "../../config/connect.php";
session_start();

$province = $_POST['province'];

if (isset($_POST['district'])) {
    $district = trim($_POST['district']);
    $entity_field = 'district';
    $selected_field = $district;
    $success_message = 'Distrito adicionado com sucesso!';
    $failure_message = 'Este distrito já foi adicionado!';
    selectProvince($entity_field, $selected_field, $success_message, $failure_message);
}
if (isset($_POST['admin-post'])) {
    $admin_post = trim($_POST['admin-post']);
    $entity_field = 'admin_post';
    $selected_field = $admin_post;
    $success_message = 'P. Administrativo adicionado com sucesso!';
    $failure_message = 'Este p. administrativo já foi adicionado!';
    selectProvince($entity_field, $selected_field, $success_message, $failure_message);
}
if (isset($_POST['locality'])) {
    $locality = trim($_POST['locality']);
    $entity_field = 'locality';
    $selected_field = $locality;
    $success_message = 'Localidade adicionada com sucesso!';
    $failure_message = 'Esta localidade já foi adicionada!';
    selectProvince($entity_field, $selected_field, $success_message, $failure_message);
}
if (isset($_POST['neighborhood'])) {
    $neighborhood = trim($_POST['neighborhood']);
    $entity_field = 'neighborhood';
    $selected_field = $neighborhood;
    $success_message = 'Bairro adicionado com sucesso!';
    $failure_message = 'Este bairro já foi adicionado!';
    selectProvince($entity_field, $selected_field, $success_message, $failure_message);
}
if (isset($_POST['cell'])) {
    $cell = trim($_POST['cell']);
    $entity_field = 'cell';
    $selected_field = $cell;
    $success_message = 'Célula adicionada com sucesso!';
    $failure_message = 'Esta célula já foi adicionada!';
    selectProvince($entity_field, $selected_field, $success_message, $failure_message);
}
if (isset($_POST['circle'])) {
    $circle = trim($_POST['circle']);
    $entity_field = 'circle';
    $selected_field = $circle;
    $success_message = 'Círculo adicionado com sucesso!';
    $failure_message = 'Este círculo já foi adicionado!';
    selectProvince($entity_field, $selected_field, $success_message, $failure_message);
}
if (isset($_POST['zone'])) {
    $zone = trim($_POST['zone']);
    $entity_field = 'zone';
    $selected_field = $zone;
    $success_message = 'Zona adicionada com sucesso!';
    $failure_message = 'Esta zona já foi adicionada!';
    selectProvince($entity_field, $selected_field, $success_message, $failure_message);
}
if (isset($_POST['village'])) {
    $village = trim($_POST['village']);
    $entity_field = 'village';
    $selected_field = $village;
    $success_message = 'Vila adicionada com sucesso!';
    $failure_message = 'Esta vila já foi adicionada!';
    selectProvince($entity_field, $selected_field, $success_message, $failure_message);
}
if (isset($_POST['township'])) {
    $township = trim($_POST['township']);
    $entity_field = 'township';
    $selected_field = $township;
    $success_message = 'Povoação adicionada com sucesso!';
    $failure_message = 'Esta povoação já foi adicionada!';
    selectProvince($entity_field, $selected_field, $success_message, $failure_message);
}

function selectProvince($entity_field, $selected_field, $success_message, $failure_message) {
    global $province, $database_name;

    switch ($province) {
        case 'Maputo Cidade':
            $table = "mc_$entity_field";
            $checkLocationQuery = "SELECT * FROM $database_name.$table";
            $isFound = checkLocation($checkLocationQuery, $selected_field, $entity_field);
            if($isFound) {
                errorMessage($failure_message, $entity_field);
            } else {
                saveLocation($table, $selected_field, $entity_field, $success_message);
            }
            break;
        case 'Maputo Província':
            $table = "mp_$entity_field";
            $checkLocationQuery = "SELECT * FROM $database_name.$table";
            $isFound = checkLocation($checkLocationQuery, $selected_field, $entity_field);
            if($isFound) {
                errorMessage($failure_message, $entity_field);
            } else {
                saveLocation($table, $selected_field, $entity_field, $success_message);
            }
            break;
        case 'Gaza':
            $table = "gz_$entity_field";
            $checkLocationQuery = "SELECT * FROM $database_name.$table";
            $isFound = checkLocation($checkLocationQuery, $selected_field, $entity_field);
            if($isFound) {
                errorMessage($failure_message, $entity_field);
            } else {
                saveLocation($table, $selected_field, $entity_field, $success_message);
            }
            break;
        case 'Inhambane':
            $table = "in_$entity_field";
            $checkLocationQuery = "SELECT * FROM $database_name.$table";
            $isFound = checkLocation($checkLocationQuery, $selected_field, $entity_field);
            if($isFound) {
                errorMessage($failure_message, $entity_field);
            } else {
                saveLocation($table, $selected_field, $entity_field, $success_message);
            }
            break;
        case 'Manica':
            $table = "mn_$entity_field";
            $checkLocationQuery = "SELECT * FROM $database_name.$table";
            $isFound = checkLocation($checkLocationQuery, $selected_field, $entity_field);
            if($isFound) {
                errorMessage($failure_message, $entity_field);
            } else {
                saveLocation($table, $selected_field, $entity_field, $success_message);
            }
            break;
        case 'Sofala':
            $table = "sf_$entity_field";
            $checkLocationQuery = "SELECT * FROM $database_name.$table";
            $isFound = checkLocation($checkLocationQuery, $selected_field, $entity_field);
            if($isFound) {
                errorMessage($failure_message, $entity_field);
            } else {
                saveLocation($table, $selected_field, $entity_field, $success_message);
            }
            break;
        case 'Tete':
            $table = "tt_$entity_field";
            $checkLocationQuery = "SELECT * FROM $database_name.$table";
            $isFound = checkLocation($checkLocationQuery, $selected_field, $entity_field);
            if($isFound) {
                errorMessage($failure_message, $entity_field);
            } else {
                saveLocation($table, $selected_field, $entity_field, $success_message);
            }
            break;
        case 'Nampula':
            $table = "np_$entity_field";
            $checkLocationQuery = "SELECT * FROM $database_name.$table";
            $isFound = checkLocation($checkLocationQuery, $selected_field, $entity_field);
            if($isFound) {
                errorMessage($failure_message, $entity_field);
            } else {
                saveLocation($table, $selected_field, $entity_field, $success_message);
            }
            break;
        case 'Niassa':
            $table = "ns_$entity_field";
            $checkLocationQuery = "SELECT * FROM $database_name.$table";
            $isFound = checkLocation($checkLocationQuery, $selected_field, $entity_field);
            if($isFound) {
                errorMessage($failure_message, $entity_field);
            } else {
                saveLocation($table, $selected_field, $entity_field, $success_message);
            }
            break;
        case 'Zambézia':
            $table = "zb_$entity_field";
            $checkLocationQuery = "SELECT * FROM $database_name.$table";
            $isFound = checkLocation($checkLocationQuery, $selected_field, $entity_field);
            if($isFound) {
                errorMessage($failure_message, $entity_field);
            } else {
                saveLocation($table, $selected_field, $entity_field, $success_message);
            }
            break;
        case 'Cabo Delgado':
            $table = "cd_$entity_field";
            $checkLocationQuery = "SELECT * FROM $database_name.$table";
            $isFound = checkLocation($checkLocationQuery, $selected_field, $entity_field);
            if($isFound) {
                errorMessage($failure_message, $entity_field);
            } else {
                saveLocation($table, $selected_field, $entity_field, $success_message);
            }
            break;
        default:
            # code...
            break;
    }
}

function checkLocation($checkLocationQuery,  $selected_field, $entity_field) {
    global  $dbcon;

    $checkLocalityResult = $dbcon->query($checkLocationQuery);
    $rows = $checkLocalityResult->fetchAll(PDO::FETCH_ASSOC);

    $column = $entity_field . '_name';

    $isFound = false;
    foreach ($rows as $row) {
        if(strcasecmp($selected_field , $row["$column"]) == 0) {
            $isFound = true;
        }
    }

    return $isFound;
}

function saveLocation($table, $selected_field, $entity_field, $success_message) {
    global $province, $dbcon, $database_name;
    $column = $entity_field . '_name';

    try {

        $dbcon->beginTransaction();
    
        $saveLocalityQuery = "INSERT INTO $database_name." . $table . " (province, " . $column . ") VALUES (?, ?)";
        $stmt = $dbcon->prepare($saveLocalityQuery);
        $stmt->execute([$province, $selected_field]);
    
    
        $dbcon->commit();
        
        $_SESSION['registration-info'] = $success_message;
        $_SESSION['error'] = false;

        switch ($entity_field) {
            case 'township':
                header("location: ../../../admin/add-location/location/township/");
                break;
            case 'village':
                header("location: ../../../admin/add-location/location/village/");
                break;
            case 'district':
                header("location: ../../../admin/add-location/location/district/");
                break;
            case 'admin_post':
                header("location: ../../../admin/add-location/location/administrative-post/");
                break;
            case 'locality':
                header("location: ../../../admin/add-location/location/locality/");
                break;
            case 'neighborhood':
                header("location: ../../../admin/add-location/location/neighborhood/");
                break;
            case 'cell':
                header("location: ../../../admin/add-location/location/cell/");
                break;
            case 'circle':
                header("location: ../../../admin/add-location/location/circle/");
                break;
            case 'zone':
                header("location: ../../../admin/add-location/location/zone/");
                break;
            default:
                # code...
                break;
        }
    
    } 
    catch(PDOException $ex) {
        //Something went wrong rollback!
        $dbcon->rollBack();
        echo $ex->getMessage();
    }
}

function errorMessage($failure_message, $entity_field) {
    $_SESSION['registration-info'] = $failure_message;
    $_SESSION['error'] = true;
    
    switch ($entity_field) {
        case 'township':
            header("location: ../../../admin/add-location/location/township/");
            break;
        case 'village':
            header("location: ../../../admin/add-location/location/village/");
            break;
        case 'district':
            header("location: ../../../admin/add-location/location/district/");
            break;
        case 'admin_post':
            header("location: ../../../admin/add-location/location/administrative-post/");
            break;
        case 'locality':
            header("location: ../../../admin/add-location/location/locality/");
            break;
        case 'neighborhood':
            header("location: ../../../admin/add-location/location/neighborhood/");
            break;
        case 'cell':
            header("location: ../../../admin/add-location/location/cell/");
            break;
        case 'circle':
            header("location: ../../../admin/add-location/location/circle/");
            break;
        case 'zone':
            header("location: ../../../admin/add-location/location/zone/");
            break;
        default:
            # code...
            break;
    }
}




?>