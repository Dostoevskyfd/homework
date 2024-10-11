<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<header class="header">

<div class="logo">
    <p class="logotip">Логотип</p>
</div>

<div class="menu">
<nav class="nav">
<ul>
    <a href="/"><li>Главная</li></a>
    <a href="/array"><li>Массивы</li></a>
</ul>

</nav>

</div>

</header>

<main class="main">
<div class="cards">

@foreach ($array as $array)

<div class="one-card">

<div class="card-txt">
    <p class="txt-crd">{{$array ['title']}}</p>
    <p class="price-crd">{{$array ['price']}}</p>
</div>

<div class="card-img">
    <img src="{{$array['path']}}" alt="img" class="img-crd">
</div>

</div>

@endforeach
</div>


</main>

<footer class="footer">


<div class="grup_footer">
<div class="copyright">
    <img class="copyImg" src="/img/Copyright.svg.png" alt="">
</div>

<div class="nameUsers_me-and_year">
    <p class="me">Черепова М.А</p>
    <p class="year">2024</p>
</div>
</div>



</footer>

</body>
</html>