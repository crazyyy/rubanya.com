var clc = 0;
$('.calc').click(function() {
  if (clc == 0) {
    $('.calc span').html('&#9660;');
    $('.calc-list').slideUp();
    clc = 1;
  } else {
    $('.calc span').html('&#9650;');
    $('.calc-list').slideDown();
    clc = 0;
  }
});
