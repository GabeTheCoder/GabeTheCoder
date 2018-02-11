<?php get_header(); ?>

    <div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

            <div class="post">
                <div class="primary-container">
                    <?php while ( have_posts() ) : the_post();?>
                        <article>
                            <h1><?php the_title(); ?></h1>
                            <p><?php the_content(); ?></p>
                        </article>
                        <!-- <aside></aside> -->
                    <?php endwhile; ?>
                </div>
            </div>

        </main>
    </div>

<?php get_footer(); ?>