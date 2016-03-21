<?php 
	
/**
 * Template Name: Full Width Page
 */
get_header(); 
?>
<?php get_template_part('section', 'page-header'); ?>
<?php get_template_part('section', 'navbar-secondary'); ?>

<?php while ( have_posts() ) : the_post(); ?>



<main>

<div class="row">
    <div class="col-sm-12 page-content">
        <?php the_content(); ?>
    </div>
    
</div>

</main>

<?php endwhile; ?>

<?php get_footer(); ?>
