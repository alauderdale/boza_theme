<!doctype html>
<html>
  <head>
    <meta charset='utf-8'>
    <meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible'>
    <title>Boza</title>
    <link href="<?php bloginfo('template_url'); ?>/stylesheets/bootstrap.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="<?php bloginfo('template_url'); ?>/stylesheets/font-awesome.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="<?php bloginfo('template_url'); ?>/stylesheets/royalslider.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="<?php bloginfo('template_url'); ?>/stylesheets/minimal-white/rs-minimal-white.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="<?php bloginfo('template_url'); ?>/stylesheets/style.css" media="screen" rel="stylesheet" type="text/css" />
    <script src="<?php bloginfo('template_url'); ?>/javascripts/jquery-1.8.0.min.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_url'); ?>/javascripts/jquery.easing-1.3.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_url'); ?>/javascripts/bootstrap.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_url'); ?>/javascripts/jquery.royalslider.min.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_url'); ?>/javascripts/scripts.js" type="text/javascript"></script>
    <?php wp_head(); ?>
    <style>
        html{
        margin-top:0!important;
      }
      * html body{
        margin-top:0!important;
      }
    </style>
  </head>

  <body>
  <nav class='navbar navbar-default navbar-fixed-top main-nav' role='navigation'>
    <div class='container'>
      <div class='navbar-header'>
        <button class='navbar-toggle' data-target='.navbar-ex1-collapse' data-toggle='collapse' type='button'>
          <span class='sr-only'>Toggle navigation</span>
          <span class='icon-bar'></span>
          <span class='icon-bar'></span>
          <span class='icon-bar'></span>
        </button>
        <a class='navbar-brand logo double-margin-right' href='<?php echo get_option('home'); ?>'></a>
      </div>
      <div class='collapse navbar-collapse'>
<!--         main menu -->
        <?php wp_nav_menu( array('menu' => 'Main', 'container' => '', 'items_wrap' => '<ul class="nav navbar-nav">%3$s</ul>' )); ?>
        <ul class='nav navbar-nav navbar-right'>
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
            <a class='btn btn-primary btn-sm' href='donate.html'>
              Donate
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class='shrink-nav'></div>