import Snake from './snake.js'

window.addEventListener('load', () => {
  document.addEventListener('mousemove', parallax);
  new Snake('.index-page-slider', {
    mobileFirst: false,
    swipe: true,
    speed: 300,
    dots: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    arrows: true
  })

  const slides = document.querySelectorAll('.index-page-slider .slider__item');
  const arrow = document.querySelectorAll('#index-page .snake-arrow.snake-next')[0];
  arrow.setAttribute('data-text-after', 'НАШИ ОБЬЕКТЫ');

  const observer = new MutationObserver(function (mutationsList) {
    for (const mutation of mutationsList) {

      if (mutation.type === 'attributes' && mutation.attributeName === 'class') {
        if (mutation.target.classList.contains('snake-active')) {
          let content = 'НАШИ ОБЬЕКТЫ';

          switch (mutation.target.id) {
            case 'our-objects-slide':
              content = 'НОВОСТИ';
              break;
            case 'news-slide':
              content = 'КОНТАКТЫ';
              break;
            case 'contacts-slide':
              content = 'О КОМПАНИИ';
              break;
            case 'about-company-slide':
            default:
              content = 'НАШИ ОБЬЕКТЫ';
              break;
          }

          arrow.setAttribute('data-text-after', content);
        }
      }
    }
  });

  const config = {attributes: true, attributeFilter: ['class']};

  for (const slide of slides) {
    observer.observe(slide, config);
  }

})

function parallax(e) {
  const containers = document.querySelectorAll('.index-page-slider-image');
  containers.forEach((container, index) => {
    // Разные скорости для разных блоков для эффекта глубины
    let speed = 0.01;
    let leftOffset = 50;
    if (container.classList.contains('index-page-slider__small-image')) {
      speed = 0.08;
      leftOffset = 20;
    } else if (container.classList.contains('index-page-slider__medium-image')) {
      speed = 0.04;
      leftOffset = 30;
    } else if (container.classList.contains('index-page-slider__main-image')) {
      speed = 0.02;
    }

    // Получаем размеры контейнера
    const rect = container.getBoundingClientRect();

    // Вычисляем центр контейнера
    const centerX = rect.left + rect.width / 2;
    const centerY = rect.top + rect.height / 2;

    // Расстояние от мыши до центра контейнера
    const distanceX = e.clientX - centerX;
    const distanceY = e.clientY - centerY;

    // Нормализуем расстояние (от -1 до 1)
    const normalizedX = distanceX / (window.innerWidth / 2);
    const normalizedY = distanceY / (window.innerHeight / 2);

    // Применяем смещение с учетом скорости
    const moveX = normalizedX * speed * 100; // Умножаем на 100 для процентов
    const moveY = normalizedY * speed * 100;

    // Применяем смещение как процент от фона
    container.style.backgroundPosition = `calc(${leftOffset}% + ${moveX}%) calc(50% + ${moveY}%)`;
  });
}