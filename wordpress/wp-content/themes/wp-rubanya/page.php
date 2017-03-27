<?php get_header(); ?>

    <div class="content">
      <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>
      <div class="homepage">

        <div class="single section">
          <?php if (have_posts()): while (have_posts()) : the_post(); ?>
            <div class="single-title">
              <span class="post-category">
                <?php the_category(', '); // Separated by commas ?>
              </span>
              <?php if ( has_post_thumbnail()) :
                the_post_thumbnail('single-thumb');
              else: ?>
                <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
              <?php endif; ?>
              <div>
                <h1><?php the_title(); ?></h1>
              </div>
              <span class="view"><?php echo getPostViews(get_the_ID()); ?></span>
              <span class="comm"><?php comments_popup_link( __( '0', 'wpeasy' ), __( '1', 'wpeasy' ), __( '%', 'wpeasy' )); ?></span>
              <span class="date"><?php the_time('j F Y'); ?></span>
              <span class="clear">&nbsp;</span>
            </div>

            <div class="article">
              <div class="post">
                <?php the_content(); ?>
                <?php setPostViews(get_the_ID()); ?>
                <div style="padding-top: 10px; padding-bottom: 10px; border-top: 4px solid #CC4B1F;border-bottom: 4px solid #CC4B1F; margin-bottom: 15px;"></div>
              </div>
            </div>
          <?php endwhile; endif; ?>
        </div>
      </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
