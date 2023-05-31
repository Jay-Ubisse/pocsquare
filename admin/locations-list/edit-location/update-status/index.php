<?php
require "../../../../server/config/connect.php";
session_start();

if (!isset($_SESSION["admin-auth"]) && !isset($_SESSION["tech-auth"]) && !isset($_SESSION["supervisor-auth"])) {
    header("Location: ../../../");
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
        <link rel="stylesheet" href="../../../../assets/styles/output.css">
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
                    <a href="../../../home/">Dashboard</a>
                </div>
                <div class="border border-white rounded-md px-5 py-2 bg-orange-700 hover:bg-orange-500">
                    <a href="../../../../server/src/logout-route.php">Sair</a>
                </div>
            </div>
        </header>
        <section class="bg-white laptop:w-1/2 mobile:w-[90%] mx-auto laptop:mt-14 mobile:mt-7 rounded-md p-2">
            <?php
            if (isset($_SESSION['update-message'])) {

                if ($_SESSION["update-status"]) {
                    echo "<div class='bg-red-500 text-white font-semibold flex justify-center my-6 px-2 py-4'>";
                    echo $_SESSION['update-message'];
                    unset($_SESSION['update-message']);
                    unset($_SESSION["update-status"]);
                    echo "</div>";
                } else {
                    echo "<div class='bg-green-500 text-white font-semibold flex justify-center my-6 px-2 py-4'>";
                    echo $_SESSION['update-message'];
                    unset($_SESSION['update-message']);
                    unset($_SESSION["update-status"]);
                    echo "</div>";
                }
            }
            ?>
            <div class="bg-orange-700 w-fit text-white font-normal rounded-md px-2 py-1 mx-auto">
                <a href="../../">Ver listas</a>
            </div>
        </section>
        <footer>
            <?php include "../../../components/footer.php" ?>
        </footer>

        <script src="../../../../assets/scripts/jquery-3.6.0.js"></script>
        <script>
            setInterval(function() {
                $.get("../../../../server/src/session-timeout.php", function(data) {
                    console.log(data);
                    if (data == 0) {
                        window.location.href = "../../../../server/src/logout-route.php";
                    }
                });
            }, 1000);
        </script>
    </body>

    </html>

<?php
}
?>