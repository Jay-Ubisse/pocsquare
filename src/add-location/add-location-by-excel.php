<?php
require "../../config/connect.php";
require '../../../vendor/autoload.php';

error_reporting(E_ALL ^ E_WARNING);

session_start();

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$file = $_FILES["excel-file"]["tmp_name"];
$extension = pathinfo($_FILES["excel-file"]["name"], PATHINFO_EXTENSION);

$isSuccessful = "error";
$actualLine = 1;
$numRow = 1;
$invalidProvince = false;
$successfulLines = 0;
$id = 2;

function getProvincePrefix($province) {
    
    switch ($province) {
        case 'Maputo Cidade':
            $prefix = "mc_";
            break;
        case 'Maputo Província':
            $prefix = "mp_";
            break;
        case 'Gaza':
            $prefix = "gz_";
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
            $prefix = "ns_";
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

if ($extension == 'xlsx' || $extension == 'xls' || $extension == 'csv') {
    $obj = PhpOffice\PhpSpreadsheet\IOFactory::load($file);
    $data = $obj->getActiveSheet()->toArray();

    foreach ($data as $row) {

        //começar a carregar dados a partir a terceira linha
        if($numRow < 2) {
            $numRow = $numRow + 1;
            $actualLine = $actualLine + 1;
            continue;
        }

        //dados das células do excel (em cada linha)
        $province = trim((string) $row['0']);
        $district = trim((string) $row['2']);
        $districtId = trim((string) $row['3']);
        $adminPost = trim((string) $row['4']);
        $adminPostId = trim((string) $row['5']);
        $localityOrNeighborhood = trim((string) $row['6']);
        $localityOrNeighborhoodId = trim((string) $row['7']);
        $township = trim((string) $row['8']);
        $townshipId = trim((string) $row['9']);
        $cell = trim((string) $row['10']);
        $cellId = trim((string) $row['11']);
        $circle = trim((string) $row['12']);
        $circleId = trim((string) $row['13']);
        $village = trim((string) $row['14']);
        $villageId = trim((string) $row['15']);
        $zone = trim((string) $row['16']);
        $zoneId = trim((string) $row['17']);

        //verificar e obter o ID prefixo da província da linha (se existir)
        $prefix = getProvincePrefix($province);

        //se a província nao for valida, parar o carregamento, redirecionar 
        //para a pagina de carregamento e imprimir a mensagem de erro
        if($prefix == "404") {
            $isSuccessful = "not ok";
            $invalidProvince = true;
            $actualLine = $actualLine + 1;
            continue;
        }


        //construir os nomes das tabelas com base no prefixo obtido na linha 42
        $districtTable = $prefix . "district";
        $adminPostTable = $prefix . "admin_post";
        $localityOrNeighborhoodTable = $prefix . "neighborhood_locality";
        $townshipTable = $prefix . "township";
        $cellTable = $prefix . "cell";
        $circleTable = $prefix . "circle";
        $villageTable = $prefix . "village";
        $zoneTable = $prefix . "zone";


        //inserir os dados nas devidas tabelas
        try {

            $dbcon->beginTransaction();

            //guardar dados na tabela dos distritos
            $checkDistrictsQuery = "SELECT * FROM $database_name.$districtTable WHERE id = '$districtId'";
            $checkDistrictsResult = $dbcon->query($checkDistrictsQuery);

            if ($checkDistrictsResult->rowCount() == 0) {
                $districtQuery = "INSERT INTO $database_name." . "$districtTable (id, province, district) VALUES (?, ?, ?)";
                $stmt = $dbcon->prepare($districtQuery);
                $stmt->execute([$districtId, $province, $district]);
            }

            //guardar dados na tabela dos postos administrativos
            $checkAdminPostsQuery = "SELECT * FROM $database_name.$adminPostTable WHERE id = '$adminPostId'";
            $checkAdminPostsResult = $dbcon->query($checkAdminPostsQuery);

            if ($checkAdminPostsResult->rowCount() == 0) {
                $adminPostQuery = "INSERT INTO $database_name." . "$adminPostTable (id, province, district, admin_post) VALUES (?, ?, ?, ?)";
                $stmt = $dbcon->prepare($adminPostQuery);
                $stmt->execute([$adminPostId, $province, $district, $adminPost]);
            }

            //guardar dados na tabela dos bairros ou localidades
            $checkLocalityOrNeighborhoodQuery = "SELECT * FROM $database_name.$localityOrNeighborhoodTable WHERE id = '$localityOrNeighborhoodId'";
            $checkLocalityOrNeighborhoodResult = $dbcon->query($checkLocalityOrNeighborhoodQuery);

            if ($checkLocalityOrNeighborhoodResult->rowCount() == 0) {
                $localityOrNeighborhoodQuery = "INSERT INTO $database_name." . "$localityOrNeighborhoodTable (id, province, district, admin_post, neighborhood_locality) VALUES (?, ?, ?, ?, ?)";
                $stmt = $dbcon->prepare($localityOrNeighborhoodQuery);
                $stmt->execute([$localityOrNeighborhoodId, $province, $district, $adminPost, $localityOrNeighborhood]);
            }

            //guardar dados na tabela das povoações
            $townshipQuery = "INSERT INTO $database_name." . "$townshipTable (id, province, district, admin_post, neighborhood_locality, township) VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $dbcon->prepare($townshipQuery);
            $stmt->execute([$townshipId, $province, $district, $adminPost, $localityOrNeighborhood, $township]);

            //guardar dados na tabela das células
            $cellQuery = "INSERT INTO $database_name." . "$cellTable (id, province, district, admin_post, neighborhood_locality, cell) VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $dbcon->prepare($cellQuery);
            $stmt->execute([$cellId, $province, $district, $adminPost, $localityOrNeighborhood, $cell]);

            //guardar dados na tabela dos círculos
            $circleQuery = "INSERT INTO $database_name." . "$circleTable (id, province, district, admin_post, neighborhood_locality, circle) VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $dbcon->prepare($circleQuery);
            $stmt->execute([$circleId, $province, $district, $adminPost, $localityOrNeighborhood, $circle]);

            //guardar dados na tabela das vilas
            $villageQuery = "INSERT INTO $database_name." . "$villageTable (id, province, district, admin_post, neighborhood_locality, village) VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $dbcon->prepare($villageQuery);
            $stmt->execute([$villageId, $province, $district, $adminPost, $localityOrNeighborhood, $village]);

            //guardar dados na tabela das zonas
            $zoneQuery = "INSERT INTO $database_name." . "$zoneTable (id, province, district, admin_post, neighborhood_locality, zone) VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $dbcon->prepare($zoneQuery);
            $stmt->execute([$zoneId, $province, $district, $adminPost, $localityOrNeighborhood, $zone]);


            $dbcon->commit();

            $isSuccessful = "ok";
            $successfulLines = $successfulLines + 1;
        } catch (PDOException $ex) {
            //Something went wrong rollback!
            $dbcon->rollBack();
            $ex->getMessage();

        } 

    }
    $_SESSION["successful-status"] = $isSuccessful;
    if($invalidProvince) {
      $_SESSION["import-status"] = $successfulLines . " linhas adicionadas.<br>A linha: " . $successfulLines + 2 . " contem uma província invalida.";
    } else {
        $_SESSION["import-status"] = "Ficheiro importado com sucesso!<br>" . $successfulLines . " linhas adicionadas.";
    }
    header("location: ../../../admin/add-location/");

} else {
    $_SESSION["successful-status"] = $isSuccessful;
    $_SESSION["import-status"] = "Extensão inválida!";
    header("location: ../../../admin/add-location/");
}

?>