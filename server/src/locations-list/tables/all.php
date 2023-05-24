<?php
echo   "<tr>";
echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-5'>Província</th>";
echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-5'>Distrito</th>";
echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-5'>P. Administrativo</th>";
echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-5'>Bairro ou Localidade</th>";
echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-5'>Célula</th>";
echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-5'>Circulo</th>";
echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-5'>Vila</th>";
echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-5'>Zona</th>";
echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-5'>Povoação</th>";
echo   "</tr>";

$rows = $result->fetchAll(PDO::FETCH_ASSOC);
if ($rows) {
    foreach ($rows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['admin_post']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['neighborhood_locality']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['cell']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['circle']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['village']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['zone']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['township']  . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}
?>