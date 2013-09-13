<?php get_header(); ?>

<!-- /hero -->
<section class='hero'>
  <div class='container'>
    <div class='row'>
      <div class='col-lg-12'>
        <h1>
          This is where you’ll find our latest thinking
        </h1>
        <h2>
          Donec tristique vestibulum congue. Maecenas feugiat
        </h2>
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
            <?php if (have_posts()) : ?>
              <?php while (have_posts()) : the_post(); ?>
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
                      <a href='#'>
                        3 comments
                      </a>
                    </div>
                  </div>

                    <?php 
                      if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                       the_post_thumbnail('full', array('class' => 'full-width margin-bottom')); 
                      } 
                    ?>

                  <?php the_excerpt(); ?> 
                  <a class='text-uppercase bold-font-name' href='<?php the_permalink(); ?>'>
                    <em>
                      Read More ›
                    </em>
                  </a>
                </article>
            <!--end the loop-->
              <?php endwhile; ?>
            <?php endif; ?>
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