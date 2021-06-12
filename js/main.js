document.addEventListener('DOMContentLoaded', () => {

  // Слайдеры
  
  jQuery('#slider-1').slick({
    infinite: true, // Зацикливание
    arrows: false, // Кнопки вправо/влево
    variableWidth: true, // Не выравновать ширины
    pauseOnHover: false, // Пауза при наведении
    pauseOnFocus: false, // Пауза при фокусе
    autoplay: true, // Автоперелистывание
    slidesToScroll: 3, // Листать по 3 слайда
    autoplaySpeed: 0, // Листать без остановки
    speed: 50000, // 50 секнд на одно перелистывание
    cssEase: 'linear', // Линейная скорость
  });

  jQuery('#slider-2').slick({
    infinite: true,
    arrows: false,
    variableWidth: true,
    pauseOnHover: false,
    pauseOnFocus: false,
    autoplay: true,
    slidesToScroll: 3,
    autoplaySpeed: 0,
    speed: 25000,
    cssEase: 'linear',
  });


  // Сворачивание шапки

  const body$ = jQuery(document.body);
  const setMenuMode = () => {
    if (window.scrollY > 0) {
      body$.addClass('thin-header');
    } else {
      body$.removeClass('thin-header');
    }
  }
  setMenuMode();
  window.onscroll = () => setMenuMode();


  // Разворачивание картинок с классом fullscreen

  const popUpContainer$ = jQuery('#pop-up-container');
  const closeButton$ = jQuery(popUpContainer$).find('.close');
  const image$ = jQuery(popUpContainer$).find('img');
  
  jQuery(closeButton$).click(() => {
    jQuery(popUpContainer$).removeClass('show');
  });

  jQuery('.fullscreen').click(e => {
    jQuery(popUpContainer$).addClass('show');
    jQuery(image$).attr('src', e.target.src);
    jQuery(image$).attr('alt', e.target.alt);
    jQuery(popUpContainer$).click(e => {
      if (e.target !== popUpContainer$[0]) { return; } // Если клик не по заднему фону
      jQuery(popUpContainer$).removeClass('show');
      jQuery(image$).attr('src', null);
    jQuery(image$).attr('alt', null);
    })
  })

});
