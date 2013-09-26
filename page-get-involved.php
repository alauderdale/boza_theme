<?php
/*
Template Name: Get Involved
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

<section class='support no-padding-bottom'>
  <div class='container'>
    <div class='row'>
      <div class='col-lg-12'>
        <div class='row'>
          <div class='col-lg-7 col-md-7'>
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <?php the_content(); ?> 
            <?php endwhile; ?>
          <?php endif; ?>
          </div>
          <div class='col-lg-5 col-md-5'>
            <?php if (have_posts()) : ?>
              <?php while (have_posts()) : the_post(); ?>
                <?php  the_post_thumbnail('full', array('class' => 'full-width')); ?>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class='primary-bg-color'>
  <div class='container'>
    <div class='row'>
      <div class='col-lg-12'>
        <div class='row'>
          <div class='col-lg-6 col-md-6'>
            <a href='#'>
              <img class='full-width margin-bottom' src='<?php bloginfo('template_url'); ?>/images/video_img.png'>
            </a>
          </div>
          <div class='col-lg-5 col-md-5 col-lg-offset-1 col-md-offset-1'>
            <h2>
              Volunteer
            </h2>
            <p>
              GP is enim nisl, luctus sit amet cursus nec, condimentum in lectuvvvvs. Quisque gravida massa at est consequat rhoncus. Etiam at maat id massa. Dnec scelerisque erat ac justo ele.
            </p>
            <a class='btn btn-default btn-lg' href='#'>
              Take a Stand and Give Back
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php include 'social-section.php'; ?>
<?php get_footer(); ?>