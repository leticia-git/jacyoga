<!DOCTYPE html>
<html lang="pt-br">

<head>


	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IT=edge,chrome=IE8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="index/follow" />
	<meta name="googlebot" content="index/follow" />
	<meta name="msapplication-navbutton-color" content="#fff" />
	<meta name="apple-mobile-web-app-status-bar-style" content="#fff" />

	<meta property="og:type" content="website" />
	<meta property="og:locale" content="pt_BR" />
	<meta name="twitter:card" content="summary" />

	<!-- Cor do navegador mobile -->
	<meta name="theme-color" content="#03885c" />
	<meta name="msapplication-navbutton-color" content="#03885c" />
	<meta name="apple-mobile-web-app-status-bar-style" content="#03885c" />


	<!-- favicon -->
	<!--[if IE]><link rel="shortcut icon" href="assets/dist/img/favicon/favicon.ico"><![endif]-->
	<link rel="shortcut icon"
		href="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/images/favicon/favicon.png" />
	<link rel="apple-touch-icon"
		href="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/images/favicon/apple-touch-icon.png" />


	<!-- URL FINAL -->
	<!-- Colocar a URL final aqui -->
	<link rel="canonical" href=" " />

	<!-- Título -->
	<title>Jacyoga</title>
	<meta itemprop="name" content="Jacyoga">
	<meta property="og:title" content="Jacyoga" />
	<meta property="og:site_name" content="Jacyoga" />
	<meta name="twitter:title" content="Jacyoga" />

	<!-- Palavras chave -->
	<meta name="keywords" content="Keywords" />

	<!-- Descrição do site -->
	<meta name="description" content="Descrição" />
	<meta name="msapplication-tooltip" content="Descrição">
	<meta itemprop="description" content="Descrição">
	<meta property="og:description" content="Descrição" />
	<meta name="twitter:description" content="Descrição" />

	<!-- URL da Imagem -->
	<meta itemprop="image" content="">
	<meta property="og:image" content="" />
	<meta name="twitter:image" content="" />

	<!-- ✅ Load slick CSS ✅ -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"
		integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- ✅ Load slick theme CSS ✅ -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
		integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- Fontes -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Roboto:wght@300;500;900&display=swap"
		rel="stylesheet">
	<!-- Ícones: https://material.io/resources/icons/?style=baseline -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


	<?php wp_head(); ?>
</head>

<body>
	<header class="dg-header">
		<div class="dg-grid">
			<div class="logo">
				<a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/images/Geral/Logo.png"
						alt=""></a>
			</div>
		</div>

  <nav>
      <label for="drop" class="toggle"><span class="navicon"></span></label>
      <input type="checkbox" id="drop"/>
      <ul class="menu-nav">
        <li><a class="nav-link active" aria-current="page" href="https://jacyoga.com">Início</a></li>
          <li> <a class="nav-link" href="https://jacyoga.com/sobre-mim/">Sobre Mim</a></li>
          <li> <a class="nav-link" href="https://jacyoga.com/sobre-yoga/">Sobre Yoga</a></li>
          <li> <a class="nav-link" href="https://jacyoga.com/sobre-o-metodo/">Sobre o Método</a></li>
          <li><a class="nav-link" href="https://jacyoga.com/o-estudio/">O Estúdio</a></li>
          <li><a class="nav-link" href="https://jacyoga.com/blog/">Blog</a></li>
          <li><a class="nav-link" href="https://jacyoga.com/contato/">Contato</a></li>
          <li><a class="nav-link" href="https://jacyoga.com/agende-sua-aula/">Agende sua Aula</a></li>
      </ul>
      </nav>

		<div class="carosel">
			<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
				<div class="carousel-indicators">
					<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
						aria-current="true" aria-label="Slide 1"></button>
					<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
						aria-label="Slide 2"></button>
					<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
						aria-label="Slide 3"></button>
				</div>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/images/Geral/banner-tres.png"
							class="d-block " alt="...">
						<div class="carousel-caption  d-md-block">
							<div class="texto">
								<div class="titulo-banner">
									<p>Agende sua Aula</p>
								</div>
								<div class="sub">
									Entre em contato com a </br> professora e agende sua aula</br> experimental.
								</div>
								<div class="botao">
									<a href="https://jacyoga.com/agende-sua-aula/">Agende sua Aula</a>
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/images/Geral/banner-dois.png"
							class="d-block " alt="...">
						<div class="carousel-caption  d-md-block">
							<div class="texto">
								<div class="titulo-banner">
									<p>O Estúdio</p>
								</div>
								<div class="sub">
									O Estúdio tem uma excelente localização e um ambiente acolhedor.
								</div>
								<div class="botao">
									<a href="https://jacyoga.com/o-estudio/">Saiba Mais</a>
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/images/Geral/banner-um.png"
							class="d-block " alt="...">
						<div class="carousel-caption  d-md-block">
							<div class="texto">
								<div class="titulo-banner">
									<p>O Método</p>
								</div>
								<div class="sub">
									É baseado nas escolas</br>
									Hatha Yoga e Vinyasa Yoga.
								</div>
								<div class="botao">
									<a href="https://jacyoga.com/sobre-o-metodo/">Saiba Mais</a>
								</div>
							</div>
						</div>
					</div>
					<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
						data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
						data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</button>
				</div>
			</div>

		</div>
	</header>