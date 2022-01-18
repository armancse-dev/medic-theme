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

   //services
   $medic_opt = new_cmb2_box(array(
      'id'            => 'medic_service',
		'title'         => 'Service Options',
		'object_types'  => array( 'services')
   ));

   $medic_opt->add_field( array(
		'name'       => 'Service Title',
		'id'         => 's_title',
		'type'       => 'text',
      'default'     => 'dormitory'
	) );

   $medic_opt->add_field( array(
		'name'       => 'Service Sub Title',
		'id'         => 's_sub_title',
		'type'       => 'text',
      'default'     => '>Better Service At Low Cost'
	) );


   $medic_opt->add_field( array(
		'name'       => 'Service Tab ID',
		'id'         => 's_tab_id',
		'type'       => 'text',
      'default'    => 'ID1',
      'desc'       => 'Please change the ID per Service'
	) );

   $medic_opt->add_field( array(
		'name'       => 'Service Image',
		'id'         => 's_img',
		'type'       => 'file',
      'options'    => array(
         'url' => false
      ),
      'text' => array(
         'add_upload_file_text' => 'Upload Service Image'
      )
	) );

   $medic_opt->add_field( array(
		'name'       => 'Service Description',
		'id'         => 's_description',
		'type'       => 'wysiwyg',
      'default'   => '
      <p>The implant fixture is first placed, so that it ilikely to osseointegrate, then a dental prosthetic is added. then a
                                             dental prosthetic is added.then a dental pros- thetic is added.</p>
                                             <ul class="content-list">
                                             <li>
                                                 <i class="fa fa-dot-circle-o"></i>Whitening is among the most popular dental</li>
                                             <li>
                                                 <i class="fa fa-dot-circle-o"></i>Teeth cleaning is part of oral hygiene and involves</li>
                                             <li>
                                                 <i class="fa fa-dot-circle-o"></i>Teeth cleaning is part of oral hygiene and involves</li>
                                         </ul>
      '
      
      
	) );

   $medic_opt->add_field( array(
		'name'       => 'Service Button URL',
		'id'         => 's_btn',
		'type'       => 'text_url',
      'default'    => '#'
     
	) );



}




?>