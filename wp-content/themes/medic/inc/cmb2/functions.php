<?php

add_action( 'cmb2_admin_init', 'cmb2_function' );

function cmb2_function() {
   $medic_opt = new_cmb2_box(array(
      'id'            => 'slider_opt',
		'title'         => 'Slider Options',
		'object_types'  => array( 'slider')
   ));

   $medic_opt->add_field( array(
		'name'       => 'Button Text',
		'id'         => 'slider_btn',
		'type'       => 'text',
      'default'          => 'Explore'
	) );

   $medic_opt->add_field( array(
		'name'       => 'Button URL',
		'id'         => 'slider_btn_url',
		'type'       => 'text_url',
      'default'    => '#' 
	) );

   $medic_opt->add_field( array(
		'name'       => 'Content Position',
		'id'         => 's_content_position',
		'type'       => 'select',
      
      'desc'       => 'Please Select your slider content position',
      'options'          => array(
         'center' => 'Position Center',
         'left'   => 'Position Left',
         'right'  => 'Position Right',
      ),
	) );



}




?>