<?php
    require "../../server/config/connect.php";
    include "../../server/src/add-location/location-rows.php";
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
    <main class="h-screen">
        <form method="post" action="../../server/src/register.php" class="border-2 border-orange-700 rounded-xl w-4/5 mx-auto mt-10">
            <h1 class="w-fit mx-auto my-5 font-bold text-2xl text-orange-700">Cadastrar Local</h1>
				<?php
					if(isset($_SESSION["register-response"]) ) {
                        echo "<div class='bg-green-600 text-white font-semibold flex justify-center my-6 py-4'>";
						echo $_SESSION["register-response"];
						unset($_SESSION["register-response"]);
                        echo "</div>";
					}
				?>
                <fieldset class="border border-orange-700 w-[97%] mx-auto rounded-md flex flex-row justify-evenly py-5 my-5">
                    <legend class="text-lg font-semibold px-4">Entidades Administrativas</legend>
                    <div class="w-[19%] flex flex-col gap-2">
                        <label for="province" class="font-medium">Província</label>
                        <select name="province" onchange="toggleFields()" id="province" class="border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="MC">Maputo Cidade</option>
                            <option value="MP">Maputo Província</option>
                            <option value="GZ">Gaza</option>
                            <option value="IN">Inhambane</option>
                            <option value="MN">Manica</option>
                            <option value="SF">Sofala</option>
                            <option value="TT">Tete</option>
                            <option value="NP">Nampula</option>
                            <option value="NS">Niassa</option>
                            <option value="ZB">Zambézia</option>
                            <option value="CD">Cabo Delgado</option>
                        </select>
                    </div>
                    <div class="w-[19%] flex flex-col gap-2">
                        <label for="district" class="font-medium">Distrito</label>
                        <select name="district-mc" class="mc-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($maputoRows as $maputoRow) {
                                    echo "<option value='" . $maputoRow['district_name'] ."'>" . $maputoRow['district_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="district-mp" class="mp-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($maputoProvinceRows as $maputoProvinceRow) {
                                    echo "<option value='" . $maputoProvinceRow['district_name'] ."'>" . $maputoProvinceRow['district_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="district-gz" class="gz-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($gazaRows as $gazaRow) {
                                    echo "<option value='" . $gazaRow['district_name'] ."'>" . $gazaRow['district_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="district-in" class="in-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($inhambaneRows as $inhambaneRow) {
                                    echo "<option value='" . $inhambaneRow['district_name'] ."'>" . $inhambaneRow['district_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="district-mn" class="mn-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($manicaRows as $manicaRow) {
                                    echo "<option value='" . $manicaRow['district_name'] ."'>" . $manicaRow['district_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="district-sf" class="sf-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($sofalaRows as $sofalaRow) {
                                    echo "<option value='" . $sofalaRow['district_name'] ."'>" . $sofalaRow['district_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="district-tt" class="tt-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($teteRows as $teteRow) {
                                    echo "<option value='" . $teteRow['district_name'] ."'>" . $teteRow['district_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="district-np" class="np-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($nampulaRows as $nampulaRow) {
                                    echo "<option value='" . $nampulaRow['district_name'] ."'>" . $nampulaRow['district_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="district-ns" class="ns-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($niassaRows as $niassaRow) {
                                    echo "<option value='" . $niassaRow['district_name'] ."'>" . $niassaRow['district_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="district-zb" class="zb-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($zambeziaRows as $zambeziaRow) {
                                    echo "<option value='" . $zambeziaRow['district_name'] ."'>" . $zambeziaRow['district_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="district-cd" class="cd-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($caboDelgadoRows as $caboDelgadoRow) {
                                    echo "<option value='" . $caboDelgadoRow['district_name'] ."'>" . $caboDelgadoRow['district_name'] . "</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="w-[19%] flex flex-col gap-2">
                        <label for="administrative_post" class="font-medium">Posto Administrativo</label>
                        <select name="administrative_post-mc" class="mc-field border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="Maputo Província posto 1">Maputo Província posto 1</option>
                            <option value="Maputo Província  posto 2">Maputo Província  posto 2</option>
                        </select>
                        <select name="administrative_post-mp" class="mp-field border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="Maputo Província posto 1">Maputo Província posto 1</option>
                            <option value="Maputo Província  posto 2">Maputo Província  posto 2</option>
                        </select>
                        <select name="administrative_post-gz" class="gz-field border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="Gaza posto 1">Gaza posto 1</option>
                            <option value="Gaza posto 2">Gaza posto 2</option>
                        </select>
                        <select name="administrative_post-in" class="in-field border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="Inhambane posto 1">Inhambane posto 1</option>
                            <option value="Inhambane posto 2">Inhambane posto 2</option>
                        </select>
                    </div>
                    <div class="w-[19%] flex flex-col gap-2">
                        <label for="locality" class="font-medium">Localidade</label>
                        <select name="locality-mc" class="mc-field border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="Maputo Província Localidade 1">Maputo Província Localidade 1</option>
                            <option value="Maputo Província Localidade 2">Maputo Província Localidade 2</option>
                        </select>
                        <select name="locality-mp" class="mp-field border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="Maputo Província Localidade 1">Maputo Província Localidade 1</option>
                            <option value="Maputo Província Localidade 2">Maputo Província Localidade 2</option>
                        </select>
                        <select name="locality-gz" class="gz-field border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="Gaza Localidade 1">Gaza Localidade 1</option>
                            <option value="Gaza Localidade 2">Gaza Localidade 2</option>
                        </select>
                        <select name="locality-in" class="in-field border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="Inhambane Localidade 1">Inhambane Localidade 1</option>
                            <option value="Inhambane Localidade 2">Inhambane Localidade 2</option>
                        </select>
                    </div>
                    <div class="w-[19%] flex flex-col gap-2">
                        <label for="neighborhood" class="font-medium">Bairro</label>
                        <select name="neighborhood-mc" class="mc-field border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="Maputo Província Bairro 1">Maputo Província Bairro 1</option>
                            <option value="Maputo Província Bairro 2">Maputo Província Bairro 2</option>
                        </select>
                        <select name="neighborhood-mp" class="mp-field border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="Maputo Província Bairro 1">Maputo Província Bairro 1</option>
                            <option value="Maputo Província Bairro 2">Maputo Província Bairro 2</option>
                        </select>
                        <select name="neighborhood-gz" class="gz-field border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="Gaza Bairro 1">Gaza Bairro 1</option>
                            <option value="Gaza Bairro 2">Gaza Bairro 2</option>
                        </select>
                        <select name="neighborhood-in" class="in-field border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="Inhambane Bairro 1">Inhambane Bairro 1</option>
                            <option value="Inhambane Bairro 2">Inhambane Bairro 2</option>
                        </select>
                    </div>
                </fieldset>
                <fieldset class="border border-orange-700 w-[97%] mx-auto rounded-md flex flex-row justify-evenly py-5 my-5">
                    <legend class="text-lg font-semibold px-4">Entidades Locais</legend>
                    <div class="w-[19%] flex flex-col gap-2">
                        <label for="cell" class="font-medium">Célula</label>
                        <select name="cell-mc" class="mc-field border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="Maputo Província Célula 1">Maputo Província Célula 1</option>
                            <option value="Maputo Província Célula 2">Maputo Província Célula 2</option>
                        </select>
                        <select name="cell-mp" class="mp-field border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="Maputo Província Célula 1">Maputo Província Célula 1</option>
                            <option value="Maputo Província Célula 2">Maputo Província Célula 2</option>
                        </select>
                        <select name="cell-gz" class="gz-field border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="Gaza Célula 1">Gaza Célula 1</option>
                            <option value="Gaza Célula 2">Gaza Célula 2</option>
                        </select>
                        <select name="cell-in" class="in-field border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="Inhambane Célula 1">Inhambane Célula 1</option>
                            <option value="Inhambane Célula 2">Inhambane Célula 2</option>
                        </select>
                    </div>
                    <div class="w-[19%] flex flex-col gap-2">
                        <label for="circle" class="font-medium">Circulo</label>
                        <select name="circle-mc" class="mc-field border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="Maputo Província Circulo 1">Maputo Província Circulo 1</option>
                            <option value="Maputo Província Circulo 2">Maputo Província Circulo 2</option>
                        </select>
                        <select name="circle-mp" class="mp-field border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="Maputo Província Circulo 1">Maputo Província Circulo 1</option>
                            <option value="Maputo Província Circulo 2">Maputo Província Circulo 2</option>
                        </select>
                        <select name="circle-gz" class="gz-field border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="Gaza Circulo 1">Gaza Circulo 1</option>
                            <option value="Gaza Circulo 2">Gaza Circulo 2</option>
                        </select>
                        <select name="circle-in" class="in-field border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="Inhambane Circulo 1">Inhambane Circulo 1</option>
                            <option value="Inhambane Circulo 2">Inhambane Circulo 2</option>
                        </select>
                    </div>
                    <div class="w-[19%] flex flex-col gap-2">
                        <label for="village" class="font-medium">Vila</label>
                        <select name="village-mc" class="mc-field border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="Maputo Província Vila 1">Maputo Província Vila 1</option>
                            <option value="Maputo Província Vila 2">Maputo Província Vila 2</option>
                        </select>
                        <select name="village-mp" class="mp-field border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="Maputo Província Vila 1">Maputo Província Vila 1</option>
                            <option value="Maputo Província Vila 2">Maputo Província Vila 2</option>
                        </select>
                        <select name="village-gz" class="gz-field border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="Gaza Vila 1">Gaza Vila 1</option>
                            <option value="Gaza Vila 2">Gaza Vila 2</option>
                        </select>
                        <select name="village-in" class="in-field border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="Inhambane Vila 1">Inhambane Vila 1</option>
                            <option value="Inhambane Vila 2">Inhambane Vila 2</option>
                        </select>
                    </div>
                    <div class="w-[19%] flex flex-col gap-2">
                        <label for="zone" class="font-medium">Zona</label>
                        <select name="zone-mc" class="mc-field border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="Maputo Província Zona 1">Maputo Província Zona 1</option>
                            <option value="Maputo Província Zona 2">Maputo Província Zona 2</option>
                        </select>
                        <select name="zone-mp" class="mp-field border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="Maputo Província Zona 1">Maputo Província Zona 1</option>
                            <option value="Maputo Província Zona 2">Maputo Província Zona 2</option>
                        </select>
                        <select name="zone-gz" class="gz-field border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="Gaza Zona 1">Gaza Zona 1</option>
                            <option value="Gaza Zona 2">Gaza Zona 2</option>
                        </select>
                        <select name="zone-in" class="in-field border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="Inhambane Zona 1">Inhambane Zona 1</option>
                            <option value="Inhambane Zona 2">Inhambane Zona 2</option>
                        </select>
                    </div>
                    <div class="w-[19%] flex flex-col gap-2">
                        <label for="township" class="font-medium">Povoação</label>
                        <select name="township-mc" class="mc-field border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="Maputo Província Povoação 1">Maputo Província Povoação 1</option>
                            <option value="Maputo Província Povoação 2">Maputo Província Povoação 2</option>
                        </select>
                        <select name="township-mp" class="mp-field border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="Maputo Província Povoação 1">Maputo Província Povoação 1</option>
                            <option value="Maputo Província Povoação 2">Maputo Província Povoação 2</option>
                        </select>
                        <select name="township-gz" class="gz-field border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="Gaza Povoação 1">Gaza Povoação 1</option>
                            <option value="Gaza Povoação 2">Gaza Povoação 2</option>
                        </select>
                        <select name="township-in" class="in-field border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="Inhambane Povoação 1">Inhambane Povoação 1</option>
                            <option value="Inhambane Povoação 2">Inhambane Povoação 2</option>
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