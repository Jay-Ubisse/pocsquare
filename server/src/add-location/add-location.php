<?php

require "../../config/connect.php";
session_start();
if (isset($_SESSION['timestamp'])) {
    unset($_SESSION['timestamp']);

    $_SESSION['timestamp'] = time();
}


$linesAdded = 0;

if (isset($_POST['regionOne']) && isset($_POST['idOne'])) {
    $inputRegion = $_POST['inputRegion'];
    $regionName = trim($_POST['regionOne']);
    $id = trim($_POST['idOne']);
    $province = $_POST['provinceOne'];
    $success_message = 'Adicionado com sucesso!';
    $failure_message = 'Já foi adicionado!';
    selectProvince($inputRegion, $regionName, $id, $province,  $success_message, $failure_message);
}
if (isset($_POST['regionTwo']) && isset($_POST['idTwo'])) {
    $inputRegion = $_POST['inputRegion'];
    $regionName = trim($_POST['regionTwo']);
    $id = trim($_POST['idTwo']);
    $province = $_POST['provinceTwo'];
    $success_message = 'Adicionado com sucesso!';
    $failure_message = 'Já foi adicionado!';
    selectProvince($inputRegion, $regionName, $id, $province,  $success_message, $failure_message);
}
if (isset($_POST['regionThree']) && isset($_POST['idThree'])) {
    $inputRegion = $_POST['inputRegion'];
    $regionName = trim($_POST['regionThree']);
    $id = trim($_POST['idThree']);
    $province = $_POST['provinceThree'];
    $success_message = 'Adicionado com sucesso!';
    $failure_message = 'Já foi adicionado!';
    selectProvince($inputRegion, $regionName, $id, $province,  $success_message, $failure_message);
}
if (isset($_POST['regionFour']) && isset($_POST['idFour'])) {
    $inputRegion = $_POST['inputRegion'];
    $regionName = trim($_POST['regionFour']);
    $id = trim($_POST['idFour']);
    $province = $_POST['provinceFour'];
    $success_message = 'Adicionado com sucesso!';
    $failure_message = 'Já foi adicionado!';
    selectProvince($inputRegion, $regionName, $id, $province,  $success_message, $failure_message);
}
if (isset($_POST['regionFive']) && isset($_POST['idFive'])) {
    $inputRegion = $_POST['inputRegion'];
    $regionName = trim($_POST['regionFive']);
    $id = trim($_POST['idFive']);
    $province = $_POST['provinceFive'];
    $success_message = 'Adicionado com sucesso!';
    $failure_message = 'Já foi adicionado!';
    selectProvince($inputRegion, $regionName, $id, $province,  $success_message, $failure_message);
}
if (isset($_POST['regionSix']) && isset($_POST['idSix'])) {
    $inputRegion = $_POST['inputRegion'];
    $regionName = trim($_POST['regionSix']);
    $id = trim($_POST['idSix']);
    $province = $_POST['provinceSix'];
    $success_message = 'Adicionado com sucesso!';
    $failure_message = 'Já foi adicionado!';
    selectProvince($inputRegion, $regionName, $id, $province,  $success_message, $failure_message);
}
if (isset($_POST['regionSeven']) && isset($_POST['idSeven'])) {
    $inputRegion = $_POST['inputRegion'];
    $regionName = trim($_POST['regionSeven']);
    $id = trim($_POST['idSeven']);
    $province = $_POST['provinceSeven'];
    $success_message = 'Adicionado com sucesso!';
    $failure_message = 'Já foi adicionado!';
    selectProvince($inputRegion, $regionName, $id, $province,  $success_message, $failure_message);
}
if (isset($_POST['regionEight']) && isset($_POST['idEight'])) {
    $inputRegion = $_POST['inputRegion'];
    $regionName = trim($_POST['regionEight']);
    $id = trim($_POST['idEight']);
    $province = $_POST['provinceEight'];
    $success_message = 'Adicionado com sucesso!';
    $failure_message = 'Já foi adicionado!';
    selectProvince($inputRegion, $regionName, $id, $province,  $success_message, $failure_message);
}
if (isset($_POST['regionNine']) && isset($_POST['idNine'])) {
    $inputRegion = $_POST['inputRegion'];
    $regionName = trim($_POST['regionNine']);
    $id = trim($_POST['idNine']);
    $province = $_POST['provinceNine'];
    $success_message = 'Adicionado com sucesso!';
    $failure_message = 'Já foi adicionado!';
    selectProvince($inputRegion, $regionName, $id, $province,  $success_message, $failure_message);
}
if (isset($_POST['regionTen']) && isset($_POST['idTen'])) {
    $inputRegion = $_POST['inputRegion'];
    $regionName = trim($_POST['regionTen']);
    $id = trim($_POST['idTen']);
    $province = $_POST['provinceTen'];
    $success_message = 'Adicionado com sucesso!';
    $failure_message = 'Já foi adicionado!';
    selectProvince($inputRegion, $regionName, $id, $province,  $success_message, $failure_message);
}

function selectProvince($inputRegion, $regionName, $id, $province, $success_message, $failure_message) {

    switch ($province) {
        case 'Maputo Cidade':
            $table = "mc_$inputRegion";
            $isFound = checkLocation($inputRegion, $regionName, $table);
            if($isFound) {
                errorMessage($failure_message, $inputRegion);
            } else {
                saveLocation($table, $regionName, $inputRegion, $id, $success_message);
            }
            break;
        case 'Maputo Província':
            $table = "mp_$inputRegion";
            $isFound = checkLocation($inputRegion, $regionName, $table);
            if($isFound) {
                errorMessage($failure_message, $inputRegion);
            } else {
                saveLocation($table, $regionName, $inputRegion, $id, $success_message);
            }
            break;
        case 'Gaza':
            $table = "gz_$inputRegion";
            $isFound = checkLocation($inputRegion, $regionName, $table);
            if($isFound) {
                errorMessage($failure_message, $inputRegion);
            } else {
                saveLocation($table, $regionName, $inputRegion, $id, $success_message);
            }
            break;
        case 'Inhambane':
            $table = "in_$inputRegion";
            $isFound = checkLocation($inputRegion, $regionName, $table);
            if($isFound) {
                errorMessage($failure_message, $inputRegion);
            } else {
                saveLocation($table, $regionName, $inputRegion, $id, $success_message);
            }
            break;
        case 'Manica':
            $table = "mn_$inputRegion";
            $isFound = checkLocation($inputRegion, $regionName, $table);
            if($isFound) {
                errorMessage($failure_message, $inputRegion);
            } else {
                saveLocation($table, $regionName, $inputRegion, $id, $success_message);
            }
            break;
        case 'Sofala':
            $table = "sf_$inputRegion";
            $isFound = checkLocation($inputRegion, $regionName, $table);
            if($isFound) {
                errorMessage($failure_message, $inputRegion);
            } else {
                saveLocation($table, $regionName, $inputRegion, $id, $success_message);
            }
            break;
        case 'Tete':
            $table = "tt_$inputRegion";
            $isFound = checkLocation($inputRegion, $regionName, $table);
            if($isFound) {
                errorMessage($failure_message, $inputRegion);
            } else {
                saveLocation($table, $regionName, $inputRegion, $id, $success_message);
            }
            break;
        case 'Nampula':
            $table = "np_$inputRegion";
            $isFound = checkLocation($inputRegion, $regionName, $table);
            if($isFound) {
                errorMessage($failure_message, $inputRegion);
            } else {
                saveLocation($table, $regionName, $inputRegion, $id, $success_message);
            }
            break;
        case 'Niassa':
            $table = "ns_$inputRegion";
            $isFound = checkLocation($inputRegion, $regionName, $table);
            if($isFound) {
                errorMessage($failure_message, $inputRegion);
            } else {
                saveLocation($table, $regionName, $inputRegion, $id, $success_message);
            }
            break;
        case 'Zambézia':
            $table = "zb_$inputRegion";
            $isFound = checkLocation($inputRegion, $regionName, $table);
            if($isFound) {
                errorMessage($failure_message, $inputRegion);
            } else {
                saveLocation($table, $regionName, $inputRegion, $id, $success_message);
            }
            break;
        case 'Cabo Delgado':
            $table = "cd_$inputRegion";
            $isFound = checkLocation($inputRegion, $regionName, $inputRegion);
            if($isFound) {
                errorMessage($failure_message, $inputRegion);
            } else {
                saveLocation($table, $regionName, $inputRegion, $id, $success_message);
            }
            break;
        default:
            # code...
            break;
    }
}

function checkLocation($inputRegion, $regionName, $table) {
    global  $dbcon, $database_name;
    $isFound = false;


    //Verificar se a região digitada existe na tabela
    $checkLocationQuery = "SELECT * FROM $database_name.$table";
    $checkLocalityResult = $dbcon->query($checkLocationQuery);
    $rows = $checkLocalityResult->fetchAll(PDO::FETCH_ASSOC);

    $column = $inputRegion;
    foreach ($rows as $row) {
        if(strcasecmp($regionName , $row["$column"]) == 0) {
            $isFound = true;
            break;
        }
    }

    return $isFound;
}

function saveLocation($table, $regionName, $inputRegion, $id, $success_message) {
    global $province, $dbcon, $database_name, $linesAdded;
    $column = $inputRegion;

    try {

        $dbcon->beginTransaction();
    
        $saveLocalityQuery = "INSERT INTO $database_name." . $table . " (id, province, " . $column . ") VALUES (?, ?, ?)";
        $stmt = $dbcon->prepare($saveLocalityQuery);
        $stmt->execute([$id, $province, $regionName]);
    
    
        $dbcon->commit();

        $linesAdded = $linesAdded + 1;
    
    } 
    catch(PDOException $ex) {
        //Something went wrong rollback!
        $dbcon->rollBack();
        echo $ex->getMessage();
    }
}

function errorMessage($failure_message, $inputRegion) {
    global $linesAdded;

    //echo $linesAdded;
    
}

echo $linesAdded;




?>