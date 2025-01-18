<?php get_header() ?>

<div id="content" class="site-content">
    <div id="content" class="site-contente">
        <main id="main" class="site-main">
            <section class="hero">
                Hero
            </section>
            <section class="services">
               <h2>Services</h2>
               <div class="services-item">
                    <?php 
                    
                    ?>
               </div>
               <div class="services-item">
                    <?php 
                    
                    ?>
               </div>
               <div class="services-item">
                    <?php 
                    
                    ?>
               </div> 
            </section>
            <section class="home-blog">
                <div class="container">
                    <div class="blog-items">
                        <?php
                        if (have_posts()):
                            while (have_posts()) : the_post();
                        ?>
                                <article>
                                    <h2><?php the_title(); ?></h2>
                                    <div class="meta-info">
                                        <p>Postado em <?php echo get_the_date(); ?> autor
                                            <?php the_author_posts_link(); ?></p>
                                        <p>Categorias: <?php the_category(' '); ?></p>
                                        <p>Tags: <?php the_tags('', ', '); ?></p>
                                    </div>
                                    <?php the_content(); ?>
                                </article>
                            <?php
                            endwhile;  
                        else:
                            ?>
                            <p>Nada ainda para mostrar!</p>
                        <?php endif;
                        ?>
                    </div>
                </div>
            </section>
        </main>
    </div>
</div>
<?php get_footer() ?>