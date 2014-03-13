<?php 
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>
<div class="wrap-main">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class="content">
                <h1 class="title">
                    <?php the_title(); ?>
                    <span class="line"></span>
                </h1>
                <?php the_content(); ?>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>