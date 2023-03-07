<?php
require "../config/connect.php";
session_start();

//administrative entities
$province = $_POST["province"];
$district = $_POST["district"];
$administrative_post = $_POST["administrative_post"];
$locality = $_POST["locality"];
$neighborhood = $_POST["neighborhood"];

//local entities
$cell = $_POST["cell"];
$circle = $_POST["circle"];
$village = $_POST["village"];
$zone = $_POST["zone"];
$township = $_POST["township"];

//Atribuindo dados relativos as provincias (Nome da provincia, id, etc)
switch ($province) {
    case 'MP':
        $province_name = "Maputo Província";
        $province_id = "01";
        break;
    case 'GZ':
        $province_name = "Gaza";
        $province_id = "02";
        break;
    case 'IN':
        $province_name = "Inhambane";
        $province_id = "03";
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
        $$locality_id = "005";
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

/**
 * Fazendo a insercao dos dados nas respectivas tabelas (USANDO PDO).
 */

try {

    $dbcon->beginTransaction();

    $administrative_entities_query = "INSERT INTO administrative_entities () VALUES ()";
    $stmt = $dbcon->prepare("QUERY");
    $stmt->execute();

    $local_entities_query = "INSERT INTO administrative_entities () VALUES ()";
    $stmt = $dbcon->prepare("ANOTHER QUERY??");
    $stmt->execute();

    $dbcon->commit();

} 
catch(PDOException $ex) {
    //Something went wrong rollback!
    $dbcon->rollBack();
    echo $ex->getMessage();
}


?>