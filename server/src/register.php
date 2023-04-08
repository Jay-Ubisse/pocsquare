<?php
require "../config/connect.php";
session_start();

/*
$_SESSION['register-response'] = "Formulário em manutenção. Tente mais tarde.";
    header("location: ../../admin/register/");
 */

//get selected province
$provinceAlphanumericId = $_POST["province"];


//Administrative and local entities
switch ($provinceAlphanumericId) {
    case 'MC':
        $provinceName = "Maputo Cidade";
        $district = $_POST["district-mc"];
        $adminPost = $_POST["administrative-post-mc"];
        $neighborhood = $_POST["neighborhood-mc"];
        $locality = " ";
        $circle = $_POST["circle-mc"];
        $cell =  $_POST["cell-mc"];
        $village = $_POST["village-mc"];
        $township = $_POST["township-mc"];
        $zone = $_POST["zone-mc"];

        $idArray = getIDs("mc", $district, $adminPost, $neighborhood, $locality, $cell, $circle, $village, $township, $zone);
        $provinceId = "01";
        $districtId = $idArray[0];
        $adminPostId = $idArray[1];
        $neighborhoodId = $idArray[2];
        $localityId = 0;
        $cellId = $idArray[4];
        $circleId = $idArray[5];
        $villageId = $idArray[6];
        $townshipId = $idArray[7];
        $zoneId = $idArray[8];
        
        $localityOrNeighborhoodId = $neighborhoodId;

        break;
    case 'MP':
        $province_name = "Maputo Província";
        $district = $_POST["district-mp"];
        $adminPost = $_POST["administrative-post-mp"];
        $neighborhood = " ";
        $locality = $_POST["locality-mp"];
        $circle = $_POST["circle-mp"];
        $cell =  $_POST["cell-mp"];
        $village = $_POST["village-mt"];
        $township = $_POST["township-mp"];
        $zone = $_POST["zone-mp"];

        $idArray = getIDs("mp", $district, $adminPost, $neighborhood, $locality, $cell, $circle, $village, $township, $zone);
        $provinceId = "02";
        $districtId = $idArray[0];
        $adminPostId = $idArray[1];
        $neighborhoodId = 0;
        $localityId = [3];
        $cellId = $idArray[4];
        $circleId = $idArray[5];
        $villageId = $idArray[6];
        $townshipId = $idArray[7];
        $zoneId = $idArray[8];

        $localityOrNeighborhoodId = $localityId;

        break;
    case 'GZ':
        $province_name = "Gaza";
        $district = $_POST["district-gz"];
        $adminPost = $_POST["administrative-post-gz"];
        $neighborhood = " ";
        $locality = $_POST["locality-gz"];
        $circle = $_POST["circle-gz"];
        $cell =  $_POST["cell-gz"];
        $village = $_POST["village-gz"];
        $township = $_POST["township-gz"];
        $zone = $_POST["zone-gz"];

        $idArray = getIDs("gz", $district, $adminPost, $neighborhood, $locality, $cell, $circle, $village, $township, $zone);
        $provinceId = "03";
        $districtId = $idArray[0];
        $adminPostId = $idArray[1];
        $neighborhoodId = 0;
        $localityId = [3];
        $cellId = $idArray[4];
        $circleId = $idArray[5];
        $villageId = $idArray[6];
        $townshipId = $idArray[7];
        $zoneId = $idArray[8];
        
        $localityOrNeighborhoodId = $localityId;
        break;
    case 'IN':
        $province_name = "Inhambane";
        $district = $_POST["district-in"];
        $adminPost = $_POST["administrative-post-in"];
        $neighborhood = " ";
        $locality = $_POST["locality-in"];
        $circle = $_POST["circle-in"];
        $cell =  $_POST["cell-in"];
        $village = $_POST["village-in"];
        $township = $_POST["township-in"];
        $zone = $_POST["zone-in"];

        $idArray = getIDs("in", $district, $adminPost, $neighborhood, $locality, $cell, $circle, $village, $township, $zone);
        $provinceId = "04";
        $districtId = $idArray[0];
        $adminPostId = $idArray[1];
        $neighborhoodId = 0;
        $localityId = [3];
        $cellId = $idArray[4];
        $circleId = $idArray[5];
        $villageId = $idArray[6];
        $townshipId = $idArray[7];
        $zoneId = $idArray[8];

        $localityOrNeighborhoodId = $localityId;
        break;
    case 'MN':
        $province_name = "Manica";
        $district = $_POST["district-mn"];
        $adminPost = $_POST["administrative-post-mn"];
        $neighborhood = " ";
        $locality = $_POST["locality-mn"];
        $circle = $_POST["circle-mn"];
        $cell =  $_POST["cell-mn"];
        $village = $_POST["village-mn"];
        $township = $_POST["township-mn"];
        $zone = $_POST["zone-mn"];

        $idArray = getIDs("mn", $district, $adminPost, $neighborhood, $locality, $cell, $circle, $village, $township, $zone);
        $provinceId = "05";
        $districtId = $idArray[0];
        $adminPostId = $idArray[1];
        $neighborhoodId = 0;
        $localityId = [3];
        $cellId = $idArray[4];
        $circleId = $idArray[5];
        $villageId = $idArray[6];
        $townshipId = $idArray[7];
        $zoneId = $idArray[8];

        $localityOrNeighborhoodId = $localityId;
        break;
    case 'SF':
        $province_name = "Sofala";
        $district = $_POST["district-sf"];
        $adminPost = $_POST["administrative-post-sf"];
        $neighborhood = " ";
        $locality = $_POST["locality-sf"];
        $circle = $_POST["circle-sf"];
        $cell =  $_POST["cell-sf"];
        $village = $_POST["village-sf"];
        $township = $_POST["township-sf"];
        $zone = $_POST["zone-sf"];

        $idArray = getIDs("sf", $district, $adminPost, $neighborhood, $locality, $cell, $circle, $village, $township, $zone);
        $provinceId = "06";
        $districtId = $idArray[0];
        $adminPostId = $idArray[1];
        $neighborhoodId = 0;
        $localityId = [3];
        $cellId = $idArray[4];
        $circleId = $idArray[5];
        $villageId = $idArray[6];
        $townshipId = $idArray[7];
        $zoneId = $idArray[8];

        $localityOrNeighborhoodId = $localityId;
        break;
    case 'TT':
        $province_name = "Tete";
        $district = $_POST["district-tt"];
        $adminPost = $_POST["administrative-post-tt"];
        $neighborhood = " ";
        $locality = $_POST["locality-tt"];
        $circle = $_POST["circle-tt"];
        $cell =  $_POST["cell-tt"];
        $village = $_POST["village-tt"];
        $township = $_POST["township-tt"];
        $zone = $_POST["zone-tt"];

        $idArray = getIDs("tt", $district, $adminPost, $neighborhood, $locality, $cell, $circle, $village, $township, $zone);
        $provinceId = "07";
        $districtId = $idArray[0];
        $adminPostId = $idArray[1];
        $neighborhoodId = 0;
        $localityId = [3];
        $cellId = $idArray[4];
        $circleId = $idArray[5];
        $villageId = $idArray[6];
        $townshipId = $idArray[7];
        $zoneId = $idArray[8];

        $localityOrNeighborhoodId = $localityId;
        break;
    case 'NP':
        $province_name = "Nampula";
        $district = $_POST["district-np"];
        $adminPost = $_POST["administrative-post-np"];
        $neighborhood = " ";
        $locality = $_POST["locality-np"];
        $circle = $_POST["circle-np"];
        $cell =  $_POST["cell-np"];
        $village = $_POST["village-np"];
        $township = $_POST["township-np"];
        $zone = $_POST["zone-np"];

        $idArray = getIDs("np", $district, $adminPost, $neighborhood, $locality, $cell, $circle, $village, $township, $zone);
        $provinceId = "08";
        $districtId = $idArray[0];
        $adminPostId = $idArray[1];
        $neighborhoodId = 0;
        $localityId = [3];
        $cellId = $idArray[4];
        $circleId = $idArray[5];
        $villageId = $idArray[6];
        $townshipId = $idArray[7];
        $zoneId = $idArray[8];

        $localityOrNeighborhoodId = $localityId;
        break;
    case 'NS':
        $province_name = "Niassa";
        $district = $_POST["district-ns"];
        $adminPost = $_POST["administrative-post-ns"];
        $neighborhood = " ";
        $locality = $_POST["locality-ns"];
        $circle = $_POST["circle-ns"];
        $cell =  $_POST["cell-ns"];
        $village = $_POST["village-ns"];
        $township = $_POST["township-ns"];
        $zone = $_POST["zone-ns"];

        $idArray = getIDs("ns", $district, $adminPost, $neighborhood, $locality, $cell, $circle, $village, $township, $zone);
        $provinceId = "09";
        $districtId = $idArray[0];
        $adminPostId = $idArray[1];
        $neighborhoodId = 0;
        $localityId = [3];
        $cellId = $idArray[4];
        $circleId = $idArray[5];
        $villageId = $idArray[6];
        $townshipId = $idArray[7];
        $zoneId = $idArray[8];

        $localityOrNeighborhoodId = $localityId;
        break;
    case 'ZB':
        $province_name = "Zambézia";
        $district = $_POST["district-zb"];
        $adminPost = $_POST["administrative-post-zb"];
        $neighborhood = " ";
        $locality = $_POST["locality-zb"];
        $circle = $_POST["circle-zb"];
        $cell =  $_POST["cell-zb"];
        $village = $_POST["village-zb"];
        $township = $_POST["township-zb"];
        $zone = $_POST["zone-zb"];

        $idArray = getIDs("zb", $district, $adminPost, $neighborhood, $locality, $cell, $circle, $village, $township, $zone);
        $provinceId = "10";
        $districtId = $idArray[0];
        $adminPostId = $idArray[1];
        $neighborhoodId = 0;
        $localityId = [3];
        $cellId = $idArray[4];
        $circleId = $idArray[5];
        $villageId = $idArray[6];
        $townshipId = $idArray[7];
        $zoneId = $idArray[8];

        $localityOrNeighborhoodId = $localityId;
        break;
    case 'CD':
        $province_name = "Cabo Delgado";
        $district = $_POST["district-cd"];
        $adminPost = $_POST["administrative-post-cd"];
        $neighborhood = " ";
        $locality = $_POST["locality-cd"];
        $circle = $_POST["circle-cd"];
        $cell =  $_POST["cell-cd"];
        $village = $_POST["village-cd"];
        $township = $_POST["township-cd"];
        $zone = $_POST["zone-cd"];

        $idArray = getIDs("cd", $district, $adminPost, $neighborhood, $locality, $cell, $circle, $village, $township, $zone);
        $provinceId = "10";
        $districtId = $idArray[0];
        $adminPostId = $idArray[1];
        $neighborhoodId = 0;
        $localityId = [3];
        $cellId = $idArray[4];
        $circleId = $idArray[5];
        $villageId = $idArray[6];
        $townshipId = $idArray[7];
        $zoneId = $idArray[8];

        $localityOrNeighborhoodId = $localityId;
        break;
    
    default:
        # code...
        break;
}

//Heritage Entities

$propertyType = $_POST["property-type"];
$floor = $_POST["floor"];
$side = $_POST["side"];
$doorNumber = $_POST["door-number"];
$roadType = $_POST["road-type"];
$roadName = $_POST["road-name"];
$stalemate = $_POST["stalemate"];
$viaduct = $_POST["viaduct"];
$block = $_POST["block"];
$roundabout = $_POST["roundabout"];
$lane = $_POST["lane"];
$wide = $_POST["wide"];
$bridges = $_POST["bridges"];
$plaza = $_POST["plaza"];
$length = $_POST["length"];
$width = $_POST["width"];
$occupancy = $_POST["occupancy"];
$affectation = $_POST["affectation"];


//Postal entities
$cityBlock = $_POST["city-block"];
$lateral = $_POST["lateral"];
$entry = $_POST["entry"];
$mailbox = $_POST["mailbox"];
$postOffice = $_POST["post-office"];
$postalCode = $provinceAlphanumericId . $localityOrNeighborhoodId . " " . $block . $lateral;


//espacial entities
$latitude = $_POST["latitude"];
$latitudeDMS = $_POST["latitude-dms"];
$longitude = $_POST["longitude"];
$longitudeDMS = $_POST["longitude-dms"];
$seaRise = $_POST["sea-​​rise"];
$viaLatStart = $_POST["via-lat-start"];
$viaLatEnd = $_POST["via-lat-end"];

//Complementary Entities

$contactNumber = $_POST["contact-number"];
$email = $_POST["email"];
$website = $_POST["website"];

//registration information
$registrationDate = date("d-m-y");
$userRole = $_SESSION["user-role"];
$userId = $_SESSION['user-data']['username'];

function getIDs($alphanumericID, $district, $adminPost, $neighborhood, $locality, $cell, $circle, $village, $township, $zone) {
    global $dbcon, $database_name;

    //get district id 
    $districtQuery = "SELECT * FROM $database_name. " . $alphanumericID . "_district WHERE district_name = '$district'";
    $districtQueryResult = $dbcon->query($districtQuery);
    $districtRows = $districtQueryResult->fetch(PDO::FETCH_ASSOC);
    $districtId = $districtRows['district_id'];

    //get admin post id
    $adminPostQuery = "SELECT * FROM  $database_name. " . $alphanumericID . "_admin_post WHERE admin_post_name = '$adminPost'";
    $adminPostQueryResult = $dbcon->query($adminPostQuery);
    $adminPostRows = $adminPostQueryResult->fetch(PDO::FETCH_ASSOC);
    $adminPostId = $adminPostRows['admin_post_id'];

    //get neighborhood id
    $neighborhoodQuery = "SELECT * FROM  $database_name. " . $alphanumericID . "_neighborhood WHERE neighborhood_name = '$neighborhood'";
    $neighborhoodQueryResult = $dbcon->query($neighborhoodQuery);
    $neighborhoodRows = $neighborhoodQueryResult->fetch(PDO::FETCH_ASSOC);
    $neighborhoodId = $neighborhoodRows['neighborhood_id'];

    //get locality id
    $localityQuery = "SELECT * FROM  $database_name. " . $alphanumericID . "_locality WHERE locality_name = '$locality'";
    $localityQueryResult = $dbcon->query($localityQuery);
    $localityRows = $localityQueryResult->fetch(PDO::FETCH_ASSOC);
    $localityId = $localityRows['locality_id'];

    //get cell id
    $cellQuery = "SELECT * FROM  $database_name. " . $alphanumericID . "_cell WHERE cell_name = '$cell'";
    $cellQueryResult = $dbcon->query($cellQuery);
    $cellRows = $cellQueryResult->fetch(PDO::FETCH_ASSOC);
    $cellId = $cellRows['cell_id'];

    //get circle id
    $circleQuery = "SELECT * FROM  $database_name. " . $alphanumericID . "_circle WHERE circle_name = '$circle'";
    $circleQueryResult = $dbcon->query($circleQuery);
    $circleRows = $circleQueryResult->fetch(PDO::FETCH_ASSOC);
    $circleId = $circleRows['circle_id'];

    //get village id
    $villageQuery = "SELECT * FROM  $database_name. " . $alphanumericID . "_village WHERE village_name = '$village'";
    $villageQueryResult = $dbcon->query($villageQuery);
    $villageRows = $villageQueryResult->fetch(PDO::FETCH_ASSOC);
    $villageId = $villageRows['village_id'];

    //get township id
    $townshipQuery = "SELECT * FROM  $database_name. " . $alphanumericID . "_township WHERE township_name = '$township'";
    $townshipQueryResult = $dbcon->query($townshipQuery);
    $townshipRows = $townshipQueryResult->fetch(PDO::FETCH_ASSOC);
    $townshipId = $townshipRows['township_id'];

    //get zone id
    $zoneQuery = "SELECT * FROM  $database_name. " . $alphanumericID . "_zone WHERE zone_name = '$zone'";
    $zoneQueryResult = $dbcon->query($zoneQuery);
    $zoneRows = $zoneQueryResult->fetch(PDO::FETCH_ASSOC);
    $zoneId = $zoneRows['zone_id'];

    return array($districtId, $adminPostId, $neighborhoodId, $localityId, $cellId, $circleId, $villageId, $townshipId, $zoneId);
}

/**
 * Insert the data in the respective tables (USING PDO).
 */

try {

    $dbcon->beginTransaction();

    //save admin entities data
    $administrative_entities_query = "INSERT INTO $database_name.administrative_entities 
                                    (province, province_numeric_id, district, district_id, administrative_post, admin_post_id, locality, locality_id, neighborhood, neighborhood_id, province_alphabetical_id) 
                                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $dbcon->prepare($administrative_entities_query);
    $stmt->execute([$provinceName, $provinceId, $district, $districtId, $adminPost, $adminPostId, $locality, $localityId, $neighborhood, $neighborhoodId, $provinceAlphanumericId]);

    //save local entities data
    $local_entities_query = "INSERT INTO $database_name.local_entities 
                                    (cell, cell_id, circle, circle_id, village, village_id, township, township_id, zone, zone_id) 
                                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $dbcon->prepare($local_entities_query);
    $stmt->execute([$cell, $cellId, $circle, $circleId, $village, $villageId, $township, $townshipId, $zone, $zoneId]);

     //save heritage entities data
    $heritage_entities_query = "INSERT INTO $database_name.heritage_entities 
                                    (property_type, floor, side, door_number, road_name, road_type, stalemate, viaduct, block, roundabout, lane, wide, bridges, plaza, length, width, occupancy, affectation) 
                                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $dbcon->prepare($heritage_entities_query);
    $stmt->execute([$propertyType, $floor, $side, $doorNumber, $roadType, $roadName, $stalemate, $viaduct, $block, $roundabout, $lane, $wide, $bridges, $plaza, $length, $width, $occupancy, $affectation]);

    //save postal entities data
    $postal_entities_query = "INSERT INTO $database_name.postal_entities 
                            (city_block, lateral, entry, mailbox, post_office, postal_code) 
                            VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $dbcon->prepare($postal_entities_query);
    $stmt->execute([$cityBlock, $lateral, $entry, $mailbox, $postOffice, $postalCode]);

    //save espacial entities data
    $espacial_entities_query = "INSERT INTO $database_name.espacial_entities 
                            (latitude, latitude_dms, longitude, longitude_dms, sea_rise, via_lat_start, via_lat_end) 
                            VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $dbcon->prepare($espacial_entities_query);
    $stmt->execute([$latitude, $latitudeDMS, $longitude, $longitudeDMS, $seaRise, $viaLatStart, $viaLatEnd]);

    //save Complementary entities data
    $Complementary_entities_query = "INSERT INTO $database_name.Complementary_entities 
                            (contact_number, email, website) 
                            VALUES (?, ?, ?)";
    $stmt = $dbcon->prepare($Complementary_entities_query);
    $stmt->execute([$contactNumber, $email, $website]);

    //save registration_info entities data
    $registration_info_query = "INSERT INTO $database_name.registration_info 
                            (registration_date, user_role, user_id) 
                            VALUES (?, ?, ?)";
    $stmt = $dbcon->prepare($registration_info_query);
    $stmt->execute([$registrationDate, $userRole, $userId]);

    //save main info address data
    $main_address_info_query = "INSERT INTO $database_name.main_address_info 
                            (province, district, neighborhood, locality, road_name, door_number, city_block, cep, email, website, phone_number) 
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $dbcon->prepare($main_address_info_query);
    $stmt->execute([$provinceName, $district, $neighborhood, $locality, $roadName, $doorNumber, $cityBlock, $postalCode, $email, $website, $contactNumber]);
 

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