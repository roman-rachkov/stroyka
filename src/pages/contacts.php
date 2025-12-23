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

<div id="contacts-page">
    <header>
        <div class="container">
            <div class="header-wrapper">
                <a href="/" class="logo">
                    <img src="../assets/icons/logo-white.svg" alt="logo">
                </a>

                <input type="checkbox" id="menu-toggle">
                <label for="menu-toggle" class="menu-btn" href="#">
                    <span class="menu-icon"></span>
                </label>
                <?php require_once '../components/menu.php' ?>
            </div>
        </div>
    </header>

    <main>
        <div class="contacts-info">
            <div class="container contacts-info__wrapper">
                <h1 class="contacts-info__title">
                    Контакты
                </h1>
                <div class="contacts-info__items contacts">
                    <div class="contacts__item">
                        <div class="contacts__title">Офис</div>
                        <div class="contacts__description">г. Владивосток, ул. Металлистов, 5а</div>
                    </div>
                    <div class="contacts__item">
                        <div class="contacts__title">Отдел продаж:</div>
                        <div class="contacts__description"><a href="tel:+74232542324">8 (423) 254-23-24</a></div>
                    </div>
                    <div class="contacts__item">
                        <div class="contacts__title">Часы</div>
                        <div class="contacts__description">с 09:00 до 21:00</div>
                    </div>
                    <div class="contacts__item">
                        <div class="contacts__title">WhatsApp</div>
                        <div class="contacts__description"><a href="https://wa.me/79025242324">+7 902-524-23-24</a>
                        </div>
                    </div>
                </div>
                <p class="contacts-info__scheme">Схема проезда</p>
            </div>
        </div>

        <div class="contacts-map">
            <button class="map-btn">
                <img src="../assets/images/index-slider-contacts.jpg" alt="map">
            </button>
            <div class="map disabled">
                <iframe
                    src="https://yandex.ru/map-widget/v1/?um=constructor%3A8b546c4ee1996a15514b6cbd7d7ba4abbfc7c735e8202b2b418ff63af3000c0d&amp;source=constructor"
                    width="100%" height="100%" frameborder="0"></iframe>
            </div>
        </div>


    </main>

    <footer>
        <div class="container">
            <div class="copyright">
                2025, ГК Владстройзаказчик
            </div>
        </div>
    </footer>
</div>
<script src="../js/index.js" type="module"></script>
</body>
</html>