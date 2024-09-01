<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkout</title>
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
        <h1 class="text-2xl">Payment</h1>
    </div>
    {{-- <div>
        <img src="" alt="">
        <h1>Home</h1>
    </div> --}}
    <div class="flex justify-between container px-10">
        <div class="">
            <div class="flex items-center gap-2 mt-12 mb-5">
                <img src="/assets/icon/location.svg" alt="" class="w-6 h-6">
                <h1 class="font-medium">Alamat</h1>
            </div>
            <div class="bg-white w-[369px] p-7 rounded-xl space-y-4">
                <img src="/assets/icon/location.svg" alt="" class="w-6 h-6">
                <p class="text-xs">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum tenetur ullam
                    pariatur.</p>
            </div>
        </div>
        <div class="mt-12 bg-gray-200 w-[400px] p-6 rounded-xl">
            <div class="flex justify-between text-lg">
                <h1>Cart</h1>
                <h1>1 Items</h1>
            </div>
            <div class="mt-10 flex justify-between items-center">
                <div>
                    <h1>Martabak Bangga</h1>
                    <h1 class="font-light text-[#808080] text-sm">Rp 23.000</h1>
                </div>
                <div class="flex items-center">
                    <!-- Tombol Minus -->
                    <button class="border text-gray-700 font-bold py-1 px-3 focus:outline-none hover:bg-gray-400" onclick="decreaseQuantity()">-</button>
                    <!-- Input untuk Menampilkan Jumlah -->
                    <input type="text" id="quantity" value="1" class="w-9 text-center border border-gray-300 outline-none py-1 text-gray-700" readonly>
                    <!-- Tombol Plus -->
                    <button class="border text-gray-700 font-bold py-1 px-3 focus:outline-none hover:bg-gray-400"   onclick="increaseQuantity()"> +
                    </button>
                </div>
            </div>
            <div class="flex flex-col gap-2 my-14 text-sm font-light text-[#808080]">
                <h1 class="pb-3">Detail Pembayaran</h1>
                <div class="flex justify-between">
                    <h1>Total Item</h1>
                    <h1>Rp 23.000</h1>
                </div>
                <div class="flex justify-between">
                    <h1>Delivery Fee</h1>
                    <h1>Rp 12.0000</h1>
                </div>
                <div class="flex justify-between">
                    <h1>Pajak dan Biaya</h1>
                    <h1>Rp 2.000</h1>
                </div>
                <div class="mt-5 gap-2 flex flex-col">
                    <div class="flex justify-between">
                        <h1>Total</h1>
                        <h1>Rp 37.000</h1>
                    </div>
                    <div class="flex justify-between">
                        <h1>Diskon</h1>
                        <h1>0</h1>
                    </div>
                </div>
            </div>
            <div class="flex justify-between font-semibold text-2xl mb-10">
                <h1>Total</h1>
                <h1>Rp 37.000</h1>
            </div>
            <Button class="bg-cmr text-white w-full py-3 rounded-xl">Proses Pembayaran</Button>
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