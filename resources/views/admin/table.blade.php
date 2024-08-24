<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table with Modal</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="p-10">

    <!-- Button to open modal -->
    <div class="mb-4">
        <button onclick="document.getElementById('modal').classList.remove('hidden')" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah Produk</button>
    </div>

    <!-- Table -->
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-300 border border-gray-300">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-b border-gray-300">Id Produk</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-b border-gray-300">Nama</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-b border-gray-300">Gambar</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-b border-gray-300">Jenis</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-b border-gray-300">Harga</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-b border-gray-300">Waktu Penyajian</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-b border-gray-300">Bintang</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-300">
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap border-b border-gray-300">001</td>
                    <td class="px-6 py-4 whitespace-nowrap border-b border-gray-300">Martabak Manis</td>
                    <td class="px-6 py-4 whitespace-nowrap border-b border-gray-300">
                        <img src="https://via.placeholder.com/100" alt="Martabak Manis" class="w-24 h-24 object-cover">
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap border-b border-gray-300">Kue</td>
                    <td class="px-6 py-4 whitespace-nowrap border-b border-gray-300">Rp 50.000</td>
                    <td class="px-6 py-4 whitespace-nowrap border-b border-gray-300">30 menit</td>
                    <td class="px-6 py-4 whitespace-nowrap border-b border-gray-300">4.8</td>
                </tr>
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap border-b border-gray-300">002</td>
                    <td class="px-6 py-4 whitespace-nowrap border-b border-gray-300">Kue Cubir</td>
                    <td class="px-6 py-4 whitespace-nowrap border-b border-gray-300">
                        <img src="https://via.placeholder.com/100" alt="Kue Cubir" class="w-24 h-24 object-cover">
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap border-b border-gray-300">Kue</td>
                    <td class="px-6 py-4 whitespace-nowrap border-b border-gray-300">Rp 30.000</td>
                    <td class="px-6 py-4 whitespace-nowrap border-b border-gray-300">20 menit</td>
                    <td class="px-6 py-4 whitespace-nowrap border-b border-gray-300">4.5</td>
                </tr>
                <!-- Tambahkan baris lainnya di sini -->
            </tbody>
        </table>
    </div>

    <!-- Modal -->
    <div id="modal" class="fixed inset-0 bg-gray-500 bg-opacity-75 flex items-center justify-center hidden">
        <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
            <h2 class="text-lg font-semibold mb-4">Tambah Produk</h2>
            <form>
                <div class="mb-4">
                    <label for="id-produk" class="block text-sm font-medium text-gray-700">Id Produk</label>
                    <input type="text" id="id-produk" name="id-produk" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                </div>
                <div class="mb-4">
                    <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                    <input type="text" id="nama" name="nama" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                </div>
                <div class="mb-4">
                    <label for="gambar" class="block text-sm font-medium text-gray-700">Upload Gambar</label>
                    <input type="file" id="gambar" name="gambar" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" accept="image/*" required>
                </div>
                <div class="mb-4">
                    <label for="jenis" class="block text-sm font-medium text-gray-700">Jenis</label>
                    <input type="text" id="jenis" name="jenis" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                </div>
                <div class="mb-4">
                    <label for="harga" class="block text-sm font-medium text-gray-700">Harga</label>
                    <input type="text" id="harga" name="harga" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                </div>
                <div class="mb-4">
                    <label for="waktu-penyajian" class="block text-sm font-medium text-gray-700">Waktu Penyajian</label>
                    <input type="text" id="waktu-penyajian" name="waktu-penyajian" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                </div>
                <div class="mb-4">
                    <label for="bintang" class="block text-sm font-medium text-gray-700">Bintang</label>
                    <input type="text" id="bintang" name="bintang" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                </div>
                <div class="flex justify-end">
                    <button type="button" onclick="document.getElementById('modal').classList.add('hidden')" class="bg-gray-500 text-white px-4 py-2 rounded mr-2">Batal</button>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Function to toggle modal visibility
        function toggleModal() {
            const modal = document.getElementById('modal');
            modal.classList.toggle('hidden');
        }
    </script>

</body>
</html>
