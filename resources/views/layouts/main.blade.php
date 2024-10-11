<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<header >
    <div class="flex flex-row justify-between flex-wrap bg-stone-600 p-8">
        <p class="text-white pl-40">Нарушений.нет</p>
    </div>
    </header>
    <main>
        @yield('contnet')
    </main>
    <footer class="flex flex-row justify-between flex-wrap bg-stone-600 px-8 left-0 bottom-0 fixed w-full h-50">
        <div class="flex pt-10 pl-40">
        <div class="">
            <img class="size-10" src="/img/Copyright.svg.png" alt="Copyright">
        </div>

        <div class="flex pt-2 pl-10">
        <p class="text-white">Черепова М.А</p>
         <p class="text-white">2024</p>
        </div>
        </div>
    </footer>
</body>
</html>