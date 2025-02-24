<div id="content" class="site-content">
    <div id="content" class="site-contente">
        <main id="main" class="site-main">
            <?php 
                $hero_title = get_theme_mod('set_hero_title', 'Please, type some title');
                $hero_subtitle = get_theme_mod('set_hero_subtitle', 'Please, type some subtitle');
                $hero_button_link = get_theme_mod('set_hero_button_link', '#');
                $hero_button_text = get_theme_mod('set_hero_button_text', 'Learn More');
                $hero_height = get_theme_mod('set_hero_height', 800);
                $hero_background = wp_get_attachment_url(get_theme_mod('set_hero_background'));
            ?>
            <section class="hero" style="background-image: url('<?php echo esc_url($hero_background); ?>');">
                <div class="overlay" style="min-height: <?php echo esc_attr($hero_height); ?>px;">
                    <div class="container">
                        <div class="hero-items">
                            <h1><?php echo esc_html($hero_title);?></h1>
                            <p><?php echo nl2br(esc_html ($hero_subtitle));?></p>
                            <a href="<?php echo esc_url($hero_button_link);?>"><?php echo esc_html($hero_button_text);?></a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="services">
                <h2>Services</h2>
                <div class="container">
                    <div class="services-item">
                        <?php
                        if (is_active_sidebar('services-1')) {
                            dynamic_sidebar('services-1');
                        }
                        ?>
                    </div>
                    <div class="services-item">
                        <?php
                        if (is_active_sidebar('services-2')) {
                            dynamic_sidebar('services-2');
                        }
                        ?>
                    </div>
                    <div class="services-item">
                        <?php
                        if (is_active_sidebar('services-3')) {
                            dynamic_sidebar('services-3');
                        }
                        ?>
                    </div>
                </div>

            </section>
            <section class="home-blog">
                <h2>Latest News</h2>
                <div class="container">
                    <?php

                        $per_page = get_theme_mod('set_per_page', 3);
                        $category_include = get_theme_mod('set_category_include');
                        $category_exclude = get_theme_mod('set_category_exclude');
                        
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => esc_html($per_page),
                        'category__in' => explode(",", esc_html($category_include)),
                        'category__not_in' => explode(",", esc_html($category_exclude))
                    );

                    $postlist = new WP_Query($args);

                    if ($postlist->have_posts()):
                        while ($postlist->have_posts()) : $postlist->the_post();
                    ?>
                            <article>
                                <?php if (has_post_thumbnail()): ?>
                                    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('large'); ?></a>
                                <?php endif; ?>
                                <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                                <div class="meta-info">
                                    <p>
                                        by <span><?php the_author_posts_link(); ?></span>
                                        <?php if (has_category()): ?>
                                            <p>Categorias: <?php the_category(' '); ?></p>
                                        <?php endif; ?>
                                        <?php if (has_tag()): ?>
                                            <p>Tags: <?php the_tags('', ', '); ?></p>
                                        <?php endif; ?>
                                        </p>
                                            <p><span><?php echo get_the_date(); ?></span></p>
                                </div>
                                <?php the_excerpt(); //trás o resumo do post 
                                ?>
                            </article>
                        <?php
                        endwhile;
                        wp_reset_postdata();
                    else:
                        ?>
                        <p>Nada ainda para mostrar!</p>
                    <?php endif;
                    ?>
                </div>
            </section>
        </main>
    </div>
</div>