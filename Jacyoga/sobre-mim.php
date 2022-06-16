<?php
/*
Template Name: Sobre mim
*/
?>

<?php get_header(); ?>

<div class="dg-grid">
    <div class="conteudo">
        <div class="sobre-titulo">
        <h1>
            <?php the_title(); ?>
        </h1>
        </div>

        <div class="content">
            <div class="imagem">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/src/images/Geral/sobre-mim.png" alt="">
            </div>
            <div class="texto">
                <p>
                    <?php the_content(); ?>
                </p>
            </div>
        </div>
        <h3>“Componha-se em silêncio, chame a sua atenção para dentro e dedique sua mente ao ser. A sabedoria que você precisa está dentro. ” Bhagavad Gita</h3>
        <div class="botao-conheca">
                    <a href="#">Conheça o método</a>
                </div>
    </div>
</div>

<?php get_footer(); ?>