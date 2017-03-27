// Avoid `console` errors in browsers that lack a console.
(function() {
  var method;
  var noop = function() {};
  var methods = ['assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error', 'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log', 'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd', 'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'];
  var length = methods.length;
  var console = (window.console = window.console || {});

  while (length--) {
    method = methods[length];

    // Only stub undefined methods.
    if (!console[method]) {
      console[method] = noop;
    }
  }
}());
if (typeof jQuery === 'undefined') {
  console.warn('jQuery hasn\'t loaded');
} else {
  console.log('jQuery has loaded');
}
// Place any jQuery/helper plugins in here.

(function($) {
  $(function() {

    $('select').styler();

  });
})(jQuery);

function Calc() {
  var N10 = 0;
  var N = 0;
  var K4 = document.getElementById("bott").value;
  var K4 = parseFloat(K4.replace(/,/, "."))
  var K2 = document.getElementById("lenght").value;
  var K2 = parseFloat(K2.replace(/,/, "."))
  var K7 = document.getElementById("kolvo_dver").value;
  var K7 = parseFloat(K7.replace(/,/, "."))
  var K6 = document.getElementById("width_dver").value;
  var K6 = parseFloat(K6.replace(/,/, "."))
  var K8 = document.getElementById("bott_dver").value;
  var K8 = parseFloat(K8.replace(/,/, "."))
  var K9 = document.getElementById("kolvo_okon").value;
  var K9 = parseFloat(K9.replace(/,/, "."))
  var K10 = document.getElementById("width_okon").value;
  var K10 = parseFloat(K10.replace(/,/, "."))
  var K11 = document.getElementById("bott_okon").value;
  var K11 = parseFloat(K11.replace(/,/, "."))
  var K12 = document.getElementById("tol_klad").value;
  var K12 = parseFloat(K12.replace(/,/, "."))
  var K13 = document.getElementById("tol_shva").value;
  var K13 = parseFloat(K13.replace(/,/, "."))
  var P1 = 0;
  var P2 = 0;
  var P3 = 0;
  var Nam = '';

  if (document.getElementById("brick").value == 1) {
    Nam = 'Кирпич одинарный щелевой';
    P1 = 0.25;
    P2 = 0.065;
    P3 = 0.12;
  }
  if (document.getElementById("brick").value == 2) {
    Nam = 'Кирпич утолщенный щелевой (полуторный)';
    P1 = 0.25;
    P2 = 0.88;
    P3 = 0.12;
  }
  if (document.getElementById("brick").value == 3) {
    Nam = 'Кирпич двойной, поризованный 2,1 NF';
    P1 = 0.25;
    P2 = 0.138;
    P3 = 0.12;
  }
  if (document.getElementById("brick").value == 4) {
    Nam = 'Блок керамический поризованный 4,5NF';
    P1 = 0.25;
    P2 = 0.138;
    P3 = 0.25;
  }
  if (document.getElementById("brick").value == 5) {
    Nam = 'Блок керамический поризованный 9 NF';
    P1 = 0.51;
    P2 = 0.138;
    P3 = 0.25;
  }
  if (document.getElementById("brick").value == 6) {
    Nam = 'Блок керамический поризованный 10,7 NF';
    P1 = 0.38;
    P2 = 0.219;
    P3 = 0.25;
  }
  if (document.getElementById("brick").value == 7) {
    Nam = 'Блок керамический поризованный 14,3 NF';
    P1 = 0.51;
    P2 = 0.219;
    P3 = 0.25;
  }
  if (document.getElementById("brick").value == 8) {
    Nam = 'Кирпич полнотелый одинарный';
    P1 = 0.25;
    P2 = 0.065;
    P3 = 0.12;
  }
  if (document.getElementById("brick").value == 9) {
    Nam = 'Кирпич лицевой пустотелый одинарный';
    P1 = 0.25;
    P2 = 0.065;
    P3 = 0.12;
  }
  if (document.getElementById("brick").value == 10) {
    Nam = 'Кирпич лицевой пустотелый утолщенный';
    P1 = 0.25;
    P2 = 0.88;
    P3 = 0.12;
  }
  if (document.getElementById("brick").value == 11) {
    Nam = 'Блок газосиликатный 19*29*59';
    P1 = 0.191;
    P2 = 0.592;
    P3 = 0.291;
  }
  if (document.getElementById("brick").value == 12) {
    Nam = 'Блок газосиликатный 20*29*59';
    P1 = 0.2;
    P2 = 0.59;
    P3 = 0.29;
  }
  if (document.getElementById("brick").value == 13) {
    Nam = 'Блок газосиликатный 40*25*60';
    P1 = 0.4;
    P2 = 0.599;
    P3 = 0.249;
  }
  if (document.getElementById("brick").value == 14) {
    Nam = 'Керамзитобетонные блок';
    P1 = 0.2;
    P2 = 0.4;
    P3 = 0.2;
  }
  if (document.getElementById("brick").value == 15) {
    Nam = 'Керамзитобетонные перегородка';
    P1 = 0.1;
    P2 = 0.4;
    P3 = 0.2;
  }
  N10 = (parseFloat(P1) + parseFloat(K13)) * (parseFloat(P2) + parseFloat(K13)) * parseFloat(P3);
  N = ((K2 * K4 - K6 * K7 * K8 - K9 * K10 * K11) * parseFloat(K12)) / N10;
  N = Math.round(N);
  document.getElementById("xkirp").innerHTML = '<div class="result">Потребуется<br /> <span>' + N + '</span> штук</div>';
}
