<?php /* Template Name: blog-list */ ?>

<?php get_header(); ?>

    <div class="posts">
        <div class="primary-container">
            <section>
                <div class="categories">
                    <?php $categories = get_categories(); ?>

                    <ul>
                        <?php foreach ( $categories as $category ) : ?>
                            <li>
                                <a href="<?php echo get_category_link($category->term_id); ?>">
                                    <div class="category"><?php echo $category->name; ?></div>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <div class="blogs">
                    <?php $query = new WP_Query(array('post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => 10000)); ?>

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
            <!-- <aside></aside>  -->
        </div>
    </div>

<?php get_footer(); ?>