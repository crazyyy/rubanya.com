<?php /* Template Name: Home Page */ get_header(); ?>

  <?php $terms = get_field('categories'); if( $terms ): ?>
    <div class="menu-cat">
      <center>
        <div class="inline">
          <ul id="header-menu" class="top-menu">
            <?php foreach( $terms as $term ): ?>
              <?php $image = get_field('image', $term ); ?>
              <li class="menu-item menu-item-type-taxonomy menu-item-object-category">
                <div class="cat-image"><span style="background-image: url(<?php echo $image['url']; ?>);"></span></div>
                <a href="<?php echo get_term_link( $term ); ?>"><?php echo $term->name; ?></a>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </center>
    </div>
  <?php endif; ?>


  <div class="content">
    <div class="homepage homepage-tow">

    <div class="step-title" style="margin-top: 35px;">Пошаговый календарь строительства бани с нуля <span>▲</span></div>
    <ul class="step-by-step" style="display: block;">
      <li class="s1 step-head1">Процесс</li>
      <li class="s2 step-head2">Последовательность работ</li>
      <div class="line-step">
        <li class="s1"><i>1</i> <a href="http://banya-expert.com/category/proekti-ban" target="_blank">Выбор проекта бани</a></li>
        <li class="s2">&nbsp;<a href="http://banya-expert.com/proekti-ban/proekty-odnoetazhnyx-ban.html" target="_blank">1 шаг</a> <a href="http://banya-expert.com/proekti-ban/proekty-ban-iz-brusa-3x4-chertezh.html" target="_blank">2 шаг</a> <a href="http://banya-expert.com/proekti-ban/banya-4x5-s-mansardoj-postrojka-svoimi-rukami.html" target="_blank">3 шаг</a> <a href="http://banya-expert.com/proekti-ban/proekty-derevyannyx-ban-s-mansardoj.html" target="_blank">4 шаг</a> <a href="http://banya-expert.com/proekti-ban/banya-iz-profilirovannogo-brusa-6x6.html" target="_blank">5 шаг</a> <a href="http://banya-expert.com/proekti-ban/dvuxetazhnaya-banya-iz-brusa-6-x-6.html" target="_blank">6 шаг</a><a href="http://banya-expert.com/proekti-ban/banya-6x4-s-terrasoj.html" target="_blank">7 шаг</a><a href="http://banya-expert.com/proekti-ban/banya-iz-brusa-6x8-m.html" target="_blank">8 шаг</a><a href="http://banya-expert.com/proekti-ban/proekt-bani-4-na-4-s-verandoj.html" target="_blank">9 шаг</a></li>
        <div class="clear"></div>
      </div>
      <div class="line-step">
        <li class="s1"><i>2</i> <a href="http://banya-expert.com/category/fundament" target="_blank">Возведение фундамента</a></li>
        <li class="s2">&nbsp;<a href="http://banya-expert.com/fundament/kak-zalit-fundament-pod-banyu-svoimi-rukami.html" target="_blank">10 шаг</a> <a href="http://banya-expert.com/fundament/kak-pravilno-sdelat-opalubku-dlya-fundamenta.html" target="_blank">11 шаг</a> <a href="http://banya-expert.com/fundament/vyazka-armatury-dlya-fundamenta-svoimi-rukami.html" target="_blank">12 шаг</a> <a href="http://banya-expert.com/fundament/gidroizolyaciya-lentochnogo-fundamenta-svoimi-rukami.html" target="_blank">13 шаг</a> <a href="http://banya-expert.com/fundament/armirovanie-lentochnogo-fundamenta.html" target="_blank">14 шаг</a> <a href="http://banya-expert.com/fundament/drenazh-fundamenta-svoimi-rukami.html" target="_blank">15 шаг</a><a href="http://banya-expert.com/fundament/uteplenie-fundamenta-svoimi-rukami.html" target="_blank">16 шаг</a></li>
        <div class="clear"></div>
      </div>
      <div class="line-step">
        <li class="s1"><i>3</i> <a href="http://banya-expert.com/category/krisha" target="_blank">Стены и крыша</a></li>
        <li class="s2">&nbsp;<a href="http://banya-expert.com/steni/stroitelstvo-sten-bani-iz-kleenogo-brusa.html" target="_blank">17 шаг</a> <a href="http://banya-expert.com/krisha/kak-krepit-stropila-k-mauerlatu.html" target="_blank">18 шаг</a> <a href="http://banya-expert.com/krisha/kak-sdelat-kryshu-s-mansardoj-dlya-bani.html" target="_blank">19 шаг</a> <a href="http://banya-expert.com/krisha/krysha-dlya-bani-svoimi-rukami.html" target="_blank">20 шаг</a> <a href="http://banya-expert.com/krisha/kak-sdelat-kryshu-na-bane.html" target="_blank">21 шаг</a> <a href="http://banya-expert.com/krisha/montazh-cherepicy-svoimi-rukami.html" target="_blank">22 шаг</a><a href="http://banya-expert.com/krisha/uteplenie-mansardy-iznutri.html" target="_blank">23 шаг</a></li>
        <div class="clear"></div>
      </div>
      <div class="line-step">
        <li class="s1"><i>4</i> <a href="http://banya-expert.com/category/podvod-i-sliv-vodi" target="_blank">Монтаж канализации</a></li>
        <li class="s2">&nbsp;<a href="http://banya-expert.com/podvod-i-sliv-vodi/kanalizaciya-v-bane-svoimi-rukami-sxema.html" target="_blank">24 шаг</a> <a href="http://banya-expert.com/podvod-i-sliv-vodi/kak-vyryt-kolodec-dlya-vodosnabzheniya.html" target="_blank">25 шаг</a> <a href="http://banya-expert.com/podvod-i-sliv-vodi/kak-sdelat-sliv-v-bane.html" target="_blank">25 шаг</a> <a href="http://banya-expert.com/podvod-i-sliv-vodi/kak-sdelat-tualet-v-bane.html" target="_blank">26 шаг</a> <a href="http://banya-expert.com/podvod-i-sliv-vodi/kak-sdelat-dush-v-pomyvochnoj-komnate.html" target="_blank">27 шаг</a> <a href="http://banya-expert.com/podvod-i-sliv-vodi/kak-sdelat-dush-v-pomyvochnoj-komnate.html" target="_blank">28 шаг</a></li>
        <div class="clear"></div>
      </div>
      <div class="line-step">
        <li class="s1"><i>5</i> <a href="http://banya-expert.com/category/uteplenie" target="_blank">Утепление стен и пола</a></li>
        <li class="s2">&nbsp;<a href="http://banya-expert.com/uteplenie/uteplenie-sten-bani-iznutri-i-snaruzhi.html" target="_blank">29 шаг</a> <a href="http://banya-expert.com/uteplenie/uteplenie-parilki-svoimi-rukami.html" target="_blank">30 шаг</a> <a href="http://banya-expert.com/uteplenie/uteplenie-sten-i-potolka-karkasnoj-bani.html" target="_blank">31 шаг</a> <a href="http://banya-expert.com/uteplenie/paroizolyaciya-dlya-bani.html" target="_blank">32 шаг</a> <a href="http://banya-expert.com/uteplenie/folga-dlya-bani-kakuyu-luchshe-vybrat.html" target="_blank">33 шаг</a> <a href="http://banya-expert.com/uteplenie/teploizolyaciya-dlya-bani-i-sauny.html" target="_blank">34 шаг</a><a href="http://banya-expert.com/uteplenie/uteplenie-pola-v-bane-svoimi-rukami.html" target="_blank">35 шаг</a></li>
        <div class="clear"></div>
      </div>
      <div class="line-step">
        <li class="s1"><i>6</i> <a href="http://banya-expert.com/category/pechi" target="_blank">Выбор и монтаж печи</a></li>
        <li class="s2">&nbsp;<a href="http://banya-expert.com/pechi/kak-vybrat-pech-dlya-bani.html" target="_blank">36 шаг</a> <a href="http://banya-expert.com/pechi/kak-sdelat-pech-so-vstroennym-kotlom.html" target="_blank">37 шаг</a> <a href="http://banya-expert.com/pechi/metallicheskaya-pech-dlya-bani-svoimi-rukami.html" target="_blank">38 шаг</a> <a href="http://banya-expert.com/pechi/kak-svarit-pech-dlya-bani-iz-truby.html" target="_blank">39 шаг</a> <a href="http://banya-expert.com/pechi/ustanovka-pechi-v-banyu-s-vynosnoj-topkoj.html" target="_blank">40 шаг</a> <a href="http://banya-expert.com/pechi/kakuyu-pech-ustanovit-v-bane.html" target="_blank">41 шаг</a></li>
        <div class="clear"></div>
      </div>
      <div class="line-step">
        <li class="s1"><i>7</i> <a href="http://banya-expert.com/category/pechi" target="_blank">Установка и вывод дымохода</a></li>
        <li class="s2">&nbsp;<a href="http://banya-expert.com/pechi/dymoxod-v-bane-svoimi-rukami.html" target="_blank">42 шаг</a> <a href="http://banya-expert.com/pechi/proxod-truby-cherez-potolok-bani.html" target="_blank">43 шаг</a> <a href="http://banya-expert.com/pechi/iskrogasitel-na-trubu-bani-svoimi-rukami.html" target="_blank">44 шаг</a></li>
        <div class="clear"></div>
      </div>
      <div class="line-step">
        <li class="s1"><i>8</i> <a href="http://banya-expert.com/category/okna-i-dveri" target="_blank">Установка дверей и окон</a></li>
        <li class="s2">&nbsp;<a href="http://banya-expert.com/okna-i-dveri/ustanovka-derevyannyx-okon-v-bane.html" target="_blank">45 шаг</a> <a href="http://banya-expert.com/okna-i-dveri/ustanovka-dobora-na-dver.html" target="_blank">46 шаг</a> <a href="http://banya-expert.com/okna-i-dveri/vybor-okon-v-banyu.html" target="_blank">47 шаг</a> <a href="http://banya-expert.com/okna-i-dveri/dver-v-banyu-svoimi-rukami-poshagovo.html" target="_blank">48 шаг</a></li>
        <div class="clear"></div>
      </div>
      <div class="line-step">
        <li class="s1"><i>9</i> <a href="http://banya-expert.com/category/elektroprovodka" target="_blank">Электропроводка и отделка</a></li>
        <li class="s2">&nbsp;<a href="http://banya-expert.com/elektroprovodka/elektroprovodka-v-bane.html" target="_blank">50 шаг</a> <a href="http://banya-expert.com/elektroprovodka/kak-ustanovit-vyklyuchatel-sveta-v-bane.html" target="_blank">51 шаг</a> <a href="http://banya-expert.com/elektroprovodka/kak-sdelat-osveshhenie-v-bane.html" target="_blank">52 шаг</a> <a href="http://banya-expert.com/elektroprovodka/kak-ustanovit-schetchik-energii.html" target="_blank">53 шаг</a></li>
        <div class="clear"></div>
      </div>
      <div class="line-step">
        <li class="s1"><i>10</i>&nbsp; <a href="http://banya-expert.com/category/otdelka-i-interier" target="_blank">Отделка и интерьер</a></li>
        <li class="s2">&nbsp;<a href="http://banya-expert.com/otdelka-i-interier/otdelka-bani-svoimi-rukami.html" target="_blank">57 шаг</a> <a href="http://banya-expert.com/otdelka-i-interier/otdelka-parilki-v-bane.html" target="_blank">58 шаг</a> <a href="http://banya-expert.com/otdelka-i-interier/kak-krepit-vagonku-v-bane.html" target="_blank">59 шаг</a> <a href="http://banya-expert.com/otdelka-i-interier/obustrojstvo-bani-vnutri.html" target="_blank">60 шаг</a> <a href="http://banya-expert.com/otdelka-i-interier/kak-obshit-banyu-vnutri-vagonkoj-svoimi-rukami.html" target="_blank">61 шаг</a> <a href="http://banya-expert.com/otdelka-i-interier/peregorodka-v-bane-mezhdu-parilkoj-i-mojkoj.html" target="_blank">62 шаг</a><a href="http://banya-expert.com/otdelka-i-interier/mebel-dlya-bani-i-sauny-iz-dereva.html" target="_blank">63 шаг</a></li>
        <div class="clear"></div>
      </div>
    </ul>
    <!--Users history-->

    <div class="history-users">
      <div class="history-title">Блоги пользователей <span>▼</span></div>
      <div class="history-block" style="display: none;">
        <img src="http://banya-expert.com/wp-content/themes/septik/scripts/timthumb.php?src=http://banya-expert.com/wp-content/uploads/2016/05/6ce0d6cs-960.jpg&amp;w=200&amp;h=200&amp;zc=1&amp;q=80" width="200" height="200" alt="Продолжаем строительство бани весной">
        <a href="http://banya-expert.com/istorii-polzovatelej/prodolzhaem-stroitelstvo-bani-vesnoj.html">Продолжаем строительство бани весной</a>
      </div>
      <div class="history-block" style="display: none;">
        <img src="http://banya-expert.com/wp-content/themes/septik/scripts/timthumb.php?src=http://banya-expert.com/wp-content/uploads/2016/04/Как-выбрать-купель-для-бани.jpg&amp;w=200&amp;h=200&amp;zc=1&amp;q=80" width="200" height="200" alt="Как выбрать купель для бани">
        <a href="http://banya-expert.com/istorii-polzovatelej/kak-vybrat-kupel-dlya-bani.html">Как выбрать купель для бани</a>
      </div>
      <div class="history-block" style="display: none;">
        <img src="http://banya-expert.com/wp-content/themes/septik/scripts/timthumb.php?src=http://banya-expert.com/wp-content/uploads/2016/04/Веник-из-пихты.jpg&amp;w=200&amp;h=200&amp;zc=1&amp;q=80" width="200" height="200" alt="Чем полезен банный веник">
        <a href="http://banya-expert.com/istorii-polzovatelej/chem-polezen-bannyj-venik.html">Чем полезен банный веник</a>
      </div>
      <div class="history-block" style="display: none;">
        <img src="http://banya-expert.com/wp-content/themes/septik/scripts/timthumb.php?src=http://banya-expert.com/wp-content/uploads/2016/04/post-921-0-02972700-1339227826.jpg&amp;w=200&amp;h=200&amp;zc=1&amp;q=80" width="200" height="200" alt="Возведение пола в бане">
        <a href="http://banya-expert.com/istorii-polzovatelej/vozvedenie-pola-v-bane.html">Возведение пола в бане</a>
      </div>
      <div class="history-block" style="display: none;">
        <img src="http://banya-expert.com/wp-content/themes/septik/scripts/timthumb.php?src=http://banya-expert.com/wp-content/uploads/2016/04/Как-выбрать-печь-для-бани.jpg&amp;w=200&amp;h=200&amp;zc=1&amp;q=80" width="200" height="200" alt="Печи для бани и сауны. Какую выбрать?">
        <a href="http://banya-expert.com/istorii-polzovatelej/pechi-dlya-bani-i-sauny-kakuyu-vybrat.html">Печи для бани и сауны. Какую выбрать?</a>
      </div>
      <div class="history-block" style="display: none;">
        <img src="http://banya-expert.com/wp-content/themes/septik/scripts/timthumb.php?src=http://banya-expert.com/wp-content/uploads/2016/04/2-1.jpg&amp;w=200&amp;h=200&amp;zc=1&amp;q=80" width="200" height="200" alt="Русская баня. Сруб своими руками">
        <a href="http://banya-expert.com/istorii-polzovatelej/russkaya-banya-srub-svoimi-rukami.html">Русская баня. Сруб своими руками</a>
      </div>
      <div class="history-footer" style="display: none;">
        <a href="/wp-login.php">Завести свой блог</a><a href="/blogi-polzovatelej">Читать другие присланные материалы</a>
      </div>
    </div>
    <script type="text/javascript">
    $('.step-by-step a').attr('target', '_blank');
    var corp = 0;
    $('.history-title').click(function() {
      if (corp == 0) {
        $('.history-block').slideDown().css('display', 'inline-block');
        $('.history-footer').slideDown();
        $('.history-title span').html('&#9650;');
        $('.history-title').css({
          'color': '#f69102',
          'background': '#fff'
        });
        corp = 1;
      } else {
        $('.history-block,.history-footer').slideUp();
        $('.history-title span').html('&#9660;');
        $('.history-title').css({
          'color': '',
          'background': ''
        });
        corp = 0;
      }
    });
    var inc = 0;
    $('.step-title').click(function() {
      if (inc == 0) {
        $('.step-by-step').slideDown();
        $('.step-title span').html('&#9650;');
        inc = 1;
      } else {
        $('.step-by-step').slideUp();
        $('.step-title span').html('&#9660;');
        inc = 0;
      }
    });
    </script>


    <div class="content-title" style="margin-top: 20px;">Новые статьи на портале</div>
    <div class="section">

      <?php query_posts("showposts=5&cat=2"); ?>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class="article article-homer">
          <span class="home-article-img-span">
            <?php if ( has_post_thumbnail()) :
              the_post_thumbnail('medium');
            else: ?>
              <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
            <?php endif; ?>
          </span>

          <div class="item home-article-item">
            <p class="h2"><a class="title" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></p>
            <div class="post">
              <?php wpeExcerpt('wpeExcerpt10'); ?>
            </div>
            <div class="meta">
              <span id="meta-cat"><?php the_category(', ');  ?></span>
              <span id="meta-comments"><?php comments_popup_link( __( '0', 'wpeasy' ), __( '1', 'wpeasy' ), __( '%', 'wpeasy' )); ?></span>
            </div>
          </div>
        </div>

      <?php endwhile; endif; ?>
      <?php wp_reset_query(); ?>

    </div>
    <script type="text/javascript">
    $('#close').click(function() {
      $('.add-firm').hide();
    });
    </script>


    <div class="content-title">Видео советы из нашей коллекции</div>
    <div class="video section">
      <?php query_posts("showposts=3&cat=2"); ?>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <a href="<?php the_permalink(); ?>" rel="bookmark" class="item">
        <?php if ( has_post_thumbnail()) :
          the_post_thumbnail('medium');
        else: ?>
          <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
        <?php endif; ?>
        <i class="video-play"></i>
        <span class="title"><?php the_title(); ?></span>
      </a>
      <?php endwhile; endif; ?>
      <?php wp_reset_query(); ?>
      <a class="cat-url" href="/video">Смотреть все видео</a>
    </div>

    <div class="content-title">Бани мира</div>
    <div class="section the-best">
      <?php query_posts("showposts=9&cat=2"); ?>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="item">
          <div class="rest">
            <?php if ( has_post_thumbnail()) :
              the_post_thumbnail('medium');
            else: ?>
              <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
            <?php endif; ?>
            <a class="title" href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
          </div>
        </div>
      <?php endwhile; endif; ?>
      <?php wp_reset_query(); ?>

    </div>

    <div class="homepage-content"></div>
  </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
