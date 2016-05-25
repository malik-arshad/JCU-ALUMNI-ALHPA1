<?php
function tribute_themes_customizer($wp_customize) {
$wp_customize->add_section(
    'theme_setting_section',
    array(
        'title' => __( 'Themes Settings', 'tribute'),
        'description' => esc_html__('This is a Themes Settings section.', 'tribute'),
        'priority' => 35,
    )
);
$wp_customize->add_setting(
'copyright_textbox',
array(
				'default' => '',
				'sanitize_callback' => 'sanitize_text_field',
				'transport'   => 'refresh',

			)
);
$wp_customize->add_control(
'copyright_textbox',
array(
    'label' =>__('Copyright text', 'tribute'),
    'section' => 'theme_setting_section',
    'type' => 'text',
)
);

$wp_customize->add_setting(
'hide_copyright', array(
				'default' => '',
				'sanitize_callback' => 'sanitize_text_field',
				'transport'   => 'refresh',

			)
);

$wp_customize->add_control(
'hide_copyright',
array(
    'type' => 'checkbox',
    'label' =>__('Hide copyright text', 'tribute'),
    'section' => 'theme_setting_section',
)
);

$wp_customize->add_setting(
'logo_placement',
array(
				'default' => '',
				'sanitize_callback' => 'sanitize_text_field',
				'transport'   => 'refresh',

			)
);
 
$wp_customize->add_control(
'logo_placement',
array(
    'type' => 'radio',
    'label' =>__('Logo placement', 'tribute'),
    'section' => 'theme_setting_section',
    'choices' => array(
        'left' => esc_html__('Left', 'tribute'),
        'right' => esc_html__('Right', 'tribute'),
        'center' => esc_html__('Center', 'tribute'),
    ),
)
);

$wp_customize->add_setting(
'color-setting',
array(
    'default' => '#da4453',
    'sanitize_callback' => 'sanitize_hex_color',
)
);

$wp_customize->add_control(
new WP_Customize_Color_Control(
    $wp_customize,
    'color-setting',
    array(
        'label' =>__('Theme Color Setting', 'tribute'),
        'section' => 'theme_setting_section',
        'settings' => 'color-setting',
    )
)
);

$wp_customize->add_setting(
'bgcolor-setting',
array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color',
)
);

$wp_customize->add_control(
new WP_Customize_Color_Control(
    $wp_customize,
    'bgcolor-setting',
    array(
        'label' =>__('Background Color Setting', 'tribute'),
        'section' => 'theme_setting_section',
        'settings' => 'bgcolor-setting',
    )
)
);

$wp_customize->add_setting('bgimg-upload',array(
				'default' => '',
				'sanitize_callback' => 'esc_url_raw',
				'transport'   => 'refresh',

			) );
 
$wp_customize->add_control(
new WP_Customize_Upload_Control(
    $wp_customize,
    'bgimg-upload',
    array(
        'label' =>__('Banner Image Change', 'tribute'),
        'section' => 'theme_setting_section',
        'settings' => 'bgimg-upload'
    )
)
);

$wp_customize->add_setting(
'banner_title',array(
				'default' => 'Free Responsive WordPress Theme',
				'sanitize_callback' => 'sanitize_text_field',
				'transport'   => 'refresh',
			)
);
$wp_customize->add_control(
'banner_title',
array(
    'type' => 'text',
    'label' =>__('Banner Title', 'tribute'),
    'section' => 'theme_setting_section',
)
);

$wp_customize->add_setting(
'banner_text',array(
				'default' => 'Tribute is a free WordPress theme for blogs that are designed to have beautiful typography.',
				'sanitize_callback' => 'sanitize_text_field',
				'transport'   => 'refresh',

			)
);

$wp_customize->add_control(
'banner_text',
array(
    'type' => 'textarea',
    'label' =>__('Banner Text', 'tribute'),
    'section' => 'theme_setting_section',
)
);


$wp_customize->add_setting(
			'logo-upload',
			array(
				'default' => '',
				'sanitize_callback' => 'esc_url_raw',
				'transport'   => 'refresh',

			)
		);
 
$wp_customize->add_control(
new WP_Customize_Image_Control(
    $wp_customize,
    'logo-upload',
    array(
        'label' =>__('Logo Upload', 'tribute'),
        'section' => 'theme_setting_section',
        'settings' => 'logo-upload'
    )
)
);
}
add_action('customize_register', 'tribute_themes_customizer');
?>