<?php get_header(); ?>
<div class="container-fluid bg-dark home">
<img src="<?php bloginfo('template_url'); ?>/images/home-bg.jpg" class="img-fluid home-bg">
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand logo" href="<?php bloginfo('url')?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" class="img-fluid">
        <span class="text-white d-inline-block"><?php bloginfo('name')?></span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php bloginfo('template_url');?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php bloginfo('template_url');?>">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php bloginfo('template_url');?>">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php bloginfo('template_url');?>">About</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="row">
        <div class="col-12 text-center home-content">
            <img src="<?php bloginfo('template_url'); ?>/images/home-avatar.png" class="home-avatar">
            <div class="home-name">Name</div>
            <div class="home-description">A ape that can write code</div>
            <div class="home-social">
                <a href=""><img src="<?php bloginfo('template_url'); ?>/images/icon/github.png" target="_blank"></a>
                <a href=""><img src="<?php bloginfo('template_url'); ?>/images/icon/twitter.png" target="_blank"></a>
                <a href=""><img src="<?php bloginfo('template_url'); ?>/images/icon/medium.png" target="_blank"></a>
                <a href=""><img src="<?php bloginfo('template_url'); ?>/images/icon/linkedin.png" target="_blank"></a>
                <a href=""><img src="<?php bloginfo('template_url'); ?>/images/icon/rss.png" target="_blank"></a>
            </div>
            <div class="home-skills">
            <img src="<?php bloginfo('template_url'); ?>/images/icon/android.png">
            <img src="<?php bloginfo('template_url'); ?>/images/icon/h5.png">
            <img src="<?php bloginfo('template_url'); ?>/images/icon/kotlin.png">
            <img src="<?php bloginfo('template_url'); ?>/images/icon/java.png">
            <img src="<?php bloginfo('template_url'); ?>/images/icon/spring.png">
            <img src="<?php bloginfo('template_url'); ?>/images/icon/react.png">
            </div>
        </div>
    </div>
</div>

</div>
<?php get_footer(); ?>