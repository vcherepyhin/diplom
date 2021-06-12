document.addEventListener('DOMContentLoaded', () => {

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
    
});