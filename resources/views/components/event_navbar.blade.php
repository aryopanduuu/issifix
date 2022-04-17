<div>
    <img src="{{ asset('assets/mobile_mlc_head.jpg') }}" alt="" class="w-full lg:hidden" />
    <img src="{{ asset('assets/lg_mlc_head.jpg') }}" alt="" class="w-full hidden lg:block" />
    <!-- Navbar -->
    <nav class="bg-white text-biru border-b-2 border-b-biru lg:border-t-2 lg:border-t-biru lg:my-2">
        <!-- container -->
        <div class="flex flex-wrap mx-4 lg:space-x-4 py-2 lg:justify-between lg:container lg:mx-auto">
            <!-- Navbar Brand -->
            <button class="inline-flex items-center justify-center w-8 h-8 mr-auto lg:hidden nav-toggler" data-target="#navigationevents">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
            <div class="font-poppins font-bold flex items-center text-gray-900 lg:hidden">MADIUN - LAWU CHALLENGE 2022</div>
            <!-- Toggler -->
            <!-- Menu -->
            <div class="hidden w-full mt-1 lg:inline-flex lg:w-full  lg:items-center font-poppins lg:block lg:mx-auto top-navbar" id="navigationevents">
                <ul class="flex flex-col w-full space-y-2 lg:w-auto lg:flex-row lg:space-y-0 lg:space-x-6 uppercase font-semibold tracking-tight text-biru">
                    <li>
                        <a href="/event/mlc" class="flex w-full space-y-2 lg:w-auto lg-flex-row lg:space-y-0">About</a>
                    </li>
                    <li>
                        <a href="/event/mlc/regulation" class="flex w-full space-y-2 lg:w-auto lg-flex-row lg:space-y-0">Regulation</a>
                    </li>
                    <li>
                        <a href="/event/mlc/register" class="flex w-full space-y-2 lg:w-auto lg-flex-row lg:space-y-0">Registration</a>
                    </li>
                    <li>
                        <a href="/event/mlc/verifikasipembayaran" class="flex w-full space-y-2 lg:w-auto lg-flex-row lg:space-y-0">Payment Confirmation</a>
                    </li>
                    <li class="hidden">
                        <a href="" class="flex w-full space-y-2 lg:w-auto lg-flex-row lg:space-y-0">Booking Status</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>