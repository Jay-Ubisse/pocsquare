<?php
require "../../config/connect.php";
session_start();

$province = $_POST['province'];
$administrativePost = trim($_POST['administrative-post']);

$checkDistrictQuery = "SELECT * FROM pocsquare.administrative_posts WHERE province = '$province'";
$checkDistrictResult = $dbcon->query($checkDistrictQuery);

$rows = $checkDistrictResult->fetchAll(PDO::FETCH_ASSOC);

$isFound = false;
foreach ($rows as $row) {
    if(strcasecmp($administrativePost , $row['administrative_post']) == 0) {
        $isFound = true;
        $_SESSION['registration-info'] = "Este P. Administrativo já foi adicionado!";
        $_SESSION['error'] = true;
        header("location: ../../../admin/add-location/location/administrative-post/");
    }
}

if(!$isFound) {
    try {

        $dbcon->beginTransaction();
    
        $savePostQuery = "INSERT INTO pocsquare.administrative_posts 
                                        (province, administrative_post) 
                                        VALUES (?, ?)";
        $stmt = $dbcon->prepare($savePostQuery);
        $stmt->execute([$province, $administrativePost]);
    
    
        $dbcon->commit();
        
        $_SESSION['registration-info'] = "P. Administrativo adicionado com sucesso!";
        $_SESSION['error'] = false;
        header("location: ../../../admin/add-location/location/administrative-post/");
    
    } 
    catch(PDOException $ex) {
        //Something went wrong rollback!
        $dbcon->rollBack();
        echo $ex->getMessage();
    }
}
?>