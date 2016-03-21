<?php get_header(); ?>

<?php get_template_part('section', 'page-header'); ?>

<?php get_template_part('section', 'navbar-secondary'); ?>


<div class="row">
	
	<div class="col-sm-3 post-sidebar pull-right hidden-xs">
        <?php dynamic_sidebar('tt-sidebar-post-sidebar'); ?>
    </div>

<?php while ( have_posts() ) : the_post(); ?>

	<div class="col-xs-12 col-sm-9 m0 p0">
	
		<main>
		
			<div class="col-xs-12 col-sm-2 post-date mt1">
			    <h3 class="text-centered"><?php the_date('M j'); ?></h3>
		        <div class="col-xs-12 col-sm-12 post-thumbnail p0">
			        
			        <?php
				        $post_imgtn = get_the_post_thumbnail(); 
				        $post_img = catch_that_image();
				        //var_dump($post_img);
				        //var_dump($post_imgtn);
				    ?>
			        
			        <?php if ( has_post_thumbnail() == FALSE ) {
				        echo '<img class="img-responsive" src="'.catch_that_image().'">';
			        } else {
				        the_post_thumbnail('thumbnail', array( 'class'	=> "img-responsive attachment-post-thumbnail"));
			        }
			        ?>
			        
		
		    	</div>
		    	<div class="col-xs-12 col-sm-12 post-author p0 pb15">
			    	by: <?php the_author_meta( 'display_name' ); ?>
		    	</div>
		    </div><!--/sm2-->
		    
		    
		    
		    
		    <div class="col-xs-12 col-sm-10 post-content">
			    <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
		        <?php the_excerpt(); ?>
		    </div>
		
		</main>
		
	</div><!--col-->
	
<?php endwhile; ?>

</div><!--/row-->

<?php get_footer(); ?>
