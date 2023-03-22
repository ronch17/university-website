<?php

get_header();
pageBanner(array(
  'title' => 'Search Results',
  'subtitle' => 'You searched for &ldquo;' . esc_html(get_search_query()) . '&rdquo;'
));
?>



    <div class="container container--narrow page-section">
      <?php
      while(have_posts()) {
        the_post();
        get_template_part('template-parts/content', get_post_type());
        ?>
          <div class="post-item">
            <h2 class="headline headline--medium headline--post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

            <div class="metabox">
              <p>Posted by <?php the_author_posts_link(); ?> on <?php the_time('n.j.y'); ?> in <?php echo get_the_category_list(', '); ?></p>
            </div>

            <div class="generic-content">
              <?php get_search_form(); ?>
            </div>

          </div>
     <?php }
     echo paginate_links();
      ?>
    </div>


<?php get_footer();

?>

