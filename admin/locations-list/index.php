<?php
require "../../server/config/connect.php";
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
    <html lang="en" class="scroll-smooth">

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
        <main class="relative p-1 my-10 mb-20 ">
            <section id="search" class="flex flex-row gap-3 items-center border-2 rounded-md border-orange-700 h-fit p-4 w-fit">
                <div>
                    <label for="region" class="font-medium">Região</label>
                    <select name="region" class="regionOptions border border-orange-700 focus:outline-none outline-none rounded">
                        <option value="all">Todos</option>
                        <option value="district">Distrito</option>
                        <option value="admin_post">Posto Administrativo</option>
                        <option value="neighborhood_locality">Bairro ou Localidade</option>
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
                    <button class="search bg-orange-700 rounded-md text-white font-medium px-4 py-1">Buscar</button>
                </div>
            </section>
            <section class="mt-10 w-fit mx-auto">
                <table id="all" class="border-collapse border-2 border-orange-700">

                </table>
            </section>
            <div class="bg-orange-700 h-16 w-16 text-white flex justify-center items-center rounded-[50%] fixed bottom-20 z-20 right-4">
                <a href="#search"><i class="fa-solid fa-arrow-up fa-2x"></i></a>
            </div>
        </main>
        <footer>
            <?php include "../components/footer.php" ?>
        </footer>

        <script src="../../assets/scripts/jquery-3.6.0.js"></script>
        <script>
            $("#all").load(
                "../../server/src/locations-list/locations-list.php", {
                    region: "all",
                    province: "Maputo Cidade",
                }
            );

            $(".search").click(function() {
                let regionValue = $(".regionOptions").val();
                let provinceValue = $(".provinceOptions").val();

                $("#all").load(
                    "../../server/src/locations-list/locations-list.php", {
                        region: regionValue,
                        province: provinceValue,
                    }
                );

            });

            function sendInfoForEdit(data) {
                let dataArray = data.split(",");

                switch (dataArray[0]) {
                    case "district-data":
                        $.post("../../server/src/edit-location/edit-route.php", {
                                id: dataArray[1],
                                district: dataArray[2],
                                region: "district",
                            },
                            function() {
                                location.href = "./edit-location/";
                            }
                        );
                        break;
                    case "admin-post-data":
                        $.post("../../server/src/edit-location/edit-route.php", {
                                id: dataArray[1],
                                district: dataArray[2],
                                adminPost: dataArray[3],
                                region: "admin_post",
                            },
                            function() {
                                location.href = "./edit-location/";
                            }
                        );
                        break;
                    case "neighborhood-data":
                        $.post("../../server/src/edit-location/edit-route.php", {
                                id: dataArray[1],
                                district: dataArray[2],
                                adminPost: dataArray[3],
                                neighborhood: dataArray[4],
                                region: "neighborhood_locality",
                            },
                            function() {
                                location.href = "./edit-location/";
                            }
                        );
                        break;
                    case "cell-data":
                        $.post("../../server/src/edit-location/edit-route.php", {
                                id: dataArray[1],
                                district: dataArray[2],
                                adminPost: dataArray[3],
                                neighborhood: dataArray[4],
                                cell: dataArray[5],
                                region: "cell",
                            },
                            function() {
                                location.href = "./edit-location/";
                            }
                        );
                        break;
                    case "circle-data":
                        $.post("../../server/src/edit-location/edit-route.php", {
                                id: dataArray[1],
                                district: dataArray[2],
                                adminPost: dataArray[3],
                                neighborhood: dataArray[4],
                                circle: dataArray[5],
                                region: "circle",
                            },
                            function() {
                                location.href = "./edit-location/";
                            }
                        );
                        break;
                    case "village-data":
                        $.post("../../server/src/edit-location/edit-route.php", {
                                id: dataArray[1],
                                district: dataArray[2],
                                adminPost: dataArray[3],
                                neighborhood: dataArray[4],
                                village: dataArray[5],
                                region: "village",
                            },
                            function() {
                                location.href = "./edit-location/";
                            }
                        );
                        break;
                    case "township-data":
                        $.post("../../server/src/edit-location/edit-route.php", {
                                id: dataArray[1],
                                district: dataArray[2],
                                adminPost: dataArray[3],
                                neighborhood: dataArray[4],
                                township: dataArray[5],
                                region: "township",
                            },
                            function() {
                                location.href = "./edit-location/";
                            }
                        );
                        break;
                    case "zone-data":
                        $.post("../../server/src/edit-location/edit-route.php", {
                                id: dataArray[1],
                                district: dataArray[2],
                                adminPost: dataArray[3],
                                neighborhood: dataArray[4],
                                zone: dataArray[5],
                                region: "zone",
                            },
                            function() {
                                location.href = "./edit-location/";
                            }
                        );
                        break;
                    default:
                        break;
                }

            }

            function sendDataForDeletion(data) {
                let isConfirmed = confirm("Tem certeza que deseja eliminar?");

                if (isConfirmed) {
                    let dataArray = data.split(",");
                    $.post("../../server/src/delete-location/delete-location.php", {
                            id: dataArray[0],
                            table: dataArray[1],
                        },
                        function(response) {
                            if (response) {
                                alert("Eliminado com sucesso.");
                                location.reload();
                            } else {
                                alert("Ocorreu um erro ao eliminar.\nTente de novo.");
                                location.reload();
                            }
                        }
                    );
                }
            }
        </script>
        <script src="../../assets/scripts/admin/session-timeout.js"></script>
    </body>

    </html>

<?php
}
?>