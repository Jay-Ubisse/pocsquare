<?php
require "../../server/config/connect.php";
session_start();

if(!isset($_SESSION["admin-auth"]) && !isset($_SESSION["tech-auth"]) && !isset($_SESSION["supervisor-auth"])) {
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
    <title>Página Inicial | Pocsquare</title>
    <link rel="stylesheet" href="../../assets/styles/output.css" />
    <script src="https://kit.fontawesome.com/4b43862993.js" crossorigin="anonymous"></script>
</head>

<body>
    <header class="bg-orange-700 text-white font-semibold flex flex-row justify-between items-center px-7 py-4 laptop:text-base mobile:text-sm">
        <div class="laptop:text-lg mobile:text-sm">
            <?php
            echo $_SESSION['user-data']['username'];
            ?>
        </div>
        <div class="border border-white rounded-md px-5 py-2 bg-orange-700 hover:bg-orange-500">
            <a href="../../server/src/logout-route.php">Sair</a>
        </div>
    </header>
    <main class="bg-gray-200 p-1 h-[calc(100vh-100px)] overflow-scroll">
        <?php
        if (isset($_SESSION["tech-auth"])) {
            include "../components/home/tech-home.php";
        }
        if (isset($_SESSION["admin-auth"])) {
            include "../components/home/admin-home.php";
        }
        if (isset($_SESSION["sup-auth"])) {
            include "../components/home/sup-home.php";
        }
        ?>
    </main>
    <footer>
        <?php include "../components/footer.php" ?>
    </footer>

    <script src="../../assets/scripts/jquery-3.6.0.js"></script>
    <script src="../../assets/scripts/admin/session-timeout.js"></script>
</body>

</html>
<?php
    }
?>