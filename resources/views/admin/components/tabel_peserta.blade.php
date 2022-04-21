<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 whitespace-nowrap">No Registrasi</th>
                <th scope="col" class="px-6 py-3 whitespace-nowrap">Nama Lengkap</th>
                <th scope="col" class="px-6 py-3 whitespace-nowrap">Tempat Lahir</th>
                <th scope="col" class="px-6 py-3 whitespace-nowrap">Tanggal Lahir</th>
                <th scope="col" class="px-6 py-3 whitespace-nowrap">Jenis Kelamin</th>
                <th scope="col" class="px-6 py-3 whitespace-nowrap">Tim</th>
                <th scope="col" class="px-6 py-3 whitespace-nowrap">Kelas</th>
                <th scope="col" class="px-6 py-3 whitespace-nowrap">Email</th>
                <th scope="col" class="px-6 py-3 whitespace-nowrap">Kota Asal</th>
                <th scope="col" class="px-6 py-3 whitespace-nowrap">Golongan Darah</th>
                <th scope="col" class="px-6 py-3 whitespace-nowrap">Ukuran Jersey</th>
                <th scope="col" class="px-6 py-3 whitespace-nowrap">No Whatsapp</th>
                <th scope="col" class="px-6 py-3 whitespace-nowrap">KTP</th>
            </tr>
        </thead>
        @foreach ($data as $regis)
        <tbody>
            <tr class="border-b dark:bg-gray-800 dark:border-gray-700 odd:bg-white even:bg-gray-50 odd:dark:bg-gray-800 even:dark:bg-gray-700">
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                    {{ $regis->nomor_registrasi }}</td>
                    <td scope="row" class="px-6 py-4 font-normal text-gray-900 dark:text-white whitespace-nowrap">
                        {{ $regis->nama_lengkap }}</td>
                    <td scope="row" class="px-6 py-4 font-normal text-gray-900 dark:text-white whitespace-nowrap">
                        {{ $regis->tempat_lahir }}</td>
                    <td scope="row" class="px-6 py-4 font-normal text-gray-900 dark:text-white whitespace-nowrap">
                        {{ $regis->tanggal_lahir }}</td>
                    <td scope="row" class="px-6 py-4 font-normal text-gray-900 dark:text-white whitespace-nowrap">
                        {{ $regis->jenis_kelamin }}</td>
                    <td scope="row" class="px-6 py-4 font-normal text-gray-900 dark:text-white whitespace-nowrap">
                        {{ $regis->tim }}</td>
                    <td scope="row" class="px-6 py-4 font-normal text-gray-900 dark:text-white whitespace-nowrap">
                        {{ $regis->kelas }}</td>
                    <td scope="row" class="px-6 py-4 font-normal text-gray-900 dark:text-white whitespace-nowrap">
                        {{ $regis->email}}</td>
                    <td scope="row" class="px-6 py-4 font-normal text-gray-900 dark:text-white whitespace-nowrap">
                        {{ $regis->kota }}</td>
                    <td scope="row" class="px-6 py-4 font-normal text-gray-900 dark:text-white whitespace-nowrap">
                        {{ $regis->goldar ?? "NotFound" }}</td>
                    <td scope="row" class="px-6 py-4 font-normal text-gray-900 dark:text-white whitespace-nowrap">
                        {{ $regis->ukuran ?? "NotFound"}}</td>
                    <td scope="row" class="px-6 py-4 font-normal text-gray-900 dark:text-white whitespace-nowrap">
                        {{ $regis->no_wa }}</td>
                    <td scope="row" class="px-6 py-4 font-normal text-gray-900 dark:text-white whitespace-nowrap">
                        {{ $regis->kartu_identitas}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
    