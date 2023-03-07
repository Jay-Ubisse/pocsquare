<?php
    require "../config/connect.php";
    session_start();

        $username = $_POST["username"];
        $password = md5($_POST["password"]);

        // getting user admin data
        $fetchAdminDataQuery = "SELECT * FROM pocsquare.admins WHERE username = '$username'";
        $adminDataResult = $dbcon->query($fetchAdminDataQuery);

        if ($adminDataResult->rowCount() == 0) {
            $_SESSION['auth'] = "Nome de usuário inválido!";
            header("location: ../../admin/");
        } else {
            $adminDataRow = $adminDataResult->fetch(PDO::FETCH_ASSOC);
            $pass =  $adminDataRow['password'];

            if ($pass !== $password) {
                $_SESSION['auth'] = "Palavra-passe inválida!";
                header("location: ../../admin/");
            } else {
                $_SESSION['user-data'] = $adminDataRow;
                header("location: ../../admin/home");
            }
        }

        //Terminar a conexao PDO
        $dbcon=null;
?>
