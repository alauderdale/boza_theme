    <footer class='dark-border-top'>
      <section>
        <div class='container'>
          <div class='row'>
            <div class='col-lg-12'>
              <div class='row'>
                <div class='col-lg-3 col-md-3 col-sm-3'>
                  <h5 class='extra-bold-font-name'>
                    Twitter
                  </h5>
                  <p>
                    <a href='#'>
                      Don Etiam at massa non eros imperdiet tempus at id...
                    </a>
                  </p>
                  <p>
                    <a href='#'>
                      Don Etiam at massa non eros imperdiet tempus at id...
                    </a>
                  </p>
                  <p>
                    <a href='#'>
                      Don Etiam at massa non eros imperdiet tempus at id...
                    </a>
                  </p>
                </div>
                <div class='col-lg-2 col-md-2 col-sm-2'>
                  <h5 class='extra-bold-font-name'>
                    Give
                  </h5>
                  <nav class='margin-bottom'>
                    <?php wp_nav_menu( array('theme_location' => 'footer1' , 'container' => '', 'items_wrap' => '<ul class="list-unstyled">%3$s</ul>' )); ?>
                  </nav>
                </div>
                <div class='col-lg-2 col-md-2 col-sm-2'>
                  <h5 class='extra-bold-font-name'>
                    Get Educated
                  </h5>
                  <nav class='margin-bottom'>
                                        <?php wp_nav_menu( array('theme_location' => 'footer2' , 'container' => '', 'items_wrap' => '<ul class="list-unstyled">%3$s</ul>' )); ?>
                  </nav>
                </div>
                <div class='col-lg-3 col-md-3 col-sm-3'>
                  <h5 class='extra-bold-font-name'>
                    Stay Connected
                  </h5>
                  <form class='margin-bottom'>
                    <div class='form-group'>
                      <p>
                        Sign up for our newsletter to
                        recieve updates and info
                      </p>
                      <div class="row">
                        <div class="half-margin-left col-lg-7 no-padding-right no-padding-left inline">
                          <input class="form-control" placeholder='ex:john@doe.com'>
                        </div>
                      </div>
                    </div>
                    <button class='btn btn-primary' type='submit'>
                      submit
                    </button>
                  </form>
                </div>
                <div class='col-lg-2 col-md-2'>
                  <h5 class='extra-bold-font-name'>
                    Share
                  </h5>
                  <nav>
                    <ul class='list-unstyled'>
                      <li class='no-margin-bottom'>
                        <a href='#'>
                          <span class='social-font-name pull-left half-margin-right extra-bold-font-name' style='font-size:1.4em;'>
                            F
                          </span>
                          Facebook
                        </a>
                      </li>
                      <li class='no-margin-bottom'>
                        <a href='#'>
                          <span class='social-font-name pull-left half-margin-right extra-bold-font-name' style='font-size:1.4em;'>
                            T
                          </span>
                          Twitter
                        </a>
                      </li>
                    </ul>
                  </nav>
                  <div class='clearfix margin-bottom'></div>
                  <h5 class='extra-bold-font-name'>
                    Contact
                  </h5>
                  <?php if ( dynamic_sidebar('contact') ) : ?>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class='dark-border-top'>
        <div class='container'>
          <div class='row'>
            <div class='col-lg-12'>
              <p class='text-center'>
                ©2013 BOZA All Rights Reserved
              </p>
            </div>
          </div>
        </div>
      </section>
    </footer>
  </body>
<?php wp_footer(); ?>
</html>