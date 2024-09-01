@extends('layout.navbar')

@section('content')

<div class="container px-16">
    <div class="flex mb-8">
        <div class="w-1/2">
            <img src="{{ asset('storage/' . $produk->gambar) }}" alt="{{ $produk->nama }}"
                class="w-[400px] h-[450px] object-cover rounded-2xl">
        </div>
        <div class="flex flex-col w-1/2">
            <p class="text-gray-400">{{ $produk->jenis }}</p>
            <h1 class="font-medium text-3xl">{{ $produk->nama }}</h1>
            <p class="py-7">{{ $produk->deskripsi }}</p>
            <div class="flex gap-[105px]">
                <h1 class="text-3xl font-medium py-7">Rp.{{ number_format($produk->harga, 0, ',', '.') }}</h1>
                <div class="flex items-center space-x-4">
                    <!-- Tombol Minus -->
                    <button
                        class="bg-gray-300 text-gray-700 font-bold py-1 rounded-lg px-4 focus:outline-none hover:bg-gray-400"
                        onclick="decreaseQuantity()">
                        -
                    </button>

                    <!-- Input untuk Menampilkan Jumlah -->
                    <input type="text" id="quantity" value="1"
                        class="w-12 text-center border border-gray-300 outline-none py-1 rounded-lg text-gray-700"
                        readonly>

                    <!-- Tombol Plus -->
                    <button
                        class="bg-gray-300 text-gray-700 font-bold py-1 rounded-lg px-4 focus:outline-none hover:bg-gray-400"
                        onclick="increaseQuantity()">
                        +
                    </button>
                </div>
            </div>
            <div class="flex gap-4">
                <!-- Form Tambah Keranjang -->
                <form id="add-to-cart-form" action="{{ route('produk.addToCart', $produk->id_produk) }}" method="POST"
                    class="flex gap-1 items-center bg-cmr w-52 hover:bg-[#7d9639] py-2 rounded-xl px-3">
                    @csrf
                    <input type="hidden" id="quantity-hidden" name="quantity" value="1">
                    <img src="/assets/icon/basket.svg" alt="" class="w-8 h-8">
                    <button type="submit" class="text-white text-sm">Tambah Keranjang</button>
                </form>

                <!-- Form Beli Sekarang -->
                <form action="" class="flex gap-1 items-center bg-cmr w-44 hover:bg-[#7d9639] py-2 rounded-xl px-3">
                    <img src="/assets/icon/payment.svg" alt="" class="w-8 h-8">
                    <button class="text-white text-sm">Beli Sekarang</button>
                </form>
            </div>
        </div>
    </div>
</div>



<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Fungsi untuk menampilkan notifikasi produk ditambahkan
        function showNotification(message) {
            alert(message);
        }

        // Fungsi untuk memperbarui jumlah item di keranjang
        function updateCartCount(count) {
            const cartCountElement = document.getElementById('cart-count');
            cartCountElement.textContent = count;
            if (count > 0) {
                cartCountElement.style.display = 'flex';
            } else {
                cartCountElement.style.display = 'none';
            }
        }

        // Contoh penggunaan ketika tombol "Tambah Keranjang" diklik
        const addToCartForm = document.querySelector('form[action="{{ route("produk.addToCart", $produk->id_produk) }}"]');
        addToCartForm.addEventListener('submit', function (e) {
            e.preventDefault();
            // Simulasikan penambahan produk ke keranjang
            let currentCount = parseInt(document.getElementById('cart-count').textContent);
            updateCartCount(currentCount + 1);

            // Tampilkan notifikasi

            // Simpan perubahan jumlah produk di keranjang ke server, local storage, atau session (optional)
            // Kode untuk menyimpan jumlah item ke server atau penyimpanan lokal
        });
    });
    function increaseQuantity() {
        var quantityInput = document.getElementById('quantity');
        var currentValue = parseInt(quantityInput.value);
        quantityInput.value = currentValue + 1;
        updateHiddenQuantity(); // Update input tersembunyi
    }

    function decreaseQuantity() {
        var quantityInput = document.getElementById('quantity');
        var currentValue = parseInt(quantityInput.value);
        if (currentValue > 1) { // Pastikan jumlah tidak kurang dari 1
            quantityInput.value = currentValue - 1;
            updateHiddenQuantity(); // Update input tersembunyi
        }
    }

    function updateHiddenQuantity() {
        var quantityInput = document.getElementById('quantity');
        var hiddenQuantityInput = document.getElementById('quantity-hidden');
        hiddenQuantityInput.value = quantityInput.value;
    }

    document.getElementById('add-to-cart-form').addEventListener('submit', function (e) {
        e.preventDefault(); // Mencegah form dari pengiriman secara default

        var form = this;
        var formData = new FormData(form);

        fetch(form.action, {
            method: form.method,
            body: formData,
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'X-CSRF-Token': form.querySelector('input[name="_token"]').value
            }
        })
            .then(response => response.json())
            .then(data => {
                // Tampilkan notifikasi
                var notification = document.getElementById('notification');
                notification.classList.remove('hidden');

                // Sembunyikan notifikasi setelah beberapa detik
                setTimeout(() => {
                    notification.classList.add('hidden');
                }, 3000);
            })
            .catch(error => {
                console.error('Error:', error);
            });
    });
</script>
@endsection