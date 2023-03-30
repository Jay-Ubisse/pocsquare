<?php
    require "../../../../server/config/connect.php";
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Localidade | Pocsquare</title>
    <link rel="stylesheet" href="../../../../assets/styles/output.css" />
    <script src="https://kit.fontawesome.com/4b43862993.js" crossorigin="anonymous"></script>
</head>
<body>
    <header class="bg-orange-700 text-white font-semibold flex flex-row justify-between items-center px-7 py-4 laptop:text-base mobile:text-sm">
        <div class="laptop:text-lg mobile:text-sm">
            <?php
                echo $_SESSION['user-data']['username'];
            ?>
        </div>
        <div class="flex flex-row gap-4">
            <div class="border border-white rounded-md px-5 py-2 bg-orange-700 hover:bg-orange-500">
                <a href="../../../home/">Dashboard</a>
            </div>
            <div class="border border-white rounded-md px-5 py-2 bg-orange-700 hover:bg-orange-500">
                <a href="../../../../server/src/logout-route.php">Sair</a>
            </div>
        </div>
    </header>
    <main class="bg-gray-200 p-1 h-[calc(100vh-100px)] overflow-scroll">
        <section class="bg-white h-fit mx-auto p-6 rounded-lg laptop:my-40 mobile:mt-20 laptop:w-1/2 mobile:w-[95%]">
            <h1 class="text-orange-700 text-xl font-semibold border-b border-orange-700 w-fit">Adicionar Localidade</h1>
				<?php
					if(isset($_SESSION['registration-info']) ) {
                        if($_SESSION['error']) {
                            echo "<div class='bg-red-600 text-white font-semibold flex justify-center my-6 py-4'>";
						    echo $_SESSION['registration-info'];
						    unset($_SESSION['registration-info']);
                            unset($_SESSION['error']);
                            echo "</div>";
                        } else {
                            echo "<div class='bg-green-600 text-white font-semibold flex justify-center my-6 py-4'>";
						    echo $_SESSION['registration-info'];
						    unset($_SESSION['registration-info']);
                            unset($_SESSION['error']);
                            echo "</div>";
                        }
					}
				?>
            <form method="POST" action="../../../../server/src/add-location/locality.php" class="mt-10">
                <div class="flex laptop:flex-row  mobile:flex-col laptop:gap-0 mobile:gap-4 laptop:justify-around">
                    <div>
                        <label for="province" class="font-medium">Província</label>
                        <select name="province" class="border border-orange-700 focus:outline-none outline-none rounded">
                            <option value="Maputo Cidade">Maputo Cidade</option>
                            <option value="Maputo Província">Maputo Província</option>
                            <option value="Gaza">Gaza</option>
                            <option value="Inhambane">Inhambane</option>
                            <option value="Manica">Manica</option>
                            <option value="Sofala">Sofala</option>
                            <option value="Tete">Tete</option>
                            <option value="Nampula">Nampula</option>
                            <option value="Niassa">Niassa</option>
                            <option value="Zambézia">Zambézia</option>
                            <option value="Cabo Delgado">Cabo Delgado</option>
                        </select>
                    </div>
                    <div>
                        <label for="locality" class="font-medium">Localidade</label>
                        <input type="text" name="locality" placeholder="Introduza o nome da localidade" required autocomplete="off" class="border border-orange-700 px-2 w-60 focus:outline-none outline-none rounded">
                    </div>
                </div>
                <div class="gap-5 w-fit mx-auto mt-10">
                    <input type="submit" value="Adicionar" class="bg-orange-700 rounded-md text-white font-medium px-4 py-2">
                </div>
            </form>
        </section>
    </main>
    <footer>
        <?php include "../../../components/footer.php" ?>
    </footer>
</body>
</html>