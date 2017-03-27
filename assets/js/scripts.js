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

// (function($) {
//   $(function() {

//     $('select').styler();

//   });
// })(jQuery);

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


function Calc2() {
  err = 0;
  if (document.form.p1.value == "") {
    err = 1;
    alert("Введите пункт 1!");
  }
  if (document.form.p2.value == "") {
    err = 1;
    alert("Введите пункт 2!");
  }
  if (document.form.p3.value == "") {
    err = 1;
    alert("Введите пункт 3!");
  }
  if (document.form.p4.value == "") {
    err = 1;
    alert("Введите пункт 4!");
  }
  if (document.form.p5.value == "") {
    err = 1;
    alert("Введите пункт 5!");
  }
  if (document.form.p6.value == "") {
    err = 1;
    alert("Введите пункт 6!");
  }
  if (document.form.p7.value == "") {
    err = 1;
    alert("Введите пункт 7!");
  }
  if (document.form.p8.value == "") {
    err = 1;
    alert("Введите пункт 8!");
  }
  if (document.form.p9.value == "") {
    err = 1;
    alert("Введите пункт 9!");
  }
  if (document.form.p10.value == "") {
    err = 1;
    alert("Введите пункт 10!");
  }
  if (document.form.p11.value == "") {
    err = 1;
    alert("Введите пункт 11!");
  }
  if (document.form.p12.value == "") {
    err = 1;
    alert("Введите пункт 12!");
  }


  z1 = document.form.p1.value;
  z1 = parseFloat(z1.replace(/,/, "."));
  document.form.p1.value = z1;
  z2 = document.form.p2.value;
  z2 = parseFloat(z2.replace(/,/, "."));
  document.form.p2.value = z2;
  z3 = document.form.p3.value;
  z3 = parseFloat(z3.replace(/,/, "."));
  document.form.p3.value = z3;
  z4 = document.form.p4.value;
  z4 = parseFloat(z4.replace(/,/, "."));
  document.form.p4.value = z4;
  z5 = document.form.p5.value;
  z5 = parseFloat(z5.replace(/,/, "."));
  document.form.p5.value = z5;
  z6 = document.form.p6.value;
  z6 = parseFloat(z6.replace(/,/, "."));
  document.form.p6.value = z6;
  z7 = document.form.p7.value;
  z7 = parseFloat(z7.replace(/,/, "."));
  document.form.p7.value = z7;
  z8 = document.form.p8.value;
  z8 = parseFloat(z8.replace(/,/, "."));
  document.form.p8.value = z8;
  z9 = document.form.p9.value;
  z9 = parseFloat(z9.replace(/,/, "."));
  document.form.p9.value = z9;
  z10 = document.form.p10.value;
  z10 = parseFloat(z10.replace(/,/, "."));
  document.form.p10.value = z10;
  z11 = document.form.p11.value;
  z11 = parseFloat(z11.replace(/,/, "."));
  document.form.p11.value = z11;
  z12 = document.form.p12.value;
  z12 = parseFloat(z12.replace(/,/, "."));
  document.form.p12.value = z12;

  if (z12 <= z7) {
    alert("Значение пункта 12 должно быть больше значения 7!");
    err = 1;
  }
  if (z9 <= 0) {
    alert("Значение пункта 9 должно быть больше 0");
    err = 1;
  }
  if (z10 <= z11) {
    alert("Значение пункта 10 должно быть больше значения 11!");
    err = 1;
  }

  if (err == 0) {
    var stp = 1 / 3;
    document.form.pr.value = round_des(Math.sqrt(((z1 * z2 * z3 * z4 * z5 * z6) / (z12 - z7)) * Math.pow(z8 / (z9 * (z10 - z11)), stp)));
  }
  return false
}

function round_des(gval) {
  return (Math.ceil(gval * 100)) / 100;
}

function calc3() {
  $ = jQuery;
  // периметр
  var P = parseFloat($("#perimeter").val());

  // высота стен
  var H1 = parseFloat($("#wallH").val());

  // площадь стен
  var wallS = P * H1;

  // площадь окон
  var winS = parseFloat($("#winNum").val()) * parseFloat($("#winH").val()) * parseFloat($("#winW").val());
  // площадь дверей
  var doorS = parseFloat($("#doorNum").val()) * parseFloat($("#doorH").val()) * parseFloat($("#doorW").val());

  var commonS = wallS - winS - doorS;

  if (isNaN(commonS))
    q = 0;

  $("#result").val((parseFloat(commonS) / 1000000).toFixed(1));
}

function lentaCalc() {
  document.getElementById('calc_error').innerHTML = '';
  var lFundamenta = document.getElementById("lFundamenta").value;
  lFundamenta = parseFloat(lFundamenta.replace(',', '.'));
  var sLenty = document.getElementById("sLenty").value;
  sLenty = parseFloat(sLenty.replace(',', '.'));
  var hFundamenta = document.getElementById("hFundamenta").value;
  hFundamenta = parseFloat(hFundamenta.replace(',', '.'));
  var mArmatury = document.getElementById("mArmatury").value;
  mArmatury = parseFloat(mArmatury.replace(',', '.'));
  var vLenty = hFundamenta * sLenty * (lFundamenta - 4 * sLenty);
  var mArmaturyNaLentu = mArmatury * vLenty;

  if (isNaN(lFundamenta)) {
    document.getElementById('vLenty').innerHTML = 'ошибка';
    document.getElementById('calc_error').innerHTML = 'Не указан периметр фундамента';
  } else if (isNaN(sLenty)) {
    document.getElementById('vLenty').innerHTML = 'ошибка';
    document.getElementById('calc_error').innerHTML = 'Не указана ширина ленты';
  } else if (isNaN(hFundamenta)) {
    document.getElementById('vLenty').innerHTML = 'ошибка';
    document.getElementById('calc_error').innerHTML = 'Не указана глубина фундамента';
  } else if (isNaN(mArmatury)) {
    document.getElementById('vLenty').innerHTML = 'ошибка';
    document.getElementById('calc_error').innerHTML = 'Не указан вес арматуры';
  } else {
    if (vLenty > 0) document.getElementById('vLenty').innerHTML = vLenty.toFixed(2);
    else {
      document.getElementById('vLenty').innerHTML = 'ошибка';
      document.getElementById('calc_error').innerHTML = 'Некорректно заданы параметры ленты';
    }
    if (mArmaturyNaLentu > 0) document.getElementById('mArmaturyNaLentu').innerHTML = mArmaturyNaLentu.toFixed(2);
    else {
      document.getElementById('mArmaturyNaLentu').innerHTML = 'ошибка';
      if (mArmatury > 0) {
        document.getElementById('calc_error').innerHTML = 'Некорректно заданы параметры ленты';
      } else {
        document.getElementById('calc_error').innerHTML = 'Вес арматуры должен быть больше 0';
      }
    }

  }
  if (mArmaturyNaLentu > 0 && vLenty > 0) {
    return vLenty.toFixed(2);
  } else {
    return 0;
  }
}
