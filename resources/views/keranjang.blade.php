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
    {{-- <div>
        <img src="" alt="">
        <h1>Home</h1>
    </div> --}}
    <div class="container px-10">
        <div class="flex justify-between bg-white container px-10 py-4 mt-10 text-sm">
            <h1>Produk</h1>
            <ul class="flex gap-20 text-[#808080]">
                <li>Harga Satuan</li>
                <li>Kuantitas</li>
                <li>Total Harga</li>
                <li>Aksi</li>
            </ul>
        </div>

        <div class="my-5 bg-white p-10 flex items-center justify-between">
            <div class="flex gap-5 items-center">
                <img src="/assets/img/martabak.png" alt="" class="w-28 h-28 rounded-xl">
                <div class="flex flex-col">
                    <h1 class="font-medium text-lg">Martabak Bangga</h1>
                    <p class="font-medium text-lg text-gray-400 text-sm">Makanan</p>
                </div>
            </div>
            <ul class="flex gap-[70px] text-[#808080] text-sm">
                <li>Harga Satuan</li>
                <li><div class="flex items-center">
                    <!-- Tombol Minus -->
                    <button class="border border-gray-200 text-gray-700 font-bold py-1 px-3 focus:outline-none hover:bg-gray-400" onclick="decreaseQuantity()">
                        -
                    </button>    
                    <!-- Input untuk Menampilkan Jumlah -->
                    <input type="text" id="quantity" value="1" class="w-9 text-center border border-gray-300 outline-none py-1 text-gray-700" readonly>
                    <!-- Tombol Plus -->
                    <button class="border border-gray-200 text-gray-700 font-bold py-1 px-3 focus:outline-none hover:bg-gray-400" onclick="increaseQuantity()">
                        +
                    </button>
                </div></li>
                <li>Rp 200.000</li>
                <li>Hapus</li>
            </ul>
        </div>
        
        
        
        
        
    </div>
    <div class="sticky inset-x-0 bottom-0 container px-10 overflow-y-auto">
    <div class="flex flex-col items-center gap-3 bg-white shadow-top rounded-t-lg py-3">
        <h1 class="text-center">Total(1 Produk) : Rp 200.000</h1>
        <button class="bg-cmr px-10 py-3 rounded-xl text-white">Checkout</button>
    </div>
    </div>

    <script>
        function increaseQuantity() {
            var quantityInput = document.getElementById('quantity');
            var currentValue = parseInt(quantityInput.value);
            quantityInput.value = currentValue + 1;
        }
    
        function decreaseQuantity() {
            var quantityInput = document.getElementById('quantity');
            var currentValue = parseInt(quantityInput.value);
            if (currentValue > 1) { // Pastikan jumlah tidak kurang dari 1
                quantityInput.value = currentValue - 1;
            }
        }
    </script>
</body>

</html>
