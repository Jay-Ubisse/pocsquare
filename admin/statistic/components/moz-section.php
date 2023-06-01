
<section class="h-[30%] grid grid-cols-5 gap-y-2 gap-x-4">
  <div class="rounded-md bg-slate-300 p-2 h-fit">
    <h1
      class="text-sm text-orange-800 font-medium border-b border-orange-800 px-2 text-center"
    >
      Províncias
    </h1>
    <div id="counters_3">
      <div
        class="counter font-bold text-lg text-orange-800 w-full text-center mt-1"
        data-TargetNum="11"
        data-Speed="1000"
      >
        0
      </div>
    </div>
  </div>
  <div class="rounded-md bg-slate-300 p-2">
    <h1
      class="text-sm text-orange-800 font-medium border-b border-orange-800 px-2 text-center"
    >
      Distritos
    </h1>
    <div id="counters_3">
      <div
        class="counter font-bold text-lg text-orange-800 w-full text-center mt-1"
        data-TargetNum="<?php echo $_SESSION["mzDistricts"]; ?>"
        data-Speed="1000"
      >
        0
      </div>
    </div>
  </div>
  <div class="rounded-md bg-slate-300 p-2">
    <h1
      class="text-sm text-orange-800 font-medium border-b border-orange-800 px-2 text-center"
    >
      P. Administrativos
    </h1>
    <div id="counters_3">
      <div
        class="counter font-bold text-lg text-orange-800 w-full text-center mt-1"
        data-TargetNum="<?php echo $_SESSION["mzAdminPosts"]; ?>"
        data-Speed="1000"
      >
        0
      </div>
    </div>
  </div>
  <div class="rounded-md bg-slate-300 p-2">
    <h1
      class="text-sm text-orange-800 font-medium border-b border-orange-800 px-2 text-center"
    >
      Bairros e Localidades
    </h1>
    <div id="counters_3">
      <div
        class="counter font-bold text-lg text-orange-800 w-full text-center mt-1"
        data-TargetNum="<?php echo $_SESSION["mzNeighborhoodOrLocality"]; ?>"
        data-Speed="1000"
      >
        0
      </div>
    </div>
  </div>
  <div class="rounded-md bg-slate-300 p-2">
    <h1
      class="text-sm text-orange-800 font-medium border-b border-orange-800 px-2 text-center"
    >
      Células
    </h1>
    <div id="counters_3">
      <div
        class="counter font-bold text-lg text-orange-800 w-full text-center mt-1"
        data-TargetNum="<?php echo $_SESSION["mzCells"]; ?>"
        data-Speed="1000"
      >
        0
      </div>
    </div>
  </div>
  <div class="rounded-md bg-slate-300 p-2">
    <h1
      class="text-sm text-orange-800 font-medium border-b border-orange-800 px-2 text-center"
    >
      Círculos
    </h1>
    <div id="counters_3">
      <div
        class="counter font-bold text-lg text-orange-800 w-full text-center mt-1"
        data-TargetNum="<?php echo $_SESSION["mzCircles"]; ?>"
        data-Speed="1000"
      >
        0
      </div>
    </div>
  </div>
  <div class="rounded-md bg-slate-300 p-2">
    <h1
      class="text-sm text-orange-800 font-medium border-b border-orange-800 px-2 text-center"
    >
      Vilas
    </h1>
    <div id="counters_3">
      <div
        class="counter font-bold text-lg text-orange-800 w-full text-center mt-1"
        data-TargetNum="<?php echo $_SESSION["mzVillages"]; ?>"
        data-Speed="1000"
      >
        0
      </div>
    </div>
  </div>
  <div class="rounded-md bg-slate-300 p-2">
    <h1
      class="text-sm text-orange-800 font-medium border-b border-orange-800 px-2 text-center"
    >
      Zonas
    </h1>
    <div id="counters_3">
      <div
        class="counter font-bold text-lg text-orange-800 w-full text-center mt-1"
        data-TargetNum="<?php echo $_SESSION["mzZones"]; ?>"
        data-Speed="1000"
      >
        0
      </div>
    </div>
  </div>
  <div class="rounded-md bg-slate-300 p-2">
    <h1
      class="text-sm text-orange-800 font-medium border-b border-orange-800 px-2 text-center"
    >
      Povoações
    </h1>
    <div id="counters_3">
      <div
        class="counter font-bold text-lg text-orange-800 w-full text-center mt-1"
        data-TargetNum="<?php echo $_SESSION["mzTownships"]; ?>"
        data-Speed="1000"
      >
        0
      </div>
    </div>
  </div>
</section>

<section class="flex flex-row justify-between mt-2">
  <div class="w-[20%] flex flex-col justify-evenly mt-4">
    <div class="w-full h-[32%] border border-orange-800">
        <h1 class="bg-orange-800 h-[20%] font-semibold text-white text-base text-center">Endereços cadastrados</h1>
        <div id="counters_3">
            <div
              class="counter font-bold text-lg text-orange-800 w-full text-center mt-[15%]"
              data-TargetNum="<?php echo $_SESSION['addressesCount']; ?>"
              data-Speed="1000"
            >
              0
            </div>
        </div>
    </div>
    <div class="w-full h-[32%] border border-orange-800">
        <h1 class="bg-orange-800 h-[20%] font-semibold text-white text-base text-center">Última Atualização</h1>
        <h2 class="text-orange-800 font-bold text-lg text-center mt-[15%]">04 / 2023</h2>
    </div>
    <div class="w-full h-[32%] flex justify-center items-center border border-orange-800">
        <h1 class="text-orange-800 font-bold text-xl">Moçambique</h1>
    </div>
  </div>
  <div class="w-[79%] flex flex-row">
    <div class="laptop:w-[29%] mobile:mx-auto">
      <div
        class="mb-3 text-orange-800 font-semibold text-lg border-b border-orange-800 p-1"
      >
        Zona Sul
      </div>
      <div class="px-2">
        <p class="progress-label">Distritos</p>
        <div class="progress-container">
          <div class="meter my-2">
            <span style="width: <?php echo $_SESSION["southDistrictsPercent"]; ?>%"><span class="progress"></span></span>
          </div>
          <p class="progress-percentage"><?php echo $_SESSION["southDistrictsPercent"]; ?>%</p>
        </div>
      </div>
      <div class="px-2">
        <p class="progress-label">P. Administrativos</p>
        <div class="progress-container">
          <div class="meter my-2">
            <span style="width: <?php echo $_SESSION["southAdminPostsPercent"]; ?>%"><span class="progress"></span></span>
          </div>
          <p class="progress-percentage"><?php echo $_SESSION["southAdminPostsPercent"]; ?>%</p>
        </div>
      </div>
      <div class="px-2">
        <p class="progress-label">Bairros e Localidades</p>
        <div class="progress-container">
          <div class="meter my-2">
            <span style="width: <?php echo $_SESSION["southNeighborhoodOrLocalityPercent"]; ?>%"><span class="progress"></span></span>
          </div>
          <p class="progress-percentage"><?php echo $_SESSION["southNeighborhoodOrLocalityPercent"]; ?>%</p>
        </div>
      </div>
      <div class="px-2">
        <p class="progress-label">Células</p>
        <div class="progress-container">
          <div class="meter my-2">
            <span style="width: <?php echo $_SESSION["southCellsPercent"]; ?>%"><span class="progress"></span></span>
          </div>
          <p class="progress-percentage"><?php echo $_SESSION["southCellsPercent"]; ?>%</p>
        </div>
      </div>
      <div class="px-2">
        <p class="progress-label">Círculos</p>
        <div class="progress-container">
          <div class="meter my-2">
            <span style="width: <?php echo $_SESSION["southCirclesPercent"]; ?>%"><span class="progress"></span></span>
          </div>
          <p class="progress-percentage"><?php echo $_SESSION["southCirclesPercent"]; ?>%</p>
        </div>
      </div>
      <div class="px-2">
        <p class="progress-label">Vilas</p>
        <div class="progress-container">
          <div class="meter my-2">
            <span style="width: <?php echo $_SESSION["southVillagesPercent"]; ?>%"><span class="progress"></span></span>
          </div>
          <p class="progress-percentage"><?php echo $_SESSION["southVillagesPercent"]; ?>%</p>
        </div>
      </div>
      <div class="px-2">
        <p class="progress-label">Zonas</p>
        <div class="progress-container">
          <div class="meter my-2">
            <span style="width: <?php echo $_SESSION["southZonesPercent"]; ?>%"><span class="progress"></span></span>
          </div>
          <p class="progress-percentage"><?php echo $_SESSION["southZonesPercent"]; ?>%</p>
        </div>
      </div>
      <div class="px-2">
        <p class="progress-label">Povoações</p>
        <div class="progress-container">
          <div class="meter my-2">
            <span style="width: <?php echo $_SESSION["southTownshipsPercent"]; ?>%"><span class="progress"></span></span>
          </div>
          <p class="progress-percentage"><?php echo $_SESSION["southTownshipsPercent"]; ?>%</p>
        </div>
      </div>
    </div>
    <div class="laptop:w-[29%] mobile:w-11/12 mobile:mx-auto">
      <div
        class="mb-3 text-orange-800 font-semibold text-lg border-b border-orange-800 p-1"
      >
        Zona Centro
      </div>
      <div class="px-2">
        <p class="progress-label">Distritos</p>
        <div class="progress-container">
          <div class="meter my-2">
            <span style="width: <?php echo $_SESSION["centerDistrictsPercent"]; ?>%"><span class="progress"></span></span>
          </div>
          <p class="progress-percentage"><?php echo $_SESSION["centerDistrictsPercent"]; ?>%</p>
        </div>
      </div>
      <div class="px-2">
        <p class="progress-label">P. Administrativos</p>
        <div class="progress-container">
          <div class="meter my-2">
            <span style="width: <?php echo $_SESSION["centerAdminPostsPercent"]; ?>%"><span class="progress"></span></span>
          </div>
          <p class="progress-percentage"><?php echo $_SESSION["centerAdminPostsPercent"]; ?>%</p>
        </div>
      </div>
      <div class="px-2">
        <p class="progress-label">Bairros e Localidades</p>
        <div class="progress-container">
          <div class="meter my-2">
            <span style="width: <?php echo $_SESSION["centerNeighborhoodOrLocalityPercent"]; ?>%"><span class="progress"></span></span>
          </div>
          <p class="progress-percentage"><?php echo $_SESSION["centerNeighborhoodOrLocalityPercent"]; ?>%</p>
        </div>
      </div>
      <div class="px-2">
        <p class="progress-label">Células</p>
        <div class="progress-container">
          <div class="meter my-2">
            <span style="width: <?php echo $_SESSION["centerCellsPercent"]; ?>%"><span class="progress"></span></span>
          </div>
          <p class="progress-percentage"><?php echo $_SESSION["centerCellsPercent"]; ?>%</p>
        </div>
      </div>
      <div class="px-2">
        <p class="progress-label">Círculos</p>
        <div class="progress-container">
          <div class="meter my-2">
            <span style="width: <?php echo $_SESSION["centerCirclesPercent"]; ?>%"><span class="progress"></span></span>
          </div>
          <p class="progress-percentage"><?php echo $_SESSION["centerCirclesPercent"]; ?>%</p>
        </div>
      </div>
      <div class="px-2">
        <p class="progress-label">Vilas</p>
        <div class="progress-container">
          <div class="meter my-2">
            <span style="width: <?php echo $_SESSION["centerVillagesPercent"]; ?>%"><span class="progress"></span></span>
          </div>
          <p class="progress-percentage"><?php echo $_SESSION["centerVillagesPercent"]; ?>%</p>
        </div>
      </div>
      <div class="px-2">
        <p class="progress-label">Zonas</p>
        <div class="progress-container">
          <div class="meter my-2">
            <span style="width: <?php echo $_SESSION["centerZonesPercent"]; ?>%"><span class="progress"></span></span>
          </div>
          <p class="progress-percentage"><?php echo $_SESSION["centerZonesPercent"]; ?>%</p>
        </div>
      </div>
      <div class="px-2">
        <p class="progress-label">Povoações</p>
        <div class="progress-container">
          <div class="meter my-2">
            <span style="width: <?php echo $_SESSION["centerTownshipsPercent"]; ?>%"><span class="progress"></span></span>
          </div>
          <p class="progress-percentage"><?php echo $_SESSION["centerTownshipsPercent"]; ?>%</p>
        </div>
      </div>
    </div>
    <div class="laptop:w-[29%] mobile:mx-auto">
      <div
        class="mb-3 text-orange-800 font-semibold text-lg border-b border-orange-800 p-1"
      >
        Zona Norte
      </div>
      <div class="px-2">
        <p class="progress-label">Distritos</p>
        <div class="progress-container">
          <div class="meter my-2">
            <span style="width: <?php echo $_SESSION["northDistrictsPercent"]; ?>%"><span class="progress"></span></span>
          </div>
          <p class="progress-percentage"><?php echo $_SESSION["northDistrictsPercent"]; ?>%</p>
        </div>
      </div>
      <div class="px-2">
        <p class="progress-label">P. Administrativos</p>
        <div class="progress-container">
          <div class="meter my-2">
            <span style="width: <?php echo $_SESSION["northAdminPostsPercent"]; ?>%"><span class="progress"></span></span>
          </div>
          <p class="progress-percentage"><?php echo $_SESSION["northAdminPostsPercent"]; ?>%</p>
        </div>
      </div>
      <div class="px-2">
        <p class="progress-label">Bairros e Localidades</p>
        <div class="progress-container">
          <div class="meter my-2">
            <span style="width: <?php echo $_SESSION["northNeighborhoodOrLocalityPercent"]; ?>%"><span class="progress"></span></span>
          </div>
          <p class="progress-percentage"><?php echo $_SESSION["northNeighborhoodOrLocalityPercent"]; ?>%</p>
        </div>
      </div>
      <div class="px-2">
        <p class="progress-label">Células</p>
        <div class="progress-container">
          <div class="meter my-2">
            <span style="width: <?php echo $_SESSION["northCellsPercent"]; ?>%"><span class="progress"></span></span>
          </div>
          <p class="progress-percentage"><?php echo $_SESSION["northCellsPercent"]; ?>%</p>
        </div>
      </div>
      <div class="px-2">
        <p class="progress-label">Círculos</p>
        <div class="progress-container">
          <div class="meter my-2">
            <span style="width: <?php echo $_SESSION["northCirclesPercent"]; ?>%"><span class="progress"></span></span>
          </div>
          <p class="progress-percentage"><?php echo $_SESSION["northCirclesPercent"]; ?>%</p>
        </div>
      </div>
      <div class="px-2">
        <p class="progress-label">Vilas</p>
        <div class="progress-container">
          <div class="meter my-2">
            <span style="width: <?php echo $_SESSION["northVillagesPercent"]; ?>%"><span class="progress"></span></span>
          </div>
          <p class="progress-percentage"><?php echo $_SESSION["northVillagesPercent"]; ?>%</p>
        </div>
      </div>
      <div class="px-2">
        <p class="progress-label">Zonas</p>
        <div class="progress-container">
          <div class="meter my-2">
            <span style="width: <?php echo $_SESSION["northZonesPercent"]; ?>%"><span class="progress"></span></span>
          </div>
          <p class="progress-percentage"><?php echo $_SESSION["northZonesPercent"]; ?>%</p>
        </div>
      </div>
      <div class="px-2">
        <p class="progress-label">Povoações</p>
        <div class="progress-container">
          <div class="meter my-2">
            <span style="width: <?php echo $_SESSION["northTownshipsPercent"]; ?>%"><span class="progress"></span></span>
          </div>
          <p class="progress-percentage"><?php echo $_SESSION["northTownshipsPercent"]; ?>%</p>
        </div>
      </div>
    </div>
</section>
