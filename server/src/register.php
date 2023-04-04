<?php
require "../config/connect.php";
session_start();

//obter a provincia selecionada
$province = $_POST["province"];



switch ($province) {
    case 'MC':
        $province_name = "Maputo Cidade";
        $district = $_POST["district-mc"];
        $admin_post = $_POST["administrative-post-mc"];
        break;
    case 'MP':
        $province_name = "Maputo Província";
        break;
    case 'GZ':
        $province_name = "Gaza";
        break;
    case 'IN':
        $province_name = "Inhambane";
        break;
    case 'MN':
        $province_name = "Manica";
        break;
    case 'SF':
        $province_name = "Sofala";
        break;
    case 'TT':
        $province_name = "Tete";
        break;
    case 'NP':
        $province_name = "Nampula";
        break;
    case 'NS':
        $province_name = "Niassa";
        break;
    case 'ZB':
        $province_name = "Zambézia";
        break;
    case 'CD':
        $province_name = "Cabo Delgado";
        break;
    
    default:
        # code...
        break;
}

/**
 * Fazendo a insercao dos dados nas respectivas tabelas (USANDO PDO).
 */

try {

    $dbcon->beginTransaction();

    $administrative_entities_query = "INSERT INTO $database_name.administrative_entities 
                                    (province, province_numeric_id, district, district_id, administrative_post, admin_post_id, locality, locality_id, neighborhood, neighborhood_id, province_alphabetical_id, code) 
                                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $dbcon->prepare($administrative_entities_query);
    $stmt->execute([$province_name, $province_id, $district, $district_id, $administrative_post, $administrative_post_id, $locality, $locality_id, $neighborhood, $neighborhood_id, $province, $code]);

    $local_entities_query = "INSERT INTO $database_name.local_entities 
                            (cell, cell_id, circle, circle_id, village, village_id, township, township_id, zone, zone_id) 
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $dbcon->prepare($local_entities_query);
    $stmt->execute([$cell, $cell_id, $circle, $circle_id, $village, $village_id, $township, $township_id, $zone, $zone_id]);


    $dbcon->commit();
    
    $_SESSION['register-response'] = "Registro efectuado com sucesso!";
    header("location: ../../admin/register/");

} 
catch(PDOException $ex) {
    //Something went wrong rollback!
    $dbcon->rollBack();
    echo $ex->getMessage();
}


?>