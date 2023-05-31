<?php
    require "../../config/connect.php";
    session_start();

    $sql = "SELECT * FROM $database_name.users ORDER BY first_name";
    $result = $dbcon->query($sql);

    echo    "<tr>";
    echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-2'>id</th>";
    echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-2'>Nome</th>";
    echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-2'>Apelido</th>";
    echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-2'>Nome de usuário</th>";
    echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-2'>Email</th>";
    echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-2'>Cargo</th>";
    echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-2'>Estado</th>";
    echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-2'>Acção</th>";
    echo   "</tr>";

    $rows = $result->fetchAll(PDO::FETCH_ASSOC);
    if ($rows) {
        foreach ($rows as $row) {

            if($row['status'] == 'inactive') {
                echo "<tr class='font-normal'>";
                echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-2'>". $row['id'] . "</td>\n";
                echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-2'>" . $row['first_name'] . "</td>\n";
                echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-2'>" . $row['last_name']  . "</td>\n";
                echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-2'>". $row['username'] . "</td>\n";
                echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-2'>" . $row['email'] . "</td>\n";
                echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-2'>" . $row['role'] . "</td>\n";
                echo  "<td class='border-collapse border-2 border-orange-700 text-red-700 font-medium py-2 px-2'>" . "Inactiva"  . "</td>\n";
                echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-5 text-center'><a href='#' onclick=\"activateAccount('"  . $row['id'] .  "')\" class='bg-green-600 px-3 py-1 rounded-sm text-white'>Activar</a>
                    </td>\n";
                echo   "</tr>";
            } else {
                echo "<tr class='font-normal'>";
                echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-2'>". $row['id'] . "</td>\n";
                echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-2'>" . $row['first_name'] . "</td>\n";
                echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-2'>" . $row['last_name']  . "</td>\n";
                echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-2'>". $row['username'] . "</td>\n";
                echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-2'>" . $row['email'] . "</td>\n";
                echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-2'>" . $row['role'] . "</td>\n";
                echo  "<td class='border-collapse border-2 border-orange-700 text-green-700 font-medium py-2 px-2'>" . "Activa"  . "</td>\n";
                echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-5 text-center'><a href='#' onclick=\"deactivateAccount('"  . $row['id'] .  "')\" class='bg-red-600 px-3 py-1 rounded-sm text-white'>Desactivar</a>
                    </td>\n";
                echo   "</tr>";
            }
           
        }       
    }  else {
        echo  "Nenhum resultado.";
    }
?>