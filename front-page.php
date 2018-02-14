<?php get_header(); ?>

    <div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

            <div class="slideshow">
                <?php $query = new WP_Query(array('post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => 1)); ?>

                <?php if ( $query->have_posts() ) : ?>
                    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                        <a href="<?php the_permalink(); ?>">
                            <div class="slide">
                                <div class="background" style="background-image: url('<?php the_post_thumbnail_url('full'); ?>');"></div>
                                <div class="overlay">
                                    <div class="primary-container">
                                        <div class="info">
                                            <h2><?php $category = get_the_category(); echo $category[0]->cat_name; ?></h2>
                                            <h1><?php the_title(); ?></h1>
                                            <div class="separator"></div>
                                            <p><?php the_excerpt(); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>

            <div class="posts">
                <div class="primary-container">
                    <section>
                        <?php $query = new WP_Query(array('post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => 7, 'offset' => 1)); ?>

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