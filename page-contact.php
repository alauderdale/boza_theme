<?php
/*
Template Name: Contact
 */
?>
<?php get_header(); ?>

<!-- /hero -->
<section class='hero black-bg-color'>
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
<section class='pic-scroll-bg'></section>
<section class='volunteer-contact'>
  <div class='container contact-watermark-bg'>
    <div class='row'>
      <div class='col-lg-5 col-md-5'>
        <form class='margin-bottom'>
          <div class='form-group'>
            <label class='half-margin-bottom'>
              Name:
            </label>
            <input class='form-control'>
          </div>
          <div class='form-group'>
            <label class='half-margin-bottom'>
              Email:
            </label>
            <input class='form-control'>
          </div>
          <div class='form-group'>
            <label class='half-margin-bottom'>
              Your message
            </label>
            <textarea class='form-control' rows='10'></textarea>
          </div>
          <div class='form-group'>
            <button class='btn btn-primary btn-lg btn-block' type='submit'>
              Submit
            </button>
          </div>
        </form>
      </div>
      <div class='col-lg-5 col-md-5 col-lg-offset-2 col-md-offset-2'>
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
              <?php the_content(); ?> 
          <!--end the loop-->
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>