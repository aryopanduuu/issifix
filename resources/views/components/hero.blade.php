{{-- <div>
    <img src="{{ asset('assets/mobile_landingpage.jpg') }}" alt="" class="w-full object-cover lg:hidden">
    
</div> --}}
{{-- <p id="demo" class="font-Montserrat text-7xl font-bold absolute top-20 right-4"></p> --}}
{{-- <img src="{{ asset('assets/lg_landingpage.jpg') }}" alt="" class="w-full object-cover hidden lg:block"> --}}

{{-- <div class="bg-local" style="background-size: cover; background-image: url({{ asset('assets/lg_landingpage.jpg') }})">
    <div class="">
        <h1>OPEN REGISTRATION</h1>
        <p id="demo" class="font-Montserrat text-7xl font-bold text-white "></p>
    </div>
</div> --}}
{{-- desktop --}}
<div class="relative text-center text-white hidden lg:block">
    <img src="{{ asset('assets/lg_landingpage.jpg') }}" alt="" class="w-full object-cover">
    <div class="absolute top-0 left-0 pt-[35vh] w-full text-center">
        <h1 class="text-putih font-Montserrat font-semibold">OPEN REGISTRATION</h1>
        <p id="demo" class="font-Montserrat text-7xl font-bold text-white "></p>
    </div>
</div>
{{-- mobile --}}
<div class="relative text-center text-white lg:hidden">
    <img src="{{ asset('assets/mobile_landingpage.jpg') }}" alt="" class="w-full object-cover">
    <div class="absolute top-0 left-0 pt-[32vh] w-full text-center">
        <h1 class="text-putih font-Montserrat font-semibold">OPEN REGISTRATION</h1>
        <p id="demo" class="font-Montserrat text-5xl font-bold text-white ">3 HARI LAGI</p>
    </div>
</div>

<script>
    // Mengatur waktu akhir perhitungan mundur
    var countDownDate = new Date("Apr 23, 2022 00:01:00").getTime();
    
    // Memperbarui hitungan mundur setiap 1 detik
    var x = setInterval(function() {
    
        // Untuk mendapatkan tanggal dan waktu hari ini
        var now = new Date().getTime();
            
        // Temukan jarak antara sekarang dan tanggal hitung mundur
        var distance = countDownDate - now;
            
        // Perhitungan waktu untuk hari, jam, menit dan detik
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
        // Keluarkan hasil dalam elemen dengan id = "demo"
        document.getElementById("demo").innerHTML = days + " Hari " + hours + " Jam "
        + minutes + " Menit ";
            
        // Jika hitungan mundur selesai, tulis beberapa teks 
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
        }
    }, 1000);
</script>