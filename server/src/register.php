<?php
require "../config/connect.php";
session_start();

/*
$_SESSION['register-response'] = "Formulário em manutenção. Tente mais tarde.";
    header("location: ../../admin/register/");
 */

//obter a provincia selecionada
$province = $_POST["province"];



switch ($province) {
    case 'MC':
        $provinceName = "Maputo Cidade";
        $provinceId = "01";
        $district = $_POST["district-mc"];
        $adminPost = $_POST["administrative-post-mc"];
        $neighborhood = $_POST["neighborhood-mc"];
        $locality = " ";
        $localityId = 0;

        $districtQuery = "SELECT * FROM $database_name. mc_district WHERE district_name = '$district'";
        $districtQueryResult = $dbcon->query($districtQuery);
        $districtRows = $districtQueryResult->fetch(PDO::FETCH_ASSOC);
        $districtId = $districtRows['district_id'];

        $adminPostQuery = "SELECT * FROM  $database_name.mc_admin_post WHERE admin_post_name = '$adminPost'";
        $adminPostQueryResult = $dbcon->query($adminPostQuery);
        $adminPostRows = $adminPostQueryResult->fetch(PDO::FETCH_ASSOC);
        $adminPostId = $adminPostRows['admin_post_id'];

        $neighborhoodQuery = "SELECT * FROM  $database_name.mc_neighborhood WHERE neighborhood_name = '$neighborhood'";
        $neighborhoodQueryResult = $dbcon->query($neighborhoodQuery);
        $neighborhoodRows = $neighborhoodQueryResult->fetch(PDO::FETCH_ASSOC);
        $neighborhoodId = $neighborhoodRows['neighborhood_id'];
        break;
    case 'MP':
        $province_name = "Maputo Província";
        $district = $_POST["district-mp"];
        $admin_post = $_POST["administrative-post-mp"];
        $locality = $_POST["locality-mp"];
        break;
    case 'GZ':
        $province_name = "Gaza";
        $district = $_POST["district-gz"];
        $admin_post = $_POST["administrative-post-gz"];
        $locality = $_POST["locality-gz"];
        break;
    case 'IN':
        $province_name = "Inhambane";
        $district = $_POST["district-in"];
        $admin_post = $_POST["administrative-post-in"];
        $locality = $_POST["locality-in"];
        break;
    case 'MN':
        $province_name = "Manica";
        $district = $_POST["district-mn"];
        $admin_post = $_POST["administrative-post-mn"];
        $locality = $_POST["locality-mn"];
        break;
    case 'SF':
        $province_name = "Sofala";
        $district = $_POST["district-sf"];
        $admin_post = $_POST["administrative-post-sf"];
        $locality = $_POST["locality-sf"];
        break;
    case 'TT':
        $province_name = "Tete";
        $district = $_POST["district-tt"];
        $admin_post = $_POST["administrative-post-tt"];
        $locality = $_POST["locality-tt"];
        break;
    case 'NP':
        $province_name = "Nampula";
        $district = $_POST["district-np"];
        $admin_post = $_POST["administrative-post-np"];
        $locality = $_POST["locality-np"];

        $districtQuery = "SELECT * FROM np_district WHERE district_name = '$district'";
        $districtQueryResult = $dbcon->query($districtQuery);
        $districtRows = $districtQueryResult->fetchAll(PDO::FETCH_ASSOC);
        $districtCode = $districtRows['district_id'];
        break;
    case 'NS':
        $province_name = "Niassa";
        $district = $_POST["district-ns"];
        $admin_post = $_POST["administrative-post-ns"];
        $locality = $_POST["locality-ns"];
        break;
    case 'ZB':
        $province_name = "Zambézia";
        $district = $_POST["district-zb"];
        $admin_post = $_POST["administrative-post-zb"];
        $locality = $_POST["locality-zb"];
        break;
    case 'CD':
        $province_name = "Cabo Delgado";
        $district = $_POST["district-cd"];
        $admin_post = $_POST["administrative-post-cd"];
        $locality = $_POST["locality-cd"];
        break;
    
    default:
        # code...
        break;
}

//Postal entities
$block = $_POST["block"];
$lateral = $_POST["lateral"];
$entry = $_POST["entry"];
$mailbox = $_POST["mailbox"];
$postOffice = $_POST["post-office"];
$postalCode = $province . $districtId . " " . $adminPostId . $_POST['lateral'];

//espacial entities

$latitude = $_POST["latitude"];
$latitudeDMS = $_POST["latitude-dms"];
$longitude = $_POST["longitude"];
$longitudeDMS = $_POST["longitude-dms"];
$seaRise = $_POST["sea-​​rise"];
$viaLatStart = $_POST["via-lat-start"];
$viaLatEnd = $_POST["via-lat-end"];

/**
 * Fazendo a insercao dos dados nas respectivas tabelas (USANDO PDO).
 */


try {

    $dbcon->beginTransaction();

    $administrative_entities_query = "INSERT INTO $database_name.administrative_entities 
                                    (province, province_numeric_id, district, district_id, administrative_post, admin_post_id, locality, locality_id, neighborhood, neighborhood_id, province_alphabetical_id) 
                                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $dbcon->prepare($administrative_entities_query);
    $stmt->execute([$provinceName, $provinceId, $district, $districtId, $adminPost, $adminPostId, $locality, $localityId, $neighborhood, $neighborhoodId, $province]);

    $postal_entities_query = "INSERT INTO $database_name.postal_entities 
                            (block, lateral, entry, mailbox, post_office, postal_code) 
                            VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $dbcon->prepare($postal_entities_query);
    $stmt->execute([$block, $lateral, $entry, $mailbox, $postOffice, $postalCode]);

    $espacial_entities_query = "INSERT INTO $database_name.espacial_entities 
                            (latitude, latitude_dms, longitude, longitude_dms, sea_rise, via_lat_start, via_lat_end) 
                            VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $dbcon->prepare($espacial_entities_query);
    $stmt->execute([$latitude, $latitudeDMS, $longitude, $longitudeDMS, $seaRise, $viaLatStart, $viaLatEnd]);
 

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