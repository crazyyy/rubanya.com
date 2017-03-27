<div class="aside ">
  <div class="section" style="margin-top:-10px">

  <div class="widget widget_calc">
    <div class="content-title calc">Калькуляторы <span>&#9650;</span></div>
    <ul class="calc-list">
      <li><a href="/raschet-blokov-i-kirpicha-dlya-stroitelstva">Расчет блоков и кирпича для строительства</a></li>
      <li><a href="/raschet-vysoty-dymovoj-truby">Расчет высоты дымовой трубы</a></li>
      <li><a href="/raschet-kolichestva-vagonki">Расчет количества вагонки</a></li>
      <li><a href="/raschet-lentochnogo-fundamenta">Расчет ленточного фундамента</a></li>
    </ul>
  </div><!-- /.widget widget_calc -->

  <?php if ( is_active_sidebar('widgetarea1') ) : ?>
    <?php dynamic_sidebar( 'widgetarea1' ); ?>
  <?php else : ?>
  <?php endif; ?>

  <div class="widget popular">
    <div class="content-title">Самое популярное</div>
    <ul>
      <?php query_posts( array( 'meta_key' => 'post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC' ) ); ?>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <li class="with_image">
          <?php if ( has_post_thumbnail()) :
            the_post_thumbnail('medium');
          else: ?>
            <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
          <?php endif; ?>
          <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
        </li>
      <?php endwhile; endif; ?>
      <?php wp_reset_query(); ?>
    </ul>
  </div>

  </div>
  <div class="clear">&nbsp;</div>
</div>
<!--/aside -->
<div class="clear">&nbsp;</div>
<div class="clear">&nbsp;</div>
