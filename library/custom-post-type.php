<?php
/* Bones Custom Post Type Example
This page walks you through creating 
a custom post type and taxonomies. You
can edit this one or copy the following code 
to create another one. 

I put this in a separate file so as to 
keep it organized. I find it easier to edit
and change things if they are concentrated
in their own file.

Developed by: Eddie Machado
URL: http://themble.com/bones/
*/

// Flush rewrite rules for custom post types
add_action('after_switch_theme', 'bones_flush_rewrite_rules');

// Flush your rewrite rules
function bones_flush_rewrite_rules()
{
	flush_rewrite_rules();
}

// let's create the function for the custom type
function custom_post_example()
{

	register_post_type(
		'products',
		array(
			'labels' => array(
				'name' => __('Productos', 'bonestheme'),
				'singular_name' => __('Productos', 'bonestheme'),
				'search_items' => __('Buscar Producto', 'bonestheme'),
				'all_items' => __('Todos los Producto', 'bonestheme'),
			),
			'description' => __('Añadir Producto', 'bonestheme'),
			'public' => true,
			'show_in_rest' => true,
			'rest_base' => 'Productos',
			'menu_position' => 14,
			'menu_icon' => 'dashicons-products',
			'has_archive' => 'productos',
			'show_in_nav_menus' => false,
			'rewrite' => array('slug' => 'productos', 'with_front' => false),
			'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky')
		)
	);
}




// adding the function to the Wordpress init
add_action('init', 'custom_post_example');

/*
	for more information on taxonomies, go here:
	http://codex.wordpress.org/Function_Reference/register_taxonomy
	*/

register_taxonomy(
	'products_cat',
	array('products', 'blog'),
	array(
		'hierarchical' => true,
		'labels' => array(
			'name' => __('Categorías producto', 'bonestheme'),
			'singular_name' => __('Categoría producto', 'bonestheme'),
			'search_items' => __('Buscar Productos', 'bonestheme'),
			'all_items' => __('Todos los Productos', 'bonestheme'),
			'parent_item' => __('Categoría Padre', 'bonestheme'),
			'parent_item_colon' => __('Producto superior:', 'bonestheme'),
			'edit_item' => __('Editar Producto', 'bonestheme'),
			'update_item' => __('Actualizar Articulo', 'bonestheme'),
			'add_new_item' => __('Añadir nuevo Producto', 'bonestheme'),
			'new_item_name' => __('Añadir nuevo Producto', 'bonestheme')
		),
		'show_admin_column' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'categoria-producto'),
		'show_in_rest' => true, // 👈 ESTA ES LA CLAVE PARA GUTENBERG

	)
);


/*
		looking for custom meta boxes?
		check out this fantastic tool:
		https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress
	*/
