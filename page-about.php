<?php
/*
Template Name: About
 */
?>


<?php get_header(); ?>

<!-- /hero -->
<section class='hero'>
  <div class='container'>
    <div class='row'>
      <div class='col-lg-12'>
      	<?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
		        <h1>
		          <?php echo get_post_meta($post->ID, 'hero_title', true); ?>
		        </h1>
		        <h2>
		          <?php echo get_post_meta($post->ID, 'hero_sub', true); ?>
		        </h2>
		    	<!--end the loop-->
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
<section class='about no-padding-bottom'>
  <div class='container'>
    <div class='row'>
      <div class='col-lg-12'>
        <div class='row'>
          <div class='col-lg-5 col-md-5'>
            <div class='triple-margin-bottom'>
              <?php the_content(); ?> 
              <a class='btn-link' href='index.php?pagename=blog'>
                See Where We Are Now
              </a>
            </div>
            <?php if ( has_post_thumbnail() ): // check if the post has a Post Thumbnail assigned to it.?>
              <?php  the_post_thumbnail('full', array('class' => 'full-width')); ?>
            <?php endif; ?>
          </div>
          <div class='col-lg-6 col-md-6 col-lg-offset-1 col-md-offset-1'>
            <?php
              $aboutPointLoop = new WP_Query( array( 'post_type' => 'about-point') );
            ?>
            <?php while ( $aboutPointLoop->have_posts() ) : $aboutPointLoop->the_post(); ?>
              <div class='row margin-bottom'>
                <div class='col-lg-6 col-md-6'>
                  <i class='<?php echo get_post_meta($post->ID, 'class', true); ?> circle-icon'>
                  </i>
                </div>
                <div class='col-lg-6 col-md-6'>
                  <h5>
                    <?php the_title(); ?>
                  </h5>
                  <?php the_content(); ?>
                </div>
              </div><!-- end row -->
            <?php endwhile; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class='primary-bg-color testimonials'>
  <?php
      $testLoop = new WP_Query( array( 'post_type' => 'testimonial') );
  ?>
  <div class='container'>
    <div class='row'>
      <div class='col-lg-12'>
        <div class='carousel slide' id='testimonial-slider'>
          <ol class='carousel-indicators'>
            <?php
              $count = 0;
            ?>
            <?php while ( $testLoop->have_posts() ) : $testLoop->the_post(); ?>
            <li data-slide-to='<?php echo $count++;?>' data-target='#testimonial-slider'></li>
            <?php endwhile; ?>
          </ol>
          <div class='carousel-inner'>
            <?php while ( $testLoop->have_posts() ) : $testLoop->the_post(); ?>
              <div class='item test-item'>
                <div class='testimonial'>
                  <h2>
                    "
                    <?php echo get_post_meta($post->ID, 'testimonial', true); ?>" 
                  </h2>
                  <div class='media'>
                    <div class='pull-left'>
                      <?php 
                        if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                         the_post_thumbnail('full', array('class' => 'img-circle avatar media-object half-margin-right')); 
                        } 
                      ?>
                    </div>
                    <div class='media-body margin-top'>
                      <h5 class='no-margin-bottom'>
                        <?php the_title(); ?> 
                      </h5>
                      <p>
                        -
                        <?php echo get_post_meta($post->ID, 'title', true); ?>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>
          </div>
        </div>
        <a class='btn btn-default btn-lg pull-right' href='index.php?pagename=donate'>
          Support Our Cause
        </a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>