<?php
require "../../server/config/connect.php";
session_start();

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
    <title>Adicionar Local | Pocsquare</title>
    <link rel="stylesheet" href="../../assets/styles/output.css" />
    <script src="https://kit.fontawesome.com/4b43862993.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <?php include "../components/header.php"; ?>
    </header>
    <main class="bg-gray-200 p-1 h-[calc(100vh-100px)] relative overflow-scroll">
        <section class="bg-white h-fit mx-auto p-6 rounded-lg laptop:mt-20 mobile:mt-20 laptop:w-3/5 mobile:w-[95%]">
            <div class="flex laptop:flex-row mobile:flex-col mobile:gap-2 laptop:justify-around">
                <div class="bg-slate-200 p-4 rounded-md">
                    <div>
                        <h1 class="heading text-orange-700 text-base font-semibold border-b border-orange-700 w-fit mb-5">
                            <!-- Heading added using ajax -->
                        </h1>
                    </div>
                    <div class='manual-status-info flex gap-2 bg-yellow-500 text-white font-semibold justify-center my-6 py-4'>
                        <span><i class="fa-solid fa-triangle-exclamation"></i></span><span> Área em Manutenção</span>
                    </div>

                    <!-- Form submitted using ajax -->
                    <form method="POST" action="" class="manual-form mt-10">
                        <div class="flex flex-col gap-1 mb-8">
                            <select name="area" onchange="changeInputField()" class="areaOption border mb-4 py-1 border-orange-700 focus:outline-none outline-none rounded">
                                <option value="district">Distrito</option>
                                <option value="admin-post">Posto Administrativo</option>
                                <option value="neighborhood">Bairro</option>
                                <option value="locality">Localidade</option>
                                <option value="cell">Célula</option>
                                <option value="circle">Círculo</option>
                                <option value="village">Vila</option>
                                <option value="zone">Zona</option>
                                <option value="township">Povoação</option>
                            </select>
                            <hr class="h-px bg-orange-700 border-0">
                        </div>
                        <div class="flex flex-col gap-4">
                            <div class="flex flex-col gap-2">
                                <label for="province" class="font-medium">Província</label>
                                <select name="province" onchange="changeProvinceName()" class="provinceOption border border-orange-700 focus:outline-none outline-none rounded">
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
                            <div class="flex flex-col gap-2">
                                <label for="id" class="font-medium">ID</label>
                                <input type="text" name="id" required class="id border border-orange-700 focus:outline-none outline-none rounded px-2">
                            </div>
                            <div class="input-section flex flex-col gap-2">
                                <!-- Field added using ajax -->
                            </div>
                        </div>
                        <div class="gap-5 w-fit mx-auto mt-10">
                            <input type="submit" value="Adicionar" class="bg-orange-700 rounded-md text-white font-medium px-4 py-2">
                        </div>
                    </form>
                </div>
                <div class="flex justify-center items-center font-semibold text-lg text-slate-700 mx-3">
                    OU
                </div>
                <div class="bg-slate-200 p-4 rounded-md h-fit">
                    <div>
                        <h1 class="text-orange-700 text-base font-semibold border-b border-orange-700 w-fit mb-5">
                            Importar ficheiro Excel
                        </h1>
                    </div>
                    <?php
                    if (isset($_SESSION["import-status"])) {

                        if ($_SESSION["successful-status"] == "ok") {
                            echo "<div class='bg-green-500 text-white font-semibold flex justify-center my-6 px-2 py-4'>";
                            echo $_SESSION["import-status"];
                            unset($_SESSION["import-status"]);
                            echo "</div>";
                        }
                        if ($_SESSION["successful-status"] == "error") {
                            echo "<div class='bg-red-500 text-white font-semibold flex justify-center my-6 px-2 py-4'>";
                            echo $_SESSION["import-status"];
                            unset($_SESSION["import-status"]);
                            echo "</div>";
                        }
                        if ($_SESSION["successful-status"] == "not ok") {
                            echo "<div class='bg-yellow-500 text-white font-semibold flex justify-center my-6 px-2 py-4'>";
                            echo $_SESSION["import-status"];
                            unset($_SESSION["import-status"]);
                            echo "</div>";
                        }
                    }
                    ?>

                    <form method="POST" action="../../server/src/add-location/add-location-by-excel.php" enctype="multipart/form-data" class="excel-form mt-10">
                        <div class="flex flex-col gap-3">
                            <label for="excel-file" class="font-medium">Carregar ficheiro</label>
                            <input type="file" name="excel-file" required autocomplete="off" class="excel-field border border-orange-700 px-2 w-60 focus:outline-none outline-none rounded" />
                        </div>
                        <div class="gap-5 w-fit mx-auto mt-10">
                            <input type="submit" name="import-excel" value="Carregar" class="bg-orange-700 rounded-md text-white font-medium px-4 py-2">
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <?php include "../components/footer.php" ?>
    </footer>

    <script src="../../assets/scripts/jquery-3.6.0.js"></script>
    <script src="../../assets/scripts/admin/session-timeout.js"></script>
    <script>
        $(".heading").text("Adicionar Distrito");
        $(".input-section").load("./components/district.html");
        let region = "district";
        let province = "Maputo Cidade"

        function changeInputField() {
            let selectedValue = $(".areaOption").val();
            switch (selectedValue) {
                case "district":
                    $(".heading").text("Adicionar Distrito");
                    $(".input-section").load("./components/district.html");

                    region = "district";
                    break;
                case "admin-post":
                    $(".heading").text("Adicionar Posto Administrativo");
                    $(".input-section").load("./components/admin-post.html");

                    region = "admin-post";
                    break;
                case "neighborhood":
                    $(".heading").text("Adicionar Bairro");
                    $(".input-section").load("./components/neighborhood.html");

                    region = "neighborhood";
                    break;
                case "locality":
                    $(".heading").text("Adicionar Localidade");
                    $(".input-section").load("./components/locality.html");

                    region = "locality";
                    break;
                case "cell":
                    $(".heading").text("Adicionar Célula");
                    $(".input-section").load("./components/cell.html");

                    region = "cell";
                    break;
                case "circle":
                    $(".heading").text("Adicionar Círculo");
                    $(".input-section").load("./components/circle.html");

                    region = "circle";
                    break;
                case "village":
                    $(".heading").text("Adicionar Vila");
                    $(".input-section").load("./components/village.html");

                    region = "village";
                    break;
                case "zone":
                    $(".heading").text("Adicionar Zona");
                    $(".input-section").load("./components/zone.html");

                    region = "zone";
                    break;
                case "township":
                    $(".heading").text("Adicionar Povoação");
                    $(".input-section").load("./components/township.html");

                    region = "township";
                    break;

                default:
                    break;
            }
        }

        function changeProvinceName() {
            province = $(".provinceOption").val();

        }

        /*
        $(".manual-form").submit(function(event) {

            $.post("../../server/src/add-location/add-location.php", {
                    inputRegion: region,
                    inputProvince: province,
                    inputRegionName: $(".input-field").val(),
                    inputId: $(".id").val(),
                },
                function(response) {
                    if (response.includes("foi")) {
                        $(".manual-status-info").css({
                            "display": "flex",
                            "background-color": "rgb(220, 38, 38)",
                        });
                    }
                    if (response.includes("sucesso")) {
                        $(".manual-status-info").css({
                            "display": "flex",
                            "background-color": "rgb(22, 163, 74)",
                        });
                    }
                    $(".manual-status-info").text(response);
                }
            );

            event.preventDefault();
        });
        */
    </script>
</body>

</html>