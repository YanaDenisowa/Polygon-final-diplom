
	<?php 
	/*
		Template Name: Home page
	*/
	?>
	<?php get_header();	?>



<!-- Start Our Works Section -->
	<section class="our-works">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="our-works__header">
						<h2>
							<?php the_field('our_works_title'); ?>
						</h2>
					</div>
				</div>
			</div>
		<div class="row align-items-center">
            <div class="col-12 col-md-6">
                <div class="our-works__links">
					<?php if( have_rows('our_works_links') ):
                 		  while( have_rows('our_works_links') ) : the_row();?>
                 		    <a href="<?php the_sub_field('works_url');?>"><?php the_sub_field('works_title');?></a>
			        <?php endwhile;
             		    endif;?>				
				</div> 
            </div>
			<div class="col-12 col-md-6">
				<div class="our-works__controls">
					<select>
						<?php if( have_rows('our_works_select_text') ):
                 		 	  while( have_rows('our_works_select_text') ) : the_row();?>
                 		   		<option value=""><?php the_sub_field('works_text');?></option>
			       		 <?php endwhile;
             		    endif;?>	
					</select>
				</div>
			</div>
		</div>
			<div class="row">
					<?php 
						if (have_rows('our_works_gallery')) {
						$col1 = "";
						$col2 = "";
						$col3 = "";
						while (have_rows('our_works_gallery')) {
							the_row();
							$number = get_row_index(); 
							$colNumber = $number%3;
							if ($colNumber == 0) {
								$isBiggest = $col1 == "";
								$col1 .= '<a href="" class="our-works__item work-';
								$col1 .= $isBiggest ? '300' : '500';
								$col1 .= '" style="background-image:url('.get_sub_field('gallery_img').');"';
								$col1 .= '>';
								$col1 .= '<div class="our-works__item-content">';
								$col1 .= '<h3>'.get_sub_field('gallery_title').'</h3>';
								$col1 .= '<span>'.get_sub_field('gallery_text').'</span>';
								$col1 .= '</div>';
								$col1 .= '</a>';
							} else if($colNumber == 1){
								$isBiggest = $col2 == "";
								$col2 .= '<a href="" class="our-works__item work-';
								$col2 .= $isBiggest ? '500' : '300';
								$col2 .= '" style="background-image:url('.get_sub_field('gallery_img').');"';
								$col2 .= '>';
								$col2 .= '<div class="our-works__item-content">';
								$col2 .= '<h3>'.get_sub_field('gallery_title').'</h3>';
								$col2 .= '<span>'.get_sub_field('gallery_text').'</span>';
								$col2 .= '</div>';
								$col2 .= '</a>';
							} else {
								$isBiggest = $col3 == "";
								$col3 .= '<a href="" class="our-works__item work-';
								$col3 .= $isBiggest ? '300' : '500';
								$col3 .= '" style="background-image:url('.get_sub_field('gallery_img').');"';
								$col3 .= '>';
								$col3 .= '<div class="our-works__item-content">';
								$col3 .= '<h3>'.get_sub_field('gallery_title').'</h3>';
								$col3 .= '<span>'.get_sub_field('gallery_text').'</span>';
								$col3 .= '</div>';
								$col3 .= '</a>';
							}
						} 
						 echo '<div class="col-12 col-md-4">'.$col1.'</div>';
						 echo '<div class="col-12 col-md-4">'.$col2.'</div>';
						 echo '<div class="col-12 col-md-4">'.$col3.'</div>';
					}
					?>
			<div class="row">
				<div class="col-12">
					<div class="our-works__more">
						<?php if( have_rows('our_works_button') ):
                 		  	  while( have_rows('our_works_button') ) : the_row();?>
                 		      <a href="<?php the_sub_field('works_btn_url');?>"	class="main_btn" >
                 		      	<?php the_sub_field('works_btn_text');?></a>
			        	<?php endwhile;
             		    endif;?>	
					</div>
				</div>
			</div>
		</div>
	</section> 
<!-- End Our Works Section -->

<!-- Start Picture Section -->
	<section class="pictures">
		<div class="container">  
					<div class="row">
					 	<div class="col-12">
							<div class="pictures__item"> 
								<?php if( have_rows('pictures_items') ):
		                 		      while( have_rows('pictures_items') ) : the_row();?>
									    <a href="#"><img src="<?php the_sub_field('pictures_item_img');?>" alt="img"></a>
		          				<?php endwhile;
		             		    endif;?>	
							</div>
						</div>
					</div>
				</div>
	</section>
<!-- End Picture Section -->

<!-- Start About Us Section -->
	 <section class="about-us">
	 	<div class="container">
	 		<div class="row">
	 			<div class="col-12 col-md-6">
					<h2>
						<?php the_field('about_us_title');?>
					</h2>
					<p>
						<?php the_field('about_us_text');?>
					</p>
				</div>
			</div>
			<div class="row">
				<?php if( have_rows('about_us__content') ):
		            while( have_rows('about_us__content') ) : the_row();?>
		                <div class="col-12 col-md-4">
							<a href="<?php the_sub_field('about_us_item_img_url');?>" class="about-us__item" 
								style="background-image:url(<?php the_sub_field('about_us_item_img');?>)">
								<div class="about-us__info">
									<h4>
										<?php the_sub_field('about_us_item_title');?>
									</h4>
									<p>
										<?php the_sub_field('about_us_item_text');?>
									</p>
								</div>
							</a>
						</div>
		         <?php endwhile;
		          endif;?>	
				<div class="col-12 col-md-4">
					<div class="about-us__content">
						<h4><?php the_field('about_us_content_block_title');?></h4>
						<p>
							<?php the_field('about_us_content_block_text');?>
						</p>
						<a href="<?php the_field('about_us_content_block_sslka');?>"><?php the_field('about_us_content_block_sslka_text');?></a>
					</div>
				</div>
			</div>
<!-- 	 	</div> -->
	 </section>
<!-- End About Us Section -->

<!-- Start Our Blog Section-->
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

<!-- Start Contact Us Section -->
	<section class="contact-us">
		<div class="container">
			<div class="row ">
				<div class="col-12 col-md-6">
					<div class="contact-us__header">
						<h2>
							<?php the_field('contact__us_title');?>
						</h2>
						<p>
							<?php the_field('contact_us_text');?>
						</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-md-6">
					<div class="contact-us__form">
						<h3>
							<?php the_field('contact_us_form_title');?>
						</h3>
						 <?php echo do_shortcode('[contact-form-7 id="70" title="Контактная форма 1"]');?> 
					</div>
				</div>
				<div class="col-12 col-md-6">
					<div class="contact-us__map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d20309.075323923767!2d30.4721233!3d50.4851493!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4ce69703c71bf%3A0x4c3f6f6e0387b85f!2sExperimentanium!5e0!3m2!1sru!2sua!4v1603703380570!5m2!1sru!2sua" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<?php if( have_rows('contact_content') ):
		                 while( have_rows('contact_content') ) : the_row();?>
		                 	<div class="col-12 col-md-3">
		                 		<div class="contact-us__item">
		                 		    <img src="<?php the_sub_field('contact_img');?>" style="width: 80px; height:80px;" alt="">
									<a href="<?php the_sub_field('contact_url');?>"><?php the_sub_field('contact_text');?>
									</a>
							    </div>
							</div>
		        <?php endwhile;
		              endif;?>	
			</div>
			<div class="row">
				<div class="col-12">
					<div class="contact-us__social">
						<?php if( have_rows('pic_content') ):
		                 		while( have_rows('pic_content') ) : the_row();?>
		                 		  	<a href="<?php the_sub_field('pic_url');?>"><img src="<?php the_sub_field('pic_img');?>" alt="img" style= "width:40px; height:40px;"></a>
						<?php endwhile;
		             	endif;?>	
					</div>
				</div>
			</div>
	</section>
<!-- End Contact Us Section -->

<?php get_footer(); ?>