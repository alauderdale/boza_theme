<?php
/*
Template Name: Blog
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
<section class='blog'>
  <div class='container'>
    <div class='row'>
      <div class='col-lg-12'>
        <div class='row'>
          <div class='col-lg-9 col-md-9'>
            <?php
                $postLoop = new WP_Query( array( 'post_type' => 'post') );
            ?>
            	<?php while ( $postLoop->have_posts() ) : $postLoop->the_post(); ?>
                <article class='full-width thick-border-bottom inline-block padding-bottom double-margin-bottom'>
                  <h2>
                    <a href='<?php the_permalink(); ?>'>
                      <?php the_title(); ?> 
                    </a>
                  </h2>
                  <div class='inline-block full-width bold-font-name'>
                    <div class='pull-left'>
                      <p>
                        posted on <?php the_date(); ?> in
                        <?php the_category(', '); ?> 
                      </p>
                    </div>
                    <div class='pull-right'>
                      <i class='icon-comment-alt'></i>
                      <a href='<?php the_permalink(); ?>#comments'>
                        <?php comments_number( 'no comments', '1 comment', '% comments' ); ?>
                      </a>
                    </div>
                  </div>

                  <?php if ( has_post_thumbnail() ): // check if the post has a Post Thumbnail assigned to it.?>
                    <a href='<?php the_permalink(); ?>'>
                      <?php  the_post_thumbnail('full', array('class' => 'full-width margin-bottom')); ?>
                    </a>
                  <?php endif; ?>

                  <?php the_excerpt(); ?> 
                  <a class='btn-link' href='<?php the_permalink(); ?>'>
                    <em>
                      Read More 
                    </em>
                  </a>
                </article>
            	<!--end the post loop-->
              <?php endwhile; ?>
          </div><!-- end blog cols -->
          <div class='col-lg-2 col-md-2 col-lg-offset-1 col-md-offset-1'>
            <?php get_sidebar(); ?>
          </div><!-- end sidebar cols -->
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>