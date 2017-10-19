        <?php get_header(); ?>
        <div class="content">
            <h1>Home page</h1>
            <div class="gazou"></div>
            <div class="caption">
                Welcome on this sample site that demonstrates using Gatsby-source-wordpress <br>
           
            </div>
        </div>
        <div class="content">
            <h2>The latests blog posts</h2>
            Filter by category:All - Awesome - Fantastic - Non classe - Wonderfl - Reset filter
            <div class="posts">
                    <div class="row">
                    <?php
                        if (have_posts()):
                            while (have_posts()):
                                the_post();
                    ?>
                        <figure class = "col-sm-4">
                            <img src = "<?php bloginfo('template_directory'); ?>/imgs/flower.jpg">
                            <?php echo get_the_date('Y/m/d');?>
                            <figcaption>
                                <h3><?php the_title() ?></h3>
                                <?php the_excerpt() ?>
                                <a href=<?php the_permalink(); ?>>readmore</a>
                            </figcaption>
                        </figure>
                    <?php
                         endwhile;
                     endif;
                    ?>
                    </div>
            </div>
        </div>
        <?php get_footer(); ?>

