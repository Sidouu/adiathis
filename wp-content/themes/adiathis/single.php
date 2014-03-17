<?php get_header(); ?>
<div class="wrap-main">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class="content">
                <div class="detailsNews">
                    <h1 class="title">
                        <?php the_title(); ?>
                        <span class="line"></span>
                    </h1>
                    <?php the_content(); ?>
                    <p>Posté le <?php the_date(); ?>.</p>
                </div>
                <p><a href="?page_id=38"><strong>> Retour aux actualités</strong></a></p>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>