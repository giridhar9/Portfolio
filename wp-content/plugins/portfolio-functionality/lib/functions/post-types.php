<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...
function register_project() {

	$labels = array(
		'name'                => 'Projects',
		'singular_name'       => 'Project',
		'menu_name'           => 'Projects',
		'name_admin_bar'      => 'project post type',
		'parent_item_colon'   => 'Parent Project:',
		'all_items'           => 'All Projects',
		'add_new_item'        => 'Add New Project',
		'add_new'             => 'New Project',
		'new_item'            => 'New Item',
		'edit_item'           => 'Edit Project',
		'update_item'         => 'Update Project',
		'view_item'           => 'View Project',
		'search_items'        => 'Search Projects',
		'not_found'           => 'No projects found',
		'not_found_in_trash'  => 'No projects found in Trash',
	);
	$args = array(
		'label'               => 'Project',
		'description'         => 'Post type descrption',
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'comments', 'custom-fields', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => 'work',		
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'projects', $args );

}
add_action( 'init', 'register_project', 0 );

function register_skills() {

	$labels = array(
		'name'                => 'Skills',
		'singular_name'       => 'skill',
		'menu_name'           => 'Skills',
		'name_admin_bar'      => 'skills post type',
		'parent_item_colon'   => 'Parent Skill:',
		'all_items'           => 'All Skills',
		'add_new_item'        => 'Add New Skill',
		'add_new'             => 'New Skill',
		'new_item'            => 'New Item',
		'edit_item'           => 'Edit Skill',
		'update_item'         => 'Update Skill',
		'view_item'           => 'View Skill',
		'search_items'        => 'Search Skills',
		'not_found'           => 'No Skills found',
		'not_found_in_trash'  => 'No skills found in Trash',
	);
	$args = array(
		'label'               => 'Skill',
		'description'         => 'Post type descrption',
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'comments', 'custom-fields', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => 'work',		
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'skills', $args );

}
add_action( 'init', 'register_skills', 0 );

function register_softwares() {

	$labels = array(
		'name'                => 'Softwares',
		'singular_name'       => 'Software',
		'menu_name'           => 'Softwares',
		'name_admin_bar'      => 'Softwares post type',
		'parent_item_colon'   => 'Parent Software:',
		'all_items'           => 'All Softwares',
		'add_new_item'        => 'Add New Software',
		'add_new'             => 'New Software',
		'new_item'            => 'New Item',
		'edit_item'           => 'Edit Software',
		'update_item'         => 'Update Software',
		'view_item'           => 'View Software',
		'search_items'        => 'Search Softwares',
		'not_found'           => 'No Softwares found',
		'not_found_in_trash'  => 'No Softwares found in Trash',
	);
	$args = array(
		'label'               => 'Software',
		'description'         => 'Post type descrption',
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'comments', 'custom-fields', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => 'work',		
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'softwares', $args );

}
add_action( 'init', 'register_softwares', 0 );