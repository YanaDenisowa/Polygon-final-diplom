
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<?php wp_head(); ?>
	
</head>
<body>
		<!-- Start Header -->
<header class="header">
	<div class="container">
		<div class="header__row">
				<div class="header__logo"> 
					<a href="<?php echo home_url(); ?>">
						<img src="<?php the_field('header_logo', 'options'); ?>" alt="">
					</a>
				</div>
			<div class="header__toggle" id="mobile-btn">
				<span></span>
				<span></span>
				<span></span>
			</div>
			<nav class="header__menu">
				<?php wp_nav_menu( array(
					'container'       => 'false',            
					'theme_location'  => 'header-menu', 
					) );
				?>
			</nav>
		</div>
	</div>
</header>
	<!-- End Header -->
	<!-- Start Main Section -->
	<section class="main">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-12 col-md-6">
					<div class="main__content">
						<h1>
							<?php the_field('hero_title'); ?>
						</h1>
						<p>
							<?php the_field('hero_text'); ?>
						</p>
						<a href="<?php the_field('hero_link_url'); ?>" class="main_btn"> <?php the_field('hero_link1'); ?></a>
					</div>
				</div>
				<div class="col-12 col-md-6">
					<div class="main__content">
						<img src= "<?php the_field('hero_image'); ?>" alt="img">
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- End Main Section -->