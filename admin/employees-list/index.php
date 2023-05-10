<?php
require "../../server/config/connect.php";
include "../../server/src/add-location/location-rows.php";
session_start();

if(!isset($_SESSION["admin-auth"])) {
    header("Location: ../");
} else {
    if (isset($_SESSION['timestamp'])) {
        unset($_SESSION['timestamp']);
    
        $_SESSION['timestamp'] = time();
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Funcionários | Pocsquare</title>
    <link rel="stylesheet" href="../../assets/styles/output.css" />
    <script src="https://kit.fontawesome.com/4b43862993.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <?php include "../components/header.php"; ?>
    </header>
    <main class="h-screen flex items-center justify-center">
        <h1 class="text-3xl text-orange-700 font-bold text-center">Página em manutenção</h1>
    </main>
    <footer>
        <?php include "../components/footer.php"; ?>
    </footer>

    <script src="../../assets/scripts/jquery-3.6.0.js"></script>
    <script src="../../assets/scripts/admin/register.js"></script>
    <script src="../../assets/scripts/admin/session-timeout.js"></script>
</body>

</html>
<?php
}
?>