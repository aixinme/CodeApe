<?php get_header();?>
<div class="container">
    <div class="row page-title">
        <div class="col-12">
            <h2><?php the_title();?></h2>
        </div>
    </div>
</div>
</div>
<div class="container-fluid bg-white">
<div class="container">
    <div class="row bg-white pt-5 pb-5">
        <div class="col-lg-8 offset-lg-2 col-md-12">
            <span class="text-muted"><?php echo get_the_time('Y-m-d H:i'); ?></span>
            <div class="tag-post-tags mt-2"><?php the_tags('', ' / ', ''); ?></div>
            <div class="content mt-3">
                <?php if(have_posts()):while(have_posts()):the_post();
                    the_content();
                endwhile;endif; ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>