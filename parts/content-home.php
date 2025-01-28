<div id="content" class="site-content">
    <div id="content" class="site-contente">
        <main id="main" class="site-main">
            <section class="hero">
                Hero
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
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 5,
                        'category__in' => array(8, 7),
                        'category__not_in' => array(1)
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