<div class="bg-biru mx-32 rounded-lg my-4">
    <div class="mx-8 py-8">
        <h1 class="text-white font-Montserrat font-bold text-xl">Mohon periksa kembali data diri dengan benar</h1>
        <table class="table-fixed font-SourceSansPro text-white mt-8">
            <tbody>
                <thead>
                    <tr>
                        <th class="w-64"></th>
                        <th class="w-[32rem]"></th>
                    </tr>
                </thead>
                <tr>
                    <td class="tg-0lax">Nama</td>
                    <td class="tg-0lax">{{$dataInvoice[0]->nama_lengkap}}</td>
                </tr>
                <tr>
                    <td class="tg-0lax">Tempat Tanggal Lahir</td>
                    <td class="tg-0lax">{{$dataInvoice[0]->tempat_lahir}}, {{$dataInvoice[0]->tanggal_lahir}}</td>
                </tr>
                <tr>
                    <td class="tg-0lax">Jenis Kelamin</td>
                    <td class="tg-0lax">{{$dataInvoice[0]->jenis_kelamin}}</td>
                </tr>
                <tr>
                    <td class="tg-0lax">Alamat</td>
                    <td class="tg-0lax">{{$dataInvoice[0]->jalan}}, {{$dataInvoice[0]->rt_rw}}, {{$dataInvoice[0]->kelurahan}}, {{$dataInvoice[0]->kecamatan}}, {{$dataInvoice[0]->kota}}, {{$dataInvoice[0]->provinsi}}</td>
                </tr>
                <tr>
                    <td class="tg-0lax">Tim</td>
                    <td class="tg-0lax">{{$dataInvoice[0]->tim}}</td>
                </tr>
                <tr>
                    <td class="tg-0lax">Kelas</td>
                    <td class="tg-0lax">{{$dataInvoice[0]->kelas}}</td>
                </tr>
                <tr>
                    <td class="tg-0lax">Email</td>
                    <td class="tg-0lax">{{$dataInvoice[0]->email}}</td>
                </tr>
                <tr>
                    <td class="tg-0lax">No. Whatsapp</td>
                    <td class="tg-0lax">{{$dataInvoice[0]->no_wa}}</td>
                </tr>
            </tbody>
        </table>
        <div class="flex items-center mt-4">
            <input id="checkbox-1" aria-describedby="checkbox-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="checkbox-1" class="ml-3 text-xs font-normal text-white">Saya telah memeriksa Kembali data diri saya dengan benar. Saya bertanggung jawab atas keaslian data diri yang saya kirimkan.</label>
        </div>
        <div class="mt-8">
            <!-- <button class="bg-white w-32 rounded-md py-1">
                <a href="" class="text-biru font-Montserrat font-bold">Kembali</a>
            </button> -->
            <button class="bg-kuning w-32 rounded-md py-1">
                <a href="/event/mlc/register/success/{{$dataInvoice[0]->nomor_registrasi}}" class="text-biru font-Montserrat font-bold">Lanjut</a>
            </button>
        </div>
    </div>
</div>