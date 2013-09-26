<section class='join-us'>
  <div class='container'>
    <div class='row'>
      <div class='col-lg-12'>
        <div class='text-center double-margin-bottom'>
          <h2>
            Join Us
          </h2>
          <p>
            Stay up-to-date on the latest news and updates and help us by spreading the word.
          </p>
        </div>
      </div>
    </div>
    <div class='row'>
      <?php
        $socialLoop = new WP_Query( array( 'post_type' => 'social-block') );
      ?>
      <?php while ( $socialLoop->have_posts() ) : $socialLoop->the_post(); ?>
        <div class='col-lg-3 col-md-3  text-center'>
          <a class='social-button' href='<?php echo get_post_meta($post->ID, 'link', true); ?>'>
            <i class='<?php echo get_post_meta($post->ID, 'class', true); ?> margin-bottom pull-left full-width'></i>
            <h3 class='text-uppercase'>
              <?php the_content(); ?>
            </h3>
          </a>
        </div>
      <?php endwhile; ?>
      <div class='col-lg-3 col-md-3 text-center'>
        <a class='social-button' href='#'>
          <i class='icon-comment margin-bottom pull-left full-width'></i>
          <h3 class='text-uppercase'>
            Spread the word
          </h3>
        </a>
      </div>
    </div>
  </div>
</section>