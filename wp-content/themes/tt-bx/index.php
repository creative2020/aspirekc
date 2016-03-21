<?php get_header(); ?>

<?php get_template_part('section', 'page-header'); ?>

<?php get_template_part('section', 'navbar-secondary'); ?>


<?php while ( have_posts() ) : the_post(); ?>

<main>

<div class="row">
    <div class="col-sm-9 page-content">
        <?php the_content(); ?>
    </div>
    <div class="col-sm-3 page-sidebar">
        <?php dynamic_sidebar('tt-sidebar-page-sidebar'); ?>
    </div>
</div>

</main>

<?php endwhile; ?>

<?php get_footer(); ?>
