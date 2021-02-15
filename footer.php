
<!-- Start Copyright Section -->
	<section class="copy">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-12 col-md-3">
					<div class="copy-content">
						<a href="<?php the_field('footer_pic_url');?>"> <img src="<?php the_field('footer_pic');?>" alt="img" style= "width:160px; height:60px;"></a>
					</div>
				</div>
				<div class="col-12 col-md-3">
					<div class="copy-content">
						<p> <?php the_field('footer_text');?></p>
					</div>
				</div>
				<div class="col-12 col-md-3">
					<div class="copy-content">
						<a href="#" style="text-decoration:none; color:white;"><?php the_field('footer_sslka_text');?></a>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- End Copyright Section -->

	<?php wp_footer(); ?>


</body>
</html>