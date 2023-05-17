<?php
require "../../config/connect.php";
session_start();

$newProvince = $_POST["province"];
$region = $_SESSION["region"];

switch ($newProvince) {
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
        break;
}

switch ($region) {
    case 'district':
        updateDistrict();
        break;
    case 'admin_post':
        updateAdminPost();
        break;
    case 'neighborhood_locality':
        updateNeighborhoodOrLocality();
        break;
    case 'cell':
        $ptRegionName = "uma Célula";
        updateRegion();
        break;
    case 'circle':
        $ptRegionName = "um Circulo";
        updateRegion();
        break;
    case 'village':
        $ptRegionName = "uma Vila";
        updateRegion();
        break;
    case 'township':
        $ptRegionName = "uma Povoação";
        updateRegion();
        break;
    case 'zone':
        $ptRegionName = "uma Zona";
        updateRegion();
        break;
    default:
        # code...
        break;
}

function updateDistrict() {
    global $dbcon, $database_name, $newProvince, $region, $prefix;

    //dados antigos
    $oldId = $_SESSION["id_number"];
    $oldDistrict = $_SESSION["district_name"];


    //novos dados
    $newId = $_POST["id"] . " ";
    $newDistrict = $_POST["district"];

    //tabela 
    $table = $prefix . $region;

    //verificar se existe uma outra linha com o mesmo
    $checkDistrictQuery = "SELECT * FROM $database_name.$table WHERE district = '$newDistrict'";
    $checkDistrictResult = $dbcon->query($checkDistrictQuery);
    
    if ($checkDistrictResult->rowCount() > 0) {
        $_SESSION["update-status"] = true;
        $_SESSION['update-message'] = "Já existe um distrito registrado com o mesmo nome.";
        header("location: ../../../admin/locations-list/edit-location/update-status/");
    } else {
        //Se tudo estiver ok, actualizar os dados.

        try {

            $dbcon->beginTransaction();

            $updateQuery = "UPDATE $database_name.$table SET province = ?, district = ? WHERE id = ?";
            $stmt= $dbcon->prepare($updateQuery);
            $stmt->execute([$newProvince, $newDistrict, $oldId]);

            $dbcon->commit();

            $_SESSION["update-status"] = false;
            $_SESSION['update-message'] = "Dados actualizados com sucesso.";
            header("location: ../../../admin/locations-list/edit-location/update-status/");
        } catch (PDOException $ex) {
            //Something went wrong rollback!
            $dbcon->rollBack();
            echo $ex->getMessage();
            $_SESSION["update-status"] = true;
            $_SESSION['update-message'] = "Ocorreu um erro ao actualizar os dados.";
            header("location: ../../../admin/locations-list/edit-location/update-status/");

        } 
    }

}

function updateAdminPost() {
    global $dbcon, $database_name, $newProvince, $region, $prefix;

    //dados antigos
    $oldId = $_SESSION["id_number"];
    $oldDistrict = $_SESSION["district_name"];
    $oldAdminPost = $_SESSION["admin_post_name"];


    //novos dados
    $newId = $_POST["id"] . " ";
    $newDistrict = $_POST["district"];
    $newAdminPost = $_POST["admin-post"];

    //tabela 
    $table = $prefix . $region;

    //verificar se existe uma outra linha com o mesmo
    $checkDistrictQuery = "SELECT * FROM $database_name.$table WHERE admin_post = '$newAdminPost'";
    $checkDistrictResult = $dbcon->query($checkDistrictQuery);
    
    if ($checkDistrictResult->rowCount() > 0) {
        $_SESSION["update-status"] = true;
        $_SESSION['update-message'] = "Já existe um P. Administrativo registrado com o mesmo nome.";
        header("location: ../../../admin/locations-list/edit-location/update-status/");
    } else {
        //Se tudo estiver ok, actualizar os dados.

        try {

            $dbcon->beginTransaction();

            $updateQuery = "UPDATE $database_name.$table SET province = ?, district = ?, admin_post = ? WHERE id = ?";
            $stmt= $dbcon->prepare($updateQuery);
            $stmt->execute([$newProvince, $newDistrict, $newAdminPost, $oldId]);

            $dbcon->commit();

            $_SESSION["update-status"] = false;
            $_SESSION['update-message'] = "Dados actualizados com sucesso.";
            header("location: ../../../admin/locations-list/edit-location/update-status/");
        } catch (PDOException $ex) {
            //Something went wrong rollback!
            $dbcon->rollBack();
            echo $ex->getMessage();
            $_SESSION["update-status"] = true;
            $_SESSION['update-message'] = "Ocorreu um erro ao actualizar os dados.";
            header("location: ../../../admin/locations-list/edit-location/update-status/");

        } 
    }

}

function updateNeighborhoodOrLocality() {
    global $dbcon, $database_name, $newProvince, $region, $prefix;

    //dados antigos
    $oldId = $_SESSION["id_number"];
    $oldDistrict = $_SESSION["district_name"];
    $oldAdminPost = $_SESSION["admin_post_name"];
    $oldNeighborhoodOrLocality = $_SESSION["neighborhood_name"];


    //novos dados
    $newDistrict = $_POST["district"];
    $newAdminPost = $_POST["admin-post"];
    $newNeighborhoodOrLocality = $_POST["neighborhood-locality"];

    //tabela 
    $table = $prefix . $region;

    //verificar se existe uma outra linha com o mesmo
    $checkDistrictQuery = "SELECT * FROM $database_name.$table WHERE neighborhood_locality = '$newNeighborhoodOrLocality'";
    $checkDistrictResult = $dbcon->query($checkDistrictQuery);
    
    if ($checkDistrictResult->rowCount() > 0) {
        $_SESSION["update-status"] = true;
        $_SESSION['update-message'] = "Já existe uma Localidade ou Bairro registrado com o mesmo nome.";
        header("location: ../../../admin/locations-list/edit-location/update-status/");
    } else {
        //Se tudo estiver ok, actualizar os dados.

        try {

            $dbcon->beginTransaction();

            $updateQuery = "UPDATE $database_name.$table SET province = ?, district = ?, admin_post = ?, neighborhood_locality = ? WHERE id = ?";
            $stmt= $dbcon->prepare($updateQuery);
            $stmt->execute([$newProvince, $newDistrict, $newAdminPost, $newNeighborhoodOrLocality, $oldId]);

            $dbcon->commit();

            $_SESSION["update-status"] = false;
            $_SESSION['update-message'] = "Dados actualizados com sucesso.";
            header("location: ../../../admin/locations-list/edit-location/update-status/");
        } catch (PDOException $ex) {
            //Something went wrong rollback!
            $dbcon->rollBack();
            echo $ex->getMessage();
            /*
            $_SESSION["update-status"] = true;
            $_SESSION['update-message'] = "Ocorreu um erro ao actualizar os dados.";
            header("location: ../../../admin/locations-list/edit-location/update-status/");
            */

        } 
    }

}

function updateRegion() {
    global $dbcon, $database_name, $newProvince, $region, $prefix, $ptRegionName;

    //dados antigos
    $oldId = $_SESSION["id_number"];
    $oldDistrict = $_SESSION["district_name"];
    $oldAdminPost = $_SESSION["admin_post_name"];
    $oldNeighborhoodOrLocality = $_SESSION["neighborhood_name"];


    //novos dados
    $newDistrict = $_POST["district"];
    $newAdminPost = $_POST["admin-post"];
    $newNeighborhoodOrLocality = $_POST["neighborhood-locality"];
    $regionName = $_POST["$region"];

    //tabela 
    $table = $prefix . $region;

    //verificar se existe uma outra linha com o mesmo
    $checkDistrictQuery = "SELECT * FROM $database_name.$table WHERE $region = '$regionName'";
    $checkDistrictResult = $dbcon->query($checkDistrictQuery);
    
    if ($checkDistrictResult->rowCount() > 0) {
        $_SESSION["update-status"] = true;
        $_SESSION['update-message'] = "Já existe $ptRegionName registrado com o mesmo nome.";
        header("location: ../../../admin/locations-list/edit-location/update-status/");
    } else {
        //Se tudo estiver ok, actualizar os dados.

        try {

            $dbcon->beginTransaction();

            $updateQuery = "UPDATE $database_name.$table SET province = ?, district = ?, admin_post = ?, neighborhood_locality = ?, $region = ? WHERE id = ?";
            $stmt= $dbcon->prepare($updateQuery);
            $stmt->execute([$newProvince, $newDistrict, $newAdminPost, $newNeighborhoodOrLocality, $regionName, $oldId]);

            $dbcon->commit();

            $_SESSION["update-status"] = false;
            $_SESSION['update-message'] = "Dados actualizados com sucesso.";
            header("location: ../../../admin/locations-list/edit-location/update-status/");
        } catch (PDOException $ex) {
            //Something went wrong rollback!
            $dbcon->rollBack();
            echo $ex->getMessage();
            /*
            $_SESSION["update-status"] = true;
            $_SESSION['update-message'] = "Ocorreu um erro ao actualizar os dados.";
            header("location: ../../../admin/locations-list/edit-location/update-status/");
            */

        } 
    }

}

?>