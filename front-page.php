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
                    <section>
                        <?php $query = new WP_Query(array('post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => 5)); ?>

                        <?php if ( $query->have_posts() ) : ?>
                            <ul>
                                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                                    <li>
                                        <a href="<?php the_permalink(); ?>">
                                            <div class="item">
                                                <div class="thumbnail" style="background-image: url('<?php the_post_thumbnail_url(); ?>');"></div>
                                                <div class="info">
                                                    <h3><?php $category = get_the_category(); echo $category[0]->cat_name; ?></h3>
                                                    <h2><?php the_title(); ?></h2>
                                                    <time><?php the_date(); ?></time>
                                                    <p><?php the_excerpt(); ?></p>
                                                    <div class="read-more">Read More</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                    </section>
                    <!-- <aside></aside> -->
                </div>
            </div>

        </main>
    </div>

<?php get_footer(); ?>