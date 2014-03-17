<?php get_header(); ?>
<div class="wrap-main">
    <div class="content">
        <h1 class="title">
            <?php single_cat_title(); ?>
            <span class="line"></span>
        </h1>
        <?php echo category_description(); ?>
    </div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>