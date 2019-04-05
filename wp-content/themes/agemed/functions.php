<?php
/**
 * Agemed engine room
 *
 * @package agemed
 */

/**
 * Assign the Storefront version to a var
 */
$theme = wp_get_theme( 'agemed' );
$agemed_version = $theme['Version'];

$agemed = (object) array(
	'version' => $agemed_version,

	/**
	 * Initialize all the things.
	 */
	'main' => require 'inc/class-agemed.php',
);

// function remove_menus(){
// 	remove_menu_page( 'index.php' );                  //Dashboard
// 	remove_menu_page( 'upload.php' );                 //Media
// 	remove_menu_page( 'edit.php?post_type=page' );    //Pages
// 	remove_menu_page( 'edit-comments.php' );          //Comments
// 	remove_menu_page( 'themes.php' );                 //Appearance
// 	remove_menu_page( 'plugins.php' );                //Plugins
// 	remove_menu_page( 'tools.php' );                  //Tools
// 	remove_menu_page( 'options-general.php' );        //Settings
//   }
//   add_action( 'admin_menu', 'remove_menus' );

// add_action( 'init', 'codex_tarefas_init' );
/**
 * Register a tarefas post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
// function codex_tarefas_init() {
// 	$labels = array(
// 		'name' => _x( 'Tarefas', 'post type general name', 'agemed' ),
// 		'singular_name' => _x( 'Tarefa', 'post type singular name', 'agemed' ),
// 		'menu_name' => _x( 'Tarefas', 'admin menu', 'agemed' ),
// 		'name_admin_bar' => _x( 'Tarefa', 'add new on admin bar', 'agemed' ),
// 		'add_new' => _x( 'Adicionar nova', 'tarefa', 'agemed' ),
// 		'add_new_item' => __( 'Adicionar nova tarefa', 'agemed' ),
// 		'new_item' => __( 'Nova tarefa', 'agemed' ),
// 		'edit_item' => __( 'Editar tarefa', 'agemed' ),
// 		'view_item' => __( 'Ver tarefa', 'agemed' ),
// 		'all_items' => __( 'Todas as tarefas', 'agemed' ),
// 		'search_items' => __( 'Pesquisar tarefas', 'agemed' ),
// 		'parent_item_colon' => __( 'Tarefas ascendentes:', 'agemed' ),
// 		'not_found' => __( 'Nenhuma tarefa encontrada.', 'agemed' ),
// 		'not_found_in_trash' => __( 'Nenhuma tarefa encontrada na lixeira.', 'agemed' ),
// 	);

// 	$args = array(
// 		'labels' => $labels,
// 		'description' => __( 'Description.', 'agemed' ),
// 		'public' => true,
// 		'publicly_queryable' => true,
// 		'show_ui' => true,
// 		'show_in_menu' => true,
// 		'query_var' => true,
// 		'rewrite' => array( 'slug' => 'tarefa' ),
// 		'menu_icon' => 'dashicons-exerpt-view',
// 		'capability_type' => 'post',
// 		'has_archive' => true,
// 		'hierarchical' => false,
// 		'menu_position' => null,
// 		'supports' => array( 'title', 'editor' ),
// 		'show_in_rest' => true,
// 	);

// 	register_post_type( 'tarefas', $args );
// }

add_action( 'init', 'codex_atividades_init' );
/**
 * Register a board post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function codex_atividades_init() {
	$labels = array(
		'name' => _x( 'Atividades', 'post type general name', 'agemed' ),
		'singular_name' => _x( 'Atividade', 'post type singular name', 'agemed' ),
		'menu_name' => _x( 'Atividades', 'admin menu', 'agemed' ),
		'name_admin_bar' => _x( 'Atividade', 'add new on admin bar', 'agemed' ),
		'add_new' => _x( 'Adicionar nova', 'atividade', 'agemed' ),
		'add_new_item' => __( 'Adicionar nova atividade', 'agemed' ),
		'new_item' => __( 'Nova atividade', 'agemed' ),
		'edit_item' => __( 'Editar atividade', 'agemed' ),
		'view_item' => __( 'Ver atividade', 'agemed' ),
		'all_items' => __( 'Todas as atividades', 'agemed' ),
		'search_items' => __( 'Pesquisar atividades', 'agemed' ),
		'parent_item_colon' => __( 'Atividades ascendentes:', 'agemed' ),
		'not_found' => __( 'Nenhuma atividade encontrada.', 'agemed' ),
		'not_found_in_trash' => __( 'Nenhuma atividade encontrada na lixeira.', 'agemed' ),
	);

	$args = array(
		'labels' => $labels,
		'description' => __( 'Description.', 'agemed' ),
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'atividade' ),
		'menu_icon' => 'dashicons-list-view',
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array( 'title', 'editor' ),
		'show_in_rest' => true,
	);

	register_post_type( 'atividades', $args );
}

add_action( 'init', 'codex_notificacoes_init' );
/**
 * Register a board post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function codex_notificacoes_init() {
	$labels = array(
		'name' => _x( 'Notificações', 'post type general name', 'agemed' ),
		'singular_name' => _x( 'Notificação', 'post type singular name', 'agemed' ),
		'menu_name' => _x( 'Notificações', 'admin menu', 'agemed' ),
		'name_admin_bar' => _x( 'Notificação', 'add new on admin bar', 'agemed' ),
		'add_new' => _x( 'Adicionar nova', 'notificação', 'agemed' ),
		'add_new_item' => __( 'Adicionar nova notificação', 'agemed' ),
		'new_item' => __( 'Nova notificação', 'agemed' ),
		'edit_item' => __( 'Editar notificação', 'agemed' ),
		'view_item' => __( 'Ver notificação', 'agemed' ),
		'all_items' => __( 'Todas as notificações', 'agemed' ),
		'search_items' => __( 'Pesquisar notificações', 'agemed' ),
		'parent_item_colon' => __( 'Notificações ascendentes:', 'agemed' ),
		'not_found' => __( 'Nenhuma notificação encontrada.', 'agemed' ),
		'not_found_in_trash' => __( 'Nenhuma notificação encontrada na lixeira.', 'agemed' ),
	);

	$args = array(
		'labels' => $labels,
		'description' => __( 'Description.', 'agemed' ),
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'notificacao' ),
		'menu_icon' => 'dashicons-rss',
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array( 'title', 'editor' ),
		'show_in_rest' => true,
	);

	register_post_type( 'notificacoes', $args );
}

// function agemed_register_board_meta() {
// 	register_rest_field( 'boards',
// 		'tasks',
// 		array(
// 			'get_callback' => 'agemed_get_board_meta',
// 			'update_callback' => 'agemed_update_board_meta',
// 			'schema' => array( 'tasks' => 'The IDs of tasks.' ),
// 		)
// 	);
// }

// function agemed_get_board_meta( $board, $meta, $request ) {
// 	if ( 'tasks' === $meta ) {
// 		$meta = 'tarefas';
// 	}
// 	return get_post_meta( $board['id'], $meta , true );
// }

// function agemed_update_board_meta( $value, $board, $meta ) {
// 	if ( 'tasks' === $meta ) {
// 		$meta = 'tarefas';
// 	}
// 	return update_post_meta( $board->ID, $meta, wp_slash( $value ) );
// }
// add_action( 'rest_api_init', 'agemed_register_board_meta' );

// 
// 

// add_action( 'init', 'codex_solicitacoes_init' );
// /**
//  * Register solicitação post type.
//  *
//  * @link http://codex.wordpress.org/Function_Reference/register_post_type
//  */
// function codex_solicitacoes_init() {
// 	$labels = array(
// 		'name' => _x( 'Solicitações', 'post type general name', 'agemed' ),
// 		'singular_name' => _x( 'Solicitação', 'post type singular name', 'agemed' ),
// 		'menu_name' => _x( 'Solicitações', 'admin menu', 'agemed' ),
// 		'name_admin_bar' => _x( 'Solicitação', 'add new on admin bar', 'agemed' ),
// 		'add_new' => _x( 'Adicionar Solicitação', 'solicitacao', 'agemed' ),
// 		'add_new_item' => __( 'Adicionar Solicitação', 'agemed' ),
// 		'new_item' => __( 'Nova Solicitação', 'agemed' ),
// 		'edit_item' => __( 'Editar Solicitação', 'agemed' ),
// 		'view_item' => __( 'Ver Solicitação', 'agemed' ),
// 		'all_items' => __( 'Todas os Solicitações', 'agemed' ),
// 		'search_items' => __( 'Pesquisar Solicitações', 'agemed' ),
// 		'parent_item_colon' => __( 'Solicitações ascendentes:', 'agemed' ),
// 		'not_found' => __( 'Nenhuma Solicitação encontrado.', 'agemed' ),
// 		'not_found_in_trash' => __( 'Nenhuma Solicitação encontrado na lixeira.', 'agemed' ),
// 	);

// 	$args = array(
// 		'labels' => $labels,
// 		'description' => __( 'Description.', 'agemed' ),
// 		'public' => true,
// 		'publicly_queryable' => true,
// 		'show_ui' => true,
// 		'show_in_menu' => true,
// 		'query_var' => true,
// 		'rewrite' => array( 'slug' => 'solicitacoes' ),
// 		'menu_icon' => 'dashicons-feedback',
// 		'capability_type' => 'post',
// 		'has_archive' => true,
// 		'hierarchical' => false,
// 		'menu_position' => null,
// 		'supports' => array( 'title', 'thumbnail' ),
// 		'show_in_rest' => true,
// 	);

// 	register_post_type( 'solicitacoes', $args );
// }

// 
// 

add_action( 'init', 'codex_board_list_init' );
/**
 * Register board_list post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function codex_board_list_init() {
	$labels = array(
		'name' => _x( 'Boards', 'post type general name', 'agemed' ),
		'singular_name' => _x( 'Board', 'post type singular name', 'agemed' ),
		'menu_name' => _x( 'Boards', 'admin menu', 'agemed' ),
		'name_admin_bar' => _x( 'Board', 'add new on admin bar', 'agemed' ),
		'add_new' => _x( 'Adicionar Board', 'board_list', 'agemed' ),
		'add_new_item' => __( 'Adicionar Board', 'agemed' ),
		'new_item' => __( 'Novo Board', 'agemed' ),
		'edit_item' => __( 'Editar Board', 'agemed' ),
		'view_item' => __( 'Ver Board', 'agemed' ),
		'all_items' => __( 'Todas os Boards', 'agemed' ),
		'search_items' => __( 'Pesquisar Boards', 'agemed' ),
		'parent_item_colon' => __( 'Boards ascendentes:', 'agemed' ),
		'not_found' => __( 'Nenhum Board encontrado.', 'agemed' ),
		'not_found_in_trash' => __( 'Nenhum Board encontrado na lixeira.', 'agemed' ),
	);

	$args = array(
		'labels' => $labels,
		'description' => __( 'Description.', 'agemed' ),
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'board_list' ),
		'menu_icon' => 'dashicons-feedback',
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array( 'title', 'thumbnail' ),
		'show_in_rest' => true,
	);

	register_post_type( 'board_list', $args );
}

// 
// 


$user = wp_get_current_user();
$subscriber = in_array( 'subscriber', (array) $user->roles );
$contributor = in_array( 'contributor', (array) $user->roles );
$author = in_array( 'author', (array) $user->roles );

if ( $subscriber ) {

	function slug_add_post_data() {
		register_api_field('user',
			'boards_list',
			array(
				'get_callback' => 'get_boards_list',
				'schema' => 
					array(
							'description' => 'Lista de solicitações criadas pelo usuário',
							'type' => 'string',
							'context' => array('view', 'edit')
						)
			)
		);
	}
	add_action('rest_api_init', 'slug_add_post_data');
	
	function get_boards_list(){

		$ids = get_posts(array(
			'post_type' => 'board_list',
			'post_status' => 'publish',
			'fields'          => 'ids',
			'posts_per_page'  => -1
		));
		
		$id_list = [];

		foreach ($ids as $val) {
			$id_list[] = get_post($val)->post_title;
		}

		$arr = array_diff($id_list, array('Jobs Abertos', 'Jobs em Andamento', 'Jobs em Standby', 'Jobs Parados', 'Jobs Concluídos'));

		return $arr;

	}

} else if ( $contributor ) {
	function slug_add_post_data() {
		register_api_field('user',
			'boards_list',
			array(
				'get_callback' => 'get_boards_list',
				'schema' => 
					array(
							'description' => 'Lista de solicitações criadas pelo usuário',
							'type' => 'string',
							'context' => array('view', 'edit')
						)
			)
		);
	}
	add_action('rest_api_init', 'slug_add_post_data');
	
	function get_boards_list(){
		$ids = get_posts(array(
			'post_type' => 'board_list',
			'post_status' => 'publish',
			'fields'          => 'ids',
			'posts_per_page'  => -1
		));
		
		$id_list = [];
		
		foreach ($ids as $val) {
			$id_list[] = get_post($val)->post_title;
		}
		
		$arr = array_diff($id_list, array('Solicitações Abertas', 'Solicitações Concluídas'));

		return $arr;
	}
} else if ( $author ) {
	function slug_add_post_data() {
		register_api_field('user',
			'boards_list',
			array(
				'get_callback' => 'get_boards_list',
				'schema' => 
					array(
							'description' => 'Lista de boards',
							'type' => 'string',
							'context' => array('view', 'edit')
						)
			)
		);
	}
	add_action('rest_api_init', 'slug_add_post_data');
	
	function get_boards_list(){
		$ids = get_posts(array(
			'post_type' => 'board_list',
			'post_status' => 'publish',
			'fields'          => 'ids',
			'posts_per_page'  => -1
		));
		$id_list = [];
		foreach ($ids as $val) {
			$id_list[] = get_post($val)->post_title;
		}

		return $id_list;
	}	
} else {
	function slug_add_post_data() {
		register_api_field('user',
			'boards_list',
			array(
				'get_callback' => 'get_boards_list',
				'schema' => 
					array(
							'description' => 'Lista de boards',
							'type' => 'string',
							'context' => array('view', 'edit')
						)
			)
		);
	}
	add_action('rest_api_init', 'slug_add_post_data');
	
	function get_boards_list(){
		$ids = get_posts(array(
			'post_type' => 'board_list',
			'post_status' => 'publish',
			'fields'          => 'ids',
			'posts_per_page'  => -1
		));
		$id_list = [];
		foreach ($ids as $val) {
			$id_list[] = get_post($val)->post_title;
		}
		array_push($id_list,'default');
		return $id_list;
	}
}

// Remover Foto do perfil

add_action('wp_ajax_removePhoto', 'removePhoto');
add_action('wp_ajax_nopriv_removePhoto', 'removePhoto');

function removePhoto($data) {
  $field_key = 'field_5b5dba46c66e9';
  $value = '';
  $post_id = '137';

  $field = get_field_object($field_key,5);
  
  return $field;

  exit;
};

add_action( "rest_api_init", function () {
	// (?P<id>[\\d]+)/?(?P<field>[\\w\\-\\_]+)
	register_rest_route( "wp/v2", "/remove-photo/(?P<field_key>[-\w]+)/(?P<value>[-\w]+)/(?P<post_id>\d+)", array(
	  "methods" => "POST",
	  "callback" => "removePhoto",
	) );
} );

// Remover Foto do Perfil