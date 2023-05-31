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
        $neighborhoodOrLocality = $_POST["neighborhood-mc"];

        $localEntitiesArray = getEntities($provinceAlphanumericId);
        $circle = $localEntitiesArray[0];
        $cell =  $localEntitiesArray[1];
        $village = $localEntitiesArray[2];
        $township = $localEntitiesArray[3];
        $zone = $localEntitiesArray[4];

        $idArray = getIDs("mc", $district, $adminPost, $neighborhoodOrLocality, $cell, $circle, $village, $township, $zone);
        $provinceId = "01";
        $districtId = $idArray[0];
        $adminPostId = $idArray[1];
        $neighborhoodOrLocalityId = $idArray[2];
        $cellId = $idArray[3];
        $circleId = $idArray[4];
        $villageId = $idArray[5];
        $townshipId = $idArray[6];
        $zoneId = $idArray[7];

        break;
    case 'MP':
        $provinceName = "Maputo Província";
        $district = $_POST["district-mp"];
        $adminPost = $_POST["administrative-post-mp"];
        $neighborhoodOrLocality = $_POST["neighborhood-mp"];
        
        $localEntitiesArray = getEntities($provinceAlphanumericId);
        $circle = $localEntitiesArray[0];
        $cell =  $localEntitiesArray[1];
        $village = $localEntitiesArray[2];
        $township = $localEntitiesArray[3];
        $zone = $localEntitiesArray[4];

        $idArray = getIDs("mp", $district, $adminPost, $neighborhoodOrLocality, $cell, $circle, $village, $township, $zone);
        $provinceId = "02";
        $districtId = $idArray[0];
        $adminPostId = $idArray[1];
        $neighborhoodOrLocalityId = $idArray[2];
        $cellId = $idArray[3];
        $circleId = $idArray[4];
        $villageId = $idArray[5];
        $townshipId = $idArray[6];
        $zoneId = $idArray[7];

        break;
    case 'GZ':
        $provinceName = "Gaza";
        $district = $_POST["district-gz"];
        $adminPost = $_POST["administrative-post-gz"];
        $neighborhoodOrLocality = $_POST["neighborhood-gz"];
        
        $localEntitiesArray = getEntities($provinceAlphanumericId);
        $circle = $localEntitiesArray[0];
        $cell =  $localEntitiesArray[1];
        $village = $localEntitiesArray[2];
        $township = $localEntitiesArray[3];
        $zone = $localEntitiesArray[4];

        $idArray = getIDs("gz", $district, $adminPost, $neighborhoodOrLocality, $cell, $circle, $village, $township, $zone);
        $provinceId = "03";
        $districtId = $idArray[0];
        $adminPostId = $idArray[1];
        $neighborhoodOrLocalityId = $idArray[2];
        $cellId = $idArray[3];
        $circleId = $idArray[4];
        $villageId = $idArray[5];
        $townshipId = $idArray[6];
        $zoneId = $idArray[7];

        break;
    case 'IN':
        $provinceName = "Inhambane";
        $district = $_POST["district-in"];
        $adminPost = $_POST["administrative-post-in"];
        $neighborhoodOrLocality = $_POST["neighborhood-in"];
        
        $localEntitiesArray = getEntities($provinceAlphanumericId);
        $circle = $localEntitiesArray[0];
        $cell =  $localEntitiesArray[1];
        $village = $localEntitiesArray[2];
        $township = $localEntitiesArray[3];
        $zone = $localEntitiesArray[4];

        $idArray = getIDs("in", $district, $adminPost, $neighborhoodOrLocality, $cell, $circle, $village, $township, $zone);
        $provinceId = "04";
        $districtId = $idArray[0];
        $adminPostId = $idArray[1];
        $neighborhoodOrLocalityId = $idArray[2];
        $cellId = $idArray[3];
        $circleId = $idArray[4];
        $villageId = $idArray[5];
        $townshipId = $idArray[6];
        $zoneId = $idArray[7];

        break;
    case 'MN':
        $provinceName = "Manica";
        $district = $_POST["district-mn"];
        $adminPost = $_POST["administrative-post-mn"];
        $neighborhoodOrLocality = $_POST["neighborhood-mn"];
        
        $localEntitiesArray = getEntities($provinceAlphanumericId);
        $circle = $localEntitiesArray[0];
        $cell =  $localEntitiesArray[1];
        $village = $localEntitiesArray[2];
        $township = $localEntitiesArray[3];
        $zone = $localEntitiesArray[4];

        $idArray = getIDs("mn", $district, $adminPost, $neighborhoodOrLocality, $cell, $circle, $village, $township, $zone);
        $provinceId = "05";
        $districtId = $idArray[0];
        $adminPostId = $idArray[1];
        $neighborhoodOrLocalityId = $idArray[2];
        $cellId = $idArray[3];
        $circleId = $idArray[4];
        $villageId = $idArray[5];
        $townshipId = $idArray[6];
        $zoneId = $idArray[7];

        break;
    case 'SF':
        $provinceName = "Sofala";
        $district = $_POST["district-sf"];
        $adminPost = $_POST["administrative-post-sf"];
        $neighborhoodOrLocality = $_POST["neighborhood-sf"];
        
        $localEntitiesArray = getEntities($provinceAlphanumericId);
        $circle = $localEntitiesArray[0];
        $cell =  $localEntitiesArray[1];
        $village = $localEntitiesArray[2];
        $township = $localEntitiesArray[3];
        $zone = $localEntitiesArray[4];

        $idArray = getIDs("sf", $district, $adminPost, $neighborhoodOrLocality, $cell, $circle, $village, $township, $zone);
        $provinceId = "06";
        $districtId = $idArray[0];
        $adminPostId = $idArray[1];
        $neighborhoodOrLocalityId = $idArray[2];
        $cellId = $idArray[3];
        $circleId = $idArray[4];
        $villageId = $idArray[5];
        $townshipId = $idArray[6];
        $zoneId = $idArray[7];

        break;
    case 'TT':
        $provinceName = "Tete";
        $district = $_POST["district-tt"];
        $adminPost = $_POST["administrative-post-tt"];
        $neighborhoodOrLocality = $_POST["neighborhood-tt"];
        
        $localEntitiesArray = getEntities($provinceAlphanumericId);
        $circle = $localEntitiesArray[0];
        $cell =  $localEntitiesArray[1];
        $village = $localEntitiesArray[2];
        $township = $localEntitiesArray[3];
        $zone = $localEntitiesArray[4];

        $idArray = getIDs("tt", $district, $adminPost, $neighborhoodOrLocality, $cell, $circle, $village, $township, $zone);
        $provinceId = "07";
        $districtId = $idArray[0];
        $adminPostId = $idArray[1];
        $neighborhoodOrLocalityId = $idArray[2];
        $cellId = $idArray[3];
        $circleId = $idArray[4];
        $villageId = $idArray[5];
        $townshipId = $idArray[6];
        $zoneId = $idArray[7];

        break;
    case 'NP':
        $provinceName = "Nampula";
        $district = $_POST["district-np"];
        $adminPost = $_POST["administrative-post-np"];
        $neighborhoodOrLocality = $_POST["neighborhood-np"];
        
        $localEntitiesArray = getEntities($provinceAlphanumericId);
        $circle = $localEntitiesArray[0];
        $cell =  $localEntitiesArray[1];
        $village = $localEntitiesArray[2];
        $township = $localEntitiesArray[3];
        $zone = $localEntitiesArray[4];

        $idArray = getIDs("np", $district, $adminPost, $neighborhoodOrLocality, $cell, $circle, $village, $township, $zone);
        $provinceId = "08";
        $districtId = $idArray[0];
        $adminPostId = $idArray[1];
        $neighborhoodOrLocalityId = $idArray[2];
        $cellId = $idArray[3];
        $circleId = $idArray[4];
        $villageId = $idArray[5];
        $townshipId = $idArray[6];
        $zoneId = $idArray[7];

        break;
    case 'NS':
        $provinceName = "Niassa";
        $district = $_POST["district-ns"];
        $adminPost = $_POST["administrative-post-ns"];
        $neighborhoodOrLocality = $_POST["neighborhood-ns"];
        
        $localEntitiesArray = getEntities($provinceAlphanumericId);
        $circle = $localEntitiesArray[0];
        $cell =  $localEntitiesArray[1];
        $village = $localEntitiesArray[2];
        $township = $localEntitiesArray[3];
        $zone = $localEntitiesArray[4];

        $idArray = getIDs("ns", $district, $adminPost, $neighborhoodOrLocality, $cell, $circle, $village, $township, $zone);
        $provinceId = "09";
        $districtId = $idArray[0];
        $adminPostId = $idArray[1];
        $neighborhoodOrLocalityId = $idArray[2];
        $cellId = $idArray[3];
        $circleId = $idArray[4];
        $villageId = $idArray[5];
        $townshipId = $idArray[6];
        $zoneId = $idArray[7];

        break;
    case 'ZB':
        $provinceName = "Zambézia";
        $district = $_POST["district-zb"];
        $adminPost = $_POST["administrative-post-zb"];
        $neighborhoodOrLocality = $_POST["neighborhood-zb"];
        
        $localEntitiesArray = getEntities($provinceAlphanumericId);
        $circle = $localEntitiesArray[0];
        $cell =  $localEntitiesArray[1];
        $village = $localEntitiesArray[2];
        $township = $localEntitiesArray[3];
        $zone = $localEntitiesArray[4];

        $idArray = getIDs("zb", $district, $adminPost, $neighborhoodOrLocality, $cell, $circle, $village, $township, $zone);
        $provinceId = "10";
        $districtId = $idArray[0];
        $adminPostId = $idArray[1];
        $neighborhoodOrLocalityId = $idArray[2];
        $cellId = $idArray[3];
        $circleId = $idArray[4];
        $villageId = $idArray[5];
        $townshipId = $idArray[6];
        $zoneId = $idArray[7];

        break;
    case 'CD':
        $provinceName = "Cabo Delgado";
        $district = $_POST["district-cd"];
        $adminPost = $_POST["administrative-post-cd"];
        $neighborhoodOrLocality = $_POST["neighborhood-cd"];
        
        $localEntitiesArray = getEntities($provinceAlphanumericId);
        $circle = $localEntitiesArray[0];
        $cell =  $localEntitiesArray[1];
        $village = $localEntitiesArray[2];
        $township = $localEntitiesArray[3];
        $zone = $localEntitiesArray[4];

        $idArray = getIDs("cd", $district, $adminPost, $neighborhoodOrLocality, $cell, $circle, $village, $township, $zone);
        $provinceId = "10";
        $districtId = $idArray[0];
        $adminPostId = $idArray[1];
        $neighborhoodOrLocalityId = $idArray[2];
        $cellId = $idArray[3];
        $circleId = $idArray[4];
        $villageId = $idArray[5];
        $townshipId = $idArray[6];
        $zoneId = $idArray[7];

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
switch ($roadType) {
    case 'Avenida':
        $roadName = "AV. " . $_POST["road-name"];
        break;
    case 'Rua':
        $roadName = "Rua " . $_POST["road-name"];
        break;
    default:
        # code...
        break;
}
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
$postalCode = $provinceAlphanumericId . $neighborhoodOrLocalityId . " " . $block . $lateral;

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

function getEntities($provinceAlphanumericId) {
    $alphanumericId = strtolower($provinceAlphanumericId);
    $localEntity = $_POST["local-entity"];

    switch ($localEntity) {
        case 'cell':
            $circle = "";
            $cell =  $_POST["cell-$alphanumericId"];
            $village = "";
            $township = "";
            $zone = "";
            break;
        case 'circle':
            $circle = $_POST["circle-$alphanumericId"];
            $cell =  "";
            $village = "";
            $township = "";
            $zone = "";
            break;
        case 'village':
            $circle = "";
            $cell =  "";
            $village = $_POST["village-$alphanumericId"];
            $township = "";
            $zone = "";
            break;
        case 'zone':
            $circle = "";
            $cell =  "";
            $village = "";
            $township = "";
            $zone = $_POST["zone-$alphanumericId"];
            break;
        case 'township':
            $circle = "";
            $cell =  "";
            $village = "";
            $township = $_POST["zone-$alphanumericId"];
            $zone = "";
            break;
        default:
            # code...
            break;
    }

    return array($circle, $cell, $village, $township, $zone);
}

function getIDs($alphanumericID, $district, $adminPost, $neighborhoodOrLocality, $cell, $circle, $village, $township, $zone)
{
    global $dbcon, $database_name;

    //get district id 
    $districtQuery = "SELECT * FROM $database_name. " . $alphanumericID . "_district WHERE district = '$district'";
    $districtQueryResult = $dbcon->query($districtQuery);
    $districtRows = $districtQueryResult->fetch(PDO::FETCH_ASSOC);
    $districtId = $districtRows['id'];

    //get admin post id
    $adminPostQuery = "SELECT * FROM  $database_name. " . $alphanumericID . "_admin_post WHERE admin_post = '$adminPost'";
    $adminPostQueryResult = $dbcon->query($adminPostQuery);
    $adminPostRows = $adminPostQueryResult->fetch(PDO::FETCH_ASSOC);
    $adminPostId = $adminPostRows['id'];

    //get neighborhood id
    $neighborhoodOrLocalityQuery = "SELECT * FROM  $database_name. " . $alphanumericID . "_neighborhood_locality WHERE neighborhood_locality = '$neighborhoodOrLocality'";
    $neighborhoodOrLocalityQueryResult = $dbcon->query($neighborhoodOrLocalityQuery);
    $neighborhoodOrLocalityRows = $neighborhoodOrLocalityQueryResult->fetch(PDO::FETCH_ASSOC);
    $neighborhoodOrLocalityId = $neighborhoodOrLocalityRows['id'];

    //get cell id
    $cellQuery = "SELECT * FROM  $database_name. " . $alphanumericID . "_cell WHERE cell = '$cell'";
    $cellQueryResult = $dbcon->query($cellQuery);
    $cellRows = $cellQueryResult->fetch(PDO::FETCH_ASSOC);
    $cellId = $cellRows['id'];

    //get circle id
    $circleQuery = "SELECT * FROM  $database_name. " . $alphanumericID . "_circle WHERE circle = '$circle'";
    $circleQueryResult = $dbcon->query($circleQuery);
    $circleRows = $circleQueryResult->fetch(PDO::FETCH_ASSOC);
    $circleId = $circleRows['id'];

    //get village id
    $villageQuery = "SELECT * FROM  $database_name. " . $alphanumericID . "_village WHERE village = '$village'";
    $villageQueryResult = $dbcon->query($villageQuery);
    $villageRows = $villageQueryResult->fetch(PDO::FETCH_ASSOC);
    $villageId = $villageRows['id'];

    //get township id
    $townshipQuery = "SELECT * FROM  $database_name. " . $alphanumericID . "_township WHERE township = '$township'";
    $townshipQueryResult = $dbcon->query($townshipQuery);
    $townshipRows = $townshipQueryResult->fetch(PDO::FETCH_ASSOC);
    $townshipId = $townshipRows['id'];

    //get zone id
    $zoneQuery = "SELECT * FROM  $database_name. " . $alphanumericID . "_zone WHERE zone = '$zone'";
    $zoneQueryResult = $dbcon->query($zoneQuery);
    $zoneRows = $zoneQueryResult->fetch(PDO::FETCH_ASSOC);
    $zoneId = $zoneRows['id'];

    return array($districtId, $adminPostId, $neighborhoodOrLocalityId, $cellId, $circleId, $villageId, $townshipId, $zoneId);
}

/**
 * Insert the data in the respective tables (USING PDO).
 */


try {

    $dbcon->beginTransaction();

    //save admin entities data
    $administrative_entities_query = "INSERT INTO $database_name.administrative_entities 
                                    (province, province_numeric_id, district, district_id, administrative_post, admin_post_id, neighborhood_locality, neighborhood_locality_id, province_alphabetical_id) 
                                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $dbcon->prepare($administrative_entities_query);
    $stmt->execute([$provinceName, $provinceId, $district, $districtId, $adminPost, $adminPostId, $neighborhoodOrLocality, $neighborhoodOrLocalityId, $provinceAlphanumericId]);

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
    $stmt->execute([$propertyType, $floor, $side, $doorNumber,  $roadName, $roadType, $stalemate, $viaduct, $block, $roundabout, $lane, $wide, $bridges, $plaza, $length, $width, $occupancy, $affectation]);

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
                            (province, district, neighborhood_locality, road_name, floor, door_number, city_block, cep, email, website, phone_number, responsible, registration_date) 
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $dbcon->prepare($main_address_info_query);
    $stmt->execute([$provinceName, $district, $neighborhoodOrLocality, $roadName, $floor, $doorNumber, $cityBlock, $postalCode, $email, $website, $contactNumber, $userId, $registrationDate]);


    $dbcon->commit();

    $_SESSION['register-response'] = "Registro efectuado com sucesso!";
    header("location: ../../admin/register-address/");
} catch (PDOException $ex) {
    //Something went wrong rollback!
    $dbcon->rollBack();
    echo $ex->getMessage();
}

