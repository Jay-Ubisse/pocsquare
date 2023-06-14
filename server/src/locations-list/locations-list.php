<?php
require "../../config/connect.php";
session_start();

$province = $_POST['province'];
$region = $_POST['region'];

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
    case 'Nampula':
        $prefix = "np_";
        break;
    case 'Zambézia':
        $prefix = "zb_";
        break;
    case 'Niassa':
        $prefix = "ns_";
        break;
    case 'Cabo Delgado':
        $prefix = "cd_";
        break;
    default:
        # code...
        break;
}

$table = $prefix . $region;


switch ($region) {
    case 'all':
        include_once "./tables/all.php";
        break;
    case 'district':
        $sql = "SELECT * FROM $database_name.$table ORDER BY id";
        $result = $dbcon->query($sql);
        $regionName = "Distrito";
        include_once "./tables/districts-table.php";
        break;
    case 'admin_post':
        $sql = "SELECT * FROM $database_name.$table ORDER BY id";
        $result = $dbcon->query($sql);
        $regionName = "P. Administrativo";
        include_once "./tables/admin-post-table.php";
        break;
    case 'neighborhood_locality':
        $sql = "SELECT * FROM $database_name.$table ORDER BY id";
        $result = $dbcon->query($sql);
        $regionName = "Bairro ou Localidade";
        include_once "./tables/neighborhood-locality.php";
        break;
    case 'cell':
        $regionName = "Célula";
        $sql = "SELECT * FROM $database_name.$table ORDER BY id";
        $result = $dbcon->query($sql);
        include_once "./tables/cell-circle-village-township-zone.php";
        break;
    case 'circle':
        $sql = "SELECT * FROM $database_name.$table ORDER BY id";
        $result = $dbcon->query($sql);
        $regionName = "Circulo";
        include_once "./tables/cell-circle-village-township-zone.php";
        break;
    case 'village':
        $sql = "SELECT * FROM $database_name.$table ORDER BY id";
        $result = $dbcon->query($sql);
        $regionName = "Vila";
        include_once "./tables/cell-circle-village-township-zone.php";
        break;
    case 'zone':
        $sql = "SELECT * FROM $database_name.$table ORDER BY id";
        $result = $dbcon->query($sql);
        $regionName = "Zona";
        include_once "./tables/cell-circle-village-township-zone.php";
        break;
    case 'township':
        $sql = "SELECT * FROM $database_name.$table ORDER BY id";
        $result = $dbcon->query($sql);
        $regionName = "Povoação";
        include_once "./tables/cell-circle-village-township-zone.php";
        break;
    default:
        # code...
        break;
}


?>