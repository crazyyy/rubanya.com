<?php get_header(); ?>

    <div class="content">

      <div class="homepage">

        <div class="single section">

            <h2><?php _e( 'Page not found', 'wpeasy' ); ?></h2>
            <div class="article">
              <div class="post">
                <h2><a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'wpeasy' ); ?></a></h2>
              </div>
            </div>

        </div>
      </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
