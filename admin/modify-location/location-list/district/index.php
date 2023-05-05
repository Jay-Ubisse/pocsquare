<?php
require "../../../../server/config/connect.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Distrito | Pocsquare</title>
    <link rel="stylesheet" href="../../../../assets/styles/output.css" />
    <script src="https://kit.fontawesome.com/4b43862993.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <?php include "../components/header.php"; ?>
    </header>
    <main class="p-1 flex flex-row justify-evenly">
        <section class="mt-10 w-fit">
            <table id="all" class="border-collapse border-2 border-orange-700">

            </table>
        </section>
        <section class="border-2 rounded-md border-orange-700 h-[100px] p-4 w-[23%] mt-10">
            <label for="province" class="font-medium">Província</label>
            <select name="province" id="provinces" onchange="getTableData()" class="border border-orange-700 focus:outline-none outline-none rounded">
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
        </section>
    </main>
    <footer>
        <?php include "../../../components/footer.php" ?>
    </footer>

    <script src="../../../../assets/scripts/jquery-3.6.0.js"></script>
    <script>
        $("#all").load("../../../../server/src/modify-location/location-list/districts/locations-list.php",{data: "Maputo Cidade"});

        function getTableData() {
            let province = $("#provinces").val();
            $("#all").load("../../../../server/src/modify-location/location-list/districts/locations-list.php",{data: province});
        }

        function sendInfo(e, data) {
            e.preventDefault();
            $.post("../../../../server/src/modify-location/edit-location/edit-district.php", function(data) {
                alert(data);
            });
        }
    </script>
    <script src="../../../../assets/scripts/admin/session-timeout-2.js"></script>
</body>

</html>