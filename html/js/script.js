$(document).ready(function() {
  $('.auto-summary>ul>li').remove();
  $('.post__entry h2,.post__entry h3,.post__entry h4').each(function(counter) {
    counter + 1;
    $(this).attr('id', 'count' + counter);

    $(this).clone().appendTo('.auto-summary>ul');
  });
  $('.auto-summary>ul>h2,.auto-summary>ul>h3,.auto-summary>ul>h4').each(function() {
    $(this).wrap('<li></li>');
    var topCount = $(this).attr('id');
    $(this).replaceWith('<a href="#' + topCount + '">' + $(this).text() + '</a>');
  });

  jQuery('#vertical-ticker a').click(function(e) {
    e.preventDefault();
    var video = jQuery(this).find('p').text();
    var numberVideo = jQuery('.iframe').html('<object id="youtubeColorRu" width="620" height="360"><param name="movie" value="http://www.youtube.com/v/' + video + '?version=2&color1=0xffffff&color2=0xffffff&border=0&showinfo=0"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/' + video + '?version=2&color1=0xffffff&color2=0xffffff&border=0&showinfo=0" type="application/x-shockwave-flash" width="620" height="360" allowscriptaccess="always" allowfullscreen="true" ></embed></object>');
  });


  jQuery("a[href$='.jpg'], a[href$='.png'], a[href$='.jpeg'], a[href$='.gif']").each(function() {
    jQuery(this).attr("rel", "img");
    jQuery(this).attr("title", jQuery(this).children("img").attr("title"));
  });
  jQuery("a[href$='.jpg'], a[href$='.png'], a[href$='.jpeg'], a[href$='.gif']").fancybox({
    helpers: {
      title: {
        type: 'inside'
      }
    }
  });
  var stickyShare = jQuery('div.post__share');
  if (stickyShare.length) {
    var win = jQuery(window);
    var offset = jQuery('div.post').offset().top - 350;
    var postHeightPlusOffset = offset + jQuery('div.post').height();
    setTimeout(function() {
      win.scroll(function() {
        if (win.scrollTop() >= offset) {
          stickyShare.css({
            position: 'fixed'
          });
          if (postHeightPlusOffset - win.scrollTop() <= stickyShare.height() - 10) {
            stickyShare.css({
              position: 'fixed',
              top: 50,
              display: "block"
                //bottom: 5
            });
          } else {
            stickyShare.css({
              position: 'fixed',
              bottom: 'auto',
              top: 50,
              display: "block"
            });
          }
        } else {
          stickyShare.css({
            display: "block",
            top: 350
          });
        }
      }).scroll();
    }, 100);
  } // if ( stickyShare.length )
  jQuery('.single__photo').append($('.only_photo'));
  jQuery('.single__video').append($('.only_video'));
  $('ul.tabs__caption').on('click', 'li:not(.active)', function() {
    $(this).addClass('active').siblings().removeClass('active')
      .parents('.tabs').find('div.tabs__content').eq($(this).index()).show().siblings('div.tabs__content').hide();
  })

});

// Добавить в Избранное
function add_favorite(a) {
  title = document.title;
  url = document.location;
  try {
    // Internet Explorer
    window.external.AddFavorite(url, title);
  } catch (e) {
    try {
      // Mozilla
      window.sidebar.addPanel(title, url, "");
    } catch (e) {
      // Opera
      if (typeof(opera) == "object") {
        a.rel = "sidebar";
        a.title = title;
        a.url = url;
        return true;
      } else {
        // Unknown
        alert('Нажмите Ctrl-D чтобы добавить страницу в закладки');
      }
    }
  }
  return false;
}
