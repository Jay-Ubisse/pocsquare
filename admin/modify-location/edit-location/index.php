<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../../assets/styles/output.css">
</head>

<body class="bg-gray-200">
    <section class="bg-white h-fit mx-auto p-6 rounded-lg laptop:mt-20 mobile:mt-20 laptop:w-1/2 mobile:w-[95%]">
        <h1 class="heading text-orange-700 text-base font-semibold border-b border-orange-700 w-fit mb-5">
            Editar Distrito
        </h1>
        <form method="POST" action="" class="manual-form mt-10">
            <div class="flex laptop:flex-row  mobile:flex-col gap-4">
                <div>
                    <label for="province" class="font-medium">Província</label>
                    <select name="province" onchange="changeProvinceName()" class="provinceOption border border-orange-700 focus:outline-none outline-none rounded">
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
                <div class="input-section">
                    <label for="district" class="font-medium">Distrito</label>
                    <input type="text" name="district" placeholder="Introduza o nome do distrito" value="<?php echo $_SESSION["data"] ?>" required autocomplete="off" class="input-field border border-orange-700 px-2 w-60 focus:outline-none outline-none rounded" />
                </div>
            </div>
            <div class="gap-5 w-fit mx-auto mt-10">
                <input type="submit" value="Gravar" class="bg-orange-700 rounded-md text-white font-medium px-4 py-2">
            </div>
        </form>
    </section>
</body>

</html>