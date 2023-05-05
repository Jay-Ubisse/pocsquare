<?php
require "../../server/config/connect.php";
session_start();

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
        <div class="absolute top-2 right-4 flex flex-col gap-2">
            <label for="area" class="font-medium">Selecione o que deseja inserir</label>
            <select name="area" id="areaOption" onchange="changeInputField()" class="border border-orange-700 focus:outline-none outline-none rounded">
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
        </div>
        <section class="bg-white h-fit mx-auto p-6 rounded-lg laptop:mt-20 mobile:mt-20 laptop:w-1/2 mobile:w-[95%]">
            <h1 class="heading text-orange-700 text-xl font-semibold border-b border-orange-700 w-fit">
                <!-- Heading added using ajax -->
            </h1>
            <div>
                <?php include "./components/status-message.php"; ?>
            </div>
            <form method="POST" action="" class="mt-10"> <!-- Form submitted using ajax -->
                <div class="flex laptop:flex-row  mobile:flex-col laptop:gap-0 mobile:gap-4 laptop:justify-around">
                    <div>
                        <label for="province" class="font-medium">Província</label>
                        <select name="province" id="provinceOption" onchange="changeProvinceName()" class="border border-orange-700 focus:outline-none outline-none rounded">
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
                    <div class="input-section">
                        <!-- Field added using ajax -->
                    </div>
                </div>
                <div class="gap-5 w-fit mx-auto mt-10">
                    <input type="submit" value="Adicionar" class="bg-orange-700 rounded-md text-white font-medium px-4 py-2">
                </div>
            </form>
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
        let inputName = "district";
        let province = "Maputo Cidade"

        function changeProvinceName() {
            province = $("#provinceOption").val();
            
            /*
            switch (selectedValue) {
                case "Maputo Cidade":

                    break;
                case "Maputo Província":

                    break;
                case "Gaza":

                    break;
                case "Inhambane":

                    break;
                case "cell":

                    break;
                case "Manica":

                    break;
                case "Sofala":

                    break;
                case "Tete":

                    break;
                case "Nampula":

                    break;
                case "Niassa":

                    break;
                case "Zambézia":

                    break;
                case "Cabo Delgado":

                    break;

                default:
                    break;
            } */
        }

        function changeInputField() {
            let selectedValue = $("#areaOption").val();
            switch (selectedValue) {
                case "district":
                    $(".heading").text("Adicionar Distrito");
                    $(".input-section").load("./components/district.html");

                    inputName = "district";
                    break;
                case "admin-post":
                    $(".heading").text("Adicionar Posto Administrativo");
                    $(".input-section").load("./components/admin-post.html");

                    inputName = "admin-post";
                    break;
                case "neighborhood":
                    $(".heading").text("Adicionar Bairro");
                    $(".input-section").load("./components/neighborhood.html");

                    inputName = "neighborhood";
                    break;
                case "locality":
                    $(".heading").text("Adicionar Localidade");
                    $(".input-section").load("./components/locality.html");

                    inputName = "locality";
                    break;
                case "cell":
                    $(".heading").text("Adicionar Célula");
                    $(".input-section").load("./components/cell.html");

                    inputName = "cell";
                    break;
                case "circle":
                    $(".heading").text("Adicionar Círculo");
                    $(".input-section").load("./components/circle.html");

                    inputName = "circle";
                    break;
                case "village":
                    $(".heading").text("Adicionar Vila");
                    $(".input-section").load("./components/village.html");

                    inputName = "village";
                    break;
                case "zone":
                    $(".heading").text("Adicionar Zona");
                    $(".input-section").load("./components/zone.html");

                    inputName = "zone";
                    break;
                case "township":
                    $(".heading").text("Adicionar Povoação");
                    $(".input-section").load("./components/township.html");

                    inputName = "township";
                    break;

                default:
                    break;
            }
        }

        $("form").submit(function(event) {
//../../server/src/add-location/add-location.php
            $.post("../../server/src/add-location/add-location.php", {
                    inputArea: inputName,
                    inputProvince: province,
                    inputData: $(".input-field").val(),
                },
                function(response) {
                    console.log(response);
                }
            );

            event.preventDefault();
        });
    </script>
</body>

</html>