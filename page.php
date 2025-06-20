<?php get_header(); ?>

    <div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

            <div class="post">
                <div class="primary-container">
                    <?php while ( have_posts() ) : the_post();?>
                        <article>
                            <div class="info">
                                <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
                                <div class="separator"></div>
                            </div>

                            <div class="entry">
                                <?php the_content(); ?>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>
            </div>

        </main>
    </div>

<?php get_footer(); ?>