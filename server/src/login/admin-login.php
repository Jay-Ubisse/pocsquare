<?php
require "../../config/connect.php";
session_start();
$_SESSION['timestamp'] = time();

$username = $_POST["username"];
$password = md5($_POST["password"]);

// getting user admin data
$fetchAdminDataQuery = "SELECT * FROM $database_name.users WHERE role = 'admin' AND username = '$username'";
$adminDataResult = $dbcon->query($fetchAdminDataQuery);

if ($adminDataResult->rowCount() == 0) {
    $_SESSION['admin-auth'] = "Nome de usuário inválido!";
    header("location: ../../../admin/");
} else {
    $adminDataRow = $adminDataResult->fetch(PDO::FETCH_ASSOC);
    $pass =  $adminDataRow['password'];

    if ($pass !== $password) {
        $_SESSION['admin-auth'] = "Palavra-passe inválida!";
        header("location: ../../../admin/");
    } else {
        if($adminDataRow['status'] == 'inactive') {
            $_SESSION['admin-auth'] = "Conta Inactiva! Contacte o seu supervisor.";
            header("location: ../../../admin/");
        } else {
            $_SESSION['admin-auth'] = "Sessão iniciada.";
            $_SESSION['user-data'] = $adminDataRow;
            $_SESSION["user-role"] = "Administrador";
            header("location: ../../../admin/home");
        }
    }
}

//Terminar a conexao PDO
$dbcon = null;

?>