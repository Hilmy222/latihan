<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body class="font-sans">
    <nav class="container p-16">
        <ul class="flex justify-between">
            <li class="flex space-x-2">
                <img src="/assets/icon/Subtract.svg" alt="" class="h-7 w-7">
                <h1 class="font-bold text-lg">Cemara</h1>
            </li>
            <li class="flex gap-6">
                <div class="flex border border-[#808080] outline-none bg-transparent rounded-lg">
                <input type="text" placeholder="Cari menu disini" class="py-2 px-4 outline-none"><img src="/assets/icon" alt="">
                <img src="/assets/icon/search.svg" alt="" class="w-10 h-10">  
                </div>
                <img src="/assets/icon/bag.svg" alt="">
                <button class="bg-[#202020] text-white px-6 rounded-xl font-semibold"><a href="login">Login</button></a>
            </li>
        </ul>
    </nav>
    @yield('content')
</body>
</html>