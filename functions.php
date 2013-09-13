<?php
    
  //global options

  //thumbnails

  if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
  }
      
  //main nav
  
  register_nav_menu( 'main_nav', __( 'Main navigation menu', 'mytheme' ) );

      /*** Register our sidebars and widgetized areas.**/
    function wli_widgets_init() {

        register_sidebar( array(
            'name' => 'contact',
            'id' => 'contact',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => '',
            ) 
        );        
    }
    add_action( 'widgets_init', 'wli_widgets_init' ); 

  //create post types
    
    add_action( 'init', 'create_my_post_types' );
    
    function create_my_post_types() {
    
        register_post_type( 'home_icon',
            array(
                'labels' => array(
                    'name' => __( 'Homepage Icons' ),
                    'singular_name' => __( 'Icon' )
                ),
                'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' ),
                'public' => true,
    
            )
        );

        register_post_type( 'mission',
            array(
                'labels' => array(
                    'name' => __( 'Mission Statement' ),
                    'singular_name' => __( 'mission' )
                ),
                'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' ),
                'public' => true,
    
            )
        );

        register_post_type( 'stat',
            array(
                'labels' => array(
                    'name' => __( 'Stats' ),
                    'singular_name' => __( 'stat' )
                ),
                'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' ),
                'public' => true,
    
            )
        );

        register_post_type( 'contact',
            array(
                'labels' => array(
                    'name' => __( 'Contact' ),
                    'singular_name' => __( 'contact' )
                ),
                'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' ),
                'public' => true,
    
            )
        );

        register_post_type( 'donate_point',
            array(
                'labels' => array(
                    'name' => __( 'Donate Point' ),
                    'singular_name' => __( 'point' )
                ),
                'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' ),
                'public' => true,
    
            )
        );
    }


	function my_admin_scripts() {
	     wp_enqueue_script('media-upload');
	     wp_enqueue_script('thickbox');
	     wp_register_script('my-upload', get_bloginfo('template_url') . '/javascripts/functions-script.js', array('jquery','media-upload','thickbox'));
	     wp_enqueue_script('my-upload');
	 }
	 function my_admin_styles() {
	    wp_enqueue_style('thickbox');
	 }
	 add_action('admin_print_scripts', 'my_admin_scripts');
	 add_action('admin_print_styles', 'my_admin_styles');

	$prefix = 'wli';

	$meta_boxes = array(
	    ///page
	    array(
	        'id' => 'my-meta-box-1',
	        'title' => 'Page Options',
	        'pages' => array('page'), // multiple post types
	        'context' => 'normal',
	        'priority' => 'high',
	        'fields' => array(
	            array(
	                'name' => 'Hero Title',
	                'desc' => 'add text for the hero title',
	                'id' => 'hero_title',
	                'type' => 'text',
	                'std' => ''
	            ),
	            array(
	                'name' => 'Hero Sub Title',
	                'desc' => 'add text for the sub hero title',
	                'id' => 'hero_sub',
	                'type' => 'text',
	                'std' => ''
	            ),
	        )
	    )
	);

	add_action('admin_menu', 'mytheme_add_box');

	// Add meta box
	function mytheme_add_box() {
	    global $meta_box;

	    add_meta_box($meta_box['id'], $meta_box['title'], 'mytheme_show_box', $meta_box['page'], $meta_box['context'], $meta_box['priority']);
	}


	foreach ($meta_boxes as $meta_box) {
	    $my_box = new My_meta_box($meta_box);
	}

	class My_meta_box {
	 
	    protected $_meta_box;
	 
	    // create meta box based on given data
	    function __construct($meta_box) {
	        $this->_meta_box = $meta_box;
	        add_action('admin_menu', array(&$this, 'add'));
	 
	        add_action('save_post', array(&$this, 'save'));
	    }
	 
	    /// Add meta box for multiple post types
	    function add() {
	        foreach ($this->_meta_box['pages'] as $page) {
	            add_meta_box($this->_meta_box['id'], $this->_meta_box['title'], array(&$this, 'show'), $page, $this->_meta_box['context'], $this->_meta_box['priority']);
	        }
	    }
	 
	    // Callback function to show fields in meta box
	    function show() {
	        global $post;
	 
	        // Use nonce for verification
	        echo '<input type="hidden" name="mytheme_meta_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';
	 
	        echo '<table class="form-table">';
	 
	        foreach ($this->_meta_box['fields'] as $field) {
	            // get current post meta data
	            $meta = get_post_meta($post->ID, $field['id'], true);
	 
	            echo '<tr>',
	                    '<th style="width:20%"><label for="', $field['id'], '">', $field['name'], '</label></th>',
	                    '<td>';
	            switch ($field['type']) {
	                case 'text':
	                    echo '<input type="text" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : $field['std'], '" size="30" style="width:97%" />',
	                        '<br />', $field['desc'];
	                    break;
	                case 'textarea':
	                    echo '<textarea name="', $field['id'], '" id="', $field['id'], '" cols="60" rows="4" style="width:97%">', $meta ? $meta : $field['std'], '</textarea>',
	                        '<br />', $field['desc'];
	                    break;
	                case 'select':
	                    echo '<select name="', $field['id'], '" id="', $field['id'], '">';
	                    foreach ($field['options'] as $option) {
	                        echo '<option', $meta == $option ? ' selected="selected"' : '', '>', $option, '</option>';
	                    }
	                    echo '</select>';
	                    break;
	                case 'radio':
	                    foreach ($field['options'] as $option) {
	                        echo '<input type="radio" name="', $field['id'], '" value="', $option['value'], '"', $meta == $option['value'] ? ' checked="checked"' : '', ' />', $option['name'];
	                    }
	                    break;
	                case 'button':
	                    echo '<input type="button" name="', $field['id'], '" id="', $field['id'], '"value="', $meta ? $meta : $field['std'], '" />';
	                    break;
	            }
	            echo     '<td>',
	                '</tr>';
	        }
	 
	        echo '</table>';
	    }
	 
	    // Save data from meta box
	    function save($post_id) {
	        // verify nonce
	        if (!wp_verify_nonce($_POST['mytheme_meta_box_nonce'], basename(__FILE__))) {
	            return $post_id;
	        }
	 
	        // check autosave
	        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
	            return $post_id;
	        }
	 
	        // check permissions
	        if ('page' == $_POST['post_type']) {
	            if (!current_user_can('edit_page', $post_id)) {
	                return $post_id;
	            }
	        } elseif (!current_user_can('edit_post', $post_id)) {
	            return $post_id;
	        }
	 
	        foreach ($this->_meta_box['fields'] as $field) {
	            $old = get_post_meta($post_id, $field['id'], true);
	            $new = $_POST[$field['id']];
	 
	            if ($new && $new != $old) {
	                update_post_meta($post_id, $field['id'], $new);
	            } elseif ('' == $new && $old) {
	                delete_post_meta($post_id, $field['id'], $old);
	            }
	        }
	    }
	}


	
?>