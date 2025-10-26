<?php

// Register Kirki panel
new \Kirki\Panel(
	'insurez_panel',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Insurez Options', 'insurez' ),
		'description' => esc_html__( 'Insurez options finds here!', 'insurez' ),
	]
);

function top_header_section(){
	new \Kirki\Section(
		'insurez_header',
		[
			'title'       => esc_html__( 'Top header options', 'insurez' ),
			'description' => esc_html__( 'Top header options are here.', 'insurez' ),
			'panel'       => 'insurez_panel',
			'priority'    => 160,
		]
	);
	
	new \Kirki\Field\Text(
		[
			'settings' => 'top_header_motto',
			'label'    => esc_html__( 'Motto', 'insurez' ),
			'section'  => 'insurez_header',
			'default'  => esc_html__( 'Welcome to our Insurez company', 'insurez' ),
			'priority' => 10,
		]
	);
	
	new \Kirki\Field\Text(
		[
			'settings' => 'top_header_address',
			'label'    => esc_html__( 'Address', 'insurez' ),
			'section'  => 'insurez_header',
			'default'  => esc_html__( ' 66 Broklyne Golden Street, USA', 'insurez' ),
			'priority' => 10,
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'top_header_address_link',
			'label'    => esc_html__( 'Address Link', 'insurez' ),
			'section'  => 'insurez_header',
			'default'  => esc_html__( '#', 'insurez' ),
			'priority' => 10,
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'top_header_email',
			'label'    => esc_html__( 'Email', 'insurez' ),
			'section'  => 'insurez_header',
			'default'  => esc_html__( ' needhelp@company.com', 'insurez' ),
			'priority' => 10,
		]
	);
}
top_header_section();

function company_social_section(){
  new \Kirki\Section(
    'insurez_company_social',
		[
			'title'       => esc_html__( 'Company Social Options', 'insurez' ),
			'description' => esc_html__( 'Company social options are here.', 'insurez' ),
			'panel'       => 'insurez_panel',
			'priority'    => 160,
		]
  );
	new \Kirki\Field\Text(
		[
			'settings' => 'company_social_facebook',
			'label'    => esc_html__( 'Facebook', 'insurez' ),
			'section'  => 'insurez_company_social',
			'default'  => esc_html__( '#', 'insurez' ),
			'priority' => 10,
		]
	);

  new \Kirki\Field\Text(
		[
			'settings' => 'company_social_twitter',
			'label'    => esc_html__( 'Twitter', 'insurez' ),
			'section'  => 'insurez_company_social',
			'default'  => esc_html__( '#', 'insurez' ),
			'priority' => 10,
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'company_social_youtube',
			'label'    => esc_html__( 'YouTube', 'insurez' ),
			'section'  => 'insurez_company_social',
			'default'  => esc_html__( '#', 'insurez' ),
			'priority' => 10,
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'company_social_linkedin',
			'label'    => esc_html__( 'Linkedin', 'insurez' ),
			'section'  => 'insurez_company_social',
			'default'  => esc_html__( '#', 'insurez' ),
			'priority' => 10,
		]
	);
}
company_social_section();

function header_logo(){
	new \Kirki\Section(
		'insurez_header_logo',
		[
			'title'       => esc_html__( 'Header Logo & CTA', 'insurez' ),
			'description' => esc_html__( 'Header Logo & CTA options are here.', 'insurez' ),
			'panel'       => 'insurez_panel',
			'priority'    => 160,
		]
	);
	
	new \Kirki\Field\Image(
		[
			'settings' => 'header_logo',
			'label'    => esc_html__( 'Logo', 'insurez' ),
			'section'  => 'insurez_header_logo',
			'default'  => esc_html__( get_template_directory_uri() . '/assets/img/logo/logo.png', 'insurez' ),
			'priority' => 10,
		]
	);

	new \Kirki\Field\Image(
		[
			'settings' => 'header_logo_black',
			'label'    => esc_html__( 'Black Logo', 'insurez' ),
			'section'  => 'insurez_header_logo',
			'default'  => esc_html__( get_template_directory_uri() . '/assets/img/logo/logo-black.png', 'insurez' ),
			'priority' => 10,
		]
	);

  new \Kirki\Field\Text(
		[
			'settings' => 'header_phone_text',
			'label'    => esc_html__( 'Phone Text', 'insurez' ),
			'section'  => 'insurez_header_logo',
			'default'  => esc_html__( '+98 656 768 6789', 'insurez' ),
			'priority' => 10,
		]
	);

  new \Kirki\Field\Text(
		[
			'settings' => 'header_cta_button_text',
			'label'    => esc_html__( 'CTA Button Text', 'insurez' ),
			'section'  => 'insurez_header_logo',
			'default'  => esc_html__( 'Get a Quote', 'insurez' ),
			'priority' => 10,
		]
	);

  new \Kirki\Field\Text(
		[
			'settings' => 'header_cta_button_url',
			'label'    => esc_html__( 'CTA Button URL', 'insurez' ),
			'section'  => 'insurez_header_logo',
			'default'  => esc_html__( '#', 'insurez' ),
			'priority' => 10,
		]
	);
}
header_logo();

function footer_section(){
  new \Kirki\Section(
    'insurez_footer',
    [
      'title'       => esc_html__( 'Footer Options', 'insurez' ),
      'description' => esc_html__( 'Footer options are here.', 'insurez' ),
      'panel'       => 'insurez_panel',
      'priority'    => 160,
    ]
  );
  
  new \Kirki\Field\Textarea(
    [
      'settings' => 'footer_copyright_text',
      'label'    => esc_html__( 'Copyright Text', 'insurez' ),
      'section'  => 'insurez_footer',
      'default'  => esc_html__( '© Copyright 2023, Insurez. All Rights Reserved', 'insurez' ),
      'priority' => 10,
    ]
  );
}
footer_section();