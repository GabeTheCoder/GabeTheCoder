<?php /* Template Name: blog-list */ ?>

<?php get_header(); ?>

    <div class="posts">
        <div class="primary-container">
            <section>
                <?php $category_ID = get_category(get_query_var('cat'))->cat_ID ?>

                <div class="categories">
                    <div class="info">
                        <h1><?php echo 'Topic: ' . get_cat_name($category_ID); ?></h1>
                        <a href="/blog">Back To Blog</a>
                    </div>
                </div>

                <div class="blogs">
                    <?php $query = new WP_Query(array('post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => 5, 'cat' => $category_ID)); ?>

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
                </div>
            </section>
            <!-- <aside></aside> -->
        </div>
    </div>

<?php get_footer(); ?>