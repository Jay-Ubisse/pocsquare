<?php
require "../../../config/connect.php";

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

switch ($region) {
    case 'district':
        $regionName = "Distrito";
        break;
    case 'admin_post':
        $regionName = "P. Administrativo";
        break;
    case 'neighborhood':
        $regionName = "Bairro";
        break;
    case 'locality':
        $regionName = "Localidade";
        break;
    case 'cell':
        $regionName = "Célula";
        break;
    case 'circle':
        $regionName = "Circulo";
        break;
    case 'village':
        $regionName = "Vila";
        break;
    case 'zone':
        $regionName = "Zona";
        break;
    case 'township':
        $regionName = "Povoação";
        break;
    default:
        # code...
        break;
}

$table = $prefix . $region;

$sql = "SELECT * FROM $database_name.$table";
    $result = $dbcon->query($sql);

    echo    "<tr>";
    echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-5'>ID</th>";
    echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-5'>Província</th>";
    echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-5'>$regionName</th>";
    echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-5'>Acção</th>";
    echo   "</tr>";

    $rows = $result->fetchAll(PDO::FETCH_ASSOC);
    if ($rows) {
        foreach ($rows as $row) {
            echo "<tr class='font-normal'>";
            echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-5'>" . $row['id'] . "</td>\n";
            echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-5'>" . $row['province']  . "</td>\n";
            echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-5'>" . $row['name']  . "</td>\n";
            echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-5 text-center'><a href='#' 
            onclick=\"sendInfo('" . $row['province'] . ", " . $row['name'] . "')\" class='bg-green-600 px-3 py-1 rounded-sm text-white'>Editar</a><a href='#' class='bg-red-600 px-3 py-1 rounded-sm text-white ml-2'>Eliminar</a></td>\n";
            echo  "</tr>";
        }
} else {
    echo  "Nenhum resultado.";
}

?>