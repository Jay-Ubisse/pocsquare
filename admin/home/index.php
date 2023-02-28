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
    <title>Página Inicial | Pocsquare</title>
    <link rel="stylesheet" href="../../assets/styles/output.css" />
    <script src="https://kit.fontawesome.com/4b43862993.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <?php include "../components/header.php" ?>
    </header>
    <main class="bg-gray-200 p-1 h-[calc(100vh-100px)] overflow-scroll">
        <section class="bg-white w-9/12 h-3/5 mx-auto mt-20 p-6 rounded-lg">
            <h1 class="text-[#9d50bb] text-xl font-semibold border-b border-[#9d50bb] w-fit">DASHBOARD</h1>
            <div class="flex flex-row gap-2 h-3/5 mt-10">
                <a href="../register/" class="border-2 border-[#9d50bb] rounded-md w-[50%] h-full flex gap-3 justify-center items-center text-[#9d50bb] text-xl font-bold hover:bg-[#9d50bb] hover:text-white">
                    <span>
                        <i class="fa-solid fa-floppy-disk fa-2x"></i>
                    </span>
                    <span>
                        Cadastrar Local
                    </span>
                </a>
                <a href="../daily-presence/" class="border-2 border-[#9d50bb] rounded-md w-[50%] h-full flex gap-3 justify-center items-center text-[#9d50bb] text-xl font-bold hover:bg-[#9d50bb] hover:text-white">
                    <span>
                    <i class="fa-solid fa-magnifying-glass fa-2x"></i>
                    </span>
                    <span>
                        Pesquisar Local
                    </span>
                </a>
                
            </div>
        </section>
    </main>
    <footer>
        <?php include "../components/footer.php" ?>
    </footer>
</body>
</html>