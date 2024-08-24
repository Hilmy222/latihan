@extends('layout.navbar')

@section('content')

    {{-- Start Hero Banner --}}
    <div class="container pl-16 mt-10">
        <div class="grid grid-cols-2 gap-8 fixed">
            <div>
                <h1 class="font-semibold text-[55px] leading-tight"><span class="text-[#768d3a]">Cemarakan</span> Hari Dengan Menu Kami</h1>
                <p class="py-7">Restoran Cemara menghadirkan hidangan terbaik langsung dari dapur kami ke meja makan Anda. Nikmati kelezatan masakan kami tanpa perlu keluar rumah. Dengan bahan berkualitas dan cita rasa autentik, setiap gigitan di Cemara adalah pengalaman kuliner yang tak terlupakan.</p>
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
    {{-- End Our Menu --}}
@endsection