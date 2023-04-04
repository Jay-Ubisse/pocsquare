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

?>