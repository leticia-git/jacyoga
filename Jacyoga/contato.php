<?php
/*
Template Name: Contato
*/
?>
<?php get_header(); ?>

<div class="dg-grid">
    <h3>Entre em contato e agende sua aula</h3>
    <div class="contatos">
    <div class="formulario">
        <p>ENVIE SUA MENSAGEM</p>
        <?php echo do_shortcode('[contact-form-7 id="3330" title="Formulário de contato 1"]'); ?>
    </div>
    <div class="contato">
        <div class="duvidas">
            <p>DÚVIDAS ENTRE EM CONTATO</p>
        </div>
        <div class="local">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/images/Geral/locallizacao.png" alt="">
            <p>Av. Paes de Barros, 436 - CambuciSão Paulo - SP, 03114-000</p>
        </div>
        <div class="email">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/images/Geral/email-contato.png" alt="">
            <p>jacilene.II@gmail.com</p>
        </div>
        <div class="tel">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/images/Geral/telefone.png" alt="">
            <p>(11) 98387-0091</p>
        </div>
        <div class="mapa-contato">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.247168307256!2d-46.6004612!3d-23.5595648!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5949264b53b5%3A0x496fc8ae993f108c!2sAv.%20Paes%20de%20Barros%2C%20436%20-%20Cambuci%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2003114-000!5e0!3m2!1spt-BR!2sbr!4v1653248176982!5m2!1spt-BR!2sbr" width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    </div>

</div>

<?php get_footer(); ?>