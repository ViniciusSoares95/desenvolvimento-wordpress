<?php get_header() ?>
<img src="<?php header_image();?>" height="<?php echo get_custom_header()->height; ?>" 
width="<?php echo get_custom_header()->width; ?>" alt="imagens de código de programação">

<div id="content" class="site-content">
    <div id="content" class="site-contente">
        <main id="main" class="site-main">
            <?php the_archive_title('<h1 class="archive-title">', '</h1>') ?>
            <?php the_archive_description('<div class="archive-description">', '</div>') ?>
            <div class="container">
                <div class="archive-items">
                    <?php
                    if (have_posts()):
                        while (have_posts()) : the_post();
                    ?>
                            <article>
                                <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                                <?php if(has_post_thumbnail()): ?>
                                    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail( array(275, 275)); ?></a>
                                <?php endif; ?>
                                <div class="meta-info">
                                    <p>Postado em <?php echo get_the_date(); ?> autor
                                        <?php if (has_category()): ?>
                                            <p>Categorias: <?php the_category(' '); ?></p>
                                        <?php endif; ?>
                                        <?php if (has_tag()): ?>
                                            <p>Tags: <?php the_tags('', ', '); ?></p>
                                        <?php endif; ?>   
                                    <p>Tags: <?php the_tags('', ', '); ?></p>
                                </div>
                                <?php the_excerpt(); ?>
                            </article>
                        <?php
                        endwhile;    # code...
                        the_posts_pagination();
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