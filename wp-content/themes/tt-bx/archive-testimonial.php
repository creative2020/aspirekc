<?php get_header(); ?>
<?php get_template_part('section', 'page-header'); ?>
<?php get_template_part('section', 'navbar-secondary'); ?>


<div class="row">
	
	<div class="col-sm-3 post-sidebar pull-right">
        <?php dynamic_sidebar('tt-sidebar-page-sidebar'); ?>
    </div>

		<?php while ( have_posts() ) : the_post(); ?>
		<?php
			$name=get_post_custom_values('testimonial_name');
			$company=get_post_custom_values('testimonial_company');
			?>
		
		<div class="col-sm-9 m0 p0">
		
			<main>
			
				<div class="col-sm-2 post-date mt1">
				    
			        <div class="col-sm-12 post-thumbnail p0">
				        
				        <h2><i class="fa fa-quote-left"></i></h2>
				        
			
			    	</div>
			    	
			    </div><!--/sm2-->
			    
			    
			    
			    
			    <div class="col-sm-10 post-content">
				    <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
			        <?php the_excerpt(); ?>
			        <div class="testimonial-name"><?php echo $name[0]; ?></div>
			        <div class="testimonial-company"><?php echo $company[0];  ?></div>
			    </div>
			
			</main>
			
		</div><!--/col-->
		
		
		<?php endwhile; ?>

</div><!--/row-->


<?php get_footer(); ?>
