<?php /* Template Name: contact */ ?>

<?php
    $name = $_POST['from'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $subject = "Message via site from '$name' ";
    $to = "gabethecoder@icloud.com";
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From:<$from> \r\n";
?>

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
                                <h1>
                                    <?php
                                        if (mail($to, $subject, $message, $headers)) {
                                            // echo "YOUP";
                                        } else {
                                            // echo "NOOOO";
                                        }
                                    ?>
                                </h1>
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