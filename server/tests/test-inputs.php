<?php
require "../config/connect.php";
require '../../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$file = $_FILES["excel-file"]["tmp_name"];
$extension = pathinfo($_FILES["excel-file"]["name"], PATHINFO_EXTENSION);

if (isset($_REQUEST['import-excel'])) {
    $file = $_FILES["excel-file"]["tmp_name"];
    $extension = pathinfo($_FILES["excel-file"]["name"],PATHINFO_EXTENSION);

    if($extension == 'xlsx' || $extension == 'xls' || $extension == 'csv') {
        $obj = PhpOffice\PhpSpreadsheet\IOFactory::load($file);
        $data = $obj->getActiveSheet()->toArray();

        foreach ($data as $row) {
            $province = $row['0'];
            $district = $row['1'];

            $testeQuery = "INSERT INTO $database_name." . "mc_district" . " (province, district_name) VALUES (?, ?)";
            $stmt = $dbcon->prepare($testeQuery);
            $stmt->execute([$province, $district]);

            if ($stmt) {
                $msg = "File Imported successfully";
                echo $msg;
            } else {
                $msg = "File not imported";
            }
        }
    } else {
        $msg = "Extension not valid!";
    }
}

?>