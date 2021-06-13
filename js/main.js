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


  // Неименованные обёртки от wordpress
  const wraps$ = jQuery( ".album .content div, .album .content p" ); 
  
  wraps$.contents()
    .filter((index, el) => (el.nodeType === 3) && (el.nodeValue && el.nodeValue.length > 1)) // Значит это текст
    .wrap( "<p class='content-paragraph'></p>" );

  wraps$
    .filter((index, el) => {
      const images$ = jQuery(el).children('img');
      images$.addClass('fullscreen');
      return images$.length > 0; // Значит в div или p есть картинки
    })
    .addClass('images-grid');


  // Разворачивание картинок с классом fullscreen

  const popUpContainer$ = jQuery('#pop-up-container');
  const closeButton$ = popUpContainer$.find('.close');
  const image$ = popUpContainer$.find('img');
  
  closeButton$.click(() => {
    popUpContainer$.removeClass('show');
    image$.attr('src', null);
    image$.attr('alt', null);
  });

  jQuery('.fullscreen').click(e => {
    popUpContainer$.addClass('show');
    image$.attr('src', e.target.src);
    image$.attr('alt', e.target.alt);
    popUpContainer$.click(e => {
      if (e.target !== popUpContainer$[0]) { return; } // Если клик не по заднему фону
      popUpContainer$.removeClass('show');
      image$.attr('src', null);
      image$.attr('alt', null);
    })
  })

});
