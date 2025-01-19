<?php get_header() ?>
<img src="<?php header_image();?>" height="<?php echo get_custom_header()->height; ?>" 
width="<?php echo get_custom_header()->width; ?>" alt="imagens de código de programação">

<div id="content" class="site-content">
    <div id="content" class="site-contente">
        <main id="main" class="site-main">
            <h1>Blog</h1>
            <div class="container">
                <div class="blog-items">
                    <?php
                    if (have_posts()):
                        while (have_posts()) : the_post();
                    ?>
                            <article>
                                <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                                <a href="<?php the_permalink() ?>"><?php the_post_thumbnail( array(275, 275)); ?></a>
                                <div class="meta-info">
                                    <p>Postado em <?php echo get_the_date(); ?> autor
                                        <?php the_author_posts_link(); ?></p>
                                    <p>Categorias: <?php the_category(' '); ?></p>
                                    <p>Tags: <?php the_tags('', ', '); ?></p>
                                </div>
                                <?php the_excerpt(); ?>
                            </article>
                        <?php
                        endwhile;    # code...
                    else:
                        ?>
                        <p>Nada ainda para mostrar!</p>
                    <?php endif;?>
                </div>
                <?php get_sidebar(); ?>
            </div>
        </main>
    </div>
</div>
<?php get_footer() ?>