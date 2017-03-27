<?php get_header(); ?>

    <div class="content" id="noselect">
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

        <?php /* ?>
        <noindex>
          <div class="section author">
            <div class="author-info">
              <img class="wp-image-4160 size-full " style="float: left; border: none; margin-right: 5px; margin-top: 10px;" src="http://kanalizaciyaseptik.ru/wp-content/uploads/2014/09/glavred.png" alt="" width="120" height="120">
              <p class="title">Автор</p>
              <p>Николай Стрелковский, главный редактор</p>
            </div>

            <div class="rating">
              <p class="title">Оцените статью</p>
            </div>
          </div>
        </noindex>
        <?php */ ?>

        <?php get_template_part('the-best'); ?>

        <div id="comments" class="content-title">Комментарии </div>
        <div class="section sinle-comment">
          <div class="navigation">
            <div class="alignleft"></div>
            <div class="alignright"></div>
          </div>

          <?php /* ?>
          <div class="article">
            <img src="http://0.gravatar.com/avatar/6b0cf04b25dce2588a7f9e759106de38?s=50&amp;d=mm&amp;r=g" alt="" srcset="http://0.gravatar.com/avatar/6b0cf04b25dce2588a7f9e759106de38?s=100&amp;d=mm&amp;r=g 2x" class="avatar avatar-50 photo" height="50" width="50" data-lazy-loaded="true" style="display: inline-block;">
            <div class="item">
              <span class="comment_author_link">Егор    <small class="commentmetadata"></small></span>
              <div class="post">
                <p>Совсем не понял по теплопроводности + меня добил вид мужчины в валенках… Там же сквозняк получается? Или я ничего не понял. Речь идет о нормальном полу, просто о настиле сверху? То есть фактически это цементный пол со съемным деревянным? А мыть его как?? Очень непрактично. Что заставляет людей выбирать такой вариант?</p>
              </div>
            </div>
          </div><!-- #comment-## -->
          <?php */ ?>

          <?php comments_template(); ?>

        </div>
      </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
