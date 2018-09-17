<?php
	// inclusion del head y titulo
	$tituloPagina = 'Inicio | Valhalla Gaming';
	require_once 'partials/head.php';
?>
<!-- inclusion de navbar -->
<?php require_once 'partials/nav-bar.php' ?>

<body>
	<h2> Bienvenidos vikingos del gaming</h2>
		<!-- carrousel de inicio -->
	<div id="carouselPrincipal" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
		<li data-target="#carouselPrincipal" data-slide-to="0" class="active"></li>
		<li data-target="#carouselPrincipal" data-slide-to="1"></li>
		<li data-target="#carouselPrincipal" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
			<img class="d-block w-100" src="images/arena-gamer.jpg">
			<div class="carousel-caption d-none d-md-block">
				<a class="btn btn-dark miBoton " href="#">Inscribete a los torneos</a>
				<p>Fornite, LOL, CS:GO, Fifa, PES, etc</p>
  			</div>
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="images/csgo.png" alt="Second slide">
			<div class="carousel-caption d-none d-md-block">
				<a class="btn btn-dark btn-md miBoton " href="#">Inscribete al torneo de CS:GO</a>
				<p>...</p>
  			</div>
		</div>
			<div class="carousel-item">
			<img class="d-block w-100" src="images/lol-torneo.jpg" alt="Third slide">
			<div class="carousel-caption d-none d-md-block">
				<a class="btn btn-dark btn-lg miBoton " href="#">Inscribite a la copa latinoamericana de LOL</a>
				<p>...</p>
  			</div>
		</div>
	</div>
	<a class="carousel-control-prev" href="#carouselPrincipal" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselPrincipal" role="button" data-slide="next">
		<span class="carousel-control-next-icon"></span>
		<span class="sr-only">Next</span>
	</a>
	</div>
	<!-- Seccion noticias -->
	<h2>Noticias</h2>
	<div class="card-deck">
  	<div class="card">
    	<img class="card-img-top" src="images/noticia1.jpg">
    	<div class="card-body misLetrasRojas">
      <h5 class="card-title">El FC Schalke 04 jugará la final de Madrid tras vencer a Vitality</h5>
      <p class="card-text">El club alemán logra llegar a su primera final desde que entró en League of Legends</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Actualizado hace 2 dias</small>
    </div>
  </div>
  <div class="card">
    	<img class="card-img-top" src="images/star-wars-noticia.jpg" alt="Card image cap">
			<div class="card-body misLetrasRojas">
				<h5 class="card-title">Sigue en directo la presentación de las Nvidia RTX 2080 en Gamescom</h5>
				<p class="card-text">Nvidia presentó hace poco sus nuevas gráficas preparadas para el raytracing </p>
			</div>
    <div class="card-footer">
      <small class="text-muted">Actualizado hace 7 dias</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="images/fortnite-noticia.jpg" alt="Card image cap">
    <div class="card-body misLetrasRojas">
      <h5 class="card-title">El rifle de precisión y nuevos modos de juego llegan a Fortnite 5.21</h5>
      <p class="card-text">Se trata del fusil de precisión pesado, un arma que permite atravesar paredes y que hace muchísimo daño contra enemigos y estructuras. De hecho, hace un daño de 150/157 a rivales y unos 1.050/1.100 a edificios. Además, a Salvar el Mundo llega Thora junto a los desafíos semanales </p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Actualizado hace 12 dias</small>
    </div>
  </div>
</div>


	<!-- inclusion del footer  -->
	<?php  require_once 'partials/footer.php'?>
</body>