<?php get_header(); ?>

<?php get_template_part('section', 'navbar-secondary'); ?>

<?php get_template_part('section', 'page-header'); ?>

<div class="row">
	
	<div class="col-sm-3 post-sidebar pull-right">
        <?php dynamic_sidebar('tt-sidebar-post-sidebar'); ?>
    </div>

<?php while ( have_posts() ) : the_post(); ?>

<div class="col-sm-9 m0 p0">

<main>

	<div class="col-sm-2 post-date mt1">
	    <h3 class="text-centered"><?php the_date('M j'); ?></h3>
        <div class="col-sm-12 post-thumbnail p0">
	    	<?php the_post_thumbnail('post-thumbnail', array( 'class'	=> "img-responsive attachment-post-thumbnail")); ?>

    	</div>
    	<div class="col-sm-12 post-author p0 pb15">
	    	by: <?php the_author_meta( 'display_name' ); ?>
    	</div>
    </div>
    
    
    
    
    <div class="col-sm-10 post-content">
	    <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
    </div>

</main>

</div><!--/row-->

<?php endwhile; ?>

<?php get_footer(); ?>
