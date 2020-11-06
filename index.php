<?php get_header(); ?>
<div class="container content">
    <div class="row">
        <div class="col-12 text-center home-content">
            <?php $user = get_user_by('login','admin');?>
            <?php if ($user->avatar):?>
            <img src="<?php echo $user->avatar;?>" class="home-avatar">
            <?php else:?>
            <img src="<?php bloginfo('template_url'); ?>/images/home-avatar.png" class="home-avatar">
            <?php endif;?>
            <div class="home-name"><?php echo $user->display_name;?></div>
            <div class="home-description"><?php echo $user->description;?></div>
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


<?php get_footer(); ?>