<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validasi Sertifikat</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-full bg-cover bg-center" style="background-image: url('{{ $data['background_image'] }}')">
    <div class="container mx-auto py-12">
        <div class="bg-white bg-opacity-80 p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold text-center">Validasi Sertifikat</h2>
            <hr class="my-4">

            <table class="table-auto w-full border border-gray-300">
                <tbody>
                    <tr class="border-b border-gray-300">
                        <th class="px-4 py-2 text-left">Jenis Sertifikat</th>
                        <td class="px-4 py-2">{{ $data['jenis_sertifikat'] }}</td>
                    </tr>
                    <tr class="border-b border-gray-300">
                        <th class="px-4 py-2 text-left">Nomor Sertifikat</th>
                        <td class="px-4 py-2">{{ $data['nomor_sertifikat'] }}</td>
                    </tr>
                    <tr class="border-b border-gray-300">
                        <th class="px-4 py-2 text-left">Nama Penerima</th>
                        <td class="px-4 py-2">{{ $data['nama_penerima'] }}</td>
                    </tr>
                    <tr class="border-b border-gray-300">
                        <th class="px-4 py-2 text-left">Asal Penerima</th>
                        <td class="px-4 py-2">{{ $data['asal_penerima'] }}</td>
                    </tr>
                    <tr class="border-b border-gray-300">
                        <th class="px-4 py-2 text-left">Deskripsi Sertifikat</th>
                        <td class="px-4 py-2">{{ $data['deskripsi_sertifikat'] }}</td>
                    </tr>
                    <tr class="border-b border-gray-300">
                        <th class="px-4 py-2 text-left">Lokasi</th>
                        <td class="px-4 py-2">{{ $data['lokasi'] }}</td>
                    </tr>
                    <tr class="border-b border-gray-300">
                        <th class="px-4 py-2 text-left">Tanggal Penerbitan</th>
                        <td class="px-4 py-2">{{ $data['tanggal_penerbitan'] }}</td>
                    </tr>
                    <tr class="border-b border-gray-300">
                        <th class="px-4 py-2 text-left">Nama Penandatangan</th>
                        <td class="px-4 py-2">{{ $data['nama_penandatangan'] }}</td>
                    </tr>
                    <tr>
                        <th class="px-4 py-2 text-left">Jabatan Penandatangan</th>
                        <td class="px-4 py-2">{{ $data['jabatan_penandatangan'] }}</td>
                    </tr>
                </tbody>
            </table>

            <div class="text-center mt-6">
                <a href="{{ $data['download_link'] }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Download Sertifikat</a>
            </div>
        </div>
    </div>
</body>

</html>
