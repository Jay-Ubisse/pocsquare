<?php
require "../../config/connect.php";
session_start();
$_SESSION['timestamp'] = time();

$username = $_POST["username"];
$password = md5($_POST["password"]);

// getting user admin data
$supervisorDataQuery = "SELECT * FROM $database_name.users WHERE role = 'supervisor' AND username = '$username'";
$supervisorDataResult = $dbcon->query($supervisorDataQuery);

if ($supervisorDataResult->rowCount() == 0) {
    $_SESSION['supervisor-auth'] = "Nome de usuário inválido!";
    header("location: ../../../admin/");
} else {
    $supervisorDataRow = $supervisorDataResult->fetch(PDO::FETCH_ASSOC);
    $pass =  $supervisorDataRow['password'];

    if ($pass !== $password) {
        $_SESSION['supervisor-auth'] = "Palavra-passe inválida!";
        header("location: ../../../admin/");
    } else {
        if($supervisorDataRow['status'] == 'inactive') {
            $_SESSION['supervisor-auth'] = "Conta Inactiva! Contacte o seu supervisor.";
            header("location: ../../../admin/");
        } else {
            $_SESSION['supervisor-auth'] = "Sessão iniciada.";
            $_SESSION['user-data'] = $supervisorDataRow;
            $_SESSION["user-role"] = "Supervisor";
            header("location: ../../../admin/home");
        }
    }
}

//Terminar a conexao PDO
$dbcon = null;

?>