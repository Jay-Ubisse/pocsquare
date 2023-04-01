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
        <form method="post" action="../../server/src/register.php" class="border-2 border-orange-700 rounded-xl mx-auto mt-10 mb-20 laptop:w-[90%] mobile:w-[95%]">
            <h1 class="w-fit mx-auto my-5 font-bold text-2xl text-orange-700">Cadastrar Local</h1>
				<?php
					if(isset($_SESSION["register-response"]) ) {
                        echo "<div class='bg-green-600 text-white font-semibold flex justify-center my-6 py-4'>";
						echo $_SESSION["register-response"];
						unset($_SESSION["register-response"]);
                        echo "</div>";
					}
				?>
                <fieldset class="border border-orange-700 mx-auto rounded-md flex justify-evenly py-5 my-5 laptop:flex-row mobile:flex-col laptop:w-[97%] mobile:w-[90%]">
                    <legend class="text-lg font-semibold px-4">Entidades Administrativas</legend>
                    <div class="flex flex-col gap-2 laptop:w-[19%] mobile:w-full mobile:px-5 laptop:mb-0 mobile:mb-4">
                        <label for="province" class="font-medium">Província</label>
                        <select name="province" required onchange="toggleFields()" id="province" class="border border-orange-700 focus:outline-none outline-none rounded">
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
                    <div class="flex flex-col gap-2 laptop:w-[19%] mobile:w-full mobile:px-5 laptop:mb-0 mobile:mb-4">
                        <label for="district" class="font-medium">Distrito</label>
                        <select name="district-mc" required class="mc-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($maputoDistricts as $maputoDistrict) {
                                    echo "<option value='" . $maputoDistrict['district_name'] ."'>" . $maputoDistrict['district_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="district-mp" required class="mp-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($maputoProvinceDistricts as $maputoProvinceDistrict) {
                                    echo "<option value='" . $maputoProvinceDistrict['district_name'] ."'>" . $maputoProvinceDistrict['district_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="district-gz" required class="gz-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($gazaDistricts as $gazaDistrict) {
                                    echo "<option value='" . $gazaDistrict['district_name'] ."'>" . $gazaDistrict['district_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="district-in" required class="in-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($inhambaneDistricts as $inhambaneDistrict) {
                                    echo "<option value='" . $inhambaneDistrict['district_name'] ."'>" . $inhambaneDistrict['district_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="district-mn" required class="mn-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($manicaDistricts as $manicaDistrict) {
                                    echo "<option value='" . $manicaDistrict['district_name'] ."'>" . $manicaDistrict['district_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="district-sf" required class="sf-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($sofalaDistricts as $sofalaDistrict) {
                                    echo "<option value='" . $sofalaDistrict['district_name'] ."'>" . $sofalaDistrict['district_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="district-tt" required class="tt-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($teteDistricts as $teteDistrict) {
                                    echo "<option value='" . $teteDistrict['district_name'] ."'>" . $teteDistrict['district_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="district-np" required class="np-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($nampulaDistricts as $nampulaDistrict) {
                                    echo "<option value='" . $nampulaDistrict['district_name'] ."'>" . $nampulaDistrict['district_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="district-ns" required class="ns-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($niassaDistricts as $niassaDistrict) {
                                    echo "<option value='" . $niassaDistrict['district_name'] ."'>" . $niassaDistrict['district_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="district-zb" required class="zb-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($zambeziaDistricts as $zambeziaDistrict) {
                                    echo "<option value='" . $zambeziaDistrict['district_name'] ."'>" . $zambeziaDistrict['district_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="district-cd" required class="cd-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($caboDelgadoDistricts as $caboDelgadoDistrict) {
                                    echo "<option value='" . $caboDelgadoDistrict['district_name'] ."'>" . $caboDelgadoDistrict['district_name'] . "</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="flex flex-col gap-2 laptop:w-[19%] mobile:w-full mobile:px-5 laptop:mb-0 mobile:mb-4">
                        <label for="administrative-post" class="font-medium">Posto Administrativo</label>
                        <select name="administrative-post-mc" required class="mc-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($maputoPosts as $maputoPost) {
                                    echo "<option value='" . $maputoPost['administrative_post'] ."'>" . $maputoPost['administrative_post'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="administrative-post-mp" required class="mp-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($maputoProvincePosts as $maputoProvincePost) {
                                    echo "<option value='" . $maputoProvincePost['administrative_post'] ."'>" . $maputoProvincePost['administrative_post'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="administrative-post-gz" required class="gz-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($gazaPosts as $gazaPost) {
                                    echo "<option value='" . $gazaPost['administrative_post'] ."'>" . $gazaPost['administrative_post'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="administrative-post-in" required class="in-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($inhambanePosts as $inhambanePost) {
                                    echo "<option value='" . $inhambanePost['administrative_post'] ."'>" . $inhambanePost['administrative_post'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="administrative-post-mn" required class="mn-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($manicaPosts as $manicaPost) {
                                    echo "<option value='" . $manicaPost['administrative_post'] ."'>" . $manicaPost['administrative_post'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="administrative-post-sf" required class="sf-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($sofalaPosts as $sofalaPost) {
                                    echo "<option value='" . $sofalaPost['administrative_post'] ."'>" . $sofalaPost['administrative_post'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="administrative-post-tt" required class="tt-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($tetePosts as $tetePost) {
                                    echo "<option value='" . $tetePost['administrative_post'] ."'>" . $tetePost['administrative_post'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="administrative-post-np" required class="np-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($nampulaPosts as $nampulaPost) {
                                    echo "<option value='" . $nampulaPost['administrative_post'] ."'>" . $nampulaPost['administrative_post'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="administrative-post-ns" required class="ns-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($niassaPosts as $niassaPost) {
                                    echo "<option value='" . $niassaPost['administrative_post'] ."'>" . $niassaPost['administrative_post'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="administrative-post-zb" required class="zb-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($zambeziaPosts as $zambeziaPost) {
                                    echo "<option value='" . $zambeziaPost['administrative_post'] ."'>" . $zambeziaPost['administrative_post'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="administrative-post-cd" required class="cd-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($caboDelgadoPosts as $caboDelgadoPost) {
                                    echo "<option value='" . $caboDelgadoPost['administrative_post'] ."'>" . $caboDelgadoPost['administrative_post'] . "</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="flex flex-col gap-2 laptop:w-[19%] mobile:w-full mobile:px-5 laptop:mb-0 mobile:mb-4">
                        <label for="locality" class="font-medium">Localidade</label>
                        <select name="locality-mc" required class="mc-field border border-orange-700 focus:outline-none outline-none rounded">
                            
                        </select>
                        <select name="locality-mp" required class="mp-field border border-orange-700 focus:outline-none outline-none rounded">

                        </select>
                        <select name="locality-gz" required class="gz-field border border-orange-700 focus:outline-none outline-none rounded">

                        </select>
                        <select name="locality-in" required class="in-field border border-orange-700 focus:outline-none outline-none rounded">

                        </select>
                    </div>
                    <div class="flex flex-col gap-2 laptop:w-[19%] mobile:w-full mobile:px-5 laptop:mb-0 mobile:mb-4">
                        <label for="neighborhood" class="font-medium">Bairro</label>
                        <select name="neighborhood-mc" required class="mc-field border border-orange-700 focus:outline-none outline-none rounded">

                        </select>
                        <select name="neighborhood-mp" required class="mp-field border border-orange-700 focus:outline-none outline-none rounded">

                        </select>
                        <select name="neighborhood-gz" required class="gz-field border border-orange-700 focus:outline-none outline-none rounded">

                        </select>
                        <select name="neighborhood-in" required class="in-field border border-orange-700 focus:outline-none outline-none rounded">

                        </select>
                    </div>
                </fieldset>
                <fieldset class="border border-orange-700 mx-auto rounded-md flex flex-row flex-wrap justify-evenly py-5 my-5 laptop:flex-row mobile:flex-col laptop:w-[97%] mobile:w-[90%]">
                    <legend class="text-lg font-semibold px-4">Entidades Locais</legend>
                    <div class="flex flex-col gap-2 laptop:w-[19%] mobile:w-full mobile:px-5 laptop:mb-0 mobile:mb-4">
                        <label for="cell" class="font-medium">Célula</label>
                        <select name="cell-mc" required class="mc-field border border-orange-700 focus:outline-none outline-none rounded">

                        </select>
                        <select name="cell-mp" required class="mp-field border border-orange-700 focus:outline-none outline-none rounded">

                        </select>
                        <select name="cell-gz" required class="gz-field border border-orange-700 focus:outline-none outline-none rounded">

                        </select>
                        <select name="cell-in" required class="in-field border border-orange-700 focus:outline-none outline-none rounded">

                        </select>
                    </div>
                    <div class="flex flex-col gap-2 laptop:w-[19%] mobile:w-full mobile:px-5 laptop:mb-0 mobile:mb-4">
                        <label for="circle" class="font-medium">Circulo</label>
                        <select name="circle-mc" required class="mc-field border border-orange-700 focus:outline-none outline-none rounded">

                        </select>
                        <select name="circle-mp" required class="mp-field border border-orange-700 focus:outline-none outline-none rounded">

                        </select>
                        <select name="circle-gz" required class="gz-field border border-orange-700 focus:outline-none outline-none rounded">

                        </select>
                        <select name="circle-in" required class="in-field border border-orange-700 focus:outline-none outline-none rounded">

                        </select>
                    </div>
                    <div class="flex flex-col gap-2 laptop:w-[19%] mobile:w-full mobile:px-5 laptop:mb-0 mobile:mb-4">
                        <label for="village" class="font-medium">Vila</label>
                        <select name="village-mc" required class="mc-field border border-orange-700 focus:outline-none outline-none rounded">

                        </select>
                        <select name="village-mp" required class="mp-field border border-orange-700 focus:outline-none outline-none rounded">

                        </select>

                        </select>
                        <select name="village-in" required class="in-field border border-orange-700 focus:outline-none outline-none rounded">

                        </select>
                    </div>
                    <div class="flex flex-col gap-2 laptop:w-[19%] mobile:w-full mobile:px-5 laptop:mb-0 mobile:mb-4">
                        <label for="zone" class="font-medium">Zona</label>
                        <select name="zone-mc" required class="mc-field border border-orange-700 focus:outline-none outline-none rounded">

                        </select>
                        <select name="zone-mp" required class="mp-field border border-orange-700 focus:outline-none outline-none rounded">

                        </select>
                        <select name="zone-gz" required class="gz-field border border-orange-700 focus:outline-none outline-none rounded">

                        </select>
                        <select name="zone-in" required class="in-field border border-orange-700 focus:outline-none outline-none rounded">

                        </select>
                    </div>
                    <div class="flex flex-col gap-2 laptop:w-[19%] mobile:w-full mobile:px-5 laptop:mb-0 mobile:mb-4">
                        <label for="township" class="font-medium">Povoação</label>
                        <select name="zone-mc" required class="mc-field border border-orange-700 focus:outline-none outline-none rounded">

                        </select>
                        <select name="zone-mp" required class="mp-field border border-orange-700 focus:outline-none outline-none rounded">

                        </select>
                        <select name="zone-gz" required class="gz-field border border-orange-700 focus:outline-none outline-none rounded">

                        </select>
                        <select name="zone-in" required class="in-field border border-orange-700 focus:outline-none outline-none rounded">

                        </select>
                    </div>
                </fieldset>
                <fieldset class="border border-orange-700 mx-auto rounded-md flex flex-col flex-wrap justify-evenly py-5 my-5 laptop:w-[97%] mobile:w-[90%]">
                    <legend class="text-lg font-semibold px-4">Entidades Patrimoniais/Vias</legend>
                    <div class="flex laptop:flex-row mobile:flex-col laptop:justify-evenly laptop:gap-0 mobile:gap-2">
                        <div class="flex flex-col gap-2 laptop:w-[19%] mobile:w-full mobile:px-5 laptop:mb-0 mobile:mb-4">
                            <label for="property-type" class="font-medium">Tipo de Propriedade</label>
                            <select name="property-type" required class="border border-orange-700 focus:outline-none outline-none rounded">
                                <option value="Casa Geminada">Casa Geminada</option>
                                <option value="Prédio">Prédio</option>
                                <option value="Condomínio">Condomínio</option>
                                <option value="Condomínio">Flat</option>
                            </select>
                        </div>
                        <div class="flex flex-col gap-2 laptop:w-[19%] mobile:w-full mobile:px-5 laptop:mb-0 mobile:mb-4">
                            <label for="floor" class="font-medium">Andar</label>
                            <input type="text" name="floor" required value="R/C" class="border border-orange-700 focus:outline-none outline-none rounded">
                        </div>
                        <div class="flex flex-col gap-2 laptop:w-[19%] mobile:w-full mobile:px-5 laptop:mb-0 mobile:mb-4">
                            <label for="side" class="font-medium">Lado</label>
                            <input type="text" name="side" required  class="border border-orange-700 focus:outline-none outline-none rounded">
                        </div>
                        <div class="flex flex-col gap-2 laptop:w-[19%] mobile:w-full mobile:px-5 laptop:mb-0 mobile:mb-4">
                            <label for="door-number" class="font-medium">Número da Porta</label>
                            <input type="text" name="door-number" required  class="border border-orange-700 focus:outline-none outline-none rounded">
                        </div>
                    </div>
                    <div class="flex mt-2 laptop:flex-row mobile:flex-col laptop:justify-evenly laptop:gap-0 mobile:gap-2">
                        <div class="flex flex-col gap-2 laptop:w-[19%] mobile:w-full mobile:px-5 laptop:mb-0 mobile:mb-4">
                            <label for="road-type" class="font-medium">Tipo de Via</label>
                            <select name="road-type" required class="border border-orange-700 focus:outline-none outline-none rounded">
                                <option value="Avenida">Avenida</option>
                                <option value="Rua">Rua</option>
                            </select>
                        </div>
                        <div class="flex flex-col gap-2 laptop:w-[19%] mobile:w-full mobile:px-5 laptop:mb-0 mobile:mb-4">
                            <label for="road-name" class="font-medium">Nome/Número da Via</label>
                            <input type="text" name="road-name" required class="border border-orange-700 focus:outline-none outline-none rounded">
                        </div>
                        <div class="flex flex-col gap-2 laptop:w-[19%] mobile:w-full mobile:px-5 laptop:mb-0 mobile:mb-4">
                            <label for="stalemate" class="font-medium">Impasse</label>
                            <input type="text" name="stalemate" required  class="border border-orange-700 focus:outline-none outline-none rounded">
                        </div>
                        <div class="flex flex-col gap-2 laptop:w-[19%] mobile:w-full mobile:px-5 laptop:mb-0 mobile:mb-4">
                            <label for="Viaduct" class="font-medium">Viaduto</label>
                            <input type="text" name="Viaduct" required  class="border border-orange-700 focus:outline-none outline-none rounded">
                        </div>
                    </div>
                    <div class="flex mt-2 laptop:flex-row mobile:flex-col laptop:justify-evenly laptop:gap-0 mobile:gap-2">
                        <div class="flex flex-col gap-2 laptop:w-[19%] mobile:w-full mobile:px-5 laptop:mb-0 mobile:mb-4">
                            <label for="roundabout" class="font-medium">Rotunda</label>
                            <input type="text" name="roundabout" required class="border border-orange-700 focus:outline-none outline-none rounded">
                        </div>
                        <div class="flex flex-col gap-2 laptop:w-[19%] mobile:w-full mobile:px-5 laptop:mb-0 mobile:mb-4">
                            <label for="sleepers" class="font-medium">Travessas</label>
                            <input type="text" name="sleepers" required class="border border-orange-700 focus:outline-none outline-none rounded">
                        </div>
                        <div class="flex flex-col gap-2 laptop:w-[19%] mobile:w-full mobile:px-5 laptop:mb-0 mobile:mb-4">
                            <label for="wide" class="font-medium">Largos</label>
                            <input type="text" name="wide" required  class="border border-orange-700 focus:outline-none outline-none rounded">
                        </div>
                        <div class="flex flex-col gap-2 laptop:w-[19%] mobile:w-full mobile:px-5 laptop:mb-0 mobile:mb-4">
                            <label for="bridges" class="font-medium">Pontes</label>
                            <input type="text" name="bridges" required  class="border border-orange-700 focus:outline-none outline-none rounded">
                        </div>
                    </div>
                    <div class="flex mt-4 laptop:flex-row mobile:flex-col laptop:justify-evenly laptop:gap-0 mobile:gap-2">
                        <div class="flex flex-col gap-2 laptop:w-[19%] mobile:w-full mobile:px-5 laptop:mb-0 mobile:mb-4">
                            <label for="plaza" class="font-medium">Praças</label>
                            <input type="text" name="plaza" required class="border border-orange-700 focus:outline-none outline-none rounded">
                        </div>
                        <div class="flex flex-col gap-2 laptop:w-[19%] mobile:w-full mobile:px-5 laptop:mb-0 mobile:mb-4">
                            <label for="length" class="font-medium">Comprimento</label>
                            <input type="text" name="length" required class="border border-orange-700 focus:outline-none outline-none rounded">
                        </div>
                        <div class="flex flex-col gap-2 laptop:w-[19%] mobile:w-full mobile:px-5 laptop:mb-0 mobile:mb-4">
                            <label for="width" class="font-medium">Largura</label>
                            <input type="text" name="width" required  class="border border-orange-700 focus:outline-none outline-none rounded">
                        </div>
                        <div class="flex flex-col gap-2 laptop:w-[19%] mobile:w-full mobile:px-5 laptop:mb-0 mobile:mb-4">
                            <label for="occupancy" class="font-medium">Ocupação</label>
                            <input type="text" name="occupancy" required  class="border border-orange-700 focus:outline-none outline-none rounded">
                        </div>
                        <div class="flex flex-col gap-2 laptop:w-[19%] mobile:w-full mobile:px-5 laptop:mb-0 mobile:mb-4">
                            <label for="affectation" class="font-medium">Afetação</label>
                            <input type="text" name="affectation" required  class="border border-orange-700 focus:outline-none outline-none rounded">
                        </div>
                    </div>
                </fieldset>
                <fieldset class="border border-orange-700 mx-auto rounded-md flex flex-row flex-wrap justify-evenly py-5 my-5 laptop:flex-row mobile:flex-col laptop:w-[97%] mobile:w-[90%]">
                    <legend class="text-lg font-semibold px-4">Entidades Postais</legend>
                    <div class="flex flex-col gap-2 laptop:w-[19%] mobile:w-full mobile:px-5 laptop:mb-0 mobile:mb-4">
                        <label for="block" class="font-medium">Quarteirão</label>
                        <input type="number" name="block" required class="mc-field border border-orange-700 focus:outline-none outline-none rounded">
                    </div>
                    <div class="flex flex-col gap-2 laptop:w-[19%] mobile:w-full mobile:px-5 laptop:mb-0 mobile:mb-4">
                        <label for="lateral" class="font-medium">Lateral Alfa-Numérico</label>
                        <select name="lateral" required class="mc-field border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                        </select>
                    </div>
                    <div class="flex flex-col gap-2 laptop:w-[19%] mobile:w-full mobile:px-5 laptop:mb-0 mobile:mb-4">
                        <label for="entry" class="font-medium">Entrada</label>
                        <input type="number" name="entry" required class="mc-field border border-orange-700 focus:outline-none outline-none rounded">
                    </div>
                    <div class="flex flex-col gap-2 laptop:w-[19%] mobile:w-full mobile:px-5 laptop:mb-0 mobile:mb-4">
                        <label for="mailbox" class="font-medium">Caixa Postal</label>
                        <input type="text" name="mailbox" required class="mc-field border border-orange-700 focus:outline-none outline-none rounded">
                    </div>
                    <div class="flex flex-col gap-2 laptop:w-[19%] mobile:w-full mobile:px-5 laptop:mb-0 mobile:mb-4">
                        <label for="post-office" class="font-medium">Estacão de correios</label>
                        <input type="text" name="post-office" required class="mc-field border border-orange-700 focus:outline-none outline-none rounded">
                    </div>
                </fieldset>
                <fieldset class="border border-orange-700 mx-auto rounded-md gap-4 py-5 my-5 laptop:flex-row mobile:flex-col laptop:w-[97%] mobile:w-[90%]">
                    <legend class="text-lg font-semibold px-4">Entidades Espaciais</legend>
                    <div class="flex justify-evenly w-full mobile:px-5 laptop:mb-0 mobile:mb-2 laptop:flex-row mobile:flex-col">
                        <div class="flex flex-col gap-2 laptop:mb-0 mobile:mb-4">
                            <label for="latitude" class="font-medium">Latitude</label>
                            <input type="text" name="latitude" required placeholder="(Decimal Degrees)" class="border border-orange-700 focus:outline-none outline-none rounded px-2">
                        </div>
                        <div class="flex flex-col gap-2 laptop:mb-0 mobile:mb-4">
                            <label for="latitude-dms" class="font-medium">Latitude DMS</label>
                            <input type="text" name="latitudde-dms" required placeholder="(Degrees, Minutes, Seconds)" class="border border-orange-700 focus:outline-none outline-none rounded px-2">
                        </div>
                        <div class="flex flex-col gap-2 laptop:mb-0 mobile:mb-4">
                            <label for="longetude" class="font-medium">Longetude</label>
                            <input type="text" name="longetude" required placeholder="(Decimal Degrees)" class="border border-orange-700 focus:outline-none outline-none rounded px-2">
                        </div>
                        <div class="flex flex-col gap-2 laptop:mb-0 mobile:mb-4">
                            <label for="longetude-dms" class="font-medium">Longitude DMS</label>
                            <input type="text" name="longetude-dms" required placeholder="(Degrees, Minutes, Seconds)" class="border border-orange-700 focus:outline-none outline-none rounded px-2">
                        </div>
                    </div>
                    <div class="flex justify-evenly w-full mobile:px-5 laptop:mb-0 mobile:mb-4 laptop:flex-row mobile:flex-col laptop:mt-4">
                        <div class="flex flex-col gap-2 laptop:mb-0 mobile:mb-4">
                            <label for="sea-​​rise" class="font-medium">Elevação do Mar</label>
                            <input type="text" name="sea-​​rise" required class="border border-orange-700 focus:outline-none outline-none rounded px-2">
                        </div>
                        <div class="flex flex-col gap-2 laptop:mb-0 mobile:mb-4">
                            <label for="latitude" class="font-medium">Via Lat Start</label>
                            <input type="text" name="latitudde" class="border border-orange-700 focus:outline-none outline-none rounded px-2">
                        </div>
                        <div class="flex flex-col gap-2 laptop:mb-0 mobile:mb-4">
                            <label for="latitude" class="font-medium">Via Long End</label>
                            <input type="text" name="latitudde" required class="border border-orange-700 focus:outline-none outline-none rounded px-2">
                        </div>
                        <div class="flex flex-col gap-2">
                            <label for="latitude" required class="font-medium">Mapa Aérea c/gateway</label>
                            
                        </div>
                    </div>
                </fieldset>
                <fieldset class="border border-orange-700 mx-auto rounded-md gap-4 py-5 my-5 laptop:flex-row mobile:flex-col laptop:w-[97%] mobile:w-[90%]">
                    <legend class="text-lg font-semibold px-4">Entidades Complementares</legend>
                    <div class="flex justify-evenly w-full mobile:px-5 laptop:mb-0 mobile:mb-2 laptop:flex-row mobile:flex-col">
                        <div class="flex flex-col gap-2 laptop:mb-0 mobile:mb-4">
                            <label for="contact-number" class="font-medium">Número de Contato</label>
                            <div>
                                <input type="text" value="+258" disabled size="5">
                                <input type="number" name="contact-number" class="border border-orange-700 focus:outline-none outline-none rounded px-2">
                            </div>
                        </div>
                        <div class="flex flex-col gap-2 laptop:mb-0 mobile:mb-4">
                            <label for="email" class="font-medium">Email</label>
                            <input type="email" name="email" class="border border-orange-700 focus:outline-none outline-none rounded px-2">
                        </div>
                        <div class="flex flex-col gap-2 laptop:mb-0 mobile:mb-4">
                            <label for="website" class="font-medium">Website</label>
                            <input type="url" name="website"  class="border border-orange-700 focus:outline-none outline-none rounded px-2">
                        </div>
                    </div>
                </fieldset>
                <div class="ml-5">
                    <span class="text-lg font-semibold mr-2">ID do Usuário:</span>
                    <span class="text-base font-medium">
                        <?php
                            echo $_SESSION['user-data']['username'];
                        ?>
                    </span>
                </div>
                <div class="flex flex-District gap-5 w-fit mx-auto my-10">
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