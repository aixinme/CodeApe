<?php get_header();?>
<div class="container">
    <div class="row page-title">
        <div class="col-12">
            <h2><?php single_tag_title();?></h2>
        </div>
    </div>
</div>
</div>
<div class="container-fluid bg-white">
    <div class="container">
        <div class="row bg-white pt-5 pb-5">
            <div class="col-8 offset-2">
                <div class="content">
                    <h3 class="mb-4">Projects</h3>
                    <?php
                        $args=array(
                            'tag' => single_tag_title('',false),
                            'cat' => get_cat_ID('projects'),
                            'posts_per_page' => 10,
                        );
                        query_posts($args);if(have_posts()) : while (have_posts()) : the_post(); ?>
                        <div class="project bg-dark">
                            <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                                <img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()),'large')[0]; ?>">
                                <div class="project-title"><?php the_title(); ?></div>
                            </a>
                            <div class="project-tags"><?php the_tags('', ' / ', ''); ?></div>
                        </div>
                    <?php  endwhile; endif; wp_reset_query();?>

                    <h3>Posts</h3>
                    <?php
                    $args=array(
                        'tag' => single_tag_title('',false),
                        'cat' => get_cat_ID('blog'),
                        'posts_per_page' => 10,
                    );
                    query_posts($args);if(have_posts()) : while (have_posts()) : the_post(); ?>
                        <div class="tag-posts">
                            <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                               <div class="tag-post-title d-inline-block text-dark"><?php the_title(); ?></div>
                                <span class="float-right text-muted"><?php the_date('Y-m-d H:i'); ?></span>
                            </a>
                            <div class="tag-post-tags mt-2"><?php the_tags('', ' / ', ''); ?></div>
                        </div>
                    <?php  endwhile; endif; wp_reset_query();?>
                </div>
            </div>
        </div>
    </div>

    <?php get_footer(); ?>
