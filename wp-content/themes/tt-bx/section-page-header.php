<div id="page-title" class="row" style="background-image: url('/wp-content/uploads/2015/07/15159-serpentines-on-the-mountain-top-2880x1800-nature-wallpaper.jpg'); background-position: 50% 50%;background-repeat: no-repeat;background-size: cover;">
	<div class="col-xs-12" >
		<h2>
			<?php
				
				// Get the Current Category
					$curr_cat = get_category( $cat );
					// If the array is returned then get the Category Name
					$cat_name = ( $curr_cat ) ? $curr_cat->cat_name : 'No Category Found!!';
					
					//Returns category name or No Category Found!!
				 
				if (is_home()) {
					echo 'Blog';
				} elseif (is_post_type_archive( 'testimonial' )) {
					echo 'Testimonials';
				} elseif (is_archive()) {
					echo '<span class="pre-archive">Articles on:</span> '.$cat_name;
				} elseif (is_search()) {
					echo 'Search Results';
				} else {
					echo $post->post_title;
				}
				?>
		</h2>
	</div>
</div><!--/row-->
