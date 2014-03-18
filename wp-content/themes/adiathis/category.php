<?php get_header(); ?>
<div class="wrap-main">
	<div class="clear-fix">
		<div class="path"><a href="<?php echo home_url('/');?>formations">Formations</a> > <?php single_cat_title(); ?></div>
	</div>
    <div class="content">
        <h1 class="title">
            <?php single_cat_title(); ?>
            <span class="line"></span>
        </h1>
        <div class="headerImg"></div>
        <?php echo category_description(); ?>
    </div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>