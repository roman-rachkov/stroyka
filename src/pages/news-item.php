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

<div id="news-item-page">
    <header>
        <div class="container">
            <div class="header-wrapper">
                <a href="/" class="logo">
                    <img src="../assets/icons/logo-brown.svg" alt="logo">
                </a>
                <input type="checkbox" id="menu-toggle">
                <label for="menu-toggle" class="menu-btn">
                    <span class="menu-icon"></span>
                </label>
                <?php require_once '../components/menu.php' ?>
            </div>
        </div>
    </header>
    <main class="container">
        <div class="content-block">
            <div class="news-item">
                <div class="news-item__info">
                    <div class="news-item__title-block">
                        <h3 class="new-item__title">Fusce at nisi arcu. Quisque sed dolor nec dui scelerisque
                            dapibus.</h3>
                        <span class="news-item__date">05.06.2025</span>
                    </div>
                    <p class="news-item__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias hic,
                        ipsum nam perferendis placeat possimus praesentium quibusdam repellendus saepe suscipit veniam,
                        voluptas, voluptatem? Aspernatur assumenda autem debitis earum inventore molestias numquam
                        perspiciatis quasi quia quis quisquam ratione, ullam, vero. Minus?</p>
                </div>
                <img src="../assets/images/news-item-main.jpg" alt="" class="news-item__img">
            </div>
            <div class="gallery">
                <img src="../assets/images/news-item-1.jpg" alt="">
                <img src="../assets/images/news-item-2.jpg" alt="">
                <img src="../assets/images/news-item-3.jpg" alt="">
                <img src="../assets/images/news-item-4.jpg" alt="">
            </div>
            <div class="arrows">
                <a href="#" class="arrow arrow_left">Назад</a>
                <a href="#" class="arrow arrow-right">Вперед</a>
            </div>
        </div>
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