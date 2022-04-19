{{-- Mobile Version --}}
<div class="bg-local lg:hidden" style="background-size: cover; background-image: url({{ asset('assets/mobile_event_hero.jpg') }})">
    <div class="lg:mx-72 mx-8 py-[15vh]  lg:pt-[30vh]">
        <div class="lg:grid lg:grid-cols-2 gap-0 bg-putih rounded-2xl shadow-2xl p-8 space-y-10">
            <div class="text-center">
                <img src="{{ asset('assets/komlogo.png') }}" alt="" class="w-48 mx-auto">
                <div class="text-biru font-SourceSansPro font-bold text-base mt-4">16 JULI 2022</div>
                <button class="bg-biru px-6 py-1 rounded-md mt-4">
                    <a href="/event/mlc" class="text-white font-SourceSansPro font-bold text-base">SUBMIT</a>
                </button>
            </div>
            <div class="text-center">
                <img src="{{ asset('assets/criteriumlogo.png') }}" alt="" class="w-48 mx-auto">
                <div class="text-biru font-SourceSansPro font-bold text-base mt-4">17 JULI 2022</div>
                <button class="bg-biru px-6 py-1 rounded-md mt-4">
                    <a href="/maintenance" class="text-white font-SourceSansPro font-bold text-base">SUBMIT</a>
                </button>
            </div>
        </div>
    </div>
</div>

{{-- Desktop version --}}
<div class="bg-local lg:block hidden" style="background-size: cover; background-image: url({{ asset('assets/lg_event_hero.jpg') }})">
    <div class="mx-72 py-[42vh]">
        <div class="grid grid-cols-2 gap-0 bg-putih rounded-2xl shadow-2xl p-8">
            <div class="text-center">
                <img src="{{ asset('assets/komlogo.png') }}" alt="" class="w-48 mx-auto">
                <div class="text-biru font-SourceSansPro font-bold text-base mt-4">16 JULI 2022</div>
                <button class="bg-biru px-6 py-1 rounded-md mt-2 hover:bg-blue-900 ease-in-out duration-200">
                    <a href="/event/mlc" class="text-white font-SourceSansPro font-bold text-base">SUBMIT</a>
                </button>
            </div>
            <div class="text-center">
                <img src="{{ asset('assets/criteriumlogo.png') }}" alt="" class="w-48 mx-auto">
                <div class="text-biru font-SourceSansPro font-bold text-base mt-4">17 JULI 2022</div>
                <button class="bg-biru px-6 py-1 rounded-md mt-2 hover:bg-blue-900 ease-in-out duration-200">
                    <a href="/maintenance" class="text-white font-SourceSansPro font-bold text-base">SUBMIT</a>
                </button>
            </div>
        </div>
    </div>
</div>