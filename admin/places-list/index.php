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
    <title>Lista de lugares | Pocsquare</title>
    <link rel="stylesheet" href="../../assets/styles/output.css">
</head>
<body>
    <header>
        <?php include "../components/header.php"; ?>
    </header>
    <main class="bg-gray-200 p-1 h-[calc(100vh-100px)] flex flex-row gap-4">
        <section class="mt-10 ml-10 w-[75%]">
            <table id="all" class="border-collapse border-2 border-orange-700">
                
            </table>
        </section>
        <section class="border-2 rounded-md border-orange-700 max-h-[300px] p-4 w-[23%] mt-10">
            <label for="filter" class="text-lg font-semibold">Filtrar por:</label>
            <hr class="w-20 bg-orange-700 h-[3px] mb-3 mt-1 font-extrabold rounded" />
            <select onchange="filterOptions()" name="filter" id="filter" class="outline-none focus:outline-orange-700">
                <option value="name">Província</option>
                <option value="start-date">Distrito</option>
                <option value="phone">Posto Administrativo</option>
                <option value="phone">Bairro</option>
                <option value="phone">Técnico Responsável</option>
                <option value="all">Todos</option>
            </select>
            <div id="name-form" class="mt-10 flex flex-col gap-4">
                <input type="text" id="name" class="h-8 rounded-md outline-none focus:outline-orange-700 px-2">
                <button onclick="loadByName()" class="w-fit px-4 py-2 bg-orange-700 text-white rounded-md">Pesquisar</button>    
            </div>
        </section>
    </main>
    <footer>
        <?php include "../components/footer.php"; ?>
    </footer>

    <script src="../../assets/scripts/jquery-3.6.0.js"></script>
    <script>
        $("#all").load("../../server/src/places-lists/all-places.php");
    </script>
</body>
</html>