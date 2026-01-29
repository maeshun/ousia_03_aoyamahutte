<?php get_header(); ?>
  <div class="mask"><img src="/assets/img/mask.svg" alt=""></div>
  <div class="hutte"><img src="/assets/img/hutte.svg" alt=""></div>

  <div class="container">
    <div class="main_box">
      <?php
        $args = array(
          'posts_per_page'   => 9999,
          'orderby'          => 'date',
          'order'            => 'DESC',
          'post_type'        => 'post',
          'post_status'      => 'publish',
        );
        $the_query = new WP_Query( $args );
        if ( $the_query->have_posts() ){
        while ( $the_query->have_posts() ) {
        $the_query->the_post();
      ?>
      <div class="ph_box">
      <a href="<?php the_permalink(); ?>">
        <?php if( has_post_thumbnail() ): ?>
        <div class="ph"><img src="<?php echo the_post_thumbnail_url(); ?>" alt=""></div>
        <?php endif; ?>
        <div class="txt"><?php the_title(); ?></div>
        <div class="date"><?php echo get_the_date('Y.m.d'); ?></div>
        </a>
      </div>
      <?php
      }
      wp_reset_postdata();
      }
      ?>
    </div>
  </div>
  <?php get_template_part('var/menu'); ?>
<?php get_footer(); ?>