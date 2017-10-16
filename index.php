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
                        <figure class = "col-sm-4">
                            <img src = "<?php bloginfo('template_directory'); ?>/imgs/flower.jpg">
                            <figcaption>
                                <h3>Sample post</h3>
                                I can't abide these Jawas.Disgusting creatures.Go on, go on.
                            </figcaption>
                        </figure>
                        <figure class = "col-sm-4">
                            <img src = "<?php bloginfo('template_directory'); ?>/imgs/flower.jpg">
                            <figcaption>
                                <h3>This is a third blog article</h3>
                                This is the third article excerpt.
                            </figcaption>
                        </figure>
                        <figure class = "col-sm-4">
                            <img src = "<?php bloginfo('template_directory'); ?>/imgs/flower.jpg">
                            <figcaption>
                                <h3>This is a second blog article</h3>
                                This is the second article excerpt.
                            </figcaption>
                        </figure>
                    </div>
                    <div class="row">
                        <figure class = "col-sm-4">
                            <img src="<?php bloginfo('template_directory'); ?>/imgs/flower.jpg">
                            <figcaption>
                                <h3>This is a sample blog article</h3>
                                This is the first article excerpt.
                            </figcaption>
                        </figure>
                    </div>
            </div>
        </div>
        <?php get_footer(); ?>

