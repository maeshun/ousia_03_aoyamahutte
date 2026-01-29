<?php get_header(); ?>
  <div class="news_container">
    <div class="news_box">
      <li class="f-item01">
        <?php
          for($i=0; $i<5; $i++){
            $image = get_field( 'image' . ($i+1) );
            if ( $image ) {
        ?>
        <div class="news_ph"><img src="<?php echo $image; ?>" alt=""></div>
        <?php
            }
          }
        ?>
      </li>
      <li class="f-item02">
        <div class="news_title"><?php the_title(); ?></div>
        <div class="news_txt">
          <?php the_content(); ?>
        </div>
      </li>
      <?php
        $prevpost = get_adjacent_post(false, '', true);
        $nextpost = get_adjacent_post(false, '', false);
      ?>
      <li class="f-item03 next">
        <?php if ($nextpost): ?><a href="<?php echo get_permalink($nextpost->ID) ?>"><span></span></a><p><a href="<?php echo get_permalink($nextpost->ID) ?>">NEXT</a></p><?php endif; ?>
      </li>
      <li class="f-item04 back">
        <?php if ($prevpost): ?><a href="<?php echo get_permalink($prevpost->ID) ?>"><span></span></a><p><a href="<?php echo get_permalink($prevpost->ID) ?>">BACK</a></p><?php endif; ?>
      </li>
    </div>
  </div>
  <?php get_template_part('var/menu'); ?>
<?php get_footer(); ?>