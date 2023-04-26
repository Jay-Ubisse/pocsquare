<?php
require "../../../../config/connect.php";

$province = $_POST['data'];

switch ($province) {
    case 'Maputo Cidade':
        maputoCityDistricts();
        break;
    case 'Maputo Província':
        maputoProvinceDistricts();
        break;
    case 'Gaza':
        gazaDistricts();
        break;
    case 'Inhambane':
        inhambaneDistricts();
        break;
    case 'Manica':
        manicaDistricts();
        break;
    case 'Sofala':
        sofalaDistricts();
        break;
    case 'Tete':
        teteDistricts();
        break;
    case 'Nampula':
        nampulaDistricts();
        break;
    case 'Zambézia':
        zambeziaDistricts();
        break;
    case 'Niassa':
        niassaDistricts();
        break;
    case 'Cabo Delgado':
        caboDelgadoDistricts();
        break;
    default:
        # code...
        break;
}

function maputoCityDistricts() {
    global $database_name, $dbcon;

    $sql = "SELECT * FROM $database_name.mc_district ORDER BY district_name";
    $result = $dbcon->query($sql);

    echo    "<tr>";
    echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-5'>ID</th>";
    echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-5'>Província</th>";
    echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-5'>Distrito</th>";
    echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-5'>Acção</th>";
    echo   "</tr>";

    $rows = $result->fetchAll(PDO::FETCH_ASSOC);
    if ($rows) {
        foreach ($rows as $row) {
            echo "<tr class='font-normal'>";
            echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-5'>" . $row['district_id'] . "</td>\n";
            echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-5'>" . $row['province']  . "</td>\n";
            echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-5'>" . $row['district_name']  . "</td>\n";
            echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-5 text-center'><a href='#' 
            onclick=\"sendInfo('" . $row['province'] . ", " . $row['district_name'] . "')\" class='bg-green-600 px-3 py-1 rounded-sm text-white'>Editar</a><a href='#' class='bg-red-600 px-3 py-1 rounded-sm text-white ml-2'>Eliminar</a></td>\n";
            echo  "</tr>";
        }
} else {
    echo  "Nenhum resultado.";
}

}

function maputoProvinceDistricts() {
    global $database_name, $dbcon;

    $sql = "SELECT * FROM $database_name.mp_district ORDER BY district_name";
    $result = $dbcon->query($sql);

    echo    "<tr>";
    echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-5'>ID</th>";
    echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-5'>Província</th>";
    echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-5'>Distrito</th>";
    echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-5'>Acção</th>";
    echo   "</tr>";

    $rows = $result->fetchAll(PDO::FETCH_ASSOC);
    if ($rows) {
        foreach ($rows as $row) {
            echo "<tr class='font-normal'>";
            echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-5'>" . $row['district_id'] . "</td>\n";
            echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-5'>" . $row['province']  . "</td>\n";
            echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-5'>" . $row['district_name']  . "</td>\n";
            echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-5 text-center'><a href='#' 
            onclick=\"sendInfo('" . $row['province'] . ", " . $row['district_name'] . "')\" class='bg-green-600 px-3 py-1 rounded-sm text-white'>Editar</a><a href='#' class='bg-red-600 px-3 py-1 rounded-sm text-white ml-2'>Eliminar</a></td>\n";
            echo  "</tr>";
        }
} else {
    echo  "Nenhum resultado.";
}

}

function gazaDistricts() {
    global $database_name, $dbcon;

    $sql = "SELECT * FROM $database_name.gz_district ORDER BY district_name";
    $result = $dbcon->query($sql);

    echo    "<tr>";
    echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-5'>ID</th>";
    echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-5'>Província</th>";
    echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-5'>Distrito</th>";
    echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-5'>Acção</th>";
    echo   "</tr>";

    $rows = $result->fetchAll(PDO::FETCH_ASSOC);
    if ($rows) {
        foreach ($rows as $row) {
            echo "<tr class='font-normal'>";
            echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-5'>" . $row['district_id'] . "</td>\n";
            echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-5'>" . $row['province']  . "</td>\n";
            echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-5'>" . $row['district_name']  . "</td>\n";
            echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-5 text-center'><a href='#' 
            onclick=\"sendInfo('" . $row['province'] . ", " . $row['district_name'] . "')\" class='bg-green-600 px-3 py-1 rounded-sm text-white'>Editar</a><a href='#' class='bg-red-600 px-3 py-1 rounded-sm text-white ml-2'>Eliminar</a></td>\n";
            echo  "</tr>";
        }
} else {
    echo  "Nenhum resultado.";
}

}

function inhambaneDistricts() {
    global $database_name, $dbcon;

    $sql = "SELECT * FROM $database_name.in_district ORDER BY district_name";
    $result = $dbcon->query($sql);

    echo    "<tr>";
    echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-5'>ID</th>";
    echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-5'>Província</th>";
    echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-5'>Distrito</th>";
    echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-5'>Acção</th>";
    echo   "</tr>";

    $rows = $result->fetchAll(PDO::FETCH_ASSOC);
    if ($rows) {
        foreach ($rows as $row) {
            echo "<tr class='font-normal'>";
            echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-5'>" . $row['district_id'] . "</td>\n";
            echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-5'>" . $row['province']  . "</td>\n";
            echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-5'>" . $row['district_name']  . "</td>\n";
            echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-5 text-center'><a href='#' 
            onclick=\"sendInfo('" . $row['province'] . ", " . $row['district_name'] . "')\" class='bg-green-600 px-3 py-1 rounded-sm text-white'>Editar</a><a href='#' class='bg-red-600 px-3 py-1 rounded-sm text-white ml-2'>Eliminar</a></td>\n";
            echo  "</tr>";
        }
} else {
    echo  "Nenhum resultado.";
}

}

function manicaDistricts() {
    global $database_name, $dbcon;

    $sql = "SELECT * FROM $database_name.mn_district ORDER BY district_name";
    $result = $dbcon->query($sql);

    echo    "<tr>";
    echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-5'>ID</th>";
    echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-5'>Província</th>";
    echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-5'>Distrito</th>";
    echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-5'>Acção</th>";
    echo   "</tr>";

    $rows = $result->fetchAll(PDO::FETCH_ASSOC);
    if ($rows) {
        foreach ($rows as $row) {
            echo "<tr class='font-normal'>";
            echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-5'>" . $row['district_id'] . "</td>\n";
            echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-5'>" . $row['province']  . "</td>\n";
            echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-5'>" . $row['district_name']  . "</td>\n";
            echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-5 text-center'><a href='#' 
            onclick=\"sendInfo('" . $row['province'] . ", " . $row['district_name'] . "')\" class='bg-green-600 px-3 py-1 rounded-sm text-white'>Editar</a><a href='#' class='bg-red-600 px-3 py-1 rounded-sm text-white ml-2'>Eliminar</a></td>\n";
            echo  "</tr>";
        }
} else {
    echo  "Nenhum resultado.";
}

}

function sofalaDistricts() {
    global $database_name, $dbcon;

    $sql = "SELECT * FROM $database_name.sf_district ORDER BY district_name";
    $result = $dbcon->query($sql);

    echo    "<tr>";
    echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-5'>ID</th>";
    echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-5'>Província</th>";
    echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-5'>Distrito</th>";
    echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-5'>Acção</th>";
    echo   "</tr>";

    $rows = $result->fetchAll(PDO::FETCH_ASSOC);
    if ($rows) {
        foreach ($rows as $row) {
            echo "<tr class='font-normal'>";
            echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-5'>" . $row['district_id'] . "</td>\n";
            echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-5'>" . $row['province']  . "</td>\n";
            echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-5'>" . $row['district_name']  . "</td>\n";
            echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-5 text-center'><a href='#' 
            onclick=\"sendInfo('" . $row['province'] . ", " . $row['district_name'] . "')\" class='bg-green-600 px-3 py-1 rounded-sm text-white'>Editar</a><a href='#' class='bg-red-600 px-3 py-1 rounded-sm text-white ml-2'>Eliminar</a></td>\n";
            echo  "</tr>";
        }
} else {
    echo  "Nenhum resultado.";
}

}

function teteDistricts() {
    global $database_name, $dbcon;

    $sql = "SELECT * FROM $database_name.tt_district ORDER BY district_name";
    $result = $dbcon->query($sql);

    echo    "<tr>";
    echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-5'>ID</th>";
    echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-5'>Província</th>";
    echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-5'>Distrito</th>";
    echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-5'>Acção</th>";
    echo   "</tr>";

    $rows = $result->fetchAll(PDO::FETCH_ASSOC);
    if ($rows) {
        foreach ($rows as $row) {
            echo "<tr class='font-normal'>";
            echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-5'>" . $row['district_id'] . "</td>\n";
            echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-5'>" . $row['province']  . "</td>\n";
            echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-5'>" . $row['district_name']  . "</td>\n";
            echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-5 text-center'><a href='#' 
            onclick=\"sendInfo('" . $row['province'] . ", " . $row['district_name'] . "')\" class='bg-green-600 px-3 py-1 rounded-sm text-white'>Editar</a><a href='#' class='bg-red-600 px-3 py-1 rounded-sm text-white ml-2'>Eliminar</a></td>\n";
            echo  "</tr>";
        }
} else {
    echo  "Nenhum resultado.";
}

}

function nampulaDistricts() {
    global $database_name, $dbcon;

    $sql = "SELECT * FROM $database_name.np_district ORDER BY district_name";
    $result = $dbcon->query($sql);

    echo    "<tr>";
    echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-5'>ID</th>";
    echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-5'>Província</th>";
    echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-5'>Distrito</th>";
    echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-5'>Acção</th>";
    echo   "</tr>";

    $rows = $result->fetchAll(PDO::FETCH_ASSOC);
    if ($rows) {
        foreach ($rows as $row) {
            echo "<tr class='font-normal'>";
            echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-5'>" . $row['district_id'] . "</td>\n";
            echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-5'>" . $row['province']  . "</td>\n";
            echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-5'>" . $row['district_name']  . "</td>\n";
            echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-5 text-center'><a href='#' 
            onclick=\"sendInfo('" . $row['province'] . ", " . $row['district_name'] . "')\" class='bg-green-600 px-3 py-1 rounded-sm text-white'>Editar</a><a href='#' class='bg-red-600 px-3 py-1 rounded-sm text-white ml-2'>Eliminar</a></td>\n";
            echo  "</tr>";
        }
} else {
    echo  "Nenhum resultado.";
}

}

function zambeziaDistricts() {
    global $database_name, $dbcon;

    $sql = "SELECT * FROM $database_name.zb_district ORDER BY district_name";
    $result = $dbcon->query($sql);

    echo    "<tr>";
    echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-5'>ID</th>";
    echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-5'>Província</th>";
    echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-5'>Distrito</th>";
    echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-5'>Acção</th>";
    echo   "</tr>";

    $rows = $result->fetchAll(PDO::FETCH_ASSOC);
    if ($rows) {
        foreach ($rows as $row) {
            echo "<tr class='font-normal'>";
            echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-5'>" . $row['district_id'] . "</td>\n";
            echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-5'>" . $row['province']  . "</td>\n";
            echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-5'>" . $row['district_name']  . "</td>\n";
            echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-5 text-center'><a href='#' 
            onclick=\"sendInfo('" . $row['province'] . ", " . $row['district_name'] . "')\" class='bg-green-600 px-3 py-1 rounded-sm text-white'>Editar</a><a href='#' class='bg-red-600 px-3 py-1 rounded-sm text-white ml-2'>Eliminar</a></td>\n";
            echo  "</tr>";
        }
} else {
    echo  "Nenhum resultado.";
}

}

function niassaDistricts() {
    global $database_name, $dbcon;

    $sql = "SELECT * FROM $database_name.ns_district ORDER BY district_name";
    $result = $dbcon->query($sql);

    echo    "<tr>";
    echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-5'>ID</th>";
    echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-5'>Província</th>";
    echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-5'>Distrito</th>";
    echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-5'>Acção</th>";
    echo   "</tr>";

    $rows = $result->fetchAll(PDO::FETCH_ASSOC);
    if ($rows) {
        foreach ($rows as $row) {
            echo "<tr class='font-normal'>";
            echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-5'>" . $row['district_id'] . "</td>\n";
            echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-5'>" . $row['province']  . "</td>\n";
            echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-5'>" . $row['district_name']  . "</td>\n";
            echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-5 text-center'><a href='#' 
            onclick=\"sendInfo('" . $row['province'] . ", " . $row['district_name'] . "')\" class='bg-green-600 px-3 py-1 rounded-sm text-white'>Editar</a><a href='#' class='bg-red-600 px-3 py-1 rounded-sm text-white ml-2'>Eliminar</a></td>\n";
            echo  "</tr>";
        }
} else {
    echo  "Nenhum resultado.";
}

}

function caboDelgadoDistricts() {
    global $database_name, $dbcon;

    $sql = "SELECT * FROM $database_name.cd_district ORDER BY district_name";
    $result = $dbcon->query($sql);

    echo    "<tr>";
    echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-5'>ID</th>";
    echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-5'>Província</th>";
    echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-5'>Distrito</th>";
    echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-5'>Acção</th>";
    echo   "</tr>";

    $rows = $result->fetchAll(PDO::FETCH_ASSOC);
    if ($rows) {
        foreach ($rows as $row) {
            echo "<tr class='font-normal'>";
            echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-5'>" . $row['district_id'] . "</td>\n";
            echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-5'>" . $row['province']  . "</td>\n";
            echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-5'>" . $row['district_name']  . "</td>\n";
            echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-5 text-center'><a href='#' 
            onclick=\"sendInfo('" . $row['province'] . ", " . $row['district_name'] . "')\"  class='bg-green-600 px-3 py-1 rounded-sm text-white'>Editar</a><a href='#' class='bg-red-600 px-3 py-1 rounded-sm text-white ml-2'>Eliminar</a></td>\n";
            echo  "</tr>";
        }
} else {
    echo  "Nenhum resultado.";
}

}

?>