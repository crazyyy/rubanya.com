//right button
function click(e) {
  if (document.all) { // IE
    if (event.button == 2) {
      return false;
    }
  }
  if (document.layers) { // NC
    if (e.which == 3) {
      return false;
    }
  }
}
if (document.layers) {
  document.captureEvents(Event.MOUSEDOWN);
}
document.onmousedown = click;
document.oncontextmenu = function(e) {
  return false
};

//table for mobile
var doc_w = $('.single .post').width();
$('table').each(function() {
  var tabl = $(this);
  if (doc_w < tabl.width()) {
    tabl.css({
      'width': doc_w,
      'overflow': 'hidden',
      'display': 'block'
    });
    tabl.before('<div class="table-button">Развернуть таблицу</div>');
    var ctrl = 0;
    $('.table-button').click(function() {
      if (ctrl == 0) {
        tabl.css({
          'display': 'table'
        });
        $('.table-button').text('Свернуть таблицу');
        ctrl = 1;
      } else {
        tabl.css({
          'display': 'block'
        });
        $('.table-button').text('Развернуть таблицу');
        ctrl = 0;
      }
    });

  }

});

//flexmenu
jQuery('ul.menu.flex').flexMenu();
