function add_favorite(t){title=document.title,url=document.location;try{window.external.AddFavorite(url,title)}catch(e){try{window.sidebar.addPanel(title,url,"")}catch(e){if("object"==typeof opera)return t.rel="sidebar",t.title=title,t.url=url,!0;alert("Нажмите Ctrl-D чтобы добавить страницу в закладки")}}return!1}
//# sourceMappingURL=maps/inline_33.js.map
