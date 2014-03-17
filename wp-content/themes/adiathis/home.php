<?php 
/**
 * Template Name: Home Template 
 */

get_header(); ?>
<div class="wrap-main">
	<section id="home-table">
		<div class="clearfix bloc-img formations">
			<div class="right bloc-color">
				<h1>Formations</h1>
				<span class="sep"></span>
				<a href="formations" class="seeMore">en savoir +</a>
			</div>
		</div>
		<div class="clearfix bloc-img coaching">
			<div class="left bloc-color">
				<h1>Coaching</h1>
				<span class="sep"></span>
				<a href="coaching" class="seeMore">en savoir +</a>
			</div>
		</div>

		<span class="shadow-bloc"></span>
	</section>
	<div class="content"></div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>