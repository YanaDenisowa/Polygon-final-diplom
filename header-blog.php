
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

	<div class="row">
                    <div class="col-md-12">
                        <h2>Blog</h2>
                        <ul class="breadcrumb">
                            <li><a href="<?php echo home_url(); ?>">Home</a></li>
                            <li><a href="/blog/">Blog</a></li>
                        </ul>
                    </div>
                </div>
