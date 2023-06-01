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
          data-TargetNum="4"
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
          data-TargetNum="<?php echo $_SESSION['southDistricts']; ?>"
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
          data-TargetNum="<?php echo $_SESSION['southAdminPosts']; ?>"
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
          data-TargetNum="<?php echo $_SESSION['southNeighborhoodOrLocality']; ?>"
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
          data-TargetNum="<?php echo $_SESSION['southCells']; ?>"
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
          data-TargetNum="<?php echo $_SESSION['southCircles']; ?>"
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
          data-TargetNum="<?php echo $_SESSION['southVillages']; ?>"
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
          data-TargetNum="<?php echo $_SESSION['southZones']; ?>"
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
          data-TargetNum="<?php echo $_SESSION['southTownships']; ?>"
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
      <div class="w-full h-[32%] flex flex-col justify-center items-center border border-orange-800">
          <h1 class="text-orange-800 font-bold text-xl">Zona Sul</h1>
          <h2 class="text-orange-800 font-bold text-lg">(Moçambique)</h2>
      </div>
    </div>
    <div class="w-[79%] flex flex-row justify-between">
      <div class="w-[24%]">
        <div
          class="mb-3 text-orange-800 font-semibold text-lg border-b border-orange-800 p-1"
        >
          Maputo Cidade
        </div>
        <div class="px-2">
          <p class="progress-label">Distritos</p>
          <div class="progress-container">
            <div class="meter my-2">
              <span style="width: <?php echo $_SESSION['mcDistrictsPercent']; ?>%"><span class="progress"></span></span>
            </div>
            <p class="progress-percentage"><?php echo $_SESSION['mcDistrictsPercent']; ?>%</p>
          </div>
        </div>
        <div class="px-2">
          <p class="progress-label">P. Administrativos</p>
          <div class="progress-container">
            <div class="meter my-2">
              <span style="width: <?php echo $_SESSION['mcAdminPostsPercent']; ?>%"><span class="progress"></span></span>
            </div>
            <p class="progress-percentage"><?php echo $_SESSION['mcAdminPostsPercent']; ?>%</p>
          </div>
        </div>
        <div class="px-2">
          <p class="progress-label">Localidades e Bairros</p>
          <div class="progress-container">
            <div class="meter my-2">
              <span style="width: <?php echo $_SESSION['mcNeighborhoodOrLocalityPercent']; ?>%"><span class="progress"></span></span>
            </div>
            <p class="progress-percentage"><?php echo $_SESSION['mcNeighborhoodOrLocalityPercent']; ?>%</p>
          </div>
        </div>
        <div class="px-2">
          <p class="progress-label">Células</p>
          <div class="progress-container">
            <div class="meter my-2">
              <span style="width: <?php echo $_SESSION['mcCellsPercent']; ?>%"><span class="progress"></span></span>
            </div>
            <p class="progress-percentage"><?php echo $_SESSION['mcCellsPercent']; ?>%</p>
          </div>
        </div>
        <div class="px-2">
          <p class="progress-label">Círculos</p>
          <div class="progress-container">
            <div class="meter my-2">
              <span style="width: <?php echo $_SESSION['mcCirclesPercent']; ?>%"><span class="progress"></span></span>
            </div>
            <p class="progress-percentage"><?php echo $_SESSION['mcCirclesPercent']; ?>%</p>
          </div>
        </div>
        <div class="px-2">
          <p class="progress-label">Vilas</p>
          <div class="progress-container">
            <div class="meter my-2">
              <span style="width: <?php echo $_SESSION['mcVillagesPercent']; ?>%"><span class="progress"></span></span>
            </div>
            <p class="progress-percentage"><?php echo $_SESSION['mcVillagesPercent']; ?>%</p>
          </div>
        </div>
        <div class="px-2">
          <p class="progress-label">Zonas</p>
          <div class="progress-container">
            <div class="meter my-2">
              <span style="width: <?php echo $_SESSION['mcZonesPercent']; ?>%"><span class="progress"></span></span>
            </div>
            <p class="progress-percentage"><?php echo $_SESSION['mcZonesPercent']; ?>%</p>
          </div>
        </div>
        <div class="px-2">
          <p class="progress-label">Povoações</p>
          <div class="progress-container">
            <div class="meter my-2">
              <span style="width: <?php echo $_SESSION['mcTownshipsPercent']; ?>%"><span class="progress"></span></span>
            </div>
            <p class="progress-percentage"><?php echo $_SESSION['mcTownshipsPercent']; ?>%</p>
          </div>
        </div>
      </div>
      <div class="w-[24%]">
        <div
          class="mb-3 text-orange-800 font-semibold text-lg border-b border-orange-800 p-1"
        >
          Maputo Província
        </div>
        <div class="px-2">
          <p class="progress-label">Distritos</p>
          <div class="progress-container">
            <div class="meter my-2">
              <span style="width: <?php echo $_SESSION['mpDistrictsPercent']; ?>%"><span class="progress"></span></span>
            </div>
            <p class="progress-percentage"><?php echo $_SESSION['mpDistrictsPercent']; ?>%</p>
          </div>
        </div>
        <div class="px-2">
          <p class="progress-label">P. Administrativos</p>
          <div class="progress-container">
            <div class="meter my-2">
              <span style="width: <?php echo $_SESSION['mpAdminPostsPercent']; ?>%"><span class="progress"></span></span>
            </div>
            <p class="progress-percentage"><?php echo $_SESSION['mpAdminPostsPercent']; ?>%</p>
          </div>
        </div>
        <div class="px-2">
          <p class="progress-label">Localidades e Bairros</p>
          <div class="progress-container">
            <div class="meter my-2">
              <span style="width: <?php echo $_SESSION['mpNeighborhoodOrLocalityPercent']; ?>%"><span class="progress"></span></span>
            </div>
            <p class="progress-percentage"><?php echo $_SESSION['mpNeighborhoodOrLocalityPercent']; ?>%</p>
          </div>
        </div>
        <div class="px-2">
          <p class="progress-label">Células</p>
          <div class="progress-container">
            <div class="meter my-2">
              <span style="width: <?php echo $_SESSION['mpCellsPercent']; ?>%"><span class="progress"></span></span>
            </div>
            <p class="progress-percentage"><?php echo $_SESSION['mpCellsPercent']; ?>%</p>
          </div>
        </div>
        <div class="px-2">
          <p class="progress-label">Círculos</p>
          <div class="progress-container">
            <div class="meter my-2">
              <span style="width: <?php echo $_SESSION['mpCirclesPercent']; ?>%"><span class="progress"></span></span>
            </div>
            <p class="progress-percentage"><?php echo $_SESSION['mpCirclesPercent']; ?>%</p>
          </div>
        </div>
        <div class="px-2">
          <p class="progress-label">Vilas</p>
          <div class="progress-container">
            <div class="meter my-2">
              <span style="width: <?php echo $_SESSION['mpVillagesPercent']; ?>%"><span class="progress"></span></span>
            </div>
            <p class="progress-percentage"><?php echo $_SESSION['mpVillagesPercent']; ?>%</p>
          </div>
        </div>
        <div class="px-2">
          <p class="progress-label">Zonas</p>
          <div class="progress-container">
            <div class="meter my-2">
              <span style="width: <?php echo $_SESSION['mpZonesPercent']; ?>%"><span class="progress"></span></span>
            </div>
            <p class="progress-percentage"><?php echo $_SESSION['mpZonesPercent']; ?>%</p>
          </div>
        </div>
        <div class="px-2">
          <p class="progress-label">Povoações</p>
          <div class="progress-container">
            <div class="meter my-2">
              <span style="width: <?php echo $_SESSION['mpTownshipsPercent']; ?>%"><span class="progress"></span></span>
            </div>
            <p class="progress-percentage"><?php echo $_SESSION['mpTownshipsPercent']; ?>%</p>
          </div>
        </div>
      </div>
      <div class="w-[24%]">
        <div
          class="mb-3 text-orange-800 font-semibold text-lg border-b border-orange-800 p-1"
        >
          Gaza
        </div>
        <div class="px-2">
          <p class="progress-label">Distritos</p>
          <div class="progress-container">
            <div class="meter my-2">
              <span style="width: <?php echo $_SESSION['gzDistrictsPercent']; ?>%"><span class="progress"></span></span>
            </div>
            <p class="progress-percentage"><?php echo $_SESSION['gzDistrictsPercent']; ?>%</p>
          </div>
        </div>
        <div class="px-2">
          <p class="progress-label">P. Administrativos</p>
          <div class="progress-container">
            <div class="meter my-2">
              <span style="width: <?php echo $_SESSION['gzAdminPostsPercent']; ?>%"><span class="progress"></span></span>
            </div>
            <p class="progress-percentage"><?php echo $_SESSION['gzAdminPostsPercent']; ?>%</p>
          </div>
        </div>
        <div class="px-2">
          <p class="progress-label">Localidades e Bairros</p>
          <div class="progress-container">
            <div class="meter my-2">
              <span style="width: <?php echo $_SESSION['gzNeighborhoodOrLocalityPercent']; ?>%"><span class="progress"></span></span>
            </div>
            <p class="progress-percentage"><?php echo $_SESSION['gzNeighborhoodOrLocalityPercent']; ?>%</p>
          </div>
        </div>
        <div class="px-2">
          <p class="progress-label">Células</p>
          <div class="progress-container">
            <div class="meter my-2">
              <span style="width: <?php echo $_SESSION['gzCellsPercent']; ?>%"><span class="progress"></span></span>
            </div>
            <p class="progress-percentage"><?php echo $_SESSION['gzCellsPercent']; ?>%</p>
          </div>
        </div>
        <div class="px-2">
          <p class="progress-label">Círculos</p>
          <div class="progress-container">
            <div class="meter my-2">
              <span style="width: <?php echo $_SESSION['gzCirclesPercent']; ?>%"><span class="progress"></span></span>
            </div>
            <p class="progress-percentage"><?php echo $_SESSION['gzCirclesPercent']; ?>%</p>
          </div>
        </div>
        <div class="px-2">
          <p class="progress-label">Vilas</p>
          <div class="progress-container">
            <div class="meter my-2">
              <span style="width: <?php echo $_SESSION['gzVillagesPercent']; ?>%"><span class="progress"></span></span>
            </div>
            <p class="progress-percentage"><?php echo $_SESSION['gzVillagesPercent']; ?>%</p>
          </div>
        </div>
        <div class="px-2">
          <p class="progress-label">Zonas</p>
          <div class="progress-container">
            <div class="meter my-2">
              <span style="width: <?php echo $_SESSION['gzZonesPercent']; ?>%"><span class="progress"></span></span>
            </div>
            <p class="progress-percentage"><?php echo $_SESSION['gzZonesPercent']; ?>%</p>
          </div>
        </div>
        <div class="px-2">
          <p class="progress-label">Povoações</p>
          <div class="progress-container">
            <div class="meter my-2">
              <span style="width: <?php echo $_SESSION['gzTownshipsPercent']; ?>%"><span class="progress"></span></span>
            </div>
            <p class="progress-percentage"><?php echo $_SESSION['gzTownshipsPercent']; ?>%</p>
          </div>
        </div>
      </div>
      <div class="w-[24%]">
        <div
          class="mb-3 text-orange-800 font-semibold text-lg border-b border-orange-800 p-1"
        >
          Inhambane
        </div>
        <div class="px-2">
          <p class="progress-label">Distritos</p>
          <div class="progress-container">
            <div class="meter my-2">
              <span style="width: <?php echo $_SESSION['inDistrictsPercent']; ?>%"><span class="progress"></span></span>
            </div>
            <p class="progress-percentage"><?php echo $_SESSION['inDistrictsPercent']; ?>%</p>
          </div>
        </div>
        <div class="px-2">
          <p class="progress-label">P. Administrativos</p>
          <div class="progress-container">
            <div class="meter my-2">
              <span style="width: <?php echo $_SESSION['inAdminPostsPercent']; ?>%"><span class="progress"></span></span>
            </div>
            <p class="progress-percentage"><?php echo $_SESSION['inAdminPostsPercent']; ?>%</p>
          </div>
        </div>
        <div class="px-2">
          <p class="progress-label">Localidades e Bairros</p>
          <div class="progress-container">
            <div class="meter my-2">
              <span style="width: <?php echo $_SESSION['inNeighborhoodOrLocalityPercent']; ?>%"><span class="progress"></span></span>
            </div>
            <p class="progress-percentage"><?php echo $_SESSION['inNeighborhoodOrLocalityPercent']; ?>%</p>
          </div>
        </div>
        <div class="px-2">
          <p class="progress-label">Células</p>
          <div class="progress-container">
            <div class="meter my-2">
              <span style="width: <?php echo $_SESSION['inCellsPercent']; ?>%"><span class="progress"></span></span>
            </div>
            <p class="progress-percentage"><?php echo $_SESSION['inCellsPercent']; ?>%</p>
          </div>
        </div>
        <div class="px-2">
          <p class="progress-label">Círculos</p>
          <div class="progress-container">
            <div class="meter my-2">
              <span style="width: <?php echo $_SESSION['inCirclesPercent']; ?>%"><span class="progress"></span></span>
            </div>
            <p class="progress-percentage"><?php echo $_SESSION['inCirclesPercent']; ?>%</p>
          </div>
        </div>
        <div class="px-2">
          <p class="progress-label">Vilas</p>
          <div class="progress-container">
            <div class="meter my-2">
              <span style="width: <?php echo $_SESSION['inVillagesPercent']; ?>%"><span class="progress"></span></span>
            </div>
            <p class="progress-percentage"><?php echo $_SESSION['inVillagesPercent']; ?>%</p>
          </div>
        </div>
        <div class="px-2">
          <p class="progress-label">Zonas</p>
          <div class="progress-container">
            <div class="meter my-2">
              <span style="width: <?php echo $_SESSION['inZonesPercent']; ?>%"><span class="progress"></span></span>
            </div>
            <p class="progress-percentage"><?php echo $_SESSION['inZonesPercent']; ?>%</p>
          </div>
        </div>
        <div class="px-2">
          <p class="progress-label">Povoações</p>
          <div class="progress-container">
            <div class="meter my-2">
              <span style="width: <?php echo $_SESSION['inTownshipsPercent']; ?>%"><span class="progress"></span></span>
            </div>
            <p class="progress-percentage"><?php echo $_SESSION['inTownshipsPercent']; ?>%</p>
          </div>
        </div>
      </div>
  </section>
  