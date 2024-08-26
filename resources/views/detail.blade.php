@extends('layout.navbar')

@section('content')
    <div class="container px-16" >
        <div class="flex">
            <div class="w-1/2">
            <img src="/assets/img/martabak.png" alt="" class="w-[400px] h-[450px] object-cover rounded-2xl">
            </div>
            <div class="flex flex-col w-1/2">
                <p class="text-gray-400">Makanan</p>
                <h1 class="font-medium text-3xl">Martabak Bangka</h1>
                <p class="py-7">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum dolor ex natus a tempora expedita nam, repudiandae officiis quos libero soluta sunt omnis et assumenda explicabo eligendi voluptate, nemo iure! Enim sint aspernatur earum ducimus facilis cupiditate provident dolores obcaecati? Id dolorum facere, possimus atque saepe perspiciatis repudiandae nam omnis.</p>
                <div class="flex gap-[105px]">
                <h1 class="text-3xl font-medium py-7">Rp. 5000</h1>
                <div class="flex items-center space-x-4">
                    <!-- Tombol Minus -->
                    <button class="bg-gray-300 text-gray-700 font-bold py-1 rounded-lg px-4 focus:outline-none hover:bg-gray-400" onclick="decreaseQuantity()">
                        -
                    </button>
                
                    <!-- Input untuk Menampilkan Jumlah -->
                    <input type="text" id="quantity" value="1" class="w-12 text-center border border-gray-300 outline-none py-1 rounded-lg text-gray-700" readonly>
                
                    <!-- Tombol Plus -->
                    <button class="bg-gray-300 text-gray-700 font-bold py-1 rounded-lg px-4 focus:outline-none hover:bg-gray-400" onclick="increaseQuantity()">
                        +
                    </button>
                </div>
                
                </div>
                <div class="flex gap-4">
                <form action="" class="flex gap-1 items-center bg-cmr w-52 hover:bg-[#7d9639] py-2 rounded-xl px-3">
                    <img src="/assets/icon/basket.svg" alt="" class="w-8 h-8">
                    <button class="text-white text-sm">Tambah Keranjang</button>
                </form>
                <form action="" class="flex gap-1 items-center bg-cmr w-44 hover:bg-[#7d9639] py-2 rounded-xl px-3">
                    <img src="/assets/icon/payment.svg" alt="" class="w-8 h-8">
                    <button class="text-white text-sm">Beli Sekarang</button>
                </form>
                </div>
            </div>
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
@endsection
