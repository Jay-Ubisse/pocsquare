<?php

require "../../config/connect.php";
session_start();
if (isset($_SESSION['timestamp'])) {
    unset($_SESSION['timestamp']);

    $_SESSION['timestamp'] = time();
}


$linesAdded = 0;
$repeatedLines = 0;

if (($_POST['regionOne'] != null) && ($_POST['idOne'] != null)) {
    $inputRegion = $_POST['inputRegion'];
    $regionName = trim($_POST['regionOne']);
    $id = trim($_POST['idOne']);
    $province = $_POST['provinceOne'];
    selectProvince($inputRegion, $regionName, $id, $province);
}
if (($_POST['regionTwo'] != null) && ($_POST['idTwo'] != null)) {
    $inputRegion = $_POST['inputRegion'];
    $regionName = trim($_POST['regionTwo']);
    $id = trim($_POST['idTwo']);
    $province = $_POST['provinceTwo'];
    selectProvince($inputRegion, $regionName, $id, $province);
}
if (($_POST['regionThree'] != null) && ($_POST['idThree'] != null)) {
    $inputRegion = $_POST['inputRegion'];
    $regionName = trim($_POST['regionThree']);
    $id = trim($_POST['idThree']);
    $province = $_POST['provinceThree'];
    selectProvince($inputRegion, $regionName, $id, $province);
}
if (($_POST['regionFour'] != null) && ($_POST['idFour'] != null)) {
    $inputRegion = $_POST['inputRegion'];
    $regionName = trim($_POST['regionFour']);
    $id = trim($_POST['idFour']);
    $province = $_POST['provinceFour'];
    selectProvince($inputRegion, $regionName, $id, $province);
}
if (($_POST['regionFive'] != null) && ($_POST['idFive'] != null)) {
    $inputRegion = $_POST['inputRegion'];
    $regionName = trim($_POST['regionFive']);
    $id = trim($_POST['idFive']);
    $province = $_POST['provinceFive'];
    selectProvince($inputRegion, $regionName, $id, $province);
}
if (($_POST['regionSix'] != null) && ($_POST['idSix'] != null)) {
    $inputRegion = $_POST['inputRegion'];
    $regionName = trim($_POST['regionSix']);
    $id = trim($_POST['idSix']);
    $province = $_POST['provinceSix'];
    selectProvince($inputRegion, $regionName, $id, $province);
}
if (($_POST['regionSeven'] != null) && ($_POST['idSeven'] != null)) {
    $inputRegion = $_POST['inputRegion'];
    $regionName = trim($_POST['regionSeven']);
    $id = trim($_POST['idSeven']);
    $province = $_POST['provinceSeven'];
    selectProvince($inputRegion, $regionName, $id, $province);
}
if (($_POST['regionEight'] != null) && ($_POST['idEight'] != null)) {
    $inputRegion = $_POST['inputRegion'];
    $regionName = trim($_POST['regionEight']);
    $id = trim($_POST['idEight']);
    $province = $_POST['provinceEight'];
    selectProvince($inputRegion, $regionName, $id, $province);
}
if (($_POST['regionNine'] != null) && ($_POST['idNine'] != null)) {
    $inputRegion = $_POST['inputRegion'];
    $regionName = trim($_POST['regionNine']);
    $id = trim($_POST['idNine']);
    $province = $_POST['provinceNine'];
    selectProvince($inputRegion, $regionName, $id, $province);
}
if (($_POST['regionTen'] != null) && ($_POST['idTen'] != null)) {
    $inputRegion = $_POST['inputRegion'];
    $regionName = trim($_POST['regionTen']);
    $id = trim($_POST['idTen']);
    $province = $_POST['provinceTen'];
    selectProvince($inputRegion, $regionName, $id, $province);
}

function selectProvince($inputRegion, $regionName, $id, $province,) {

    switch ($province) {
        case 'Maputo Cidade':
            $table = "mc_$inputRegion";
            $isFound = checkLocation($inputRegion, $regionName, $table);
            if($isFound) {
                errorMessage();
            } else {
                saveLocation($table, $regionName, $inputRegion, $id);
            }
            break;
        case 'Maputo Província':
            $table = "mp_$inputRegion";
            $isFound = checkLocation($inputRegion, $regionName, $table);
            if($isFound) {
                errorMessage();
            } else {
                saveLocation($table, $regionName, $inputRegion, $id);
            }
            break;
        case 'Gaza':
            $table = "gz_$inputRegion";
            $isFound = checkLocation($inputRegion, $regionName, $table);
            if($isFound) {
                errorMessage();
            } else {
                saveLocation($table, $regionName, $inputRegion, $id);
            }
            break;
        case 'Inhambane':
            $table = "in_$inputRegion";
            $isFound = checkLocation($inputRegion, $regionName, $table);
            if($isFound) {
                errorMessage();
            } else {
                saveLocation($table, $regionName, $inputRegion, $id);
            }
            break;
        case 'Manica':
            $table = "mn_$inputRegion";
            $isFound = checkLocation($inputRegion, $regionName, $table);
            if($isFound) {
                errorMessage();
            } else {
                saveLocation($table, $regionName, $inputRegion, $id);
            }
            break;
        case 'Sofala':
            $table = "sf_$inputRegion";
            $isFound = checkLocation($inputRegion, $regionName, $table);
            if($isFound) {
                errorMessage();
            } else {
                saveLocation($table, $regionName, $inputRegion, $id);
            }
            break;
        case 'Tete':
            $table = "tt_$inputRegion";
            $isFound = checkLocation($inputRegion, $regionName, $table);
            if($isFound) {
                errorMessage();
            } else {
                saveLocation($table, $regionName, $inputRegion, $id);
            }
            break;
        case 'Nampula':
            $table = "np_$inputRegion";
            $isFound = checkLocation($inputRegion, $regionName, $table);
            if($isFound) {
                errorMessage();
            } else {
                saveLocation($table, $regionName, $inputRegion, $id);
            }
            break;
        case 'Niassa':
            $table = "ns_$inputRegion";
            $isFound = checkLocation($inputRegion, $regionName, $table);
            if($isFound) {
                errorMessage();
            } else {
                saveLocation($table, $regionName, $inputRegion, $id);
            }
            break;
        case 'Zambézia':
            $table = "zb_$inputRegion";
            $isFound = checkLocation($inputRegion, $regionName, $table);
            if($isFound) {
                errorMessage();
            } else {
                saveLocation($table, $regionName, $inputRegion, $id);
            }
            break;
        case 'Cabo Delgado':
            $table = "cd_$inputRegion";
            $isFound = checkLocation($inputRegion, $regionName, $inputRegion);
            if($isFound) {
                errorMessage();
            } else {
                saveLocation($table, $regionName, $inputRegion, $id);
            }
            break;
        default:
            # code...
            break;
    }
}

function checkLocation($inputRegion, $regionName, $table) {
    global  $dbcon, $database_name, $repeatedLines;
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

function saveLocation($table, $regionName, $inputRegion, $id) {
    global $province, $dbcon, $database_name, $linesAdded, $repeatedLines;
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
        $ex->getMessage();
        $repeatedLines = $repeatedLines + 1;
    }
}

function errorMessage() {
    global $repeatedLines;

    $repeatedLines = $repeatedLines + 1;
    
}

echo $linesAdded . "," . $repeatedLines;





?>