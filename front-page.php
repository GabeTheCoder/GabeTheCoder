<?php get_header(); ?>

    <div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

            <div class="slideshow">
                <a href="/info">
                    <div class="slide">
                        <div class="background"></div>
                        <div class="overlay">
                            <div class="primary-container">
                                <div class="info">
                                    <h2>Software Engineering</h2>
                                    <h1>Introducing The Definitive Career Guide For Full Stack Developers</h1>
                                    <div class="separator"></div>
                                    <p>Skyrocket your value as a developer to win clients, influence developers, or get a raise at your software engineering job.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="posts">
                <div class="primary-container">
                    <?php $query = new WP_Query(array('post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => -1)); ?>

                    <?php if ( $query->have_posts() ) : ?>
                        <ul>
                            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                                <li>
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>

        </main>
    </div>

<?php get_footer(); ?>