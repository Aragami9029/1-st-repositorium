<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/public/CSS/profile.css">
</head>
<body>
<header id="header">
        <div class="logoTxt"><h3>RetroWave<br>Shop</h3></div>
        <div class="dropmenu">
            <button class="dropbtn">Menu</button>
            <div class="dropcontent">
                <a href="#">Мой профиль</a>
                <a href="/public/Главная">Главная</a>
                <a href="">О нас</a>
                <a href="/Корзина">Корзина</a>
            </div>
        </div>
    </header>
    <div class="mainBlock">
        <form action="/profile/publicate/" method="POST">
            {{ csrf_field() }}
            <input type="text" placeholder="Название">
            <input type="text" placeholder="Описание">
            <input type="text" placeholder="Цена">
            <input type="date" placeholder="Год выпуска">
            <input type="text" placeholder="Количество">
           <!-- <input type="image" placeholder="Картинка"> -->
            <input type="submit">
        </form>
    </div>
</body>
</html>