<?php get_header(); ?>
<div class="dg-grid">
<div class="dg-foto">
    <div class="dg-img-prod">
     <img src="<?php the_field('img'); ?>" alt="">
    </div>
</div>
<div class="dg-texto-prod">
    <div class="dg-titulo-prod">
        <h1>
            <?php the_title(); ?>
        </h1>
    </div>
    <div class="dg-content">
        <?php the_content(); ?>
    </div>
</div>
</div>

<?php get_footer(); ?>