<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<?php dynamic_sidebar('tt-sidebar-post-header'); ?>

<?php get_template_part('section', 'navbar-secondary'); ?>

<main>

<div class="row">
    <div class="col-sm-9 post-content">
        <?php the_content(); ?>
    </div>
    <div class="col-sm-3 post-sidebar">
        <?php dynamic_sidebar('tt-sidebar-post-sidebar'); ?>
    </div>
</div>

</main>

<?php endwhile; ?>

<?php get_footer(); ?>
