<?php



    //Desactivar búsqueda

    function fb_filter_query( $query, $error = true ) {
		if ( is_search() ) {
			$query->is_search = false;
			$query->query_vars[s] = false;
			$query->query[s] = false;

		      	if( $error == true )
				$query->is_404 = true;
			}
    }

	add_action( 'parse_query', 'fb_filter_query' );
	add_filter( 'get_search_form', create_function( '$a', "return null;" ) );


	//Quitar basura cabecera
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wp_generator');
	remove_action('wp_head', 'index_rel_link');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'feed_links_extra', 3);
	remove_action('wp_head', 'start_post_rel_link', 10, 0);
	remove_action('wp_head', 'parent_post_rel_link', 10, 0);
	remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);


	//Forzar SSL en administración
	define('FORCE_SSL_ADMIN', true); 



 

?>
