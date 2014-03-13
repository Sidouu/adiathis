<!DOCTYPE html>
<html>
	<head <?php language_attributes(); ?>>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php the_title(); ?></title>
		<!-- css -->
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
		<?php wp_head(); ?>

		<!-- favicon -->
		<link rel="icon" href="" type="image/ico" />
		<link rel="shortcut icon" href="" type="image/ico" />
		<link rel="shortcut icon" type="image/x-icon" href="" />

		<!-- js -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	</head>
	<body <?php body_class(); ?>>
		<header>
			<div class="content clear-fix">
				<div class="pull-left">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="Adiathis" class="logo">
				</div>
				<div class="pull-right">
					<ul id="nav">
						<li><a href="#" title="Accueil">Accueil</a></li>
						<li><a href="#" title="Formations">Formations</a></li>
						<li><a href="#" title="Coaching">Coaching</a></li>
						<li><a href="#" title="Planning">Planning</a></li>
						<li><a href="#" title="La Société">La société</a></li>
						<li><a href="#" title="Contact">Contact</a></li>
					</ul>
				</div>
			</div>
		</header>
