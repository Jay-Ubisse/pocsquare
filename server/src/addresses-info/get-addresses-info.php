<?php
    require "../../config/connect.php";
    session_start();

    $id = $_POST['id'];

    $_SESSION["entity_id"] = $id;

    //dados das entidades administrativas
    $adminEntityQuery = "SELECT * FROM $database_name.administrative_entities WHERE entity_id = $id";
    $adminEntityResult = $dbcon->query($adminEntityQuery);
    $adminEntityRows = $adminEntityResult->fetch(PDO::FETCH_ASSOC);

    $_SESSION["province"] = $adminEntityRows["province"];
    $_SESSION["district"] = $adminEntityRows["district"];
    $_SESSION["administrative_post"] = $adminEntityRows["administrative_post"];
    $_SESSION["neighborhood_locality"] = $adminEntityRows["neighborhood_locality"];

    //dados das entidades Locais
    $localEntityQuery = "SELECT * FROM $database_name.local_entities WHERE entity_id = $id";
    $localEntityResult = $dbcon->query($localEntityQuery);
    $localEntityRows = $localEntityResult->fetch(PDO::FETCH_ASSOC);

    $_SESSION["cell"] = $localEntityRows["cell"];
    $_SESSION["circle"] = $localEntityRows["circle"];
    $_SESSION["village"] = $localEntityRows["village"];
    $_SESSION["township"] = $localEntityRows["township"];
    
    //dados das entidades patrimoniais
    $heritageEntityQuery = "SELECT * FROM $database_name.heritage_entities WHERE entity_id = $id";
    $heritageEntityResult = $dbcon->query($heritageEntityQuery);
    $heritageEntityRows = $heritageEntityResult->fetch(PDO::FETCH_ASSOC);

    $_SESSION["property_type"] = $heritageEntityRows["property_type"];
    $_SESSION["floor"] = $heritageEntityRows["floor"];
    $_SESSION["side"] = $heritageEntityRows["side"];
    $_SESSION["door_number"] = $heritageEntityRows["door_number"];
    $_SESSION["road_name"] = $heritageEntityRows["road_name"];
    $_SESSION["road_type"] = $heritageEntityRows["road_type"];
    $_SESSION["stalemate"] = $heritageEntityRows["stalemate"];
    $_SESSION["viaduct"] = $heritageEntityRows["viaduct"];
    $_SESSION["block"] = $heritageEntityRows["block"];
    $_SESSION["roundabout"] = $heritageEntityRows["roundabout"];
    $_SESSION["lane"] = $heritageEntityRows["lane"];
    $_SESSION["wide"] = $heritageEntityRows["wide"];
    $_SESSION["bridges"] = $heritageEntityRows["bridges"];
    $_SESSION["plaza"] = $heritageEntityRows["plaza"];
    $_SESSION["length"] = $heritageEntityRows["length"];
    $_SESSION["width"] = $heritageEntityRows["width"];
    $_SESSION["occupancy"] = $heritageEntityRows["occupancy"];
    $_SESSION["affectation"] = $heritageEntityRows["affectation"];

     //dados das entidades postais
     $postalEntityQuery = "SELECT * FROM $database_name.postal_entities WHERE entity_id = $id";
     $postalEntityResult = $dbcon->query($postalEntityQuery);
     $postalEntityRows = $postalEntityResult->fetch(PDO::FETCH_ASSOC);
 
     $_SESSION["city_block"] = $postalEntityRows["city_block"];
     $_SESSION["lateral"] = $postalEntityRows["lateral"];
     $_SESSION["entry"] = $postalEntityRows["entry"];
     $_SESSION["mailbox"] = $postalEntityRows["mailbox"];
     $_SESSION["post_office"] = $postalEntityRows["post_office"];

     //dados das entidades espaciais
     $espacialEntityQuery = "SELECT * FROM $database_name.espacial_entities WHERE entity_id = $id";
     $espacialEntityResult = $dbcon->query($espacialEntityQuery);
     $espacialEntityRows = $espacialEntityResult->fetch(PDO::FETCH_ASSOC);
 
     $_SESSION["latitude"] = $espacialEntityRows["latitude"];
     $_SESSION["latitude_dms"] = $espacialEntityRows["latitude_dms"];
     $_SESSION["longitude"] = $espacialEntityRows["longitude"];
     $_SESSION["longitude_dms"] = $espacialEntityRows["longitude_dms"];
     $_SESSION["sea_rise"] = $espacialEntityRows["sea_rise"];
     $_SESSION["via_lat_start"] = $espacialEntityRows["via_lat_start"];
     $_SESSION["via_lat_end"] = $espacialEntityRows["via_lat_end"];

    //dados das entidades complementares
    $complementaryEntityQuery = "SELECT * FROM $database_name.complementary_entities WHERE entity_id = $id";
    $complementaryEntityResult = $dbcon->query($complementaryEntityQuery);
    $complementaryEntityRows = $complementaryEntityResult->fetch(PDO::FETCH_ASSOC);

    $_SESSION["contact_number"] = $complementaryEntityRows["contact_number"];
    $_SESSION["email"] = $complementaryEntityRows["email"];
    $_SESSION["website"] = $complementaryEntityRows["website"];

    //dados das do responsavel pelo cadastro
    $mainInfoQuery = "SELECT * FROM $database_name.main_address_info WHERE entity_id = $id";
    $mainInfoResult = $dbcon->query($mainInfoQuery);
    $mainInfoRows = $mainInfoResult->fetch(PDO::FETCH_ASSOC);

    $_SESSION["responsible"] = $mainInfoRows["responsible"];

?>