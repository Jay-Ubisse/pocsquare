<?php
require "../../server/config/connect.php";
session_start();

if (!isset($_SESSION["admin-auth"])) {
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
        <title>Adicionar Distrito | Pocsquare</title>
        <link rel="stylesheet" href="../../assets/styles/output.css" />
        <script src="https://kit.fontawesome.com/4b43862993.js" crossorigin="anonymous"></script>
    </head>

    <body>
        <header>
            <?php include "../components/header.php"; ?>
        </header>
        <main class="p-1 flex flex-row justify-evenly">
            <section class="mt-10 w-fit">
                <table id="all" class="border-collapse border-2 border-orange-700">

                </table>
            </section>
            <section class="border-2 rounded-md border-orange-700 h-fit p-4 w-[23%] mt-10">
                <div>
                    <label for="region" class="font-medium">Região</label>
                    <select name="region" class="regionOptions border mb-4 border-orange-700 focus:outline-none outline-none rounded">
                        <option value="district">Distrito</option>
                        <option value="admin_post">Posto Administrativo</option>
                        <option value="neighborhood">Bairro</option>
                        <option value="locality">Localidade</option>
                        <option value="cell">Célula</option>
                        <option value="circle">Círculo</option>
                        <option value="village">Vila</option>
                        <option value="zone">Zona</option>
                        <option value="township">Povoação</option>
                    </select>
                </div>
                <div>
                    <label for="province" class="font-medium">Província</label>
                    <select name="province" class="provinceOptions border border-orange-700 focus:outline-none outline-none rounded">
                        <option value="Maputo Cidade">Maputo Cidade</option>
                        <option value="Maputo Província">Maputo Província</option>
                        <option value="Gaza">Gaza</option>
                        <option value="Inhambane">Inhambane</option>
                        <option value="Manica">Manica</option>
                        <option value="Sofala">Sofala</option>
                        <option value="Tete">Tete</option>
                        <option value="Nampula">Nampula</option>
                        <option value="Niassa">Niassa</option>
                        <option value="Zambézia">Zambézia</option>
                        <option value="Cabo Delgado">Cabo Delgado</option>
                    </select>
                </div>
                <div>
                    <button class="search bg-orange-700 rounded-md text-white font-medium mt-5 px-4 py-1">Buscar</button>
                </div>
            </section>
        </main>
        <footer>
            <?php include "../components/footer.php" ?>
        </footer>

        <script src="../../assets/scripts/jquery-3.6.0.js"></script>
        <script>

            $(".search").click(function () { 
                let regionValue = $(".regionOptions").val();
                let provinceValue = $(".provinceOptions").val();

                console.log(regionValue, provinceValue);

                $("#all").load(
                    "../../server/src/modify-location/location-list/locations-list.php", 
                    {
                        region: regionValue,
                        province: provinceValue,
                    }
                );
                
            });

            function sendInfo(data) {
                let dataArray = data.split(",");
                $.post("../../server/src/modify-location/edit-location/edit-route.php", {
                        province: dataArray[0],
                        data: dataArray[1],
                    },
                    function() {
                        location.href = "./edit-location/";
                    }
                );
            }
        </script>
        <script src="../../assets/scripts/admin/session-timeout.js"></script>
    </body>

    </html>

<?php
}
?>