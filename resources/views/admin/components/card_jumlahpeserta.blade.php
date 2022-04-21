<div class="bg-biru shadow-md rounded-md text-white w-auto">
    <div class="mx-4 py-4">
        <div class="flex justify-between space-x-8 align-middle items-center">
            <div class="font-Montserrat">
                <h1 class="font-bold text-lg">Jumlah Pendaftar MLC 2022</h1>
                
                <h2 class="text-sm">{{ $jumlahPeserta ?? "Not Found" }}</h2>
                
            </div>
            
            <div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 right-0" viewBox="0 0 283.999 320.281">
                        <g id="statistics-svgrepo-com" transform="translate(-18.141 0)">
                            <path id="Path_1" data-name="Path 1" d="M260.727,115.941l-97.891,53.473V57.89a9,9,0,0,0-9-9c-74.823,0-135.7,60.873-135.7,135.7s60.873,135.7,135.7,135.7,135.7-60.873,135.7-135.7a135.861,135.861,0,0,0-16.6-65.067A9,9,0,0,0,260.727,115.941ZM153.836,302.281a117.7,117.7,0,0,1-9-235.05V184.585a9,9,0,0,0,13.314,7.9l103.007-56.267A117.738,117.738,0,0,1,153.836,302.281Z" fill="#ffffff"/>
                            <path id="Path_2" data-name="Path 2" d="M301.035,70.59A136.14,136.14,0,0,0,185.139,0a9.007,9.007,0,0,0-9.207,8.785l-2.995,126.658a9,9,0,0,0,13.312,8.11L297.455,82.81a9,9,0,0,0,3.58-12.22ZM191.3,120.286l2.406-101.733A118.207,118.207,0,0,1,280.616,71.5Z" fill="#ffffff"/>
                        </g>
                    </svg>
                </div>
            </div>
        </div>
        <div class="font-SourceSansPro text-xs mt-4">
            <h1>Update pada tanggal 'hari ini'</h1>
        </div>
        <a href="#" class="mt-4 flex items-center space-x-2 nav-toggler" data-target="#peserta">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4" viewBox="0 0 29.25 29.25">
                <path id="Icon_ionic-ios-arrow-dropdown-circle" data-name="Icon ionic-ios-arrow-dropdown-circle" d="M3.375,18A14.625,14.625,0,1,0,18,3.375,14.623,14.623,0,0,0,3.375,18ZM23.7,14.948a1.362,1.362,0,0,1,1.92,0,1.34,1.34,0,0,1,.394.956,1.364,1.364,0,0,1-.4.963l-6.63,6.609a1.355,1.355,0,0,1-1.87-.042l-6.729-6.708a1.357,1.357,0,0,1,1.92-1.92l5.7,5.759Z" transform="translate(-3.375 -3.375)" fill="#fff"/>
            </svg>
            <span class="text-xs">informasi lengkap</span>
        </a>
        <div id="peserta" class="mt-4 hidden">
            <div class="flex justify-between">
                <div>MLC</div>
                <div>Peserta</div>
            </div>
            <div class="flex justify-between">
                <div>Criterium</div>
                <div>Peserta</div>
            </div>
        </div>
    </div>
</div>