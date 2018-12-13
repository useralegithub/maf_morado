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
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        'hierarchical'        => false,
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
add_action( 'add_meta_boxes', 'wpmt_metas_programa' );
add_action( 'add_meta_boxes', 'wpmt_metas_programa_add_calendario' );
add_action( 'add_meta_boxes', 'wpmt_metas_prensa' );
add_action( 'add_meta_boxes', 'wpmt_metas_expositores' );
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
                <td style="width: 150px;"><label for="meta-link" class="wpmt-row-title"><?php _e( 'Link: ', 'wpmt-textdomain' )?></label></td>
                <td ><input style="width: 100%;" name="programa-link" id="programa-link" value='<?php if ( isset ( $wpmt_get_post_meta['programa-link'] ) ) echo $wpmt_get_post_meta['programa-link'][0]; ?>' placeholder="http://link.com/artfair" /></td>
        
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
                'Editar', 
                'Editar', 
                'manage_options', 
                'usuarios_vip_editar',
                'usuarios_vip_editar_function' );

}

function register_options_page(  ) { 

    ?>


<div class="wrap_usuarios_vip">

<script type="text/javascript">
jQuery(document).ready(function($){

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
    $spam    = $_POST['spam'];

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

                    $post_establece = get_posts( array('post_type'=> 'vip','name'=>'establece-contrasena','post_status' => 'publish','posts_per_page'=>1) )[0];

                    $link_establece = get_permalink( $post_establece ).'?c='.$code;
 
                    $subject = 'Solicitud Aprobada'; //El asunto del correo
                    $message = '
                    <html>
                    <body>
                    
                    <p>
                        Felcidades tu cuenta ha sido aprobada.
                    </p>

                    <p>
                        Por favor escribe una contraseña para acceder a VIP.
                    </p>
                    <p>
                        Tu contraseña debe tener almenos ocho caracteres e incluir letras mayúsculas, minúsculas y números.
                    </p>

                    <p>Ahora que sabes esto por favor da clic en el siguiente enlace "<a href="'.$link_establece.'">Escribir Contraseña</a> para establecer tú contraseña" </p>

                    

                    </body>
                    </html>
                    ';
                    //$message=base64_encode($message);
                    $contenido=utf8_decode($message);
                    $mailheader .= "From: Material<noreply@material-fair.com>\r\n"; 
                    $mailheader .= "Reply-To: " .$email."\r\n"; 
                    $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

                    $headers = "From:" . $email . "\r\n";
                    $headers .="Reply-To: " .$email . "\r\n";
                    $headers .='X-Mailer: PHP/' . phpversion() . "\r\n";
                    $headers .= 'MIME-Version: 1.0' . "\r\n";
                    $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
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
    $spam = $_POST['users_vip_recupera_contrasena_spam'];

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
    $recovery = $users_vip_recupera_id.''.randomRecovery(20);

    $table = 'wp_users_vip';
    //$wpdb->delete($table, array( 'id' => $users_vip_delete_id) );

    $wpdb->update('wp_users_vip', array( 
                                        'users_vip_pass_recovery'=>$recovery
                                    ), array('id'=>$users_vip_recupera_id)
                );


                if($spam == '' && $users_vip_recupera_email != '' ){
                    $email=$users_vip_recupera_email;
                    $to = $email;

                    $post_establece = get_posts( array('post_type'=> 'vip','name'=>'establece-contrasena','post_status' => 'publish','posts_per_page'=>1) )[0];

                    $link_establece = get_permalink( $post_establece ).'?c='.$recovery;
 
                    $subject = 'Recuperar Contraseña'; //El asunto del correo
                    $message = '
                    <html>
                    <body>
                    
                    <p>
                        Link recuperar: <a href="'.$link_establece.'">Escribir Contraseña</a>
                    </p>
                    

                    </body>
                    </html>
                    ';
                    //$message=base64_encode($message);
                    $contenido=utf8_decode($message);
                    $subject=utf8_decode($subject);
                    $mailheader .= "From: Material<noreply@material-fair.com>\r\n"; 
                    $mailheader .= "Reply-To: " .$email."\r\n"; 
                    $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

                    $headers = "From:" . $email . "\r\n";
                    $headers .="Reply-To: " .$email . "\r\n";
                    $headers .='X-Mailer: PHP/' . phpversion() . "\r\n";
                    $headers .= 'MIME-Version: 1.0' . "\r\n";
                    $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
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
            <td class="td_center_hori_vert" >Nombre</td>
            <td class="td_center_hori_vert" >Apellido</td>
            <td class="td_center_hori_vert" >email</td>
            <td class="td_center_hori_vert" >Categoría</td>
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

$wp_users_vip = $wpdb->get_results("SELECT * FROM wp_users_vip WHERE users_vip_estatus = $estatus_aprobado OR users_vip_estatus = $estatus_registrado OR users_vip_estatus = $estatus_rechazado ORDER BY id DESC LIMIT  $inicio,$registros");

$wpdb_col=$wpdb->get_col( "SELECT * FROM wp_users_vip ");

$wpdb_col_paginacion=$wpdb->get_col( "SELECT * FROM wp_users_vip WHERE users_vip_estatus = $estatus_aprobado OR users_vip_estatus = $estatus_registrado OR users_vip_estatus = $estatus_rechazado ORDER BY id DESC LIMIT  $inicio,$registros");

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

if ($value->users_vip_category_id=='') {
    $wpdb->update('wp_users_vip', array( 
                                        'users_vip_category_id'=>1
                                    ), array('id'=>$value->id)
                );

}


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
echo ($pagina>1)?'<a href="'.home_url().'/wp-admin/admin.php?page=usuarios_vip&num='.($pagina-1).'">Anterior</a>':'';

for ($cont=1; $cont <=$paginas; $cont++) { 


    echo ($cont==$pagina)?''.$cont:'<a href="'.home_url().'/wp-admin/admin.php?page=usuarios_vip&num='.$cont.'">'.$cont.'</a>';
    echo " ";
}
echo ($pagina<$paginas)?'<a href="'.home_url().'/wp-admin/admin.php?page=usuarios_vip&num='.($pagina+1).'">Siguiente</a>':'';
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
    $users_vip_edit_lang=stripslashes_deep($_POST['users-vip-lang']);

    if ($users_vip_edit_pass=='') {
        $hash = $wp_users_vip_edit_query[0]->users_vip_pass;
    }else{
        //chage
        if (strlen($users_vip_edit_pass) > 7 && preg_match('#^\S*(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$#', $users_vip_edit_pass)
                            //&& preg_match('/[a-z]/', $users_vip_edit_pass)
                            //&& preg_match('/[A-Z]/', $users_vip_edit_pass)
                            //&& preg_match('/[0-9]/',$users_vip_edit_pass)
            ){

            $hash = wp_hash_password( $users_vip_edit_pass );

        }else{
            $echo_wrong = 'Tu contraseña debe de ser mayor a 8 caracteres tener almenos una minúsculas y una mayúsculas';
            echo "\n";
            print_r($users_vip_edit_pass);
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

    if ($users_vip_edit_email!=''&&filter_var($users_vip_edit_email, FILTER_VALIDATE_EMAIL)&&is_valid_email($users_vip_edit_email)){

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
                                    'users_vip_lang'=>$users_vip_edit_lang
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
                <?php _e( 'Categoría: ', 'uv_users-vip-textdomain' )?>
            </label>
        </td>
        <td>

        <select name="users-vip-categoria" >
          <?php

                $wpdb_cat = array("Coleccionista","Curador","Personal de Museo o Institucional","Asesor","Galerista","Artista","Otro");

                 echo '<option disabled selected>'.__('Selecciona xxx').'</option>';
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
                    $selected = ($users_vip_edit_rango_edad==$edad)?'selected':'';
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
                echo '<option disabled selected>'.__('Selecciona xxx').'</option>';
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
 
    $results = $wpdb->get_results("SELECT * FROM wp_users_vip ORDER BY id DESC",ARRAY_A);
  $users_vip_count=count($results);

  $epDB = new wpdb('db214684_dupla', '#Dupla2017art-fair#', 'db214684_exhibitor_portal', 'internal-db.s214684.gridserver.com');

  foreach($results as $index => $result){
  	$epRow = $epDB->get_results('SELECT language_id FROM users WHERE email = "' . $result['users_vip_email'] . '"', ARRAY_A);

  	if(is_array($epRow) && count($epRow) > 0){
  		$results[$index]['language'] = $epRow[0]['language_id'] == 1 ? 'English' : 'Español';
  	}else{
  		$results[$index]['language'] = 'English';
  	}
  }

  //$csv_output = '"'.implode('","',array_keys($results[0])).'",'."\n";
  $csv_output=utf8_decode(' #, id,"Nombre","Apellido","Categoría","E-mail","Pass", "Idioma"'."\n");

  foreach ($results as $row) {
    $k=$users_vip_count-$i++;
    $csv_output.='"'.$k.'",';
    $csv_output .= utf8_decode('"'.implode('","',$row).'",'."\n");
  }

   $csv_output .= "\n";



    return $csv_output;
  }

}

// Instantiate a singleton of this plugin
$csvExport = new CSVExport();

/***Información obtenida desde el portal de expositores (Agregado por Levi)***/
add_action('admin_enqueue_scripts', function(){
    wp_enqueue_style('admin', get_template_directory_uri() . '/css/admin.css');
});

add_action('add_meta_boxes', function(){
    add_meta_box( 'epInfo', 'Información del portal de expositores', function($post){
        $postId = $post->ID;
        $published = get_post_meta($postId, '_ep_published', TRUE);

        if(! empty($published)){
            ?>
                <table id="epInfoTable">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Texto en inglés</th>
                            <th>Texto en español</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Listo para publicar</td>
                            <td colspan="2">
                                <input style="width: auto;" name="_ep_translated" type="checkbox" value="true"<?= empty(get_post_meta($postId, '_ep_translated', TRUE)) ? '' : ' checked'; ?>>
                            </td>
                        </tr>
                        <tr>
                            <td>Imágenes</td>
                            <td>
                                <?php
                                $images = get_post_meta($post->ID, '_ep_images', TRUE);

                                if(count($images) > 0){ ?>
                                    <ul>
                                        <?php foreach($images as $image){ ?>
                                            <li style="display: inline-block; text-align: center;">
                                                <img style="width: 200px; max-height: 200px;" src="<?= $image['url']; ?>">
                                                <textarea style="width: 200px;" name="_ep_images_captions_en[]"><?= $image['caption_en']; ?></textarea>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                <?php }else{ ?>
                                    <p>No hay imágenes cargadas.</p>
                                <?php } ?>
                            </td>
                            <td>
                                <?php
                                $images = get_post_meta($post->ID, '_ep_images', TRUE);

                                if(count($images) > 0){ ?>
                                    <ul>
                                        <?php foreach($images as $image){ ?>
                                            <li style="display: inline-block; text-align: center;">
                                                <img style="width: 200px; max-height: 200px;" src="<?= $image['url']; ?>">
                                                <textarea style="width: 200px;" name="_ep_images_captions_es[]"><?= $image['caption_es']; ?></textarea>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                <?php }else{ ?>
                                    <p>No hay imágenes cargadas.</p>
                                <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Ubicación</td>
                            <td>
                                <textarea name="_ep_location_es"><?= get_post_meta($postId, '_ep_location_es', TRUE); ?></textarea>
                            </td>
                            <td>
                                <textarea name="_ep_location_en"><?= get_post_meta($postId, '_ep_location_en', TRUE); ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>Teléfono</td>
                            <td colspan="2">
                                <input name="_ep_telephone" type="text" value="<?= get_post_meta($postId, '_ep_telephone', TRUE); ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td colspan="2">
                                <input name="_ep_email" type="text" value="<?= get_post_meta($postId, '_ep_email', TRUE); ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Website</td>
                            <td colspan="2">
                                <input name="_ep_website" type="text" value="<?= get_post_meta($postId, '_ep_website', TRUE); ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Facebook</td>
                            <td colspan="2">
                                <input name="_ep_facebook" type="text" value="<?= get_post_meta($postId, '_ep_facebook', TRUE); ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Twitter</td>
                            <td colspan="2">
                                <input name="_ep_twitter" type="text" value="<?= get_post_meta($postId, '_ep_twitter', TRUE); ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Instagram</td>
                            <td colspan="2">
                                <input name="_ep_instagram" type="text" value="<?= get_post_meta($postId, '_ep_instagram', TRUE); ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Statement de la galería</td>
                            <td>
                                <textarea name="_ep_statement_maf_en"><?= get_post_meta($postId, '_ep_statement_maf_en', TRUE); ?></textarea>
                            </td>
                            <td>
                                <textarea name="_ep_statement_maf_es"><?= get_post_meta($postId, '_ep_statement_maf_es', TRUE); ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>Statement del stand</td>
                            <td>
                                <textarea name="_ep_statement_stand_en"><?= get_post_meta($postId, '_ep_statement_stand_en', TRUE); ?></textarea>
                            </td>
                            <td>
                                <textarea name="_ep_statement_stand_es"><?= get_post_meta($postId, '_ep_statement_stand_es', TRUE); ?></textarea>
                            </td>
                        </tr>
                        <!--<tr>
                            <td>Biografías de los artistas</td>
                            <td>
                                <textarea name="_ep_artists_bios_en"><?= get_post_meta($postId, '_ep_artists_bios_en', TRUE); ?></textarea>
                            </td>
                            <td>
                                <textarea name="_ep_artists_bios_es"><?= get_post_meta($postId, '_ep_artists_bios_es', TRUE); ?></textarea>
                            </td>
                        </tr>-->
                        <tr>
                            <td>Artistas en MAF 2018</td>
                            <td colspan="2">
                                <textarea name="_ep_artists"><?= get_post_meta($postId, '_ep_artists', TRUE); ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>Artistas representados</td>
                            <td colspan="2">
                                <textarea name="_ep_represented_artists"><?= get_post_meta($postId, '_ep_represented_artists', TRUE); ?></textarea>
                            </td>
                        </tr>
                        <!--<tr>
                            <td>Offsite nombre</td>
                            <td>
                                <input name="_ep_off_site_name_en" type="text" value="<?= get_post_meta($postId, '_ep_off_site_name_en', TRUE); ?>">
                            </td>
                            <td>
                                <input name="_ep_off_site_name_es" type="text" value="<?= get_post_meta($postId, '_ep_off_site_name_es', TRUE); ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Offsite descripción</td>
                            <td>
                                <textarea name="_ep_off_site_description_en"><?= get_post_meta($postId, '_ep_off_site_description_en', TRUE); ?></textarea>
                            </td>
                            <td>
                                <textarea name="_ep_off_site_description_es"><?= get_post_meta($postId, '_ep_off_site_description_es', TRUE); ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>Offsite imagen</td>
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
                            <td>Off site dirección</td>
                            <td>
                                <textarea name="_ep_off_site_address_en"><?= get_post_meta($postId, '_ep_off_site_address_en', TRUE); ?></textarea>
                            </td>
                            <td>
                                <textarea name="_ep_off_site_address_es"><?= get_post_meta($postId, '_ep_off_site_address_es', TRUE); ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>Off site horario</td>
                            <td>
                                <input name="_ep_off_site_hours_en" type="text" value="<?= get_post_meta($postId, '_ep_off_site_hours_en', TRUE); ?>">
                            </td>
                            <td>
                                <input name="_ep_off_site_hours_es" type="text" value="<?= get_post_meta($postId, '_ep_off_site_hours_es', TRUE); ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Off site fechas</td>
                            <td>
                                <input name="_ep_off_site_dates_en" type="text" value="<?= get_post_meta($postId, '_ep_off_site_dates_en', TRUE); ?>">
                            </td>
                            <td>
                                <input name="_ep_off_site_dates_es" type="text" value="<?= get_post_meta($postId, '_ep_off_site_dates_es', TRUE); ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Off site información adicional</td>
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
        }else{
            ?>
                <p>La información del portal de expositores para esta galería no ha sido publicada aún.</p>
            <?php
        }
    }, NULL, 'advanced', 'high');
});

add_action('save_post', function($postId){
    if(! isset($_POST['_ep_translated'])){
        delete_post_meta($postId, '_ep_translated');
    }

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
});

add_filter('xmlrpc_enabled', '__return_false');