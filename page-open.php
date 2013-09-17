<?php
/*
Template Name: Page Open
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
<!--start the loop-->
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
    <?php the_content(); ?> 
<!--end the loop-->
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
