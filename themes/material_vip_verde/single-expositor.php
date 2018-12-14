<?php
    if(empty(get_post_meta($post->ID, '_ep_translated', TRUE))){
        header('Location: ' . home_url() . '/expositores/2018/');

        exit;
    }

    get_header();

    $language = qtranxf_getLanguage();

    $terms = wp_get_object_terms($post->ID, 'expositores');
    $termId = NULL;

    foreach($terms as $term){
        if($term->slug == 'expositores' || $term->slug == 'presentaciones-especiales' || $term->slug == 'proyectos'){
            $termId = $term->term_id;

            break;
        }
    }

    //var_dump($termId);//expositores, presentaciones-especiales, proyectos

    $query = new WP_Query([
        'post_type' => 'expositor',
        'post_per_page' => -1,
        'nopaging' => true,
        'order' => 'ASC',
        'orderby' => 'name',
        'meta_key' => '_ep_translated',
        'meta_value' => 'true',
        'tax_query' => [
            'relation' => 'AND',
            [
                'taxonomy' => 'expositores',
                'field'    => 'term_id',
                'terms'    => [$termId],
            ],
            [
                'taxonomy' => 'expositores',
                'field'    => 'term_id',
                'terms'    => [48],
            ]
        ]
    ]);

    $allPosts = $query->posts;
    $prevPostUrl = NULL;
    $nextPostUrl = NULL;

    foreach($allPosts as $index => $curPost){
        if($curPost->ID == $post->ID){
            if(isset($allPosts[$index - 1])){
                $prevPostUrl = get_permalink($allPosts[$index - 1]->ID);
            }

            if(isset($allPosts[$index + 1])){
                $nextPostUrl = get_permalink($allPosts[$index + 1]->ID);
            }

            break;
        }
    }
?>
        <div class="wrapper">
            <div class="content content_int content_expositores_int">
                <div class="menu_navegacion">
                    <ul>
                        <li><a href="?p="><img src="<?= get_template_directory_uri(); ?>/img/logo_barra.png"></a></li>
                        <li><?= $language == 'es' ? 'Expositores' : 'Exhibitors'; ?></li>
                        <li><?= $post->post_title; ?></li>
                    </ul>
                </div>
                <section class="expositores_int">
                    <div class="section_int">
                        <div class="colum_tres f_L">
                            <div class="boton_regresar">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 36 36" style="enable-background:new 0 0 36 36;" xml:space="preserve">
                            <style type="text/css">
                                .st0{fill:none;stroke:#0000A5;stroke-width:2;stroke-miterlimit:10;}
                            </style>
                                    <polyline class="st0" points="36.5,0 18.5,18 36.5,36 "></polyline>
                            </svg>
                                <a href="<?= home_url() . '/expositores/2018'; ?>"><p><?= $language == 'es' ? 'REGRESAR' : 'BACK'; ?></p></a>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="ei_titulo">
                            <h1><?= $post->post_title; ?></h1>
                            <p><?= $post->post_content; ?></p>
                        </div>
                        <?php if($prevPostUrl != NULL || $nextPostUrl != NULL){ ?>
                            <div class="colum_tres f_R">
                                <?php if($prevPostUrl != NULL){ ?>
                                    <a href="<?= $prevPostUrl; ?>"><div class="flecha_l"></div></a>
                                <?php } ?>
                                <p><?= $language == 'es' ? 'Expositores 2018' : 'Exhibitors 2018'; ?></p>
                                <?php if($nextPostUrl != NULL){ ?>
                                    <a href="<?= $nextPostUrl; ?>"><div class="flecha_r"></div></a>
                                <?php } ?>
                            </div>
                        <?php } ?>
                        <div class="clear"></div>
                        <?php
                            $images = get_post_meta($post->ID, '_ep_images', TRUE);

                            if(! empty($images) > 0){
                        ?>
                            <div class="ei_galeria">
                                <?php foreach($images as $image){ ?>
                                    <div class="ei_g_imagen" data-caption="<?= $image['caption_' . $language]; ?>">
                                        <img src="<?= $image['url']; ?>">
                                    </div>
                                <?php } ?>
                            </div>
                        <?php } ?>
                        <div class="ei_fila">
                            <div class="ei_columna ei_columna_uno">
                                <div class="ei_parrafo">
                                    <h2><?= $language == 'es' ? 'Statement del Stand' : 'Stand Statement'; ?></h2>
                                    <p><?= nl2br(get_post_meta($post->ID, '_ep_statement_stand_' . $language, TRUE)); ?></p>
                                </div>
                                <!--<div class="ei_parrafo">
                                    <h2><?= $language == 'es' ? 'Biografías de Artistas' : 'Artists Bios'; ?></h2>
                                    <p><?= nl2br(get_post_meta($post->ID, '_ep_artists_bios_' . $language, TRUE)); ?></p>
                                </div>-->
                                <div class="ei_parrafo">
                                    <h2><?= $language == 'es' ? 'Statement de la Galería' : 'Gallery Statement'; ?></h2>
                                    <p><?= nl2br(get_post_meta($post->ID, '_ep_statement_maf_' . $language, TRUE)); ?></p>
                                </div>
                            </div>
                            <div class="ei_columna">
                                <div class="ei_artistas">
                                    <h3><?= $language == 'es' ? 'Artistas en Material' : 'Artists at Material'; ?></h3>
                                    <p><?= nl2br(get_post_meta($post->ID, '_ep_artists', TRUE)); ?></p>
                                </div>
                                <div class="ei_artistas">
                                    <h3><?= $language == 'es' ? 'Artistas Representados o Afiliados' : 'Represented or Affiliated Artists'; ?></h3>
                                    <p><?= nl2br(get_post_meta($post->ID, '_ep_represented_artists', TRUE)); ?></p>
                                </div>
                            </div>
                            <div class="ei_columna ei_columna_direccion">
                                <div class="ei_parrafo">
                                    <h2><?= $language == 'es' ? 'Dirección' : 'Address'; ?></h2>
                                    <p><?= nl2br(get_post_meta($post->ID, '_ep_location_' . $language, TRUE)); ?></p>
                                </div>
                                <div class="ei_parrafo">
                                    <h2><?= $language == 'es' ? 'Correo Electrónico' : 'Email'; ?></h2>
                                    <p><?= get_post_meta($post->ID, '_ep_email', TRUE); ?></p>
                                </div>
                                <div class="ei_parrafo">
                                    <h2><?= $language == 'es' ? 'Sitio Web' : 'Website'; ?></h2>
                                    <p><a href="<?= get_post_meta($post->ID, '_ep_website', TRUE); ?>" target="_blank"><?= get_post_meta($post->ID, '_ep_website', TRUE); ?></a></p>
                                </div>
                                <div class="ei_artistas">
                                    <h3><?= $language == 'es' ? 'Redes Sociales' : 'Social Networks'; ?></h3>
                                    <ul>
                                        <?php
                                        $facebook = get_post_meta($post->ID, '_ep_facebook', TRUE);

                                        if(! empty($facebook)){
                                            ?>
                                            <li><p><span class="red_expositores">Fb:</span> <a href="<?= $facebook; ?>" target="_blank"><?= $facebook; ?></a></p></li>
                                            <?php
                                        }

                                        $twitter = get_post_meta($post->ID, '_ep_twitter', TRUE);

                                        if(! empty($twitter)){
                                            ?>
                                            <li><p><span class="red_expositores">Tw:</span> <a href="<?= $twitter; ?>" target="_blank"><?= $twitter; ?></a></p></li>
                                            <?php
                                        }

                                        $instagram = get_post_meta($post->ID, '_ep_instagram', TRUE);

                                        if(! empty($instagram)){
                                            ?>
                                            <li><p><span class="red_expositores">Ig:</span> <a href="<?= $instagram; ?>" target="_blank"><?= $instagram; ?></a></p></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </section>
                <!-- este codigo solo es para la maqueta debe borrarse -->
                <script type="text/javascript">
                    $(document).ready(function(){
                        $(".ei_g_imagen").on('click', function(){
                            var thisContainer = $(this);
                            var thisImage = thisContainer.find('img');
                            var over = $(".over_imagen").fadeIn();

                            over.find('img').attr('src', thisImage.attr('src'));

                            var nextButton = $('.flecha_gi_der');
                            var nextContainer = thisContainer.next();

                            if(nextContainer.length == 1){
                                nextButton
                                    .show()
                                    .on('click', function(){
                                        nextContainer.trigger('click');
                                    });
                            }else{
                                nextButton.hide();
                            }

                            var prevButton = $('.flecha_gi_izq');
                            var prevContainer = thisContainer.prev();

                            if(prevContainer.length == 1){
                                prevButton
                                    .show()
                                    .on('click', function(){
                                        prevContainer.trigger('click');
                                    });
                            }else{
                                prevButton.hide();
                            }

                            $('.gi_pie_de_foto > p').html(thisContainer.data('caption'));
                        });

                        $(".cerrar_gi").on('click', function(){
                            $(".over_imagen").fadeOut();
                        });
                    });
                </script>
                <?php get_footer(); ?>
            </div>
        </div>
        <div class="over_imagen" style="display: none;">
            <div class="over_imagen_int">
                <div class="cerrar_gi"></div>
                <div class="flecha_gi_izq"></div>
                <div class="flecha_gi_der"></div>
                <span class="helper"></span>
                <img src="upload/images/home01.jpg">
            </div>
            <div class="gi_pie_de_foto">
                <p></p>
            </div>
        </div>
    </body>
</html>