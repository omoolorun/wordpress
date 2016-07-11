<?php

function ophelia_customizer_config() {
	
    $url  = get_stylesheet_directory_uri() . '/lib/kirki/';

    /**
     * If you need to include Kirki in your theme,
     * then you may want to consider adding the translations here
     * using your textdomain.
     * 
     * If you're using Kirki as a plugin then you can remove these.
     */

    $strings = array(
        'background-color' => __( 'Background Color', 'ophelia' ),
        'background-image' => __( 'Background Image', 'ophelia' ),
        'no-repeat' => __( 'No Repeat', 'ophelia' ),
        'repeat-all' => __( 'Repeat All', 'ophelia' ),
        'repeat-x' => __( 'Repeat Horizontally', 'ophelia' ),
        'repeat-y' => __( 'Repeat Vertically', 'ophelia' ),
        'inherit' => __( 'Inherit', 'ophelia' ),
        'background-repeat' => __( 'Background Repeat', 'ophelia' ),
        'cover' => __( 'Cover', 'ophelia' ),
        'contain' => __( 'Contain', 'ophelia' ),
        'background-size' => __( 'Background Size', 'ophelia' ),
        'fixed' => __( 'Fixed', 'ophelia' ),
        'scroll' => __( 'Scroll', 'ophelia' ),
        'background-attachment' => __( 'Background Attachment', 'ophelia' ),
        'left-top' => __( 'Left Top', 'ophelia' ),
        'left-center' => __( 'Left Center', 'ophelia' ),
        'left-bottom' => __( 'Left Bottom', 'ophelia' ),
        'right-top' => __( 'Right Top', 'ophelia' ),
        'right-center' => __( 'Right Center', 'ophelia' ),
        'right-bottom' => __( 'Right Bottom', 'ophelia' ),
        'center-top' => __( 'Center Top', 'ophelia' ),
        'center-center' => __( 'Center Center', 'ophelia' ),
        'center-bottom' => __( 'Center Bottom', 'ophelia' ),
        'background-position' => __( 'Background Position', 'ophelia' ),
        'background-opacity' => __( 'Background Opacity', 'ophelia' ),
        'ON' => __( 'ON', 'ophelia' ),
        'OFF' => __( 'OFF', 'ophelia' ),
        'all' => __( 'All', 'ophelia' ),
        'cyrillic' => __( 'Cyrillic', 'ophelia' ),
        'cyrillic-ext' => __( 'Cyrillic Extended', 'ophelia' ),
        'devanagari' => __( 'Devanagari', 'ophelia' ),
        'greek' => __( 'Greek', 'ophelia' ),
        'greek-ext' => __( 'Greek Extended', 'ophelia' ),
        'khmer' => __( 'Khmer', 'ophelia' ),
        'latin' => __( 'Latin', 'ophelia' ),
        'latin-ext' => __( 'Latin Extended', 'ophelia' ),
        'vietnamese' => __( 'Vietnamese', 'ophelia' ),
        'serif' => _x( 'Serif', 'font style', 'ophelia' ),
        'sans-serif' => _x( 'Sans Serif', 'font style', 'ophelia' ),
        'monospace' => _x( 'Monospace', 'font style', 'ophelia' ),
    );	

	$args = array(
  
        // Change the logo image. (URL) Point this to the path of the logo file in your theme directory
        // The developer recommends an image size of about 250 x 250
        
		'logo_image'   => get_template_directory_uri() . '/assets/images/logo.png',
  
        // The color of active menu items, help bullets etc.
        'color_active' => '#95c837',
		
		// Color used on slider controls and image selects
		'color_accent' => '#e7e7e7',
	
        // Color used for secondary elements and desable/inactive controls
        'color_light'  => '#e7e7e7',
  
        // Color used for button-set controls and other elements
        'color_select' => '#34495e',
		 
        // For the parameter here, use the handle of your stylesheet you use in wp_enqueue
        'stylesheet_id' => 'customize-styles', 
		
        // Only use this if you are bundling the plugin with your theme (see above)
        'url_path'     => get_template_directory_uri() . '/lib/kirki/',

        'textdomain'   => 'ophelia',
		
        'i18n'         => $strings,		
	);
	return $args;
}
add_filter( 'kirki/config', 'ophelia_customizer_config' );


/**
 * Create the customizer panels and sections
 */
add_action( 'customize_register', 'ophelia_add_panels_and_sections' ); 
function ophelia_add_panels_and_sections( $wp_customize ) {

	//Add panels

	$wp_customize->add_panel('slider',               array( 'title' => __( 'Slider', 'ophelia' ),                  'description' => __( 'Slides details', 'ophelia' ),          'priority' => 140));
	$wp_customize->add_panel('boxhomepage',          array( 'title' => __( 'Box Home Page', 'ophelia' ),           'description' => __( 'Box Home Page', 'ophelia' ),          'priority' => 140));
	
    // Add Sections
	
    $wp_customize->add_section('general',   array('title' => __('General Settings', 'ophelia'),            'description' => '',    'priority' => 130,));
    $wp_customize->add_section('homebox',   array('title' => __('Home Page', 'ophelia'),                    'description' => '',    'priority' => 130,));	
	$wp_customize->add_section('promo',     array('title' => __('About Ophelia Theme', 'ophelia'),          'description' => '',    'priority' => 170,));
	
	// slider sections
	$wp_customize->add_section('slide',              array('title' => __('Slide Options', 'ophelia'),              'description' => '',             'panel' => 'slider',		'priority' => 140,));		
	$wp_customize->add_section('slide1',              array('title' => __('Slide 1', 'ophelia'),                   'description' => '',             'panel' => 'slider',		'priority' => 140,));
	$wp_customize->add_section('slide2',              array('title' => __('Slide 2', 'ophelia'),                   'description' => '',             'panel' => 'slider',		'priority' => 140,));
	
	// boxhomepage sections

	$wp_customize->add_section('boxhomepage1',              array('title' => __('Home Box 1', 'ophelia'),                   'description' => '',             'panel' => 'boxhomepage',		'priority' => 140,));
	$wp_customize->add_section('boxhomepage2',              array('title' => __('Home Box 2', 'ophelia'),                   'description' => '',             'panel' => 'boxhomepage',		'priority' => 140,));
	$wp_customize->add_section('boxhomepage3',              array('title' => __('Home Box 3', 'ophelia'),                   'description' => '',             'panel' => 'boxhomepage',		'priority' => 140,));
	$wp_customize->add_section('boxhomepage4',              array('title' => __('Home Box 4', 'ophelia'),                   'description' => '',             'panel' => 'boxhomepage',		'priority' => 140,));
	$wp_customize->add_section('boxhomepage5',              array('title' => __('Home Box 5', 'ophelia'),                   'description' => '',             'panel' => 'boxhomepage',		'priority' => 140,));
	$wp_customize->add_section('boxhomepage6',              array('title' => __('Home Box 6', 'ophelia'),                   'description' => '',             'panel' => 'boxhomepage',		'priority' => 140,));
	
}


function ophelia_custom_setting( $controls ) {

      $titlemess = __('Welcome To Ophelia Theme', 'ophelia' );
      $copyrights =  __('Copyright &copy; 2015 '.get_bloginfo('name'). ' All Rights Reserved.', 'ophelia');  
	  $infofont = __( 'Select a icons in this list http://fortawesome.github.io/Font-Awesome/icons/ and enter the code', "ophelia");
      $buttontext = __('Read More', 'ophelia' );
    
	// General Settings	 
	 
	  $controls[] = array('label' => __('Upload logo', "ophelia"),              'setting' => 'pp_logo_upload',               'type' => 'upload',        'description' => '',                                               'default' => '',                                          'section'     => 'general');	 
	  $controls[] = array('label' => __('Text Logo 1', "ophelia"),              'setting' => 'text_logo_1',                  'type' => 'text',          'description' => __( 'Add text color for logo', "ophelia"),        'default' => __( 'Ophelia', "ophelia"),                   'section'     => 'general');
	  $controls[] = array('label' => __('Text Logo 2', "ophelia"),              'setting' => 'text_logo_2',                  'type' => 'text',          'description' => __( 'Add text black for logo', "ophelia"),        'default' => __( 'Themes', "ophelia"),                    'section'     => 'general');	
	  $controls[] = array('label' => __('Copyrights text', "ophelia"),          'setting' => 'pp_copyrights',                'type' => 'text',          'description' => __( 'Text in footer left', "ophelia"),            'default' => $copyrights,                                 'section'     => 'general');  
	  $controls[] = array('label' => __('Blog page title', 'causes'),           'setting' => 'pwt_blog_page',                'type' => 'text',          'description' => '',                                               'default' => __('Latest Blog Posts', 'causes' ),          'section' => 'general');	 

     // Home Box 
	 
	  $controls[] = array('label' => __('Message Title', "ophelia"),           'setting' => 'home_message_title',            'type' => 'text',          'description' => '',            'default' => '',                 'section'     => 'homebox');	 
	  $controls[] = array('label' => __('Message Content', "ophelia"),         'setting' => 'home_message_content',          'type' => 'text',          'description' => '',            'default' => '',                 'section'     => 'homebox');  
	  $controls[] = array('label' => __('Message Button 1 Text', "ophelia"),   'setting' => 'home_message_button_1_text',    'type' => 'text',          'description' => '',            'default' => '',                 'section'     => 'homebox');
	  $controls[] = array('label' => __('Message Button 1 Link', "ophelia"),   'setting' => 'home_message_button_1_link',    'type' => 'text',          'description' => '',            'default' => '',                 'section'     => 'homebox');	

	  $controls[] = array('label' => __('Box Title 1', "ophelia"),             'setting' => 'circles_box_title_1',           'type' => 'text',          'description' => '',            'default' => '',                 'section'     => 'boxhomepage1');	
	  $controls[] = array('label' => __('Box Image 1', "ophelia"),             'setting' => 'circles_box_image_1',           'type' => 'text',          'description' => $infofont,     'default' => 'users',            'section'     => 'boxhomepage1');  
	  $controls[] = array('label' => __('Box Content 1', "ophelia"),           'setting' => 'circles_box_content_1',         'type' => 'textarea',      'description' => '',            'default' => '',                 'section'     => 'boxhomepage1');  
	  $controls[] = array('label' => __('Box Text 1', "ophelia"),              'setting' => 'circles_box_text_1',            'type' => 'text',          'description' => $buttontext,   'default' => '',                 'section'     => 'boxhomepage1');  
	  $controls[] = array('label' => __('Box Link 1', "ophelia"),              'setting' => 'circles_box_link_1',            'type' => 'text',          'description' => '',            'default' => '',                 'section'     => 'boxhomepage1');  

	  $controls[] = array('label' => __('Box Title 2', "ophelia"),             'setting' => 'circles_box_title_2',           'type' => 'text',          'description' => '',            'default' => '',                 'section'     => 'boxhomepage2');	
	  $controls[] = array('label' => __('Box Image 2', "ophelia"),             'setting' => 'circles_box_image_2',           'type' => 'text',          'description' => $infofont,     'default' => 'cog',              'section'     => 'boxhomepage2');  
	  $controls[] = array('label' => __('Box Content 2', "ophelia"),           'setting' => 'circles_box_content_2',         'type' => 'textarea',      'description' => '',            'default' => '',                 'section'     => 'boxhomepage2');  
	  $controls[] = array('label' => __('Box Text 2', "ophelia"),              'setting' => 'circles_box_text_2',            'type' => 'text',          'description' => $buttontext,   'default' => '',                 'section'     => 'boxhomepage2');  
	  $controls[] = array('label' => __('Box Link 2', "ophelia"),              'setting' => 'circles_box_link_2',            'type' => 'text',          'description' => '',            'default' => '',                 'section'     => 'boxhomepage2');  

	  $controls[] = array('label' => __('Box Title 3', "ophelia"),             'setting' => 'circles_box_title_3',           'type' => 'text',          'description' => '',            'default' => '',                 'section'     => 'boxhomepage3');	
	  $controls[] = array('label' => __('Box Image 3', "ophelia"),             'setting' => 'circles_box_image_3',           'type' => 'text',          'description' => $infofont,     'default' => 'eye',              'section'     => 'boxhomepage3');  
	  $controls[] = array('label' => __('Box Content 3', "ophelia"),           'setting' => 'circles_box_content_3',         'type' => 'textarea',      'description' => '',            'default' => '',                 'section'     => 'boxhomepage3');  
	  $controls[] = array('label' => __('Box Text 3', "ophelia"),              'setting' => 'circles_text_link_3',            'type' => 'text',         'description' => $buttontext,   'default' => '',                 'section'     => 'boxhomepage3');  
	  $controls[] = array('label' => __('Box Link 3', "ophelia"),              'setting' => 'circles_box_link_3',            'type' => 'text',          'description' => '',            'default' => '',                 'section'     => 'boxhomepage3');  

	  $controls[] = array('label' => __('Box Title 4', "ophelia"),             'setting' => 'circles_box_title_4',           'type' => 'text',          'description' => '',            'default' => '',                 'section'     => 'boxhomepage4');	
	  $controls[] = array('label' => __('Box Image 4', "ophelia"),             'setting' => 'circles_box_image_4',           'type' => 'text',          'description' => $infofont,     'default' => 'tablet',           'section'     => 'boxhomepage4');  
	  $controls[] = array('label' => __('Box Content 4', "ophelia"),           'setting' => 'circles_box_content_4',         'type' => 'textarea',      'description' => '',            'default' => '',                 'section'     => 'boxhomepage4');  
	  $controls[] = array('label' => __('Box Text 4', "ophelia"),              'setting' => 'circles_text_link_4',            'type' => 'text',         'description' => $buttontext,   'default' => '',                 'section'     => 'boxhomepage4');  
	  $controls[] = array('label' => __('Box Link 4', "ophelia"),              'setting' => 'circles_box_link_4',            'type' => 'text',          'description' => '',            'default' => '',                 'section'     => 'boxhomepage4');  

	  $controls[] = array('label' => __('Box Title 5', "ophelia"),             'setting' => 'circles_box_title_5',           'type' => 'text',          'description' => '',            'default' => '',                 'section'     => 'boxhomepage5');	
	  $controls[] = array('label' => __('Box Image 5', "ophelia"),             'setting' => 'circles_box_image_5',           'type' => 'text',          'description' => $infofont,     'default' => 'mobile',           'section'     => 'boxhomepage5');  
	  $controls[] = array('label' => __('Box Content 5', "ophelia"),           'setting' => 'circles_box_content_5',         'type' => 'textarea',      'description' => '',            'default' => '',                 'section'     => 'boxhomepage5');  
	  $controls[] = array('label' => __('Box Text 5', "ophelia"),              'setting' => 'circles_text_link_5',            'type' => 'text',         'description' => $buttontext,   'default' => '',                 'section'     => 'boxhomepage5');  
	  $controls[] = array('label' => __('Box Link 5', "ophelia"),              'setting' => 'circles_box_link_5',            'type' => 'text',          'description' => '',            'default' => '',                 'section'     => 'boxhomepage5');  

	  $controls[] = array('label' => __('Box Title 6', "ophelia"),             'setting' => 'circles_box_title_6',           'type' => 'text',          'description' => '',            'default' => '',                 'section'     => 'boxhomepage6');	
	  $controls[] = array('label' => __('Box Image 6', "ophelia"),             'setting' => 'circles_box_image_6',           'type' => 'text',          'description' => $infofont,     'default' => 'home',             'section'     => 'boxhomepage6');  
	  $controls[] = array('label' => __('Box Content 6', "ophelia"),           'setting' => 'circles_box_content_6',         'type' => 'textarea',      'description' => '',            'default' => '',                 'section'     => 'boxhomepage6');  
	  $controls[] = array('label' => __('Box Text 6', "ophelia"),              'setting' => 'circles_text_link_6',            'type' => 'text',         'description' => $buttontext,   'default' => '',                 'section'     => 'boxhomepage6');  
	  $controls[] = array('label' => __('Box Link 6', "ophelia"),              'setting' => 'circles_box_link_6',            'type' => 'text',          'description' => '',  	        'default' => '',                 'section'     => 'boxhomepage6');   

     // Slide 1

	 $controls[] = array('label' => __('Background Slider', "ophelia"),        'setting' => 'background_slider',                  'type' => 'upload',            'description' => '',       'default' => '',                 'section'     => 'slide');	 

	 $controls[] = array('label' => __('Title', 'ophelia'),                    'setting' => 'slider_title_1',                     'type' => 'text',              'default' => $titlemess,          'section' => 'slide1',             'description' => '');
	 $controls[] = array('label' => __('Content of slide', 'ophelia'),         'setting' => 'slider_description1',                'type' => 'textarea',          'default' => '',                  'section' => 'slide1',             'description' => '');
	 $controls[] = array('label' => __('Upload Image', 'ophelia'),             'setting' => 'slider_image_upload1',               'type' => 'upload',            'default' => '',                  'section' => 'slide1',             'description' => __('Upload image for slide', 'ophelia' ));							
	 $controls[] = array('label' => __('Button Text', 'ophelia'),              'setting' => 'slider_button_color_text1',          'type' => 'text',              'default' => $buttontext,         'section' => 'slide1',             'description' => '' );
	 $controls[] = array('label' => __('Button Link', 'ophelia'),              'setting' => 'slider_button_color_link1',          'type' => 'text',              'default' => '',                  'section' => 'slide1',             'description' => '' );

	 $controls[] = array('label' => __('Title', 'ophelia'),                    'setting' => 'slider_title_2',                     'type' => 'text',              'default' => $titlemess,          'section' => 'slide2',             'description' => '');
	 $controls[] = array('label' => __('Content of slide', 'ophelia'),         'setting' => 'slider_description2',                'type' => 'textarea',          'default' => '',                  'section' => 'slide2',             'description' => '');
	 $controls[] = array('label' => __('Upload Image', 'ophelia'),             'setting' => 'slider_image_upload2',               'type' => 'upload',            'default' => '',                  'section' => 'slide2',             'description' => __('Upload image for slide', 'ophelia' ));							
	 $controls[] = array('label' => __('Button Text', 'ophelia'),              'setting' => 'slider_button_color_text2',          'type' => 'text',              'default' => $buttontext,         'section' => 'slide2',             'description' => '' );
	 $controls[] = array('label' => __('Button Link', 'ophelia'),              'setting' => 'slider_button_color_link2',          'type' => 'text',              'default' => '',                  'section' => 'slide2',             'description' => '' );
   
   // Promo
	 $controls[] = array('label' => __( 'Ophelia Promo', 'ophelia' ),                   'setting' => 'custompromo',              'type' => 'promo',                                                'section' => 'promo',              'priority' => 10);
	 	
     return $controls;
}
add_filter( 'kirki/controls', 'ophelia_custom_setting' );

