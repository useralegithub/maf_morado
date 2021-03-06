<?php
add_theme_support( 'menus' );
if ( function_exists( 'add_theme_support' ) ) add_theme_support( 'post-thumbnails' );

function cpt_gral() {

$ctp_prensa_labels = array(
                        'name'                => _x( 'Prensas', 'Post Type General Name', 'text_domain' ),
                        'singular_name'       => _x( 'Prensa', 'Post Type Singular Name', 'text_domain' ),
                        'menu_name'           => __( 'Prensa', 'text_domain' ),
                        'name_admin_bar'      => __( 'Prensa', 'text_domain' ),
                        'parent_item_colon'   => __( 'Artículo Superior:', 'text_domain' ),
                        'all_items'           => __( 'PRENSA', 'text_domain' ),
                        'add_new_item'        => __( 'Añadir nueva Prensa', 'text_domain' ),
                        'add_new'             => __( 'Añadir nueva Prensa', 'text_domain' ),
                        'new_item'            => __( 'Nueva Entrada', 'text_domain' ),
                        'edit_item'           => __( 'Editar Entrada', 'text_domain' ),
                        'update_item'         => __( 'Actualizar',  'text_domain' ),
                        'view_item'           => __( 'Visualizar', 'text_domain' ),
                        'search_items'        => __( 'Buscar', 'text_domain' ),
                        'not_found'           => __( 'No se encontro', 'text_domain' ),
                        'not_found_in_trash'  => __( 'No se encontro en la papelera', 'text_domain' ),
                    );
    $ctp_prensa_args = array(
        'label'               => __( 'Prensa', 'text_domain' ),
        'description'         => __( 'Post Type Prensa', 'text_domain' ),
        'labels'              => $ctp_prensa_labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 4,
        'menu_icon'           => 'dashicons-format-aside',
        'show_in_admin_bar'   => true,
        'show_in_nav_menus'   => true,
        'can_export'          => true,
        'has_archive'         => true,      
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'rewrite'             =>  array('slug'    =>  'prensa'),
        'capability_type'     => 'post',
    );
    register_post_type( 'prensa', $ctp_prensa_args );



                $ctp_expositores_labels = array(
                    'name'                => _x( 'Expositores', 'Post Type General Name', 'text_domain' ),
                    'singular_name'       => _x( 'Expositores', 'Post Type Singular Name', 'text_domain' ),
                    'menu_name'           => __( 'Expositores', 'text_domain' ),
                    'name_admin_bar'      => __( 'Expositores', 'text_domain' ),
                    'parent_item_colon'   => __( 'Artículo Superior', 'text_domain' ),
                    'all_items'           => __( 'Todos los Expositores', 'text_domain' ),
                    'add_new_item'        => __( 'Añadir nuevo Expositor', 'text_domain' ),
                    'add_new'             => __( 'Añadir nuevo Expositor', 'text_domain' ),
                    'new_item'            => __( 'Nueva Entrada', 'text_domain' ),
                    'edit_item'           => __( 'Editar Entrada', 'text_domain' ),
                    'update_item'         => __( 'Actualizar',  'text_domain' ),
                    'view_item'           => __( 'Visualizar', 'text_domain' ),
                    'search_items'        => __( 'Buscar', 'text_domain' ),
                    'not_found'           => __( 'No se encontro', 'text_domain' ),
                    'not_found_in_trash'  => __( 'No se encontro en la papelera', 'text_domain' ),
                );

    $ctp_expositores_args = array(
        'label'               => __( 'Expositor', 'text_domain' ),
        'description'         => __( 'Post Type Expositor', 'text_domain' ),
        'labels'              => $ctp_expositores_labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-id-alt',
        'show_in_admin_bar'   => true,
        'show_in_nav_menus'   => true,
        'can_export'          => true,
        'has_archive'         => true,      
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
    );
    register_post_type( 'expositor', $ctp_expositores_args );



                $ctp_programa_labels = array(
                    'name'                => _x( 'Programa', 'Post Type General Name', 'text_domain' ),
                    'singular_name'       => _x( 'Programa', 'Post Type Singular Name', 'text_domain' ),
                    'menu_name'           => __( 'Programa', 'text_domain' ),
                    'name_admin_bar'      => __( 'Programa', 'text_domain' ),
                    'parent_item_colon'   => __( 'Artículo Superior:', 'text_domain' ),
                    'all_items'           => __( 'Todos los Programas', 'text_domain' ),
                    'add_new_item'        => __( 'Añadir nuevo Programa', 'text_domain' ),
                    'add_new'             => __( 'Añadir nuevo Programa', 'text_domain' ),
                    'new_item'            => __( 'Nueva Entrada', 'text_domain' ),
                    'edit_item'           => __( 'Editar Entrada', 'text_domain' ),
                    'update_item'         => __( 'Actualizar',  'text_domain' ),
                    'view_item'           => __( 'Visualizar', 'text_domain' ),
                    'search_items'        => __( 'Buscar', 'text_domain' ),
                    'not_found'           => __( 'No se encontro', 'text_domain' ),
                    'not_found_in_trash'  => __( 'No se encontro en la papelera', 'text_domain' ),
                );

    $ctp_programa_args = array(
        'label'               => __( 'Programa', 'text_domain' ),
        'description'         => __( 'Post Type Programa', 'text_domain' ),
        'labels'              => $ctp_programa_labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 6,
        'menu_icon'           => 'dashicons-list-view',
        'show_in_admin_bar'   => true,
        'show_in_nav_menus'   => true,
        'can_export'          => true,
        'has_archive'         => true,      
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
    );
    register_post_type( 'programa', $ctp_programa_args );


$ctp_vip_program_labels = array(
                        'name'                => _x( 'Vip Program', 'Post Type General Name', 'text_domain' ),
                        'singular_name'       => _x( 'Vip Program', 'Post Type Singular Name', 'text_domain' ),
                        'menu_name'           => __( 'Vip Program', 'text_domain' ),
                        'name_admin_bar'      => __( 'Vip Program', 'text_domain' ),
                        'parent_item_colon'   => __( 'Artículo Superior:', 'text_domain' ),
                        'all_items'           => __( 'Todos los Vip Program', 'text_domain' ),
                        'add_new_item'        => __( 'Añadir nuevo Vip Program', 'text_domain' ),
                        'add_new'             => __( 'Añadir nuevo Vip Program', 'text_domain' ),
                        'new_item'            => __( 'Nueva Entrada', 'text_domain' ),
                        'edit_item'           => __( 'Editar Entrada', 'text_domain' ),
                        'update_item'         => __( 'Actualizar',  'text_domain' ),
                        'view_item'           => __( 'Visualizar', 'text_domain' ),
                        'search_items'        => __( 'Buscar', 'text_domain' ),
                        'not_found'           => __( 'No se encontro', 'text_domain' ),
                        'not_found_in_trash'  => __( 'No se encontro en la papelera', 'text_domain' ),
                    );
    $ctp_vip_program_args = array(
        'label'               => __( 'Vip Program', 'text_domain' ),
        'description'         => __( 'Post Type Vip Program', 'text_domain' ),
        'labels'              => $ctp_vip_program_labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields','page-attributes'),
        'hierarchical'        => true,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 7,
        'menu_icon'           => 'dashicons-universal-access',
        'show_in_admin_bar'   => true,
        'show_in_nav_menus'   => true,
        'can_export'          => true,
        'has_archive'         => true,      
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
    );
    register_post_type( 'vip', $ctp_vip_program_args );

$ctp_juez_labels = array(
                        'name'                => _x( 'Juez', 'Post Type General Name', 'text_domain' ),
                        'singular_name'       => _x( 'Juez', 'Post Type Singular Name', 'text_domain' ),
                        'menu_name'           => __( 'Juez', 'text_domain' ),
                        'name_admin_bar'      => __( 'Juez', 'text_domain' ),
                        'parent_item_colon'   => __( 'Artículo Superior:', 'text_domain' ),
                        'all_items'           => __( 'Juez', 'text_domain' ),
                        'add_new_item'        => __( 'Añadir nuevo Juez', 'text_domain' ),
                        'add_new'             => __( 'Añadir nuevo Juez', 'text_domain' ),
                        'new_item'            => __( 'Nueva Entrada', 'text_domain' ),
                        'edit_item'           => __( 'Editar Entrada', 'text_domain' ),
                        'update_item'         => __( 'Actualizar',  'text_domain' ),
                        'view_item'           => __( 'Visualizar', 'text_domain' ),
                        'search_items'        => __( 'Buscar', 'text_domain' ),
                        'not_found'           => __( 'No se encontro', 'text_domain' ),
                        'not_found_in_trash'  => __( 'No se encontro en la papelera', 'text_domain' ),
                    );
    $ctp_juez_args = array(
        'label'               => __( 'Juez', 'text_domain' ),
        'description'         => __( 'Post Type Juez', 'text_domain' ),
        'labels'              => $ctp_juez_labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 8,
        'menu_icon'           => 'dashicons-businessman',
        'show_in_admin_bar'   => true,
        'show_in_nav_menus'   => true,
        'can_export'          => true,
        'has_archive'         => true,      
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'rewrite'             =>  array('slug'    =>  'juez'),
        'capability_type'     => 'post',
    );
    register_post_type( 'juez', $ctp_juez_args );

}
add_action( 'init', 'cpt_gral');

function taxs_gral(){
                $taxs_prensa_labels = array(
                'name'                       => _x( 'Categorías de Prensa', 'Taxonomy General Name', 'text_domain' ),
                'singular_name'              => _x( 'Categorías de Prensa', 'Taxonomy Singular Name', 'text_domain' ),
                'menu_name'                  => __( 'Categorías de Prensa', 'text_domain' ),
                'all_items'                  => __( 'Todas las categorías', 'text_domain' ),
                'parent_item'                => __( 'Categoría Superior', 'text_domain' ),
                'parent_item_colon'          => __( 'Categoría Superior:', 'text_domain' ),
                'new_item_name'              => __( 'Nueva Categoría', 'text_domain' ),
                'add_new_item'               => __( 'Añadir Nueva', 'text_domain' ),
                'edit_item'                  => __( 'Editar', 'text_domain' ),
                'update_item'                => __( 'Actualizar', 'text_domain' ),
                'view_item'                  => __( 'Visializar', 'text_domain' ),
                'separate_items_with_commas' => __( 'Separar categorías con comas', 'text_domain' ),
                'add_or_remove_items'        => __( 'Agregar o Remover', 'text_domain' ),
                'choose_from_most_used'      => __( 'Elija entre los más utilizados', 'text_domain' ),
                'popular_items'              => __( 'Más usadas', 'text_domain' ),
                'search_items'               => __( 'Buscar', 'text_domain' ),
                'not_found'                  => __( 'No se encontro', 'text_domain' ),
            );
    $taxs_prensa_args = array(
        'labels'                     => $taxs_prensa_labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'rewrite'                    => array(
                                              'slug' => 'prensas',
                                              'with_front' => false, 
                                              'hierarchical' => true),
        'query_var'                  => true  );
    register_taxonomy( 'prensas', 'prensa', $taxs_prensa_args );

                $taxs_programas_labels = array(
                'name'                       => _x( 'Categorías de Programa', 'Taxonomy General Name', 'text_domain' ),
                'singular_name'              => _x( 'Categorías de Programa', 'Taxonomy Singular Name', 'text_domain' ),
                'menu_name'                  => __( 'Categorías de Programa', 'text_domain' ),
                'all_items'                  => __( 'Todas las categorías', 'text_domain' ),
                'parent_item'                => __( 'Categoría Superior', 'text_domain' ),
                'parent_item_colon'          => __( 'Categoría Superior:', 'text_domain' ),
                'new_item_name'              => __( 'Nueva Categoría', 'text_domain' ),
                'add_new_item'               => __( 'Añadir Nueva', 'text_domain' ),
                'edit_item'                  => __( 'Editar', 'text_domain' ),
                'update_item'                => __( 'Actualizar', 'text_domain' ),
                'view_item'                  => __( 'Visializar', 'text_domain' ),
                'separate_items_with_commas' => __( 'Separar categorías con comas', 'text_domain' ),
                'add_or_remove_items'        => __( 'Agregar o Remover', 'text_domain' ),
                'choose_from_most_used'      => __( 'Elija entre los más utilizados', 'text_domain' ),
                'popular_items'              => __( 'Más usadas', 'text_domain' ),
                'search_items'               => __( 'Buscar', 'text_domain' ),
                'not_found'                  => __( 'No se encontro', 'text_domain' ),
            );
    $taxs_expositor_args = array(
        'labels'                     => $taxs_programas_labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'rewrite'                    => array(
                                              'slug' => 'program',
                                              'with_front' => false, 
                                              'hierarchical' => true),
        'query_var'                  => true  );
   register_taxonomy( 'programas', 'programa', $taxs_expositor_args );

      $tags_prensa_labels = array(
        'name' => _x( 'Tags', 'taxonomy general name' ),
        'singular_name' => _x( 'etiquetas', 'taxonomy singular name' ),
        'search_items' =>  __( 'Buscar etiquetas' ),
        'popular_items' => __( 'Popular etiquetas' ),
        'all_items' => __( 'Todas las etiquetas' ),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __( 'Editar etiquetas' ), 
        'update_item' => __( 'Actualizar etiquetas' ),
        'add_new_item' => __( 'Añadir nueva etiqueta' ),
        'new_item_name' => __( 'Nuevo nombre de etiqueta' ),
        'separate_items_with_commas' => __( 'Separa las etiquetas con comas' ),
        'add_or_remove_items' => __( 'Añadir o remover etiquetas' ),
        'choose_from_most_used' => __( 'Elija entre las etiquetas más usadas' ),
        'menu_name' => __( 'Etiquetas' ),
      ); 

        register_taxonomy('tag','prensa',array(
    'hierarchical' => false,
    'labels' => $tags_prensa_labels,
    'show_ui' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite'   => array(
                      'slug' => 'tags',
                      'with_front' => false, 
                      'hierarchical' => false),
  ));

                $taxs_vip_program_labels = array(
                'name'                       => _x( 'Categorías de Vip Program', 'Taxonomy General Name', 'text_domain' ),
                'singular_name'              => _x( 'Categorías de Vip Program', 'Taxonomy Singular Name', 'text_domain' ),
                'menu_name'                  => __( 'Categorías de Vip Program', 'text_domain' ),
                'all_items'                  => __( 'Todas las categorías', 'text_domain' ),
                'parent_item'                => __( 'Categoría Superior', 'text_domain' ),
                'parent_item_colon'          => __( 'Categoría Superior:', 'text_domain' ),
                'new_item_name'              => __( 'Nueva Categoría', 'text_domain' ),
                'add_new_item'               => __( 'Añadir Nueva', 'text_domain' ),
                'edit_item'                  => __( 'Editar', 'text_domain' ),
                'update_item'                => __( 'Actualizar', 'text_domain' ),
                'view_item'                  => __( 'Visializar', 'text_domain' ),
                'separate_items_with_commas' => __( 'Separar categorías con comas', 'text_domain' ),
                'add_or_remove_items'        => __( 'Agregar o Remover', 'text_domain' ),
                'choose_from_most_used'      => __( 'Elija entre los más utilizados', 'text_domain' ),
                'popular_items'              => __( 'Más usadas', 'text_domain' ),
                'search_items'               => __( 'Buscar', 'text_domain' ),
                'not_found'                  => __( 'No se encontro', 'text_domain' ),
            );
    $taxs_vip_program_args = array(
        'labels'                     => $taxs_vip_program_labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'rewrite'                    => array(
                                              'slug' => 'vip_programs',
                                              'with_front' => false, 
                                              'hierarchical' => true),
        'query_var'                  => true  );
    register_taxonomy( 'vip_programs', 'vip', $taxs_vip_program_args );

                $taxs_expositores_labels = array(
                'name'                       => _x( 'Categorías de Expositores', 'Taxonomy General Name', 'text_domain' ),
                'singular_name'              => _x( 'Categorías de Expositores', 'Taxonomy Singular Name', 'text_domain' ),
                'menu_name'                  => __( 'Categorías de Expositores', 'text_domain' ),
                'all_items'                  => __( 'Todas las categorías', 'text_domain' ),
                'parent_item'                => __( 'Categoría Superior', 'text_domain' ),
                'parent_item_colon'          => __( 'Categoría Superior:', 'text_domain' ),
                'new_item_name'              => __( 'Nueva Categoría', 'text_domain' ),
                'add_new_item'               => __( 'Añadir Nueva', 'text_domain' ),
                'edit_item'                  => __( 'Editar', 'text_domain' ),
                'update_item'                => __( 'Actualizar', 'text_domain' ),
                'view_item'                  => __( 'Visializar', 'text_domain' ),
                'separate_items_with_commas' => __( 'Separar categorías con comas', 'text_domain' ),
                'add_or_remove_items'        => __( 'Agregar o Remover', 'text_domain' ),
                'choose_from_most_used'      => __( 'Elija entre los más utilizados', 'text_domain' ),
                'popular_items'              => __( 'Más usadas', 'text_domain' ),
                'search_items'               => __( 'Buscar', 'text_domain' ),
                'not_found'                  => __( 'No se encontro', 'text_domain' ),
            );
    $taxs_expositores_args = array(
        'labels'                     => $taxs_expositores_labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'rewrite'                    => array(
                                              'slug' => 'expositores',
                                              'with_front' => false, 
                                              'hierarchical' => true),
        'query_var'                  => true  );
    register_taxonomy( 'expositores', 'expositor', $taxs_expositores_args );

      $tags_expositores_labels = array(
        'name' => _x( 'Tags', 'taxonomy general name' ),
        'singular_name' => _x( 'etiquetas', 'taxonomy singular name' ),
        'search_items' =>  __( 'Buscar etiquetas' ),
        'popular_items' => __( 'Popular etiquetas' ),
        'all_items' => __( 'Todas las etiquetas' ),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __( 'Editar etiquetas' ), 
        'update_item' => __( 'Actualizar etiquetas' ),
        'add_new_item' => __( 'Añadir nueva etiqueta' ),
        'new_item_name' => __( 'Nuevo nombre de etiqueta' ),
        'separate_items_with_commas' => __( 'Separa las etiquetas con comas' ),
        'add_or_remove_items' => __( 'Añadir o remover etiquetas' ),
        'choose_from_most_used' => __( 'Elija entre las etiquetas más usadas' ),
        'menu_name' => __( 'Etiquetas' ),
      ); 

        register_taxonomy('tags_expositores','expositor',array(
    'hierarchical' => false,
    'labels' => $tags_expositores_labels,
    'show_ui' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite'   => array(
                      'slug' => 'tags_expositores',
                      'with_front' => false, 
                      'hierarchical' => false),
  ));

                $taxs_jueces_labels = array(
                'name'                       => _x( 'Categorías de Jueces', 'Taxonomy General Name', 'text_domain' ),
                'singular_name'              => _x( 'Categorías de Jueces', 'Taxonomy Singular Name', 'text_domain' ),
                'menu_name'                  => __( 'Categorías de Jueces', 'text_domain' ),
                'all_items'                  => __( 'Todas las categorías', 'text_domain' ),
                'parent_item'                => __( 'Categoría Superior', 'text_domain' ),
                'parent_item_colon'          => __( 'Categoría Superior:', 'text_domain' ),
                'new_item_name'              => __( 'Nueva Categoría', 'text_domain' ),
                'add_new_item'               => __( 'Añadir Nueva', 'text_domain' ),
                'edit_item'                  => __( 'Editar', 'text_domain' ),
                'update_item'                => __( 'Actualizar', 'text_domain' ),
                'view_item'                  => __( 'Visializar', 'text_domain' ),
                'separate_items_with_commas' => __( 'Separar categorías con comas', 'text_domain' ),
                'add_or_remove_items'        => __( 'Agregar o Remover', 'text_domain' ),
                'choose_from_most_used'      => __( 'Elija entre los más utilizados', 'text_domain' ),
                'popular_items'              => __( 'Más usadas', 'text_domain' ),
                'search_items'               => __( 'Buscar', 'text_domain' ),
                'not_found'                  => __( 'No se encontro', 'text_domain' ),
            );
    $taxs_jueces_args = array(
        'labels'                     => $taxs_jueces_labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'rewrite'                    => array(
                                              'slug' => 'jueces',
                                              'with_front' => false, 
                                              'hierarchical' => true),
        'query_var'                  => true  );
    register_taxonomy( 'jueces', 'juez', $taxs_jueces_args );

}
add_action( 'init', 'taxs_gral', 0 );

add_action('restrict_manage_posts','listings_prensa_taxs');
function listings_prensa_taxs() {
    global $typenow;
    global $wp_query;
    if ($typenow=='prensa') {
        $taxonomyFil = 'prensas';
        $term = isset($wp_query->query['prensas']) ? $wp_query->query['prensas'] :'';
        wp_dropdown_categories(array(
            'show_option_all' =>  __("Ver todas "),
            'taxonomy'        =>  $taxonomyFil,
            'name'            =>  $taxonomyFil,
            'orderby'         =>  'ID',
            'value_field'      => 'slug',
            'selected'        =>  $term, 
            'hierarchical'    =>  true,
            'depth'           =>  3,
            'show_count'      =>  true, 
            'hide_empty'      =>  false, 
        ));
    }
    if ($typenow=='programa') {
        $taxFil = 'programas';
        $term = isset($wp_query->query['programas']) ? $wp_query->query['programas  '] :'';
        wp_dropdown_categories(array(
            'show_option_all' =>  __("Ver todas "),
            'taxonomy'        =>  $taxFil,
            'name'            =>  $taxFil,
            'orderby'         =>  'ID',
            'value_field'      => 'slug',
            'selected'        =>  $term, 
            'hierarchical'    =>  true,
            'depth'           =>  3,
            'show_count'      =>  true, 
            'hide_empty'      =>  false, 
        ));
    }
    if ($typenow=='vip') {
        $taxFil_vip = 'vip_programs';
        $term_vip = isset($wp_query->query['vip_programs']) ? $wp_query->query['vip_programs  '] :'';
        wp_dropdown_categories(array(
            'show_option_all' =>  __("Ver todas "),
            'taxonomy'        =>  $taxFil_vip,
            'name'            =>  $taxFil_vip,
            'orderby'         =>  'ID',
            'value_field'      => 'slug',
            'selected'        =>  $term_vip, 
            'hierarchical'    =>  true,
            'depth'           =>  3,
            'show_count'      =>  true, 
            'hide_empty'      =>  false, 
        ));
    }
    if ($typenow=='expositor') {
        $taxFil = 'expositores';
        $term = isset($wp_query->query['expositores']) ? $wp_query->query['expositores'] :'';
        wp_dropdown_categories(array(
            'show_option_all' =>  __("Ver todas "),
            'taxonomy'        =>  $taxFil,
            'name'            =>  $taxFil,
            'orderby'         =>  'ID',
            'value_field'      => 'slug',
            'selected'        =>  $term, 
            'hierarchical'    =>  true,
            'depth'           =>  3,
            'show_count'      =>  true, 
            'hide_empty'      =>  false, 
        ));
    }
    if ($typenow=='juez') {
        $taxFil = 'jueces';
        $term = isset($wp_query->query['jueces']) ? $wp_query->query['jueces'] :'';
        wp_dropdown_categories(array(
            'show_option_all' =>  __("Ver todas "),
            'taxonomy'        =>  $taxFil,
            'name'            =>  $taxFil,
            'orderby'         =>  'ID',
            'value_field'      => 'slug',
            'selected'        =>  $term, 
            'hierarchical'    =>  true,
            'depth'           =>  3,
            'show_count'      =>  true, 
            'hide_empty'      =>  false, 
        ));
    }

}
function fixed_cat($args) {
    $args['checked_ontop'] = false;
    $args['order'] = 'ASC';
    return $args;
}

add_filter('wp_terms_checklist_args','fixed_cat');


function get_custom_post_type_template($single_template) {
     global $post;
 
     if ( $post->post_type == ( 'vip_program' )) {
          $single_template = dirname( __FILE__ ) . '/single-vip-program-login.php';
     }

    /*if ($post->post_type == 'vip') {
      $terms = get_the_terms($post->ID, 'vip_programs');
      if (empty($terms)) {}else{
  
        if($terms[0]->slug=='vip-program') {                     
          $single_template = dirname( __FILE__ ) . '/single-vip-programa-dias.php'; 
        }
  
      } 
    }*/
   
     return $single_template;
}
 
 add_filter( "single_template", "get_custom_post_type_template" );

function wpb_cpt_sticky_at_top( $posts ) {

    if ( is_main_query() && is_post_type_archive() ) {
        global $wp_query;

        $sticky_posts = get_option( 'sticky_posts' );
        $num_posts = count( $posts );
        $sticky_offset = 0;

        for ($i = 0; $i < $num_posts; $i++) {

            if ( in_array( $posts[$i]->ID, $sticky_posts ) ) {
                $sticky_post = $posts[$i];

                array_splice( $posts, $i, 1 );

                array_splice( $posts, $sticky_offset, 0, array($sticky_post) );
                $sticky_offset++;

                $offset = array_search($sticky_post->ID, $sticky_posts);
                unset( $sticky_posts[$offset] );
            }
        }

        if ( !empty( $sticky_posts) ) {

            $stickies = get_posts( array(
                'post__in' => $sticky_posts,
                'post_type' =>'prensa',
                'post_status' => 'publish',
                'nopaging' => true
            ) );

            foreach ( $stickies as $sticky_post ) {
                array_splice( $posts, $sticky_offset, 0, array( $sticky_post ) );
                $sticky_offset++;
            }
        }

    }

    return $posts;
}

add_filter( 'the_posts', 'wpb_cpt_sticky_at_top' );

function cpt_sticky_class($classes) {
      if ( is_sticky() ) : 
      $classes[] = 'sticky';
          return $classes;
    endif; 
    return $classes;
        }
add_filter('post_class', 'cpt_sticky_class');

function wpmt_metas_programa() {
    add_meta_box( 'wpmt_meta', __( 'Información adicional', 'wpmt-textdomain' ), 'wpmt_function',  array('programa','vip' ) );
}

function wpmt_metas_programa_add_calendario() {
    add_meta_box( 'wpmt_meta_add_calendario', __( 'Información Calendario', 'wpmt-textdomain' ), 'wpmt_function_programa_add_calendario', 'programa' );
}

function wpmt_metas_prensa() {
    add_meta_box( 'wpmt_meta', __( 'Información adicional', 'wpmt-textdomain' ), 'wpmt_function_prensa', 'prensa' );
}
function wpmt_metas_expositores() {
    add_meta_box( 'wpmt_meta_expositores', __( 'Información adicional', 'wpmt-textdomain' ), 'wpmt_function_expositores', 'expositor' );
}
function wpmt_metas_vip_museos_genero_zona() {
    add_meta_box( 'wpmt_meta_expositores_genero_zona', __( 'Genero y Zona', 'wpmt-textdomain' ), 'wpmt_function_vip_museos_genero_zona', 'vip' );
}
add_action( 'add_meta_boxes', 'wpmt_metas_programa' );
add_action( 'add_meta_boxes', 'wpmt_metas_programa_add_calendario' );
add_action( 'add_meta_boxes', 'wpmt_metas_prensa' );
add_action( 'add_meta_boxes', 'wpmt_metas_expositores' );
add_action( 'add_meta_boxes', 'wpmt_metas_vip_museos_genero_zona' );
function wpmt_function( $post ) {
    wp_nonce_field( basename( __FILE__ ), 'wpmt_nonce' );
    $wpmt_get_post_meta = get_post_meta( $post->ID );
    ?>
 <table style="width:100%">
    <tr>
                <td style="width: 150px;"><label for="meta-subtitulo" class="wpmt-row-title hook_qtranslatex"><?php _e( 'Subtítulo de la entrada: ', 'wpmt-textdomain' )?></label></td>
               <td > <input type="text" style="width: 250px;"  name="programa-subtitulo" id="programa-subtitulo" class="hook_qtranslatex" value="<?php if ( isset ( $wpmt_get_post_meta['programa-subtitulo'] ) ) echo $wpmt_get_post_meta['programa-subtitulo'][0]; ?>"  placeholder="IMMATERIAL in MATERIALART FAIR"/></td>
    </tr>

    <tr>
        
                <td style="width: 150px;">
                    <label for="meta-hora" class="wpmt-row-title"><?php _e( 'Horario: ', 'wpmt-textdomain' )?></label>
                </td>
                <td >
                    <input type="text" style="width: 250px;" name="programa-hora" id="programa-hora" value="<?php if ( isset ( $wpmt_get_post_meta['programa-hora'] ) ) echo $wpmt_get_post_meta['programa-hora'][0]; ?>" placeholder="12:00 PM – 9:00 PM" />
                </td>

<!--                 <td>
                    <input type="text" style="width: 250px;" name="programa-meridianos" id="programa-meridianos" value="<?php if ( isset ( $wpmt_get_post_meta['programa-meridianos'] ) ) echo $wpmt_get_post_meta['programa-meridianos'][0]; ?>" placeholder="12:00 PM – 9:00 PM" />
                </td> -->
        
    </tr>
    
    <tr>
        
                <td style="width: 150px;"><label for="meta-ubicacion" class="wpmt-row-title"><?php _e( 'Ubicación: ', 'wpmt-textdomain' )?></label></td>
                <td ><input type="text" style="width: 250px;" name="programa-ubicacion" class="hook_qtranslatex" id="programa-ubicacion" value="<?php if ( isset ( $wpmt_get_post_meta['programa-ubicacion'] ) ) echo $wpmt_get_post_meta['programa-ubicacion'][0]; ?>"  placeholder="Stand PS1, Salón Mercurio"/></td>
        
    </tr>
    
    <tr>
<script type="text/javascript">
jQuery(document).ready(function($){quicktags({id:'programa-link',buttons:"link"});$('#wp-link-submit').click(function(){$('#programa-link').val('');});});
</script>
<style type="text/css">.quicktags-toolbar{background-color: #fff!important;}.imagen_red_social{ display: inline-block; height: 32px; vertical-align: bottom;}input.titulo1{display: inline-block;margin-bottom: 10px;width: 96%;margin: 8px;width: calc(100% - 80px);margin: 0px 0px 0px 10px;}fieldset.form_fechas { width: auto; padding: 0 5px; margin: 0 auto; border: 1px solid #088; padding-bottom: 23px; margin-bottom: 30px;}fieldset.form_fechas{ width: 550px; padding: 0 5px; margin: 0 auto; border: 1px solid #000; padding-bottom: 23px; position: relative; margin-bottom: 20px;}
</style>
                <!-- <td style="width: 150px;"><label for="meta-link" class="wpmt-row-title"><?php _e( 'Link: ', 'wpmt-textdomain' )?></label></td>
                <td ><input style="width: 100%;" name="programa-link" id="programa-link" value='<?php if ( isset ( $wpmt_get_post_meta['programa-link'] ) ) echo $wpmt_get_post_meta['programa-link'][0]; ?>' placeholder="http://link.com/artfair" /></td> -->
        
    </tr>
 </table>
    <?php
}
function wpmt_function_prensa( $post ) {
    wp_nonce_field( basename( __FILE__ ), 'wpmt_nonce' );
    $wpmt_get_post_meta = get_post_meta( $post->ID );
    ?>
 <table style="width:100%">
<!--     <tr>
    
            <td style="width: 150px;"><label for="meta-subtitulo" class="wpmt-row-title "><?php _e( 'Subtítulo de la entrada: ', 'wpmt-textdomain' )?></label></td>
           <td > <input type="text" style="width: 250px;"  name="prensa-subtitulo" id="prensa-subtitulo"  value="<?php if ( isset ( $wpmt_get_post_meta['prensa-subtitulo'] ) ) echo $wpmt_get_post_meta['prensa-subtitulo'][0]; ?>"  placeholder="Art News"/></td>
    
</tr> -->

    <tr>
                <td style="width: 150px;"><label for="meta-autor" class="wpmt-row-title"><?php _e( 'Autor: ', 'wpmt-textdomain' )?></label></td>
                <td ><input type="text" style="width: 250px;" class="hook_qtranslatex" name="prensa-autor" id="prensa-autor" value="<?php if ( isset ( $wpmt_get_post_meta['prensa-autor'] ) ) echo $wpmt_get_post_meta['prensa-autor'][0]; ?>" placeholder="Nombre Autor" /></td>
    </tr>
    
    <tr>
                <td style="width: 150px;"><label for="meta-fecha" class="wpmt-row-title"><?php _e( 'Fecha: ', 'wpmt-textdomain' )?></label></td>
                <td ><input type="text" style="width: 250px;" class="hook_qtranslatex" name="prensa-fecha" id="prensa-fecha" value="<?php if ( isset ( $wpmt_get_post_meta['prensa-fecha'] ) ) echo $wpmt_get_post_meta['prensa-fecha'][0]; ?>"  placeholder="29 Noviembre 2016"/></td>
    </tr>
    
    <tr>
                <td style="width: 150px;"><label for="meta-sticky" class="wpmt-row-title"><?php _e( 'Fijar en Index: ', 'wpmt-textdomain' )?></label></td>
                <td >

                    <input type="checkbox" name="prensa-sticky" id="prensa-sticky" value="yes" <?php if ( isset ( $wpmt_get_post_meta['prensa-sticky'] ) ) checked( $wpmt_get_post_meta['prensa-sticky'][0], 'yes' ); ?> /></td>
    </tr>
    
<!--     
        <tr>
                    <td style="width: 150px;"><label for="meta-sticky" class="wpmt-row-title"><?php _e( 'Fijar en Sección: ', 'wpmt-textdomain' )?></label></td>
                    <td >

                        <input type="checkbox" name="prensa-sticky-seccion" id="prensa-sticky-seccion" value="yes" <?php if ( isset ( $wpmt_get_post_meta['prensa-sticky-seccion'] ) ) checked( $wpmt_get_post_meta['prensa-sticky-seccion'][0], 'yes' ); ?> /></td>
        </tr> 
-->
    
 </table>
    <?php
}
function wpmt_function_expositores( $post ) {
    wp_nonce_field( basename( __FILE__ ), 'wpmt_nonce' );
    $wpmt_get_post_meta = get_post_meta( $post->ID );
    ?>
 <table style="width:100%">

    <tr>
        <td style="width: 150px;"><label for="meta-autor" class="wpmt-row-title"><?php _e( 'Link: ', 'wpmt-textdomain' )?></label></td>
        <td ><input type="text" style="width: 250px;" name="expositores-link" id="expositores-link" value="<?php if ( isset ( $wpmt_get_post_meta['expositores-link'] ) ) echo $wpmt_get_post_meta['expositores-link'][0]; ?>" placeholder="http://ejemplo.com" /></td>
    </tr>
    
 </table>
    <?php
}

function wpmt_function_vip_museos_genero_zona( $post ) {
    wp_nonce_field( basename( __FILE__ ), 'wpmt_nonce' );
    $wpmt_get_post_meta = get_post_meta( $post->ID );
    ?>
 <table style="width:100%">

    <tr>
        <td style="width: 150px;"><label for="vip-museos-genero" class="wpmt-row-title"><?php _e( 'Genero: ', 'wpmt-textdomain' )?></label></td>
        <td ><input type="text" style="width: 250px;" name="vip-museos-genero" id="vip-museos-genero" value="<?php if ( isset ( $wpmt_get_post_meta['vip-museos-genero'] ) ) echo $wpmt_get_post_meta['vip-museos-genero'][0]; ?>" placeholder="" /></td>
    </tr>

    <tr>
        <td style="width: 150px;"><label for="vip-museos-zona" class="wpmt-row-title"><?php _e( 'Zona: ', 'wpmt-textdomain' )?></label></td>
        <td ><input type="text" style="width: 250px;" name="vip-museos-zona" id="vip-museos-zona" value="<?php if ( isset ( $wpmt_get_post_meta['vip-museos-zona'] ) ) echo $wpmt_get_post_meta['vip-museos-zona'][0]; ?>" placeholder="" /></td>
    </tr>
    
 </table>
    <?php
}
function wpmt_function_programa_add_calendario( $post ) {
    wp_nonce_field( basename( __FILE__ ), 'wpmt_nonce' );
    $wpmt_get_post_meta = get_post_meta( $post->ID );?>

 <table style="width:100%">
    <tr>
        <td style="width: 150px;">
            <label for="meta-subtitulo" class="wpmt-row-title">
                <?php _e( 'Inicio de evento: ', 'wpmt-textdomain' )?>
                </label>
        </td>
       <td >
            <input 
            type="text" 
            name="calendario-inicio" 
            id="calendario-inicio" 
            style="width: 250px;"
            value="<?php if ( isset ( $wpmt_get_post_meta['calendario-inicio'] ) ) echo $wpmt_get_post_meta['calendario-inicio'][0]; ?>"  placeholder="12/14/2017 08:00 AM - (mm/dd/yy)"/>
        </td>
    </tr>
    <tr>
        <td style="width: 150px;">
            <label for="meta-subtitulo" class="wpmt-row-title">
                <?php _e( 'Termino de evento: ', 'wpmt-textdomain' )?>
                </label>
        </td>
       <td >
            <input 
            type="text" 
            name="calendario-termino" 
            id="calendario-termino" 
            style="width: 250px;"
            value="<?php if ( isset ( $wpmt_get_post_meta['calendario-termino'] ) ) echo $wpmt_get_post_meta['calendario-termino'][0]; ?>"  placeholder="12/14/2017 10:00 AM - (mm/dd/yy)"/>
        </td>
    </tr>
  </table>
<?php }

function wpmt_deed( $post_id ) {
 
    if( isset( $_POST[ 'programa-subtitulo' ] ) ) {
        update_post_meta( $post_id, 'programa-subtitulo', sanitize_text_field( $_POST[ 'programa-subtitulo' ] ) );
    }
    if( isset( $_POST[ 'programa-hora' ] ) ) {
        update_post_meta( $post_id, 'programa-hora', sanitize_text_field( $_POST[ 'programa-hora' ] ) );
    }
    if( isset( $_POST[ 'programa-ubicacion' ] ) ) {
        update_post_meta( $post_id, 'programa-ubicacion', sanitize_text_field( $_POST[ 'programa-ubicacion' ] ) );
    }
    if( isset( $_POST[ 'programa-link' ] ) ) {
        update_post_meta( $post_id, 'programa-link',  $_POST[ 'programa-link' ] );
    }
    if( isset( $_POST[ 'prensa-subtitulo' ] ) ) {
        update_post_meta( $post_id, 'prensa-subtitulo', sanitize_text_field( $_POST[ 'prensa-subtitulo' ] ) );
    }
    if( isset( $_POST[ 'prensa-autor' ] ) ) {
        update_post_meta( $post_id, 'prensa-autor', sanitize_text_field( $_POST[ 'prensa-autor' ] ) );
    }
    if( isset( $_POST[ 'prensa-fecha' ] ) ) {
        update_post_meta( $post_id, 'prensa-fecha',  $_POST[ 'prensa-fecha' ] );
    }
    if( isset( $_POST[ 'prensa-sticky' ] ) ) {
    update_post_meta( $post_id, 'prensa-sticky', 'yes' );
    } else {
        update_post_meta( $post_id, 'prensa-sticky', 'not' );
    }
    if( isset( $_POST[ 'prensa-sticky-seccion' ] ) ) {
    update_post_meta( $post_id, 'prensa-sticky-seccion', 'yes' );
    } else {
        update_post_meta( $post_id, 'prensa-sticky-seccion', 'not' );
    }
    if( isset( $_POST[ 'expositores-link' ] ) ) {
        update_post_meta( $post_id, 'expositores-link',  $_POST[ 'expositores-link' ] );
    }
 
    if( isset( $_POST[ 'calendario-inicio' ] ) ) {
        update_post_meta( $post_id, 'calendario-inicio', sanitize_text_field( $_POST[ 'calendario-inicio' ] ) );
    }
 
    if( isset( $_POST[ 'calendario-termino' ] ) ) {
        update_post_meta( $post_id, 'calendario-termino', sanitize_text_field( $_POST[ 'calendario-termino' ] ) );
    }
    if( isset( $_POST[ 'programa-meridianos' ] ) ) {
        update_post_meta( $post_id, 'programa-meridianos', sanitize_text_field( $_POST[ 'programa-meridianos' ] ) );
    }
    if( isset( $_POST[ 'vip-museos-genero' ] ) ) {
        update_post_meta( $post_id, 'vip-museos-genero', sanitize_text_field( $_POST[ 'vip-museos-genero' ] ) );
    }
    if( isset( $_POST[ 'vip-museos-zona' ] ) ) {
        update_post_meta( $post_id, 'vip-museos-zona', sanitize_text_field( $_POST[ 'vip-museos-zona' ] ) );
    }
}
add_action( 'save_post', 'wpmt_deed' );



add_action( 'admin_menu', 'register_add_admin_menu' );


function register_add_admin_menu(  ) { 

add_menu_page(  'Usuarios VIP', 
                'Usuarios VIP', 
                'manage_options', 
                'usuarios_vip', 
                'register_options_page',
                'dashicons-universal-access-alt' );

add_submenu_page(
                'usuarios_vip', 
                '', 
                '',
                'manage_options', 
                'usuarios_vip_editar',
                'usuarios_vip_editar_function' );

}

function register_options_page(  ) { 

    ?>


<div class="wrap_usuarios_vip">

<script type="text/javascript">
jQuery(document).ready(function($){

$( this ).find( "li a" ).eq( 2 ).text().replace( "foo", "bar" );

    $('.users_vip_button_del').click(function() {
      $(".users_vip_style_del,.users_vip_style_aprobado").hide( "1000" );
    });

        $('.btn_confirma_eliminar').click(function(){

            if (confirm("Por favor confirma en \"Aceptar\" para Eliminar")) {
                return true;
            } else {
                return false;
                
            }
        });

        $('.btn_confirma_aprobar').click(function(){

            if (confirm("Por favor confirma en \"Aceptar\" para Aprobar")) {
                return true;
            } else {
                return false;
                
            }
        });

        $('.btn_confirma_rechazar').click(function(){

            if (confirm("Por favor confirma en \"Aceptar\" para Rechazar")) {
                return true;
            } else {
                return false;
                
            }
        });

        $('.btn_recupera_contrasena').click(function(){

            if (confirm("Por favor confirma en \"Aceptar\" para Recuperar")) {
                return true;
            } else {
                return false;
                
            }
        });



});
</script>
        <h2>Usuarios VIP</h2>

<?php
global $wpdb;

//echo "the_post_g\n";
//print_r($_POST);

if ($_POST['users_vip_delete_id']) {

    $users_vip_delete_id = $_POST['users_vip_delete_id'];
    $users_vip_delete_nombre = $_POST['users_vip_delete_nombre'];
    $users_vip_delete_apellido = $_POST['users_vip_delete_apellido'];
    $table = 'wp_users_vip';
    //$wpdb->delete($table, array( 'id' => $users_vip_delete_id) );

$wpdb->update('wp_users_vip', array( 
                                    'users_vip_estatus'=>7
                                ), array('id'=>$users_vip_delete_id)
            );


    $users_vip_style_del='
                            style="
                                width: 100%;
                                height: 50px;
                                background-color: red;
                                font-size: 20px;
                                font-weight: bold;
                                color: white;
                                line-height: 42px;
                            "';

    $users_vip_style_button_del='
                            style="
                                width: 20px;
                                height: 50px;
                                background-color: white;
                                font-size: 20px;
                                font-weight: bold;
                                color: red;
                                line-height: 42px;
                                cursor: pointer;
                                float: left;
                            "';

    echo "\n";
    echo ' <div class="users_vip_style_del"'.$users_vip_style_del.' >';
    echo 'El registro '.$users_vip_delete_id.' - '.$users_vip_delete_nombre.' - '.$users_vip_delete_apellido.' se ha eliminado';
            echo '<div '.$users_vip_style_button_del.' class="users_vip_button_del">';
            echo 'X';
            echo '</div>'; 
    echo '</div>';
    echo "\n";
   // print_r($_GET['users_vip_delete_id']);
}
?>
<?php
global $wpdb;
//echo "the_post_g\n";
//print_r($_POST);

if ($_POST['users_vip_aprobar_id']) {
//echo "\n sisi \n";
    $users_vip_aprobar_id       = $_POST['users_vip_aprobar_id'];
    $users_vip_aprobar_nombre   = $_POST['users_vip_aprobar_nombre'];
    $users_vip_aprobar_apellido = $_POST['users_vip_aprobar_apellido'];
    $users_vip_aprobar_email    = $_POST['users_vip_aprobar_email'];
    $code                       = $_POST['users_vip_aprobar_code'];
    $lang                       = $_POST['users_vip_aprobar_lang'];
    $spam    = $_POST['spam'];
    $nombre=$users_vip_aprobar_nombre;

    $table = 'wp_users_vip';
    //$wpdb->delete($table, array( 'id' => $users_vip_delete_id) );

$wpdb->update('wp_users_vip', array( 
                                    'users_vip_estatus'=>3
                                ), array('id'=>$users_vip_aprobar_id)
            );


    $users_vip_style_aprobado='
                            style="
                                width: 100%;
                                height: 50px;
                                background-color: green;
                                font-size: 20px;
                                font-weight: bold;
                                color: white;
                                line-height: 42px;
                            "';

    $users_vip_style_button_del='
                            style="
                                width: 20px;
                                height: 50px;
                                background-color: white;
                                font-size: 20px;
                                font-weight: bold;
                                color: red;
                                line-height: 42px;
                                cursor: pointer;
                                float: left;
                            "';

    echo "\n";
    echo ' <div class="users_vip_style_aprobado"'.$users_vip_style_aprobado.' >';
    echo 'El registro '.$users_vip_aprobar_id.' - '.$users_vip_aprobar_nombre.' - '.$users_vip_aprobar_apellido.' se APROBÓ';
            echo '<div '.$users_vip_style_button_del.' class="users_vip_button_del">';
            echo 'X';
            echo '</div>'; 
    echo '</div>';
    echo "\n";
                if($spam == '' && $users_vip_aprobar_email != '' ){
                    $email=$users_vip_aprobar_email;
                    $to = $email;
 
                    $them_url=get_template_directory_uri();
                    $home_url=home_url();

                    $link_recover_es=$home_url.'/es/vip/password-setup/?c='.$code;
                    $link_recover_en=$home_url.'/en/vip/password-setup/?c='.$code;

 
                    $subject = ($lang=='es')?'Material Art Fair Vol. VI | Your VIP account has been approved':'Feria de Arte Material Vol. VI | Tu cuenta VIP ha sido aprobada';
                    if ($lang=='es') {

                    $attr_img_es='Feria de Arte Material Vol. VI';
                    $attr_facebook_es='Material en Facebook';
                    $attr_twitter_es='Material en Twitter';
                    $attr_instagram_es='Material en Instagram';

                    $es='
                    
                    <p>Saludos '.$nombre.',</p>
                    <p>Bienvenido al Programa VIP 2019 de la Feria de Arte Material, que se llevará a cabo del 7 al 10 de febrero del 2019 en el Frontón México de CDMX.</p>
                    
                    <p>En el Portal VIP encontrarás ofertas especiales de nuestros socios patrocinadores y todas las actividades que estamos preparando para la edición de 2019, así como también una lista de recomendaciones en la Ciudad de México para enriquecer tu experiencia alrededor de la feria. Te sugerimos revisar el sitio regularmente antes de que la feria empiece, ya que lo estaremos actualizando frecuentemente.</p>

                    <p>Para ver nuestro Programa VIP y solicitar reservación para los eventos que te interesen, te pedimos amablemente que confirmes tu asistencia a la feria y actives tu cuenta del Portal utilizando el siguiente vínculo:</p>
                    
                    <p><a href="'.$link_recover_es.'">ASISTIRÉ A LA FERIA DE ARTE MATERIAL VOL.6</a></p>

                    <p>Te recordamos que esta invitación es de uso personal, no es transferible y la puedes usar para asistir con un acompañante. Cuando llegues a la feria podrás recoger tu acceso en la recepción VIP ubicada en el lobby del Frontón México.</p>

                    <p>Muchas gracias y te esperamos en el Preview de la feria el jueves 7 de febrero entre las 12 y 3 pm.</p>

                    <p style="margin-top: 30px;">Saludos,</p>
                    <p style="text-align: left;"><b>Isa Castilla</b><br><b>Directora de Relaciones VIP</b></p>
                    <p style="text-align: left;"><b>Alejandro Trigos</b><br><b>Coordinador del Programa VIP</b></p>

                    ';

                    $table_mensaje = '<table style="font-family: Arial, Helvetica, sans-serif; font-size: 125%; background-color: #D9FFBD; width: 800px;">';
                    $table_mensaje .='<tbody>';

                    $table_mensaje .='<tr>';
                    $table_mensaje .='<td colspan="3">';
                    $table_mensaje .='<a href="'.$home_url.'"><img style="max-width: 100%" alt="'.$attr_img_es.'" title="'.$attr_img_es.'" src="'.$them_url.'/img/email_header.jpg"></a>';
                    $table_mensaje .='</td>';
                    $table_mensaje .='</tr>';

                    $table_mensaje .='<tr>';
                    $table_mensaje .='<td colspan="3" style="padding: 10px;">';
                    $table_mensaje .=apply_filters( 'the_content', $es );
                    $table_mensaje .='</td>';
                    $table_mensaje .='</tr>';

                    $table_mensaje .='<tr>';
                    $table_mensaje .='<td colspan="3">';
                    $table_mensaje .='<a href="'.$home_url.'"><img style="max-width: 100%" alt="'.$attr_img_es.'" title="'.$attr_img_es.'" src="'.$them_url.'/img/email_footer.jpg"></a>';
                    $table_mensaje .='</td>';
                    $table_mensaje .='</tr>';

                    $table_mensaje .='<tr>';
                    $table_mensaje .='<td style="width: 33%; padding: 10px;">';
                    $table_mensaje .='<p style="text-align: left">Melchor Ocampo 154-A<br>Col. San Rafael, Del. Cuauhtémoc<br></br>CDMX, 06470</p>';
                    $table_mensaje .='</td>';
                    $table_mensaje .='<td style="width: 33%; padding: 10px;">';
                    $table_mensaje .='<p style="text-align: center">+52 55 5256-5533<br><a href="mailto:info@material-fair.com">info@material-fair.com</a></p>';
                    $table_mensaje .='</td>';
                    $table_mensaje .='<td style="width: 33%; padding: 10px;">';
                    $table_mensaje .='<ul style="list-style: none; margin: 0; padding: 0; text-align: right">';
                    $table_mensaje .='<li style="display: inline; width: 100%;"><a href="https://www.facebook.com/materialfair"><img style="max-width: 40px" alt="Facebook"  title="'.$attr_facebook_es.'" src="'.$them_url.'/img/facebook-64.png"></a></li>';
                    $table_mensaje .='<li style="display: inline; width: 100%;"><a href="https://twitter.com/materialfair"><img style="max-width: 40px" alt="Twitter" title="'.$attr_twitter_es.'" src="'.$them_url.'/img/twitter-64.png"></a></li>';
                    $table_mensaje .='<li style="display: inline; width: 100%;"><a href="https://instagram.com/materialfair"><img style="max-width: 40px" alt="Instagram" title="'.$attr_instagram_es.'" src="'.$them_url.'/img/instagram-64.png"></a></li>';
                    $table_mensaje .='</ul>';
                    $table_mensaje .='</td>';
                    $table_mensaje .='</tr>';
                    $table_mensaje .='<tr>';
                    $table_mensaje .='<td colspan="3" style="text-align: center; font-size: 85%;">';
                    $table_mensaje .='<p>&copy; '.date('Y').' Feria de Arte Material México S.A. de C.V.</p>';
                    $table_mensaje .='</td>';
                    $table_mensaje .='</tr>';
        
                    $table_mensaje .='</tbody>';
                    $table_mensaje .='</table>';
                        
                    }else{

                    $attr_img_en='Material Art Fair Vol. VI';
                    $attr_facebook_en='Material at Facebook';
                    $attr_twitter_en='Material at Twitter';
                    $attr_instagram_en='Material at Instagram';

                    $en='
                    
                    <p>Dear '.$nombre.',</p>
                    <p>Welcome to Material’s 2019 VIP Program. The fair will take place from February 7th through 10th, 2019, at the Frontón México in Mexico City.</p>
                    
                    <p>In the VIP Portal, you’ll find special offers from our partners and all the activities we’re preparing for this year’s edition, as well as our list of recommendations in Mexico City to enrich your experience around the fair. We suggest you check it regularly before the fair starts, since we will be making frequent updates.</p>

                    <p>To see our VIP Program and RSVP to the events that interest you, we kindly ask you to confirm your assistance to the fair and activate your account using the following link:</p>
                    
                    <p><a href="'.$link_recover_en.'">ATTENDING MATERIAL ART FAIR VOL.6</a></p>

                    <p>Please remember that your invitation is for personal use only and grants you access with one guest. Your VIP card will be available for you to pick up at the VIP desk at the fair entrance.</p>

                    <p>We are looking forward to seeing you at the fair’s VIP Preview on Thursday, February 7 th , between 12 and 3 pm.</p>

                    <p style="margin-top: 30px;">Kind regards,</p>
                    <p style="text-align: left;"><b>Isa Castilla</b><br><b>VIP Relations Director</b></p>
                    <p style="text-align: left;"><b>Alejandro Trigos</b><br><b>VIP Program Coordinator</b></p>

                    ';

                    $table_mensaje = '<table style="font-family: Arial, Helvetica, sans-serif; font-size: 125%; background-color: #D9FFBD; width: 800px;">';
                    $table_mensaje .='<tbody>';

                    $table_mensaje .='<tr>';
                    $table_mensaje .='<td colspan="3">';
                    $table_mensaje .='<a href="'.$home_url.'"><img style="max-width: 100%" alt="'.$attr_img_en.'" title="'.$attr_img_en.'" src="'.$them_url.'/img/email_header.jpg"></a>';
                    $table_mensaje .='</td>';
                    $table_mensaje .='</tr>';

                    $table_mensaje .='<tr>';
                    $table_mensaje .='<td colspan="3" style="padding: 10px;">';
                    $table_mensaje .=apply_filters( 'the_content', $en );
                    $table_mensaje .='</td>';
                    $table_mensaje .='</tr>';

                    $table_mensaje .='<tr>';
                    $table_mensaje .='<td colspan="3">';
                    $table_mensaje .='<a href="'.$home_url.'"><img style="max-width: 100%" alt="'.$attr_img_en.'" title="'.$attr_img_en.'" src="'.$them_url.'/img/email_footer.jpg"></a>';
                    $table_mensaje .='</td>';
                    $table_mensaje .='</tr>';

                    $table_mensaje .='<tr>';
                    $table_mensaje .='<td style="width: 33%; padding: 10px;">';
                    $table_mensaje .='<p style="text-align: left">Melchor Ocampo 154-A<br>Col. San Rafael, Del. Cuauhtémoc<br></br>CDMX, 06470</p>';
                    $table_mensaje .='</td>';
                    $table_mensaje .='<td style="width: 33%; padding: 10px;">';
                    $table_mensaje .='<p style="text-align: center">+52 55 5256-5533<br><a href="mailto:info@material-fair.com">info@material-fair.com</a></p>';
                    $table_mensaje .='</td>';
                    $table_mensaje .='<td style="width: 33%; padding: 10px;">';
                    $table_mensaje .='<ul style="list-style: none; margin: 0; padding: 0; text-align: right">';
                    $table_mensaje .='<li style="display: inline; width: 100%;"><a href="https://www.facebook.com/materialfair"><img style="max-width: 40px" alt="Facebook"  title="'.$attr_facebook_en.'" src="'.$them_url.'/img/facebook-64.png"></a></li>';
                    $table_mensaje .='<li style="display: inline; width: 100%;"><a href="https://twitter.com/materialfair"><img style="max-width: 40px" alt="Twitter" title="'.$attr_twitter_en.'" src="'.$them_url.'/img/twitter-64.png"></a></li>';
                    $table_mensaje .='<li style="display: inline; width: 100%;"><a href="https://instagram.com/materialfair"><img style="max-width: 40px" alt="Instagram" title="'.$attr_instagram_en.'" src="'.$them_url.'/img/instagram-64.png"></a></li>';
                    $table_mensaje .='</ul>';
                    $table_mensaje .='</td>';
                    $table_mensaje .='</tr>';
                    $table_mensaje .='<tr>';
                    $table_mensaje .='<td colspan="3" style="text-align: center; font-size: 85%;">';
                    $table_mensaje .='<p>&copy; '.date('Y').' Feria de Arte Material México S.A. de C.V.</p>';
                    $table_mensaje .='</td>';
                    $table_mensaje .='</tr>';
        
                    $table_mensaje .='</tbody>';
                    $table_mensaje .='</table>';

                    }

                    $contenido=$table_mensaje;
                    $from = ($lang=='es')?'From: Feria de Arte Material VIP <vip@material-fair.com>':'"From: Material Art Fair VIP <vip@material-fair.com>\r\n";';
                    $mailheader .=$from; 
                    $mailheader .= "Reply-To: vip@material-fair.com\r\n"; 
                    $mailheader .='X-Mailer: PHP/' . phpversion() . "\r\n";
                    $mailheader .= "Content-type: text/html; charset=UTF-8\r\n";
                    mail($to, $subject, $contenido, $mailheader);

                }

                //echo "email: ".$email."\n";

   // print_r($_GET['users_vip_delete_id']);
// End pendiente operations
}
?>
<?php
global $wpdb;
//echo "the_post_g\n";
//print_r($_POST);

if ($_POST['users_vip_rechazar_id']){
//echo "\n sisi \n";

    $users_vip_rechazar_id       = $_POST['users_vip_rechazar_id'];
    $users_vip_rechazar_nombre   = $_POST['users_vip_rechazar_nombre'];
    $users_vip_rechazar_apellido = $_POST['users_vip_rechazar_apellido'];

    $table = 'wp_users_vip';
    //$wpdb->delete($table, array( 'id' => $users_vip_delete_id) );

    $wpdb->update('wp_users_vip', array( 
                                        'users_vip_estatus'=>4
                                    ), array('id'=>$users_vip_rechazar_id)
                );

    $users_vip_style_rechazado='
                            style="
                                width: 100%;
                                height: 50px;
                                background-color: red;
                                font-size: 20px;
                                font-weight: bold;
                                color: white;
                                line-height: 42px;
                            "';

    $users_vip_style_button_del='
                            style="
                                width: 20px;
                                height: 50px;
                                background-color: white;
                                font-size: 20px;
                                font-weight: bold;
                                color: red;
                                line-height: 42px;
                                cursor: pointer;
                                float: left;
                            "';

    echo "\n";
    echo ' <div class="users_vip_style_aprobado"'.$users_vip_style_rechazado.' >';
    echo 'El registro '.$users_vip_rechazar_id.' - '.$users_vip_rechazar_nombre.' - '.$users_vip_rechazar_apellido.' se RECHAZO';
            echo '<div '.$users_vip_style_button_del.' class="users_vip_button_del">';
            echo 'X';
            echo '</div>'; 
    echo '</div>';
    echo "\n";

// End pendiente operations
}
?>

<?php
global $wpdb;
//echo "the_post_g\n";
//print_r($_POST);users_vip_recupera_contrasena_id

if ($_POST['users_vip_recupera_contrasena_id']){
//echo "\n sisi \n";

    $users_vip_recupera_id       = $_POST['users_vip_recupera_contrasena_id'];
    $users_vip_recupera_nombre   = $_POST['users_vip_recupera_contrasena_nombre'];
    $users_vip_recupera_apellido = $_POST['users_vip_recupera_contrasena_apellido'];
    $users_vip_recupera_email    = $_POST['users_vip_recupera_contrasena_email'];
    $code    = $_POST['users_vip_recupera_contrasena_code'];
    $lang                        = $_POST['users_vip_recupera_contrasena_lang'];
    $spam = $_POST['users_vip_recupera_contrasena_spam'];
    $nombre=$users_vip_recupera_nombre;

    function randomRecovery($length = 6) {
        $str = "";
        //$characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
        $characters = array_merge(range('a','z'), range('0','9'));
        $max = count($characters) - 1;
        for ($i = 0; $i < $length; $i++) {
            $rand = mt_rand(0, $max);
            $str .= $characters[$rand];
        }
        return $str;
    }
    

    //$table = 'wp_users_vip';
    //$wpdb->delete($table, array( 'id' => $users_vip_delete_id) );

        
    if ($code==''||$code=='NULL') {

        $recovery = $users_vip_recupera_id.''.randomRecovery(20);

        $wpdb->update('wp_users_vip', array('users_vip_pass_recovery' => $recovery ), array('id'=>$users_vip_recupera_id) );
        $code = $recovery;

    }

                if($spam == '' && $users_vip_recupera_email != '' ){

                    $email=$users_vip_recupera_email;
                    $to = $email;
                     
                    $them_url=get_template_directory_uri();
                    $home_url=home_url();

                    $link_recover_es=$home_url.'/es/vip/password-recovery/?c='.$code;
                    $link_recover_en=$home_url.'/en/vip/password-recovery/?c='.$code;
                    $subject = ($lang=='es')?'Recupera Contraseña':'Recovery Password';

 
                    if ($lang=='es') {

                    $attr_img_es='Feria de Arte Material Vol. VI';
                    $attr_facebook_es='Material en Facebook';
                    $attr_twitter_es='Material en Twitter';
                    $attr_instagram_es='Material en Instagram';

                    $es='

                    <p>Saludos '.$nombre.',</p>
                    
                    <p>
                    Gracias por tu interés en el Programa VIP 2019 de la Feria de Arte Material. Para recuperar tu acceso al Portal VIP, te pedimos por favor que utilices el siguiente vínculo:
                    </p>

                    <p><a href="'.$link_recover_es.'">RECUPERAR CONTRASEÑA</a></p>

                    <p style="margin-top: 30px;">Saludos cordiales,</p>
                    
                    <p style="text-align: left;"><b>Isa Castilla</b><br><b>Directora de Relaciones VIP</b></p>
                    <p style="text-align: left;"><b>Alejandro Trigos</b><br><b>Coordinador del Programa VIP</b></p>

                    ';

                    $table_mensaje = '<table style="font-family: Arial, Helvetica, sans-serif; font-size: 125%; background-color: #D9FFBD; width: 800px;">';
                    $table_mensaje .='<tbody>';

                    $table_mensaje .='<tr>';
                    $table_mensaje .='<td colspan="3">';
                    $table_mensaje .='<a href="'.$home_url.'"><img style="max-width: 100%" alt="'.$attr_img_es.'" title="'.$attr_img_es.'" src="'.$them_url.'/img/email_header.jpg"></a>';
                    $table_mensaje .='</td>';
                    $table_mensaje .='</tr>';

                    $table_mensaje .='<tr>';
                    $table_mensaje .='<td colspan="3" style="padding: 10px;">';
                    $table_mensaje .=apply_filters( 'the_content', $es );
                    $table_mensaje .='</td>';
                    $table_mensaje .='</tr>';

                    $table_mensaje .='<tr>';
                    $table_mensaje .='<td colspan="3">';
                    $table_mensaje .='<a href="'.$home_url.'"><img style="max-width: 100%" alt="'.$attr_img_es.'" title="'.$attr_img_es.'" src="'.$them_url.'/img/email_footer.jpg"></a>';
                    $table_mensaje .='</td>';
                    $table_mensaje .='</tr>';

                    $table_mensaje .='<tr>';
                    $table_mensaje .='<td style="width: 33%; padding: 10px;">';
                    $table_mensaje .='<p style="text-align: left">Melchor Ocampo 154-A<br>Col. San Rafael, Del. Cuauhtémoc<br></br>CDMX, 06470</p>';
                    $table_mensaje .='</td>';
                    $table_mensaje .='<td style="width: 33%; padding: 10px;">';
                    $table_mensaje .='<p style="text-align: center">+52 55 5256-5533<br><a href="mailto:info@material-fair.com">info@material-fair.com</a></p>';
                    $table_mensaje .='</td>';
                    $table_mensaje .='<td style="width: 33%; padding: 10px;">';
                    $table_mensaje .='<ul style="list-style: none; margin: 0; padding: 0; text-align: right">';
                    $table_mensaje .='<li style="display: inline; width: 100%;"><a href="https://www.facebook.com/materialfair"><img style="max-width: 40px" alt="Facebook"  title="'.$attr_facebook_es.'" src="'.$them_url.'/img/facebook-64.png"></a></li>';
                    $table_mensaje .='<li style="display: inline; width: 100%;"><a href="https://twitter.com/materialfair"><img style="max-width: 40px" alt="Twitter" title="'.$attr_twitter_es.'" src="'.$them_url.'/img/twitter-64.png"></a></li>';
                    $table_mensaje .='<li style="display: inline; width: 100%;"><a href="https://instagram.com/materialfair"><img style="max-width: 40px" alt="Instagram" title="'.$attr_instagram_es.'" src="'.$them_url.'/img/instagram-64.png"></a></li>';
                    $table_mensaje .='</ul>';
                    $table_mensaje .='</td>';
                    $table_mensaje .='</tr>';
                    $table_mensaje .='<tr>';
                    $table_mensaje .='<td colspan="3" style="text-align: center; font-size: 85%;">';
                    $table_mensaje .='<p>&copy; '.date('Y').' Feria de Arte Material México S.A. de C.V.</p>';
                    $table_mensaje .='</td>';
                    $table_mensaje .='</tr>';
        
                    $table_mensaje .='</tbody>';
                    $table_mensaje .='</table>';
                        
                    }else{

                    $attr_img_en='Material Art Fair Vol. VI';
                    $attr_facebook_en='Material at Facebook';
                    $attr_twitter_en='Material at Twitter';
                    $attr_instagram_en='Material at Instagram';

                    $en='

                    <p>Dear '.$nombre.',</p>
                    
                    <p>
                    Thanks for your interest in Material Art Fair’s 2019 VIP Program. To recover your access to the VIP portal, we kindly ask you to use the following link:
                    </p>

                    <p><a href="'.$link_recover_en.'">RECOVER MY PASSWORD</a></p>

                    <p style="margin-top: 30px;">Kind regards,</p>
                    
                    <p style="text-align: left;"><b>Isa Castilla</b><br><b>VIP Relations Director</b></p>
                    <p style="text-align: left;"><b>Alejandro Trigos</b><br><b>VIP Program Coordinator</b></p>

                    ';

                    $table_mensaje = '<table style="font-family: Arial, Helvetica, sans-serif; font-size: 125%; background-color: #D9FFBD; width: 800px;">';
                    $table_mensaje .='<tbody>';

                    $table_mensaje .='<tr>';
                    $table_mensaje .='<td colspan="3">';
                    $table_mensaje .='<a href="'.$home_url.'"><img style="max-width: 100%" alt="'.$attr_img_en.'" title="'.$attr_img_en.'" src="'.$them_url.'/img/email_header.jpg"></a>';
                    $table_mensaje .='</td>';
                    $table_mensaje .='</tr>';

                    $table_mensaje .='<tr>';
                    $table_mensaje .='<td colspan="3" style="padding: 10px;">';
                    $table_mensaje .=apply_filters( 'the_content', $en );
                    $table_mensaje .='</td>';
                    $table_mensaje .='</tr>';

                    $table_mensaje .='<tr>';
                    $table_mensaje .='<td colspan="3">';
                    $table_mensaje .='<a href="'.$home_url.'"><img style="max-width: 100%" alt="'.$attr_img_en.'" title="'.$attr_img_en.'" src="'.$them_url.'/img/email_footer.jpg"></a>';
                    $table_mensaje .='</td>';
                    $table_mensaje .='</tr>';

                    $table_mensaje .='<tr>';
                    $table_mensaje .='<td style="width: 33%; padding: 10px;">';
                    $table_mensaje .='<p style="text-align: left">Melchor Ocampo 154-A<br>Col. San Rafael, Del. Cuauhtémoc<br></br>CDMX, 06470</p>';
                    $table_mensaje .='</td>';
                    $table_mensaje .='<td style="width: 33%; padding: 10px;">';
                    $table_mensaje .='<p style="text-align: center">+52 55 5256-5533<br><a href="mailto:info@material-fair.com">info@material-fair.com</a></p>';
                    $table_mensaje .='</td>';
                    $table_mensaje .='<td style="width: 33%; padding: 10px;">';
                    $table_mensaje .='<ul style="list-style: none; margin: 0; padding: 0; text-align: right">';
                    $table_mensaje .='<li style="display: inline; width: 100%;"><a href="https://www.facebook.com/materialfair"><img style="max-width: 40px" alt="Facebook"  title="'.$attr_facebook_en.'" src="'.$them_url.'/img/facebook-64.png"></a></li>';
                    $table_mensaje .='<li style="display: inline; width: 100%;"><a href="https://twitter.com/materialfair"><img style="max-width: 40px" alt="Twitter" title="'.$attr_twitter_en.'" src="'.$them_url.'/img/twitter-64.png"></a></li>';
                    $table_mensaje .='<li style="display: inline; width: 100%;"><a href="https://instagram.com/materialfair"><img style="max-width: 40px" alt="Instagram" title="'.$attr_instagram_en.'" src="'.$them_url.'/img/instagram-64.png"></a></li>';
                    $table_mensaje .='</ul>';
                    $table_mensaje .='</td>';
                    $table_mensaje .='</tr>';
                    $table_mensaje .='<tr>';
                    $table_mensaje .='<td colspan="3" style="text-align: center; font-size: 85%;">';
                    $table_mensaje .='<p>&copy; '.date('Y').' Feria de Arte Material México S.A. de C.V.</p>';
                    $table_mensaje .='</td>';
                    $table_mensaje .='</tr>';
        
                    $table_mensaje .='</tbody>';
                    $table_mensaje .='</table>';

                    }

                    $contenido=$table_mensaje;
                    $from = ($lang=='es')?'From: Feria de Arte Material VIP <vip@material-fair.com>':'"From: Material Art Fair VIP <vip@material-fair.com>\r\n";';
                    $mailheader .=$from;
                    $mailheader .= "Reply-To: vip@material-fair.com\r\n"; 
                    $mailheader .='X-Mailer: PHP/' . phpversion() . "\r\n";
                    $mailheader .= "Content-type: text/html; charset=UTF-8\r\n";
                    mail($to, $subject, $contenido, $mailheader);

                }

    $users_vip_style_recupera='
                            style="
                                width: 100%;
                                height: 50px;
                                background-color: #007575;
                                font-size: 20px;
                                font-weight: bold;
                                color: white;
                                line-height: 42px;
                            "';

    $users_vip_style_button_del='
                            style="
                                width: 20px;
                                height: 50px;
                                background-color: white;
                                font-size: 20px;
                                font-weight: bold;
                                color: red;
                                line-height: 42px;
                                cursor: pointer;
                                float: left;
                            "';

    echo "\n";
    echo ' <div class="users_vip_style_aprobado"'.$users_vip_style_recupera.' >';
    echo 'Se envío un email de reperación para '.$users_vip_recupera_id.' - '.$users_vip_recupera_nombre.' - '.$users_vip_recupera_apellido.' con éxito.';
            echo '<div '.$users_vip_style_button_del.' class="users_vip_button_del">';
            echo 'X';
            echo '</div>'; 
    echo '</div>';
    echo "\n";

// End pendiente operations
}
?>
<?php
 if ($_POST['users_vip_btn_descarga']){

add_action('wp_ajax_csv_pull','wpse_ajax_csv_pull');

//    function wpse_ajax_csv_pull() {
  global $wpdb;
  $file = 'email_csv'; // ?? not defined in original code
  $results = $wpdb->get_results("SELECT * FROM wp_users_vip;",ARRAY_A);

  if (empty($results)) {
    return;
  }

  $csv_output = '"'.implode('";"',array_keys($results[0])).'";'."\n";;

  foreach ($results as $row) {
    $csv_output .= '"'.implode('";"',$row).'";'."\n";
  }
  $csv_output .= "\n";

  $filename = $file."_".date("Y-m-d_H-i",time());
  header('Content-Type: text/csv');
  header('Content-Disposition: attachment; filename="' . $filename . '"');
  header('Pragma: no-cache');
  header('Expires: 0');
  print $csv_output;
  exit;
//}
//wpse_ajax_csv_pull();

}
?>
<?php
if ($_POST) {
//echo "si";
echo "\n";
global $wpdb;
$users_vip_nombre=$_POST['users-vip-nombre'];
$users_vip_apellido=$_POST['users-vip-apellido'];
$users_vip_category_id=$_POST['users-vip-categoria'];
$users_vip_email=$_POST['users-vip-email'];
$users_vip_pass=$_POST['users-vip-pass'];

//$wpdb->query('INSERT INTO wp_users_vip("users_vip_nombre","users_vip_apellido","users_vip_category_id","users_vip_email","users_vip_pass")VALUES($users_vip_nombre,$users_vip_apellido,$users_vip_category_id,$users_vip_email,$users_vip_pass)');
//require_once('../../../wp-config.php');

//print_r($wpdb);
$wpdb->insert('wp_users_vip', array(
'users_vip_nombre' => $users_vip_nombre,
'users_vip_apellido' => $users_vip_apellido,
'users_vip_category_id' => $users_vip_category_id, 
'users_vip_email' => $users_vip_email, 
'users_vip_pass' => $users_vip_pass
));

}else{
//echo "no";
}
?>
<?php //form para agregar un usuario ?>
<!-- <form 
    
    method="post"
    name="users_vip_form_add"
    action="" 
>

<table style="width:100%">


    <tr>
        <td style="width: 150px;">
            <label for="users-vip-nombre">
                <?php _e( 'Nombre: ', 'uv_userss-vip-textdomain' )?>
            </label>
        </td>
        <td>
            <input
            type="text" 
            name="users-vip-nombre" 
            id="users-vip-nombre" 
            placeholder="Nombre"
            value="<?php //echo $_POST['nombre']; ?>"  
            />
        </td>
    </tr>

    <tr>
        <td style="width: 150px;">
            <label for="users-vip-apellido">
                <?php _e( 'apellido: ', 'uv_users-vip-textdomain' )?>
            </label>
        </td>
        <td>
            <input
            type="text" 
            name="users-vip-apellido" 
            id="users-vip-apellido" 
            placeholder="Apellido"
            value="<?php ?>"  
            />
        </td>
    </tr>

    <tr>
        <td style="width: 150px;">
            <label for="users-vip-categoria">
                <?php _e( 'Categoría: ', 'uv_users-vip-textdomain' )?>
            </label>
        </td>
        <td>
            <select name="users-vip-categoria">
              <option value="collector" selected>Collector</option>
              <option value="Independet art professional">Independet art professional</option>
              <option value="Institutional art professional">Institutional art professional</option>
              <option value="Press">Press</option>
              <option value="Admin">Admin</option>
            </select>
        </td>
    </tr>

    <tr>
        <td style="width: 150px;">
            <label for="users-vip-email">
                <?php _e( 'Email: ', 'uv_users-vip-textdomain' )?>
            </label>
        </td>
        <td>
            <input
            type="text" 
            name="users-vip-email" 
            id="users-vip-email" 
            placeholder="Email"
            value="<?php ?>"  
            />
        </td>
    </tr>

    <tr>
        <td style="width: 150px;">
            <label for="users-vip-pass">
                <?php _e( 'Pass: ', 'uv_users-vip-textdomain' )?>
            </label>
        </td>
        <td>
            <input
            type="text" 
            name="users-vip-pass" 
            id="users-vip-pass" 
            placeholder="Pass"
            value="<?php ?>"  
            />
        </td>
    </tr>

    


    <tr>
        
        <td>
            <input
            type="submit" 
            name="users-vip-submit" 
            id="users-vip-submit" 
            value="<?php echo 'Agregar'; ?>"  
            />
        </td>
    </tr>

 </table>
</form> -->
<style type="text/css">
    .usuarios_vip_content{}
    
    .vip_usuario_aprobado{
        /*background-color: green;*/
        /*color: white!important;*/
        /*position: relative;*/
        /*font-weight: bold;*/
        /*border-radius: 5px;*/
    }
    .estatus_aprobado{
        background-color: green;
        border: none;
        color: white;
        padding: 5px 8px;
        text-decoration: none;
        margin: 4px 2px;
        /*cursor: pointer;*/
    }
    .estatus_pendiente{
        background-color: orange;
        border: none;
        color: white;
        padding: 5px 8px;
        text-decoration: none;
        margin: 4px 2px;
        /*cursor: pointer;*/
    }
    .estatus_rechazado{
        background-color: red;
        border: none;
        color: white;
        padding: 5px 8px;
        text-decoration: none;
        margin: 4px 2px;
        /*cursor: pointer;*/
    }
    .btn_elimina{
        background-color: #c70404;
        border: none;
        color: white;
        padding: 5px 13px;
        /* padding: 16px 32px; */
        text-decoration: none;
        margin: 4px 2px;
        cursor: pointer;
    }
    .no_disponible{
        background-color: #868484;
        border: none;
        color: white;
        padding: 5px 5px;
        text-decoration: none;
        margin: 4px 2px;
        /* cursor: pointer; */
    }
    .vip_usuario_pendiente{
        /*background-color: #bdb500;*/
        color: white!important;
        position: relative;
        font-weight: bold;
        /*border-radius: 5px;*/
    }

    .submit_pendiente{
        background-color: #bdb500;
        border: none;
        color: white;
        padding: 16px 12px;
        /*padding: 16px 32px;*/
        text-decoration: none;
        margin: 4px 2px;
        cursor: pointer;
    }

    .no_habilitado{
        /*background-color: #a7a7a7;*/
        /*color: white!important;*/
        /*position: relative;*/
        /*font-weight: bold;*/
    }

    .no_habilitado span{
        background-color: #a7a7a7;
        border: none;
        color: white;
        padding: 16px 4px;
        text-decoration: none;
        margin: 4px 2px;
    }
    .recuperar_contrasena{
        /*background-color: #007575;*/
        /*color: white!important;*/
        /*position: relative;*/
        /*font-weight: bold;*/
    }
    .btn_recupera_contrasena{
        background-color: #007575;
        border: none;
        color: white;
        padding: 5px 8px;
        text-decoration: none;
        margin: 4px 2px;
        cursor: pointer;
    }
    .tr_fixed{
        background-color: darksalmon;
        position: fixed;
        width: 80%;
        display: table;
        z-index: 10;
        top: 50px;
    }
    .td_center_hori_vert{
        text-align: center;
        vertical-align: middle !important;
        /*padding: 25px!important;*/
    }
    .btn_user_editar{
        background-color: #795548;
        border: none;
        color: white;
        padding: 5px 18px;
        /*padding: 16px 32px;*/
        text-decoration: none;
        margin: 4px 2px;
        cursor: pointer;

    }
    .btn_confirma_aprobar{
        background-color: #06ad06;
        border: none;
        color: white;
        padding: 5px 10px;
        /* padding: 16px 32px; */
        text-decoration: none;
        margin: 4px 2px;
        cursor: pointer;
    }

    .btn_confirma_rechazar{
        background-color: red;
        border: none;
        color: white;
        padding: 5px 12px;
        /* padding: 16px 32px; */
        text-decoration: none;
        margin: 4px 2px;
        cursor: pointer;
    }

</style>

<div class="usuarios_vip_content">

    <table class="wp-list-table widefat fixed striped users">
        <tr>
            <?php
                    
                $buscar=$_GET['s'];

            ?>
            <td colspan="10"style="text-align: right;">
                <form action="admin.php?page=usuarios_vip" method="get">
                <input type="hidden" name="page" value="usuarios_vip" />
                Buscar: <input type="text" name="s" value="<?php echo $buscar; ?>" />
                </form>
            </td>
        </tr>
        <tr>
            <td class="td_center_hori_vert" >Nombre</td>
            <td class="td_center_hori_vert" >Apellido</td>
            <td class="td_center_hori_vert" >email</td>
            <td class="td_center_hori_vert" >Perfil</td>
            <td class="td_center_hori_vert" >Estatus</td>
            <td class="td_center_hori_vert" colspan="2">Cambiar Estatus</td>
            <td class="td_center_hori_vert" >Contraseña</td>
            <td class="td_center_hori_vert" >Modificar</td>
            <td class="td_center_hori_vert" >Eliminar</td>
        </tr>
<?php

?>
<?php
//global $wpdb;
//$wp_users_vip = $wpdb->get_results("SELECT * FROM wp_users_vip ORDER BY id DESC LIMIT 0,20");


$registros=20;
$pagina=(!$_GET['num'])?'1':''.$_GET['num'];
if (is_numeric($pagina)) {
    $inicio=(($pagina-1)*$registros);
}else{
    $inicio=0;
}

global $wpdb;
$estatus_registrado = 1;
$estatus_aprobado   = 3;
$estatus_rechazado  = 4;
$estatus_eliminado  = 7;

if ($buscar==''||empty($buscar)){

$wp_users_vip = $wpdb->get_results("SELECT * FROM wp_users_vip WHERE (users_vip_estatus = $estatus_aprobado OR users_vip_estatus = $estatus_registrado OR users_vip_estatus = $estatus_rechazado)  ORDER BY id DESC LIMIT  $inicio,$registros");

$wpdb_col=$wpdb->get_col( "SELECT * FROM wp_users_vip ");

$wpdb_col_paginacion=$wpdb->get_col( "SELECT * FROM wp_users_vip WHER(E users_vip_estatus = $estatus_aprobado OR users_vip_estatus = $estatus_registrado OR users_vip_estatus = $estatus_rechazado)   ORDER BY id DESC LIMIT  $inicio,$registros");

    
}else{

$wp_users_vip = $wpdb->get_results("SELECT * FROM wp_users_vip WHERE (users_vip_estatus = $estatus_aprobado OR users_vip_estatus = $estatus_registrado OR users_vip_estatus = $estatus_rechazado) AND LOWER(users_vip_nombre) LIKE LOWER('%$buscar%') OR LOWER(users_vip_apellido) LIKE LOWER('%$buscar%') OR LOWER(users_vip_email) LIKE LOWER('%$buscar%') ORDER BY id DESC LIMIT  $inicio,$registros");

//$wpdb_col=$wpdb->get_col( "SELECT * FROM wp_users_vip ");
$wpdb_col=$wpdb->get_col( "SELECT * FROM wp_users_vip WHERE (users_vip_estatus = $estatus_aprobado OR users_vip_estatus = $estatus_registrado OR users_vip_estatus = $estatus_rechazado) AND LOWER(users_vip_nombre) LIKE LOWER('%$buscar%') OR LOWER(users_vip_apellido) LIKE LOWER('%$buscar%') OR LOWER(users_vip_email) LIKE LOWER('%$buscar%') ORDER BY id DESC " );

$wpdb_col_paginacion=$wpdb->get_col( "SELECT * FROM wp_users_vip WHER(E users_vip_estatus = $estatus_aprobado OR users_vip_estatus = $estatus_registrado OR users_vip_estatus = $estatus_rechazado) AND LOWER(users_vip_nombre) LIKE LOWER('%$buscar%') OR LOWER(users_vip_apellido) LIKE LOWER('%$buscar%') OR LOWER(users_vip_email) LIKE LOWER('%$buscar%')  ORDER BY id DESC LIMIT  $inicio,$registros");
    

}


$wp_users_vip_count_row=count($wpdb_col);
$wp_users_vip_count_row_paginacion=count($wpdb_col_paginacion);
$paginas=ceil($wp_users_vip_count_row/$registros);


echo "\n <!-- \n";
echo "\n here:__";
print_r(count($wp_users_vip));


echo "\n";
echo "\n";
echo "\n --> \n";

$k=$wp_users_vip_count_row;
foreach ($wp_users_vip as $key => $value) {$i++;
    //print_r($value);

$k=($wp_users_vip_count_row+1-(($pagina-1)*$registros))-$i;

/*if ($value->users_vip_category_id=='') {
    $wpdb->update('wp_users_vip', array( 
                                        'users_vip_category_id'=>1
                                    ), array('id'=>$value->id)
                );}
*/
/*if ($value->users_vip_category=='NULL') {
    $wpdb->update('wp_users_vip', array( 
                                        'users_vip_category'=>''
                                    ), array('id'=>$value->id)
                );

}*/


echo '<tr>';
echo '
      <td class="td_center_hori_vert" >'.$value->users_vip_nombre.'</td>
      <td class="td_center_hori_vert" >'.$value->users_vip_apellido.'</td>
      <td class="td_center_hori_vert" >'.$value->users_vip_email.'</td>';

/* colum categoría*/


 ($value->users_vip_category_id==1)?$categoria ='Coleccionista':'';
 ($value->users_vip_category_id==2)?$categoria ='Curador':'';
 ($value->users_vip_category_id==3)?$categoria ='Personal de Museo o Institucional':'';
 ($value->users_vip_category_id==4)?$categoria ='Asesor':'';
 ($value->users_vip_category_id==5)?$categoria ='Galerista':'';
 ($value->users_vip_category_id==6)?$categoria ='Artista':'';
 ($value->users_vip_category_id==7)?$categoria ='Otro':'';

echo '<td class="td_center_hori_vert" >'.$categoria.'</td>';
/*end colum categoría*/

/* colum estatus*/
if ($value->users_vip_estatus==$estatus_aprobado) {
    echo  '<td class="td_center_hori_vert vip_usuario_aprobado"><span class="estatus_aprobado">Aprobado</span></td>';
}
if ($value->users_vip_estatus==$estatus_registrado) {
    echo  '<td class="td_center_hori_vert vip_usuario_aprobado"><span class="estatus_pendiente">Pendiente</span></td>';
}
if ($value->users_vip_estatus==$estatus_rechazado) {
    echo  '<td class="td_center_hori_vert vip_usuario_aprobado"><span class="estatus_rechazado">Rechazado</span></td>';
}
/* END colum estatus */

/* colum cambiar estatus*/
if ($value->users_vip_estatus==$estatus_aprobado) {
    echo  '<td class="td_center_hori_vert " colspan="2"><span class="no_disponible">No Disponible</span></td>';
}
if ($value->users_vip_estatus==$estatus_rechazado) {
    echo  '<td class="td_center_hori_vert " colspan="2"><span class="no_disponible">No Disponible</span></td>';
}
if ($value->users_vip_estatus==$estatus_registrado) {
    echo  '<td class="td_center_hori_vert vip_usuario_pendiente">';
    echo '<form
                    name="users_vip_form_aprobar"
                    id="users_vip_form_aprobar"
                    method="post"
                    action="">
                    <input type="hidden" name="page" value="usuarios_vip">
                    <input type="hidden" name="users_vip_aprobar_id" value="'.$value->id.'">
                    <input type="hidden" name="users_vip_aprobar_nombre" value="'.$value->users_vip_nombre.'">
                    <input type="hidden" name="users_vip_aprobar_apellido" value="'.$value->users_vip_apellido.'">
                    <input type="hidden" name="users_vip_aprobar_email" value="'.$value->users_vip_email.'">
                    <input type="hidden" name="users_vip_aprobar_code" value="'.$value->users_vip_pass_recovery.'">
                    <input type="hidden" name="users_vip_aprobar_lang" value="'.$value->users_vip_lang.'">

                    <input type="hidden" name="spam" value="">
                    <input type="submit"  value="¿Aprobar?" class="btn_confirma_aprobar submit_aprobar">
                </form>';
    echo '</td>';
    echo  '<td class="td_center_hori_vert vip_usuario_pendiente">';
    echo '<form
                    name="users_vip_form_pendiente"
                    id="users_vip_form_pendiente"
                    method="post"
                    action="">
                    <input type="hidden" name="page" value="usuarios_vip">
                    <input type="hidden" name="users_vip_rechazar_id" value="'.$value->id.'">
                    <input type="hidden" name="users_vip_rechazar_nombre" value="'.$value->users_vip_nombre.'">
                    <input type="hidden" name="users_vip_rechazar_apellido" value="'.$value->users_vip_apellido.'">
                    <input type="submit"  value="Rechazar" class="btn_confirma_rechazar submit_pendiente">
                </form>';
    echo '</td>';
}
/* END colum cambiar estatus */

/* colum recuperar contraseña */
if ($value->users_vip_estatus==$estatus_aprobado) {

    echo  '<td class="td_center_hori_vert recuperar_contrasena">';
    echo  '<form
                    name="users_vip_form_recupera_contrasena"
                    id="users_vip_form_recupera_contrasena"
                    method="post"
                    action="">
                    <input type="hidden" name="page" value="usuarios_vip">
                    <input type="hidden" name="users_vip_recupera_contrasena_id" value="'.$value->id.'">
                    <input type="hidden" name="users_vip_recupera_contrasena_nombre" value="'.$value->users_vip_nombre.'">
                    <input type="hidden" name="users_vip_recupera_contrasena_apellido" value="'.$value->users_vip_apellido.'">
                    <input type="hidden" name="users_vip_recupera_contrasena_email" value="'.$value->users_vip_email.'">
                    <input type="hidden" name="users_vip_recupera_contrasena_lang" value="'.$value->users_vip_lang.'">
                    <input type="hidden" name="users_vip_recupera_contrasena_code" value="'.$value->users_vip_pass_recovery.'">
                    <input type="hidden" name="users_vip_recupera_contrasena_spam" value="">
                    <input type="submit"  value="Recuperar" class="btn_recupera_contrasena">
                </form>';
    echo  '</td>';
 
}
if ($value->users_vip_estatus==$estatus_registrado) {
    echo  '<td class="td_center_hori_vert"><span class="no_disponible">No Disponible</span></td>';
}
if ($value->users_vip_estatus==$estatus_rechazado) {
    echo  '<td class="td_center_hori_vert " ><span class="no_disponible">No Disponible</span></td>';
}
/* END colum recuperar contraseña */


//echo '<td style="text-align: center;" >Recuperar</td>';

/* colum editar */
if ($value->users_vip_estatus==$estatus_aprobado) {
echo  '<td class="td_center_hori_vert" >

        <form
            action="'.home_url().'/wp-admin/admin.php?page=usuarios_vip_editar"
            method="get">
            <input type="hidden" name="page" value="usuarios_vip_editar">
            <input type="hidden" name="user_vip_id" value="'.$value->id.'"> 
            <input type="submit" value="Editar" class="btn_user_editar"> 
        </form>

       </td>';
    
}
if ($value->users_vip_estatus==$estatus_registrado) {
    echo  '<td class="td_center_hori_vert " ><span class="no_disponible">No Disponible</span></td>';
}
if ($value->users_vip_estatus==$estatus_rechazado) {
    echo  '<td class="td_center_hori_vert " ><span class="no_disponible">No Disponible</span></td>';
}
/* end colum editar */

echo '<td class="td_center_hori_vert">

            <form
                name="users_vip_form_delete"
                id="users_vip_form_delete"
                method="post"
                action="">
                <input type="hidden" name="page" value="usuarios_vip">
                <input type="hidden" name="users_vip_delete_id" value="'.$value->id.'">
                <input type="hidden" name="users_vip_delete_nombre" value="'.$value->users_vip_nombre.'">
                <input type="hidden" name="users_vip_delete_apellido" value="'.$value->users_vip_apellido.'">
                <input type="submit"  value="X" class="btn_confirma_eliminar btn_elimina">
            </form>
           
       </td>';
echo '</tr>'.PHP_EOL;
}
/*              <button 
                    type="submit" 
                    form="users_vip_form_delete"
                    data-id="'.$value->id.'"
                    class="btn_confirma"
            >X</button> */
//<input type="submit"  value="X"> 
?>  

       <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td colspan="2" >
  <!--               <form
                    name="users_vip_form_descarga"
                    id="users_vip_form_descarga"
                    method="post" 
                    action=""
                    >
                    <input type="submit" name="users_vip_btn_descarga" value="DESCARGA">
                </form> -->
                
                <!-- <?php //echo admin_url('admin-ajax.php?action=csv_pull', 'https'); ?> -->
                
            </td>
        </tr> 
            
    </table>
<?php



if ($buscar==''||empty($buscar)){

    echo ($pagina>1)?'<a href="'.home_url().'/wp-admin/admin.php?page=usuarios_vip&num='.($pagina-1).'">Anterior</a>':'';

    for ($cont=1; $cont <=$paginas; $cont++) { 


        echo ($cont==$pagina)?''.$cont:'<a href="'.home_url().'/wp-admin/admin.php?page=usuarios_vip&num='.$cont.'">'.$cont.'</a>';
        echo " ";
    }
    echo ($pagina<$paginas)?'<a href="'.home_url().'/wp-admin/admin.php?page=usuarios_vip&num='.($pagina+1).'">Siguiente</a>':'';
    
}else{


    echo ($pagina>1)?'<a href="'.home_url().'/wp-admin/admin.php?page=usuarios_vip&num='.($pagina-1).'&s='.$buscar.'">Anterior</a>':'';

    for ($cont=1; $cont <=$paginas; $cont++) { 


        echo ($cont==$pagina)?''.$cont:'<a href="'.home_url().'/wp-admin/admin.php?page=usuarios_vip&num='.$cont.'&s='.$buscar.'">'.$cont.'</a>';
        echo " ";
    }
    echo ($pagina<$paginas)?'<a href="'.home_url().'/wp-admin/admin.php?page=usuarios_vip&num='.($pagina+1).'&s='.$buscar.'">Siguiente</a>':'';

}
?>
<!--     <div class="atras">Atras</div>
    <div class="siguiente">Siguiente</div> -->
</div>

</div>
<?php } // key for function register_options_page(  ) ?>
<?php function usuarios_vip_editar_function(){?>
<?php
global $wpdb;
//print_r($_GET);
$_GET['user_vip_id'];
$user_vip_edit_id= !(isset($_GET['user_vip_id']))?'':''.$_GET['user_vip_id'];
echo "\n\n";
if ($user_vip_edit_id!='') {

    $wp_users_vip_edit_query = $wpdb->get_results("SELECT * FROM wp_users_vip WHERE id=".$user_vip_edit_id);
    $users_vip_edit_id=$wp_users_vip_edit_query[0]->id;
    $users_vip_edit_name=$wp_users_vip_edit_query[0]->users_vip_nombre;
    $users_vip_edit_apellido=$wp_users_vip_edit_query[0]->users_vip_apellido;
    $users_vip_edit_category=$wp_users_vip_edit_query[0]->users_vip_category_id;
    $users_vip_edit_pais=$wp_users_vip_edit_query[0]->users_vip_pais;
    $users_vip_edit_rango_edad=$wp_users_vip_edit_query[0]->users_vip_rango_edad;
    $users_vip_edit_afiliacion=$wp_users_vip_edit_query[0]->users_vip_afiliacion;
    $users_vip_edit_email=$wp_users_vip_edit_query[0]->users_vip_email;
    $users_vip_edit_pass=$wp_users_vip_edit_query[0]->users_vip_pass;
    $users_vip_edit_lang=$wp_users_vip_edit_query[0]->users_vip_lang;

}
//$id = stripslashes_deep($_POST['id']); //added stripslashes_deep which removes WP escaping.
if ($_POST) {
   // print_r($_POST);
    //$user_vip_edit_id=$_POST['users-vip-id'];
    $echo_wrong='';
    $wrong_email='';
    $users_vip_edit_name=stripslashes_deep($_POST['users-vip-nombre']);
    $users_vip_edit_apellido=stripslashes_deep($_POST['users-vip-apellido']);
    $users_vip_edit_category=stripslashes_deep($_POST['users-vip-categoria']);
    $users_vip_edit_rango_edad=stripslashes_deep($_POST['users-vip-rango_edad']);
    $users_vip_edit_pais=stripslashes_deep($_POST['users-vip-pais']);
    $users_vip_edit_afiliacion=stripslashes_deep($_POST['users-vip-afiliacion']);
    $users_vip_edit_email=stripslashes_deep($_POST['users-vip-email']);
    $users_vip_edit_pass=$_POST['users-vip-pass'];
    //$users_vip_edit_lang=stripslashes_deep($_POST['users-vip-lang']);

    if ($users_vip_edit_pass=='') {
        $hash = $wp_users_vip_edit_query[0]->users_vip_pass;
    }else{
        if (strlen($users_vip_edit_pass) > 7 && preg_match('#^\S*(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$#', $users_vip_edit_pass)
                            //&& preg_match('/[a-z]/', $users_vip_edit_pass)
                            //&& preg_match('/[A-Z]/', $users_vip_edit_pass)
                            //&& preg_match('/[0-9]/',$users_vip_edit_pass)
            ){

            $hash = wp_hash_password( $users_vip_edit_pass );

        }else{
            $echo_wrong = 'Tu contraseña debe de ser mayor a 8 caracteres e incluir minúsculas y mayúsculas.';
        }

    }

function is_valid_email($str)
{
  $result = (false !== filter_var($str, FILTER_VALIDATE_EMAIL));
  
  if ($result)
  {
    list($user, $domain) = split('@', $str);
    
    $result = checkdnsrr($domain, 'MX');
  }
  
  return $result;
}

    if ($users_vip_edit_email!=''&&filter_var($users_vip_edit_email, FILTER_VALIDATE_EMAIL)){

        $email=$users_vip_edit_email;

    }else{
        $wrong_email='email no valido';
         $email=$wp_users_vip_edit_query[0]->users_vip_email;
    }


    



   /*( $vip_users_edit_pass=$_POST['[users-vip-pass']=='')?*/
global $wpdb;
$wpdb->update('wp_users_vip', array( 
                                    
                                    'users_vip_nombre'=>$users_vip_edit_name,
                                    'users_vip_apellido'=>$users_vip_edit_apellido, 
                                    'users_vip_category_id'=>$users_vip_edit_category,
                                    'users_vip_pais'    =>$users_vip_edit_pais,
                                    'users_vip_rango_edad'=>$users_vip_edit_rango_edad, 
                                    'users_vip_afiliacion'=>$users_vip_edit_afiliacion,
                                    'users_vip_email'=>$email,  
                                    'users_vip_pass'=>$hash,
                                    //'users_vip_lang'=>$users_vip_edit_lang
                                ), array('id'=>$user_vip_edit_id)
            );
}
?>
<div class="wrap_usuarios_editar">
        <h2>Editar</h2>
        <form name="users_vip_form_edit" action="" method="post">
        <table style="width:100%">
    <?php echo ($_POST&&$echo_wrong==''&&$wrong_email=='')?'<tr><td style="text-align: center;color: green;font-size: 15px;font-weight: bold;">Cambios Hechos</td></tr>':''; ?>
    <tr>
        <td style="width: 150px;">
            <label for="users-vip-id">
                <?php _e( 'ID user: ', 'uv_userss-vip-textdomain' )?>
            </label>
        </td>
        <td>
            <input
            type="text" 
            name="users-vip-id" 
            id="users-vip-id" 
            placeholder="id"
            value=" <?php echo $users_vip_edit_id; ?>"
            disabled/>
        </td>
    </tr>
    <tr>
        <td style="width: 150px;">
            <label for="users-vip-nombre">
                <?php _e( 'Nombre: ', 'uv_userss-vip-textdomain' )?>
            </label>
        </td>
        <td>
            <input
            type="text" 
            name="users-vip-nombre" 
            id="users-vip-nombre" 
            placeholder="Nombre"
            value="<?php echo $users_vip_edit_name; ?>"  
            />
        </td>
    </tr>

    <tr>
        <td style="width: 150px;">
            <label for="users-vip-apellido">
                <?php _e( 'Apellido: ', 'uv_users-vip-textdomain' )?>
            </label>
        </td>
        <td>
            <input
            type="text" 
            name="users-vip-apellido" 
            id="users-vip-apellido" 
            placeholder="Apellido"
            value="<?php echo $users_vip_edit_apellido; ?>"  
            />
        </td>
    </tr>

    <tr>
        <td style="width: 150px;">
            <label for="users-vip-categoria">
                <?php _e( 'Perfil: ', 'uv_users-vip-textdomain' )?>
            </label>
        </td>
        <td>

        <select name="users-vip-categoria" >
          <?php

                $wpdb_cat = array("Coleccionista","Curador","Personal de Museo o Institucional","Asesor","Galerista","Artista","Otro");
                echo '<option disabled selected>'.__('Selecciona Perfil').'</option>';
                foreach ($wpdb_cat as $key_cat => $cat) {
                    $key_cat=$key_cat+1;
                    $selected = ($users_vip_edit_category==$key_cat)?'selected':'';
                    echo '<option value="'.$key_cat.'"  '.$selected.'>'.__($cat).'</option>';
                }

          ?>
        </select>

        </td>
    </tr>

    <tr>
        <td style="width: 150px;">
            <label for="users-vip-rango_edad">
                <?php _e( 'Rango Edad: ', 'uv_users-vip-textdomain' )?>
            </label>
        </td>
        <td>

        <select name="users-vip-rango_edad" >
          <?php
                $rango_edad_args = array("18-24","25-34","35-44","45+");
                echo '<option disabled selected>'.__('Selecciona Edad').'</option>';
                foreach ($rango_edad_args as $key_edad => $edad) {
                    $key_edad=$key_edad+1;
                    //$selected = ($users_vip_edit_category==$key_cat)?'selected':'';
                    $selected = ($users_vip_edit_rango_edad==$key_edad)?'selected':'';
                    echo '<option value="'.$key_edad.'"  '.$selected.'>'.__($edad).'</option>';
                }

          ?>
        </select>
        </td>
    </tr>

    <tr>
        <td style="width: 150px;">
            <label for="users-vip-pais">
                <?php _e( 'Pais: ', 'uv_users-vip-textdomain' )?>
            </label>
        </td>
        <td>
        <select name="users-vip-pais" >
          <?php

                global $wpdb;
                $wpdb_paises=$wpdb->get_results( "SELECT * FROM maf_cat_countries ORDER BY id ASC ");
                echo '<option disabled selected>'.__('Selecciona un País').'</option>';
                foreach ($wpdb_paises as $key_pais => $pais) {
                    //$key_pais=$key_pais+1;
                    $selected = ($users_vip_edit_pais==$pais->id)?'selected':'';
                    echo '<option value="'.$pais->id.'"  '.$selected.'>'.$pais->name.'</option>';
                }

          ?>
          </select>
        </td>
    </tr>

    <tr>
        <td style="width: 150px;">
            <label for="users-vip-afiliacion">
                <?php _e( 'Afiliación: ', 'uv_users-vip-textdomain' )?>
            </label>
        </td>
        <td>
            <input
            type="text" 
            name="users-vip-afiliacion" 
            id="users-vip-afiliacion" 
            placeholder="Afiliación"
            value="<?php echo $users_vip_edit_afiliacion; ?>"  
            />
        </td>
    </tr>

    <tr>
        <td style="width: 150px;">
            <label for="users-vip-email">
                <?php _e( 'Email: ', 'uv_users-vip-textdomain' )?>
            </label>
        </td>
        <td>
            <input
            type="email" 
            name="users-vip-email" 
            id="users-vip-email" 
            placeholder="email"
            value="<?php echo ($wrong_email!='')?$email:$users_vip_edit_email; ?>"  
            />
        </td>
    </tr>

    <!-- <tr>
        <td style="width: 150px;">
            <label for="users-vip-lang">
                <?php _e( 'Idioma Lang: ', 'uv_users-vip-textdomain' )?>
            </label>
        </td>
        <td>
            <input
            type="text" 
            name="users-vip-lang" 
            id="users-vip-lang" 
            placeholder="email"
            value="<?php echo $users_vip_edit_lang; ?>"  
            />
        </td>
    </tr> -->

    <tr>
        <td style="width: 150px;">
            <label for="users-vip-pass">
                <?php _e( 'Pass: ', 'uv_users-vip-textdomain' )?>
            </label>
            
        </td>
        <td>
            <input
            type="password" 
            name="users-vip-pass" 
            id="users-vip-pass" 
            placeholder=""
            value="<?php //echo $users_vip_edit_pass; ?>"  
            />
        </td>
    </tr>
    <tr><td colspan="2"><label style="
    color: red;
    font-size: 15px;
    font-weight: bold;
"><?php echo $echo_wrong; ?></label></td></tr>


    <tr><td colspan="2"><label style="
    color: red;
    font-size: 15px;
    font-weight: bold;
"><?php echo $wrong_email; ?></label></td></tr>


    <tr>
        <td>
           <input 
           type="button" 
           class="button_active" 
           onclick="javascript:location.href='<?php echo home_url().'/wp-admin/admin.php?page=usuarios_vip' ?>' "
           value="<?php echo 'REGRESAR'; ?>"  
           /> 
        </td>
        <td>
            <input
            type="submit" 
            name="users-vip-submit" 
            id="users-vip-submit" 
            placeholder="submit"
            value="<?php echo 'GUARDAR'; ?>"
            />
        </td>
    </tr>

 </table>
 </form>
</div>
<?php } ?>
<?php 
//create db of admin menu page users_vip
/*global $wpdb;
    $table_users_vip = $wpdb->prefix."users_vip";
    $structure = "CREATE TABLE $table_users_vip (
        id INT(9) NOT NULL AUTO_INCREMENT,
        users_vip_nombre VARCHAR(80) NOT NULL,
        users_vip_apellido VARCHAR(20) NOT NULL,
        users_vip_category_id VARCHAR(80) NOT NULL,
        users_vip_email VARCHAR(80) NOT NULL,
        users_vip_pass VARCHAR(80) NOT NULL,
        
    UNIQUE KEY id (id)
    );";
    $wpdb->query($structure);*/

    // $myCustomer = $wpdb->get_row("SELECT * FROM wp_users_vip");
    // //Add column if not present.
    // if(!isset($myCustomer->users_vip_category_id)){
    //     $wpdb->query("ALTER TABLE wp_users_vip ADD users_vip_category_id VARCHAR(80) NOT NULL");
    // }
    // ALTER TABLE wp_users_vip ADD users_vip_category_id VARCHAR(80) NULL AFTER users_vip_apellido;
    // ALTER TABLE `wp_users_vip` CHANGE `users_vip_category_id` `users_vip_category_id` VARCHAR(80) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;

    //$wpdb->query("INSERT INTO $table(bot_name, bot_mark)
    //    VALUES('Google Bot', 'googlebot')");

//flush_rewrite_rules();
?>
<?php
add_action( 'admin_menu', 'wp_redes_sociales_add_admin_menu' );
add_action( 'admin_init', 'wp_redes_sociales_settings_init' );


function wp_redes_sociales_add_admin_menu(  ) { 

    add_menu_page( 'Redes Sociales', 'Redes Sociales', 'manage_options', 'redes_sociales', 'wp_redes_sociales_options_page','dashicons-share' );
 
}


function wp_redes_sociales_settings_init(  ) { 

    register_setting( 'pluginPage', 'wp_redes_sociales_settings' );

    add_settings_section(
        'wp_redes_sociales_pluginPage_section', 
        __( '', 'wordpress' ), 
        'wp_redes_sociales_settings_section_callback', 
        'pluginPage'
    );

    add_settings_field( 
        'wp_redes_sociales_text_field_0', 
        __( 'Facebook', 'wordpress' ), 
        'wp_redes_sociales_text_field_0_render', 
        'pluginPage', 
        'wp_redes_sociales_pluginPage_section' 
    );

    add_settings_field( 
        'wp_redes_sociales_text_field_1', 
        __( 'Twitter', 'wordpress' ), 
        'wp_redes_sociales_text_field_1_render', 
        'pluginPage', 
        'wp_redes_sociales_pluginPage_section' 
    );

    add_settings_field( 
        'wp_redes_sociales_text_field_2', 
        __( 'Instagram', 'wordpress' ), 
        'wp_redes_sociales_text_field_2_render', 
        'pluginPage', 
        'wp_redes_sociales_pluginPage_section' 
    );

    add_settings_field( 
        'wp_redes_sociales_text_field_3', 
        __( 'Artsy', 'wordpress' ), 
        'wp_redes_sociales_text_field_3_render', 
        'pluginPage', 
        'wp_redes_sociales_pluginPage_section' 
    );


}


function wp_redes_sociales_text_field_0_render(  ) { 

    $options = get_option( 'wp_redes_sociales_settings' );
    ?>
    <input type='text' name='wp_redes_sociales_settings[wp_redes_sociales_text_field_0]' value='<?php echo $options['wp_redes_sociales_text_field_0']; ?>'>
    <?php

}


function wp_redes_sociales_text_field_1_render(  ) { 

    $options = get_option( 'wp_redes_sociales_settings' );
    ?>
    <input type='text' name='wp_redes_sociales_settings[wp_redes_sociales_text_field_1]' value='<?php echo $options['wp_redes_sociales_text_field_1']; ?>'>
    <?php

}


function wp_redes_sociales_text_field_2_render(  ) { 

    $options = get_option( 'wp_redes_sociales_settings' );
    ?>
    <input type='text' name='wp_redes_sociales_settings[wp_redes_sociales_text_field_2]' value='<?php echo $options['wp_redes_sociales_text_field_2']; ?>'>
    <?php

}


function wp_redes_sociales_text_field_3_render(  ) { 

    $options = get_option( 'wp_redes_sociales_settings' );
    ?>
    <input type='text' name='wp_redes_sociales_settings[wp_redes_sociales_text_field_3]' value='<?php echo $options['wp_redes_sociales_text_field_3']; ?>'>
    <?php

}


function wp_redes_sociales_settings_section_callback(  ) { 

    echo __( 'Redes Sociales', 'wordpress' );

}


function wp_redes_sociales_options_page(  ) { 

    ?>
    <form action='options.php' method='post'>

        <h2>Redes Sociales</h2>

        <?php
        settings_fields( 'pluginPage' );
        do_settings_sections( 'pluginPage' );
        submit_button();
        ?>

    </form>
    <?php

}
?>
<?php
/*        header('Content-Type: text/csv');
  header('Content-Disposition: attachment; filename="' . $filename . '"');
  header('Pragma: no-cache');
  header('Expires: 0');
      header("Content-Type: text/csv;charset=utf-8");

  */
class CSVExport {

  /**
   * Constructor
   */
  public function __construct() {
    if (isset($_GET['report'])) {
        date_default_timezone_set('America/Mexico_City');
      $filename = "usuarios_VIP_".date("Y-m-d_H-i",time()).".csv";
       // $filename = "report_";
      $csv = $this->generate_csv();

      header("Pragma: public");
      header("Expires: 0");
      header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
      header("Cache-Control: private", false);
      header('Content-Type: text/html; charset=utf-8');
      header("Content-Disposition: attachment; filename=\"$filename\";");
      header("Content-Transfer-Encoding: binary");

      echo $csv;
      exit;
    }

// Add extra menu items for admins
    add_action('admin_menu', array($this, 'admin_menu'));

// Create end-points
    add_filter('query_vars', array($this, 'query_vars'));
    add_action('parse_request', array($this, 'parse_request'));
  }

  /**
   * Add extra menu items for admins
   */
  public function admin_menu() {
/*                        add_menu_page(
                        'Download Report', 
                        'Download Report', 
                        'manage_options', 
                        'download_report', 
                        array($this, 'download_report')
                        );*/

    add_submenu_page(
                'usuarios_vip', 
                'Descargar Usuarios VIP', 
                'Descargar Usuarios VIP', 
                'manage_options', 
                'download_report',
               array($this, 'download_report')
                );
  }

  /**
   * Allow for custom query variables
   */
  public function query_vars($query_vars) {
    $query_vars[] = 'download_report';
    return $query_vars;
  }

  /**
   * Parse the request
   */
  public function parse_request(&$wp) {
    if (array_key_exists('download_report', $wp->query_vars)) {
      $this->download_report();
      exit;
    }
  }

  /**
   * Download report
   */
  public function download_report() {
    echo '<div class="wrap">';
    echo '<div id="icon-tools" class="icon32">
</div>';
    echo '<h2>Descargar Reporte</h2>';
    echo '<p><a href="?page=download_report&report=users">Exportar los Usuarios VIP</a></p>';
  }

  /**
   * Converting data to CSV
   */
  public function generate_csv() {
    $csv_output = '';
global $wpdb;
 
  //$results = $wpdb->get_results("SELECT * FROM wp_users_vip ORDER BY id DESC",ARRAY_A);

 $results = $wpdb->get_results("SELECT wp_uv.users_vip_nombre AS nombre,wp_uv.users_vip_apellido AS apellido,wp_uv.users_vip_email AS email,mcc.name AS pais,wp_uv.users_vip_rango_edad AS rango_edad,wp_uv.users_vip_category_id AS perfil,wp_uv.users_vip_category AS perfil_antiguo ,wp_uv.users_vip_afiliacion AS afiliacion, uve.nombre_estatus AS estatus,wp_uv.users_vip_lang AS lang FROM wp_users_vip AS wp_uv LEFT JOIN users_vip_category AS uvc ON wp_uv.users_vip_category_id=uvc.id LEFT JOIN maf_cat_countries AS mcc ON wp_uv.users_vip_pais=mcc.id LEFT JOIN users_vip_estatus AS uve ON wp_uv.users_vip_estatus=uve.id WHERE wp_uv.users_vip_estatus='3' OR wp_uv.users_vip_estatus='1' OR wp_uv.users_vip_estatus='4' ",ARRAY_A);

  $users_vip_count=count($results);

  $epDB = new wpdb('db214684_dupla', '#Dupla2017art-fair#', 'db214684_exhibitor_portal', 'internal-db.s214684.gridserver.com');

  foreach($results as $index => $result){
    $epRow = $epDB->get_results('SELECT language_id FROM users WHERE email = "' . $result['users_vip_email'] . '"', ARRAY_A);

    if(is_array($epRow) && count($epRow) > 0){
        $results[$index]['language'] = $epRow[0]['language_id'] == 1 ? '' : '';
    }else{
        $results[$index]['language'] = '';
    }
  }

  //$csv_output = '"'.implode('","',array_keys($results[0])).'",'."\n";
  //$csv_format=utf8_encode ('"Nombre","Apellido","Email","País","Rango Edad","Perfil","Perfil Anterior","Afiliación","Estatus","Lenguaje"'."\n");
  $csv_format='"Nombre","Apellido","Email","País","Rango Edad","Perfil","Perfil Anterior","Afiliación","Estatus","Lenguaje"'."\n";
  $edad_set   = array('1' =>'18-24' , '2' =>'25-34' ,'3' =>'35-44' ,'4' =>'45+' );
  $perfil_set = array('1' =>'Coleccionista' , '2' =>'Curador' ,'3' =>'Personal de Museo o Institucional' ,'4' =>'Asesor','5' =>'Galerista','6' =>'Artista','7' =>'Otro' );

  foreach ($results as $key => $row) {
    
    $nombre          = $row['nombre'];
    $apellido        = $row['apellido'];
    $email           = $row['email'];
    $pais            = $row['pais'];
    $edad            = $row['rango_edad'];
    $perfil          = $row['perfil'];
    $perfil_antiguo  = $row['perfil_antiguo'];
    $afiliacion      = $row['afiliacion'];
    $estatus         = $row['estatus'];
    $lenguaje        = $row['lang'];

    $csv_format .='"'.$nombre.'",'.'"'.$apellido.'",'.'"'.$email.'",'.'"'.$pais.'",'.'"'.$edad_set[$edad].'",'.'"'.$perfil_set[$perfil].'",'.'"'.$perfil_antiguo.'",'.'"'.$afiliacion.'",'.'"'.$estatus.'",'.'"'.$lenguaje.'",';
    $csv_format.="\n";


  }

   //$csv_output .= "\n";



    return $csv_format;
  }

}

// Instantiate a singleton of this plugin
$csvExport = new CSVExport();

/***Información obtenida desde el portal de expositores (Agregado por Levi)***/
add_action('admin_enqueue_scripts', function(){
    wp_enqueue_style('admin', get_template_directory_uri() . '/css/admin.css');
    wp_enqueue_script('fastselect', get_template_directory_uri() . '/fastselect/fastselect.standalone.js');
    wp_enqueue_style('fastselect', get_template_directory_uri() . '/fastselect/fastselect.css');
});

function getEPDB(){
    return new wpdb('root', '', 'maf2019', 'localhost');
    //return new wpdb('db214684', '3xA!XxFV!nuR', 'db214684_maf2019', 'internal-db.s214684.gridserver.com');
}

function getEPBaseURL(){
    return 'http://localhost/maf2019/';
    //return 'https://material-fair.com/2019/';
}

function formatURL($url){
    $parsedURL = parse_url($url);
    $urlScheme = ! empty($parsedURL['scheme']) ? $parsedURL['scheme'] : 'http';
    $urlHost = ! empty($parsedURL['host']) ? $parsedURL['host'] : '';
    $urlPath = ! empty($parsedURL['path']) ? $parsedURL['path'] : '';
    $urlQuery = ! empty($parsedURL['query']) ? $parsedURL['query'] : '';
    $urlFragment = ! empty($parsedURL['fragment']) ? $parsedURL['fragment'] : '';

    if(! empty($urlHost) || ! empty($urlPath)){
        $url = $urlScheme . '://' . $urlHost . $urlPath . (! empty($urlQuery) ? '?' . $urlQuery : '') . (! empty($urlFragment) ? '#' . $urlFragment : '');
    }

    return $url;
}

add_action('add_meta_boxes', function(){
    add_meta_box( 'epInfo', 'Información del portal de expositores', function($post){
        $postId = $post->ID;

        $epDB = getEPDB();
        $epGalleryId = get_post_meta($postId, '_ep_gallery_id', TRUE);
        $epGallery = $epDB->get_results('SELECT * FROM maf_galleries WHERE id = ' . $epGalleryId);
        $epAllGalleriesRequest = json_decode(file_get_contents(getEPBaseURL() . 'wp-content/themes/maf2019/api.php?model=Gallery&method=getNames&params[]=' . urlencode('WHERE edition_id = 1 AND gallery_status_id = 5')));
        $epAllGalleries = $epAllGalleriesRequest->payload;

        $translated = get_post_meta($postId, '_ep_translated', TRUE);
        $images = get_post_meta($post->ID, '_ep_images', TRUE);

        //$published = get_post_meta($postId, '_ep_published', TRUE);

        //if(! empty($published)){
        ?>
        <script>
            $(document).ready(function(){
                $('#epInfoPublish').on('click', function(){
                    if(confirm('¿Deseas publicar la información en el sitio público?')){
                        var form = $(this).closest('form');

                        form
                            .find('[name="_ep_translated"]')
                            .val(1)
                            .end()
                            .submit();
                    }
                });

                $('#epInfoUnPublish').on('click', function(){
                    if(confirm('¿Deseas retirar la información del sitio público?')){
                        var form = $(this).closest('form');

                        form
                            .find('[name="_ep_translated"]')
                            .val(0)
                            .end()
                            .submit();
                    }
                });

                $('#epInfoGetImages').on('click', function(){
                    if(confirm('Se establecerán aquí las imágenes web provenientes del portal de expositores, con lo cual sus respectivas leyendas serán reemplazadas por aquellas proporcionadas por el aplicante. Esta acción es irreversible. ¿Deseas continuar?')){
                        var form = $(this).closest('form');

                        form
                            .find('[name="getImages"]')
                            .val(1)
                            .end()
                            .submit();
                    }
                });

                $('#epInfoGetinfo').on('click', function(){
                    if(confirm('Los valores correspondientes a la información del portal de expositores serán reemplazadas por aquellos proporcionadas por el aplicante. Esta acción es irreversible. ¿Deseas continuar?')){
                        var form = $(this).closest('form');

                        form
                            .find('[name="getInfo"]')
                            .val(1)
                            .end()
                            .submit();
                    }
                });

                $('#_ep_gallery_id').fastselect({
                    'placeholder': 'Selecciona una galería del portal de expositores'
                });
            });
        </script>
        <table class="epInfoTable">
            <tbody>
            <tr>
                <th>Entrada relacionada a la galería</th>
                <td colspan="2">
                    <select id="_ep_gallery_id" name="_ep_gallery_id">
                        <?php foreach($epAllGalleries as $epAllGallery){
                            $selected = $epGalleryId == $epAllGallery->id ? ' selected' : '';
                            ?>
                            <option value="<?= $epAllGallery->id; ?>"<?=$selected?>><?= $epAllGallery->name; ?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <th></th>
                <td colspan="2">
                    <?php if(empty($translated)) { ?>
                        <button id="epInfoPublish" class="button button_secondary" type="button">Publicar</button>
                    <?php }else{ ?>
                        <button id="epInfoUnPublish" class="button button_secondary" type="button">Retirar del sitio público</button>
                    <?php } ?>
                    <button id="epInfoGetImages" class="button button_secondary" type="button">Obtener las imágenes y sus leyendas originales</button>
                    <button id="epInfoGetinfo" class="button button_secondary" type="button">Obtener la información original</button>
                    <input type="hidden" name="_ep_translated" value="<?= empty($translated) ? 0 : 1; ?>">
                    <input type="hidden" name="getImages" value="0">
                    <input type="hidden" name="getInfo" value="0">
                </td>
            </tr>
            </tbody>
        </table>
        <table class="epInfoTable">
            <thead>
            <tr>
                <th></th>
                <th>Texto en inglés</th>
                <th>Texto en español</th>
            </tr>
            </thead>
            <tbody>
            <?php if(count($images) > 0){
                $index = 0;

                foreach($images as $image){
                    ?>
                    <tr>
                        <?php if($index == 0){ ?>
                            <th rowspan="<?= count($images) * 2; ?>">Imágenes</th>
                        <?php } ?>
                        <td class="epInfoTableImageCell" colspan="2">
                            <a href="<?= $image['url']; ?>" target="_blank">
                                <img src="<?= $image['url']; ?>">
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <textarea name="_ep_images_captions_en[]"><?= $image['caption_en']; ?></textarea>
                        </td>
                        <td>
                            <textarea name="_ep_images_captions_es[]"><?= $image['caption_es']; ?></textarea>
                        </td>
                    </tr>
                    <?php
                    $index ++;
                }
            }else{ ?>
                <tr>
                    <th>Imágenes</th>
                    <td colspan="2">
                        <p><i>No hay imágenes cargadas.</i></p>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
        <table class="epInfoTable">
            <thead>
            <tr>
                <th></th>
                <th>Texto en inglés</th>
                <th>Texto en español</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th>Ubicación</th>
                <td>
                    <textarea name="_ep_location_es"><?= get_post_meta($postId, '_ep_location_es', TRUE); ?></textarea>
                </td>
                <td>
                    <textarea name="_ep_location_en"><?= get_post_meta($postId, '_ep_location_en', TRUE); ?></textarea>
                </td>
            </tr>
            <tr>
                <th>Teléfono</th>
                <td colspan="2">
                    <input name="_ep_telephone" type="text" value="<?= get_post_meta($postId, '_ep_telephone', TRUE); ?>">
                </td>
            </tr>
            <tr>
                <th>Email</th>
                <td colspan="2">
                    <input name="_ep_email" type="text" value="<?= get_post_meta($postId, '_ep_email', TRUE); ?>">
                </td>
            </tr>
            <tr>
                <th>Website</th>
                <td colspan="2">
                    <input name="_ep_website" type="text" value="<?= get_post_meta($postId, '_ep_website', TRUE); ?>">
                </td>
            </tr>
            <tr>
                <th>Facebook</th>
                <td colspan="2">
                    <input name="_ep_facebook" type="text" value="<?= get_post_meta($postId, '_ep_facebook', TRUE); ?>">
                </td>
            </tr>
            <tr>
                <th>Twitter</th>
                <td colspan="2">
                    <input name="_ep_twitter" type="text" value="<?= get_post_meta($postId, '_ep_twitter', TRUE); ?>">
                </td>
            </tr>
            <tr>
                <th>Instagram</th>
                <td colspan="2">
                    <input name="_ep_instagram" type="text" value="<?= get_post_meta($postId, '_ep_instagram', TRUE); ?>">
                </td>
            </tr>
            <tr>
                <th>Statement de la galería</th>
                <td>
                    <textarea name="_ep_statement_maf_en"><?= get_post_meta($postId, '_ep_statement_maf_en', TRUE); ?></textarea>
                </td>
                <td>
                    <textarea name="_ep_statement_maf_es"><?= get_post_meta($postId, '_ep_statement_maf_es', TRUE); ?></textarea>
                </td>
            </tr>
            <tr>
                <th>Statement del stand</th>
                <td>
                    <textarea name="_ep_statement_stand_en"><?= get_post_meta($postId, '_ep_statement_stand_en', TRUE); ?></textarea>
                </td>
                <td>
                    <textarea name="_ep_statement_stand_es"><?= get_post_meta($postId, '_ep_statement_stand_es', TRUE); ?></textarea>
                </td>
            </tr>
            <!--<tr>
                            <th>Biografías de los artistas</th>
                            <td>
                                <textarea name="_ep_artists_bios_en"><?= get_post_meta($postId, '_ep_artists_bios_en', TRUE); ?></textarea>
                            </td>
                            <td>
                                <textarea name="_ep_artists_bios_es"><?= get_post_meta($postId, '_ep_artists_bios_es', TRUE); ?></textarea>
                            </td>
                        </tr>-->
            <tr>
                <th>Artistas en MAF 2018</th>
                <td colspan="2">
                    <textarea name="_ep_artists"><?= get_post_meta($postId, '_ep_artists', TRUE); ?></textarea>
                </td>
            </tr>
            <tr>
                <th>Artistas representados</th>
                <td colspan="2">
                    <textarea name="_ep_represented_artists"><?= get_post_meta($postId, '_ep_represented_artists', TRUE); ?></textarea>
                </td>
            </tr>
            <!--<tr>
                            <th>Offsite nombre</th>
                            <td>
                                <input name="_ep_off_site_name_en" type="text" value="<?= get_post_meta($postId, '_ep_off_site_name_en', TRUE); ?>">
                            </td>
                            <td>
                                <input name="_ep_off_site_name_es" type="text" value="<?= get_post_meta($postId, '_ep_off_site_name_es', TRUE); ?>">
                            </td>
                        </tr>
                        <tr>
                            <th>Offsite descripción</th>
                            <td>
                                <textarea name="_ep_off_site_description_en"><?= get_post_meta($postId, '_ep_off_site_description_en', TRUE); ?></textarea>
                            </td>
                            <td>
                                <textarea name="_ep_off_site_description_es"><?= get_post_meta($postId, '_ep_off_site_description_es', TRUE); ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <th>Offsite imagen</th>
                            <td colspan="2">
                                <?php
            $image = get_post_meta($post->ID, '_ep_off_site_image', TRUE);

            if(! empty($image) > 0){ ?>
                                    <img style="max-width: 200px; max-height: 200px;" src="<?= $image; ?>">
                                <?php }else{ ?>
                                    <p>No hay imagen cargada.</p>
                                <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Off site dirección</th>
                            <td>
                                <textarea name="_ep_off_site_address_en"><?= get_post_meta($postId, '_ep_off_site_address_en', TRUE); ?></textarea>
                            </td>
                            <td>
                                <textarea name="_ep_off_site_address_es"><?= get_post_meta($postId, '_ep_off_site_address_es', TRUE); ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <th>Off site horario</th>
                            <td>
                                <input name="_ep_off_site_hours_en" type="text" value="<?= get_post_meta($postId, '_ep_off_site_hours_en', TRUE); ?>">
                            </td>
                            <td>
                                <input name="_ep_off_site_hours_es" type="text" value="<?= get_post_meta($postId, '_ep_off_site_hours_es', TRUE); ?>">
                            </td>
                        </tr>
                        <tr>
                            <th>Off site fechas</th>
                            <td>
                                <input name="_ep_off_site_dates_en" type="text" value="<?= get_post_meta($postId, '_ep_off_site_dates_en', TRUE); ?>">
                            </td>
                            <td>
                                <input name="_ep_off_site_dates_es" type="text" value="<?= get_post_meta($postId, '_ep_off_site_dates_es', TRUE); ?>">
                            </td>
                        </tr>
                        <tr>
                            <th>Off site información adicional</th>
                            <td>
                                <textarea name="_ep_off_site_additional_info_en"><?= get_post_meta($postId, '_ep_off_site_additional_info_en', TRUE); ?></textarea>
                            </td>
                            <td>
                                <textarea name="_ep_off_site_additional_info_en"><?= get_post_meta($postId, '_ep_off_site_additional_info_en', TRUE); ?></textarea>
                            </td>
                        </tr>-->
            </tbody>
        </table>
        <?php
        /*}else{
            ?>
                <p>La información del portal de expositores para esta galería no ha sido publicada aún.</p>
            <?php
        }*/
    }, NULL, 'advanced', 'high');
});

add_action('save_post', function($postId){
    if(! isset($_POST['_ep_translated'])){
        delete_post_meta($postId, '_ep_translated');
    }

    $formerGalleryId = get_post_meta($postId, '_ep_gallery_id', TRUE);
    $images = get_post_meta($postId, '_ep_images', TRUE);

    foreach($_POST as $key => $value){
        if(strpos($key, '_ep_') === 0){
            if(strpos($key, '_ep_images_captions') === 0){
                $iso = substr($key, -2, 2);

                for($i = 0; $i < count($images); $i ++){
                    $images[$i]['caption_' . $iso] = $value[$i];
                }
            }else{
                update_post_meta($postId, $key, $value);
            }
        }
    }

    update_post_meta($postId, '_ep_images', $images);

    $epGalleryId = get_post_meta($postId, '_ep_gallery_id', TRUE);
    $epDB = getEPDB();

    if(isset($_POST['getImages']) && $_POST['getImages'] == 1){
        $artworks = $epDB->get_results('SELECT * FROM maf_artworks WHERE gallery_id = ' . $epGalleryId . ' AND item_status_id = 1 AND is_for_press = 0');
        $images = [];

        foreach($artworks as $artwork){
            array_push($images, [
                'url' => getEPBaseURL() . 'wp-content/themes/maf2019/image.php?type=artwork&id=' . $artwork->id,
                'caption_en' => $artwork->caption,
                'caption_es' => $artwork->caption
            ]);
        }

        update_post_meta($postId, '_ep_images', $images);
    }else if(isset($_POST['getInfo']) && $_POST['getInfo'] == 1){
        $gallery = $epDB->get_row('SELECT * FROM maf_galleries WHERE id = ' . $epGalleryId);

        if(! empty($gallery)){
            update_post_meta($postId, '_ep_published', TRUE);

            $gallery->country = $epDB->get_row('SELECT * FROM maf_cat_countries WHERE id = ' . $gallery->country_id);

            $location = (! empty($gallery->country) ? $gallery->country->name : '') . (! empty($gallery->city) ? ' - ' . $gallery->city : '');
            $locationAddress = $location . chr(13) . chr(10) . $gallery->address . chr(13) . chr(10) . $gallery->zip_code;

            update_post_meta($postId, '_ep_location_en', $locationAddress);
            update_post_meta($postId, '_ep_location_es', $locationAddress);
            update_post_meta($postId, '_ep_telephone', $gallery->telephone_code . ' ' . $gallery->telephone);
            update_post_meta($postId, '_ep_email', $gallery->email);
            update_post_meta($postId, '_ep_website', formatURL($gallery->website));
            update_post_meta($postId, '_ep_facebook', formatURL($gallery->facebook));
            update_post_meta($postId, '_ep_twitter', formatURL($gallery->twitter));
            update_post_meta($postId, '_ep_instagram', formatURL($gallery->instagram));

            $statement = $gallery->statement;

            update_post_meta($postId, '_ep_statement_maf_en', $statement);
            update_post_meta($postId, '_ep_statement_maf_es', $statement);

            $statementStand = $gallery->statement_stand;

            update_post_meta($postId, '_ep_statement_statement_en', $statementStand);
            update_post_meta($postId, '_ep_statement_statement_es', $statementStand);

            $artistsMAF = $epDB->get_results('SELECT * FROM maf_artists_maf WHERE gallery_id = ' . $epGalleryId . ' AND item_status_id = 1');

            update_post_meta($postId, '_ep_artists', implode(chr(13) . chr(10), wp_list_pluck($artistsMAF, 'name')));

            $artistsRepresented = $epDB->get_results('SELECT * FROM maf_artists_represented WHERE gallery_id = ' . $epGalleryId . ' AND item_status_id = 1');

            update_post_meta($postId, '_ep_represented_artists', implode(chr(13) . chr(10), wp_list_pluck($artistsRepresented, 'name')));
        }
    }
});

add_filter('xmlrpc_enabled', '__return_false');

/*start custom field term*/
function vip_programs_taxonomy_custom_fields($tag) {  
   // Check for existing taxonomy meta for the term you're editing  
    $t_id = $tag->term_id; // Get the ID of the term you're editing  
    $term_meta = get_option( "taxonomy_term_$t_id" ); // Do the check  
?>  
  
<tr class="form-field">  
    <th scope="row" valign="top">  
        <label for="description_day_es"><?php _e('Descripción Fecha (ES) '); ?></label>
    </th>  
    <td>  
        <input type="text" class="hook_qtranslatex" name="term_meta[description_day_es]" id="term_meta[description_day_es]" size="25" style="width:60%;" value="<?php echo $term_meta['description_day_es'] ? $term_meta['description_day_es'] : ''; ?>"><br />  
        <span class="description"><?php _e('Descripción Fecha (ES)'); ?></span>  
    </td>  
</tr>  
  
<tr class="form-field">  
    <th scope="row" valign="top">  
        <label for="description_day_en"><?php _e('Descripción Fecha (EN) '); ?></label>
    </th>  
    <td>  
        <input type="text" class="hook_qtranslatex" name="term_meta[description_day_en]" id="term_meta[description_day_en]" size="25" style="width:60%;" value="<?php echo $term_meta['description_day_en'] ? $term_meta['description_day_en'] : ''; ?>"><br />  
        <span class="description"><?php _e('Descripción Fecha (EN)'); ?></span>  
    </td>  
</tr>
  
<?php } ?>
<?php
function save_taxonomy_custom_fields( $term_id ) {  
    if ( isset( $_POST['term_meta'] ) ) {  
        $t_id = $term_id;  
        $term_meta = get_option( "taxonomy_term_$t_id" );  
        $cat_keys = array_keys( $_POST['term_meta'] );  
            foreach ( $cat_keys as $key ){  
            if ( isset( $_POST['term_meta'][$key] ) ){  
                $term_meta[$key] = $_POST['term_meta'][$key];  
            }  
        }  
        update_option( "taxonomy_term_$t_id", $term_meta );  
    }  
}
add_action( 'vip_programs_edit_form_fields', 'vip_programs_taxonomy_custom_fields', 10, 2 );  
  
add_action( 'edited_vip_programs', 'save_taxonomy_custom_fields', 10, 2 );
/*end custom field term*/
flush_rewrite_rules();
                                
    add_filter('wp_mail_from', function(){
        return 'vip@material-fair.com';
    });
    add_filter('wp_mail_content_type', function(){
        return 'text/html';
    });
    add_filter('wp_mail_from_name', function(){
        return 'Material Art Fair';
    });
?>
