<?php
/*
Template Name: Sobre Yoga
*/
?>


<?php get_header(); ?>

<div class="dg-grid">
    <div class="conteudo-yoga">
    <div class="sobre-yoga-img">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/images/Geral/sobre-yoga.png" alt="">
    </div>
        <h1>
            <?php the_title(); ?>
        </h1>
        <?php the_content(); ?>
    </div>
</div>

<?php get_footer(); ?>