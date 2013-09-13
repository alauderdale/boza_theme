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
          <a class='btn btn-primary btn-sm' href='#'>
            F
          </a>
        </li>
        <li class='social'>
          <a class='btn btn-primary btn-sm' href='#'>
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
            <img class='pull-right margin-bottom' src='<?php bloginfo('template_url'); ?>/images/mark_large.png'>
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
    <div class='rsContent'>
      <img alt='' class='rsImg' src='<?php bloginfo('template_url'); ?>/images/slider_img.png'>
      <div class='infoBlock infoBlockLeftBlack rsABlock rsNoDrag' data-fade-effect='' data-move-effect='bottom' data-move-offset='10' data-speed='200'>
        <i class='icon-home'></i>
        <h2>
          See how our
          investment model
          works.
        </h2>
        <a class='btn btn-primary btn-lg' href='blog.html'>
          Watch the video
        </a>
      </div>
    </div>
    <div class='rsContent'>
      <img alt='' class='rsImg' src='images/slider_img.png'>
      <div class='infoBlock infoBlockLeftBlack rsABlock rsNoDrag' data-fade-effect='' data-move-effect='bottom' data-move-offset='10' data-speed='200'>
        <i class='icon-home'></i>
        <h2>
          See how our
          investment model
          works.
        </h2>
        <a class='btn btn-primary btn-lg' href='blog.html'>
          Watch the video
        </a>
      </div>
    </div>
    <div class='rsContent'>
      <img alt='' class='rsImg' src='images/slider_img.png'>
      <div class='infoBlock infoBlockLeftBlack rsABlock rsNoDrag' data-fade-effect='' data-move-effect='bottom' data-move-offset='10' data-speed='200'>
        <i class='icon-home'></i>
        <h2>
          See how our
          investment model
          works.
        </h2>
        <a class='btn btn-primary btn-lg' href='blog.html'>
          Watch the video
        </a>
      </div>
    </div>
    <div class='rsContent'>
      <img alt='' class='rsImg' src='images/slider_img.png'>
      <div class='infoBlock infoBlockLeftBlack rsABlock rsNoDrag' data-fade-effect='' data-move-effect='bottom' data-move-offset='10' data-speed='200'>
        <i class='icon-home'></i>
        <h2>
          See how our
          investment model
          works.
        </h2>
        <a class='btn btn-primary btn-lg' href='blog.html'>
          Watch the video
        </a>
      </div>
    </div>
  </div>
</div>
<section>
  <div class='container'>
    <div class='row'>
      <div class='col-lg-7 col-md-7'>
        <h2 class='padding-bottom thick-primary-border-bottom'>
          We are BOZA
        </h2>
        <p>
          GP is enim nisl, luctus sit amet cursus nec, condimentuectus. Quisque gravida massa at est consequat rhoncus. Etiam at maat id massa. Dnec scelerisque erat ac justo ele.GP is enim nisl, luctus sit amet cursus nec, condimentuectus. Quisque gravida massa at est consequat rhoncus. Etiam at maat id massa. Dnec scelerisque erat ac justo ele.
        </p>
      </div>
      <div class='col-lg-5 col-md-5'>
        <img class='pull-right' src='images/kid.png'>
      </div>
    </div>
  </div>
</section>
<section class='stripped-bg home-meta'>
  <div class='container white-bg double-padding bordered'>
    <div class='row'>
      <div class='col-lg-4 col-md-4'>
        <div class='padded'>
          <h2 class='double-margin-bottom'>
            People
          </h2>
          <img class='img-circle margin-bottom' src='http://placehold.it/220x220'>
          <h5>
            Global Reach
          </h5>
          <p>
            Quisque gravida massa at est consequat rhoncus. Etiam at maat id massa. Dnec scelerisque erat ac justo ele.
          </p>
          <a class='btn-link'>
            Get Involved
          </a>
        </div>
      </div>
      <div class='col-lg-4 col-md-4'>
        <div class='padded'>
          <h2 class='double-margin-bottom'>
            Leaders
          </h2>
          <img class='img-circle margin-bottom' src='http://placehold.it/220x220'>
          <h5>
            A Higher Plan
          </h5>
          <p>
            Quisque gravida massa at est consequat rhoncus. Etiam at maat id massa. Dnec scelerisque erat ac justo ele.
          </p>
          <a class='btn-link'>
            Read About Our Mission
          </a>
        </div>
      </div>
      <div class='col-lg-4 col-md-4'>
        <div class='padded'>
          <h2 class='double-margin-bottom'>
            New & Events
          </h2>
          <div class='home-news margin-bottom'>
            <div class='home-post padded bordered'>
              <div class='row'>
                <div class='col-lg-7 col-md-7 col-xs-7 right-divider'>
                  <a href='single.html'>
                    Im the title of a very interesting blog post
                  </a>
                </div>
                <div class='col-lg-5 col-md-5 col-sm-5 col-xs-5'>
                  <h6>
                    Jul 22, 2012
                  </h6>
                </div>
              </div>
            </div>
            <div class='home-post padded bordered'>
              <div class='row'>
                <div class='col-lg-7 col-md-7 col-xs-7 right-divider'>
                  <a href='single.html'>
                    Im the title of a very interesting blog post
                  </a>
                </div>
                <div class='col-lg-5 col-md-5 col-sm-5 col-xs-5'>
                  <h6>
                    Jul 22, 2012
                  </h6>
                </div>
              </div>
            </div>
            <div class='home-post padded bordered'>
              <div class='row'>
                <div class='col-lg-7 col-md-7 col-xs-7 right-divider'>
                  <a href='single.html'>
                    Im the title of a very interesting blog post
                  </a>
                </div>
                <div class='col-lg-5 col-md-5 col-sm-5 col-xs-5'>
                  <h6>
                    Jul 22, 2012
                  </h6>
                </div>
              </div>
            </div>
          </div>
          <a class='btn-link' href='blog.html'>
            See all the news
          </a>
        </div>
      </div>
    </div>
  </div>
    </section>
<?php get_footer(); ?>