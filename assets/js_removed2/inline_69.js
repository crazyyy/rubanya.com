function click(t){return(!document.all||2!=event.button)&&((!document.layers||3!=t.which)&&void 0)}document.layers&&document.captureEvents(Event.MOUSEDOWN),document.onmousedown=click,document.oncontextmenu=function(t){return!1};var doc_w=$(".single .post").width();$("table").each(function(){var t=$(this);if(doc_w<t.width()){t.css({width:doc_w,overflow:"hidden",display:"block"}),t.before('<div class="table-button">Развернуть таблицу</div>');var e=0;$(".table-button").click(function(){0==e?(t.css({display:"table"}),$(".table-button").text("Свернуть таблицу"),e=1):(t.css({display:"block"}),$(".table-button").text("Развернуть таблицу"),e=0)})}}),jQuery("ul.menu.flex").flexMenu();
//# sourceMappingURL=maps/inline_69.js.map
