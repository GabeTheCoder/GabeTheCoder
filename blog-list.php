<?php /* Template Name: blog-list */ ?>

<?php get_header(); ?>

    <div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
        <?php
            $query = new WP_Query(array('post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => -1)); ?>
 
<?php if ( $query->have_posts() ) : ?>
 
<ul>
 
    <!-- the loop -->
    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    <?php endwhile; ?>
    <!-- end of the loop -->
 
</ul>
 
    <?php wp_reset_postdata(); ?>
 
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
        </main>
    </div>

<?php get_footer(); ?>