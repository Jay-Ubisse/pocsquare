<?php
require "../../config/connect.php";
require '../../../vendor/autoload.php';

session_start();

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$file = $_FILES["excel-file"]["tmp_name"];
$extension = pathinfo($_FILES["excel-file"]["name"], PATHINFO_EXTENSION);

$isSuccessful = "error";
$lines = 1;

if ($extension == 'xlsx' || $extension == 'xls' || $extension == 'csv') {
    $obj = PhpOffice\PhpSpreadsheet\IOFactory::load($file);
    $data = $obj->getActiveSheet()->toArray();

    switch ($_POST["region"]) {
        case 'district':
            $region = 'district';
            saveDistrict($region, $data);
            break;
        case 'admin-post':
            $region = "admin_post";
            saveAdminPost($region, $data);
            break;
        case 'neighborhood':
            $region = "neighborhood";
            saveNeighborhood($region, $data);
            break;
        case 'locality':

            break;
        case 'cell':

            
            break;
        case 'village':

            
            break;
        case 'zone':

            
            break;
        case 'township':

            
            break;
        default:
            # code...
            break;
    }
} else {
    $_SESSION["successful-status"] = $isSuccessful;
    $_SESSION["import-status"] = "Extensão inválida!";
    header("location: ../../../admin/add-location/");
}

function getProvincePrefix($province) {
    
    switch ($province) {
        case 'Maputo Cidade':
            $prefix = "mc_";
            break;
        case 'Maputo Província':
            $prefix = "mp_";
            break;
        case 'Gaza':
            $prefix = "mc_";
            break;
        case 'Inhambane':
            $prefix = "in_";
            break;
        case 'Manica':
            $prefix = "mn_";
            break;
        case 'Sofala':
            $prefix = "sf_";
            break;
        case 'Tete':
            $prefix = "tt_";
            break;
        case 'Zambézia':
            $prefix = "zb_";
            break;
        case 'Nampula':
            $prefix = "np_";
            break;
        case 'Niassa':
            $prefix = "zb_";
            break;
        case 'Cabo Delgado':
            $prefix = "cd_";
            break;
        default:
            $prefix = "404";
            break;
    }

    return $prefix;
}

function saveDistrict($region, $data) {
    global $database_name, $dbcon, $lines;

    foreach ($data as $row) {
        $province = $row['0'];
        $district = $row['1'];

        $prefix = getProvincePrefix($province);
        if($prefix == "404") {
            $isSuccessful = "not ok";
            $errorInfo = "A linha $lines Contém um erro.<br>" . $lines - 1 . " linhas adicionadas.";
            $_SESSION["successful-status"] = $isSuccessful;
            $_SESSION['import-status'] = $errorInfo;
            header("location: ../../../admin/add-location/");
            break;
        }
        $tableName = $prefix . $region;

        try {

            $dbcon->beginTransaction();

            $testeQuery = "INSERT INTO $database_name." . "$tableName (province, district) VALUES (?, ?)";
            $stmt = $dbcon->prepare($testeQuery);
            $stmt->execute([$province, $district]);

            $dbcon->commit();

            $isSuccessful = "ok";
            $lines = $lines + 1;
        } catch (PDOException $ex) {
            //Something went wrong rollback!
            $dbcon->rollBack();
            echo $ex->getMessage();
            $_SESSION["successful-status"] = $isSuccessful;
            $_SESSION["import-status"] = "Ficheiro não importado!";
            header("location: ../../../admin/add-location/");
        }
    }
    if ($isSuccessful == "ok") {
        $_SESSION["successful-status"] = $isSuccessful;
        $_SESSION["import-status"] = "Ficheiro importado com sucesso!<br>" . $lines - 1 . " linhas adicionadas.";
        header("location: ../../../admin/add-location/");
    }
}

function saveAdminPost($region, $data) {
    global $database_name, $dbcon, $lines;

    foreach ($data as $row) {
        $province = $row['0'];
        $district = $row['1'];
        $adminPost = $row['2'];

        $prefix = getProvincePrefix($province);
        if($prefix == "404") {
            $isSuccessful = "not ok";
            $errorInfo = "A linha $lines Contém um erro.<br>" . $lines - 1 . " linhas foram adicionadas.";
            $_SESSION["successful-status"] = $isSuccessful;
            $_SESSION['import-status'] = $errorInfo;
            header("location: ../../../admin/add-location/");
            break;
        }
        $tableName = $prefix . $region;

        try {

            $dbcon->beginTransaction();

            $testeQuery = "INSERT INTO $database_name." . "$tableName (province, district, admin_post) VALUES (?, ?, ?)";
            $stmt = $dbcon->prepare($testeQuery);
            $stmt->execute([$province, $district, $adminPost]);

            $dbcon->commit();

            $isSuccessful = "ok";
            $lines = $lines + 1;
        } catch (PDOException $ex) {
            //Something went wrong rollback!
            $dbcon->rollBack();
            echo $ex->getMessage();
            $_SESSION["successful-status"] = $isSuccessful;
            $_SESSION["import-status"] = "Ficheiro não importado!";
            header("location: ../../../admin/add-location/");
        }
    }
    if ($isSuccessful == "ok") {
        $_SESSION["successful-status"] = $isSuccessful;
        $_SESSION["import-status"] = "Ficheiro importado com sucesso! " . $lines - 1 . " linhas adicionadas.";
        header("location: ../../../admin/add-location/");
    }
}

function saveNeighborhood($region, $data) {
    global $database_name, $dbcon, $lines;

    foreach ($data as $row) {
        $province = $row['0'];
        $district = $row['1'];
        $adminPost = $row['2'];
        $neighborhood = $row['3'];

        $prefix = getProvincePrefix($province);
        if($prefix == "404") {
            $isSuccessful = "not ok";
            $errorInfo = "A linha $lines Contém um erro.<br>" . $lines - 1 . " linhas foram adicionadas.";
            $_SESSION["successful-status"] = $isSuccessful;
            $_SESSION['import-status'] = $errorInfo;
            header("location: ../../../admin/add-location/");
            break;
        }
        $tableName = $prefix . $region;

        try {

            $dbcon->beginTransaction();

            $testeQuery = "INSERT INTO $database_name." . "$tableName (province, district, admin_post, neighborhood) VALUES (?, ?, ?, ?)";
            $stmt = $dbcon->prepare($testeQuery);
            $stmt->execute([$province, $district, $adminPost, $neighborhood]);

            $dbcon->commit();

            $isSuccessful = "ok";
            $lines = $lines + 1;
        } catch (PDOException $ex) {
            //Something went wrong rollback!
            $dbcon->rollBack();
            echo $ex->getMessage();
            $_SESSION["successful-status"] = $isSuccessful;
            $_SESSION["import-status"] = "Ficheiro não importado!";
            header("location: ../../../admin/add-location/");
        }
    }
    if ($isSuccessful == "ok") {
        $_SESSION["successful-status"] = $isSuccessful;
        $_SESSION["import-status"] = "Ficheiro importado com sucesso! " . $lines - 1 . " linhas adicionadas.";
        header("location: ../../../admin/add-location/");
    }
}

?>