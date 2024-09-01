<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Keranjang Belanja</title>
    @vite('resources/css/app.css')
    <link rel="shortcut icon" href="/assets/icon/Cemara.png">
</head>

<body class="bg-gray-100">
    <div class="bg-white flex items-end gap-3 px-10 py-7">
        <a href="/home">
            <div class="flex items-end gap-1">
                <img src="/assets/icon/Cemara.png" alt="" class="w-10 h-10">
                <h1 class="text-2xl text-cmr">Cemara</h1>
            </div>
        </a>
        <div class="h-8 w-px bg-gray-400"></div>
        <h1 class="text-2xl">Keranjang Belanja</h1>
    </div>

    <div class="container px-10">
        @if(count($cart) > 0)
            <div class="flex justify-between bg-white container px-10 py-4 mt-10 text-sm">
                <h1>Produk</h1>
                <ul class="flex gap-20 text-[#808080]">
                    <li>Harga Satuan</li>
                    <li>Kuantitas</li>
                    <li>Total Harga</li>
                    <li>Aksi</li>
                </ul>
            </div>

            @foreach($cart as $id => $item)
                <div class="my-5 bg-white p-10 flex items-center justify-between">
                    <div class="flex gap-5 items-center">
                        <img src="{{ asset('storage/' . $item['image']) }}" alt="" class="w-28 h-28 rounded-xl">
                        <div class="flex flex-col">
                            <h1 class="font-medium text-lg">{{ $item['name'] }}</h1>
                            <p class="font-medium text-lg text-gray-400 text-sm">Makanan</p>
                        </div>
                    </div>
                    <ul class="flex gap-[70px] text-[#808080] text-sm">
                        <li>Rp {{ number_format($item['price'], 0, ',', '.') }}</li>
                        <li>
                            <div class="flex items-center">
                                <!-- Tombol Minus -->
                                <button
                                    class="border border-gray-200 text-gray-700 font-bold py-1 px-3 focus:outline-none hover:bg-gray-400"
                                    onclick="changeQuantity('{{$id}}', -1)">
                                    -
                                </button>
                                <!-- Input untuk Menampilkan Jumlah -->
                                <input type="text" id="quantity_{{$id}}" value="{{ $item['quantity'] }}"
                                    class="w-9 text-center border border-gray-300 outline-none py-1 text-gray-700" readonly>
                                <!-- Tombol Plus -->
                                <button
                                    class="border border-gray-200 text-gray-700 font-bold py-1 px-3 focus:outline-none hover:bg-gray-400"
                                    onclick="changeQuantity('{{$id}}', 1)">
                                    +
                                </button>
                            </div>
                        </li>
                        <li>Rp {{ number_format($item['price'] * $item['quantity'], 0, ',', '.') }}</li>
                        <li><a href="#" class="text-red-500" onclick="deleteItem('{{ $id }}')">Hapus</a></li>
                    </ul>
                </div>
            @endforeach

            <div class="sticky inset-x-0 bottom-0 container px-15 overflow-y-auto">
                <div class="flex flex-col items-center gap-3 bg-white shadow-top rounded-t-lg py-3">
                    <h1 class="text-center">Total ({{ count($cart) }} Produk) : Rp {{ number_format($total, 0, ',', '.') }}</h1>
                    <button class="bg-cmr px-10 py-3 rounded-xl text-white">Checkoucht</button>
                </div>
            </div>
        @else
            <div class="flex flex-col items-center justify-center h-96">
                <h1 class="text-2xl font-bold text-gray-600 mb-4">Keranjang Anda Kosong</h1>
                <p class="text-gray-500 mb-6">Sepertinya Anda belum menambahkan produk ke dalam keranjang.</p>
                <a href="/home" class="bg-cmr hover:bg-[#7d9639] text-white px-8 py-3 rounded-xl">Mulai Berbelanja</a>
            </div>
        @endif
    </div>

    <script>
        // Function untuk menghapus item dari keranjang
        function deleteItem(id_produk) {
            fetch('/keranjang/delete', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({
                    productId: id_produk
                })
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        console.log('Produk dihapus');
                        location.reload();
                    } else {
                        console.error('Terjadi kesalahan saat menghapus produk');
                    }
                })
                .catch(error => console.error('Error:', error));
        }

        // Function untuk mengubah kuantitas produk
        function changeQuantity(id_produk, change) {
            var quantityInput = document.getElementById('quantity_' + id_produk);
            var currentValue = parseInt(quantityInput.value);

            var newValue = currentValue + change;
            if (newValue < 1) return;
            quantityInput.value = newValue;

            fetch('/keranjang/update', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({
                    productId: id_produk,
                    quantity: newValue
                })
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        console.log('Kuantitas diperbarui');
                        location.reload();
                    } else {
                        console.error('Terjadi kesalahan saat memperbarui kuantitas');
                    }
                })
                .catch(error => console.error('Error:', error));
        }
    </script>
</body>

</html>
