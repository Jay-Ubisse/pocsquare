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
                    <div class="text-center mb-1 p-4 bg-white/80">
                        <h1 class="laptop:text-lg mobile:text-base font-bold mb-5">Encontre um endereço</h1>
                        <p class="laptop:text-base mobile:text-sm font-medium">Selecione um País e digite uma parte do endereço ou código postal</p>
                    </div>
                    <div class="text-center mb-2 p-4">
                        <select name="country" onchange="toggleSearchField()" class="country px-4 py-2 focus:outline-none focus:border-4 focus:border-orange-700 focus:shadow-orange-700 focus:shadow-fixed-2 text-gray-600 font-medium">
                            <option value="select-country"><-- Selecione o País --></option>
                            <option value="mozambique">Moçambique</option>
                            <option value="angola">Angola</option>
                            <option value="cabo-verde">Cabo Verde</option>
                        </select>
                    </div>
                    <div id="mz-search-field">
                        <input type="search" placeholder="Pesquisar" id="searchValue" class="py-3 px-3 focus:outline-none focus:border-4 focus:border-orange-700 focus:shadow-orange-700 focus:shadow-fixed-2 text-gray-600 placeholder-gray-600 font-medium w-full" />
                    </div>
                    <div id="ao-search-field">
                        <input type="search" placeholder="Pesquisar" id="searchValue" class="py-3 px-3 focus:outline-none focus:border-4 focus:border-orange-700 focus:shadow-orange-700 focus:shadow-fixed-2 text-gray-600 placeholder-gray-600 font-medium w-full" />
                    </div>
                    <div id="cv-search-field">
                        <input type="search" placeholder="Pesquisar" id="searchValue" class="py-3 px-3 focus:outline-none focus:border-4 focus:border-orange-700 focus:shadow-orange-700 focus:shadow-fixed-2 text-gray-600 placeholder-gray-600 font-medium w-full" />
                    </div>
                    <div id="hidden-search-field">
                        <input type="search" disabled placeholder="Pesquisar" id="searchValue" class="py-3 px-3 focus:outline-none focus:border-4 focus:border-orange-700 focus:shadow-orange-700 focus:shadow-fixed-2 text-gray-600 placeholder-gray-600 font-medium w-full" />
                    </div>
                    <div id="info-field" class="flex laptop:flex-row mobile:flex-col gap-2 bg-white/80 text-center mb-1 p-4">
                        <span class="text-yellow-500"><i class="fa-solid fa-circle-info fa-2x"></i></span>
                        <span class="laptop:text-base mobile:text-sm font-medium">Esta região nao esta disponível.</span>
                    </div>
                    <div id="results" class="bg-white mt-1 max-h-[500px] overflow-y-scroll">

                    </div>
                </div>
            </div>
        </section>
        <section id="location-info" class="bg-slate-300 mx-auto rounded-lg my-10 p-5 flex laptop:flex-row mobile:flex-col laptop:justify-between laptop:gap-0 mobile:gap-3 laptop:w-4/5 mobile:w-[95%]">
            <div>
                <p><span><b>Província: </b></span><span id="province"></span></p>
                <p><span><b>Distrito: </b></span><span id="district"></span></p>
                <p><span><b>Bairro: </b></span><span id="neighborhood"></span></p>
                <p><span><b>Localidade: </b></span><span id="locality"></span></p>
                <p><span><b>Quarteirão: </b></span><span id="city-block"></span></p>
                <p><span><b>Avenida ou Rua: </b></span><span id="road-name"></span></p>
                <p><span><b>Numero da porta: </b></span><span id="door-number"></span></p>
                <p><span><b>CEP: </b></span><span id="cep"></span></p>
                <p><span><b>Telefone: </b></span><span id="tel"></span></p>
                <p><span><b>Email: </b></span><span id="email"></span></p>
                <p><span><b>Website: </b></span><span id="website"></span></p>
            </div>
            <div class="border border-orange-700 rounded-md flex justify-center items-center font-bold mobile:mx-auto laptop:mx-0 laptop:h-[400px] mobile:h-[300px] laptop:w-[600px] mobile:w-[95%]">
                MAPA
            </div>
        </section>
        <section class="mt-5 p-3 mx-auto laptop:w-[40%] mobile:w-[95%]">
            <h1 class="laptop:text-2xl mobile:text-xl font-bold mb-5 text-center">Precisa de ajuda?</h1>
            <ul class="laptop:text-base mobile:text-sm font-normal">
                <li class="my-2 pb-2 px-2 border-b border-gray-600 hover:font-medium"><a href="#">Não consegue encontrar o endereço que procura?</a></li>
                <li class="my-2 pb-2 px-2 border-b border-gray-600 hover:font-medium"><a href="#">Como procurar um endereço ou código postal usando o localizador de código postal?</a></li>
                <li class="my-2 pb-2 px-2 border-b border-gray-600 hover:font-medium"><a href="#">Não consigo encontrar meu endereço no Localizador de código postal</a></li>
                <li class="my-2 pb-2 px-2 border-b border-gray-600 hover:font-medium"><a href="#">Atualizando meu endereço no Localizador de Código Postal.</a></li>
                <li class="my-2 pb-2 px-2 border-b border-gray-600 hover:font-medium"><a href="#">Se o endereço parecer incorreto, entre em contato conosco para nos informar.</a></li>
            </ul>
        </section>
    </main>
    <Footer>
        <!-- Footer added using ajax-->
    </Footer>
    <script src="../../assets/scripts/jquery-3.6.0.js"></script>
    <script src="../../assets/scripts/search.js"></script>
</body>

</html>