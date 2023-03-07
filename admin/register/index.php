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
        <form method="post" action="../../server/src/register.php" class="border-2 border-orange-700 rounded-xl w-4/5 mx-auto mt-10">
        <h1 class="w-fit mx-auto my-5 font-bold text-2xl text-orange-700">Cadastrar Local</h1>
                <fieldset class="border border-orange-700 w-[97%] mx-auto rounded-md flex flex-row justify-evenly py-5 my-5">
                    <legend class="text-lg font-semibold px-4">Entidades Administrativas</legend>
                    <div class="w-[19%] flex flex-col gap-2">
                        <label for="province" class="font-medium">Província</label>
                        <select name="province" onchange="toggleFields()" id="province" class="border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="MP">Maputo Província</option>
                            <option value="GZ">Gaza</option>
                            <option value="IN">Inhambane</option>
                        </select>
                    </div>
                    <div class="w-[19%] flex flex-col gap-2">
                        <label for="district" class="font-medium">Distrito</label>
                        <select name="district" class="mp-field border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="Boane">Boane</option>
                            <option value="Magude">Magude</option>
                        </select>
                        <select name="district" class="gz-field border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="Chibuto">Chibuto</option>
                            <option value="Bilene">Bilene</option>
                        </select>
                        <select name="district" class="in-field border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="Funhalouro">Funhalouro</option>
                            <option value="Govuro">Govuro</option>
                        </select>
                    </div>
                    <div class="w-[19%] flex flex-col gap-2">
                        <label for="administrative_post" class="font-medium">Posto Administrativo</label>
                        <select name="administrative_post" class="mp-field border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="Maputo Província posto 1">Maputo Província posto 1</option>
                            <option value="Maputo Província  posto 2">Maputo Província  posto 2</option>
                        </select>
                        <select name="administrative_post" class="gz-field border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="Gaza posto 1">Gaza posto 1</option>
                            <option value="Gaza posto 2">Gaza posto 2</option>
                        </select>
                        <select name="administrative_post" class="in-field border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="Inhambane posto 1">Inhambane posto 1</option>
                            <option value="Inhambane posto 2">Inhambane posto 2</option>
                        </select>
                    </div>
                    <div class="w-[19%] flex flex-col gap-2">
                        <label for="locality" class="font-medium">Localidade</label>
                        <select name="locality" class="mp-field border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="Maputo Província Localidade 1">Maputo Província Localidade 1</option>
                            <option value="Maputo Província Localidade 2">Maputo Província Localidade 2</option>
                        </select>
                        <select name="locality" class="gz-field border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="Gaza Localidade ">Gaza Localidade 1</option>
                            <option value="Gaza Localidade 2">Gaza Localidade 2</option>
                        </select>
                        <select name="locality" class="in-field border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="Inhambane Localidade 1">Inhambane Localidade 1</option>
                            <option value="Inhambane Localidade 2">Inhambane Localidade 2</option>
                        </select>
                    </div>
                    <div class="w-[19%] flex flex-col gap-2">
                        <label for="neighborhood" class="font-medium">Bairro</label>
                        <select name="neighborhood" class="mp-field border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="Maputo Província Bairro 1">Maputo Província Bairro 1</option>
                            <option value="Maputo Província Bairro 2">Maputo Província Bairro 2</option>
                        </select>
                        <select name="neighborhood" class="gz-field border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="Gaza Bairro 1">Gaza Bairro 1</option>
                            <option value="Gaza Bairro 2">Gaza Bairro 2</option>
                        </select>
                        <select name="neighborhood" class="in-field border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="Inhambane Bairro 1">Inhambane Bairro 1</option>
                            <option value="Inhambane Bairro 2">Inhambane Bairro 2</option>
                        </select>
                    </div>
                </fieldset>
                <fieldset class="border border-orange-700 w-[97%] mx-auto rounded-md flex flex-row justify-evenly py-5 my-5">
                    <legend class="text-lg font-semibold px-4">Entidades Locais</legend>
                    <div class="w-[19%] flex flex-col gap-2">
                        <label for="cell" class="font-medium">Célula</label>
                        <select name="cell" class="mp-field border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="cell1">Maputo Província Célula 1</option>
                            <option value="cell2">Maputo Província Célula 2</option>
                        </select>
                        <select name="cell" class="gz-field border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="cell1">Gaza Célula 1</option>
                            <option value="cell2">Gaza Célula 2</option>
                        </select>
                        <select name="cell" class="in-field border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="cell1">Inhambane Célula 1</option>
                            <option value="cell2">Inhambane Célula 2</option>
                        </select>
                    </div>
                    <div class="w-[19%] flex flex-col gap-2">
                        <label for="circle" class="font-medium">Circulo</label>
                        <select name="circle" class="mp-field border border-orange-700 focus:outline-none outline-none rounded">
                            <<option value="circle1">Maputo Província Circulo 1</option>
                            <option value="circle2">Maputo Província Circulo 2</option>
                        </select>
                        <select name="circle" class="gz-field border border-orange-700 focus:outline-none outline-none rounded">
                            <<option value="circle1">Gaza Circulo 1</option>
                            <option value="circle2">Gaza Circulo 2</option>
                        </select>
                        <select name="circle" class="in-field border border-orange-700 focus:outline-none outline-none rounded">
                            <<option value="circle1">Inhambane Circulo 1</option>
                            <option value="circle2">Inhambane Circulo 2</option>
                        </select>
                    </div>
                    <div class="w-[19%] flex flex-col gap-2">
                        <label for="village" class="font-medium">Vila</label>
                        <select name="village" class="mp-field border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="village1">Maputo Província Vila 1</option>
                            <option value="village2">Maputo Província Vila 2</option>
                        </select>
                        <select name="village" class="gz-field border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="village1">Gaza Vila 1</option>
                            <option value="village2">Gaza Vila 2</option>
                        </select>
                        <select name="village" class="in-field border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="village1">Inhambane Vila 1</option>
                            <option value="village2">Inhambane Vila 2</option>
                        </select>
                    </div>
                    <div class="w-[19%] flex flex-col gap-2">
                        <label for="zone" class="font-medium">Zona</label>
                        <select name="zone" class="mp-field border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="zone1">Maputo Província Zona 1</option>
                            <option value="zone2">Maputo Província Zona 2</option>
                        </select>
                        <select name="zone" class="gz-field border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="zone1">Gaza Zona 1</option>
                            <option value="zone2">Gaza Zona 2</option>
                        </select>
                        <select name="zone" class="in-field border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="zone1">Inhambane Zona 1</option>
                            <option value="zone2">Inhambane Zona 2</option>
                        </select>
                    </div>
                    <div class="w-[19%] flex flex-col gap-2">
                        <label for="township" class="font-medium">Povoação</label>
                        <select name="township" class="mp-field border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="povoacao1">Maputo Província Povoação 1</option>
                            <option value="povoacao2">Maputo Província Povoação 2</option>
                        </select>
                        <select name="township" class="gz-field border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="povoacao1">Gaza Povoação 1</option>
                            <option value="povoacao2">Gaza Povoação 2</option>
                        </select>
                        <select name="township" class="in-field border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="povoacao1">Inhambane Povoação 1</option>
                            <option value="povoacao2">Inhambane Povoação 2</option>
                        </select>
                    </div>
                </fieldset>
                <div class="flex flex-row gap-5 w-fit mx-auto my-10">
                    <input type="submit" value="Cadastrar" class="bg-orange-700 rounded-md text-white font-medium px-4 py-2">
                </div>
        </form>
    </main>
    <footer>
        <?php include "../components/footer.php"; ?>
    </footer>

    <script src="../../assets/scripts/jquery-3.6.0.js"></script>
    <script src="../../assets/scripts/register.js"></script>
</body>
</html>