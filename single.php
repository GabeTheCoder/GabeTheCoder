<?php get_header(); ?>

    <div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

            <div class="post">
                <div class="primary-container">
                    <?php while ( have_posts() ) : the_post();?>
                        <article>
                            <div class="info">
                                <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
                                <time><?php the_date(); ?></time>
                                <div class="separator"></div>
                                <p><?php the_content(); ?></p>
                            </div>
                        </article>
                        <aside>
                            <?php get_template_part( 'author' ); ?>
                        </aside>
                    <?php endwhile; ?>
                </div>
            </div>

        </main>
    </div>

<?php get_footer(); ?>