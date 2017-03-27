<?php get_header(); ?>

    <div class="content" id="noselect">
      <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>
      <div class="homepage">
        <div class="content-title"><?php the_category(', '); ?></div>
        <div class="custom-block" rel="3"></div>
        <div class="section category">

          <div class="homepage-content clear">
            <div class="cat-img">
              <?php $terms = get_the_terms( get_the_ID(), 'category'); if( !empty($terms) ) { $term = array_pop($terms); $image = get_field('image', $term ); ?>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
              <?php } ?>
              <span>Предисловие</span>
            </div>
            <div class="cat-desk">
              <?php echo category_description( $category_id ); ?>
            </div>
          </div>

          <?php get_template_part('loop'); ?>
          <?php get_template_part('pagination'); ?>

        </div>
        <div class="the-best">
        </div>
      </div>

  <?php get_sidebar(); ?>
<?php get_footer(); ?>
