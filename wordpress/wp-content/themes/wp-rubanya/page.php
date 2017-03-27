<?php get_header(); ?>

    <div class="content">
      <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>
      <div class="homepage">

        <div class="single section">
          <?php if (have_posts()): while (have_posts()) : the_post(); ?>

            <h2><?php the_title(); ?></h2>
            <div class="article">
              <div class="post">
                <?php the_content(); ?>
                <?php setPostViews(get_the_ID()); ?>
              </div>
            </div>
          <?php endwhile; endif; ?>
        </div>
      </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
