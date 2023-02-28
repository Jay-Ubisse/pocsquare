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
    <title>Registar Local | Pocsquare</title>
    <link rel="stylesheet" href="../../assets/styles/output.css" />
    <script src="https://kit.fontawesome.com/4b43862993.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <?php include "../components/header.php"; ?>
    </header>
    <main>
        <form method="POST" action="" class="border-2 border-orange-700 rounded-xl w-4/5 mx-auto mt-10">
        <h1 class="w-fit mx-auto my-5 font-bold text-2xl text-orange-700">Cadastrar Local</h1>
                <fieldset class="border border-orange-700 w-[97%] mx-auto rounded-md flex flex-row justify-evenly py-5 my-5">
                    <legend class="text-lg font-semibold px-4">Entidades Administrativas</legend>
                    <div class="w-[19%] flex flex-col gap-2">
                        <label for="province" class="font-medium">Província</label>
                        <select name="province" class="border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="MC">Maputo Cidade</option>
                            <option value="MP">Maputo Província</option>
                            <option value="GZ">Gaza</option>
                            <option value="IN">Inhambane</option>
                            <option value="MN">Manica</option>
                            <option value="SF">Sofala</option>
                            <option value="Tete">TT</option>
                            <option value="Nampula">NP</option>
                            <option value="ZB">Zambézia</option>
                            <option value="NS">Niassa</option>
                            <option value="CD">Cabo delgado</option>
                        </select>
                    </div>
                    <div class="w-[19%] flex flex-col gap-2">
                        <label for="district" class="font-medium">Distrito</label>
                        <select name="district" class="border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="KaMpfumo">KaMpfumo</option>
                            <option value="Nlhamankulu">Nlhamankulu</option>
                        </select>
                    </div>
                    <div class="w-[19%] flex flex-col gap-2">
                        <label for="administrative_post" class="font-medium">Posto Administrativo</label>
                        <select name="administrative_post" class="border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="mcp1">MC posto 1</option>
                            <option value="mcp2">MC posto 2</option>
                        </select>
                    </div>
                    <div class="w-[19%] flex flex-col gap-2">
                        <label for="locality" class="font-medium">Localidade</label>
                        <select name="locality" class="border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="mcl1">MC Localidade 1</option>
                            <option value="mcl2">MC Localidade 2</option>
                        </select>
                    </div>
                    <div class="w-[19%] flex flex-col gap-2">
                        <label for="neighborhood" class="font-medium">Bairro</label>
                        <select name="neighborhood" class="border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="mcb1">MC Bairro 1</option>
                            <option value="mcb2">MC Bairro 2</option>
                        </select>
                    </div>
                </fieldset>
                <fieldset class="border border-orange-700 w-[97%] mx-auto rounded-md flex flex-row justify-evenly py-5 my-5">
                    <legend class="text-lg font-semibold px-4">Entidades Locais</legend>
                    <div class="w-[19%] flex flex-col gap-2">
                        <label for="cell" class="font-medium">Célula</label>
                        <select name="cell" class="border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="cell1">Célula 1</option>
                            <option value="cell2">Célula 2</option>
                        </select>
                    </div>
                    <div class="w-[19%] flex flex-col gap-2">
                        <label for="circle" class="font-medium">Circulo</label>
                        <select name="circle" class="border border-orange-700 focus:outline-none outline-none rounded">
                            <<option value="circle1">Circulo 1</option>
                            <option value="circle2">CCirculo 2</option>
                        </select>
                    </div>
                    <div class="w-[19%] flex flex-col gap-2">
                        <label for="village" class="font-medium">Vila</label>
                        <select name="village" class="border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="village1">Vila 1</option>
                            <option value="village2">Vila 2</option>
                        </select>
                    </div>
                    <div class="w-[19%] flex flex-col gap-2">
                        <label for="zone" class="font-medium">Zona</label>
                        <select name="zone" class="border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="zone1">Zona 1</option>
                            <option value="zone2">Zona 2</option>
                        </select>
                    </div>
                    <div class="w-[19%] flex flex-col gap-2">
                        <label for="township" class="font-medium">Povoação</label>
                        <select name="township" class="border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="povoacao1">Povoação 1</option>
                            <option value="povoacao2">Povoação 2</option>
                        </select>
                    </div>
                </fieldset>
        </form>
    </main>
    <footer>
        <?php include "../components/footer.php"; ?>
    </footer>
</body>
</html>