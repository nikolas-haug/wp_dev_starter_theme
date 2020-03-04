<?php

function wpdev_social_customizer_section( $wp_customize ){
	// $wp_customize->add_panel('some_panel',array(
    //     'title'=>'Panel1',
    //     'description'=> 'This is panel Description',
    //     'priority'=> 10,
    // ));
    
    
    // $wp_customize->add_section('section',array(
    //     'title'=>'section',
    //     'priority'=>10,
    //     'panel'=>'some_panel',
    // ));
    
    
    // $wp_customize->add_setting('setting_demo',array(
    //     'defaule'=>'a',
    // ));
    
    
    // $wp_customize->add_control('contrl_demo',array(
    //     'label'=>'Text',
    //     'type'=>'text',
    //     'section'=>'section',
    //     'settings'=>'setting_demo',
    // ));
    // $wp_customize->add_setting( 'wpdev_facebook_handle' , [
    //     'default' => ''
    // ]);

    // $wp_customize->add_section( 'wpdev_social_section', [
    //     'title' => __('WP Dev Social Settings', 'wp_dev_theme'),
    //     'priority' => 30
    // ]);

    // $wp_customize->add_control(new WP_Customize_Control(
    //     $wp_customize,
    //     'wpdev_social_facebook_input',
    //     array(
    //         'label' => __('Facebook Handle', 'wp_dev_theme'),
    //         'section' => 'wpdev_social_section',
    //         'settings' => 'wpdev_facebook_handle',
    //         'type' => 'text'
    //     )
    // ));
    $wp_customize->add_setting( 'wpdev_facebook_handle', array(
		'default'                   =>  '',
	));

	$wp_customize->add_setting( 'wpdev_twitter_handle', array(
		'default'                   =>  '',
	));

	$wp_customize->add_setting( 'wpdev_instagram_handle', array(
		'default'                   =>  '',
	));

	$wp_customize->add_setting( 'wpdev_email', array(
		'default'                   =>  '',
	));

	$wp_customize->add_setting( 'wpdev_phone_number', array(
		'default'                   =>  '',
	));

	$wp_customize->add_section( 'wpdev_social_section', array(
		'title'                     =>  __( 'WP Dev Social Settings', 'wp_dev_theme' ),
		'priority'                  =>  30,
		'panel' 					=> 'wpdev'
	));

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'wpdev_social_facebook_input',
		array(
			'label'                 =>  __( 'Facebook Handle', 'wp_dev_theme' ),
			'section'               => 'wpdev_social_section',
			'settings'              => 'wpdev_facebook_handle',
			'type'                  =>  'text'
		)
	));

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'wpdev_social_twitter_input',
		array(
			'label'                 =>  __( 'Twitter Handle', 'wp_dev_theme' ),
			'section'               => 'wpdev_social_section',
			'settings'              => 'wpdev_twitter_handle',
			'type'                  =>  'text'
		)
	));

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'wpdev_social_instagram_input',
		array(
			'label'                 =>  __( 'Instagram Handle', 'wp_dev_theme' ),
			'section'               => 'wpdev_social_section',
			'settings'              => 'wpdev_instagram_handle',
			'type'                  =>  'text'
		)
	));

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'wpdev_social_email_input',
		array(
			'label'                 =>  __( 'Email', 'wp_dev_theme' ),
			'section'               => 'wpdev_social_section',
			'settings'              => 'wpdev_email',
			'type'                  =>  'text'
		)
	));

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'wpdev_social_phone_number_input',
		array(
			'label'                 =>  __( 'Phone Number', 'wp_dev_theme' ),
			'section'               => 'wpdev_social_section',
			'settings'              => 'wpdev_phone_number',
			'type'                  =>  'text'
		)
    ));
}