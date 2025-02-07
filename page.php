<?php get_header() ?>

<img src="<?php header_image();?>" height="<?php echo esc_attr(get_custom_header()->height); ?>" 
width="<?php echo esc_attr(get_custom_header()->width); ?>" alt="imagens de código de programação">

<div id="content" class="site-content">
    <div id="content" class="site-contente">
        <main id="main" class="site-main">
            <div class="container">
                <div class="page-item">
                    <?php
                    while (have_posts()) : the_post();
                    ?>
                        <article>
                            <header>
                                <h1><?php the_title(); ?></h1>
                            </header>
                            <?php the_content(); ?>
                        </article>
                    <?php
                    endwhile;    # code...
                    ?>
                </div>
            </div>
        </main>
    </div>
</div>
<?php get_footer() ?>