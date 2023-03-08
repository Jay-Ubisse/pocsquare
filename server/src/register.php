<?php
require "../config/connect.php";
session_start();

//obter a provincia selecionada
$province = $_POST["province"];


//obter os valores dos outros campos com base da provincia selecionada
switch ($province) {
    case 'MP':
        $province_name = "Maputo Província";
        $province_id = "01";
        $district = $_POST["district-mp"];
        $administrative_post = $_POST["administrative_post-mp"];
        $locality = $_POST["locality-mp"];
        $neighborhood = $_POST["neighborhood-mp"];
        $cell = $_POST["cell-mp"];
        $circle = $_POST["circle-mp"];
        $village = $_POST["village-mp"];
        $zone = $_POST["zone-mp"];
        $township = $_POST["township-mp"];
        break;
    case 'GZ':
        $province_name = "Gaza";
        $province_id = "02";
        $district = $_POST["district-gz"];
        $administrative_post = $_POST["administrative_post-gz"];
        $locality = $_POST["locality-gz"];
        $neighborhood = $_POST["neighborhood-gz"];
        $cell = $_POST["cell-gz"];
        $circle = $_POST["circle-gz"];
        $village = $_POST["village-gz"];
        $zone = $_POST["zone-gz"];
        $township = $_POST["township-gz"];
        break;
    case 'IN':
        $province_name = "Inhambane";
        $province_id = "03";
        $district = $_POST["district-in"];
        $administrative_post = $_POST["administrative_post-in"];
        $locality = $_POST["locality-in"];
        $neighborhood = $_POST["neighborhood-in"];
        $cell = $_POST["cell-in"];
        $circle = $_POST["circle-in"];
        $village = $_POST["village-in"];
        $zone = $_POST["zone-in"];
        $township = $_POST["township-in"];
        break;
    default:
        break;
}

//Atribuindo dados relativos aos distritos (Nome do distrindo, id, etc)
switch ($district) {
    case 'Boane':
        $district_id = "001";
        break;
    case 'Magude':
        $district_id = "002";
        break;
    case 'Chibuto':
        $district_id = "003";
        break;
    case 'Bilene':
        $district_id = "004";
        break;
    case 'Funhalouro':
        $district_id = "005";
        break;
    case 'Govuro':
        $district_id = "006";
           break;
    default:
        break;
}

//Atribuindo dados relativos aos postos administrativos (Nome, id, etc)
switch ($administrative_post) {
    case 'Maputo Província posto 1':
        $administrative_post_id = "001";
        break;
    case 'Maputo Província posto 2':
        $administrative_post_id = "002";
        break;
    case 'Gaza posto 1':
        $administrative_post_id = "003";
        break;
    case 'Gaza posto 2':
        $administrative_post_id= "004";
        break;
    case 'Inhambane posto 1':
        $administrative_post_id = "005";
        break;
    case 'Inhambane posto 2':
        $administrative_post_id = "006";
           break;
    default:
        break;
}

//Atribuindo dados relativos as localidades (Nome, id, etc)
switch ($locality) {
    case 'Maputo Província Localidade 1':
        $locality_id = "001";
        break;
    case 'Maputo Província Localidade 2':
        $locality_id = "002";
        break;
    case 'Gaza Localidade 1':
        $locality_id = "003";
        break;
    case 'Gaza Localidade 2':
        $locality_id = "004";
        break;
    case 'Inhambane Localidade 1':
        $locality_id = "005";
        break;
    case 'Inhambane Localidade 2':
        $locality_id = "006";
           break;
    default:
        break;
}

//Atribuindo dados relativos aos bairros (Nome, id, etc)
switch ($neighborhood) {
    case 'Maputo Província Bairro 1':
        $neighborhood_id = "001";
        break;
    case 'Maputo Província Bairro 2':
        $neighborhood_id = "002";
        break;
    case 'Gaza Bairro 1':
        $neighborhood_id = "003";
        break;
    case 'Gaza Bairro 2':
        $neighborhood_id= "004";
        break;
    case 'Inhambane Bairro 1':
        $neighborhood_id = "005";
        break;
    case 'Inhambane Bairro 2':
        $neighborhood_id = "006";
           break;
    default:
        break;
}

//Atribuindo dados relativos as Células (Nome, id, etc)
switch ($cell) {
    case 'Maputo Província Célula 1':
        $cell_id = "001";
        break;
    case 'Maputo Província Célula 2':
        $cell_id = "002";
        break;
    case 'Gaza Célula 1':
        $cell_id = "003";
        break;
    case 'Gaza Célula 2':
        $cell_id = "004";
        break;
    case 'Inhambane Célula 1':
        $cell_id = "005";
        break;
    case 'Inhambane Célula 2':
        $cell_id = "006";
           break;
    default:
        break;
}

//Atribuindo dados relativos aos circulos (Nome, id, etc)
switch ($circle) {
    case 'Maputo Província Circulo 1':
        $circle_id = "001";
        break;
    case 'Maputo Província Circulo 2':
        $circle_id = "002";
        break;
    case 'Gaza Circulo 1':
        $circle_id = "003";
        break;
    case 'Gaza Circulo 2':
        $circle_id = "004";
        break;
    case 'Inhambane Circulo 1':
        $circle_id = "005";
        break;
    case 'Inhambane Circulo 2':
        $circle_id = "006";
           break;
    default:
        break;
}

//Atribuindo dados relativos as vilas (Nome, id, etc)
switch ($village ) {
    case 'Maputo Província Vila 1':
        $village_id = "001";
        break;
    case 'Maputo Província Vila 2':
        $village_id = "002";
        break;
    case 'Gaza Vila 1':
        $village_id = "003";
        break;
    case 'Gaza Vila 2':
        $village_id = "004";
        break;
    case 'Inhambane Vila 1':
        $village_id = "005";
        break;
    case 'Inhambane Vila 2':
        $village_id = "006";
           break;
    default:
        break;
}

//Atribuindo dados relativos as vilas (Nome, id, etc)
switch ($zone) {
    case 'Maputo Província Zona 1':
        $zone_id = "001";
        break;
    case 'Maputo Província Zona 2':
        $zone_id = "002";
        break;
    case 'Gaza Zona 1':
        $zone_id = "003";
        break;
    case 'Gaza Zona 2':
        $zone_id = "004";
        break;
    case 'Inhambane Zona 1':
        $zone_id = "005";
        break;
    case 'Inhambane Zona 2':
        $zone_id = "006";
           break;
    default:
        break;
}

//Atribuindo dados relativos as vilas (Nome, id, etc)
switch ($township) {
    case 'Maputo Província Povoação 1':
        $township_id = "001";
        break;
    case 'Maputo Província Povoação 2':
        $township_id = "002";
        break;
    case 'Gaza Povoação 1':
        $township_id = "003";
        break;
    case 'Gaza Povoação 2':
        $township_id = "004";
        break;
    case 'Inhambane Povoação 1':
        $township_id = "005";
        break;
    case 'Inhambane Povoação 2':
        $township_id = "006";
           break;
    default:
        break;
}

$code = $province . $district_id . " " . $township_id;

/**
 * Fazendo a insercao dos dados nas respectivas tabelas (USANDO PDO).
 */

try {

    $dbcon->beginTransaction();

    $administrative_entities_query = "INSERT INTO pocsquare.administrative_entities 
                                    (province, province_numeric_id, district, district_id, administrative_post, admin_post_id, locality, locality_id, neighborhood, neighborhood_id, province_alphabetical_id, code) 
                                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $dbcon->prepare($administrative_entities_query);
    $stmt->execute([$province_name, $province_id, $district, $district_id, $administrative_post, $administrative_post_id, $locality, $locality_id, $neighborhood, $neighborhood_id, $province, $code]);

    $local_entities_query = "INSERT INTO pocsquare.local_entities 
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