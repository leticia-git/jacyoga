<?php
/*
Template Name: Blog
*/
?>
<?php get_header(); ?>

<div class="dg-grid">
    <div class="row">
        <div>
            <div class="posts">
                <?php
                $newsArgs = array(
                    'post_type' => 'post',
                    'posts_per_page' => 22,
                );
                $newsLoop = new WP_Query($newsArgs);
                while ($newsLoop->have_posts()) : $newsLoop->the_post();
                ?>
                    <div class="post col-md-4">
                        <div class="dg-img-badge">
                            <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url() ?>" alt=""></a>
                        </div>
                        <div class="dg-titulo-img">
                            <a href="<?php the_permalink(); ?>">
                                <h4><?php the_title(); ?></h4>
                            </a>
                        </div>
                        <div class="dg-text-img">
                            <?php the_excerpt(); ?>
                        </div>
                        <div class="dg-quero">
                            <a href="<?php the_permalink(); ?>">Saiba Mais</a>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_query(); ?>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>