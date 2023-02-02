<?php
/**
 * Template name: Custom About Page
 * The template for displaying my custom page template, speciffically for the about page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="about-hero-content">
        <div class="primary-hero-content" role="main">
            <?php while ( have_posts() ) : the_post(); 
                $hero_statement = get_field('hero_statement');
            ?>
            <?php endwhile ?>
            <section class="about-hero-statement">
                <h1><?php echo $hero_statement; ?></h1>
            </section>
        </div>
        <div class="about-content">
            <?php while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
	        <?php endwhile;  ?>
        </div>
        <hr>
        <div class="footer-content">
            <div class="footer-text">
                <?php while ( have_posts() ) : the_post();
                    $footer_tagline = get_field('footer_tagline');
                ?>
                <?php endwhile; ?>
                <section class="footer-statement">
                <h5><?php echo $footer_tagline; ?></h5>
            </section>
            </div>
            <div class="contact-button">
                <a class="contact-us" href="<?php echo site_url('/contact/') ?>">Contact Us</a>
            </div>
        </div>

<?php get_footer(); ?>