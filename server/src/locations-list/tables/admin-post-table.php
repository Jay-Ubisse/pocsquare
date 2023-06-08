<?php
echo   "<tr>";
echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-5'>ID</th>";
echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-5'>Província</th>";
echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-5'>Distrito</th>";
echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-5'>$regionName</th>";
echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-5'>Acção</th>";
echo   "</tr>";

$rows = $result->fetchAll(PDO::FETCH_ASSOC);

if (isset($_SESSION["admin-auth"])) {
    if ($rows) {
        foreach ($rows as $row) {
            echo "<tr class='font-normal'>";
            echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-5'>" . $row['id'] . "</td>\n";
            echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-5'>" . $row['province']  . "</td>\n";
            echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-5'>" . $row['district']  . "</td>\n";
            echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-5'>" . $row['admin_post']  . "</td>\n";
            echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-5 text-center'>
                <a href='#' onclick=\"sendInfoForEdit('" . "admin-post-data" . "," . $row['id'] . "," . $row['district'] . "," . $row['admin_post'] . "')\" class='bg-green-600 px-3 py-1 rounded-sm text-white'>Editar</a>
                <a href='#' onclick=\"sendDataForDeletion('" . $row['id'] . "," . $table . "')\" class='bg-red-600 px-3 py-1 rounded-sm text-white ml-2'>Eliminar</a>
                </td>\n";
            echo  "</tr>";
        }
    } else {
        echo  "Nenhum resultado.";
    }
}

if (isset($_SESSION["supervisor-auth"])) {
    if ($rows) {
        foreach ($rows as $row) {
            echo "<tr class='font-normal'>";
            echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-5'>" . $row['id'] . "</td>\n";
            echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-5'>" . $row['province']  . "</td>\n";
            echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-5'>" . $row['district']  . "</td>\n";
            echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-5'>" . $row['admin_post']  . "</td>\n";
            echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-5 text-center'>
                <a href='#' onclick=\"sendInfoForEdit('" . "admin-post-data" . "," . $row['id'] . "," . $row['district'] . "," . $row['admin_post'] . "')\" class='bg-green-600 px-3 py-1 rounded-sm text-white'>Editar</a>
                </td>\n";
            echo  "</tr>";
        }
    } else {
        echo  "Nenhum resultado.";
    }
}

?>