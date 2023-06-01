<?php
require "../config/connect.php";
session_start();

//Enderecos cadastrados
$addressesQuery = "SELECT * from $database_name.main_address_info";
$addressesCount = $dbcon->query($addressesQuery)->rowCount();
$_SESSION['addressesCount'] = $addressesCount;

//QUANTIDADES DE DISTRITOS POR PROVINCIA
$mcQuery = "SELECT * from $database_name.mc_district";
$mcDistricts = $dbcon->query($mcQuery)->rowCount();
$_SESSION['mcDistricts'] = $mcDistricts;

$mpQuery = "SELECT * from $database_name.mp_district";
$mpDistricts = $dbcon->query($mpQuery)->rowCount();
$_SESSION['mpDistricts'] = $mpDistricts;

$gzQuery = "SELECT * from $database_name.gz_district";
$gzDistricts = $dbcon->query($gzQuery)->rowCount();
$_SESSION['gzDistricts'] = $gzDistricts;

$inQuery = "SELECT * from $database_name.in_district";
$inDistricts = $dbcon->query($inQuery)->rowCount();
$_SESSION['inDistricts'] = $inDistricts;

$mnQuery = "SELECT * from $database_name.mn_district";
$mnDistricts = $dbcon->query($mnQuery)->rowCount();
$_SESSION['mnDistricts'] = $mnDistricts;

$sfQuery = "SELECT * from $database_name.sf_district";
$sfDistricts = $dbcon->query($sfQuery)->rowCount();
$_SESSION['sfDistricts'] = $sfDistricts;

$ttQuery = "SELECT * from $database_name.tt_district";
$ttDistricts = $dbcon->query($ttQuery)->rowCount();
$_SESSION['ttDistricts'] = $ttDistricts;

$npQuery = "SELECT * from $database_name.np_district";
$npDistricts = $dbcon->query($npQuery)->rowCount();
$_SESSION['npDistricts'] = $npDistricts;

$zbQuery = "SELECT * from $database_name.zb_district";
$zbDistricts = $dbcon->query($zbQuery)->rowCount();
$_SESSION['zbDistricts'] = $zbDistricts;

$nsQuery = "SELECT * from $database_name.ns_district";
$nsDistricts = $dbcon->query($nsQuery)->rowCount();
$_SESSION['nsDistricts'] = $nsDistricts;

$cdQuery = "SELECT * from $database_name.cd_district";
$cdDistricts = $dbcon->query($cdQuery)->rowCount();
$_SESSION['cdDistricts'] = $cdDistricts;


//QUANTIDADES DE P.ADMIN POR PROVINCIA
$mcQuery = "SELECT * from $database_name.mc_admin_post";
$mcAdminPosts = $dbcon->query($mcQuery)->rowCount();
$_SESSION['mcAdminPosts'] = $mcAdminPosts;

$mpQuery = "SELECT * from $database_name.mp_admin_post";
$mpAdminPosts = $dbcon->query($mpQuery)->rowCount();
$_SESSION['mpAdminPosts'] = $mpAdminPosts;

$gzQuery = "SELECT * from $database_name.gz_admin_post";
$gzAdminPosts = $dbcon->query($gzQuery)->rowCount();
$_SESSION['gzAdminPosts'] = $gzAdminPosts;

$inQuery = "SELECT * from $database_name.in_admin_post";
$inAdminPosts = $dbcon->query($inQuery)->rowCount();
$_SESSION['inAdminPosts'] = $inAdminPosts;

$mnQuery = "SELECT * from $database_name.mn_admin_post";
$mnAdminPosts = $dbcon->query($mnQuery)->rowCount();
$_SESSION['mnAdminPosts'] = $mnAdminPosts;

$sfQuery = "SELECT * from $database_name.sf_admin_post";
$sfAdminPosts = $dbcon->query($sfQuery)->rowCount();
$_SESSION['sfAdminPosts'] = $sfAdminPosts;

$ttQuery = "SELECT * from $database_name.tt_admin_post";
$ttAdminPosts = $dbcon->query($ttQuery)->rowCount();
$_SESSION['ttAdminPosts'] = $ttAdminPosts;

$npQuery = "SELECT * from $database_name.np_admin_post";
$npAdminPosts = $dbcon->query($npQuery)->rowCount();
$_SESSION['npAdminPosts'] = $npAdminPosts;

$zbQuery = "SELECT * from $database_name.zb_admin_post";
$zbAdminPosts = $dbcon->query($zbQuery)->rowCount();
$_SESSION['zbAdminPosts'] = $zbAdminPosts;

$nsQuery = "SELECT * from $database_name.ns_admin_post";
$nsAdminPosts = $dbcon->query($nsQuery)->rowCount();
$_SESSION['nsAdminPosts'] = $nsAdminPosts;

$cdQuery = "SELECT * from $database_name.cd_admin_post";
$cdAdminPosts = $dbcon->query($cdQuery)->rowCount();
$_SESSION['cdAdminPosts'] = $cdAdminPosts;


//QUANTIDADES DE BAIRROS OU LOCALIDADES POR PROVINCIA
$mcQuery = "SELECT * from $database_name.mc_neighborhood_locality";
$mcNeighborhoodOrLocality = $dbcon->query($mcQuery)->rowCount();
$_SESSION['mcNeighborhoodOrLocality'] = $mcNeighborhoodOrLocality;

$mpQuery = "SELECT * from $database_name.mp_neighborhood_locality";
$mpNeighborhoodOrLocality = $dbcon->query($mpQuery)->rowCount();
$_SESSION['mpNeighborhoodOrLocality'] = $mpNeighborhoodOrLocality;

$gzQuery = "SELECT * from $database_name.gz_neighborhood_locality";
$gzNeighborhoodOrLocality = $dbcon->query($gzQuery)->rowCount();
$_SESSION['gzNeighborhoodOrLocality'] = $gzNeighborhoodOrLocality;

$inQuery = "SELECT * from $database_name.in_neighborhood_locality";
$inNeighborhoodOrLocality = $dbcon->query($inQuery)->rowCount();
$_SESSION['inNeighborhoodOrLocality'] = $inNeighborhoodOrLocality;

$mnQuery = "SELECT * from $database_name.mn_neighborhood_locality";
$mnNeighborhoodOrLocality = $dbcon->query($mnQuery)->rowCount();
$_SESSION['mnNeighborhoodOrLocality'] = $mnNeighborhoodOrLocality;

$sfQuery = "SELECT * from $database_name.sf_neighborhood_locality";
$sfNeighborhoodOrLocality = $dbcon->query($sfQuery)->rowCount();
$_SESSION['sfNeighborhoodOrLocality'] = $sfNeighborhoodOrLocality;

$ttQuery = "SELECT * from $database_name.tt_neighborhood_locality";
$ttNeighborhoodOrLocality = $dbcon->query($ttQuery)->rowCount();
$_SESSION['ttNeighborhoodOrLocality'] = $ttNeighborhoodOrLocality;

$npQuery = "SELECT * from $database_name.np_neighborhood_locality";
$npNeighborhoodOrLocality = $dbcon->query($npQuery)->rowCount();
$_SESSION['npNeighborhoodOrLocality'] = $npNeighborhoodOrLocality;

$zbQuery = "SELECT * from $database_name.zb_neighborhood_locality";
$zbNeighborhoodOrLocality = $dbcon->query($zbQuery)->rowCount();
$_SESSION['zbNeighborhoodOrLocality'] = $zbNeighborhoodOrLocality;

$nsQuery = "SELECT * from $database_name.ns_neighborhood_locality";
$nsNeighborhoodOrLocality = $dbcon->query($nsQuery)->rowCount();
$_SESSION['nsNeighborhoodOrLocality'] = $nsNeighborhoodOrLocality;

$cdQuery = "SELECT * from $database_name.cd_neighborhood_locality";
$cdNeighborhoodOrLocality = $dbcon->query($cdQuery)->rowCount();
$_SESSION['cdNeighborhoodOrLocality'] = $cdNeighborhoodOrLocality;


//QUANTIDADES DE CELULAS POR PROVINCIA
$mcQuery = "SELECT * from $database_name.mc_cell";
$mcCells = $dbcon->query($mcQuery)->rowCount();
$_SESSION['mcCells'] = $mcCells;

$mpQuery = "SELECT * from $database_name.mp_cell";
$mpCells = $dbcon->query($mpQuery)->rowCount();
$_SESSION['mpCells'] = $mpCells;

$gzQuery = "SELECT * from $database_name.gz_cell";
$gzCells = $dbcon->query($gzQuery)->rowCount();
$_SESSION['gzCells'] = $gzCells;

$inQuery = "SELECT * from $database_name.in_cell";
$inCells = $dbcon->query($inQuery)->rowCount();
$_SESSION['inCells'] = $inCells;

$mnQuery = "SELECT * from $database_name.mn_cell";
$mnCells = $dbcon->query($mnQuery)->rowCount();
$_SESSION['mnCells'] = $mnCells;

$sfQuery = "SELECT * from $database_name.sf_cell";
$sfCells = $dbcon->query($sfQuery)->rowCount();
$_SESSION['sfCells'] = $sfCells;

$ttQuery = "SELECT * from $database_name.tt_cell";
$ttCells = $dbcon->query($ttQuery)->rowCount();
$_SESSION['ttCells'] = $ttCells;

$npQuery = "SELECT * from $database_name.np_cell";
$npCells = $dbcon->query($npQuery)->rowCount();
$_SESSION['npCells'] = $npCells;

$zbQuery = "SELECT * from $database_name.zb_cell";
$zbCells = $dbcon->query($zbQuery)->rowCount();

$nsQuery = "SELECT * from $database_name.ns_cell";
$nsCells = $dbcon->query($nsQuery)->rowCount();
$_SESSION['nsCells'] = $nsCells;

$cdQuery = "SELECT * from $database_name.cd_cell";
$cdCells = $dbcon->query($cdQuery)->rowCount();
$_SESSION['cdCells'] = $cdCells;


//QUANTIDADES DE CIRCULOS POR PROVINCIA
$mcQuery = "SELECT * from $database_name.mc_circle";
$mcCircles = $dbcon->query($mcQuery)->rowCount();
$_SESSION['mcCircles'] = $mcCircles;

$mpQuery = "SELECT * from $database_name.mp_circle";
$mpCircles = $dbcon->query($mpQuery)->rowCount();
$_SESSION['mpCircles'] = $mpCircles;

$gzQuery = "SELECT * from $database_name.gz_circle";
$gzCircles = $dbcon->query($gzQuery)->rowCount();
$_SESSION['gzCircles'] = $gzCircles;

$inQuery = "SELECT * from $database_name.in_circle";
$inCircles = $dbcon->query($inQuery)->rowCount();
$_SESSION['gzCircles'] = $gzCircles;

$mnQuery = "SELECT * from $database_name.mn_circle";
$mnCircles = $dbcon->query($mnQuery)->rowCount();
$_SESSION['mnCircles'] = $mnCircles;

$sfQuery = "SELECT * from $database_name.sf_circle";
$sfCircles = $dbcon->query($sfQuery)->rowCount();
$_SESSION['sfCircles'] = $sfCircles;

$ttQuery = "SELECT * from $database_name.tt_circle";
$ttCircles = $dbcon->query($ttQuery)->rowCount();
$_SESSION['ttCircles'] = $ttCircles;

$npQuery = "SELECT * from $database_name.np_circle";
$npCircles = $dbcon->query($npQuery)->rowCount();
$_SESSION['npCircles'] = $npCircles;

$zbQuery = "SELECT * from $database_name.zb_circle";
$zbCircles = $dbcon->query($zbQuery)->rowCount();
$_SESSION['zbCircles'] = $zbCircles;

$nsQuery = "SELECT * from $database_name.ns_circle";
$nsCircles = $dbcon->query($nsQuery)->rowCount();
$_SESSION['nsCircles'] = $nsCircles;

$cdQuery = "SELECT * from $database_name.cd_circle";
$cdCircles = $dbcon->query($cdQuery)->rowCount();
$_SESSION['cdCircles'] = $cdCircles;


//QUANTIDADES DE VILAS POR PROVINCIA
$mcQuery = "SELECT * from $database_name.mc_village";
$mcVillages = $dbcon->query($mcQuery)->rowCount();
$_SESSION['mcVillages'] = $mcVillages;

$mpQuery = "SELECT * from $database_name.mp_village";
$mpVillages = $dbcon->query($mpQuery)->rowCount();
$_SESSION['mpVillages'] = $mpVillages;

$gzQuery = "SELECT * from $database_name.gz_village";
$gzVillages = $dbcon->query($gzQuery)->rowCount();
$_SESSION['gzVillages'] = $gzVillages;

$inQuery = "SELECT * from $database_name.in_village";
$inVillages = $dbcon->query($inQuery)->rowCount();
$_SESSION['inVillages'] = $inVillages;

$mnQuery = "SELECT * from $database_name.mn_village";
$mnVillages = $dbcon->query($mnQuery)->rowCount();
$_SESSION['mnVillages'] = $mnVillages;

$sfQuery = "SELECT * from $database_name.sf_village";
$sfVillages = $dbcon->query($sfQuery)->rowCount();
$_SESSION['sfVillages'] = $sfVillages;

$ttQuery = "SELECT * from $database_name.tt_village";
$ttVillages = $dbcon->query($ttQuery)->rowCount();
$_SESSION['ttVillages'] = $ttVillages;

$npQuery = "SELECT * from $database_name.np_village";
$npVillages = $dbcon->query($npQuery)->rowCount();
$_SESSION['npVillages'] = $npVillages;

$zbQuery = "SELECT * from $database_name.zb_village";
$zbVillages = $dbcon->query($zbQuery)->rowCount();
$_SESSION['zbVillages'] = $zbVillages;

$nsQuery = "SELECT * from $database_name.ns_village";
$nsVillages = $dbcon->query($nsQuery)->rowCount();
$_SESSION['nsVillages'] = $nsVillages;

$cdQuery = "SELECT * from $database_name.cd_village";
$cdVillages = $dbcon->query($cdQuery)->rowCount();
$_SESSION['cdVillages'] = $cdVillages;


//QUANTIDADES DE ZONAS POR PROVINCIA
$mcQuery = "SELECT * from $database_name.mc_zone";
$mcZones = $dbcon->query($mcQuery)->rowCount();
$_SESSION['mcZones'] = $mcZones;

$mpQuery = "SELECT * from $database_name.mp_zone";
$mpZones = $dbcon->query($mpQuery)->rowCount();
$_SESSION['mpZones'] = $mpZones;

$gzQuery = "SELECT * from $database_name.gz_zone";
$gzZones = $dbcon->query($gzQuery)->rowCount();
$_SESSION['gzZones'] = $gzZones;

$inQuery = "SELECT * from $database_name.in_zone";
$inZones = $dbcon->query($inQuery)->rowCount();
$_SESSION['inZones'] = $inZones;

$mnQuery = "SELECT * from $database_name.mn_zone";
$mnZones = $dbcon->query($mnQuery)->rowCount();
$_SESSION['mnZones'] = $mnZones;

$sfQuery = "SELECT * from $database_name.sf_zone";
$sfZones = $dbcon->query($sfQuery)->rowCount();
$_SESSION['sfZones'] = $sfZones;

$ttQuery = "SELECT * from $database_name.tt_zone";
$ttZones = $dbcon->query($ttQuery)->rowCount();
$_SESSION['ttZones'] = $ttZones;

$npQuery = "SELECT * from $database_name.np_zone";
$npZones = $dbcon->query($npQuery)->rowCount();
$_SESSION['npZones'] = $npZones;

$zbQuery = "SELECT * from $database_name.zb_zone";
$zbZones = $dbcon->query($zbQuery)->rowCount();
$_SESSION['zbZones'] = $zbZones;

$nsQuery = "SELECT * from $database_name.ns_zone";
$nsZones = $dbcon->query($nsQuery)->rowCount();
$_SESSION['nsZones'] = $nsZones;

$cdQuery = "SELECT * from $database_name.cd_zone";
$cdZones = $dbcon->query($cdQuery)->rowCount();
$_SESSION['cdZones'] = $cdZones;


//QUANTIDADES POVOAÇÕES POR PROVINCIA
$mcQuery = "SELECT * from $database_name.mc_township";
$mcTownships = $dbcon->query($mcQuery)->rowCount();
$_SESSION['mcTownships'] = $mcTownships;

$mpQuery = "SELECT * from $database_name.mp_township";
$mpTownships = $dbcon->query($mpQuery)->rowCount();
$_SESSION['mpTownships'] = $mpTownships;

$gzQuery = "SELECT * from $database_name.gz_township";
$gzTownships = $dbcon->query($gzQuery)->rowCount();
$_SESSION['gzTownships'] = $gzTownships;

$inQuery = "SELECT * from $database_name.in_township";
$inTownships = $dbcon->query($inQuery)->rowCount();
$_SESSION['inTownships'] = $inTownships;

$mnQuery = "SELECT * from $database_name.mn_township";
$mnTownships = $dbcon->query($mnQuery)->rowCount();
$_SESSION['mnTownships'] = $mnTownships;

$sfQuery = "SELECT * from $database_name.sf_township";
$sfTownships = $dbcon->query($sfQuery)->rowCount();
$_SESSION['sfTownships'] = $sfTownships;

$ttQuery = "SELECT * from $database_name.tt_township";
$ttTownships = $dbcon->query($ttQuery)->rowCount();
$_SESSION['ttTownships'] = $ttTownships;

$npQuery = "SELECT * from $database_name.np_township";
$npTownships = $dbcon->query($npQuery)->rowCount();
$_SESSION['npTownships'] = $npTownships;

$zbQuery = "SELECT * from $database_name.zb_township";
$zbTownships = $dbcon->query($zbQuery)->rowCount();
$_SESSION['zbTownships'] = $zbTownships;

$nsQuery = "SELECT * from $database_name.ns_township";
$nsTownships = $dbcon->query($nsQuery)->rowCount();
$_SESSION['nsTownships'] = $nsTownships;

$cdQuery = "SELECT * from $database_name.cd_township";
$cdTownships = $dbcon->query($cdQuery)->rowCount();
$_SESSION['cdTownships'] = $cdTownships;



//TOTAL DE DISTRITOS NA ZONA SUL
$southDistricts = $mcDistricts + $mpDistricts + $gzDistricts + $inDistricts;
$_SESSION['southDistricts'] = $southDistricts;

//TOTAL DE DISTRITOS NA ZONA CENTRO
$centerDistricts = $mnDistricts + $sfDistricts + $ttDistricts;
$_SESSION['centerDistricts'] = $centerDistricts;

//TOTAL DE DISTRITOS NA ZONA NORTE
$northDistricts = $npDistricts + $nsDistricts + $zbDistricts + $cdDistricts;
$_SESSION['northDistricts'] = $northDistricts;


//TOTAL DE P. ANDMIN NA ZONA SUL
$southAdminPosts = $mcAdminPosts + $mpAdminPosts + $gzAdminPosts + $inAdminPosts;
$_SESSION['southAdminPosts'] = $southAdminPosts;

//TOTAL DE P. ANDMIN NA ZONA CENTRO
$centerAdminPosts = $mnAdminPosts + $sfAdminPosts + $ttAdminPosts;
$_SESSION['centerAdminPosts'] = $centerAdminPosts;

//TOTAL DE P. ANDMIN NA ZONA NORTE
$northAdminPosts = $npAdminPosts + $nsAdminPosts + $zbAdminPosts + $cdAdminPosts;
$_SESSION['northAdminPosts'] = $northAdminPosts;


//TOTAL DE LOCALIDADES OU BAIRROS NA ZONA SUL
$southNeighborhoodOrLocality = $mcNeighborhoodOrLocality + $mpNeighborhoodOrLocality + $gzNeighborhoodOrLocality + $inNeighborhoodOrLocality;
$_SESSION['southNeighborhoodOrLocality'] = $southNeighborhoodOrLocality;

//TOTAL DE LOCALIDADES OU BAIRROS NA ZONA CENTRO
$centerNeighborhoodOrLocality = $mnNeighborhoodOrLocality + $sfNeighborhoodOrLocality + $ttNeighborhoodOrLocality;
$_SESSION['centerNeighborhoodOrLocality'] = $centerNeighborhoodOrLocality;

//TOTAL DE LOCALIDADES OU BAIRROS NA ZONA NORTE
$northNeighborhoodOrLocality = $npNeighborhoodOrLocality + $nsNeighborhoodOrLocality + $zbNeighborhoodOrLocality + $cdNeighborhoodOrLocality;
$_SESSION['northNeighborhoodOrLocality'] = $northNeighborhoodOrLocality;


//TOTAL DE CELULAS NA ZONA SUL
$southCells = $mcCells + $mpCells + $gzCells + $inCells;
$_SESSION['southCells'] = $southCells;

//TOTAL DE CELULAS NA ZONA CENTRO
$centerCells = $mnCells + $sfCells + $ttCells;
$_SESSION['centerCells'] = $centerCells;

//TOTAL DE CELULAS NA ZONA NORTE
$northCells = $npCells + $nsCells + $zbCells + $cdCells;
$_SESSION['northCells'] = $northCells;


//TOTAL DE CIRCLES NA ZONA SUL
$southCircles = $mcCircles + $mpCircles + $gzCircles + $inCircles;
$_SESSION['southCircles'] = $southCircles;

//TOTAL DE CIRCLES NA ZONA CENTRO
$centerCircles = $mnCircles + $sfCircles + $ttCircles;
$_SESSION['centerCircles'] = $centerCircles;

//TOTAL DE CIRCLES NA ZONA NORTE
$northCircles = $npCircles + $nsCircles + $zbCircles + $cdCircles;
$_SESSION['northCircles'] = $northCircles;


//TOTAL DE VILAS NA ZONA SUL
$southVillages = $mcVillages + $mpVillages + $gzVillages + $inVillages;
$_SESSION['southVillages'] = $southVillages;

//TOTAL DE VILAS NA ZONA CENTRO
$centerVillages = $mnVillages + $sfVillages + $ttVillages;
$_SESSION['centerVillages'] = $centerVillages;

//TOTAL DE VILAS NA ZONA NORTE
$northVillages = $npVillages + $nsVillages + $zbVillages + $cdVillages;
$_SESSION['northVillages'] = $northVillages;


//TOTAL DE ZONAS NA ZONA SUL
$southZones = $mcZones + $mpZones + $gzZones + $inZones;
$_SESSION['southZones'] = $southZones;

//TOTAL DE ZONAS NA ZONA CENTRO
$centerZones = $mnZones + $sfZones + $ttZones;
$_SESSION['centerZones'] = $centerZones;

//TOTAL DE ZONAS NA ZONA NORTE
$northZones = $npZones + $nsZones + $zbZones + $cdZones;
$_SESSION['northZones'] = $northZones;


//TOTAL DE POVOACOES NA ZONA SUL
$southTownships = $mcTownships + $mpTownships + $gzTownships + $inTownships;
$_SESSION['southTownships'] = $southTownships;

//TOTAL DE POVOACOES NA ZONA CENTRO
$centerTownships = $mnTownships + $sfTownships + $ttTownships;
$_SESSION['centerTownships'] = $centerTownships;

//TOTAL DE POVOACOES NA ZONA NORTE
$northTownships = $npTownships + $nsTownships + $zbTownships + $cdTownships;
$_SESSION['northTownships'] = $northTownships;


//TOTAL DE DISTRITOS NO PAIS
$mzDistricts = $southDistricts + $centerDistricts + $northDistricts;
$_SESSION["mzDistricts"] = $mzDistricts;

//TOTAL DE P. ADMIN NO PAIS
$mzAdminPosts = $southAdminPosts + $centerAdminPosts + $northAdminPosts;
$_SESSION["mzAdminPosts"] = $mzAdminPosts;

//TOTAL DE LOCALIDADES OU BAIRROS NO PAIS
$mzNeighborhoodOrLocality = $southNeighborhoodOrLocality + $centerNeighborhoodOrLocality + $northNeighborhoodOrLocality;
$_SESSION["mzNeighborhoodOrLocality"] = $mzNeighborhoodOrLocality;

//TOTAL DE CELULAS NO PAIS
$mzCells = $southCells + $centerCells + $northCells;
$_SESSION["mzCells"] = $mzCells;

//TOTAL DE CIRCULOS NO PAIS
$mzCircles = $southCircles + $centerCircles + $northCircles;
$_SESSION["mzCircles"] = $mzCircles;

//TOTAL DE VILAS NO PAIS
$mzVillages = $southVillages + $centerVillages + $northVillages;
$_SESSION["mzVillages"] = $mzVillages;

//TOTAL DE ZONAS NO PAIS
$mzZones = $southZones + $centerZones + $northZones;
$_SESSION["mzZones"] = $mzZones;

//TOTAL DE POVOACOES NO PAIS
$mzTownships = $southTownships + $centerTownships + $northTownships;
$_SESSION["mzTownships"] = $mzTownships;


/* ======= PERCENTAGENS ======= */

//percentagens na zona sul
if($mzDistricts != 0) {
    $southDistrictsPercent = round(($southDistricts / $mzDistricts) * 100);
    $_SESSION["southDistrictsPercent"] = $southDistrictsPercent;
} else {
    $_SESSION["southDistrictsPercent"] = 0;
}

if ($mzAdminPosts != 0) {
    $southAdminPostsPercent = round(($southAdminPosts / $mzAdminPosts) * 100);
    $_SESSION["southAdminPostsPercent"] = $southAdminPostsPercent;
} else {
    $_SESSION["southAdminPostsPercent"] = 0;
}

if ($mzNeighborhoodOrLocality != 0) {
    $southNeighborhoodOrLocalityPercent = round(($southNeighborhoodOrLocality / $mzNeighborhoodOrLocality) * 100);
    $_SESSION["southNeighborhoodOrLocalityPercent"] = $southNeighborhoodOrLocalityPercent;
} else {
   $_SESSION["southNeighborhoodOrLocalityPercent"] = 0;
}

if ($mzCells != 0) {
    $southCellsPercent = round(($southCells / $mzCells) * 100);
    $_SESSION["southCellsPercent"] = $southCellsPercent;
} else {
    $_SESSION["southCellsPercent"] = 0;
}

if ($mzCircles != 0) {
    $southCirclesPercent = round(($southCircles / $mzCircles) * 100);
    $_SESSION["southCirclesPercent"] = $southCirclesPercent;
} else {
    $_SESSION["southCirclesPercent"] = 0;
}

if ($mzVillages != 0) {
    $southVillagesPercent = round(($southVillages / $mzVillages) * 100);
    $_SESSION["southVillagesPercent"] = $southVillagesPercent;
} else {
    $_SESSION["southVillagesPercent"] = 0;
}

if ($mzZones != 0) {
    $southZonesPercent = round(($southZones / $mzZones) * 100);
    $_SESSION["southZonesPercent"] = $southZonesPercent;
} else {
    $_SESSION["southZonesPercent"] = 0;
}


if ($mzTownships != 0) {
    $southTownshipsPercent = round(($southTownships / $mzTownships) * 100);
    $_SESSION["southTownshipsPercent"] = $southTownshipsPercent;
} else {
    # code...
}

//percentagens na zona centro
if ($mzDistricts != 0) {
    $centerDistrictsPercent = round(($centerDistricts / $mzDistricts) * 100);
    $_SESSION["centerDistrictsPercent"] = $centerDistrictsPercent;
} else {
    $_SESSION["centerDistrictsPercent"] = 0;
}

if ($mzAdminPosts != 0) {
    $centerAdminPostsPercent = round(($centerAdminPosts / $mzAdminPosts) * 100);
    $_SESSION["centerAdminPostsPercent"] = $centerAdminPostsPercent;
} else {
    $_SESSION["centerAdminPostsPercent"] = 0;
}


if ($mzNeighborhoodOrLocality != 0) {
    $centerNeighborhoodOrLocalityPercent = round(($centerNeighborhoodOrLocality / $mzNeighborhoodOrLocality) * 100);
    $_SESSION["centerNeighborhoodOrLocalityPercent"] = $centerNeighborhoodOrLocalityPercent;
} else {
    $_SESSION["centerNeighborhoodOrLocalityPercent"] = 0;
}


//percentagens na zona norte
if ($mzDistricts != 0) {
    $northDistrictsPercent = round(($northDistricts / $mzDistricts) * 100);
    $_SESSION["northDistrictsPercent"] = $northDistrictsPercent;
} else {
    $_SESSION["northDistrictsPercent"] = 0;
}

if ($mzAdminPosts != 0) {
    $northAdminPostsPercent = round(($northAdminPosts / $mzAdminPosts) * 100);
    $_SESSION["northAdminPostsPercent"] = $northAdminPostsPercent;
} else {
    $_SESSION["northAdminPostsPercent"] = 0;
}

if ($mzNeighborhoodOrLocality != 0) {
    $northNeighborhoodOrLocalityPercent = round(($northNeighborhoodOrLocality / $mzNeighborhoodOrLocality) * 100);
    $_SESSION["northNeighborhoodOrLocalityPercent"] = $northNeighborhoodOrLocalityPercent;
} else {
    $_SESSION["northNeighborhoodOrLocalityPercent"] = 0;
}


header("location: ../../admin/statistic/");

?>