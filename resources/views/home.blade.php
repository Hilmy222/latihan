@extends('layout.navbar')
@section('content')

<div class="container pl-16 mt-10">
    {{-- Hero Banner --}}
    <div class="grid grid-cols-2 gap-8 fixed">
        <div>
            <h1 class="font-semibold text-5xl leading-tight"><span class="text-[#768d3a]">Cemarakan</span> Hari Dengan Menu Kami</h1>
        </div>
        <div class="flex gap-12 items-center">
            <img src="/assets/img/hero1.png" alt="" class="w-[350px] h-[400px] object-cover rounded-xl">
            <img src="/assets/img/hero2.png" alt="" class="w-[200px] h-[250px] object-cover rounded-xl">
            <img src="/assets/img/hero2.png" alt="" class="w-[150px] h-[200px] object-cover rounded-xl">
        </div>
        </div>
    </div>
    {{-- End Hero Banner --}}
@endsection