<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio | Pocsquare</title>
    <link rel="stylesheet" href="../assets/styles/output.css">
    <link rel="stylesheet" href="../assets/styles/slideshow.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Schibsted+Grotesk:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body class="font-schibsted">
    <!--Slideshow section-->
    <section id="slideshow">
        <div class="slideshow-container">
            <div class="mySlides fade h-screen">
                <img src="../assets/img/slides/slide-1.jpg" class="h-full mobile:w-full">
                <div class="absolute top-0 w-full h-full bg-orange-600/40">
                    <div class="w-fit mt-[10%] text-white laptop:ml-[10%] mobile:ml-[5%]">
                        <h1 class="laptop:text-5xl mobile:text-4xl font-bold mb-11">Bem Vindo ao Pocsquare!</h1>
                        <p class="laptop:text-2xl mobile:text-xl">O Pocsquere oferece um identificador único para cada área postal do país.</p>
                        <p class="laptop:text-2xl mobile:text-xl mb-4">
                           O Pocsquare facilita o trabalho de localizar os endereços, de separar e encaminhar as correspondências. 
                        </p>
                    </div>
                    <div class="w-fit mx-auto mt-32 flex gap-5 laptop:flex-row mobile:flex-col">
                        <a href="./search/" class="bg-orange-500 text-white font-semibold rounded-xl text-xl text-center hover:bg-orange-700 laptop:px-20 laptop:py-4 mobile:px-10 mobile:py-2">
                            Encontrar um endereço
                        </a>
                        <a href="#" class="bg-white text-orange-500 font-semibold rounded-xl text-xl text-center hover:bg-gray-300 laptop:px-16 laptop:py-4 mobile:px-8 mobile:py-2">
                            Saber mais sobre o Pocsquare
                        </a>
                    </div>
                </div>
            </div>
            <div class="mySlides hide fade h-screen">
                <img src="../assets/img/slides/slide-2.jpg" class="h-full mobile:w-full">
                <div class="absolute top-0 w-full h-full bg-orange-600/40">
                    <div class="w-fit mt-[10%] text-white laptop:ml-[10%] mobile:ml-[5%]">
                        <h1 class="laptop:text-5xl mobile:text-4xl font-bold mb-10">Bem Vindo ao Pocsquare!</h1>
                        <p class="laptop:text-2xl mobile:text-xl">O Pocsquere oferece um identificador único para cada área postal do país.</p>
                        <p class="laptop:text-2xl mobile:text-xl mb-4">
                           O Pocsquare facilita o trabalho de localizar os endereços, de separar e encaminhar as correspondências. 
                        </p>
                    </div>
                    <div class="w-fit mx-auto mt-32 text-white flex gap-5 laptop:flex-row mobile:flex-col">
                        <a href="./search/" class="bg-orange-500 text-white font-semibold rounded-xl text-xl text-center hover:bg-orange-700 laptop:px-20 laptop:py-4 mobile:px-10 mobile:py-2">
                            Encontrar um endereço
                        </a>
                        <a href="#" class="bg-white text-orange-500 font-semibold rounded-xl text-xl text-center hover:bg-gray-300 laptop:px-16 laptop:py-4 mobile:px-8 mobile:py-2">
                            Saber mais sobre o Pocsquare
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="../assets/scripts/slideshow.js"></script>
</body>
</html>