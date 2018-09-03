<?php
	// inclusion del head y titulo
	$tituloPagina = 'Inicio | Valhalla Gaming';
	require_once 'partials/head.php';
?>
<!-- inclusion de navbar -->
<?php require_once 'partials/nav-bar.php' ?>

<body>
	<h1> hola vikingos del gaming</h1>
		
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
		<div class="carousel-item active">
		<img class="d-block w-100" src=".../800x400?auto=yes&bg=777&fg=555&text=First slide" alt="First slide">
		</div>
		<div class="carousel-item">
		<img class="d-block w-100" src=".../800x400?auto=yes&bg=666&fg=444&text=Second slide" alt="Second slide">
		</div>
		<div class="carousel-item">
		<img class="d-block w-100" src=".../800x400?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">
		</div>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
	</div>

	<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse, dolorum suscipit magnam eius soluta quod iste. Deserunt animi labore distinctio, laboriosam tenetur deleniti facere mollitia ea, blanditiis soluta, dolores illo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium ea veritatis laudantium, accusamus quo blanditiis unde doloremque iste voluptas nisi excepturi repellat reiciendis amet. Vitae impedit laborum distinctio at et. Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae earum et consequuntur ut quibusdam aut impedit distinctio, magni qui. Molestiae ipsum ullam laborum recusandae inventore voluptatibus, suscipit quia enim non! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ratione magni necessitatibus debitis corrupti. Repellendus inventore dolor sit quisquam. Veniam voluptas fugit id perferendis consequuntur minima doloribus porro animi quod nisi? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse aspernatur perspiciatis animi pariatur in libero, voluptatem deleniti cupiditate sint qui nostrum atque, doloribus reprehenderit velit nam molestiae. Labore, fugit ipsum. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci ipsum doloremque blanditiis nostrum voluptatem deserunt quidem optio, maxime et in incidunt, consectetur iste accusamus sequi! Repudiandae tenetur quas libero quia. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officiis consequuntur saepe quidem, atque ducimus aperiam est voluptas, sapiente at cupiditate explicabo cum, sint iste maxime facere minima animi harum asperiores.

	<h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus dolores adipisci delectus qui quia, explicabo necessitatibus voluptas numquam est deleniti, nisi fugiat doloribus obcaecati tenetur rerum quasi doloremque. Exercitationem, praesentium. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, qui sequi alias, doloribus deleniti eligendi dolorum aperiam natus laborum amet veritatis facere provident inventore, nihil exercitationem maiores fugiat aliquam asperiores? Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed nobis id reiciendis vitae recusandae, molestias harum magni dignissimos voluptate optio, necessitatibus suscipit facilis omnis? Suscipit quia omnis sequi dolore saepe! Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita dolores autem inventore sapiente totam magni sed. Voluptates quasi consequuntur dolorem adipisci quia, assumenda nostrum officiis culpa cum porro commodi deserunt! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa eligendi omnis consectetur vitae! Voluptatum quas similique, incidunt debitis maiores ad ipsa maxime voluptate aliquid suscipit blanditiis vel mollitia explicabo repudiandae?</h2>
	</p>
	<!-- inclusion del footer  -->
	<?php  require_once 'partials/footer.php'?>
</body>