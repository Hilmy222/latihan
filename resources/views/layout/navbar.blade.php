<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body class="font-sans mx-auto max-w-[1920px]">
    <nav class="container p-16">
        <ul class="flex justify-between items-center">
            <li class="flex items-center space-x-2">
                <img src="/assets/icon/Cemara.png" alt="" class="h-10 w-10">
                <h1 class="font-bold text-lg">Cemara</h1>
            </li>
            <li class="flex gap-16">
                <a href="" class="hover:text-cmr font-medium">Home</a>
                <a href="" class="hover:text-cmr font-medium">Menu</a>
                <a href="" class="hover:text-cmr font-medium">Contact Us</a>
            </li>
            <li class="flex gap-6 items-center">
                {{-- <div class="flex border border-[#808080] outline-none bg-transparent rounded-lg">
                    <input type="text" placeholder="Cari menu disini" class="py-2 px-4 outline-none">
                    <img src="/assets/icon/search.svg" alt="" class="w-10 h-10">
                </div> --}}
                <a href="Keranjang">
                    <img src="/assets/icon/bag.svg" alt="">
                </a>
                <button class="bg-cmr text-white px-6 py-2 rounded-xl font-medium"><a href="login">
                    Sig In</button></a>
            </li>
        </ul>
    </nav>
    @yield('content')
</body>

</html>