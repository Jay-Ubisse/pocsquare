<?php


//buscar os distritos
$mcDistrictQuery = "SELECT * FROM $database_name.mc_district ORDER BY province";
$mcDistrictResult = $dbcon->query($mcDistrictQuery);

$mpDistrictQuery = "SELECT * FROM $database_name.mp_district ORDER BY province";
$mpDistrictResult = $dbcon->query($mpDistrictQuery);

$gzDistrictQuery = "SELECT * FROM $database_name.gz_district ORDER BY province";
$gzDistrictResult = $dbcon->query($gzDistrictQuery);

$inDistrictQuery = "SELECT * FROM $database_name.in_district ORDER BY province";
$inDistrictResult = $dbcon->query($inDistrictQuery);

$mnDistrictQuery = "SELECT * FROM $database_name.mn_district ORDER BY province";
$mnDistrictResult = $dbcon->query($mnDistrictQuery);

$sfDistrictQuery = "SELECT * FROM $database_name.sf_district ORDER BY province";
$sfDistrictResult = $dbcon->query($sfDistrictQuery);

$ttDistrictQuery = "SELECT * FROM $database_name.tt_district ORDER BY province";
$ttDistrictResult = $dbcon->query($ttDistrictQuery);

$npDistrictQuery = "SELECT * FROM $database_name.np_district ORDER BY province";
$npDistrictResult = $dbcon->query($npDistrictQuery);

$zbDistrictQuery = "SELECT * FROM $database_name.zb_district ORDER BY province";
$zbDistrictResult = $dbcon->query($zbDistrictQuery);

$nsDistrictQuery = "SELECT * FROM $database_name.ns_district ORDER BY province";
$nsDistrictResult = $dbcon->query($nsDistrictQuery);

$cdDistrictQuery = "SELECT * FROM $database_name.cd_district ORDER BY province";
$cdDistrictResult = $dbcon->query($cdDistrictQuery);


//buscar os postos administrativos
$mcAdminPostQuery = "SELECT * FROM $database_name.mc_admin_post ORDER BY province";
$mcAdminPostResult = $dbcon->query($mcAdminPostQuery);

$mpAdminPostQuery = "SELECT * FROM $database_name.mp_admin_post ORDER BY province";
$mpAdminPostResult = $dbcon->query($mpAdminPostQuery);

$gzAdminPostQuery = "SELECT * FROM $database_name.gz_admin_post ORDER BY province";
$gzAdminPostResult = $dbcon->query($gzAdminPostQuery);

$inAdminPostQuery = "SELECT * FROM $database_name.in_admin_post ORDER BY province";
$inAdminPostResult = $dbcon->query($inAdminPostQuery);

$mnAdminPostQuery = "SELECT * FROM $database_name.mn_admin_post ORDER BY province";
$mnAdminPostResult = $dbcon->query($mnAdminPostQuery);

$sfAdminPost = "SELECT * FROM $database_name.sf_admin_post ORDER BY province";
$sfAdminPostResult = $dbcon->query($sfAdminPost);

$ttAdminPostQuery = "SELECT * FROM $database_name.tt_admin_post ORDER BY province";
$ttAdminPostResult = $dbcon->query($ttAdminPostQuery);

$npAdminPostQuery = "SELECT * FROM $database_name.np_admin_post ORDER BY province";
$npAdminPostResult = $dbcon->query($npAdminPostQuery);

$zbAdminPostQuery = "SELECT * FROM $database_name.zb_admin_post ORDER BY province";
$zbAdminPostResult = $dbcon->query($zbAdminPostQuery);

$nsAdminPostQuery = "SELECT * FROM $database_name.ns_admin_post ORDER BY province";
$nsAdminPostResult = $dbcon->query($nsAdminPostQuery);

$cdAdminPostQuery = "SELECT * FROM $database_name.cd_admin_post ORDER BY province";
$cdAdminPostResult = $dbcon->query($cdAdminPostQuery);


//buscar os localidades ou bairros
$mcLocalityQuery = "SELECT * FROM $database_name.mc_neighborhood_locality ORDER BY province";
$mcLocalityResult = $dbcon->query($mcLocalityQuery);

$mpLocalityQuery = "SELECT * FROM $database_name.mp_neighborhood_locality ORDER BY province";
$mpLocalityResult = $dbcon->query($mpLocalityQuery);

$gzLocalityQuery = "SELECT * FROM $database_name.gz_neighborhood_locality ORDER BY province";
$gzLocalityResult = $dbcon->query($gzLocalityQuery);

$inLocalityQuery = "SELECT * FROM $database_name.in_neighborhood_locality ORDER BY province";
$inLocalityResult = $dbcon->query($inLocalityQuery);

$mnLocalityQuery = "SELECT * FROM $database_name.mn_neighborhood_locality ORDER BY province";
$mnLocalityResult = $dbcon->query($mnLocalityQuery);

$sfLocalityQuery = "SELECT * FROM $database_name.sf_neighborhood_locality ORDER BY province";
$sfLocalityResult = $dbcon->query($sfLocalityQuery);

$ttLocalityQuery = "SELECT * FROM $database_name.tt_neighborhood_locality ORDER BY province";
$ttLocalityResult = $dbcon->query($ttLocalityQuery);

$npLocalityQuery = "SELECT * FROM $database_name.np_neighborhood_locality ORDER BY province";
$npLocalityResult = $dbcon->query($npLocalityQuery);

$zbLocalityQuery = "SELECT * FROM $database_name.zb_neighborhood_locality ORDER BY province";
$zbLocalityResult = $dbcon->query($zbLocalityQuery);

$nsLocalityQuery = "SELECT * FROM $database_name.ns_neighborhood_locality ORDER BY province";
$nsLocalityResult = $dbcon->query($nsLocalityQuery);

$cdLocalityQuery = "SELECT * FROM $database_name.cd_neighborhood_locality ORDER BY province";
$cdLocalityResult = $dbcon->query($cdLocalityQuery);


//buscar os celulas
$mcCellQuery = "SELECT * FROM $database_name.mc_cell ORDER BY province";
$mcCellResult = $dbcon->query($mcCellQuery);

$mpCellQuery = "SELECT * FROM $database_name.mp_cell ORDER BY province";
$mpCellResult = $dbcon->query($mpCellQuery);

$gzCellQuery = "SELECT * FROM $database_name.gz_cell ORDER BY province";
$gzCellResult = $dbcon->query($gzCellQuery);

$inCellQuery = "SELECT * FROM $database_name.in_cell ORDER BY province";
$inCellResult = $dbcon->query($inCellQuery);

$mnCellQuery = "SELECT * FROM $database_name.mn_cell ORDER BY province";
$mnCellResult = $dbcon->query($mnCellQuery);

$sfCellQuery = "SELECT * FROM $database_name.sf_cell ORDER BY province";
$sfCellResult = $dbcon->query($sfCellQuery);

$ttCellQuery = "SELECT * FROM $database_name.tt_cell ORDER BY province";
$ttCellResult = $dbcon->query($ttCellQuery);

$npCellQuery = "SELECT * FROM $database_name.np_cell ORDER BY province";
$npCellResult = $dbcon->query($npCellQuery);

$zbCellQuery = "SELECT * FROM $database_name.zb_cell ORDER BY province";
$zbCellResult = $dbcon->query($zbCellQuery);

$nsCellQuery = "SELECT * FROM $database_name.ns_cell ORDER BY province";
$nsCellResult = $dbcon->query($nsCellQuery);

$cdCellQuery = "SELECT * FROM $database_name.cd_cell ORDER BY province";
$cdCellResult = $dbcon->query($cdCellQuery);


//buscar os circulos
$mcCircleQuery = "SELECT * FROM $database_name.mc_circle ORDER BY province";
$mcCircleResult = $dbcon->query($mcCircleQuery);

$mpCircleQuery = "SELECT * FROM $database_name.mp_circle ORDER BY province";
$mpCircleResult = $dbcon->query($mpCircleQuery);

$gzCircleQuery = "SELECT * FROM $database_name.gz_circle ORDER BY province";
$gzCircleResult = $dbcon->query($gzCircleQuery);

$inCircleQuery = "SELECT * FROM $database_name.in_circle ORDER BY province";
$inCircleResult = $dbcon->query($inCircleQuery);

$mnCircle = "SELECT * FROM $database_name.mn_circle ORDER BY province";
$mnCircleResult = $dbcon->query($mnCircle);

$sfCircleQuery = "SELECT * FROM $database_name.sf_circle ORDER BY province";
$sfCircleResult = $dbcon->query($sfCircleQuery);

$ttCircleQuery = "SELECT * FROM $database_name.tt_circle ORDER BY province";
$ttCircleResult = $dbcon->query($ttCircleQuery);

$npCircleQuery = "SELECT * FROM $database_name.np_circle ORDER BY province";
$npCircleResult = $dbcon->query($npCircleQuery);

$zbCircleQuery = "SELECT * FROM $database_name.zb_circle ORDER BY province";
$zbCircleResult = $dbcon->query($zbCircleQuery);

$nsCircleQuery = "SELECT * FROM $database_name.ns_circle ORDER BY province";
$nsCircleResult = $dbcon->query($nsCircleQuery);

$cdCircleQuery = "SELECT * FROM $database_name.cd_circle ORDER BY province";
$cdCircleResult = $dbcon->query($cdCircleQuery);


//buscar os Vilas
$mcVillageQuery = "SELECT * FROM $database_name.mc_village ORDER BY province";
$mcVillageResult = $dbcon->query($mcVillageQuery);

$mpVillageQuery = "SELECT * FROM $database_name.mp_village ORDER BY province";
$mpVillageResult = $dbcon->query($mpVillageQuery);

$gzVillageQuery = "SELECT * FROM $database_name.gz_village ORDER BY province";
$gzVillageResult = $dbcon->query($gzVillageQuery);

$inVillageQuery = "SELECT * FROM $database_name.in_village ORDER BY province";
$inVillageResult = $dbcon->query($inVillageQuery);

$mnVillageQuery = "SELECT * FROM $database_name.mn_village ORDER BY province";
$mnVillageResult = $dbcon->query($mnVillageQuery);

$sfVillageQuery = "SELECT * FROM $database_name.sf_village ORDER BY province";
$sfVillageResult = $dbcon->query($sfVillageQuery);

$ttVillageQuery = "SELECT * FROM $database_name.tt_village ORDER BY province";
$ttVillageResult = $dbcon->query($ttVillageQuery);

$npVillageQuery = "SELECT * FROM $database_name.np_village ORDER BY province";
$npVillageResult = $dbcon->query($npVillageQuery);

$zbVillageQuery = "SELECT * FROM $database_name.zb_village ORDER BY province";
$zbVillageResult = $dbcon->query($zbVillageQuery);

$nsVillageQuery = "SELECT * FROM $database_name.ns_village ORDER BY province";
$nsVillageResult = $dbcon->query($nsVillageQuery);

$cdVillageQuery = "SELECT * FROM $database_name.cd_village ORDER BY province";
$cdVillageResult = $dbcon->query($cdVillageQuery);


//buscar os zonas
$mcZoneQuery = "SELECT * FROM $database_name.mc_zone ORDER BY province";
$mcZoneResult = $dbcon->query($mcZoneQuery);

$mpZoneQuery = "SELECT * FROM $database_name.mp_zone ORDER BY province";
$mpZoneResult = $dbcon->query($mpZoneQuery);

$gzZoneQuery = "SELECT * FROM $database_name.gz_zone ORDER BY province";
$gzZoneResult = $dbcon->query($gzZoneQuery);

$inZoneQuery = "SELECT * FROM $database_name.in_zone ORDER BY province";
$inZoneResult = $dbcon->query($inZoneQuery);

$mnZoneQuery = "SELECT * FROM $database_name.mn_zone ORDER BY province";
$mnZoneResult = $dbcon->query($mnZoneQuery);

$sfZoneQuery = "SELECT * FROM $database_name.sf_zone ORDER BY province";
$sfZoneResult = $dbcon->query($sfZoneQuery);

$ttZoneQuery = "SELECT * FROM $database_name.tt_zone ORDER BY province";
$ttZoneResult = $dbcon->query($ttZoneQuery);

$npZoneQuery = "SELECT * FROM $database_name.np_zone ORDER BY province";
$npZoneResult = $dbcon->query($npZoneQuery);

$zbZoneQuery = "SELECT * FROM $database_name.zb_zone ORDER BY province";
$zbZoneResult = $dbcon->query($zbZoneQuery);

$nsZoneQuery = "SELECT * FROM $database_name.ns_zone ORDER BY province";
$nsZoneResult = $dbcon->query($nsZoneQuery);

$cdZoneQuery = "SELECT * FROM $database_name.cd_zone ORDER BY province";
$cdZoneResult = $dbcon->query($cdZoneQuery);


//buscar os Povoações
$mcTownshipQuery = "SELECT * FROM $database_name.mc_Township ORDER BY province";
$mcTownshipResult = $dbcon->query($mcTownshipQuery);

$mpTownshipQuery = "SELECT * FROM $database_name.mp_Township ORDER BY province";
$mpTownshipResult = $dbcon->query($mpTownshipQuery);

$gzTownshipQuery = "SELECT * FROM $database_name.gz_Township ORDER BY province";
$gzTownshipResult = $dbcon->query($gzTownshipQuery);

$inTownshipQuery = "SELECT * FROM $database_name.in_Township ORDER BY province";
$inTownshipResult = $dbcon->query($inTownshipQuery);

$mnTownshipQuery = "SELECT * FROM $database_name.mn_Township ORDER BY province";
$mnTownshipResult = $dbcon->query($mnTownshipQuery);

$sfTownshipQuery = "SELECT * FROM $database_name.sf_Township ORDER BY province";
$sfTownshipResult = $dbcon->query($sfTownshipQuery);

$ttTownshipQuery = "SELECT * FROM $database_name.tt_Township ORDER BY province";
$ttTownshipResult = $dbcon->query($ttTownshipQuery);

$npTownshipQuery = "SELECT * FROM $database_name.np_Township ORDER BY province";
$npTownshipResult = $dbcon->query($npTownshipQuery);

$zbTownshipQuery = "SELECT * FROM $database_name.zb_Township ORDER BY province";
$zbTownshipResult = $dbcon->query($zbTownshipQuery);

$nsTownshipQuery = "SELECT * FROM $database_name.ns_Township ORDER BY province";
$nsTownshipResult = $dbcon->query($nsTownshipQuery);

$cdTownshipQuery = "SELECT * FROM $database_name.cd_Township ORDER BY province";
$cdTownshipResult = $dbcon->query($cdTownshipQuery);

$line = 0;
echo   "<tr>";
echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-3'>#</th>";
echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-3'>Província</th>";
echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-3'>Distrito</th>";
echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-3'>P. Administrativo</th>";
echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-3'>Bairro ou Localidade</th>";
echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-3'>Célula</th>";
echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-3'>Circulo</th>";
echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-3'>Vila</th>";
echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-3'>Zona</th>";
echo   "<th class='border-collapse border-2 border-orange-700 py-2 px-3'>Povoação</th>";
echo   "</tr>";

$mcCellRows = $mcCellResult->fetchAll(PDO::FETCH_ASSOC);
if ($mcCellRows) {
    foreach ($mcCellRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['neighborhood_locality'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['cell'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$mcCircleRows = $mcCircleResult->fetchAll(PDO::FETCH_ASSOC);
if ($mcCircleRows) {
    foreach ($mcCircleRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['neighborhood_locality'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['circle'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$mcVillageRows = $mcVillageResult->fetchAll(PDO::FETCH_ASSOC);
if ($mcVillageRows) {
    foreach ($mcVillageRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['neighborhood_locality'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['village'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$mcZoneRows = $mcZoneResult->fetchAll(PDO::FETCH_ASSOC);
if ($mcZoneRows) {
    foreach ($mcZoneRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['neighborhood_locality'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['zone'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$mcTownshipRows = $mcTownshipResult->fetchAll(PDO::FETCH_ASSOC);
if ($mcTownshipRows) {
    foreach ($mcTownshipRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['neighborhood_locality'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['township'] . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$mcLocalityRows = $mcLocalityResult->fetchAll(PDO::FETCH_ASSOC);
if ($mcLocalityRows) {
    foreach ($mcLocalityRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['neighborhood_locality'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$mcAdminPostRows = $mcAdminPostResult->fetchAll(PDO::FETCH_ASSOC);
if ($mcAdminPostRows) {
    foreach ($mcAdminPostRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$mcDistrictRows = $mcDistrictResult->fetchAll(PDO::FETCH_ASSOC);
if ($mcDistrictRows) {
    foreach ($mcDistrictRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}


//Maputo Provincia
$mpCellRows = $mpCellResult->fetchAll(PDO::FETCH_ASSOC);
if ($mpCellRows) {
    foreach ($mpCellRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['neighborhood_locality'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['cell'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$mpCircleRows = $mpCircleResult->fetchAll(PDO::FETCH_ASSOC);
if ($mpCircleRows) {
    foreach ($mpCircleRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['neighborhood_locality'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['circle'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$mpVillageRows = $mpVillageResult->fetchAll(PDO::FETCH_ASSOC);
if ($mpVillageRows) {
    foreach ($mpVillageRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['neighborhood_locality'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['village'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$mpZoneRows = $mpZoneResult->fetchAll(PDO::FETCH_ASSOC);
if ($mpZoneRows) {
    foreach ($mpZoneRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['neighborhood_locality'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['zone'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$mpTownshipRows = $mpTownshipResult->fetchAll(PDO::FETCH_ASSOC);
if ($mpTownshipRows) {
    foreach ($mpTownshipRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['neighborhood_locality'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['township'] . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$mpLocalityRows = $mpLocalityResult->fetchAll(PDO::FETCH_ASSOC);
if ($mpLocalityRows) {
    foreach ($mpLocalityRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['neighborhood_locality'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$mpAdminPostRows = $mpAdminPostResult->fetchAll(PDO::FETCH_ASSOC);
if ($mpAdminPostRows) {
    foreach ($mpAdminPostRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$mpDistrictRows = $mpDistrictResult->fetchAll(PDO::FETCH_ASSOC);
if ($mpDistrictRows) {
    foreach ($mpDistrictRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}


//gaza
$gzCellRows = $gzCellResult->fetchAll(PDO::FETCH_ASSOC);
if ($gzCellRows) {
    foreach ($gzCellRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['neighborhood_locality'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['cell'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$gzCircleRows = $gzCircleResult->fetchAll(PDO::FETCH_ASSOC);
if ($gzCircleRows) {
    foreach ($gzCircleRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['neighborhood_locality'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['circle'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$gzVillageRows = $gzVillageResult->fetchAll(PDO::FETCH_ASSOC);
if ($gzVillageRows) {
    foreach ($gzVillageRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['neighborhood_locality'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['village'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$gzZoneRows = $gzZoneResult->fetchAll(PDO::FETCH_ASSOC);
if ($gzZoneRows) {
    foreach ($gzZoneRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['neighborhood_locality'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['zone'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$gzTownshipRows = $gzTownshipResult->fetchAll(PDO::FETCH_ASSOC);
if ($gzTownshipRows) {
    foreach ($gzTownshipRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['neighborhood_locality'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['township'] . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$gzLocalityRows = $gzLocalityResult->fetchAll(PDO::FETCH_ASSOC);
if ($gzLocalityRows) {
    foreach ($gzLocalityRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['neighborhood_locality'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$gzAdminPostRows = $gzAdminPostResult->fetchAll(PDO::FETCH_ASSOC);
if ($gzAdminPostRows) {
    foreach ($gzAdminPostRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$gzDistrictRows = $gzDistrictResult->fetchAll(PDO::FETCH_ASSOC);
if ($gzDistrictRows) {
    foreach ($gzDistrictRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

//inhambane

$inCellRows = $inCellResult->fetchAll(PDO::FETCH_ASSOC);
if ($inCellRows) {
    foreach ($inCellRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['neighborhood_locality'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['cell'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$inCircleRows = $inCircleResult->fetchAll(PDO::FETCH_ASSOC);
if ($inCircleRows) {
    foreach ($inCircleRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['neighborhood_locality'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['circle'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$inVillageRows = $inVillageResult->fetchAll(PDO::FETCH_ASSOC);
if ($inVillageRows) {
    foreach ($inVillageRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['neighborhood_locality'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['village'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$inZoneRows = $inZoneResult->fetchAll(PDO::FETCH_ASSOC);
if ($inZoneRows) {
    foreach ($inZoneRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['neighborhood_locality'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['zone'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$inTownshipRows = $inTownshipResult->fetchAll(PDO::FETCH_ASSOC);
if ($inTownshipRows) {
    foreach ($inTownshipRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['neighborhood_locality'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['township'] . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$inLocalityRows = $inLocalityResult->fetchAll(PDO::FETCH_ASSOC);
if ($inLocalityRows) {
    foreach ($inLocalityRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['neighborhood_locality'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$inAdminPostRows = $inAdminPostResult->fetchAll(PDO::FETCH_ASSOC);
if ($inAdminPostRows) {
    foreach ($inAdminPostRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$inDistrictRows = $inDistrictResult->fetchAll(PDO::FETCH_ASSOC);
if ($inDistrictRows) {
    foreach ($inDistrictRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

//manica
$mnCellRows = $mnCellResult->fetchAll(PDO::FETCH_ASSOC);
if ($mnCellRows) {
    foreach ($mnCellRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['neighborhood_locality'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['cell'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$mnCircleRows = $mnCircleResult->fetchAll(PDO::FETCH_ASSOC);
if ($mnCircleRows) {
    foreach ($mnCircleRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['neighborhood_locality'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['circle'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$mnVillageRows = $mnVillageResult->fetchAll(PDO::FETCH_ASSOC);
if ($mnVillageRows) {
    foreach ($mnVillageRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['neighborhood_locality'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['village'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$mnZoneRows = $mnZoneResult->fetchAll(PDO::FETCH_ASSOC);
if ($mnZoneRows) {
    foreach ($mnZoneRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['neighborhood_locality'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['zone'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$mnTownshipRows = $mnTownshipResult->fetchAll(PDO::FETCH_ASSOC);
if ($mnTownshipRows) {
    foreach ($mnTownshipRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['neighborhood_locality'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['township'] . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$mnLocalityRows = $mnLocalityResult->fetchAll(PDO::FETCH_ASSOC);
if ($mnLocalityRows) {
    foreach ($mnLocalityRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['neighborhood_locality'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$mnAdminPostRows = $mnAdminPostResult->fetchAll(PDO::FETCH_ASSOC);
if ($mnAdminPostRows) {
    foreach ($mnAdminPostRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$mnDistrictRows = $mnDistrictResult->fetchAll(PDO::FETCH_ASSOC);
if ($mnDistrictRows) {
    foreach ($mnDistrictRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

//sofala
$sfCellRows = $sfCellResult->fetchAll(PDO::FETCH_ASSOC);
if ($sfCellRows) {
    foreach ($sfCellRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['neighborhood_locality'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['cell'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$sfCircleRows = $sfCircleResult->fetchAll(PDO::FETCH_ASSOC);
if ($sfCircleRows) {
    foreach ($sfCircleRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['neighborhood_locality'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['circle'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$sfVillageRows = $sfVillageResult->fetchAll(PDO::FETCH_ASSOC);
if ($sfVillageRows) {
    foreach ($sfVillageRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['neighborhood_locality'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['village'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$sfZoneRows = $sfZoneResult->fetchAll(PDO::FETCH_ASSOC);
if ($sfZoneRows) {
    foreach ($sfZoneRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['neighborhood_locality'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['zone'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$sfTownshipRows = $sfTownshipResult->fetchAll(PDO::FETCH_ASSOC);
if ($sfTownshipRows) {
    foreach ($sfTownshipRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['neighborhood_locality'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['township'] . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$sfLocalityRows = $sfLocalityResult->fetchAll(PDO::FETCH_ASSOC);
if ($sfLocalityRows) {
    foreach ($sfLocalityRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['neighborhood_locality'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$sfAdminPostRows = $sfAdminPostResult->fetchAll(PDO::FETCH_ASSOC);
if ($sfAdminPostRows) {
    foreach ($sfAdminPostRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$sfDistrictRows = $sfDistrictResult->fetchAll(PDO::FETCH_ASSOC);
if ($sfDistrictRows) {
    foreach ($sfDistrictRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

//tete
$ttCellRows = $ttCellResult->fetchAll(PDO::FETCH_ASSOC);
if ($ttCellRows) {
    foreach ($ttCellRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['neighborhood_locality'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['cell'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$ttCircleRows = $ttCircleResult->fetchAll(PDO::FETCH_ASSOC);
if ($ttCircleRows) {
    foreach ($ttCircleRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['neighborhood_locality'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['circle'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$ttVillageRows = $ttVillageResult->fetchAll(PDO::FETCH_ASSOC);
if ($ttVillageRows) {
    foreach ($ttVillageRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['neighborhood_locality'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['village'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$ttZoneRows = $ttZoneResult->fetchAll(PDO::FETCH_ASSOC);
if ($ttZoneRows) {
    foreach ($ttZoneRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['neighborhood_locality'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['zone'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$ttTownshipRows = $ttTownshipResult->fetchAll(PDO::FETCH_ASSOC);
if ($ttTownshipRows) {
    foreach ($ttTownshipRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['neighborhood_locality'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['township'] . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$ttLocalityRows = $ttLocalityResult->fetchAll(PDO::FETCH_ASSOC);
if ($ttLocalityRows) {
    foreach ($ttLocalityRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['neighborhood_locality'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$ttAdminPostRows = $ttAdminPostResult->fetchAll(PDO::FETCH_ASSOC);
if ($ttAdminPostRows) {
    foreach ($ttAdminPostRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$ttDistrictRows = $ttDistrictResult->fetchAll(PDO::FETCH_ASSOC);
if ($ttDistrictRows) {
    foreach ($ttDistrictRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

//nampula
$npCellRows = $npCellResult->fetchAll(PDO::FETCH_ASSOC);
if ($npCellRows) {
    foreach ($npCellRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['neighborhood_locality'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['cell'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$npCircleRows = $npCircleResult->fetchAll(PDO::FETCH_ASSOC);
if ($npCircleRows) {
    foreach ($npCircleRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['neighborhood_locality'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['circle'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$npVillageRows = $npVillageResult->fetchAll(PDO::FETCH_ASSOC);
if ($npVillageRows) {
    foreach ($npVillageRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['neighborhood_locality'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['village'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$npZoneRows = $npZoneResult->fetchAll(PDO::FETCH_ASSOC);
if ($npZoneRows) {
    foreach ($npZoneRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['neighborhood_locality'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['zone'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$npTownshipRows = $npTownshipResult->fetchAll(PDO::FETCH_ASSOC);
if ($npTownshipRows) {
    foreach ($npTownshipRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['neighborhood_locality'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['township'] . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$npLocalityRows = $npLocalityResult->fetchAll(PDO::FETCH_ASSOC);
if ($npLocalityRows) {
    foreach ($npLocalityRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['neighborhood_locality'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$npAdminPostRows = $npAdminPostResult->fetchAll(PDO::FETCH_ASSOC);
if ($npAdminPostRows) {
    foreach ($npAdminPostRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$npDistrictRows = $npDistrictResult->fetchAll(PDO::FETCH_ASSOC);
if ($npDistrictRows) {
    foreach ($npDistrictRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

//zambezia
$zbCellRows = $zbCellResult->fetchAll(PDO::FETCH_ASSOC);
if ($zbCellRows) {
    foreach ($zbCellRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['neighborhood_locality'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['cell'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$zbCircleRows = $zbCircleResult->fetchAll(PDO::FETCH_ASSOC);
if ($zbCircleRows) {
    foreach ($zbCircleRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['neighborhood_locality'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['circle'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$zbVillageRows = $zbVillageResult->fetchAll(PDO::FETCH_ASSOC);
if ($zbVillageRows) {
    foreach ($zbVillageRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['neighborhood_locality'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['village'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$zbZoneRows = $zbZoneResult->fetchAll(PDO::FETCH_ASSOC);
if ($zbZoneRows) {
    foreach ($zbZoneRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['neighborhood_locality'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['zone'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$zbTownshipRows = $zbTownshipResult->fetchAll(PDO::FETCH_ASSOC);
if ($zbTownshipRows) {
    foreach ($zbTownshipRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['neighborhood_locality'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['township'] . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$zbLocalityRows = $zbLocalityResult->fetchAll(PDO::FETCH_ASSOC);
if ($zbLocalityRows) {
    foreach ($zbLocalityRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['neighborhood_locality'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$zbAdminPostRows = $zbAdminPostResult->fetchAll(PDO::FETCH_ASSOC);
if ($zbAdminPostRows) {
    foreach ($zbAdminPostRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$zbDistrictRows = $zbDistrictResult->fetchAll(PDO::FETCH_ASSOC);
if ($zbDistrictRows) {
    foreach ($zbDistrictRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

//niassa
$nsCellRows = $nsCellResult->fetchAll(PDO::FETCH_ASSOC);
if ($nsCellRows) {
    foreach ($nsCellRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['neighborhood_locality'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['cell'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$nsCircleRows = $nsCircleResult->fetchAll(PDO::FETCH_ASSOC);
if ($nsCircleRows) {
    foreach ($nsCircleRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['neighborhood_locality'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['circle'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$nsVillageRows = $nsVillageResult->fetchAll(PDO::FETCH_ASSOC);
if ($nsVillageRows) {
    foreach ($nsVillageRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['neighborhood_locality'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['village'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$nsZoneRows = $nsZoneResult->fetchAll(PDO::FETCH_ASSOC);
if ($nsZoneRows) {
    foreach ($nsZoneRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['neighborhood_locality'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['zone'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$nsTownshipRows = $nsTownshipResult->fetchAll(PDO::FETCH_ASSOC);
if ($nsTownshipRows) {
    foreach ($nsTownshipRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['neighborhood_locality'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['township'] . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$nsLocalityRows = $nsLocalityResult->fetchAll(PDO::FETCH_ASSOC);
if ($nsLocalityRows) {
    foreach ($nsLocalityRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['neighborhood_locality'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$nsAdminPostRows = $nsAdminPostResult->fetchAll(PDO::FETCH_ASSOC);
if ($nsAdminPostRows) {
    foreach ($nsAdminPostRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$nsDistrictRows = $nsDistrictResult->fetchAll(PDO::FETCH_ASSOC);
if ($nsDistrictRows) {
    foreach ($nsDistrictRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

//cabo delgado
$cdCellRows = $cdCellResult->fetchAll(PDO::FETCH_ASSOC);
if ($cdCellRows) {
    foreach ($cdCellRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['neighborhood_locality'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['cell'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$cdCircleRows = $cdCircleResult->fetchAll(PDO::FETCH_ASSOC);
if ($cdCircleRows) {
    foreach ($cdCircleRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['neighborhood_locality'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['circle'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$cdVillageRows = $cdVillageResult->fetchAll(PDO::FETCH_ASSOC);
if ($cdVillageRows) {
    foreach ($cdVillageRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['neighborhood_locality'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['village'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$cdZoneRows = $cdZoneResult->fetchAll(PDO::FETCH_ASSOC);
if ($cdZoneRows) {
    foreach ($cdZoneRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['neighborhood_locality'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['zone'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$cdTownshipRows = $cdTownshipResult->fetchAll(PDO::FETCH_ASSOC);
if ($cdTownshipRows) {
    foreach ($cdTownshipRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['neighborhood_locality'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['township'] . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$cdLocalityRows = $cdLocalityResult->fetchAll(PDO::FETCH_ASSOC);
if ($cdLocalityRows) {
    foreach ($cdLocalityRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['neighborhood_locality'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$cdAdminPostRows = $cdAdminPostResult->fetchAll(PDO::FETCH_ASSOC);
if ($cdAdminPostRows) {
    foreach ($cdAdminPostRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['admin_post'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

$cdDistrictRows = $cdDistrictResult->fetchAll(PDO::FETCH_ASSOC);
if ($cdDistrictRows) {
    foreach ($cdDistrictRows as $row) {
        echo "<tr class='font-normal'>";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $line . "</td>\n";
$line = $line + 1;
echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . $row['province'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 py-2 px-3'>" . $row['district']  . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo  "<td class='border-collapse border-2 border-orange-700 text-lg py-2 px-3'>" . " " . "</td>\n";
        echo   "</tr>";
    }
} else {
    echo  "Nenhum resultado.";
}

?>