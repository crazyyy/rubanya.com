<div class="section single-more the-best">
  <p class="content-title">Похожие записи</p>

  <?php query_posts("showposts=8"); ?>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="item">
      <div class="rest">
        <a rel="nofollow" class="feature-img" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
          <?php if ( has_post_thumbnail()) :
            the_post_thumbnail('related-thumb');
          else: ?>
            <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
          <?php endif; ?>
          <span><?php the_title(); ?></span>
        </a><!-- /post thumbnail -->
        <?php wpeExcerpt('wpeExcerpt10'); ?>
      </div>
    </div>
  <?php endwhile; endif; ?>
  <?php wp_reset_query(); ?>
</div><!-- section single-more the-best -->
