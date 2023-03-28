<?php
require "../../config/connect.php";
session_start();

$province = $_POST['province'];
$admin_post = trim($_POST['admin-post']);

switch ($province) {
    case 'Maputo Cidade':
        $checkAdminPost = "SELECT * FROM jayubiss_pocsquareocs.mc_admin_post";
        $isFound = checkLocality($checkAdminPost);
        if($isFound) {
            errorMEssage();
        } else {
            saveAdminPost("mc_admin_post");
        }
        break;
    case 'Maputo Província':
        $checkAdminPost = "SELECT * FROM jayubiss_pocsquareocs.mp_admin_post";
        $isFound = checkLocality($checkAdminPost);
        if($isFound) {
            errorMEssage();
        } else {
            saveAdminPost("mp_admin_post");
        }
        break;
    case 'Gaza':
        $checkAdminPost = "SELECT * FROM jayubiss_pocsquareocs.gz_admin_post";
        $isFound = checkLocality($checkAdminPost);
        if($isFound) {
            errorMEssage();
        } else {
            saveAdminPost("gz_admin_post");
        }
        break;
    case 'Inhambane':
        $checkAdminPost = "SELECT * FROM jayubiss_pocsquareocs.in_admin_post";
        $isFound = checkLocality($checkAdminPost);
        if($isFound) {
            errorMEssage();
        } else {
            saveAdminPost("in_admin_post");
        }
        break;
    case 'Manica':
        $checkAdminPost = "SELECT * FROM jayubiss_pocsquareocs.mn_admin_post";
        $isFound = checkLocality($checkAdminPost);
        if($isFound) {
            errorMEssage();
        } else {
            saveAdminPost("mn_admin_post");
        }
        break;
    case 'Sofala':
        $checkAdminPost = "SELECT * FROM jayubiss_pocsquareocs.sf_admin_post";
        $isFound = checkLocality($checkAdminPost);
        if($isFound) {
            errorMEssage();
        } else {
            saveAdminPost("sf_admin_post");
        }
        break;
    case 'Tete':
        $checkAdminPost = "SELECT * FROM jayubiss_pocsquareocs.tt_admin_post";
        $isFound = checkLocality($checkAdminPost);
        if($isFound) {
            errorMEssage();
        } else {
            saveAdminPost("tt_admin_post");
        }
        break;
    case 'Nampula':
        $checkAdminPost = "SELECT * FROM jayubiss_pocsquareocs.np_admin_post";
        $isFound = checkLocality($checkAdminPost);
        if($isFound) {
            errorMEssage();
        } else {
            saveAdminPost("np_admin_post");
        }
        break;
    case 'Niassa':
        $checkAdminPost = "SELECT * FROM jayubiss_pocsquareocs.ns_admin_post";
        $isFound = checkLocality($checkAdminPost);
        if($isFound) {
            errorMEssage();
        } else {
            saveAdminPost("ns_admin_post");
        }
        break;
    case 'Zambézia':
        $checkAdminPost = "SELECT * FROM jayubiss_pocsquareocs.zb_admin_post";
        $isFound = checkLocality($checkAdminPost);
        if($isFound) {
            errorMEssage();
        } else {
            saveAdminPost("zb_admin_post");
        }
        break;
    case 'Cabo Delgado':
        $checkAdminPost = "SELECT * FROM jayubiss_pocsquareocs.cd_admin_post";
        $isFound = checkLocality($checkAdminPost);
        if($isFound) {
            errorMEssage();
        } else {
            saveAdminPost("cd_admin_post");
        }
        break;
    default:
        # code...
        break;
}


function checkLocality($checkAdminPost) {
    global $admin_post, $province, $dbcon;

    $checkAdminPostResult = $dbcon->query($checkAdminPost);
    $rows = $checkAdminPostResult->fetchAll(PDO::FETCH_ASSOC);

    $isFound = false;
    foreach ($rows as $row) {
        if(strcasecmp($admin_post , $row['admin_post_name']) == 0) {
            $isFound = true;
        }
    }

    return $isFound;
}

function saveAdminPost($table) {
    global $admin_post, $province, $dbcon;

    try {

        $dbcon->beginTransaction();
    
        $saveAdminPostQuery = "INSERT INTO jayubiss_pocsquareocs." . $table . " (province, admin_post_name) VALUES (?, ?)";
        $stmt = $dbcon->prepare($saveAdminPostQuery);
        $stmt->execute([$province, $admin_post]);
    
    
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

function errorMessage() {
    $_SESSION['registration-info'] = "Este P. Administrativo já foi adicionado!";
    $_SESSION['error'] = true;
    header("location: ../../../admin/add-location/location/administrative-post/");
}

?>