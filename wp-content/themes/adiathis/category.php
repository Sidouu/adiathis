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
        <?php if(z_taxonomy_image_url($cur_cat_id)){ ?>
			<div class="headerImg">
				<img src="<?php echo z_taxonomy_image_url($cur_cat_id); ?>" width="900" height="200" alt=""> 
			</div>
		<?php } ?>
        <?php echo category_description(); ?>
    </div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>