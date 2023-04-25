<?php
require "../../server/config/connect.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Estatística | Pocsquare</title>
  <link rel="stylesheet" href="../../assets/styles/output.css" />
  <link rel="stylesheet" href="../../assets/styles/progress-bar.css" />
  <script src="https://kit.fontawesome.com/4b43862993.js" crossorigin="anonymous"></script>
</head>

<body class="bg-gray-100">

  <section class="laptop:hidden mobile:flex mobile:justify-center mobile:items-center mobile:text-sm mobile:font-medium h-screen text-center">
    <h1>Aceda a pagina a partir de um computador para poder visualizar as estatísticas.</h1>
  </section>
  <section class="mobile:hidden laptop:block h-screen">
    <header class="h-[8%] bg-orange-800 text-white font-semibold flex flex-row justify-between items-center px-7 laptop:text-base mobile:text-sm">
      <div class="laptop:text-lg mobile:text-sm">
        <?php
        echo $_SESSION['user-data']['username'];
        ?>
      </div>
      <div class="flex flex-row gap-4">
        <div class="border border-white rounded-md px-5 py-1 bg-orange-800 hover:bg-orange-600">
          <a href="../home/">Dashboard</a>
        </div>
        <div class="border border-white rounded-md px-5 py-1 bg-orange-800 hover:bg-orange-560">
          <a href="../../server/src/logout-route.php">Sair</a>
        </div>
      </div>
    </header>
    <main class="p-0 flex flex-row justify-evenly h-[89%]">
      <aside class="w-[15%] border-y border-white bg-orange-800 h-full text-white pt-3 pl-6 flex flex-col gap-3 items-start select-none">
        <div class="moz hover:text-orange-300 flex flex-row gap-2 items-center hover:cursor-pointer">
          <span><i class="fa-solid fa-house"></i></span>
          <span class="text-base font-medium">Moçambique</span>
        </div>
        <div class="south hover:text-orange-300 flex flex-row gap-2 items-center hover:cursor-pointer">
          <i class="fa-solid fa-circle-dot"></i>
          <span class="text-sm font-normal">Zona Sul</span>
        </div>
        <div class="center hover:text-orange-300 flex flex-row gap-2 items-center hover:cursor-pointer">
          <i class="fa-solid fa-circle-dot"></i>
          <span class="text-sm font-normal">Zona Centro</span>
        </div>
        <div class="north hover:text-orange-300 flex flex-row gap-2 items-center hover:cursor-pointer">
          <i class="fa-solid fa-circle-dot"></i>
          <span class="text-sm font-normal">Zona Norte</span>
        </div>
        <div class="flex flex-col gap-2">
          <div class="provinces hover:text-orange-300 flex flex-row gap-2 items-center hover:cursor-pointer">
            <i class="fa-solid fa-chevron-down"></i>
            <span class="text-sm font-normal">Províncias</span>
          </div>
          <ul class="provinces-list ml-7 flex flex-col gap-1">
            <li class="mc text-xs font-normal hover:text-orange-300 hover:cursor-pointer">
              <span>
                <i class="fa-solid fa-circle-dot fa-sm"></i>
              </span>
              <span>
                Maputo Cidade
              </span>
            </li>
            <li class="mp text-xs font-normal hover:text-orange-300 hover:cursor-pointer">
              <span>
                <i class="fa-solid fa-circle-dot fa-sm"></i>
              </span>
              <span>
                Maputo Província
              </span>
            </li>
            <li class="gz text-xs font-normal hover:text-orange-300 hover:cursor-pointer">
              <span>
                <i class="fa-solid fa-circle-dot fa-sm"></i>
              </span>
              <span>
                Gaza
              </span>
            </li>
            <li class="in text-xs font-normal hover:text-orange-300 hover:cursor-pointer">
              <span>
                <i class="fa-solid fa-circle-dot fa-sm"></i>
              </span>
              <span>
                Inhambane
              </span>
            </li>
            <li class="mn text-xs font-normal hover:text-orange-300 hover:cursor-pointer">
              <span>
                <i class="fa-solid fa-circle-dot fa-sm"></i>
              </span>
              <span>
                Manica
              </span>
            </li>
            <li class="sf text-xs font-normal hover:text-orange-300 hover:cursor-pointer">
              <span>
                <i class="fa-solid fa-circle-dot fa-sm"></i>
              </span>
              <span>
                Sofala
              </span>
            </li>
            <li class="tt text-xs font-normal hover:text-orange-300 hover:cursor-pointer">
              <span>
                <i class="fa-solid fa-circle-dot fa-sm"></i>
              </span>
              <span>
                Tete
              </span>
            </li>
            <li class="np text-xs font-normal hover:text-orange-300 hover:cursor-pointer">
              <span>
                <i class="fa-solid fa-circle-dot fa-sm"></i>
              </span>
              <span>
                Nampula
              </span>
            </li>
            <li class="zb text-xs font-normal hover:text-orange-300 hover:cursor-pointer">
              <span>
                <i class="fa-solid fa-circle-dot fa-sm"></i>
              </span>
              <span>
                Zambézia
              </span>
            </li>
            <li class="ns text-xs font-normal hover:text-orange-300 hover:cursor-pointer">
              <span>
                <i class="fa-solid fa-circle-dot fa-sm"></i>
              </span>
              <span>
                Niassa
              </span>
            </li>
            <li class="cd text-xs font-normal hover:text-orange-300 hover:cursor-pointer">
              <span>
                <i class="fa-solid fa-circle-dot fa-sm"></i>
              </span>
              <span>
                Cabo Delgado
              </span>
            </li>
          </ul>
        </div>
      </aside>
      <article class="w-[85%] h-full bg-slate-200 p-2">
        <section class="moz-section">
          <?php include "./components/moz-section.html"  ?>
        </section>
      </article>
    </main>
    <footer class="h-[3%] bg-orange-800 text-white text-center w-full laptop:text-xs">
      <p>&copy; Pocsquare. Todos os direitos reservados.</p>
    </footer>
  </section>

  <script src="../../assets/scripts/jquery-3.6.0.js"></script>
  <script src="../../assets/scripts/statistic.js"></script>
  <script src="../../assets/scripts/number-counters.js"></script>
</body>

</html>