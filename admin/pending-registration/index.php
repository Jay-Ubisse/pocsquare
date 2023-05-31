<?php
require "../../server/config/connect.php";
include "../../server/src/add-location/location-rows.php";
session_start();

if (!isset($_SESSION["admin-auth"]) && !isset($_SESSION["tech-auth"]) && !isset($_SESSION["supervisor-auth"])) {
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
        <title>Cadastrar Funcionário | Pocsquare</title>
        <link rel="stylesheet" href="../../assets/styles/output.css" />
        <script src="https://kit.fontawesome.com/4b43862993.js" crossorigin="anonymous"></script>
    </head>

    <body>
        <header>
            <?php include "../components/header.php"; ?>
        </header>
        <main class="p-1 flex flex-row justify-evenly">
            <section class="mt-10 w-[74%] mx-auto">
                <table id="all" class="border-collapse border-2 border-orange-700">

                </table>
            </section>
        </main>
        <footer>
            <?php include "../components/footer.php"; ?>
        </footer>

        <script src="../../assets/scripts/jquery-3.6.0.js"></script>
        <script src="../../assets/scripts/admin/session-timeout.js"></script>
        <script>
            $("#all").load("../../server/src/pending-registration/all.php");

            function activateAccount(data) {
                $.post("../../server/src/activate-account.php", {
                        id: data,
                    },
                    function(response) {
                        location.reload();
                        //alert(response);
                    }
                );

            }

            function deactivateAccount(data) {
                $.post("../../server/src/deactivate-account.php", {
                        id: data,
                    },
                    function(response) {
                        location.reload();
                        //alert(response);
                    }
                );

            }
        </script>
    </body>

    </html>
<?php
}
?>