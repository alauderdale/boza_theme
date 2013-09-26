<?php get_header(); ?>
<!-- /single -->
<section class='hero no-bg no-padding-bottom single'>
  <div class='container'>
    <div class='row'>
      <div class='col-lg-12'>
        <?php 
          if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
           the_post_thumbnail('full', array('class' => 'full-width margin-bottom featured-img')); 
          } 
        ?>
      </div>
    </div>
    <div class='row'>
      <div class='col-lg-12'>
        <h1>
          <?php the_title(); ?> 
        </h1>
      </div>
    </div>
  </div>
</section>
<section class='blog padding-top'>
  <div class='container'>
    <div class='row'>
      <div class='col-lg-12'>
        <div class='row'>
          <div class='col-lg-9 col-md-9'>
            <?php if (have_posts()) : ?>
              <?php while (have_posts()) : the_post(); ?>
                <div class='inline-block full-width bold-font-name'>
                  <div class='pull-left'>
                    <p>
                      posted on 
                      <?php the_date(); ?> 
                      in
                      <?php the_category(', '); ?> 
                    </p>
                  </div>
                  <div class='pull-right'>
                    <i class='icon-comment-alt'></i>
                    <a href='#comments'>
                      <?php comments_number( 'no comments', 'one comment', '% comments' ); ?>
                    </a>
                  </div>
                </div>
                <div class='post'>
                  <?php the_content(); ?> 
                </div>
                <!--end the loop-->
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
          <div class='col-lg-2 col-md-2 col-lg-offset-1 col-md-offset-1'>
            <?php get_sidebar(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php comments_template(); ?>
<?php get_footer(); ?>