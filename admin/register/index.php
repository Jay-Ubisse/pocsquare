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
                        echo "<div class='bg-green-500 text-white font-semibold flex justify-center my-6 py-4'>";
						echo $_SESSION["register-response"];
						unset($_SESSION["register-response"]);
                        echo "</div>";
					}
				?>
                <fieldset class="border border-orange-700 mx-auto rounded-md flex justify-evenly py-5 my-5 laptop:flex-row mobile:flex-col laptop:w-[97%] mobile:w-[90%]">
                    <legend class="text-lg font-semibold px-4">Entidades Administrativas</legend>
                    <div class="flex flex-col gap-2 laptop:w-[19%] mobile:w-full mobile:px-5 laptop:mb-0 mobile:mb-4">
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
                    <div class="flex flex-col gap-2 laptop:w-[19%] mobile:w-full mobile:px-5 laptop:mb-0 mobile:mb-4">
                        <label for="district" class="font-medium">Distrito</label>
                        <select name="district-mc" class="mc-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($maputoDistricts as $maputoDistrict) {
                                    echo "<option value='" . $maputoDistrict['district_name'] ."'>" . $maputoDistrict['district_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="district-mp" class="mp-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($maputoProvinceDistricts as $maputoProvinceDistrict) {
                                    echo "<option value='" . $maputoProvinceDistrict['district_name'] ."'>" . $maputoProvinceDistrict['district_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="district-gz" class="gz-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($gazaDistricts as $gazaDistrict) {
                                    echo "<option value='" . $gazaDistrict['district_name'] ."'>" . $gazaDistrict['district_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="district-in" class="in-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($inhambaneDistricts as $inhambaneDistrict) {
                                    echo "<option value='" . $inhambaneDistrict['district_name'] ."'>" . $inhambaneDistrict['district_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="district-mn" class="mn-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($manicaDistricts as $manicaDistrict) {
                                    echo "<option value='" . $manicaDistrict['district_name'] ."'>" . $manicaDistrict['district_name'] . "</option>";
                               }
                            ?>
                        </select>
                        <select name="district-sf" class="sf-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($sofalaDistricts as $sofalaDistrict) {
                                    echo "<option value='" . $sofalaDistrict['district_name'] ."'>" . $sofalaDistrict['district_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="district-tt" class="tt-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($teteDistricts as $teteDistrict) {
                                    echo "<option value='" . $teteDistrict['district_name'] ."'>" . $teteDistrict['district_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="district-np" class="np-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($nampulaDistricts as $nampulaDistrict) {
                                    echo "<option value='" . $nampulaDistrict['district_name'] ."'>" . $nampulaDistrict['district_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="district-ns" class="ns-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($niassaDistricts as $niassaDistrict) {
                                   echo "<option value='" . $niassaDistrict['district_name'] ."'>" . $niassaDistrict['district_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="district-zb" class="zb-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($zambeziaDistricts as $zambeziaDistrict) {
                                    echo "<option value='" . $zambeziaDistrict['district_name'] ."'>" . $zambeziaDistrict['district_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="district-cd" class="cd-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($caboDelgadoDistricts as $caboDelgadoDistrict) {
                                    echo "<option value='" . $caboDelgadoDistrict['district_name'] ."'>" . $caboDelgadoDistrict['district_name'] . "</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="flex flex-col gap-2 laptop:w-[19%] mobile:w-full mobile:px-5 laptop:mb-0 mobile:mb-4">
                        <label for="administrative-post" class="font-medium">Posto Administrativo</label>
                        <select name="administrative-post-mc" class="mc-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($maputoPosts as $maputoPost) {
                                    echo "<option value='" . $maputoPost['admin_post_name'] ."'>" . $maputoPost['admin_post_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="administrative-post-mp" class="mp-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($maputoProvincePosts as $maputoProvincePost) {
                                    echo "<option value='" . $maputoProvincePost['admin_post_name'] ."'>" . $maputoProvincePost['admin_post_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="administrative-post-gz" class="gz-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($gazaPosts as $gazaPost) {
                                    echo "<option value='" . $gazaPost['admin_post_name'] ."'>" . $gazaPost['admin_post_name'] . "</option>";
                               }
                            ?>
                        </select>
                        <select name="administrative-post-in" class="in-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($inhambanePosts as $inhambanePost) {
                                    echo "<option value='" . $inhambanePost['admin_post_name'] ."'>" . $inhambanePost['admin_post_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="administrative-post-mn" class="mn-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($manicaPosts as $manicaPost) {
                                    echo "<option value='" . $manicaPost['admin_post_name'] ."'>" . $manicaPost['admin_post_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="administrative-post-sf" class="sf-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($sofalaPosts as $sofalaPost) {
                                    echo "<option value='" . $sofalaPost['admin_post_name'] ."'>" . $sofalaPost['admin_post_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="administrative-post-tt" class="tt-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($tetePosts as $tetePost) {
                                    echo "<option value='" . $tetePost['admin_post_name'] ."'>" . $tetePost['admin_post_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="administrative-post-np" class="np-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($nampulaPosts as $nampulaPost) {
                                    echo "<option value='" . $nampulaPost['admin_post_name'] ."'>" . $nampulaPost['admin_post_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="administrative-post-ns" class="ns-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($niassaPosts as $niassaPost) {
                                    echo "<option value='" . $niassaPost['admin_post_name'] ."'>" . $niassaPost['admin_post_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="administrative-post-zb" class="zb-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($zambeziaPosts as $zambeziaPost) {
                                    echo "<option value='" . $zambeziaPost['admin_post_name'] ."'>" . $zambeziaPost['admin_post_name'] . "</option>";
                               }
                            ?>
                        </select>
                        <select name="administrative-post-cd" class="cd-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($caboDelgadoPosts as $caboDelgadoPost) {
                                    echo "<option value='" . $caboDelgadoPost['admin_post_name'] ."'>" . $caboDelgadoPost['admin_post_name'] . "</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="locality flex flex-col gap-2 laptop:w-[19%] mobile:w-full mobile:px-5 laptop:mb-0 mobile:mb-4">
                        <label for="locality" class="font-medium">Localidade</label>
                        <select name="locality-mc" class="mc-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($maputoLocality as $maputoLocale) {
                                    echo "<option value='" . $maputoLocale['locality_name'] ."'>" . $maputoLocale['locality_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="locality-mp" class="mp-field border border-orange-700 focus:outline-none outline-none rounded">
                                <?php
                                foreach ($maputoProvinceLocality as $maputoProvinceLocale) {
                                    echo "<option value='" . $maputoProvinceLocale['locality_name'] ."'>" . $maputoProvinceLocale['locality_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="locality-gz" class="gz-field border border-orange-700 focus:outline-none outline-none rounded">
                                <?php
                                foreach ($gazaLocality as $gazaLocale) {
                                    echo "<option value='" . $gazaLocale['locality_name'] ."'>" . $gazaLocale['locality_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="locality-in" class="in-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($inhambaneLocality as $inhambaneLocale) {
                                    echo "<option value='" . $inhambaneLocale['locality_name'] ."'>" . $inhambaneLocale['locality_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="locality-mn" class="mn-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($manicaLocality as $manicaLocale) {
                                    echo "<option value='" . $manicaLocale['locality_name'] ."'>" . $manicaLocale['locality_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="locality-sf" class="sf-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($sofalaLocality as $sofalaLocale) {
                                    echo "<option value='" . $sofalaLocale['locality_name'] ."'>" . $sofalaLocale['locality_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="locality-tt" class="tt-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($teteLocality as $teteLocale) {
                                    echo "<option value='" . $teteLocale['locality_name'] ."'>" . $teteLocale['locality_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="locality-np" class="np-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($nampulaLocality as $nampulaLocale) {
                                    echo "<option value='" . $nampulaLocale['locality_name'] ."'>" . $nampulaLocale['locality_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="locality-ns" class="ns-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($niassaLocality as $niassaLocale) {
                                    echo "<option value='" . $niassaLocale['locality_name'] ."'>" . $niassaLocale['locality_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="locality-zb" class="zb-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($zambeziaLocality as $zambeziaLocale) {
                                    echo "<option value='" . $zambeziaLocale['locality_name'] ."'>" . $zambeziaLocale['locality_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="locality-cd" class="cd-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($caboDelgadoLocality as $caboDelgadoLocale) {
                                    echo "<option value='" . $caboDelgadoLocale['locality_name'] ."'>" . $caboDelgadoLocale['locality_name'] . "</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="neighborhood flex flex-col gap-2 laptop:w-[19%] mobile:w-full mobile:px-5 laptop:mb-0 mobile:mb-4">
                        <label for="neighborhood" class="font-medium">Bairro</label>
                        <select name="neighborhood-mc" class="mc-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($maputoNeighborhoods as $maputoNeighborhood) {
                                    echo "<option value='" . $maputoNeighborhood['neighborhood_name'] ."'>" . $maputoNeighborhood['neighborhood_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="neighborhood-mp" class="mp-field border border-orange-700 focus:outline-none outline-none rounded">
                                <?php
                                foreach ($maputoProvinceNeighborhoods as $maputoProvinceNeighborhood) {
                                    echo "<option value='" . $maputoProvinceNeighborhood['neighborhood_name'] ."'>" . $maputoProvinceNeighborhood['neighborhood_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="neighborhood-gz" class="gz-field border border-orange-700 focus:outline-none outline-none rounded">
                                <?php
                                foreach ($gazaNeighborhoods as $gazaNeighborhood) {
                                    echo "<option value='" . $gazaNeighborhood['neighborhood_name'] ."'>" . $gazaNeighborhood['neighborhood_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="neighborhood-in" class="in-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($inhambaneNeighborhoods as $inhambaneNeighborhood) {
                                    echo "<option value='" . $inhambaneNeighborhood['neighborhood_name'] ."'>" . $inhambaneNeighborhood['neighborhood_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="neighborhood-mn" class="mn-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($manicaNeighborhoods as $manicaNeighborhood) {
                                    echo "<option value='" . $manicaNeighborhood['neighborhood_name'] ."'>" . $manicaNeighborhood['neighborhood_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="neighborhood-sf" class="sf-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($sofalaNeighborhoods as $sofalaNeighborhood) {
                                    echo "<option value='" . $sofalaNeighborhood['neighborhood_name'] ."'>" . $sofalaNeighborhood['neighborhood_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="neighborhood-tt" class="tt-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($teteNeighborhoods as $teteNeighborhood) {
                                    echo "<option value='" . $teteNeighborhood['neighborhood_name'] ."'>" . $teteNeighborhood['neighborhood_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="neighborhood-np" class="np-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($nampulaNeighborhoods as $nampulaNeighborhood) {
                                    echo "<option value='" . $nampulaNeighborhood['neighborhood_name'] ."'>" . $nampulaNeighborhood['neighborhood_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="neighborhood-ns" class="ns-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($niassaNeighborhoods as $niassaNeighborhood) {
                                    echo "<option value='" . $niassaNeighborhood['neighborhood_name'] ."'>" . $niassaNeighborhood['neighborhood_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="neighborhood-zb" class="zb-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($zambeziaNeighborhoods as $zambeziaNeighborhood) {
                                    echo "<option value='" . $zambeziaNeighborhood['neighborhood_name'] ."'>" . $zambeziaNeighborhood['neighborhood_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="neighborhood-cd" class="cd-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($caboDelgadoNeighborhoods as $caboDelgadoNeighborhood) {
                                    echo "<option value='" . $caboDelgadoNeighborhood['neighborhood_name'] ."'>" . $caboDelgadoNeighborhood['neighborhood_name'] . "</option>";
                                }
                            ?>
                        </select>
                    </div>
                </fieldset>
                <fieldset class="border border-orange-700 mx-auto rounded-md flex flex-row flex-wrap justify-evenly py-5 my-5 laptop:flex-row mobile:flex-col laptop:w-[97%] mobile:w-[90%]">
                    <legend class="text-lg font-semibold px-4">Entidades Locais</legend>
                    <div class="flex flex-col gap-2 laptop:w-[19%] mobile:w-full mobile:px-5 laptop:mb-0 mobile:mb-4">
                        <label for="cell" class="font-medium">Célula</label>
                        <select name="cell-mc" class="mc-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($maputoCells as $maputoCell) {
                                    echo "<option value='" . $maputoCell['cell_name'] ."'>" . $maputoCell['cell_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="cell-mp" class="mp-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($maputoProvinceCells as $maputoProvinceCell) {
                                    echo "<option value='" . $maputoProvinceCell['cell_name'] ."'>" . $maputoProvinceCell['cell_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="cell-gz" class="gz-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($gazaCells as $gazaCell) {
                                    echo "<option value='" . $gazaCell['cell_name'] ."'>" . $gazaCell['cell_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="cell-in" class="in-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($inhambaneCells as $inhambaneCell) {
                                    echo "<option value='" . $inhambaneCell['cell_name'] ."'>" . $inhambaneCell['cell_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="cell-mn" class="mn-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($manicaCells as $manicaCell) {
                                    echo "<option value='" . $manicaCell['cell_name'] ."'>" . $manicaCell['cell_name'] . "</option>";
                               }
                            ?>
                        </select>
                        <select name="cell-sf" class="sf-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($sofalaCells as $sofalaCell) {
                                    echo "<option value='" . $sofalaCell['cell_name'] ."'>" . $sofalaCell['cell_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="cell-tt" class="tt-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($teteCells as $teteCell) {
                                    echo "<option value='" . $teteCell['cell_name'] ."'>" . $teteCell['cell_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="cell-np" class="np-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($nampulaCells as $nampulaCell) {
                                    echo "<option value='" . $nampulaCell['cell_name'] ."'>" . $nampulaCell['cell_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="cell-ns" class="ns-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($niassaCells as $niassaCell) {
                                   echo "<option value='" . $niassaCell['cell_name'] ."'>" . $niassaCell['cell_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="cell-zb" class="zb-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($zambeziaCells as $zambeziaCell) {
                                    echo "<option value='" . $zambeziaCell['cell_name'] ."'>" . $zambeziaCell['cell_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="cell-cd" class="cd-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($caboDelgadoCells as $caboDelgadoCell) {
                                    echo "<option value='" . $caboDelgadoCell['cell_name'] ."'>" . $caboDelgadoCell['cell_name'] . "</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="flex flex-col gap-2 laptop:w-[19%] mobile:w-full mobile:px-5 laptop:mb-0 mobile:mb-4">
                        <label for="circle" class="font-medium">Circulo</label>
                        <select name="circle-mc" class="mc-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($maputoCircles as $maputoCircle) {
                                    echo "<option value='" . $maputoCircle['circle_name'] ."'>" . $maputoCircle['circle_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="circle-mp" class="mp-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($maputoProvinceCircles as $maputoProvinceCircle) {
                                    echo "<option value='" . $maputoProvinceCircle['circle_name'] ."'>" . $maputoProvinceCircle['circle_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="circle-gz" class="gz-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($gazaCircles as $gazaCircle) {
                                    echo "<option value='" . $gazaCircle['circle_name'] ."'>" . $gazaCircle['circle_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="circle-in" class="in-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($inhambaneCircles as $inhambaneCircle) {
                                    echo "<option value='" . $inhambaneCircle['circle_name'] ."'>" . $inhambaneCircle['circle_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="circle-mn" class="mn-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($manicaCircles as $manicaCircle) {
                                    echo "<option value='" . $manicaCircle['circle_name'] ."'>" . $manicaCircle['circle_name'] . "</option>";
                               }
                            ?>
                        </select>
                        <select name="circle-sf" class="sf-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($sofalaCircles as $sofalaCircle) {
                                    echo "<option value='" . $sofalaCircle['circle_name'] ."'>" . $sofalaCircle['circle_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="circle-tt" class="tt-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($teteCircles as $teteCircle) {
                                    echo "<option value='" . $teteCircle['circle_name'] ."'>" . $teteCircle['circle_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="circle-np" class="np-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($nampulaCircles as $nampulaCircle) {
                                    echo "<option value='" . $nampulaCircle['circle_name'] ."'>" . $nampulaCircle['circle_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="circle-ns" class="ns-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($niassaCircles as $niassaCircle) {
                                   echo "<option value='" . $niassaCircle['circle_name'] ."'>" . $niassaCircle['circle_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="circle-zb" class="zb-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($zambeziaCircles as $zambeziaCircle) {
                                    echo "<option value='" . $zambeziaCircle['circle_name'] ."'>" . $zambeziaCircle['circle_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="circle-cd" class="cd-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($caboDelgadoCircles as $caboDelgadoCircle) {
                                    echo "<option value='" . $caboDelgadoCircle['circle_name'] ."'>" . $caboDelgadoCircle['circle_name'] . "</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="flex flex-col gap-2 laptop:w-[19%] mobile:w-full mobile:px-5 laptop:mb-0 mobile:mb-4">
                        <label for="village" class="font-medium">Vila</label>
                        <select name="village-mc" class="mc-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($maputoVillages as $maputoVillage) {
                                    echo "<option value='" . $maputoVillage['village_name'] ."'>" . $maputoVillage['village_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="village-mp" class="mp-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($maputoProvinceVillages as $maputoProvinceVillage) {
                                    echo "<option value='" . $maputoProvinceVillage['village_name'] ."'>" . $maputoProvinceVillage['village_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="village-gz" class="gz-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($gazaVillages as $gazaVillage) {
                                    echo "<option value='" . $gazaVillage['village_name'] ."'>" . $gazaVillage['village_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="village-in" class="in-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($inhambaneVilages as $inhambaneVilage) {
                                    echo "<option value='" . $inhambaneVilage['village_name'] ."'>" . $inhambaneVilage['village_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="village-mn" class="mn-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($manicaVillages as $manicaVillage) {
                                    echo "<option value='" . $manicaVillage['village_name'] ."'>" . $manicaVillage['village_name'] . "</option>";
                               }
                            ?>
                        </select>
                        <select name="village-sf" class="sf-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($sofalaVillages as $sofalaVillage) {
                                    echo "<option value='" . $sofalaVillage['village_name'] ."'>" . $sofalaVillage['village_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="village-tt" class="tt-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($teteVilages as $teteVilage) {
                                    echo "<option value='" . $teteVilage['village_name'] ."'>" . $teteVilage['village_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="village-np" class="np-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($nampulaVillages as $nampulaVillage) {
                                    echo "<option value='" . $nampulaVillage['village_name'] ."'>" . $nampulaVillage['village_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="village-ns" class="ns-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($niassaVillages as $niassaVillage) {
                                   echo "<option value='" . $niassaVillage['village_name'] ."'>" . $niassaVillage['village_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="village-zb" class="zb-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($zambeziaVillages as $zambeziaVillage) {
                                    echo "<option value='" . $zambeziaVillage['village_name'] ."'>" . $zambeziaVillage['village_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="village-cd" class="cd-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($caboDelgadoVillages as $caboDelgadoVillage) {
                                    echo "<option value='" . $caboDelgadoVillage['village_name'] ."'>" . $caboDelgadoVillage['village_name'] . "</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="flex flex-col gap-2 laptop:w-[19%] mobile:w-full mobile:px-5 laptop:mb-0 mobile:mb-4">
                        <label for="zone" class="font-medium">Zona</label>
                        <select name="zone-mc" class="mc-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($maputoZones as $maputoZone) {
                                    echo "<option value='" . $maputoZone['zone_name'] ."'>" . $maputoZone['zone_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="zone-mp" class="mp-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($maputoProvinceZones as $maputoProvinceZone) {
                                    echo "<option value='" . $maputoProvinceZone['zone_name'] ."'>" . $maputoProvinceZone['zone_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="zone-gz" class="gz-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($gazaZones as $gazaZone) {
                                    echo "<option value='" . $gazaZone['zone_name'] ."'>" . $gazaZone['zone_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="zone-in" class="in-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($inhambaneZones as $inhambaneZone) {
                                    echo "<option value='" . $inhambaneZone['zone_name'] ."'>" . $inhambaneZone['zone_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="zone-mn" class="mn-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($mainicaZones as $mainicaZone) {
                                    echo "<option value='" . $mainicaZone['zone_name'] ."'>" . $mainicaZone['zone_name'] . "</option>";
                               }
                            ?>
                        </select>
                        <select name="zone-sf" class="sf-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($sofalaZonas as $sofalaZona) {
                                    echo "<option value='" . $sofalaZona['zone_name'] ."'>" . $sofalaZona['zone_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="zone-tt" class="tt-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($teteZones as $teteZone) {
                                    echo "<option value='" . $teteZone['zone_name'] ."'>" . $teteZone['zone_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="zone-np" class="np-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($nampulaZones as $nampulaZone) {
                                    echo "<option value='" . $nampulaZone['zone_name'] ."'>" . $nampulaZone['zone_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="zone-ns" class="ns-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($niassaZones as $niassaZone) {
                                   echo "<option value='" . $niassaZone['zone_name'] ."'>" . $niassaZone['zone_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="zone-zb" class="zb-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($zambeziaZones as $zambeziaZone) {
                                    echo "<option value='" . $zambeziaZone['zone_name'] ."'>" . $zambeziaZone['zone_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="zone-cd" class="cd-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($caboDelgadoZones as $caboDelgadoZone) {
                                    echo "<option value='" . $caboDelgadoZone['zone_name'] ."'>" . $caboDelgadoZone['zone_name'] . "</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="flex flex-col gap-2 laptop:w-[19%] mobile:w-full mobile:px-5 laptop:mb-0 mobile:mb-4">
                        <label for="township" class="font-medium">Povoação</label>
                        <select name="township-mc" class="mc-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($maputoTownships as $maputoTownship) {
                                    echo "<option value='" . $maputoTownship['township_name'] ."'>" . $maputoTownship['township_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="township-mp" class="mp-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($maputoProvinceTownships as $maputoProvinceTownship) {
                                    echo "<option value='" . $maputoProvinceTownship['township_name'] ."'>" . $maputoProvinceTownship['township_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="township-gz" class="gz-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($gazaTownships as $gazaTownship) {
                                    echo "<option value='" . $gazaTownship['township_name'] ."'>" . $gazaTownship['township_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="township-in" class="in-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($inhambaneTownships as $inhambaneTownship) {
                                    echo "<option value='" . $inhambaneTownship['township_name'] ."'>" . $inhambaneTownship['township_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="township-mn" class="mn-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($manicaTownships as $manicaTownship) {
                                    echo "<option value='" . $manicaTownship['township_name'] ."'>" . $manicaTownship['township_name'] . "</option>";
                               }
                            ?>
                        </select>
                        <select name="township-sf" class="sf-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($sofalaTownships as $sofalaTownship) {
                                    echo "<option value='" . $sofalaTownship['township_name'] ."'>" . $sofalaTownship['township_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="township-tt" class="tt-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($teteTownships as $teteTownship) {
                                    echo "<option value='" . $teteTownship['township_name'] ."'>" . $teteTownship['township_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="township-np" class="np-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($nampulaTownships as $nampulaTownship) {
                                    echo "<option value='" . $nampulaTownship['township_name'] ."'>" . $nampulaTownship['township_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="township-ns" class="ns-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($niassaTownships as $niassaTownship) {
                                   echo "<option value='" . $niassaTownship['township_name'] ."'>" . $niassaTownship['township_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="township-zb" class="zb-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($zambwziaTownships as $zambwziaTownship) {
                                    echo "<option value='" . $zambwziaTownship['township_name'] ."'>" . $zambwziaTownship['township_name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="township-cd" class="cd-field border border-orange-700 focus:outline-none outline-none rounded">
                            <?php
                                foreach ($caboDelgadoTownships as $caboDelgadoTownship) {
                                    echo "<option value='" . $caboDelgadoTownship['township_name'] ."'>" . $caboDelgadoTownship['township_name'] . "</option>";
                                }
                            ?>
                        </select>
                    </div>
                </fieldset>
                <fieldset class="border border-orange-700 mx-auto rounded-md flex flex-col flex-wrap justify-evenly py-5 my-5 laptop:w-[97%] mobile:w-[90%]">
                    <legend class="text-lg font-semibold px-4">Entidades Patrimoniais/Vias</legend>
                    <div class="flex laptop:flex-row mobile:flex-col laptop:justify-evenly laptop:gap-0 mobile:gap-2">
                        <div class="flex flex-col gap-2 laptop:w-[19%] mobile:w-full mobile:px-5 laptop:mb-0 mobile:mb-4">
                            <label for="property-type" class="font-medium">Tipo de Propriedade</label>
                            <select name="property-type" class="border border-orange-700 focus:outline-none outline-none rounded">
                                <option value="Casa Geminada">Casa Geminada</option>
                                <option value="Prédio">Prédio</option>
                                <option value="Condomínio">Condomínio</option>
                                <option value="Condomínio">Flat</option>
                            </select>
                        </div>
                        <div class="flex flex-col gap-2 laptop:w-[19%] mobile:w-full mobile:px-5 laptop:mb-0 mobile:mb-4">
                            <label for="floor" class="font-medium">Andar</label>
                            <input type="text" name="floor" value="R/C" class="border border-orange-700 focus:outline-none outline-none rounded">
                        </div>
                        <div class="flex flex-col gap-2 laptop:w-[19%] mobile:w-full mobile:px-5 laptop:mb-0 mobile:mb-4">
                            <label for="side" class="font-medium">Lado</label>
                            <input type="text" name="side"  class="border border-orange-700 focus:outline-none outline-none rounded">
                        </div>
                        <div class="flex flex-col gap-2 laptop:w-[19%] mobile:w-full mobile:px-5 laptop:mb-0 mobile:mb-4">
                            <label for="door-number" class="font-medium">Número da Porta</label>
                            <input type="number" min="1" name="door-number"  class="border border-orange-700 focus:outline-none outline-none rounded">
                        </div>
                    </div>
                    <div class="flex mt-2 laptop:flex-row mobile:flex-col laptop:justify-evenly laptop:gap-0 mobile:gap-2">
                        <div class="flex flex-col gap-2 laptop:w-[19%] mobile:w-full mobile:px-5 laptop:mb-0 mobile:mb-4">
                            <label for="road-type" class="font-medium">Tipo de Via</label>
                            <select name="road-type" class="border border-orange-700 focus:outline-none outline-none rounded">
                                <option value="Avenida">Avenida</option>
                                <option value="Rua">Rua</option>
                            </select>
                        </div>
                        <div class="flex flex-col gap-2 laptop:w-[19%] mobile:w-full mobile:px-5 laptop:mb-0 mobile:mb-4">
                            <label for="road-name" class="font-medium">Nome/Número da Via</label>
                            <input type="text" name="road-name" class="border border-orange-700 focus:outline-none outline-none rounded">
                        </div>
                        <div class="flex flex-col gap-2 laptop:w-[19%] mobile:w-full mobile:px-5 laptop:mb-0 mobile:mb-4">
                            <label for="stalemate" class="font-medium">Impasse</label>
                            <input type="text" name="stalemate"  class="border border-orange-700 focus:outline-none outline-none rounded">
                        </div>
                        <div class="flex flex-col gap-2 laptop:w-[19%] mobile:w-full mobile:px-5 laptop:mb-0 mobile:mb-4">
                            <label for="viaduct" class="font-medium">Viaduto</label>
                            <input type="text" name="viaduct"  class="border border-orange-700 focus:outline-none outline-none rounded">
                        </div>
                    </div>
                    <div class="flex mt-2 laptop:flex-row mobile:flex-col laptop:justify-evenly laptop:gap-0 mobile:gap-2">
                        <div class="flex flex-col gap-2 laptop:w-[19%] mobile:w-full mobile:px-5 laptop:mb-0 mobile:mb-4">
                            <label for="block" class="font-medium">Quadra</label>
                            <input type="text" name="block" class="border border-orange-700 focus:outline-none outline-none rounded">
                        </div>
                        <div class="flex flex-col gap-2 laptop:w-[19%] mobile:w-full mobile:px-5 laptop:mb-0 mobile:mb-4">
                            <label for="roundabout" class="font-medium">Rotunda</label>
                            <input type="text" name="roundabout" class="border border-orange-700 focus:outline-none outline-none rounded">
                        </div>
                        <div class="flex flex-col gap-2 laptop:w-[19%] mobile:w-full mobile:px-5 laptop:mb-0 mobile:mb-4">
                            <label for="lane" class="font-medium">Travessas</label>
                            <input type="text" name="lane" class="border border-orange-700 focus:outline-none outline-none rounded">
                        </div>
                        <div class="flex flex-col gap-2 laptop:w-[19%] mobile:w-full mobile:px-5 laptop:mb-0 mobile:mb-4">
                            <label for="wide" class="font-medium">Largos</label>
                            <input type="text" name="wide"  class="border border-orange-700 focus:outline-none outline-none rounded">
                        </div>
                        <div class="flex flex-col gap-2 laptop:w-[19%] mobile:w-full mobile:px-5 laptop:mb-0 mobile:mb-4">
                            <label for="bridges" class="font-medium">Pontes</label>
                            <input type="text" name="bridges"  class="border border-orange-700 focus:outline-none outline-none rounded">
                        </div>
                    </div>
                    <div class="flex mt-4 laptop:flex-row mobile:flex-col laptop:justify-evenly laptop:gap-0 mobile:gap-2">
                        <div class="flex flex-col gap-2 laptop:w-[19%] mobile:w-full mobile:px-5 laptop:mb-0 mobile:mb-4">
                            <label for="plaza" class="font-medium">Praças</label>
                            <input type="text" name="plaza" class="border border-orange-700 focus:outline-none outline-none rounded">
                        </div>
                        <div class="flex flex-col gap-2 laptop:w-[19%] mobile:w-full mobile:px-5 laptop:mb-0 mobile:mb-4">
                            <label for="length" class="font-medium">Comprimento (metros)</label>
                            <input type="number" name="length" class="border border-orange-700 focus:outline-none outline-none rounded">
                        </div>
                        <div class="flex flex-col gap-2 laptop:w-[19%] mobile:w-full mobile:px-5 laptop:mb-0 mobile:mb-4">
                            <label for="width" class="font-medium">Largura (metros)</label>
                            <input type="number" name="width"  class="border border-orange-700 focus:outline-none outline-none rounded">
                        </div>
                        <div class="flex flex-col gap-2 laptop:w-[19%] mobile:w-full mobile:px-5 laptop:mb-0 mobile:mb-4">
                            <label for="occupancy" class="font-medium">Ocupação</label>
                            <input type="text" name="occupancy"  class="border border-orange-700 focus:outline-none outline-none rounded">
                        </div>
                        <div class="flex flex-col gap-2 laptop:w-[19%] mobile:w-full mobile:px-5 laptop:mb-0 mobile:mb-4">
                            <label for="affectation" class="font-medium">Afetação</label>
                            <input type="text" name="affectation"  class="border border-orange-700 focus:outline-none outline-none rounded">
                        </div>
                    </div>
                </fieldset>
                <fieldset class="border border-orange-700 mx-auto rounded-md flex flex-row flex-wrap justify-evenly py-5 my-5 laptop:flex-row mobile:flex-col laptop:w-[97%] mobile:w-[90%]">
                    <legend class="text-lg font-semibold px-4">Entidades Postais</legend>
                    <div class="flex flex-col gap-2 laptop:w-[19%] mobile:w-full mobile:px-5 laptop:mb-0 mobile:mb-4">
                        <label for="city-block" class="font-medium">Quarteirão</label>
                        <input type="number" name="city-block" min="1" class="border border-orange-700 focus:outline-none outline-none rounded">
                    </div>
                    <div class="flex flex-col gap-2 laptop:w-[19%] mobile:w-full mobile:px-5 laptop:mb-0 mobile:mb-4">
                        <label for="lateral" class="font-medium">Lateral Alfa-Numérico</label>
                        <select name="lateral" class="border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                        </select>
                    </div>
                    <div class="flex flex-col gap-2 laptop:w-[19%] mobile:w-full mobile:px-5 laptop:mb-0 mobile:mb-4">
                        <label for="entry" class="font-medium">Entrada</label>
                        <select name="entry" class="border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                        </select>
                    </div>
                    <div class="flex flex-col gap-2 laptop:w-[19%] mobile:w-full mobile:px-5 laptop:mb-0 mobile:mb-4">
                        <label for="mailbox" class="font-medium">Caixa Postal</label>
                        <input type="text" name="mailbox" class="border border-orange-700 focus:outline-none outline-none rounded">
                    </div>
                    <div class="flex flex-col gap-2 laptop:w-[19%] mobile:w-full mobile:px-5 laptop:mb-0 mobile:mb-4">
                        <label for="post-office" class="font-medium">Estacão de correios</label>
                        <input type="text" name="post-office" class="border border-orange-700 focus:outline-none outline-none rounded">
                    </div>
                </fieldset>
                <fieldset class="border border-orange-700 mx-auto rounded-md gap-4 py-5 my-5 laptop:flex-row mobile:flex-col laptop:w-[97%] mobile:w-[90%]">
                    <legend class="text-lg font-semibold px-4">Entidades Espaciais</legend>
                    <div class="flex justify-evenly w-full mobile:px-5 laptop:mb-0 mobile:mb-2 laptop:flex-row mobile:flex-col">
                        <div class="flex flex-col gap-2 laptop:mb-0 mobile:mb-4">
                            <label for="latitude" class="font-medium">Latitude</label>
                            <input type="text" name="latitude" placeholder="(Decimal Degrees)" class="border border-orange-700 focus:outline-none outline-none rounded px-2">
                        </div>
                        <div class="flex flex-col gap-2 laptop:mb-0 mobile:mb-4">
                            <label for="latitude-dms" class="font-medium">Latitude DMS</label>
                            <input type="text" name="latitude-dms" placeholder="(Degrees, Minutes, Seconds)" class="border border-orange-700 focus:outline-none outline-none rounded px-2">
                        </div>
                        <div class="flex flex-col gap-2 laptop:mb-0 mobile:mb-4">
                            <label for="longitude" class="font-medium">Longetude</label>
                            <input type="text" name="longitude" placeholder="(Decimal Degrees)" class="border border-orange-700 focus:outline-none outline-none rounded px-2">
                        </div>
                        <div class="flex flex-col gap-2 laptop:mb-0 mobile:mb-4">
                            <label for="longitude-dms" class="font-medium">Longitude DMS</label>
                            <input type="text" name="longitude-dms" placeholder="(Degrees, Minutes, Seconds)" class="border border-orange-700 focus:outline-none outline-none rounded px-2">
                        </div>
                    </div>
                    <div class="flex justify-evenly w-full mobile:px-5 laptop:mb-0 mobile:mb-4 laptop:flex-row mobile:flex-col laptop:mt-4">
                        <div class="flex flex-col gap-2 laptop:mb-0 mobile:mb-4">
                            <label for="sea-​​rise" class="font-medium">Elevação do Mar</label>
                            <input type="text" name="sea-​​rise" class="border border-orange-700 focus:outline-none outline-none rounded px-2">
                        </div>
                        <div class="flex flex-col gap-2 laptop:mb-0 mobile:mb-4">
                            <label for="via-lat-start" class="font-medium">Via Lat Start</label>
                            <input type="text" name="via-lat-start" class="border border-orange-700 focus:outline-none outline-none rounded px-2">
                        </div>
                        <div class="flex flex-col gap-2 laptop:mb-0 mobile:mb-4">
                            <label for="via-lat-end" class="font-medium">Via Lat End</label>
                            <input type="text" name="via-lat-end" class="border border-orange-700 focus:outline-none outline-none rounded px-2">
                        </div>
                        <div class="flex flex-col gap-2">
                            <label for="aerial-map" class="font-medium">Mapa Aérea c/gateway</label>
                            
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
         <?php  include "../components/footer.php"; ?>
    </footer>

    <script src="../../assets/scripts/jquery-3.6.0.js"></script>
    <script src="../../assets/scripts/register.js"></script>
    <footer>
         <?php  include "../components/footer.php"; ?>
    </footer>
</body>
</html>