@extends('layout.navbar')

@section('content')
    {{-- Start Hero Banner --}}
    <div class="container pl-16 mt-10">
        <div class="grid grid-cols-2 gap-8 overflow-hidden">
            <div>
                <h1 class="font-semibold text-[55px] leading-tight"><span class="text-cmr">Cemarakan</span> Hari Dengan
                    Menu Kami</h1>
                <p class="py-7">Restoran Cemara menghadirkan hidangan terbaik langsung dari dapur kami ke meja makan Anda.
                    Nikmati kelezatan masakan kami tanpa perlu keluar rumah. Dengan bahan berkualitas dan cita rasa
                    autentik, setiap gigitan di Cemara adalah pengalaman kuliner yang tak terlupakan.</p>
            </div>
            <div class="flex gap-12 items-center">
                <img src="/assets/img/hero1.png" alt="" class="w-[350px] h-[400px] object-cover rounded-xl">
                <img src="/assets/img/hero2.png" alt="" class="w-[200px] h-[250px] object-cover rounded-xl">
                <img src="/assets/img/hero2.png" alt="" class="w-[150px] h-[200px] object-cover rounded-xl">
            </div>

        </div>
    </div>
    {{-- End Hero Banner --}}

    {{-- Start Our Menu --}}
    <div id="our-menu" class= "mt-20 ">
        <h1 class="text-center">Our Menu</h1>
    </div>
    <div class="container px-9">
        <div class="bg-[#F8F8F8] w-[240px] rounded-xl container px-4 py-4">
            <img src="/assets/img/martabak.png" alt=""
                class="h-[195px] w-full object-cover rounded-xl overflow-hidden">
            <h1 class="text-xl tracking-wide w-3/4 font-medium py-4 break-words">Martabak</h1>
            <div class="flex items-center mb-4">
                <p class="tracking-wide font-medium w-3/4 text-[#808080] text-xs">Lorem ipsum dolor</p>
                <div class="flex gap-2" id="he">
                    <img src="/assets/icon/star.svg" alt="" class="w-5 h-5">
                    <p>4.8</p>
                </div>
            </div>
            <div class="flex justify-between">
                <div class="flex gap-1 items-center">
                    <img src="/assets/icon/price.svg" alt="" class="h-4 w-4">
                    <h1 class="text-xs font-medium">Rp. 8000</h1>
                </div>
                <div class="flex gap-1 items-center">
                    <img src="/assets/icon/hand.svg" alt="" class="h-4 w-4">
                    <h1 class="text-xs font-medium">20 Mins</h1>
                </div>
            </div>
        </div>
    </div>
    {{-- End Our Menu --}}
    <div class="container grid grid-cols-3 gap-6 px-9 mt-10">
        {{-- Looping untuk menampilkan setiap produk --}}
        @foreach ($produk as $item)
            <div class="bg-[#F8F8F8] w-[240px] rounded-xl px-4 py-4">
                <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->nama }}" class="h-[195px] w-full object-cover rounded-xl overflow-hidden">
                <h1 class="text-xl tracking-wide font-medium py-4 break-words">{{ $item->nama }}</h1>
                <div class="flex items-center mb-4">
                    <p class="tracking-wide font-medium text-[#808080] text-xs">{{ $item->deskripsi }}</p>
                    <div class="flex gap-2" id="he">
                        <img src="/assets/icon/star.svg" alt="" class="w-5 h-5">
                        <p>{{ $item->bintang }}</p>
                    </div>
                </div>
                <div class="flex justify-between">
                    <div class="flex gap-1 items-center">
                        <img src="/assets/icon/price.svg" alt="" class="h-4 w-4">
                        <h1 class="text-xs font-medium">Rp. {{ number_format($item->harga, 0, ',', '.') }}</h1>
                    </div>
                    <div class="flex gap-1 items-center">
                        <img src="/assets/icon/hand.svg" alt="" class="h-4 w-4">
                        <h1 class="text-xs font-medium">{{ $item->waktu_penyajian }} Mins</h1>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{-- End Our Menu --}}

    <div>
        <div class="bg-cmr flex py-8 my-20">
            <div class="mx-auto flex items-center gap-4">
            <h1 class="text-white">Cari Menu Kamu</h1>
            <img src="/assets/icon/panah.svg" alt="" class="h-5 w-5">
            <div class="flex border border-white outline-none rounded-lg w-[450px] h-12">
                <input type="text" placeholder="Temukan Menu Yang anda inginkan" class="outline-none bg-transparent text-white font-light w-full">
            </div>
            <button class="bg-black text-white px-6 py-3 rounded-lg font-medium"><a href="login">
            Search Now</button></a>
            </div>
        </div>
    </div>
@endsection
