<?php
require "../../config/connect.php";

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

$sql = "SELECT * FROM $database_name.$table ORDER BY id";
$result = $dbcon->query($sql);

switch ($region) {
    case 'district':
        $regionName = "Distrito";
        include_once "./tables/districts-table.php";
        break;
    case 'admin_post':
        $regionName = "P. Administrativo";
        include_once "./tables/admin-post-table.php";
        break;
    case 'neighborhood_locality':
        $regionName = "Bairro ou Localidade";
        include_once "./tables/neighborhood-locality.php";
        break;
    case 'cell':
        $regionName = "Célula";
        include_once "./tables/cell-circle-village-township-zone.php";
        break;
    case 'circle':
        $regionName = "Circulo";
        include_once "./tables/cell-circle-village-township-zone.php";
        break;
    case 'village':
        $regionName = "Vila";
        include_once "./tables/cell-circle-village-township-zone.php";
        break;
    case 'zone':
        $regionName = "Zona";
        include_once "./tables/cell-circle-village-township-zone.php";
        break;
    case 'township':
        $regionName = "Povoação";
        include_once "./tables/cell-circle-village-township-zone.php";
        break;
    default:
        # code...
        break;
}


?>