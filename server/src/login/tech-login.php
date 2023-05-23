<?php
require "../../config/connect.php";
session_start();


$_SESSION['timestamp'] = time();

$username = $_POST["username"];
$password = md5($_POST["password"]);

// getting user admin data
$fetchTechDataQuery = "SELECT * FROM $database_name.users WHERE role = 'tech' AND username = '$username'";
$techDataResult = $dbcon->query($fetchTechDataQuery);

if ($techDataResult->rowCount() == 0) {
    $_SESSION['tech-auth'] = "Nome de usuário inválido!";
    header("location: ../../../admin/");
} else {
    $techDataRow = $techDataResult->fetch(PDO::FETCH_ASSOC);
    $pass =  $techDataRow['password'];

    if ($pass !== $password) {
        $_SESSION['tech-auth'] = "Palavra-passe inválida!";
        header("location: ../../../admin/");
    } else {
        if($techDataRow['status'] == 'inactive') {
            $_SESSION['tech-auth'] = "Conta Inactiva! Contacte o seu supervisor.";
            header("location: ../../../admin/");
        } else {
            $_SESSION['tech-auth'] = "Sessão iniciada.";
            $_SESSION['user-data'] = $techDataRow;
            $_SESSION["user-role"] = "Administrador";
            header("location: ../../../admin/home");
        }
    }
}

//Terminar a conexao PDO
$dbcon = null;

?>