<aside class='sidebar'>
  <div class='double-margin-bottom inline-block full-width'>
    <h5 class='text-uppercase'>
      Categories
    </h5>
    <?php $catargs = array(
      'style'              => 'none'
    ); ?>
    <?php wp_list_categories( $catargs ); ?> 
  </div>
  <div class='double-margin-bottom inline-block full-width'>
    <h5 class='text-uppercase'>
      Follow-us
    </h5>
    <ul class='social list-inline'>
      <li>
        <a href='<?php echo get_option('nt_facebook'); ?>'>
          F
        </a>
      </li>
      <li>
        <a href='<?php echo get_option('nt_twitter'); ?>'>
          T
        </a>
      </li>
      <li>
        <a href='<?php echo get_option('nt_linkedin'); ?>'>
          I
        </a>
      </li>
    </ul>
  </div>
  <div class='double-margin-bottom inline-block full-width'>
    <h5 class='text-uppercase'>
      Subscribe
    </h5>
    <form>
      <div class='form-group'>
        <label>
          <small>
            Enter your email:
          </small>
        </label>
        <input placeholder='ex:john@doe.com'>
      </div>
      <button class='btn btn-primary' type='submit'>
        submit
      </button>
    </form>
  </div>
</aside>