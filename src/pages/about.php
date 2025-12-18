<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Владстройзаказчик</title>
    <link rel="stylesheet" href="../styles/main.css">
</head>
<body>
<div id="loader"></div>

<div id="about-page">
    <header>
        <div class="container">
            <div class="header-wrapper">
                <a href="/" class="logo">
                    <img src="../assets/icons/logo-brown.svg" alt="logo">
                </a>
                <input type="checkbox" id="menu-toggle">
                <label for="menu-toggle" class="menu-btn" href="#">
                    <!--                    <img src="./assets/icons/btn-burger-white.svg" alt="burger">-->
                    <span class="menu-icon"></span>
                </label>
                <?php require_once '../components/menu.php' ?>
            </div>
        </div>
    </header>
    <main class="container">
        <div class="title-block">
            <h1>О компании</h1>
            <span class="page-desc">13 лет опыта, десятки объектов и сотни счастливых семей. Строим для Приморья с уверенностью и знанием дела.</span>
        </div>
        <div class="content-block"></div>
    </main>
    <footer>
        <div class="container">
            <div class="logo">
                <img src="../assets/icons/logo-brown.svg" alt="logo">
                <span>ООО «Владстройзаказчик»</span>
            </div>
            <div class="footer-wrapper">
                <nav>
                    <ul>
                        <li><a href="#">О компании</a></li>
                        <li><a href="#">История</a></li>
                        <li><a href="#">Новости</a></li>
                        <li><a href="#">Наши объекты</a></li>
                        <li><a href="#">Наши преимущества</a></li>
                        <li><a href="#">Команда и партнеры</a></li>
                        <li><a href="#">Контакты</a></li>
                    </ul>
                </nav>
                <div class="contacts">
                    <span class="contacts__main-title">
                        Контакты:
                    </span>
                    <div class="contacts__wrapper">
                        <div class="contacts__item">
                            <div class="contacts__title">Отдел продаж:</div>
                            <div class="contacts__description"><a href="tel:+74232542324">8 (423) 254-23-24</a></div>
                        </div>

                        <div class="contacts__item">
                            <div class="contacts__title">Офис</div>
                            <div class="contacts__description">г. Владивосток, ул. Металлистов, 5а</div>
                        </div>
                        <div class="contacts__item">
                            <div class="contacts__title">WhatsApp</div>
                            <div class="contacts__description"><a href="https://wa.me/79025242324">+7 902-524-23-24</a>
                            </div>
                        </div>
                        <div class="contacts__item">
                            <div class="contacts__title">Часы</div>
                            <div class="contacts__description">с 09:00 до 21:00</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>
</div>
<script src="../js/index.js" type="module"></script>
</body>
</html>