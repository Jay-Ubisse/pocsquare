<?php
    //get Maputo Cidade districts
    $getMaputoQuery = "SELECT * FROM pocsquare.districts WHERE province = 'Maputo Cidade'";
    $getMaputoResult = $dbcon->query($getMaputoQuery);
    $maputoRows = $getMaputoResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Maputo Província districts
    $getMaputoProvinceQuery = "SELECT * FROM pocsquare.districts WHERE province = 'Maputo Província'";
    $getMaputoProvinceResult = $dbcon->query($getMaputoProvinceQuery);
    $maputoProvinceRows = $getMaputoProvinceResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Gaza districts
    $getGazaQuery = "SELECT * FROM pocsquare.districts WHERE province = 'Gaza'";
    $getGazaResult = $dbcon->query($getGazaQuery);
    $gazaRows = $getGazaResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Inhambane districts
    $getInhambaneQuery = "SELECT * FROM pocsquare.districts WHERE province = 'Inhambane'";
    $getInhambaneResult = $dbcon->query($getInhambaneQuery);
    $inhambaneRows = $getInhambaneResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Manica districts
    $getManicaQuery = "SELECT * FROM pocsquare.districts WHERE province = 'Manica'";
    $getManicaResult = $dbcon->query($getManicaQuery);
    $manicaRows = $getManicaResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Sofala districts
    $getSofalaQuery = "SELECT * FROM pocsquare.districts WHERE province = 'Sofala'";
    $getSofalaResult = $dbcon->query($getSofalaQuery);
    $sofalaRows = $getSofalaResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Tete districts
    $getTeteQuery = "SELECT * FROM pocsquare.districts WHERE province = 'Tete'";
    $getTeteResult = $dbcon->query($getTeteQuery);
    $teteRows = $getTeteResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Nampula districts
    $getNampulaQuery = "SELECT * FROM pocsquare.districts WHERE province = 'Nampula'";
    $getNampulaResult = $dbcon->query($getNampulaQuery);
    $nampulaRows = $getNampulaResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Niassa districts
    $getNiassaQuery = "SELECT * FROM pocsquare.districts WHERE province = 'Niassa'";
    $getNiassaResult = $dbcon->query($getNiassaQuery);
    $niassaRows = $getNiassaResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Zambézia districts
    $getZambeziaQuery = "SELECT * FROM pocsquare.districts WHERE province = 'Zambézia'";
    $getZambeziaResult = $dbcon->query($getZambeziaQuery);
    $zambeziaRows = $getZambeziaResult->fetchAll(PDO::FETCH_ASSOC);
    
    //get Cabo Delgado districts
    $getDelgadoQuery = "SELECT * FROM pocsquare.districts WHERE province = 'Cabo Delgado'";
    $getDelgadoResult = $dbcon->query($getDelgadoQuery);
    $caboDelgadoRows = $getDelgadoResult->fetchAll(PDO::FETCH_ASSOC);
    

?>