<?php

require "../../config/connect.php";
session_start();
if (isset($_SESSION['timestamp'])) {
    unset($_SESSION['timestamp']);

    $_SESSION['timestamp'] = time();
}


$linesAdded = 0;
$repeatedLines = 0;

if (($_POST['districtOne'] != null) && ($_POST['idOne'] != null)) {
    $inputRegion = $_POST['inputRegion'];
    $province = $_POST['provinceOne'];
    $id = trim($_POST['idOne']);
    $district = trim($_POST['districtOne']);
    $adminPost = trim($_POST['adminPostOne']);
    selectProvince($inputRegion, $province, $id, $district, $adminPost);
}
if (($_POST['districtTwo'] != null) && ($_POST['idTwo'] != null)) {
    $inputRegion = $_POST['inputRegion'];
    $province = $_POST['provinceTwo'];
    $id = trim($_POST['idTwo']);
    $district = trim($_POST['districtTwo']);
    $adminPost = trim($_POST['adminPostTwo']);
    selectProvince($inputRegion, $province, $id, $district, $adminPost);
}
if (($_POST['districtThree'] != null) && ($_POST['idThree'] != null)) {
    $inputRegion = $_POST['inputRegion'];
    $province = $_POST['provinceThree'];
    $id = trim($_POST['idThree']);
    $district = trim($_POST['districtThree']);
    $adminPost = trim($_POST['adminPostThree']);
    selectProvince($inputRegion, $province, $id, $district, $adminPost);
}
if (($_POST['districtFour'] != null) && ($_POST['idFour'] != null)) {
    $inputRegion = $_POST['inputRegion'];
    $province = $_POST['provinceFour'];
    $id = trim($_POST['idFour']);
    $district = trim($_POST['districtFour']);
    $adminPost = trim($_POST['adminPostFour']);
    selectProvince($inputRegion, $province, $id, $district, $adminPost);
}
if (($_POST['districtFive'] != null) && ($_POST['idFive'] != null)) {
    $inputRegion = $_POST['inputRegion'];
    $province = $_POST['provinceFive'];
    $id = trim($_POST['idFive']);
    $district = trim($_POST['districtFive']);
    $adminPost = trim($_POST['adminPostFive']);
    selectProvince($inputRegion, $province, $id, $district, $adminPost);
}
if (($_POST['districtSix'] != null) && ($_POST['idSix'] != null)) {
    $inputRegion = $_POST['inputRegion'];
    $province = $_POST['provinceSix'];
    $id = trim($_POST['idSix']);
    $district = trim($_POST['districtSix']);
    $adminPost = trim($_POST['adminPostSix']);
    selectProvince($inputRegion, $province, $id, $district, $adminPost);
}
if (($_POST['districtSeven'] != null) && ($_POST['idSeven'] != null)) {
    $inputRegion = $_POST['inputRegion'];
    $province = $_POST['provinceSeven'];
    $id = trim($_POST['idSeven']);
    $district = trim($_POST['districtSeven']);
    $adminPost = trim($_POST['adminPostSeven']);
    selectProvince($inputRegion, $province, $id, $district, $adminPost);
}
if (($_POST['districtEight'] != null) && ($_POST['idEight'] != null)) {
    $inputRegion = $_POST['inputRegion'];
    $province = $_POST['provinceEight'];
    $id = trim($_POST['idEight']);
    $district = trim($_POST['districtEight']);
    $adminPost = trim($_POST['adminPostEight']);
    selectProvince($inputRegion, $province, $id, $district, $adminPost);
}
if (($_POST['districtNine'] != null) && ($_POST['idNine'] != null)) {
    $inputRegion = $_POST['inputRegion'];
    $province = $_POST['provinceNine'];
    $id = trim($_POST['idNine']);
    $district = trim($_POST['districtNine']);
    $adminPost = trim($_POST['adminPostNine']);
    selectProvince($inputRegion, $province, $id, $district, $adminPost);
}
if (($_POST['districtTen'] != null) && ($_POST['idTen'] != null)) {
    $inputRegion = $_POST['inputRegion'];
    $province = $_POST['provinceTen'];
    $id = trim($_POST['idTen']);
    $district = trim($_POST['districtTen']);
    $adminPost = trim($_POST['adminPostTen']);
    selectProvince($inputRegion, $province, $id, $district, $adminPost);
}

function selectProvince($inputRegion, $province, $id, $district, $adminPost) {

    switch ($province) {
        case 'Maputo Cidade':
            $table = "mc_$inputRegion";
            $isFound = checkLocation($inputRegion, $adminPost, $table);
            if($isFound == "true") {
                errorMessage();
            } else {
                saveLocation($table, $inputRegion, $district, $id, $adminPost);
            }
            break;
        case 'Maputo Província':
            $table = "mp_$inputRegion";
            $isFound = checkLocation($inputRegion, $adminPost, $table);
            if($isFound == "true") {
                errorMessage();
            } else {
                saveLocation($table, $inputRegion, $district, $id, $adminPost);
            }
            break;
        case 'Gaza':
            $table = "gz_$inputRegion";
            $isFound = checkLocation($inputRegion, $adminPost, $table);
            if($isFound == "true") {
                errorMessage();
            } else {
                saveLocation($table, $inputRegion, $district, $id, $adminPost);
            }
            break;
        case 'Inhambane':
            $table = "in_$inputRegion";
            $isFound = checkLocation($inputRegion, $adminPost, $table);
            if($isFound == "true") {
                errorMessage();
            } else {
                saveLocation($table, $inputRegion, $district, $id, $adminPost);
            }
            break;
        case 'Manica':
            $table = "mn_$inputRegion";
            $isFound = checkLocation($inputRegion, $adminPost, $table);
            if($isFound == "true") {
                errorMessage();
            } else {
                saveLocation($table, $inputRegion, $district, $id, $adminPost);
            }
            break;
        case 'Sofala':
            $table = "sf_$inputRegion";
            $isFound = checkLocation($inputRegion, $adminPost, $table);
            if($isFound == "true") {
                errorMessage();
            } else {
                saveLocation($table, $inputRegion, $district, $id, $adminPost);
            }
            break;
        case 'Tete':
            $table = "tt_$inputRegion";
            $isFound = checkLocation($inputRegion, $adminPost, $table);
            if($isFound == "true") {
                errorMessage();
            } else {
                saveLocation($table, $inputRegion, $district, $id, $adminPost);
            }
            break;
        case 'Nampula':
            $table = "np_$inputRegion";
            $isFound = checkLocation($inputRegion, $adminPost, $table);
            if($isFound == "true") {
                errorMessage();
            } else {
                saveLocation($table, $inputRegion, $district, $id, $adminPost);
            }
            break;
        case 'Niassa':
            $table = "ns_$inputRegion";
            $isFound = checkLocation($inputRegion, $adminPost, $table);
            if($isFound == "true") {
                errorMessage();
            } else {
                saveLocation($table, $inputRegion, $district, $id, $adminPost);
            }
            break;
        case 'Zambézia':
            $table = "zb_$inputRegion";
            $isFound = checkLocation($inputRegion, $adminPost, $table);
            if($isFound == "true") {
                errorMessage();
            } else {
                saveLocation($table, $inputRegion, $district, $id, $adminPost);
            }
            break;
        case 'Cabo Delgado':
            $table = "cd_$inputRegion";
            $isFound = checkLocation($inputRegion, $adminPost, $inputRegion);
            if($isFound == "true") {
                errorMessage();
            } else {
                saveLocation($table, $inputRegion, $district, $id, $adminPost);
            }
            break;
        default:
            # code...
            break;
    }
}

function checkLocation($inputRegion, $adminPost, $table) {
    global  $dbcon, $database_name, $repeatedLines;
    $isFound = "false";

    //Verificar se a região digitada existe na tabela
    $checkLocationQuery = "SELECT * FROM $database_name.$table";
    $checkLocalityResult = $dbcon->query($checkLocationQuery);
    $rows = $checkLocalityResult->fetchAll(PDO::FETCH_ASSOC);

    $column = $inputRegion;
    foreach ($rows as $row) {
        if(strcasecmp($adminPost , $row["$column"]) == 0) {
            $isFound = "true";
            break;
        }
    }
    
    return $isFound;
}

function saveLocation($table, $inputRegion, $district, $id, $adminPost) {
    global $province, $dbcon, $database_name, $linesAdded, $repeatedLines;
    $column = $inputRegion;

    try {

        $dbcon->beginTransaction();
    
        $saveLocalityQuery = "INSERT INTO $database_name." . $table . " (id, province, district, " . $column . ") VALUES (?, ?, ?, ?)";
        $stmt = $dbcon->prepare($saveLocalityQuery);
        $stmt->execute([$id, $province, $district, $adminPost]);
    
    
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