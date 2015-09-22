<?php get_header(); ?>

<main>

<div id="home-top-container" class="row">

    <div class="col-sm-4 widget">
        <?php dynamic_sidebar('tt-sidebar-home-top-left'); ?>
    </div>

    <div class="col-sm-4 widget center">
        <?php dynamic_sidebar('tt-sidebar-home-top-center'); ?>
    </div>

    <div class="col-sm-4 widget">
        <?php dynamic_sidebar('tt-sidebar-home-top-right'); ?>
    </div>

</div>

<?php dynamic_sidebar('tt-sidebar-home-content'); ?>

</main>

<?php get_footer(); ?>
