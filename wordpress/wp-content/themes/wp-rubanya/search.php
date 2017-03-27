<?php get_header(); ?>

    <div class="content" id="noselect">
      <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>
      <div class="homepage">
        <div class="content-title"><?php echo sprintf( __( '%s Search Results for ', 'wpeasy' ), $wp_query->found_posts ); echo get_search_query(); ?></div>
        <div class="custom-block" rel="3"></div>
        <div class="section category">


          <?php get_template_part('loop'); ?>
          <?php get_template_part('pagination'); ?>

        </div>
        <div class="the-best">
        </div>
      </div>

  <?php get_sidebar(); ?>
<?php get_footer(); ?>
