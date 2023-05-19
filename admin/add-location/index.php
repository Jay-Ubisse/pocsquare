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
                        <div class="flex flex-col gap-1">
                            <select name="area" onchange="getFieldsByQuantity()" class="fieldQuant border mb-4 py-1 border-orange-700 focus:outline-none outline-none rounded">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                        <div class="flex flex-col gap-1 mb-8">
                            <select name="area" onchange="changeInputField()" class="areaOption border mb-4 py-1 border-orange-700 focus:outline-none outline-none rounded">
                                <option value="district">Distrito</option>
                                <option value="admin_post">Posto Administrativo</option>
                                <option value="neighborhood_locality">Bairro</option>
                                <option value="locality">Localidade</option>
                                <option value="cell">Célula</option>
                                <option value="circle">Círculo</option>
                                <option value="village">Vila</option>
                                <option value="zone">Zona</option>
                                <option value="township">Povoação</option>
                            </select>
                            <hr class="h-[2px] bg-orange-700 border-0">
                        </div>
                        <div class="input-section flex flex-col gap-4">
                            <!-- Field added using ajax -->
                        </div>
                        <div class="gap-5 w-fit mx-auto mt-10">
                            <input type="submit" value="Adicionar" class="bg-orange-700 rounded-md text-white font-medium px-4 py-2">
                        </div>
                    </form>
                </div>
                <div class="flex justify-center font-semibold text-lg text-slate-700 mx-3">
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
        "use strict";

        //mostrar campos dos distritos na primeira renderização da pagina
        $(".heading").text("Adicionar Distrito");
        $(".input-section").load("./components/district.html");

        //variáveis para armazenar a região e província escolhidos (Ininialmente
        //Distrito e Maputo Cidade respectivamente)
        let region = "district";

        //funcao para mudar a região escolhida e mostrar os campos da regiao correspondente
        function changeInputField() {
            let selectedValue = $(".areaOption").val();
            switch (selectedValue) {
                case "district":
                    $(".heading").text("Adicionar Distrito");
                    $(".input-section").load("./components/district.html");

                    region = selectedValue;
                    break;
                case "admin_post":
                    $(".heading").text("Adicionar Posto Administrativo");
                    $(".input-section").load("./components/admin-post.html");

                    region = selectedValue;
                    break;
                case "neighborhood_locality":
                    $(".heading").text("Adicionar Bairro");
                    $(".input-section").load("./components/neighborhood.html");

                    region = selectedValue;
                    break;
                case "cell":
                    $(".heading").text("Adicionar Célula");
                    $(".input-section").load("./components/cell.html");

                    region = selectedValue;
                    break;
                case "circle":
                    $(".heading").text("Adicionar Círculo");
                    $(".input-section").load("./components/circle.html");

                    region = selectedValue;
                    break;
                case "village":
                    $(".heading").text("Adicionar Vila");
                    $(".input-section").load("./components/village.html");

                    region = selectedValue;
                    break;
                case "zone":
                    $(".heading").text("Adicionar Zona");
                    $(".input-section").load("./components/zone.html");

                    region = selectedValue;
                    break;
                case "township":
                    $(".heading").text("Adicionar Povoação");
                    $(".input-section").load("./components/township.html");

                    region = selectedValue;
                    break;

                default:
                    break;
            }
        }
        
        //função para mostrar diferentes números de campos, conforme selecionado.
        function getFieldsByQuantity() {
            let quant = $(".fieldQuant").val();
            switch (quant) {
                case "1":
                    $("#one").css({"display": "flex"});
                    $("#two").css({"display": "none"});
                    $("#three").css({"display": "none"});
                    $("#four").css({"display": "none"});
                    $("#five").css({"display": "none"});
                    $("#six").css({"display": "none"});
                    $("#seven").css({"display": "none"});
                    $("#eight").css({"display": "none"});
                    $("#nine").css({"display": "none"});
                    $("#ten").css({"display": "none"});
                    break;
                case "2":
                    $("#one").css({"display": "flex"});
                    $("#two").css({"display": "flex"});
                    $("#three").css({"display": "none"});
                    $("#four").css({"display": "none"});
                    $("#five").css({"display": "none"});
                    $("#six").css({"display": "none"});
                    $("#seven").css({"display": "none"});
                    $("#eight").css({"display": "none"});
                    $("#nine").css({"display": "none"});
                    $("#ten").css({"display": "none"});
                    break;
                case "3":
                    $("#one").css({"display": "flex"});;
                    $("#two").css({"display": "flex"});;
                    $("#three").css({"display": "flex"});;
                    $("#four").css({"display": "none"});
                    $("#five").css({"display": "none"});
                    $("#six").css({"display": "none"});
                    $("#seven").css({"display": "none"});
                    $("#eight").css({"display": "none"});
                    $("#nine").css({"display": "none"});
                    $("#ten").css({"display": "none"});
                    break;
                case "4":
                    $("#one").css({"display": "flex"});;
                    $("#two").css({"display": "flex"});;
                    $("#three").css({"display": "flex"});;
                    $("#four").css({"display": "flex"});;
                    $("#five").css({"display": "none"});
                    $("#six").css({"display": "none"});
                    $("#seven").css({"display": "none"});
                    $("#eight").css({"display": "none"});
                    $("#nine").css({"display": "none"});
                    $("#ten").css({"display": "none"});
                    break;
                case "5":
                    $("#one").css({"display": "flex"});;
                    $("#two").css({"display": "flex"});;
                    $("#three").css({"display": "flex"});;
                    $("#four").css({"display": "flex"});;
                    $("#five").css({"display": "flex"});;
                    $("#six").css({"display": "none"});
                    $("#seven").css({"display": "none"});
                    $("#eight").css({"display": "none"});
                    $("#nine").css({"display": "none"});
                    $("#ten").css({"display": "none"});
                    break;
                case "6":
                    $("#one").css({"display": "flex"});;
                    $("#two").css({"display": "flex"});;
                    $("#three").css({"display": "flex"});;
                    $("#four").css({"display": "flex"});;
                    $("#five").css({"display": "flex"});;
                    $("#six").css({"display": "flex"});;
                    $("#seven").css({"display": "none"});
                    $("#eight").css({"display": "none"});
                    $("#nine").css({"display": "none"});
                    $("#ten").css({"display": "none"});
                    break;
                case "7":
                    $("#one").css({"display": "flex"});;
                    $("#two").css({"display": "flex"});;
                    $("#three").css({"display": "flex"});;
                    $("#four").css({"display": "flex"});;
                    $("#five").css({"display": "flex"});;
                    $("#six").css({"display": "flex"});;
                    $("#seven").css({"display": "flex"});;
                    $("#eight").css({"display": "none"});
                    $("#nine").css({"display": "none"});
                    $("#ten").css({"display": "none"});
                    break;
                case "8":
                    $("#one").css({"display": "flex"});;
                    $("#two").css({"display": "flex"});;
                    $("#three").css({"display": "flex"});;
                    $("#four").css({"display": "flex"});;
                    $("#five").css({"display": "flex"});;
                    $("#six").css({"display": "flex"});;
                    $("#seven").css({"display": "flex"});;
                    $("#eight").css({"display": "flex"});;
                    $("#nine").css({"display": "none"});
                    $("#ten").css({"display": "none"});
                    break;
                case "9":
                    $("#one").css({"display": "flex"});;
                    $("#two").css({"display": "flex"});;
                    $("#three").css({"display": "flex"});;
                    $("#four").css({"display": "flex"});;
                    $("#five").css({"display": "flex"});;
                    $("#six").css({"display": "flex"});;
                    $("#seven").css({"display": "flex"});;
                    $("#eight").css({"display": "flex"});;
                    $("#nine").css({"display": "flex"});;
                    $("#ten").css({"display": "none"});
                    break;
                case "10":
                    $("#one").css({"display": "flex"});;
                    $("#two").css({"display": "flex"});;
                    $("#three").css({"display": "flex"});;
                    $("#four").css({"display": "flex"});;
                    $("#five").css({"display": "flex"});;
                    $("#six").css({"display": "flex"});;
                    $("#seven").css({"display": "flex"});;
                    $("#eight").css({"display": "flex"});;
                    $("#nine").css({"display": "flex"});;
                    $("#ten").css({"display": "flex"});;
                    break;
                default:
                    break;
            }

        }

        //código da submissão do formulário
        $(".manual-form").submit(function(event) {

            $.post("../../server/src/add-location/add-location.php", {
                    inputRegion: region,

                    provinceOne: $('.provinceOne').val(),
                    provinceTwo: $('.provinceTwo').val(),
                    provinceThree: $('.provinceThree').val(),
                    provinceFour: $('.provinceFour').val(),
                    provinceFive: $('.provinceFive').val(),
                    provinceSix: $('.provinceSix').val(),
                    provinceSeven: $('.provinceSeven').val(),
                    provinceEight: $('.provinceEight').val(),
                    provinceNine: $('.provinceNine').val(),
                    provinceTen: $('.provinceTen').val(),

                    regionOne: $(".inputOne").val(),
                    regionTwo: $(".inputTwo").val(),
                    regionThree: $(".inputThree").val(),
                    regionFour: $(".inputFour").val(),
                    regionFive: $(".inputFive").val(),
                    regionSix: $(".inputSix").val(),
                    regionSeven: $(".inputSeven").val(),
                    regionEight: $(".inputEight").val(),
                    regionNine: $(".inputNine").val(),
                    regionTen: $(".inputTen").val(),

                    idOne: $(".idOne").val(),
                    idTwo: $(".idTwo").val(),
                    idThree: $(".idThree").val(),
                    idFour: $(".idFour").val(),
                    idFive: $(".idFive").val(),
                    idSix: $(".idSix").val(),
                    idSeven: $(".idSeven").val(),
                    idEight: $(".idEight").val(),
                    idNine: $(".idNine").val(),
                    idTen: $(".idTen").val(),
                },
                function(response) {
                    //response.includes("foi")
                    if (Number(response) === 0) {
                        $(".manual-status-info").css({
                            "display": "flex",
                            "background-color": "rgb(220, 38, 38)",
                        });
                    } else {
                        $(".manual-status-info").css({
                            "display": "flex",
                            "background-color": "rgb(22, 163, 74)",
                        });
                    }
                    let message = Number(response) + " linhas adicionadas."
                    $(".manual-status-info").text(message);
                }
            );

            event.preventDefault();
        });
    </script>
</body>

</html>