<?php

    /**
     * GET DISTRICTS DATA
     */

    //get Maputo Cidade districts
    $maputoDistrictQuery = "SELECT * FROM $database_name.mc_district";
    $maputoDistrictResult = $dbcon->query($maputoDistrictQuery);
    $maputoDistricts = $maputoDistrictResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Maputo Província districts
    $maputoProvinceDistrictQuery = "SELECT * FROM $database_name.mp_district";
    $maputoProvinceDistrictResult = $dbcon->query($maputoProvinceDistrictQuery);
    $maputoProvinceDistricts = $maputoProvinceDistrictResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Gaza districts
    $gazaDistrictQuery = "SELECT * FROM $database_name.gz_district";
    $gazaDistrictResult = $dbcon->query($gazaDistrictQuery);
    $gazaDistricts = $gazaDistrictResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Inhambane districts
    $inhambaneDistrictQuery = "SELECT * FROM $database_name.in_district";
    $inhambaneDistrictResult = $dbcon->query($inhambaneDistrictQuery);
    $inhambaneDistricts = $inhambaneDistrictResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Manica districts
    $manicaDistrictsQuery = "SELECT * FROM $database_name.mn_district";
    $manicaDistrictsResult = $dbcon->query($manicaDistrictsQuery);
    $manicaDistricts = $manicaDistrictsResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Sofala districts
    $sofalaDistrictsQuery = "SELECT * FROM $database_name.sf_district";
    $sofalaDistrictsResult = $dbcon->query($sofalaDistrictsQuery);
    $sofalaDistricts = $sofalaDistrictsResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Tete districts
    $teteDistrctsQuery = "SELECT * FROM $database_name.tt_district";
    $teteDistrctsResult = $dbcon->query($teteDistrctsQuery);
    $teteDistricts = $teteDistrctsResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Nampula districts
    $nampulaDistrictsQuery = "SELECT * FROM $database_name.np_district";
    $nampulaDistrictsResult = $dbcon->query($nampulaDistrictsQuery);
    $nampulaDistricts = $nampulaDistrictsResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Niassa districts
    $niassaDistrictsQuery = "SELECT * FROM $database_name.ns_district";
    $niassaDistrictsResult = $dbcon->query($niassaDistrictsQuery);
    $niassaDistricts = $niassaDistrictsResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Zambézia districts
    $zambeziaDistrictsQuery = "SELECT * FROM $database_name.zb_district";
    $zambeziaDistrictsResult = $dbcon->query($zambeziaDistrictsQuery);
    $zambeziaDistricts = $zambeziaDistrictsResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Cabo Delgado districts
    $delgadoDistrictsQuery = "SELECT * FROM $database_name.cd_district";
    $delgadoDistrictsResult = $dbcon->query($delgadoDistrictsQuery);
    $caboDelgadoDistricts = $delgadoDistrictsResult->fetchAll(PDO::FETCH_ASSOC);


    /**
     * GET ADMIN POSTS DATA
     */

    //get Maputo Cidade posts
    $maputoPostQuery = "SELECT * FROM $database_name.mc_admin_post";
    $maputoPostResult = $dbcon->query($maputoPostQuery);
    $maputoPosts = $maputoPostResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Maputo Província Posts
    $maputoProvincePostQuery = "SELECT * FROM $database_name.mp_admin_post";
    $maputoProvincePostResult = $dbcon->query($maputoProvincePostQuery);
    $maputoProvincePosts = $maputoProvincePostResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Gaza Posts
    $gazaPostQuery = "SELECT * FROM $database_name.gz_admin_post";
    $gazaPostResult = $dbcon->query($gazaPostQuery);
    $gazaPosts = $gazaPostResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Inhambane Posts
    $inhambanePostQuery = "SELECT * FROM $database_name.in_admin_post";
    $inhambanePostResult = $dbcon->query($inhambanePostQuery);
    $inhambanePosts = $inhambanePostResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Manica Posts
    $manicaPostsQuery = "SELECT * FROM $database_name.mn_admin_post";
    $manicaPostsResult = $dbcon->query($manicaPostsQuery);
    $manicaPosts = $manicaPostsResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Sofala Posts
    $sofalaPostsQuery = "SELECT * FROM $database_name.sf_admin_post";
    $sofalaPostsResult = $dbcon->query($sofalaPostsQuery);
    $sofalaPosts = $sofalaPostsResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Tete Posts
    $tetePostQuery = "SELECT * FROM $database_name.tt_admin_post";
    $tetePostResult = $dbcon->query($tetePostQuery);
    $tetePosts = $tetePostResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Nampula Posts
    $nampulaPostsQuery = "SELECT * FROM $database_name.np_admin_post";
    $nampulaPostsResult = $dbcon->query($nampulaPostsQuery);
    $nampulaPosts = $nampulaPostsResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Niassa Posts
    $niassaPostsQuery = "SELECT * FROM $database_name.ns_admin_post";
    $niassaPostsResult = $dbcon->query($niassaPostsQuery);
    $niassaPosts = $niassaPostsResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Zambézia Posts
    $zambeziaPostsQuery = "SELECT * FROM $database_name.zb_admin_post";
    $zambeziaPostsResult = $dbcon->query($zambeziaPostsQuery);
    $zambeziaPosts = $zambeziaPostsResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Cabo Delgado Posts
    $delgadoPostsQuery = "SELECT * FROM $database_name.cd_admin_post";
    $delgadoPostsResult = $dbcon->query($delgadoPostsQuery);
    $caboDelgadoPosts = $delgadoPostsResult->fetchAll(PDO::FETCH_ASSOC);
    
    /**
     * GET LOCALITY DATA
     */

    //get Maputo Cidade locality
    $maputoLocalityQuery = "SELECT * FROM $database_name.mc_locality";
    $maputoLocalityResult = $dbcon->query($maputoLocalityQuery);
    $maputoLocality = $maputoLocalityResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Maputo Província locality
    $maputoProvinceLocalityQuery = "SELECT * FROM $database_name.mp_locality";
    $maputoProvinceLocalityResult = $dbcon->query($maputoProvinceLocalityQuery);
    $maputoProvinceLocality = $maputoProvinceLocalityResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Gaza locality
    $gazaLocalityQuery = "SELECT * FROM $database_name.gz_locality";
    $gazaLocalityResult = $dbcon->query($gazaLocalityQuery);
    $gazaLocality = $gazaLocalityResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Inhambane locality
    $inhambaneLocalityQuery = "SELECT * FROM $database_name.in_locality";
    $inhambaneLocalityResult = $dbcon->query($inhambaneLocalityQuery);
    $inhambaneLocality = $inhambaneLocalityResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Manica locality
    $manicaLocalityQuery = "SELECT * FROM $database_name.mn_locality";
    $manicaLocalityResult = $dbcon->query($manicaLocalityQuery);
    $manicaLocality = $manicaLocalityResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Sofala locality
    $sofalaLocalityQuery = "SELECT * FROM $database_name.sf_locality";
    $sofalaLocalityResult = $dbcon->query($sofalaLocalityQuery);
    $sofalaLocality = $sofalaLocalityResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Tete locality
    $teteLocalityQuery = "SELECT * FROM $database_name.tt_locality";
    $teteLocalityResult = $dbcon->query($teteLocalityQuery);
    $teteLocality = $teteLocalityResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Nampula locality
    $nampulaLocalityQuery = "SELECT * FROM $database_name.np_locality";
    $nampulaLocalityResult = $dbcon->query($nampulaLocalityQuery);
    $nampulaLocality = $nampulaLocalityResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Niassa locality
    $niassaLocalityQuery = "SELECT * FROM $database_name.ns_locality";
    $niassaLocalityResult = $dbcon->query($niassaLocalityQuery);
    $niassaLocality = $niassaLocalityResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Zambézia locality
    $zambeziaLocalityQuery = "SELECT * FROM $database_name.zb_locality";
    $zambeziaLocalityResult = $dbcon->query($zambeziaLocalityQuery);
    $zambeziaLocality = $zambeziaLocalityResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Cabo Delgado locality
    $delgadoLocalityQuery = "SELECT * FROM $database_name.cd_locality";
    $delgadoLocalityResult = $dbcon->query($delgadoLocalityQuery);
    $caboDelgadoLocality = $delgadoLocalityResult->fetchAll(PDO::FETCH_ASSOC);

    /**
     * GET NEIGHBORHOOD DATA
     */

    //get Maputo Cidade neighborhood
    $maputoNeighborhoodQuery = "SELECT * FROM $database_name.mc_neighborhood";
    $maputoNeighborhoodResult = $dbcon->query($maputoNeighborhoodQuery);
    $maputoNeighborhoods = $maputoNeighborhoodResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Maputo Província Neighborhood
    $maputoProvinceNeighborhoodQuery = "SELECT * FROM $database_name.mp_neighborhood";
    $maputoProvinceNeighborhoodResult = $dbcon->query($maputoProvinceNeighborhoodQuery);
    $maputoProvinceNeighborhood = $maputoProvinceNeighborhoodResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Gaza Neighborhood
    $gazaNeighborhoodQuery = "SELECT * FROM $database_name.gz_neighborhood";
    $gazaNeighborhoodResult = $dbcon->query($gazaNeighborhoodQuery);
    $gazaNeighborhoods = $gazaNeighborhoodResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Inhambane Neighborhood
    $inhambaneNeighborhoodQuery = "SELECT * FROM $database_name.in_neighborhood";
    $inhambaneNeighborhoodResult = $dbcon->query($inhambaneNeighborhoodQuery);
    $inhambaneNeighborhoods = $inhambaneNeighborhoodResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Manica Neighborhood
    $manicaNeighborhoodQuery = "SELECT * FROM $database_name.mn_neighborhood";
    $manicaNeighborhoodResult = $dbcon->query($manicaNeighborhoodQuery);
    $manicaNeighborhoods = $manicaNeighborhoodResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Sofala Neighborhood
    $sofalaNeighborhoodQuery = "SELECT * FROM $database_name.sf_neighborhood";
    $sofalaNeighborhoodResult = $dbcon->query($sofalaNeighborhoodQuery);
    $sofalaNeighborhoods = $sofalaNeighborhoodResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Tete Neighborhood
    $teteNeighborhoodQuery = "SELECT * FROM $database_name.tt_neighborhood";
    $teteNeighborhoodResult = $dbcon->query($teteNeighborhoodQuery);
    $teteNeighborhoods = $teteNeighborhoodResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Nampula Neighborhood
    $nampulaNeighborhoodQuery = "SELECT * FROM $database_name.np_neighborhood";
    $nampulaNeighborhoodResult = $dbcon->query($nampulaNeighborhoodQuery);
    $nampulaNeighborhood = $nampulaNeighborhoodResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Niassa Neighborhood
    $niassaNeighborhoodQuery = "SELECT * FROM $database_name.ns_neighborhood";
    $niassaNeighborhoodResult = $dbcon->query($niassaNeighborhoodQuery);
    $niassaNeighborhoods = $niassaNeighborhoodResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Zambézia Neighborhood
    $zambeziaNeighborhoodQuery = "SELECT * FROM $database_name.zb_neighborhood";
    $zambeziaNeighborhoodResult = $dbcon->query($zambeziaNeighborhoodQuery);
    $zambeziaNeighborhoods = $zambeziaNeighborhoodResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Cabo Delgado Neighborhood
    $delgadoNeighborhoodQuery = "SELECT * FROM $database_name.cd_neighborhood";
    $delgadoNeighborhoodResult = $dbcon->query($delgadoNeighborhoodQuery);
    $caboDelgadoNeighborhoods = $delgadoNeighborhoodResult->fetchAll(PDO::FETCH_ASSOC);

    /**
     * GET CELL DATA
     */

    //get Maputo Cidade Cell
    $maputoCellQuery = "SELECT * FROM $database_name.mc_cell";
    $maputoCellResult = $dbcon->query($maputoCellQuery);
    $maputoCell = $maputoCellResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Maputo Província Cell
    $maputoProvinceCellQuery = "SELECT * FROM $database_name.mp_cell";
    $maputoProvinceCellResult = $dbcon->query($maputoProvinceCellQuery);
    $maputoProvinceCell = $maputoProvinceCellResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Gaza Cell
    $gazaCellQuery = "SELECT * FROM $database_name.gz_cell";
    $gazaCellResult = $dbcon->query($gazaCellQuery);
    $gazaCell = $gazaCellResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Inhambane Cell
    $inhambaneCellQuery = "SELECT * FROM $database_name.in_cell";
    $inhambaneCellResult = $dbcon->query($inhambaneCellQuery);
    $inhambaneCell = $inhambaneCellResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Manica Cell
    $manicaCellQuery = "SELECT * FROM $database_name.mn_cell";
    $manicaCellResult = $dbcon->query($manicaCellQuery);
    $manicaCell = $manicaCellResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Sofala Cell
    $sofalaCellQuery = "SELECT * FROM $database_name.sf_cell";
    $sofalaCellResult = $dbcon->query($sofalaCellQuery);
    $sofalaCell = $sofalaCellResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Tete Cell
    $teteCellQuery = "SELECT * FROM $database_name.tt_cell";
    $teteCellResult = $dbcon->query($teteCellQuery);
    $teteCell = $teteCellResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Nampula Cell
    $nampulaCellQuery = "SELECT * FROM $database_name.np_cell";
    $nampulaCellResult = $dbcon->query($nampulaCellQuery);
    $nampulaCell = $nampulaCellResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Niassa Cell
    $niassaCellQuery = "SELECT * FROM $database_name.ns_cell";
    $niassaCellResult = $dbcon->query($niassaCellQuery);
    $niassaCell = $niassaCellResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Zambézia Cell
    $zambeziaCellQuery = "SELECT * FROM $database_name.zb_cell";
    $zambeziaCellResult = $dbcon->query($zambeziaCellQuery);
    $zambeziaCell = $zambeziaCellResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Cabo Delgado Cell
    $delgadoCellQuery = "SELECT * FROM $database_name.cd_cell";
    $delgadoCellResult = $dbcon->query($delgadoCellQuery);
    $caboDelgadoCell = $delgadoCellResult->fetchAll(PDO::FETCH_ASSOC);

    /**
     * GET CIRCLE DATA
     */

    //get Maputo Cidade Circle
    $maputoCircleQuery = "SELECT * FROM $database_name.mc_circle";
    $maputoCircleResult = $dbcon->query($maputoCircleQuery);
    $maputoCircle = $maputoCircleResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Maputo Província Circle
    $maputoProvinceCircleQuery = "SELECT * FROM $database_name.mp_circle";
    $maputoProvinceCircleResult = $dbcon->query($maputoProvinceCircleQuery);
    $maputoProvinceCircle = $maputoProvinceCircleResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Gaza Circle
    $gazaCircleQuery = "SELECT * FROM $database_name.gz_circle";
    $gazaCircleResult = $dbcon->query($gazaCircleQuery);
    $gazaCircle = $gazaCircleResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Inhambane Circle
    $inhambaneCircleQuery = "SELECT * FROM $database_name.in_circle";
    $inhambaneCircleResult = $dbcon->query($inhambaneCircleQuery);
    $inhambaneCircle = $inhambaneCircleResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Manica Circle
    $manicaCircleQuery = "SELECT * FROM $database_name.mn_circle";
    $manicaCircleResult = $dbcon->query($manicaCircleQuery);
    $manicaCircle = $manicaCircleResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Sofala Circle
    $sofalaCircleQuery = "SELECT * FROM $database_name.sf_circle";
    $sofalaCircleResult = $dbcon->query($sofalaCircleQuery);
    $sofalaCircle = $sofalaCircleResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Tete Circle
    $teteCircleQuery = "SELECT * FROM $database_name.tt_circle";
    $teteCircleResult = $dbcon->query($teteCircleQuery);
    $teteCircle = $teteCircleResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Nampula Circle
    $nampulaCircleQuery = "SELECT * FROM $database_name.np_circle";
    $nampulaCircleResult = $dbcon->query($nampulaCircleQuery);
    $nampulaCircle = $nampulaCircleResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Niassa Circle
    $niassaCircleQuery = "SELECT * FROM $database_name.ns_circle";
    $niassaCircleResult = $dbcon->query($niassaCircleQuery);
    $niassaCircle = $niassaCircleResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Zambézia Circle
    $zambeziaCircleQuery = "SELECT * FROM $database_name.zb_circle";
    $zambeziaCircleResult = $dbcon->query($zambeziaCircleQuery);
    $zambeziaCircle = $zambeziaCircleResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Cabo Delgado Circle
    $delgadoCircleQuery = "SELECT * FROM $database_name.cd_circle";
    $delgadoCircleResult = $dbcon->query($delgadoCircleQuery);
    $caboDelgadoCircle = $delgadoCircleResult->fetchAll(PDO::FETCH_ASSOC);

    /**
     * GET VILLAGE DATA
     */

    //get Maputo Cidade Village
    $maputoVillageQuery = "SELECT * FROM $database_name.mc_village";
    $maputoVillageResult = $dbcon->query($maputoVillageQuery);
    $maputoVillage = $maputoVillageResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Maputo Província Village
    $maputoProvinceVillageQuery = "SELECT * FROM $database_name.mp_village";
    $maputoProvinceVillageResult = $dbcon->query($maputoProvinceVillageQuery);
    $maputoProvinceVillage = $maputoProvinceVillageResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Gaza Village
    $gazaVillageQuery = "SELECT * FROM $database_name.gz_village";
    $gazaVillageResult = $dbcon->query($gazaVillageQuery);
    $gazaVillage = $gazaVillageResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Inhambane Village
    $inhambaneVillageQuery = "SELECT * FROM $database_name.in_village";
    $inhambaneVillageResult = $dbcon->query($inhambaneVillageQuery);
    $inhambaneVillage = $inhambaneVillageResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Manica Village
    $manicaVillageQuery = "SELECT * FROM $database_name.mn_village";
    $manicaVillageResult = $dbcon->query($manicaVillageQuery);
    $manicaVillage = $manicaVillageResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Sofala Village
    $sofalaVillageQuery = "SELECT * FROM $database_name.sf_village";
    $sofalaVillageResult = $dbcon->query($sofalaVillageQuery);
    $sofalaVillage = $sofalaVillageResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Tete Village
    $teteVillageQuery = "SELECT * FROM $database_name.tt_village";
    $teteVillageResult = $dbcon->query($teteVillageQuery);
    $teteVillage = $teteVillageResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Nampula Village
    $nampulaVillageQuery = "SELECT * FROM $database_name.np_village";
    $nampulaVillageResult = $dbcon->query($nampulaVillageQuery);
    $nampulaVillage = $nampulaVillageResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Niassa Village
    $niassaVillageQuery = "SELECT * FROM $database_name.ns_village";
    $niassaVillageResult = $dbcon->query($niassaVillageQuery);
    $niassaVillage = $niassaVillageResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Zambézia Village
    $zambeziaVillageQuery = "SELECT * FROM $database_name.zb_village";
    $zambeziaVillageResult = $dbcon->query($zambeziaVillageQuery);
    $zambeziaVillage = $zambeziaVillageResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Cabo Delgado Village
    $delgadoVillageQuery = "SELECT * FROM $database_name.cd_village";
    $delgadoVillageResult = $dbcon->query($delgadoVillageQuery);
    $caboDelgadoVillage = $delgadoVillageResult->fetchAll(PDO::FETCH_ASSOC);

     /**
     * GET ZONE DATA
     */

    //get Maputo Cidade Zone
    $maputoZoneQuery = "SELECT * FROM $database_name.mc_zone";
    $maputoZoneResult = $dbcon->query($maputoZoneQuery);
    $maputoZone = $maputoZoneResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Maputo Província Zone
    $maputoProvinceZoneQuery = "SELECT * FROM $database_name.mp_zone";
    $maputoProvinceZoneResult = $dbcon->query($maputoProvinceZoneQuery);
    $maputoProvinceZone = $maputoProvinceZoneResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Gaza Zone
    $gazaZoneQuery = "SELECT * FROM $database_name.gz_zone";
    $gazaZoneResult = $dbcon->query($gazaZoneQuery);
    $gazaZone = $gazaZoneResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Inhambane Zone
    $inhambaneZoneQuery = "SELECT * FROM $database_name.in_zone";
    $inhambaneZoneResult = $dbcon->query($inhambaneZoneQuery);
    $inhambaneZone = $inhambaneZoneResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Manica Zone
    $manicaZoneQuery = "SELECT * FROM $database_name.mn_zone";
    $manicaZoneResult = $dbcon->query($manicaZoneQuery);
    $manicaZone = $manicaZoneResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Sofala Zone
    $sofalaZoneQuery = "SELECT * FROM $database_name.sf_zone";
    $sofalaZoneResult = $dbcon->query($sofalaZoneQuery);
    $sofalaZone = $sofalaZoneResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Tete Zone
    $teteZoneQuery = "SELECT * FROM $database_name.tt_zone";
    $teteZoneResult = $dbcon->query($teteZoneQuery);
    $teteZone = $teteZoneResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Nampula Zone
    $nampulaZoneQuery = "SELECT * FROM $database_name.np_zone";
    $nampulaZoneResult = $dbcon->query($nampulaZoneQuery);
    $nampulaZone = $nampulaZoneResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Niassa Zone
    $niassaZoneQuery = "SELECT * FROM $database_name.ns_zone";
    $niassaZoneResult = $dbcon->query($niassaZoneQuery);
    $niassaZone = $niassaZoneResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Zambézia Zone
    $zambeziaZoneQuery = "SELECT * FROM $database_name.zb_zone";
    $zambeziaZoneResult = $dbcon->query($zambeziaZoneQuery);
    $zambeziaZone = $zambeziaZoneResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Cabo Delgado Zone
    $delgadoZoneQuery = "SELECT * FROM $database_name.cd_zone";
    $delgadoZoneResult = $dbcon->query($delgadoZoneQuery);
    $caboDelgadoZone = $delgadoZoneResult->fetchAll(PDO::FETCH_ASSOC);

     /**
     * GET TOWNSHIP DATA
     */

    //get Maputo Cidade Township
    $maputoTownshipQuery = "SELECT * FROM $database_name.mc_township";
    $maputoTownshipResult = $dbcon->query($maputoTownshipQuery);
    $maputoTownship = $maputoTownshipResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Maputo Província Township
    $maputoProvinceTownshipQuery = "SELECT * FROM $database_name.mp_township";
    $maputoProvinceTownshipResult = $dbcon->query($maputoProvinceTownshipQuery);
    $maputoProvinceTownship = $maputoProvinceTownshipResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Gaza Township
    $gazaTownshipQuery = "SELECT * FROM $database_name.gz_township";
    $gazaTownshipResult = $dbcon->query($gazaTownshipQuery);
    $gazaTownship = $gazaTownshipResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Inhambane Township
    $inhambaneTownshipQuery = "SELECT * FROM $database_name.in_township";
    $inhambaneTownshipResult = $dbcon->query($inhambaneTownshipQuery);
    $inhambaneTownship = $inhambaneTownshipResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Manica Township
    $manicaTownshipQuery = "SELECT * FROM $database_name.mn_township";
    $manicaTownshipResult = $dbcon->query($manicaTownshipQuery);
    $manicaTownship = $manicaTownshipResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Sofala Township
    $sofalaTownshipQuery = "SELECT * FROM $database_name.sf_township";
    $sofalaTownshipResult = $dbcon->query($sofalaTownshipQuery);
    $sofalaTownship = $sofalaTownshipResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Tete Township
    $teteTownshipQuery = "SELECT * FROM $database_name.tt_township";
    $teteTownshipResult = $dbcon->query($teteTownshipQuery);
    $teteTownship = $teteTownshipResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Nampula Township
    $nampulaTownshipQuery = "SELECT * FROM $database_name.np_township";
    $nampulaTownshipResult = $dbcon->query($nampulaTownshipQuery);
    $nampulaTownship = $nampulaTownshipResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Niassa Township
    $niassaTownshipQuery = "SELECT * FROM $database_name.ns_township";
    $niassaTownshipResult = $dbcon->query($niassaTownshipQuery);
    $niassaTownship = $niassaTownshipResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Zambézia Township
    $zambeziaTownshipQuery = "SELECT * FROM $database_name.zb_township";
    $zambeziaTownshipResult = $dbcon->query($zambeziaTownshipQuery);
    $zambeziaTownship = $zambeziaTownshipResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Cabo Delgado Township
    $delgadoTownshipQuery = "SELECT * FROM $database_name.cd_township";
    $delgadoTownshipResult = $dbcon->query($delgadoTownshipQuery);
    $caboDelgadoTownship = $delgadoTownshipResult->fetchAll(PDO::FETCH_ASSOC);

?>