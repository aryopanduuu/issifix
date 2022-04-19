{{-- navbar --}}
<nav class="bg-black text-white">
    <!-- container -->
    <div class="flex flex-wrap mx-4 lg:space-x-4 py-4 lg:justify-between lg:mx-8">
    <!-- Navbar Brand -->
        <a href="/" class="inline-flex text-2xl font-bold  font-Montserrat text-white uppercase space-x-2 lg:text-4xl items-center">
            <img src="{{ asset('assets/logo/issi.png') }}" class="h-8 lg:h-12 lg:block hidden" />
            <span>ISSI KOTA MADIUN</span>
        </a>
    <!-- Toggler -->
        <button class="inline-flex items-center justify-center w-8 h-8 ml-auto lg:hidden nav-toggler" data-target="#navigation">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M
            4 18h16" />
            </svg>
        </button>
        <!-- Menu -->
        <div class="hidden w-full mt-6 lg:inline-flex lg:w-auto lg:mt-0 lg:items-center font-SourceSansPro lg:block top-navbar" id="navigation">
            <ul class="flex flex-col w-full space-y-6 lg:w-auto lg:flex-row lg:space-y-0 lg:space-x-6">
                <li>
                    <a href="/" class=" flex w-full space-y-2 lg:w-auto lg-flex-row lg:space-y-0">Home</a>
                </li>
                <li>
                    <a href="/profile" class="flex w-full space-y-2 lg:w-auto lg-flex-row lg:space-y-0">Profile</a>
                </li>
                <li>
                    <a href="/news" class=" flex w-full space-y-2 lg:w-auto lg-flex-row lg:space-y-0">News</a>
                </li>
                <li>
                    <a href="/event" class=" flex w-full space-y-2 lg:w-auto lg-flex-row lg:space-y-0">Event</a>
                </li>
                <li>
                    <a href="/gallery" class=" flex w-full space-y-2 lg:w-auto lg-flex-row lg:space-y-0">Gallery</a>
                </li>
            </ul>
        </div>
    </div>
</nav>