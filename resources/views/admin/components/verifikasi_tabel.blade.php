<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 whitespace-nowrap">Nama Lengkap</th>
                <th scope="col" class="px-6 py-3 whitespace-nowrap">Kode Registrasi</th>
                <th scope="col" class="px-6 py-3 whitespace-nowrap">Bank Tujuan</th>
                <th scope="col" class="px-6 py-3 whitespace-nowrap">Bank Asal</th>
                <th scope="col" class="px-6 py-3 whitespace-nowrap">Nama Pemilik Rekening</th>
                <th scope="col" class="px-6 py-3 whitespace-nowrap">No. Rekening</th>
                <th scope="col" class="px-6 py-3 whitespace-nowrap">Total Transfer</th>
                <th scope="col" class="px-6 py-3 whitespace-nowrap">Bukti Transfer</th>
            </tr>
        </thead>
        @foreach ($datap as $dpay) 
                
        <tbody>
            <tr class="border-b dark:bg-gray-800 dark:border-gray-700 odd:bg-white even:bg-gray-50 odd:dark:bg-gray-800 even:dark:bg-gray-700">
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                    {{ $dpay->nama_lengkap ?? "NotFound" }}</td>
                    <td scope="row" class="px-6 py-4 font-normal text-gray-900 dark:text-white whitespace-nowrap">
                    {{ $dpay->nomor_pembayaran }}</td>
                    <td scope="row" class="px-6 py-4 font-normal text-gray-900 dark:text-white whitespace-nowrap">
                    {{ $dpay->nama_lengkap ?? "NotFound" }}</td>
                    <td scope="row" class="px-6 py-4 font-normal text-gray-900 dark:text-white whitespace-nowrap">
                    {{ $dpay->nama_lengkap ?? "NotFound"}}</td>
                    <td scope="row" class="px-6 py-4 font-normal text-gray-900 dark:text-white whitespace-nowrap">
                    {{ $dpay->nama_lengkap ?? "NotFound"}}</td>
                    <td scope="row" class="px-6 py-4 font-normal text-gray-900 dark:text-white whitespace-nowrap">
                    {{ $dpay->nama_lengkap ?? "NotFound"}}</td>
                    <td scope="row" class="px-6 py-4 font-normal text-gray-900 dark:text-white whitespace-nowrap">
                    {{  $dpay->kode_unik  }}</td>
                    <td scope="row" class="px-6 py-4 font-normal text-gray-900 dark:text-white whitespace-nowrap">
                    {{ $dpay->bukti_pembayaran }}</td>
                    
                    
            </tr>
        </tbody>
        @endforeach
    </table>
</div>
    