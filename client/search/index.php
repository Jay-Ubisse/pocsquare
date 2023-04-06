<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procurar | Pocsquare</title>
    <link rel="stylesheet" href="../../assets/styles/output.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Schibsted+Grotesk:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4b43862993.js" crossorigin="anonymous"></script>
</head>
<body class="bg-gray-200 font-schibsted p-0">
    <header>
        <!-- Header added using ajax-->
    </header>
    <main class="bg-gray-200 p-0">
        <section class="bg-search-background p-0 bg-cover border mt-0 min-h-[400px]">
            <div class="bg-white/30 min-h-[400px] p-1 w-full">
                <div class="mx-auto mt-20 laptop:w-1/2 mobile:w-[95%]">
                    <div class="text-center mb-2 p-4 bg-white/80">
                        <h1 class="laptop:text-lg mobile:text-base font-bold mb-5">Encontre um endereço</h1>
                        <p class="laptop:text-base mobile:text-sm font-medium">Digite uma parte do endereço ou código postal</p>
                    </div>
                    <div>
                        <input type="search" placeholder="Pesquisar" id="searchValue" class="py-3 px-3 focus:outline-none focus:border-4 focus:border-orange-700 focus:shadow-orange-700 focus:shadow-fixed-2 text-gray-600 placeholder-gray-600 font-medium w-full" />
                    </div>
                    <div id="results" class="bg-white mt-1 max-h-[500px] overflow-y-scroll">

                    </div>
                </div>
            </div>
        </section>
        <section id="location-info" class="bg-slate-300 w-3/5 mx-auto rounded-lg my-20 p-5 flex flex-row justify-between">
            <div>
                <p><span><b>Província: </b></span><span id="province"></span></p>
                <p><span><b>Distrito: </b></span><span id="district"></span></p>
                <p><span><b>Posto Administrativo: </b></span><span id="administrative-post"></span></p>
                <p><span><b>CEP: </b></span><span id="cep"></span></p>
            </div>
            <div class="border border-orange-700 rounded-md h-64 w-64 flex justify-center items-center font-bold">
                    MAPA
            </div>
        </section>
        <section>
            
        </section>
    </main>
    <Footer>
        <!-- Footer added using ajax-->
    </Footer>
    <script src="../../assets/scripts/jquery-3.6.0.js"></script>
    <script src="../../assets/scripts/search.js"></script>
</body>
</html>