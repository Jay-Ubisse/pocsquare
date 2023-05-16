<?php
require "../../config/connect.php";
session_start();
if (isset($_SESSION['timestamp'])) {
    unset($_SESSION['timestamp']);

    $_SESSION['timestamp'] = time();
}


//obter os valores da provincia e ID introduzidos
$province = $_POST['inputProvince'];
$id = $_POST['inputId'];


//selecionar a região escolhida
if ($_POST["inputRegion"] == "district") {
    $entity_field = 'district';
    $regionName = trim($_POST["inputRegionName"]);
    $success_message = 'Distrito adicionado com sucesso!';
    $failure_message = 'Este distrito já foi adicionado!';
    selectProvince($entity_field, $regionName, $success_message, $failure_message);
}
if ($_POST["inputRegion"] == "admin-post") {
    $entity_field = 'admin_post';
    $regionName = trim($_POST["inputRegionName"]);
    $success_message = 'P. Administrativo adicionado com sucesso!';
    $failure_message = 'Este p. administrativo já foi adicionado!';
    selectProvince($entity_field, $regionName, $success_message, $failure_message);
}
if ($_POST["inputRegion"] == "locality") {
    $entity_field = 'locality';
    $regionName = trim($_POST["inputRegionName"]);
    $success_message = 'Localidade adicionada com sucesso!';
    $failure_message = 'Esta localidade já foi adicionada!';
    selectProvince($entity_field, $regionName, $success_message, $failure_message);
}
if ($_POST["inputRegion"] == "neighborhood") {
    $entity_field = 'neighborhood';
    $regionName = trim($_POST["inputRegionName"]);
    $success_message = 'Bairro adicionado com sucesso!';
    $failure_message = 'Este bairro já foi adicionado!';
    selectProvince($entity_field, $regionName, $success_message, $failure_message);
}
if ($_POST["inputRegion"] == "cell") {
    $entity_field = 'cell';
    $regionName = trim($_POST["inputRegionName"]);
    $success_message = 'Célula adicionada com sucesso!';
    $failure_message = 'Esta célula já foi adicionada!';
    selectProvince($entity_field, $regionName, $success_message, $failure_message);
}
if ($_POST["inputRegion"] == "circle") {
    $entity_field = 'circle';
    $regionName = trim($_POST["inputRegionName"]);
    $success_message = 'Círculo adicionado com sucesso!';
    $failure_message = 'Este círculo já foi adicionado!';
    selectProvince($entity_field, $regionName, $success_message, $failure_message);
}
if ($_POST["inputRegion"] == "village") {
    $entity_field = 'zone';
    $regionName = trim($_POST["inputRegionName"]);
    $success_message = 'Zona adicionada com sucesso!';
    $failure_message = 'Esta zona já foi adicionada!';
    selectProvince($entity_field, $regionName, $success_message, $failure_message);
}
if ($_POST["inputRegion"] == "zone") {
    $entity_field = 'village';
    $regionName = trim($_POST["inputRegionName"]);
    $success_message = 'Vila adicionada com sucesso!';
    $failure_message = 'Esta vila já foi adicionada!';
    selectProvince($entity_field, $regionName, $success_message, $failure_message);
}
if ($_POST["inputRegion"] == "township") {
    $entity_field = 'township';
    $regionName = trim($_POST["inputRegionName"]);
    $success_message = 'Povoação adicionada com sucesso!';
    $failure_message = 'Esta povoação já foi adicionada!';
    selectProvince($entity_field, $regionName, $success_message, $failure_message);
}

function selectProvince($entity_field, $regionName, $success_message, $failure_message) {
    global $province, $database_name;

    switch ($province) {
        case 'Maputo Cidade':
            $table = "mc_$entity_field";
            $isFound = checkLocation($entity_field, $regionName, $table);
            if($isFound) {
                errorMessage($failure_message, $entity_field);
            } else {
                saveLocation($table, $regionName, $entity_field, $success_message);
            }
            break;
        case 'Maputo Província':
            $table = "mp_$entity_field";
            $isFound = checkLocation($entity_field, $regionName, $table);
            if($isFound) {
                errorMessage($failure_message, $entity_field);
            } else {
                saveLocation($table, $regionName, $entity_field, $success_message);
            }
            break;
        case 'Gaza':
            $table = "gz_$entity_field";
            $isFound = checkLocation($entity_field, $regionName, $table);
            if($isFound) {
                errorMessage($failure_message, $entity_field);
            } else {
                saveLocation($table, $regionName, $entity_field, $success_message);
            }
            break;
        case 'Inhambane':
            $table = "in_$entity_field";
            $isFound = checkLocation($entity_field, $regionName, $table);
            if($isFound) {
                errorMessage($failure_message, $entity_field);
            } else {
                saveLocation($table, $regionName, $entity_field, $success_message);
            }
            break;
        case 'Manica':
            $table = "mn_$entity_field";
            $isFound = checkLocation($entity_field, $regionName, $table);
            if($isFound) {
                errorMessage($failure_message, $entity_field);
            } else {
                saveLocation($table, $regionName, $entity_field, $success_message);
            }
            break;
        case 'Sofala':
            $table = "sf_$entity_field";
            $isFound = checkLocation($entity_field, $regionName, $table);
            if($isFound) {
                errorMessage($failure_message, $entity_field);
            } else {
                saveLocation($table, $regionName, $entity_field, $success_message);
            }
            break;
        case 'Tete':
            $table = "tt_$entity_field";
            $isFound = checkLocation($entity_field, $regionName, $table);
            if($isFound) {
                errorMessage($failure_message, $entity_field);
            } else {
                saveLocation($table, $regionName, $entity_field, $success_message);
            }
            break;
        case 'Nampula':
            $table = "np_$entity_field";
            $isFound = checkLocation($entity_field, $regionName, $table);
            if($isFound) {
                errorMessage($failure_message, $entity_field);
            } else {
                saveLocation($table, $regionName, $entity_field, $success_message);
            }
            break;
        case 'Niassa':
            $table = "ns_$entity_field";
            $isFound = checkLocation($entity_field, $regionName, $table);
            if($isFound) {
                errorMessage($failure_message, $entity_field);
            } else {
                saveLocation($table, $regionName, $entity_field, $success_message);
            }
            break;
        case 'Zambézia':
            $table = "zb_$entity_field";
            $isFound = checkLocation($entity_field, $regionName, $table);
            if($isFound) {
                errorMessage($failure_message, $entity_field);
            } else {
                saveLocation($table, $regionName, $entity_field, $success_message);
            }
            break;
        case 'Cabo Delgado':
            $table = "cd_$entity_field";
            $isFound = checkLocation($entity_field, $regionName, $entity_field);
            if($isFound) {
                errorMessage($failure_message, $entity_field);
            } else {
                saveLocation($table, $regionName, $entity_field, $success_message);
            }
            break;
        default:
            # code...
            break;
    }
}

function checkLocation($entity_field, $regionName, $table) {
    global  $dbcon, $database_name, $id;
    $isFound = false;

    //verificar se o ID existe na tabela
    $checkIdQuery = "SELECT * FROM $database_name.$table WHERE id = $id";
    $checkIdResult = $dbcon->query($checkIdQuery);

    if($checkIdResult->rowCount() > 0) {
        $isFound = true;
    }


    //Verificar se a região digitada existe na tabela
    $checkLocationQuery = "SELECT * FROM $database_name.$table";
    $checkLocalityResult = $dbcon->query($checkLocationQuery);
    $rows = $checkLocalityResult->fetchAll(PDO::FETCH_ASSOC);

    $column = $entity_field;
    foreach ($rows as $row) {
        if(strcasecmp($regionName , $row["$column"]) == 0) {
            $isFound = true;
            break;
        }
    }

    return $isFound;
}

function saveLocation($table, $selected_field, $entity_field, $success_message) {
    global $province, $dbcon, $database_name;
    $column = $entity_field;

    try {

        $dbcon->beginTransaction();
    
        $saveLocalityQuery = "INSERT INTO $database_name." . $table . " (province, " . $column . ") VALUES (?, ?)";
        $stmt = $dbcon->prepare($saveLocalityQuery);
        $stmt->execute([$province, $selected_field]);
    
    
        $dbcon->commit();

        $_SESSION['error'] = false;
        echo $success_message;
    
    } 
    catch(PDOException $ex) {
        //Something went wrong rollback!
        $dbcon->rollBack();
        echo $ex->getMessage();
    }
}

function errorMessage($failure_message, $entity_field) {
    $_SESSION['error'] = true;
    echo $failure_message;
    
}




?>