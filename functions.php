<?php

function upload_allow_types( $mimes ) {
	// разрешаем новые типы
	$mimes['svg']  = 'text/plain'; // image/svg+xml
	$mimes['svg'] = 'image/svg+xml';
	$mimes['doc']  = 'application/msword'; 
	$mimes['woff'] = 'font/woff';
	$mimes['psd']  = 'image/vnd.adobe.photoshop'; 
	$mimes['djv']  = 'image/vnd.djvu';
	$mimes['djvu'] = 'image/vnd.djvu';

	return $mimes;
}
add_filter( 'upload_mimes', 'upload_allow_types' );

function webp_upload_mimes( $existing_mimes ) {
	// add webp to the list of mime types
	$existing_mimes['webp'] = 'image/webp';

	// return the array back to the function with our added mime type
	return $existing_mimes;
}
add_filter( 'mime_types', 'webp_upload_mimes' );



function onwp_disable_content_editor() {
	$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
	if( !isset( $post_id ) ) return;
	$template_file = get_post_meta($post_id, '_wp_page_template', true);
			if ( $template_file == 'polis.php' ) {
			remove_post_type_support( 'page', 'editor' );
			} elseif ( $template_file == 'home.php' ){
				remove_post_type_support( 'page', 'editor' );
			} elseif($template_file == 'singular.php'){
				remove_post_type_support( 'page', 'editor' );
			} 
	}
add_action( 'admin_init', 'onwp_disable_content_editor');


add_action('admin_menu', 'remove_admin_menu');
function remove_admin_menu() {
	remove_menu_page('edit.php'); // Посты блога
	remove_menu_page('edit-comments.php'); // Комментарии	

}


function showCurrentLangAtt($langVal, $currentSwitch){
	$translations = pll_the_languages(array('raw'=>1)); 
	if (!$currentSwitch){
			if ($translations['uk']['current_lang']){
					return $translations['uk'][$langVal];
			} elseif ($translations['en']['current_lang']){
					return $translations['en'][$langVal];
			} elseif ($translations['ru']['current_lang']){
				return $translations['ru'][$langVal];
		}; 
	} else {
			if (!$translations['uk']['current_lang']){
					return $translations['uk'][$langVal];
			} elseif (!$translations['en']['current_lang']){
					return $translations['en'][$langVal]; 
				} elseif (!$translations['ru']['current_lang']){
						return $translations['ru'][$langVal];
			};   
	}
}

function show_translate() {
	$translations = pll_the_languages(array('raw'=>1)); 

	if ($translations['uk']['current_lang']){
		return array($translations['en']['url'], $translations['en']['url'], $translations['ru']['url']);
	};

	if ($translations['en']['current_lang']){
		 return array($translations['en']['url'], $translations['uk']['url'], $translations['ru']['url']);
	}; 

	if ($translations['ru']['current_lang']){
		return array($translations['en']['url'], $translations['uk']['url'], $translations['ru']['url']);
 };
	
}

function translateRuUaEn($ru, $ua, $en) {
$translations = pll_the_languages(array('raw'=>1));

if ($translations['uk']['current_lang']){
	return $ua;
};

if ($translations['en']['current_lang']){
	 return $en;
};

if ($translations['ru']['current_lang']){
	return $ru;
};
}


	add_filter( 'excerpt_length', function(){
		return 19;
	} );
	
	add_filter( 'excerpt_more', 'new_excerpt_more' );
	function new_excerpt_more( $more ){
		global $post;
		return '<span>...</span>';
	};

	function get_nav_link($link) {
		return get_site_url().'/'.translateRusUaEn($link, 'uk/'.$link.'-uk', 'en/'.$link.'-en').'/';
	};
      
?>
