<?php get_header()?>
<?php
global $wp_query;
$cat_ID = get_query_var('cat');
$category = get_category($cat_ID);
?>
<div class="container">
    <div class="row page-title">
        <div class="col-12">
            <h2><?php echo $category->name; ?></h2>
        </div>
    </div>
</div>
</div>
<div class="container-fluid bg-white">
    <div class="container">
        <div class="row pt-5 pb-5">
            <div class="col-lg-8 offset-lg-2 col-md-12">
                <?php if ($category->slug == 'blog'):?>
                    <div class="archives">
                        <?php
                        $previous_year = $year = 0;
                        $previous_month = $month = 0;
                        $ul_open = false;
                        $myposts = get_posts('numberposts=-1&orderby=post_date&order=DESC&category='.$cat_ID);
                        foreach($myposts as $post) :
                            setup_postdata($post);
                            $year = mysql2date('Y', $post->post_date);
                            $month = mysql2date('n', $post->post_date);
                            $day = mysql2date('j', $post->post_date);
                            if($year != $previous_year || $month != $previous_month) :
                                if($ul_open == true) :
                                    echo '</ul>';
                                endif;
                                echo '<h4 class="m-title">'; echo the_time('Y-m'); echo '</h4>';
                                echo '<ul class="archives-monthlisting">';
                                $ul_open = true;
                            endif;
                            $previous_year = $year; $previous_month = $month;
                            ?>
                            <li>
                                <a href="<?php the_permalink(); ?>"><span><?php the_time('Y-m-j'); ?></span>
                                    <div class="atitle"><?php the_title(); ?></div></a>
                            </li>
                        <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif;?>
                <?php
                if ($category->slug == 'projects'):
                    $args=array(
                        'cat' => $cat_ID,
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
                <?php  endwhile; endif; wp_reset_query();endif;?>
                <?php
                if (!in_array($category->slug,['blog','projects'])):
                $args=array(
                    'cat' => $cat_ID,
                    'posts_per_page' => 10,
                );
                query_posts($args);if(have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="tag-posts">
                        <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                            <div class="tag-post-title d-inline-block text-dark"><?php the_title(); ?></div>
                            <span class="float-right text-muted"><?php echo get_the_time('Y-m-d H:i'); ?></span>
                        </a>
                        <div class="tag-post-tags mt-2"><?php the_tags('', ' / ', ''); ?></div>
                    </div>
                <?php  endwhile; endif; wp_reset_query();endif;?>
            </div>
        </div>
    </div>


<?php get_footer();?>
