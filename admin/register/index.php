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
                            <option value="mpp1">MP posto 1</option>
                            <option value="mpp2">MP posto 2</option>
                        </select>
                        <select name="administrative_post" class="gz-field border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="gzp1">GZ posto 1</option>
                            <option value="gzp2">GZ posto 2</option>
                        </select>
                        <select name="administrative_post" class="in-field border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="inp1">IN posto 1</option>
                            <option value="inp2">IN posto 2</option>
                        </select>
                    </div>
                    <div class="w-[19%] flex flex-col gap-2">
                        <label for="locality" class="font-medium">Localidade</label>
                        <select name="locality" class="mp-field border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="mpl1">MP Localidade 1</option>
                            <option value="mpl2">MP Localidade 2</option>
                        </select>
                        <select name="locality" class="gz-field border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="gzl1">GZ Localidade 1</option>
                            <option value="gzl2">GZ Localidade 2</option>
                        </select>
                        <select name="locality" class="in-field border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="inl1">IN Localidade 1</option>
                            <option value="inl2">IN Localidade 2</option>
                        </select>
                    </div>
                    <div class="w-[19%] flex flex-col gap-2">
                        <label for="neighborhood" class="font-medium">Bairro</label>
                        <select name="neighborhood" class="mp-field border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="mpb1">MP Bairro 1</option>
                            <option value="mpb2">MP Bairro 2</option>
                        </select>
                        <select name="neighborhood" class="gz-field border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="gzb1">GZ Bairro 1</option>
                            <option value="gzb2">GZ Bairro 2</option>
                        </select>
                        <select name="neighborhood" class="in-field border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="inb1">IN Bairro 1</option>
                            <option value="inb2">IN Bairro 2</option>
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
                <div class="flex flex-row gap-5 w-1/5 mx-auto my-10">
                    <input type="submit" value="Cadastrar" class="bg-orange-700 rounded-md text-white font-medium px-4 py-2">
                    <input type="reset" value="Repor" class="bg-orange-700 rounded-md text-white font-medium px-4 py-2">
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