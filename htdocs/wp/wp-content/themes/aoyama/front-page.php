<?php get_header(); ?>
  <div class="mask"><img src="/assets/img/mask.svg" alt=""></div>
  <div class="hutte"><img src="/assets/img/hutte.svg" alt=""></div>

  <div class="container">
    <div class="main_box">
      <?php
        $args = array(
          'posts_per_page'   => $newsShowNum,
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
        <div class="ph"><img src="<?php echo the_post_thumbnail_url("large"); ?>" alt="" loading=""></div>
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

      <?php
        global $newsShowNum;
        if ($wp_query->found_posts > $newsShowNum) :
      ?>
      <div class="loading"
        data-url="/wp-json/wp/v2/posts?_embed"
        data-next_page="2"
        data-show_num="<?= $newsShowNum ?>"
        <?php if (is_year()) : ?>
        data-year="<?= get_query_var('year') ?>"
        <?php endif; ?>
        >
        <div class="loadingIcon"></div>
      </div>
      <?php endif; ?>

  </div>

  <div class="template_for_loadnext">
    <div class="ph_box">
      <a href="">
        <div class="ph"><img src="" alt="" loading=""></div>
        <div class="txt"></div>
        <div class="date"></div>
      </a>
    </div>
  </div>
  <?php get_template_part('var/menu'); ?>
<?php get_footer(); ?>