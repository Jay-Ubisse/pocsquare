<?php
    require "../../config/connect.php";
    session_start();
    $_SESSION['timestamp'] = time();

        $username = $_POST["username"];
        $password = md5($_POST["password"]);

        // getting user admin data
        $fetchAdminDataQuery = "SELECT * FROM $database_name.technician WHERE username = '$username'";
        $adminDataResult = $dbcon->query($fetchAdminDataQuery);

        if ($adminDataResult->rowCount() == 0) {
            $_SESSION['tech-auth'] = "Nome de usuário inválido!";
            header("location: ../../../admin/");
        } else {
            $adminDataRow = $adminDataResult->fetch(PDO::FETCH_ASSOC);
            $pass =  $adminDataRow['password'];

            if ($pass !== $password) {
                $_SESSION['tech-auth'] = "Palavra-passe inválida!";
                header("location: ../../../admin/");
            } else {
                $_SESSION['tech-auth'] = "Logged-in!";
                $_SESSION['user-data'] = $adminDataRow;
                $_SESSION["user-role"] = "Técnico";
                header("location: ../../../admin/home");
            }
        }

        //Terminar a conexao PDO
        $dbcon=null;
?>
