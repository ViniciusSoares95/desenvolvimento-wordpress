<?php
/*
Template Name: General Template
*/
?>

<?php get_header() ?>

<img src="<?php header_image();?>" height="<?php echo get_custom_header()->height; ?>" 
width="<?php echo get_custom_header()->width; ?>" alt="imagens de código de programação">

<div id="content" class="site-content">
    <div id="content" class="site-contente">
        <main id="main" class="site-main">
            <div class="container">
                <div class="general-template">
                    <?php
                    if (have_posts()):
                        while (have_posts()) : the_post();
                    ?>
                            <article>
                                <h1><?php the_title(); ?></h1>
                                <?php the_content(); ?>
                            </article>
                        <?php
                        endwhile;    # code...
                    else:
                        ?>
                        <p>Nada ainda para mostrar!</p>
                    <?php endif;
                    ?>
                </div>
            </div>
        </main>
    </div>
</div>
<?php get_footer() ?>