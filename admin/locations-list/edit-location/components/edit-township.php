<div class="bg-white h-fit mx-auto p-6 rounded-lg laptop:mt-20 mobile:mt-20 laptop:w-fit mobile:w-[95%]">
    <h1 class="heading text-orange-700 text-base font-semibold border-b border-orange-700 w-fit mb-5">
        Editar Povoação
    </h1>
    <form method="POST" action="" class="manual-form mt-10">
        <div class="grid laptop:grid-cols-2 mobile:grid-cols-1 gap-4">
            <div class="flex flex-col gap-2">
                <label for="province" class="font-medium">Província</label>
                <select name="province" onchange="changeProvinceName()" class="provinceOption border border-orange-700 focus:outline-none outline-none rounded w-fit">
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
            <div class="flex flex-col gap-2">
                <label for="id" class="font-medium">ID</label>
                <input type="text" name="id" value="<?php echo $_SESSION["id_number"] ?>" required autocomplete="off" class="input-field border border-orange-700 px-1 w-20 focus:outline-none outline-none rounded" />
            </div>
            <div class="flex flex-col gap-2">
                <label for="admin-post" class="font-medium">Distrito</label>
                <input type="text" name="admin-post" value="<?php echo $_SESSION["district_name"] ?>" required autocomplete="off" class="input-field border border-orange-700 px-1 w-60 focus:outline-none outline-none rounded" />
            </div>
            <div class="flex flex-col gap-2">
                <label for="admin-post" class="font-medium">Posto Administrativo</label>
                <input type="text" name="admin-post" value="<?php echo $_SESSION["admin_post_name"] ?>" required autocomplete="off" class="input-field border border-orange-700 px-1 w-60 focus:outline-none outline-none rounded" />
            </div>
            <div class="flex flex-col gap-2">
                <label for="admin-post" class="font-medium">Bairro ou Localidade</label>
                <input type="text" name="admin-post" value="<?php echo $_SESSION["neighborhood_name"] ?>" required autocomplete="off" class="input-field border border-orange-700 px-1 w-60 focus:outline-none outline-none rounded" />
            </div>
            <div class="flex flex-col gap-2">
                <label for="admin-post" class="font-medium">Povoação</label>
                <input type="text" name="admin-post" value="<?php echo $_SESSION["township_name"] ?>" required autocomplete="off" class="input-field border border-orange-700 px-1 w-60 focus:outline-none outline-none rounded" />
            </div>
        </div>
        <div class="gap-5 w-fit mx-auto mt-10">
            <input type="submit" value="Gravar" class="bg-orange-700 rounded-md text-white font-medium px-4 py-2">
        </div>
    </form>
</div>