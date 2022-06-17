<?php
/*
Template Name: Home
*/
?>


<?php get_header(); ?>

<main class="dg-main">
	<div class="dg-grid">
		<div class="blog-post">
			<div class="post-um">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/images/Geral/base.png" alt="">
				<h4 class="titulo-post">A BASE DO MÉTODO JACYOGA</h4>
				<p class="texto-post">O método está baseado nas principais escolas do Yoga, que são Hatha Yoga e Vinyasa Yoga.</p>
				<div class="pt-botao">
					<a class="botao-post" target="_blank" href="https://jacyoga.com/a-base-do-metodo-jacyoga/">Saiba mais</a>
				</div>
			</div>
			<div class="post-dois">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/images/Geral/asanas.png" alt="">
				<h4 class="titulo-post">CARACTERÍSTICAS DOS ÁSANAS</h4>
				<p class="texto-post">Os ásanas são posturas psicofísicas que buscam trabalhar a estabilidade física, mental e energética.</p>
				<div class="pt-botao">
					<a class="botao-post" target="_blank" href="https://jacyoga.com/caracteristicas-dos-asanas/">Saiba mais</a>
				</div>
			</div>
			<div class="post-tres">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/images/Geral/sutras.png" alt="">
				<h4 class="titulo-post">YOGA SUTRAS- A RAIZ DO YOGA</h4>
				<p class="texto-post">O Yoga clássico de Patanjali possui mais de 2 mil anos e é considerado um Yoga intelectual.</p>
				<div class="pt-botao">
					<a class="botao-post" target="_blank" href="https://jacyoga.com/yoga-sutras-a-raiz-do-yoga/">Saiba mais</a>
				</div>
			</div>
		</div>
	</div>
	<div class="jacy">
		<div class="dg-grid">
			<div class="img-jacy">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/images/Geral/jacy.png" alt="">
			</div>
			<div class="jacy-texto">
				<p>No mundo atual estamos vivendo uma era de ilusão, onde o olhar está direcionando a maioria das vezes
					para fora e isso nos distancia cada vez mais do nosso verdadeiro eu, precisamos parar e olhar para dentro.
					Só assim teremos mais consciência do que realmente necessitamos e compreensão para entender que só teremos
					tempo para o que realmente importa se vivermos uma vida baseada em necessidade e não em desejo.
				</p>
				<p>
					E para isso precisamos direcionar a consciência para o verbo ”ser”, pois a maioria das vezes estamos
					presos no verbo ” ter”, esquecendo de quem realmente somos.
				</p>
				<p>
					Por isso, a prática do Yoga é transformadora, ela nos guia para um caminho de aquietamento da mente e nos
					aproxima da nossa verdadeira essência que é onde encontramos a nossa verdade (dharma). Com a prática constante
					o sentido da busca muda e o olhar não está mais para fora e sim para dentro, buscando assim um autoconhecimento
					e a libertação de tudo que nos apequena.
				</p>
				<p>
					“Quando encontramos o Yoga entendemos que somos os artistas responsáveis pela Arte de Viver em Paz. ” Jacy
				</p>
			</div>
		</div>
	</div>
	<div class="todos" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/images/Geral/todos.png');background-repeat: no-repeat;background-size: cover;">
		<div class="dg-grid">
			<div class="titulo-todos">
				<h4>YOGA PARA TODOS</h4>
			</div>
			<div class="texto-todos">
				<p>Yoga não tem idade, não têm sexo e nenhuma restrição,</br>
					qualquer pessoa pode praticar Yoga. Suas ferramentas</br>
					são adaptadas para cada praticante.</p>
			</div>
			<div class="botao-todos">
				<a href="">Saiba mais</a>
			</div>
		</div>
	</div>
	<div class="dg-grid">
		<div class="beneficios">
			<div class="titulo">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/images/Geral/top.png" alt="">
			</div>
			<div class="circulos">
				<div class="topicos">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/images/Geral/auto.png" alt="">
					<p>AUTOCONHECIMENTO</p>
				</div>
				<div class="topicos">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/images/Geral/paz.png" alt="">
					<p>PAZ MENTAL</p>
				</div>
				<div class="topicos">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/images/Geral/equilibrio.png" alt="">
					<p>EQUILÍBRIO</p>
				</div>
				<div class="topicos">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/images/Geral/corpo.png" alt="">
					<p>CORPO FUNCIONAL</p>
				</div>
				<div class="topicos">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/images/Geral/estresse.png" alt="">
					<p>REDUÇÃO DE ESTRESSE</p>
				</div>
			</div>
		</div>
		<div class="depoimentos">
		<?php echo do_shortcode( '[TEST_B id=3382]' ) ?>		
		</div>
	</div>

</main>

<?php get_footer(); ?>