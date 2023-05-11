<?php
require "../../config/connect.php";
require '../../../vendor/autoload.php';

session_start();

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;



    if ($_POST["area"] == "district") {
       selectProvince("district");
    }
    if ($_POST["area"] == "admin-post") {
        selectProvince("district");
    }
    if ($_POST["area"] == "locality") {
        selectProvince("locality");
    }
    if ($_POST["area"] == "neighborhood") {
        selectProvince("neighborhood");
    }
    if ($_POST["area"] == "cell") {
        selectProvince("cell");
    }
    if ($_POST["area"] == "circle") {
        selectProvince("circle");
    }
    if ($_POST["area"] == "village") {
        selectProvince("village");
    }
    if ($_POST["area"] == "zone") {
        selectProvince("zone");
    }
    if ($_POST["area"] == "township") {
        selectProvince("township");
    }

function selectProvince($local) {
    switch ($_POST['province']) {
        case 'Maputo Cidade':
            $table = "mc_" . $local;
            saveData($table);
            break;
        case 'Maputo Província':
            $table = "mp_" . $local;
            saveData($table);
            break;
        case 'Gaza':
            $table = "gz_" . $local;
            saveData($table);
            break;
        case 'Inhambane':
            $table = "in_" . $local;
            saveData($table);
            break;
        case 'Manica':
            $table = "mn_" . $local;
            saveData($table);
            break;
        case 'Sofala':
            $table = "sf_" . $local;
            saveData($table);
            break;
        case 'Tete':
            $table = "tt_" . $local;
            saveData($table);
            break;
        case 'Nampula':
            $table = "np_" . $local;
            saveData($table);
            break;
        case 'Niassa':
            $table = "ns_" . $local;
            saveData($table);
            break;
        case 'Zambézia':
            $table = "zb_" . $local;
            saveData($table);
            break;
        case 'Cabo Delgado':
            $table = "cd_" . $local;
            saveData($table);
            break;
        default:
            # code...
            break;
    }
}

function saveData($table) {
    global $dbcon, $database_name;

    $file = $_FILES["excel-file"]["tmp_name"];
    $extension = pathinfo($_FILES["excel-file"]["name"],PATHINFO_EXTENSION);

    $isSuccessful = false;

    if($extension == 'xlsx' || $extension == 'xls' || $extension == 'csv') {
        $obj = PhpOffice\PhpSpreadsheet\IOFactory::load($file);
        $data = $obj->getActiveSheet()->toArray();
        
        foreach ($data as $row) {
            $province = $row['0'];
            $district = $row['1'];

            try {

                $dbcon->beginTransaction();
            
                $testeQuery = "INSERT INTO $database_name." . "$table (province, district_name) VALUES (?, ?)";
                $stmt = $dbcon->prepare($testeQuery);
                $stmt->execute([$province, $district]);
            
                $dbcon->commit();
        
               $isSuccessful = true;
            
            } 
            catch(PDOException $ex) {
                //Something went wrong rollback!
                $dbcon->rollBack();
                echo $ex->getMessage();
                $_SESSION["successful-status"] = $isSuccessful;
                $_SESSION["import-status"] = "Ficheiro não importado!";
                header("location: ../../../admin/add-location/");
            }         
        }
        if($isSuccessful) {
            $_SESSION["successful-status"] = $isSuccessful;
            $_SESSION["import-status"] = "Ficheiro importado com sucesso!";
            header("location: ../../../admin/add-location/");
        }
    } else {
        $_SESSION["successful-status"] = $isSuccessful;
        $_SESSION["import-status"] = "Extensão inválida!";
        header("location: ../../../admin/add-location/");
    }
}   

?>