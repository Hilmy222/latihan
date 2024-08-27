<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Keranjang</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <div class="">
        <div class="overflow-x-auto">
            <div class="my-20 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden container px-16">
                    <table class="flex flex-col gap-8">
                        <thead class="border-b">
                            <tr class="bg-white">
                                <th class="text-sm font-medium text-gray-900 py-4 text-left">Produk</th>
                                <div class="flex gap-9">
                                <th class="text-sm font-medium text-gray-900 py-4 text-left">harga Satuan</th>
                                <th class="text-sm font-medium text-gray-900 py-4 text-left">Kuantitas</th>
                                <th class="text-sm font-medium text-gray-900 py-4 text-left">Total Harga</th>
                                <th class="text-sm font-medium text-gray-900 py-4 text-left">Aksi</th>
                                </div>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="text-sm text-gray-900 pl-12 pr-[500px] py-4 text-left">sadsadsad</td>
                                <td class="text-sm text-gray-900 pr-12 py-4 text-left">Rp 90000</td>
                                <td class="text-sm text-gray-900 pr-12 py-4 text-left">30</td>
                                <td class="text-sm text-gray-900 pr-12 py-4 text-left">30000</td>
                                <td class="text-sm text-gray-900 pr-12 py-4 text-left">Hapus</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>