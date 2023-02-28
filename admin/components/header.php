<div class="bg-[#9d50bb] text-white font-semibold flex flex-row justify-between items-center px-7 py-4">
        <div class="text-lg">
            <?php
                echo $_SESSION['user-data']['username'];
            ?>
        </div>
        <div class="border border-white rounded-md px-5 py-2 bg-[#6e48aa] hover:bg-[#9d50bb]">
            <a href="../../server/src/logout-route.php">Sair</a>
        </div>
</div>