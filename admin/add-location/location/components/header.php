<div class="bg-orange-700 text-white font-semibold flex flex-row justify-between items-center px-7 py-4 laptop:text-base mobile:text-sm">
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
</div>