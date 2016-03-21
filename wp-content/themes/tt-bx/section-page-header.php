<div class="row" style="background-image: url('/wp-content/uploads/2015/07/15159-serpentines-on-the-mountain-top-2880x1800-nature-wallpaper.jpg'); background-position: 50% 50%;background-repeat: no-repeat;background-size: cover;">
	<div class="col-xs-12" style="line-height: 3; font-family: 'Oswald', sans-serif; font-size: 300%; color: white;">
	<?php 
		if (is_home()) {
			echo 'Blog';
		} elseif (is_post_type_archive( 'testimonial' )) {
			echo 'Testimonials';
		} else {
			echo $post->post_title;
		}
		?>
	</div>
</div><!--/row-->
