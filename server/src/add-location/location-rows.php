<?php

    /**
     * GET DISTRICTS DATA
     */

    //get Maputo Cidade districts
    $maputoDistrictQuery = "SELECT * FROM pocsquare.districts WHERE province = 'Maputo Cidade'";
    $maputoDistrictResult = $dbcon->query($maputoDistrictQuery);
    $maputoDistricts = $maputoDistrictResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Maputo Província districts
    $maputoProvinceDistrictQuery = "SELECT * FROM pocsquare.districts WHERE province = 'Maputo Província'";
    $maputoProvinceDistrictResult = $dbcon->query($maputoProvinceDistrictQuery);
    $maputoProvinceDistricts = $maputoProvinceDistrictResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Gaza districts
    $gazaDistrictQuery = "SELECT * FROM pocsquare.districts WHERE province = 'Gaza'";
    $gazaDistrictResult = $dbcon->query($gazaDistrictQuery);
    $gazaDistricts = $gazaDistrictResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Inhambane districts
    $inhambaneDistrictQuery = "SELECT * FROM pocsquare.districts WHERE province = 'Inhambane'";
    $inhambaneDistrictResult = $dbcon->query($inhambaneDistrictQuery);
    $inhambaneDistricts = $inhambaneDistrictResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Manica districts
    $manicaDistrictsQuery = "SELECT * FROM pocsquare.districts WHERE province = 'Manica'";
    $manicaDistrictsResult = $dbcon->query($manicaDistrictsQuery);
    $manicaDistricts = $manicaDistrictsResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Sofala districts
    $sofalaDistrictsQuery = "SELECT * FROM pocsquare.districts WHERE province = 'Sofala'";
    $sofalaDistrictsResult = $dbcon->query($sofalaDistrictsQuery);
    $sofalaDistricts = $sofalaDistrictsResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Tete districts
    $teteDistrctsQuery = "SELECT * FROM pocsquare.districts WHERE province = 'Tete'";
    $teteDistrctsResult = $dbcon->query($teteDistrctsQuery);
    $teteDistricts = $teteDistrctsResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Nampula districts
    $nampulaDistrictsQuery = "SELECT * FROM pocsquare.districts WHERE province = 'Nampula'";
    $nampulaDistrictsResult = $dbcon->query($nampulaDistrictsQuery);
    $nampulaDistricts = $nampulaDistrictsResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Niassa districts
    $niassaDistrictsQuery = "SELECT * FROM pocsquare.districts WHERE province = 'Niassa'";
    $niassaDistrictsResult = $dbcon->query($niassaDistrictsQuery);
    $niassaDistricts = $niassaDistrictsResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Zambézia districts
    $zambeziaDistrictsQuery = "SELECT * FROM pocsquare.districts WHERE province = 'Zambézia'";
    $zambeziaDistrictsResult = $dbcon->query($zambeziaDistrictsQuery);
    $zambeziaDistricts = $zambeziaDistrictsResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Cabo Delgado districts
    $delgadoDistrictsQuery = "SELECT * FROM pocsquare.districts WHERE province = 'Cabo Delgado'";
    $delgadoDistrictsResult = $dbcon->query($delgadoDistrictsQuery);
    $caboDelgadoDistricts = $delgadoDistrictsResult->fetchAll(PDO::FETCH_ASSOC);


    /**
     * GET DISTRICTS DATA
     */

    //get Maputo Cidade districts
    $maputoPostQuery = "SELECT * FROM pocsquare.administrative_posts WHERE province = 'Maputo Cidade'";
    $maputoPostResult = $dbcon->query($maputoPostQuery);
    $maputoPosts = $maputoPostResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Maputo Província Posts
    $maputoProvincePostQuery = "SELECT * FROM pocsquare.administrative_posts WHERE province = 'Maputo Província'";
    $maputoProvincePostResult = $dbcon->query($maputoProvincePostQuery);
    $maputoProvincePosts = $maputoProvincePostResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Gaza Posts
    $gazaPostQuery = "SELECT * FROM pocsquare.administrative_posts WHERE province = 'Gaza'";
    $gazaPostResult = $dbcon->query($gazaPostQuery);
    $gazaPosts = $gazaPostResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Inhambane Posts
    $inhambanePostQuery = "SELECT * FROM pocsquare.administrative_posts WHERE province = 'Inhambane'";
    $inhambanePostResult = $dbcon->query($inhambanePostQuery);
    $inhambanePosts = $inhambanePostResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Manica Posts
    $manicaPostsQuery = "SELECT * FROM pocsquare.administrative_posts WHERE province = 'Manica'";
    $manicaPostsResult = $dbcon->query($manicaPostsQuery);
    $manicaPosts = $manicaPostsResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Sofala Posts
    $sofalaPostsQuery = "SELECT * FROM pocsquare.administrative_posts WHERE province = 'Sofala'";
    $sofalaPostsResult = $dbcon->query($sofalaPostsQuery);
    $sofalaPosts = $sofalaPostsResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Tete Posts
    $teteDistrctsQuery = "SELECT * FROM pocsquare.administrative_posts WHERE province = 'Tete'";
    $teteDistrctsResult = $dbcon->query($teteDistrctsQuery);
    $tetePosts = $teteDistrctsResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Nampula Posts
    $nampulaPostsQuery = "SELECT * FROM pocsquare.administrative_posts WHERE province = 'Nampula'";
    $nampulaPostsResult = $dbcon->query($nampulaPostsQuery);
    $nampulaPosts = $nampulaPostsResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Niassa Posts
    $niassaPostsQuery = "SELECT * FROM pocsquare.administrative_posts WHERE province = 'Niassa'";
    $niassaPostsResult = $dbcon->query($niassaPostsQuery);
    $niassaPosts = $niassaPostsResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Zambézia Posts
    $zambeziaPostsQuery = "SELECT * FROM pocsquare.administrative_posts WHERE province = 'Zambézia'";
    $zambeziaPostsResult = $dbcon->query($zambeziaPostsQuery);
    $zambeziaPosts = $zambeziaPostsResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Cabo Delgado Posts
    $delgadoPostsQuery = "SELECT * FROM pocsquare.administrative_posts WHERE province = 'Cabo Delgado'";
    $delgadoPostsResult = $dbcon->query($delgadoPostsQuery);
    $caboDelgadoPosts = $delgadoPostsResult->fetchAll(PDO::FETCH_ASSOC);
    

?>