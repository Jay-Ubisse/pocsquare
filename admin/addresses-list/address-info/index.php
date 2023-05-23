<?php
require "../../../server/config/connect.php";
session_start();

if (!isset($_SESSION["admin-auth"]) && isset($_SESSION["tech-auth"])) {
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

    <body class="bg-gray-200 p-0">
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
        <main class="bg-slate-300 w-[75%] mx-auto my-10 mb-20 p-4 rounded-md text-slate-800">
            <h1 class="font-bold text-lg">Informações do Enderenço</h1>
            <hr class="w-40 bg-orange-700 h-[3px] mb-10 mt-1 font-extrabold rounded" />
            <p class="mb-5"><span class="font-semibold">ID da Entidade:</span><span></span></p>
            <h2 class="font-semibold text-lg mt-4">Entidades administrativas</h2>
            <hr class="w-40 bg-orange-700 h-[2px] mb-10 mt-1 font-extrabold rounded" />
            <div class="grid grid-cols-4 justify-items-center">
                <div class="mb-3 flex flex-col gap-2">
                    <span class="font-semibold">Província: </span><span><?php echo $_SESSION["province"];  ?></span>
                </div>
                <div class="mb-3 flex flex-col gap-2">
                    <span class="font-semibold">Distrito: </span><span><?php echo $_SESSION["district"];  ?></span></div>
                <div class="mb-3 flex flex-col gap-2">
                    <span class="font-semibold">P. Administrativo:</span><span><?php echo $_SESSION["administrative_post"];  ?></span>
                </div>
                <div class="mb-3 flex flex-col gap-2">
                    <span class="font-semibold">Localidade ou Bairro:</span><span><?php echo $_SESSION["neighborhood_locality"];  ?></span>
                </div>
            </div>
            <h2 class="font-semibold text-lg mt-4">Entidades Locais</h2>
            <hr class="w-40 bg-orange-700 h-[2px] mb-10 mt-1 font-extrabold rounded" />
            <div class="grid grid-cols-1 justify-items-start">
                <div class="mb-3 flex flex-row gap-2">
                    <span class="font-semibold">Célula/Circulo/Vila/Zona/Povoação:</span><span><?php echo $_SESSION["cell"];  ?></span>
                </div>
            </div>
            <h2 class="font-semibold text-lg mt-4">Entidades Patrimoniais/Vias</h2>
            <hr class="w-40 bg-orange-700 h-[2px] mb-10 mt-1 font-extrabold rounded" />
            <div class="grid grid-cols-4 justify-items-center">
                <div class="mb-3 flex flex-col gap-2">
                    <span class="font-semibold">Tipo de Propriedade: </span><span><?php echo $_SESSION["property_type"];  ?></span>
                </div>
                <div class="mb-3 flex flex-col gap-2">
                    <span class="font-semibold">Andar: </span><span><?php echo $_SESSION["floor"];  ?></span>
                </div>
                <div class="mb-3 flex flex-col gap-2">
                    <span class="font-semibold">Lado: </span><span><?php echo $_SESSION["side"];  ?></span>
                </div>
                <div class="mb-3">
                    <span class="font-semibold">Tipo de Via: </span><span><?php echo $_SESSION["road_type"];  ?></span>
                </div>
                 <div class="mb-3 flex flex-col gap-2">
                    <span class="font-semibold">Nome/Número da Via: </span><span><?php echo $_SESSION["road_name"];  ?></span>
                </div>
                <div class="mb-3 flex flex-col gap-2">
                    <span class="font-semibold">Impasse: </span><span><?php echo $_SESSION["stalemate"];  ?></span>
                </div>
                <div class="mb-3">
                    <span class="font-semibold">Viaduto: </span><span><?php echo $_SESSION["viaduct"];  ?></span>
                </div>
                <div class="mb-3 flex flex-col gap-2">
                    <span class="font-semibold">Quadra: </span><span><?php echo $_SESSION["block"];  ?></span>
                </div>
                <div class="mb-3 flex flex-col gap-2">
                    <span class="font-semibold">Rotunda: </span><span><?php echo $_SESSION["roundabout"];  ?></span>
                </div>
                <div class="mb-3 flex flex-col gap-2">
                    <span class="font-semibold">Travessas: </span><span><?php echo $_SESSION["lane"];  ?></span>
                </div>
                <div class="mb-3 flex flex-col gap-2">
                    <span class="font-semibold">Largos: </span><span><?php echo $_SESSION["wide"];  ?></span>
                </div>
                <div class="mb-3 flex flex-col gap-2">
                    <span class="font-semibold">Pontes: </span><span><?php echo $_SESSION["bridges"];  ?></span>
                </div>
                 <div class="mb-3 flex flex-col gap-2">
                    <span class="font-semibold">Praças: </span><span><?php echo $_SESSION["plaza"];  ?></span>
                </div>
                <div class="mb-3 flex flex-col gap-2">
                    <span class="font-semibold">Comprimento (metros): </span><span><?php echo $_SESSION["length"];  ?></span>
                </div>
                <div class="mb-3 flex flex-col gap-2">
                    <span class="font-semibold">Largura (metros): </span><span><?php echo $_SESSION["width"];  ?></span>
                </div>
                <div class="mb-3 flex flex-col gap-2">
                    <span class="font-semibold">Ocupação: </span><span><?php echo $_SESSION["occupancy"];  ?></span>
                </div>
                <div class="mb-3 flex flex-col gap-2">
                    <span class="font-semibold">Afetação: </span><span><?php echo $_SESSION["affectation"];  ?></span>
                </div>
            </div>
            <h2 class="font-semibold text-lg mt-4">Entidades Postais</h2>
            <hr class="w-40 bg-orange-700 h-[2px] mb-10 mt-1 font-extrabold rounded" />
            <div class="grid grid-cols-4 justify-items-center">
                <div class="mb-3 flex flex-col gap-2">
                    <span class="font-semibold">Quarteirão: </span><span><?php echo $_SESSION["city_block"];  ?></span>
                </div>
                <div class="mb-3 flex flex-col gap-2">
                    <span class="font-semibold">Lateral: </span><span><?php echo $_SESSION["lateral"];  ?></span>
                </div>
                <div class="mb-3 flex flex-col gap-2">
                    <span class="font-semibold">Entrada: </span><span><?php echo $_SESSION["entry"];  ?></span>
                </div>
                <div class="mb-3 flex flex-col gap-2">
                    <span class="font-semibold">Caixa Postal: </span><span><?php echo $_SESSION["mailbox"];  ?></span>
                </div>
                 <div class="mb-3 flex flex-col gap-2">
                    <span class="font-semibold">Estacão de correios: </span><span><?php echo $_SESSION["post_office"];  ?></span>
                </div>
            </div>
            <h2 class="font-semibold text-lg mt-4">Entidades Espaciais</h2>
            <hr class="w-40 bg-orange-700 h-[2px] mb-10 mt-1 font-extrabold rounded" />
            <div class="grid grid-cols-4 justify-items-center">
                <div class="mb-3 flex flex-col gap-2">
                    <span class="font-semibold">Latitude: </span><span><?php echo $_SESSION["latitude"];  ?></span>
                </div>
                <div class="mb-3 flex flex-col gap-2">
                    <span class="font-semibold">Latitude DMS: </span><span><?php echo $_SESSION["latitude_dms"];  ?></span>
                </div>
                <div class="mb-3 flex flex-col gap-2">
                    <span class="font-semibold">Longetude: </span><span><?php echo $_SESSION["longitude"];  ?></span>
                </div>
                <div class="mb-3 flex flex-col gap-2">
                    <span class="font-semibold">Longitude DMS: </span><span><?php echo $_SESSION["longitude_dms"];  ?></span>
                </div>
                <div class="mb-3 flex flex-col gap-2">
                    <span class="font-semibold">Elevação do Mar: </span><span><?php echo $_SESSION["sea_rise"];  ?></span>
                </div>
                <div class="mb-3 flex flex-col gap-2">
                    <span class="font-semibold">Via Lat Start: </span><span><?php echo $_SESSION["via_lat_start"];  ?></span>
                </div>
                <div class="mb-3 flex flex-col gap-2">
                    <span class="font-semibold">Via Lat End: </span><span><?php echo $_SESSION["via_lat_end"];  ?></span>
                </div>
            </div>
            <h2 class="font-semibold text-lg mt-4">Entidades Complementares</h2>
            <hr class="w-40 bg-orange-700 h-[2px] mb-10 mt-1 font-extrabold rounded" />
            <div class="grid grid-cols-4 justify-items-center">
                <div class="mb-3 flex flex-col gap-2">
                    <span class="font-semibold">Número de Contato: </span><span><?php echo $_SESSION["contact_number"];  ?></span>
                </div>
                <div class="mb-3 flex flex-col gap-2">
                    <span class="font-semibold">Email: </span><span><?php echo $_SESSION["email"];  ?></span>
                </div>
                <div class="mb-3 flex flex-col gap-2">
                    <span class="font-semibold">Website: </span><span><?php echo $_SESSION["website"];  ?></span>
                </div>
            </div>
            <p class="mt-5"><span class="font-semibold">Responsável pelo cadastro: </span><span><?php echo $_SESSION["responsible"];  ?></span></p>
        </main>
        <footer>
            <?php include "../../components/footer.php" ?>
        </footer>

        <script src="../../../assets/scripts/jquery-3.6.0.js"></script>
        <script>
            //timing de inactividade para o logout
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