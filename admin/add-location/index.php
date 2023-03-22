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
    <title>Adicionar Locais | Pocsquare</title>
    <link rel="stylesheet" href="../../assets/styles/output.css" />
    <script src="https://kit.fontawesome.com/4b43862993.js" crossorigin="anonymous"></script>
</head>
<body>
    <header class="bg-orange-700 text-white font-semibold flex flex-row justify-between items-center px-7 py-4">
        <div class="text-lg">
            <?php
                echo $_SESSION['user-data']['username'];
            ?>
        </div>
        <div class="flex flex-row gap-4">
            <div class="border border-white rounded-md px-5 py-2 bg-orange-700 hover:bg-orange-500">
                <a href="../home/">Dashboard</a>
            </div>
            <div class="border border-white rounded-md px-5 py-2 bg-orange-700 hover:bg-orange-500">
                <a href="../../server/src/logout-route.php">Sair</a>
            </div>
        </div>
    </header>
    <main class="bg-gray-200 p-1 h-[calc(100vh-100px)] overflow-scroll">
        <section class="bg-white w-5/6 h-fit mx-auto my-20 p-6 rounded-lg">
            <h1 class="text-orange-700 text-xl font-semibold border-b border-orange-700 w-fit">DASHBOARD</h1>
            <div class="flex flex-row justify-evenly h-44 mt-10">
                <a href="./location/district/" class="border-2 border-orange-700 rounded-md w-[30%] h-full flex justify-center items-center text-orange-700 text-xl font-bold hover:bg-orange-700 hover:text-white">
                    Adicionar Distrito
                </a>
                <a href="./location/administrative-post/" class="border-2 border-orange-700 rounded-md w-[30%] h-full flex justify-center items-center text-orange-700 text-xl font-bold hover:bg-orange-700 hover:text-white">
                    Adicionar Posto Administrativo
                </a>
                <a href="#" class="border-2 border-orange-700 rounded-md w-[30%] h-full flex justify-center items-center text-orange-700 text-xl font-bold hover:bg-orange-700 hover:text-white">
                    Adicionar Localidade
                </a>
            </div>
            <div class="flex flex-row justify-evenly h-44 mt-10">
                <a href="#" class="border-2 border-orange-700 rounded-md w-[30%] h-full flex justify-center items-center text-orange-700 text-xl font-bold hover:bg-orange-700 hover:text-white">
                    Adicionar bairro
                </a><a href="#" class="border-2 border-orange-700 rounded-md w-[30%] h-full flex justify-center items-center text-orange-700 text-xl font-bold hover:bg-orange-700 hover:text-white">
                    Adicionar Zona
                </a>
                <a href="#" class="border-2 border-orange-700 rounded-md w-[30%] h-full flex justify-center items-center text-orange-700 text-xl font-bold hover:bg-orange-700 hover:text-white">
                    Adicionar Povoação
                </a>
            </div>
            <div class="flex flex-row justify-evenly h-44 mt-10">
                <a href="#" class="border-2 border-orange-700 rounded-md w-[30%] h-full flex justify-center items-center text-orange-700 text-xl font-bold hover:bg-orange-700 hover:text-white">
                    Adicionar Vila
                </a><a href="#" class="border-2 border-orange-700 rounded-md w-[30%] h-full flex justify-center items-center text-orange-700 text-xl font-bold hover:bg-orange-700 hover:text-white">
                    Adicionar Círculo
                </a>
                <a href="#" class="border-2 border-orange-700 rounded-md w-[30%] h-full flex justify-center items-center text-orange-700 text-xl font-bold hover:bg-orange-700 hover:text-white">
                    Adicionar Célula
                </a>
            </div>
        </section>
    </main>
    <footer>
        <?php include "../components/footer.php" ?>
    </footer>
</body>
</html>