<?php
    require "../../server/config/connect.php";
    session_start();

    if(!isset($_SESSION["admin-auth"])) {
        header("Location: ../");
    } else {
        if (isset($_SESSION['timestamp'])) {
            unset($_SESSION['timestamp']);
        
            $_SESSION['timestamp'] = time();
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Endereços | Pocsquare</title>
    <link rel="stylesheet" href="../../assets/styles/output.css">
    <script src="https://kit.fontawesome.com/4b43862993.js" crossorigin="anonymous"></script>
</head>
<body class="bg-gray-200">
    <header>
        <?php include "../components/header.php"; ?>
    </header>
    <main class="p-1 flex flex-row justify-evenly">
        <section class="mt-10 w-[75%]">
            <table id="all" class="border-collapse border-2 border-orange-700">
                
            </table>
        </section>
        <section class="border-2 rounded-md border-orange-700 h-fit p-4 w-[23%] mt-10">
            <label for="filter" class="text-lg font-semibold">Filtrar por:</label>
            <hr class="w-20 bg-orange-700 h-[3px] mb-3 mt-1 font-extrabold rounded" />
            <select name="filter" id="filter" class="outline-none focus:outline-orange-700">
                <option value="all">Todos</option>
                <option value="cep">CEP</option>
                <option value="province">Província</option>
                <option value="district">Distrito</option>
                <option value="neighborhood-locality">Bairro ou Localidade</option>
                <option value="user">Usuário responsável</option>    
            </select>
            <div id="input-data-form" class="mt-4 flex flex-col gap-4">
                <input type="text" id="input-data" class="h-8 rounded-md outline-none focus:outline-orange-700 px-2">    
            </div>
            <hr class="w-[95%] mx-auto bg-orange-700 h-[2px] mb-2 mt-4 font-extrabold rounded" />
            <div id="date-form" class="flex flex-col gap-4">
                <label class="text-base font-medium">Data</label>
                <input type="date" id="date" class="h-8 rounded-md outline-none focus:outline-orange-700 px-2">    
            </div>
            <div class="mt-10 flex flex-col gap-4">
                <button class="submit w-fit px-4 py-2 bg-orange-700 text-white rounded-md">Pesquisar</button>    
            </div>
        </section>
    </main>
    <footer>
        <?php include "../components/footer.php"; ?>
    </footer>

    <script src="../../assets/scripts/jquery-3.6.0.js"></script>
    <script src="../../assets/scripts/admin/session-timeout.js"></script>
    <script>
        $("#all").load("../../server/src/addresses-lists/all-addresses.php");

        $(".submit").on('click', function () {
            let filter = $("#filter").val();
            let data = $("#input-data").val();
            let date = $("#date").val();
            
            switch (filter) {
                case "all":
                    $("#all").load("../../server/src/addresses-lists/all-addresses.php");
                    break;
                case "cep":
                    $("#all").load("../../server/src/addresses-lists/search-by-cep.php", {
                        inputData: data,
                        inputDate: date,
                    });
                    break;
                case "province":
                    $("#all").load("../../server/src/addresses-lists/search-by-province.php", {
                        inputData: data,
                        inputDate: date,
                    });
                    break;
                case "district":
                    $("#all").load("../../server/src/addresses-lists/search-by-district.php", {
                        inputData: data,
                        inputDate: date,
                    });
                    break;
                case "neighborhood-locality":
                    $("#all").load("../../server/src/addresses-lists/search-by-locality.php", {
                        inputData: data,
                        inputDate: date,
                    });
                case "user":
                    $("#all").load("../../server/src/addresses-lists/search-by-user.php", {
                        inputData: data,
                        inputDate: date,
                    });
                    break;
                default:
                    break;
            }
        });

    </script>
</body>
</html>
<?php
    }
?>