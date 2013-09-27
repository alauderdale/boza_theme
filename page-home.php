<?php
/*
Template Name: Home
 */
?>
<?php get_header(); ?>

<style>
  body{
  	padding-top:0!important;
  }
  .main-nav{
  	display:none;
  }
</style>
<script>
  $(document).ready(function(){
  	$(window).scroll(function(){
  		var divOffset = $('.menu-offset').offset();
  		if(window.scrollY > divOffset.top ){
  		$('.main-nav').fadeIn(200);
  		}
  		if(window.scrollY < divOffset.top){
  		$('.main-nav').fadeOut(200);
  		}
  	});
  });
</script>
<nav class='navbar navbar-default primary-bg-color home-nav no-border no-margin-bottom' role='navigation'>
  <div class='container'>
    <div class='navbar-header'>
      <a class='navbar-brand logo double-margin-right' href='<?php echo get_option('home'); ?>'></a>
    </div>
    <div class='collapse navbar-collapse'>
      <?php wp_nav_menu( array('menu' => 'Main', 'container' => '', 'items_wrap' => '<ul class="nav navbar-nav">%3$s</ul>' )); ?>
      <ul class='nav navbar-nav navbar-right home-social-nav'>
        <li class='social'>
          <a class='btn btn-primary btn-sm' href='<?php echo get_option('nt_facebook'); ?>'>
            F
          </a>
        </li>
        <li class='social'>
          <a class='btn btn-primary btn-sm' href='<?php echo get_option('nt_twitter'); ?>'>
            T
          </a>
        </li>
        <li>
          <a class='btn btn-primary btn-sm' href='index.php?pagename=donate'>
            Donate
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<section class='hero primary-bg-color home no-padding-top'>
  <div class='container'>
    <div class='row'>
      <div class='col-lg-12'>
        <div class='row border-bottom margin-bottom'>
          <div class='col-lg-9 col-md-9 col-sm-9 col-xs-9'>
            <h1 class='no-margin-bottom'>
              <?php echo get_post_meta($post->ID, 'hero_title', true); ?>
            </h1>
          </div>
          <div class='col-lg-3 col-md-3 col-sm-3'>
            <img class='pull-right margin-bottom home-mark' src='<?php bloginfo('template_url'); ?>/images/mark_large.png'>
          </div>
        </div>
        <h2 class='double-margin-bottom'>
          <?php echo get_post_meta($post->ID, 'hero_sub', true); ?>
        </h2>
        <div class='btn-group margin-bottom'>
          <a class='btn btn-default btn-lg margin-right' href='index.php?pagename=our-story'>
            Learn More
          </a>
        </div>
        <div class='btn-group margin-bottom'>
          <a class='btn btn-default btn-lg' href='index.php?pagename=donate'>
            Support Our Cause
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<div class='menu-offset'></div>
<!-- /slider -->
<div class='home-slider'>
  <div class='royalSlider heroSlider rsMinW' id='full-width-slider'>
			<?php query_posts('category_name=FEATURED&showposts=5');
				while (have_posts()) : the_post();
			// do whatever you want
			?>
		    <div class='rsContent'>
		      <img alt='' class='rsImg' src='<?php
                        $imgsrc2 = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full");
                        echo $imgsrc2[0];
                        ?>'>
		      <div class='infoBlock infoBlockLeftBlack rsABlock rsNoDrag' data-fade-effect='' data-move-effect='bottom' data-move-offset='10' data-speed='200'>
		        <i class='<?php echo get_post_meta($post->ID, 'class', true); ?>'></i>
		        <h2>
	          	<?php echo get_post_meta($post->ID, 'slider_title', true); ?>
		        </h2>

		        <?php if ( get_post_meta( get_the_ID(), 'slider_cta_link', true ) ) : ?>
			        <a class='btn btn-primary btn-lg' href='<?php echo get_post_meta($post->ID, 'slider_cta_link', true); ?>'>
		        <?php else: ?>
			        <a class='btn btn-primary btn-lg' href='<?php the_permalink(); ?>'>
			      <?php endif; ?>

		        	<!-- check if there is a title -->
			        <?php if ( get_post_meta( get_the_ID(), 'slider_cta_title', true ) ) : ?>
			         <?php echo get_post_meta($post->ID, 'slider_cta_title', true); ?>
			        <?php else: ?>
			        	Learn More
			        <?php endif; ?>
		        </a>
		      </div>
		    </div>
			<?php endwhile; ?>
			<?php wp_reset_query(); ?>
  </div>
</div>
<section>
  <div class='container'>
    <div class='row'>
      <div class='col-lg-7 col-md-7 col-sm-7'>
        <h2 class='padding-bottom thick-primary-border-bottom'>
          We are BOZA
        </h2>
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
        		<?php the_content(); ?> 
        	<!--end the loop-->
          <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
      </div>
      <div class='col-lg-5 col-md-5 col-sm-5'>
        <?php if ( has_post_thumbnail() ): // check if the post has a Post Thumbnail assigned to it.?>
          <?php  the_post_thumbnail('full', array('class' => 'full-width pull-right')); ?>
      	<?php endif; ?>
      </div>
    </div>
  </div>
</section>
<section class='stripped-bg home-meta'>
  <div class='container white-bg double-padding bordered'>
    <div class='row'>
    	<?php
        $postLoop = new WP_Query( array( 'post_type' => 'home-preview') );
      ?>
    	<?php while ( $postLoop->have_posts() ) : $postLoop->the_post(); ?>
	      <div class='col-lg-4 col-md-4 col-sm-4'>
	        <div class='padded'>
	          <h2 class='double-margin-bottom'>
	            <?php the_title(); ?> 
	          </h2>
            <img alt='' class='rsImg img-circle margin-bottom' src='<?php
                        $imgsrc2 = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full");
                        echo $imgsrc2[0];
                        ?>'>
	          <?php the_content(); ?> 
	          <a href="<?php echo get_post_meta($post->ID, 'link', true); ?>" class='btn-link'>
	            <?php echo get_post_meta($post->ID, 'title', true); ?>
	          </a>
	        </div>
	      </div>
    	<?php endwhile; ?>
      <div class='col-lg-4 col-md-4 col-sm-4'>
        <div class='padded'>
          <h2 class='double-margin-bottom'>
            New & Events
          </h2>
          <div class='home-news margin-bottom'>
          	<?php query_posts('showposts=3');
							while (have_posts()) : the_post();
						// do whatever you want
						?>
	            <div class='home-post padded bordered'>
	              <div class='row'>
	                <div class='col-lg-7 col-md-7 col-xs-7 right-divider'>
	                  <a href='<?php the_permalink(); ?>'>
	                    <?php the_title(); ?> 
	                  </a>
	                </div>
	                <div class='col-lg-5 col-md-5 col-sm-5 col-xs-5'>
	                  <h6>
	                     <?php the_time('F j, Y'); ?> 
	                  </h6>
	                </div>
	              </div>
	            </div>
            <?php endwhile; ?>
          </div>
          <a class='btn-link' href='index.php?pagename=blog'>
            See all the news
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include 'social-section.php'; ?>
<?php get_footer(); ?>