	<?php 
	/*
		Template Name: Blog page
	*/
	?>
<?php get_header("blog");	?>

<section class="our-blog"> 
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-6">
					<div class="our-blog__header">
						<h2> 
							<?php the_field('our_blog_title');?>
						</h2>
						<p>
							<?php the_field('our_blog_text');?>
						</p>
					</div>
				</div>
			</div>
			<div class="row">
				<?php 
						$linkText =  get_field('our_blog_sslka_text');
							$args = array( 'posts_per_page' => 3);
							$query = new WP_Query( $args );
							if( $query -> have_posts() ){
								while( $query -> have_posts() ){
									$query -> the_post();
						?>
						<div class="col-12 col-md-4">
						<a href="<?php the_permalink(); ?>" class="our-blog__item blog-400"  
									style=" min-height: 250px;
										background-size: cover; 
										background-repeat: no-repeat;
										background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);"> 
							
							<div class="our-blog__item-content" >

							<h3> 
								<?php echo $linkText;?>
							</h3>
						</div>
						</a>
						<div class="our-blog__content">
								<h3><?php the_title(); ?></h3>
								<p><?php the_excerpt();?></p>
								<a href="<?php the_permalink(); ?>" class="main_btn">
									Read More
								</a>
							</div></div>
							<?php
                            }
                            wp_reset_postdata();
                        } 
                        else
                            echo 'Записей нет.';
                        ?>

				</div>
		</div>
	</section>
<!-- End Our Blog Section -->


	<?php get_footer(); ?>