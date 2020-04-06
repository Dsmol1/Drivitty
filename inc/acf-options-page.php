<?php

  if( function_exists('acf_add_options_page') ) {

   $languages = array( 'en', 'lt' );
   foreach ( $languages as $lang ) {
  	 acf_add_options_page( array(
  		 'page_title' => 'Header (' . strtoupper( $lang ) . ')',
  		 'menu_title' => __('Header (' . strtoupper( $lang ) . ')', 'text-domain'),
  		 'menu_slug'  => "site-options-${lang}",
  		 'post_id'    => $lang
  	 ) );
  	}
  }

 ?>
