<?php
require "../../../server/config/connect.php";
session_start();

if (!isset($_SESSION["admin-auth"]) && !isset($_SESSION["tech-auth"]) && !isset($_SESSION["supervisor-auth"])) {
    header("Location: ../../");
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
        <title>Editar Local | Pocsquare</title>
        <link rel="stylesheet" href="../../../assets/styles/output.css">
    </head>

    <body class="bg-gray-200">
        <header class="bg-orange-700 text-white font-semibold flex flex-row justify-between items-center px-7 py-4 laptop:text-base mobile:text-sm">
            <div class="laptop:text-lg mobile:text-sm">
                <?php
                echo $_SESSION['user-data']['username'];
                ?>
            </div>
            <div class="flex flex-row gap-4">
                <div class="border border-white rounded-md px-5 py-2 bg-orange-700 hover:bg-orange-500">
                    <a href="../">Voltar</a>
                </div>
                <div class="border border-white rounded-md px-5 py-2 bg-orange-700 hover:bg-orange-500">
                    <a href="../../home/">Dashboard</a>
                </div>
                <div class="border border-white rounded-md px-5 py-2 bg-orange-700 hover:bg-orange-500">
                    <a href="../../../server/src/logout-route.php">Sair</a>
                </div>
            </div>
        </header>
        <section>
            <?php
                switch ($_SESSION["region"]) {
                    case 'district':
                        include_once "./components/edit-district.php";
                        break;
                    case 'admin_post':
                        include_once "./components/edit-admin-post.php";
                        break;
                    case 'neighborhood_locality':
                        include_once "./components/edit-neighborhood.php";
                        break;
                    case 'circle':
                        include_once "./components/edit-circle.php";
                        break;
                    case 'cell':
                        include_once "./components/edit-cell.php";
                        break;
                    case 'township':
                        include_once "./components/edit-township.php";
                        break;
                    case 'zone':
                        include_once "./components/edit-zone.php";
                        break;
                    case 'village':
                        include_once "./components/edit-village.php";
                        break;
                    
                    default:
                        # code...
                        break;
                }

            ?>
        </section>
        <footer>
            <?php include "../../components/footer.php" ?>
        </footer>

        <script src="../../../assets/scripts/jquery-3.6.0.js"></script>
        <script>
            setInterval(function() {
                $.get("../../../server/src/session-timeout.php", function(data) {
                    console.log(data);
                    if (data == 0) {
                        window.location.href = "../../../server/src/logout-route.php";
                    }
                });
            }, 1000);
        </script>
    </body>

    </html>

<?php
}
?>