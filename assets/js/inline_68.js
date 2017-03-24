
$('.category .homepage-content b').prependTo('.cat-img');

/*show & hide for category*/
$('.cat-desk').append('<i class="cat-more">Читать дальше</i>');
var count = 0;
$('i.cat-more').click(function(){
    if(count==0){
        $(this).text('Скрыть');
        $('.cat-desk p').slideDown();
        count=1;
    }else{
        $(this).text('Читать дальше');
        $('.cat-desk p').slideUp();
        count=0;
    }
});

/*scroll to top*/
var top_show = 150;
var delay = 400;
$(window).scroll(function () { 
  if ($(this).scrollTop() > top_show) $('#top').fadeIn();
  else $('#top').fadeOut();
});
$('#top').click(function () { 
  $('body, html').animate({
    scrollTop: 0
  }, delay);
});
