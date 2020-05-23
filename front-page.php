<?php
/**
 * The template for displaying front page
 *
 * Contains the closing of the #content div and all content after.
 * Initial styles for front page template.
 *
 * @package jjfresh-website
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */

namespace JJ_Fresh;

// Featured image.
$thumbnail = wp_get_attachment_url( get_post_thumbnail_id() ) ?: THEME_SETTINGS['default_featured_image'];

get_header(); 

?>

<div id="content" class="content-area">
  <main role="main" id="main" class="site-main homepage-main">
    <section class="page-section">
      <div class="container">
        <h2 class="centered lighter-heading"><?php the_field('welcome_heading'); ?></h2>
        <div class="section-content">
          <?php the_field('welcome_content'); ?>
        </div>

        <?php if( have_rows('three_col_icon') ): ?> 
          <div class="three-col-container">
            <?php while ( have_rows('three_col_icon') ) : the_row(); 
                $icon = get_sub_field('icon'); 
                $heading = get_sub_field('heading');
                $content = get_sub_field('description');
            ?>
              <div class="single-icon-item">
                  <div class="icon">
                      <?php if (!empty($icon)) : ?>
                          <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" />
                      <?php endif; ?>
                  </div>
                  <div class="item-copy">
                    <h4 class="heading"><?php echo $heading; ?></h4>
                    <p class="description">
                        <?php echo $content; ?>
                    </p>
                  </div>
              </div>
            <?php endwhile; ?>
          </div>
        <?php endif; ?>

        <?php if (get_field('large_homepage_heading')) : ?>
          <div class="section-content">
            <h2><?php the_field('large_homepage_heading'); ?></h2>
          </div>
        <?php endif; ?>
      </div>
    </section>

    <section class="page-section">
      <div class="container">
        <div class="resources-container">
          <h2 class="centered">Updates from JJFresh</h2>
          <?php 
            // the query
            $post_query = new \WP_Query( 
                array( 
                  'post_type' => 'post',
                  'posts_per_page' => 3, 
                  'orderby' => 'post_date', 
                  'order' => 'DESC',
                )
            );
          ?>

          <?php if ( $post_query->have_posts() ) : ?>
            <div class="blog-posts-container">
              <?php while ( $post_query->have_posts() ) : $post_query->the_post(); ?>
                <div class="single-blog-post">
                  <a href="<?php the_permalink(); ?>" class="post-img">
                    <img src="<?php the_post_thumbnail_url('medium'); ?>" class="bg-img" />
                  </a>
                  <div class="post-content">
                    <span class="post-date smaller">
                      <?php the_date('d M Y'); ?>
                    </span>
                    <h4 class="lighter-heading">
                      <a href="<?php the_permalink(); ?>">
                        <?php echo substr(get_the_title(), 0, 40); ?>
                      </a>
                    </h4>
                    <p><?php echo substr(get_the_excerpt(), 0, 100); ?></p>
                    <a class="post-link has-arrow" href="<?php the_permalink(); ?>">Read article</a>
                  </div>
                </div>
              <?php  
                endwhile;
                endif;
              ?>
            </div>
        </div>
      </div>
    </section>
  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();
