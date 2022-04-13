<?php

namespace Sparrow\Blocks\PersonBlock;

class PersonBlock {
	public function __construct() {
		add_action( 'acf/init', [ $this, 'register_block' ] );
		$this->register_block_fields();
	}

	public function register_block() {
		if ( function_exists( 'acf_register_block' ) ) {
			acf_register_block( array(
				'name'            => 'person-block',
				'title'           => __( 'Person block', 'sparrow' ),
				'description'     => __( 'A custom block for person.', 'sparrow' ),
				'render_template' => get_template_directory() . '/template-parts/blocks/block-person.php',
				'category'        => 'layout',
				'icon'            => 'excerpt-view',
				'keywords'        => array( 'person' ),
				'enqueue_style'   => get_template_directory_uri() . '/template-parts/blocks/block-person.css',
			) );
		}
	}

	public function register_block_fields() {
		if ( function_exists( 'acf_add_local_field_group' ) ):

			acf_add_local_field_group( array(
				'key'                   => 'group_6225f02e26ab4',
				'title'                 => 'Person block',
				'fields'                => array(
					array(
						'key'               => 'field_6225f04db91e0',
						'label'             => 'Name',
						'name'              => 'name',
						'type'              => 'text',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'default_value'     => '',
						'placeholder'       => '',
						'prepend'           => '',
						'append'            => '',
						'maxlength'         => '',
					),
					array(
						'key'               => 'field_6225f083b91e1',
						'label'             => 'SecondName',
						'name'              => 'second_name',
						'type'              => 'text',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'default_value'     => '',
						'placeholder'       => '',
						'prepend'           => '',
						'append'            => '',
						'maxlength'         => '',
					),
					array(
						'key'               => 'field_6225f0a1b91e2',
						'label'             => 'Link',
						'name'              => 'link',
						'type'              => 'url',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'default_value'     => '',
						'placeholder'       => '',
					),
					array(
						'key'               => 'field_6225f0d8b91e3',
						'label'             => 'Photo',
						'name'              => 'photo',
						'type'              => 'image',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'return_format'     => 'array',
						'preview_size'      => 'medium',
						'library'           => 'all',
						'min_width'         => '',
						'min_height'        => '',
						'min_size'          => '',
						'max_width'         => '',
						'max_height'        => '',
						'max_size'          => '',
						'mime_types'        => '',
					),
				),
				'location'              => array(
					array(
						array(
							'param'    => 'block',
							'operator' => '==',
							'value'    => 'acf/person-block',
						),
					),
				),
				'menu_order'            => 0,
				'position'              => 'normal',
				'style'                 => 'default',
				'label_placement'       => 'top',
				'instruction_placement' => 'label',
				'hide_on_screen'        => '',
				'active'                => true,
				'description'           => '',
				'show_in_rest'          => 0,
			) );

		endif;
	}
}
