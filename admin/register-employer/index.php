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
    <title>Cadastrar Funcionário | Pocsquare</title>
    <link rel="stylesheet" href="../../assets/styles/output.css" />
    <script src="https://kit.fontawesome.com/4b43862993.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <?php include "../components/header.php"; ?>
    </header>
    <main class="h-screen">

        <section class="laptop:hidden mobile:flex mobile:justify-center mobile:items-center mobile:text-sm mobile:font-medium h-screen text-center">
            <h1>Aceda a pagina a partir de um computador para poder visualizar as estatísticas.</h1>
        </section>
        <section class="mobile:hidden laptop:block h-screen">
            <form method="post" action="../../server/src/register-employer.php" class="border-2 border-orange-700 rounded-xl mx-auto mt-10 mb-20 laptop:w-[70%] mobile:w-[95%]" autocomplete="none">
                <h1 class="w-fit mx-auto my-5 font-bold text-2xl text-orange-700">Cadastrar Funcionário</h1>
                <?php
                if (isset($_SESSION["register-response"])) {
                    echo "<div class='bg-orange-500 text-white font-semibold flex justify-center my-6 py-4'>";
                    echo $_SESSION["register-response"];
                    unset($_SESSION["register-response"]);
                    echo "</div>";
                }
                ?>
                <div class="w-[90%] mx-auto flex flex-row justify-between">
                    <input type="text" name="first-name" placeholder="Nome" class="h-10 w-[49%] px-3 py-1 focus:outline-none border focus:border-2 border-orange-500 rounded-md placeholder-slate-400 text-slate-500" autocomplete="none">
                    <input type="text" name="last-name" placeholder="Apelido" class="h-10 w-[49%] px-3 py-1 focus:outline-none border focus:border-2 border-orange-500 rounded-md placeholder-slate-400 text-slate-500" autocomplete="none">
                </div>
                <div class="w-[90%] mx-auto flex flex-row justify-between mt-5">
                    <input type="email" name="email" placeholder="Email" class="h-10 w-[79%] px-3 py-1 focus:outline-none border focus:border-2 border-orange-500 rounded-md placeholder-slate-400 text-slate-500" autocomplete="none">
                    <input type="date" name="birth-date" placeholder="Apelido" class="h-10 w-[19%] px-3 py-1 focus:outline-none border focus:border-2 border-orange-500 rounded-md placeholder-slate-400">
                </div>
                <div class="w-[90%] mx-auto flex flex-row justify-between mt-5">
                    <div class="w-[49%] mx-auto flex flex-row justify-between">
                        <input type="text" placeholder="+258" disabled class="h-10 w-[20%] px-3 py-1 focus:outline-none border focus:border-2 border-orange-500 rounded-md placeholder-slate-400">
                        <input type="number" mame="cell1" placeholder="Numero de celular" class="h-10 w-[79%] px-3 py-1 focus:outline-none border focus:border-2 border-orange-500 rounded-md text-slate-400">
                    </div>
                    <div class="w-[49%] mx-auto flex flex-row justify-between">
                        <input type="text" placeholder="+258" disabled class="h-10 w-[20%] px-3 py-1 focus:outline-none border focus:border-2 border-orange-500 rounded-md placeholder-slate-400">
                        <input type="number" mame="cell2" placeholder="Celular secundário (opcional)" class="h-10 w-[79%] px-3 py-1 focus:outline-none border focus:border-2 border-orange-500 rounded-md text-slate-400">
                    </div>
                </div>
                <div class="w-[90%] mx-auto flex flex-row justify-between mt-5">
                    <input type="text" name="address" placeholder="Endereço" class="h-10 w-[79%] px-3 py-1 focus:outline-none border focus:border-2 border-orange-500 rounded-md placeholder-slate-400 text-slate-500" autocomplete="none">
                    <select name="role" class="h-10 w-[19%] px-3 py-1 focus:outline-none border focus:border-2 border-orange-500 rounded-md placeholder-slate-400">
                        <option value="tech">Técnico</option>
                        <option value="supervisor">Supervisor</option>
                    </select>
                </div>
                <div class="flex flex-row gap-5 w-fit mx-auto my-10">
                    <input type="submit" value="Cadastrar" class="bg-green-700 rounded-md text-white font-medium px-4 py-2">
                    <input type="reset" value="Cancelar" class="bg-red-700 rounded-md text-white font-medium px-4 py-2">
                </div>
                </div>
            </form>
        </section>
    </main>
    <footer>
        <?php include "../components/footer.php"; ?>
    </footer>

    <script src="../../assets/scripts/jquery-3.6.0.js"></script>
    <script src="../../assets/scripts/admin/register.js"></script>
</body>

</html>