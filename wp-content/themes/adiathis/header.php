<!DOCTYPE html>
<html>
	<head <?php language_attributes(); ?>>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php the_title(); ?></title>
		<!-- css -->
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
		<link href='http://fonts.googleapis.com/css?family=Dosis|Quicksand:400,700' rel='stylesheet' type='text/css'>
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
					<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_id' => 'nav' ) ); ?>
				</div>
			</div>
		</header>
