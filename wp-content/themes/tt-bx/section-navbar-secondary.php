<div class="row navbar navbar-secondary">
<div class="col-xs-12">
<nav class="navbar navbar-default">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed"
            data-toggle="collapse" data-target="#navbar-secondary"
            aria-expanded="false">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <div class="collapse navbar-collapse" id="navbar-secondary">
        <?php wp_nav_menu([
            'theme_location' => 'main',
            'container' => false,
            'menu_class' => 'nav navbar-nav',
			'depth' => 2,
            'walker' => new wp_bootstrap_navwalker_secondary(),
        ]); ?>
    </div>
</nav>
</div>
</div>
