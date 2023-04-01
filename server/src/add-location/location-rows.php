<?php

    /**
     * GET DISTRICTS DATA
     */

    //get Maputo Cidade districts
    $maputoDistrictQuery = "SELECT * FROM jayubiss_pocsquareocs.mc_district";
    $maputoDistrictResult = $dbcon->query($maputoDistrictQuery);
    $maputoDistricts = $maputoDistrictResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Maputo Província districts
    $maputoProvinceDistrictQuery = "SELECT * FROM jayubiss_pocsquareocs.mp_district";
    $maputoProvinceDistrictResult = $dbcon->query($maputoProvinceDistrictQuery);
    $maputoProvinceDistricts = $maputoProvinceDistrictResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Gaza districts
    $gazaDistrictQuery = "SELECT * FROM jayubiss_pocsquareocs.gz_district";
    $gazaDistrictResult = $dbcon->query($gazaDistrictQuery);
    $gazaDistricts = $gazaDistrictResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Inhambane districts
    $inhambaneDistrictQuery = "SELECT * FROM jayubiss_pocsquareocs.in_district";
    $inhambaneDistrictResult = $dbcon->query($inhambaneDistrictQuery);
    $inhambaneDistricts = $inhambaneDistrictResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Manica districts
    $manicaDistrictsQuery = "SELECT * FROM jayubiss_pocsquareocs.mn_district";
    $manicaDistrictsResult = $dbcon->query($manicaDistrictsQuery);
    $manicaDistricts = $manicaDistrictsResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Sofala districts
    $sofalaDistrictsQuery = "SELECT * FROM jayubiss_pocsquareocs.sf_district";
    $sofalaDistrictsResult = $dbcon->query($sofalaDistrictsQuery);
    $sofalaDistricts = $sofalaDistrictsResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Tete districts
    $teteDistrctsQuery = "SELECT * FROM jayubiss_pocsquareocs.tt_district";
    $teteDistrctsResult = $dbcon->query($teteDistrctsQuery);
    $teteDistricts = $teteDistrctsResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Nampula districts
    $nampulaDistrictsQuery = "SELECT * FROM jayubiss_pocsquareocs.np_district";
    $nampulaDistrictsResult = $dbcon->query($nampulaDistrictsQuery);
    $nampulaDistricts = $nampulaDistrictsResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Niassa districts
    $niassaDistrictsQuery = "SELECT * FROM jayubiss_pocsquareocs.ns_district";
    $niassaDistrictsResult = $dbcon->query($niassaDistrictsQuery);
    $niassaDistricts = $niassaDistrictsResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Zambézia districts
    $zambeziaDistrictsQuery = "SELECT * FROM jayubiss_pocsquareocs.zb_district";
    $zambeziaDistrictsResult = $dbcon->query($zambeziaDistrictsQuery);
    $zambeziaDistricts = $zambeziaDistrictsResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Cabo Delgado districts
    $delgadoDistrictsQuery = "SELECT * FROM jayubiss_pocsquareocs.cd_district";
    $delgadoDistrictsResult = $dbcon->query($delgadoDistrictsQuery);
    $caboDelgadoDistricts = $delgadoDistrictsResult->fetchAll(PDO::FETCH_ASSOC);


    /**
     * GET ADMIN POSTS DATA
     */

    //get Maputo Cidade posts
    $maputoPostQuery = "SELECT * FROM jayubiss_pocsquareocs.mc_admin_post";
    $maputoPostResult = $dbcon->query($maputoPostQuery);
    $maputoPosts = $maputoPostResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Maputo Província Posts
    $maputoProvincePostQuery = "SELECT * FROM jayubiss_pocsquareocs.mp_admin_post";
    $maputoProvincePostResult = $dbcon->query($maputoProvincePostQuery);
    $maputoProvincePosts = $maputoProvincePostResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Gaza Posts
    $gazaPostQuery = "SELECT * FROM jayubiss_pocsquareocs.gz_admin_post";
    $gazaPostResult = $dbcon->query($gazaPostQuery);
    $gazaPosts = $gazaPostResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Inhambane Posts
    $inhambanePostQuery = "SELECT * FROM jayubiss_pocsquareocs.in_admin_post";
    $inhambanePostResult = $dbcon->query($inhambanePostQuery);
    $inhambanePosts = $inhambanePostResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Manica Posts
    $manicaPostsQuery = "SELECT * FROM jayubiss_pocsquareocs.mn_admin_post";
    $manicaPostsResult = $dbcon->query($manicaPostsQuery);
    $manicaPosts = $manicaPostsResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Sofala Posts
    $sofalaPostsQuery = "SELECT * FROM jayubiss_pocsquareocs.sf_admin_post";
    $sofalaPostsResult = $dbcon->query($sofalaPostsQuery);
    $sofalaPosts = $sofalaPostsResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Tete Posts
    $tetePostQuery = "SELECT * FROM jayubiss_pocsquareocs.tt_admin_post";
    $tetePostResult = $dbcon->query($tetePostQuery);
    $tetePosts = $tetePostResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Nampula Posts
    $nampulaPostsQuery = "SELECT * FROM jayubiss_pocsquareocs.np_admin_post";
    $nampulaPostsResult = $dbcon->query($nampulaPostsQuery);
    $nampulaPosts = $nampulaPostsResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Niassa Posts
    $niassaPostsQuery = "SELECT * FROM jayubiss_pocsquareocs.ns_admin_post";
    $niassaPostsResult = $dbcon->query($niassaPostsQuery);
    $niassaPosts = $niassaPostsResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Zambézia Posts
    $zambeziaPostsQuery = "SELECT * FROM jayubiss_pocsquareocs.zb_admin_post";
    $zambeziaPostsResult = $dbcon->query($zambeziaPostsQuery);
    $zambeziaPosts = $zambeziaPostsResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Cabo Delgado Posts
    $delgadoPostsQuery = "SELECT * FROM jayubiss_pocsquareocs.cd_admin_post";
    $delgadoPostsResult = $dbcon->query($delgadoPostsQuery);
    $caboDelgadoPosts = $delgadoPostsResult->fetchAll(PDO::FETCH_ASSOC);
    
    /**
     * GET LOCALITY DATA
     */

    //get Maputo Cidade locality
    $maputoLocalityQuery = "SELECT * FROM jayubiss_pocsquareocs.mc_locality";
    $maputoLocalityResult = $dbcon->query($maputoLocalityQuery);
    $maputoLocality = $maputoLocalityResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Maputo Província locality
    $maputoProvinceLocalityQuery = "SELECT * FROM jayubiss_pocsquareocs.mp_locality";
    $maputoProvinceLocalityResult = $dbcon->query($maputoProvinceLocalityQuery);
    $maputoProvinceLocality = $maputoProvinceLocalityResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Gaza locality
    $gazaLocalityQuery = "SELECT * FROM jayubiss_pocsquareocs.gz_locality";
    $gazaLocalityResult = $dbcon->query($gazaLocalityQuery);
    $gazaLocality = $gazaLocalityResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Inhambane locality
    $inhambaneLocalityQuery = "SELECT * FROM jayubiss_pocsquareocs.in_locality";
    $inhambaneLocalityResult = $dbcon->query($inhambaneLocalityQuery);
    $inhambaneLocality = $inhambaneLocalityResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Manica locality
    $manicaLocalityQuery = "SELECT * FROM jayubiss_pocsquareocs.mn_locality";
    $manicaLocalityResult = $dbcon->query($manicaLocalityQuery);
    $manicaLocality = $manicaLocalityResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Sofala locality
    $sofalaLocalityQuery = "SELECT * FROM jayubiss_pocsquareocs.sf_locality";
    $sofalaLocalityResult = $dbcon->query($sofalaLocalityQuery);
    $sofalaLocality = $sofalaLocalityResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Tete locality
    $teteLocalityQuery = "SELECT * FROM jayubiss_pocsquareocs.tt_locality";
    $teteLocalityResult = $dbcon->query($teteLocalityQuery);
    $teteLocality = $teteLocalityResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Nampula locality
    $nampulaLocalityQuery = "SELECT * FROM jayubiss_pocsquareocs.np_locality";
    $nampulaLocalityResult = $dbcon->query($nampulaLocalityQuery);
    $nampulaLocality = $nampulaLocalityResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Niassa locality
    $niassaLocalityQuery = "SELECT * FROM jayubiss_pocsquareocs.ns_locality";
    $niassaLocalityResult = $dbcon->query($niassaLocalityQuery);
    $niassaLocality = $niassaLocalityResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Zambézia locality
    $zambeziaLocalityQuery = "SELECT * FROM jayubiss_pocsquareocs.zb_locality";
    $zambeziaLocalityResult = $dbcon->query($zambeziaLocalityQuery);
    $zambeziaLocality = $zambeziaLocalityResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Cabo Delgado locality
    $delgadoLocalityQuery = "SELECT * FROM jayubiss_pocsquareocs.cd_locality";
    $delgadoLocalityResult = $dbcon->query($delgadoLocalityQuery);
    $caboDelgadoLocality = $delgadoLocalityResult->fetchAll(PDO::FETCH_ASSOC);

?>