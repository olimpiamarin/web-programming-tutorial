<header>
    <div>
        <a id="logo" href="" title="FastTrackIT">
            <img src="<?php echo get_template_directory_uri()?>/img/logo.png" alt="FastTrackIT" title="FastTrackIT">
        </a>
        <h1><?php bloginfo( 'name' ); ?></h1>
    </div>
</header>

<div id="top-menu">
    <div>

        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>
       <!-- <button id="secondary-toggle" class="genericon genericon-menu">Widgets</button>


        <ul>
            <li><a href="index.php" title="welcome home">HOME</a></li>
            <li><a href="https://ro.linkedin.com/in/olimpia-marin-7172a176" title="my personal projects" target="_blank">Projects</a></li>
            <li><a href="https://ro.linkedin.com/in/olimpia-marin-7172a176" title="about me" target="_blank">About</a></li>
            <li><a href="https://ro.linkedin.com/in/olimpia-marin-7172a176" title="contact me" target="_blank">Contact</a></li>
            <li><a href="agenda.php">Agenda</a></li>
        </ul>
        -->
    </div>
</div>