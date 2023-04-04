<?php
require "../../config/connect.php";
session_start();

$province = $_POST['province'];
$admin_post = trim($_POST['admin-post']);

switch ($province) {
    case 'Maputo Cidade':
        $checkAdminPost = "SELECT * FROM $database_name.mc_admin_post";
        $isFound = checkLocality($checkAdminPost);
        if($isFound) {
            errorMEssage();
        } else {
            saveAdminPost("mc_admin_post");
        }
        break;
    case 'Maputo Província':
        $checkAdminPost = "SELECT * FROM $database_name.mp_admin_post";
        $isFound = checkLocality($checkAdminPost);
        if($isFound) {
            errorMEssage();
        } else {
            saveAdminPost("mp_admin_post");
        }
        break;
    case 'Gaza':
        $checkAdminPost = "SELECT * FROM $database_name.gz_admin_post";
        $isFound = checkLocality($checkAdminPost);
        if($isFound) {
            errorMEssage();
        } else {
            saveAdminPost("gz_admin_post");
        }
        break;
    case 'Inhambane':
        $checkAdminPost = "SELECT * FROM $database_name.in_admin_post";
        $isFound = checkLocality($checkAdminPost);
        if($isFound) {
            errorMEssage();
        } else {
            saveAdminPost("in_admin_post");
        }
        break;
    case 'Manica':
        $checkAdminPost = "SELECT * FROM $database_name.mn_admin_post";
        $isFound = checkLocality($checkAdminPost);
        if($isFound) {
            errorMEssage();
        } else {
            saveAdminPost("mn_admin_post");
        }
        break;
    case 'Sofala':
        $checkAdminPost = "SELECT * FROM $database_name.sf_admin_post";
        $isFound = checkLocality($checkAdminPost);
        if($isFound) {
            errorMEssage();
        } else {
            saveAdminPost("sf_admin_post");
        }
        break;
    case 'Tete':
        $checkAdminPost = "SELECT * FROM $database_name.tt_admin_post";
        $isFound = checkLocality($checkAdminPost);
        if($isFound) {
            errorMEssage();
        } else {
            saveAdminPost("tt_admin_post");
        }
        break;
    case 'Nampula':
        $checkAdminPost = "SELECT * FROM $database_name.np_admin_post";
        $isFound = checkLocality($checkAdminPost);
        if($isFound) {
            errorMEssage();
        } else {
            saveAdminPost("np_admin_post");
        }
        break;
    case 'Niassa':
        $checkAdminPost = "SELECT * FROM $database_name.ns_admin_post";
        $isFound = checkLocality($checkAdminPost);
        if($isFound) {
            errorMEssage();
        } else {
            saveAdminPost("ns_admin_post");
        }
        break;
    case 'Zambézia':
        $checkAdminPost = "SELECT * FROM $database_name.zb_admin_post";
        $isFound = checkLocality($checkAdminPost);
        if($isFound) {
            errorMEssage();
        } else {
            saveAdminPost("zb_admin_post");
        }
        break;
    case 'Cabo Delgado':
        $checkAdminPost = "SELECT * FROM $database_name.cd_admin_post";
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
    global $admin_post, $province, $dbcon, $database_name;

    try {

        $dbcon->beginTransaction();
    
        $saveAdminPostQuery = "INSERT INTO $database_name." . $table . " (province, admin_post_name) VALUES (?, ?)";
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