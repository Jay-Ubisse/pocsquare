<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procurar | Pocsquare</title>
    <link rel="stylesheet" href="../../assets/styles/output.css">
    <script src="https://kit.fontawesome.com/4b43862993.js" crossorigin="anonymous"></script>
</head>
<body class="bg-gray-200">
    <header class="bg-orange-700 text-white font-semibold flex flex-row justify-between items-center px-7 py-4">
            <a href="../" class="text-lg flex flex-row gap-3">
                <span><i class="fa-solid fa-arrow-left fa=lg"></i></span><span>Voltar ao Inicío</span>
            </a>
            <div class="text-xl font-bold px-3 py-1 rounded-md bg-white text-orange-700 shadow-sm shadow-gray-300">
                Pocsquare
            </div>
    </header>
    <main class="bg-gray-200 h-48 p-1">
        <section class="w-fit mx-auto mt-20">
            <div>
                <input type="search" placeholder="Pesquisar" size="80" id="searchValue" onchange="" class="py-3 px-3 outline-none focus:outline focus:outline-orange-700 text-gray-600 font-medium" />
                <button type="submit" onclick="searchByClick()" class="text-white font-medium text-lg bg-orange-700 py-3 px-5"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
            <div id="results" class="bg-white mt-5">

            </div>
        </section>
    </main>

    <script src="../../assets/scripts/jquery-3.6.0.js"></script>
    <script src="../../assets/scripts/search.js"></script>
</body>
</html>