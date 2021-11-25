<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Buy Pelis</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/slider.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>

</head>
<body>

	<div class="title-selector">

		<h1><a href="./" class="mr-4">IMDBPLUS</a></h1>

		<nav class="nav nav--menu">

	 		<li><a class="nav__link px-3@xl" href="./">Home</a></li>
	 		<li><a class="nav__link px-3@xl" href="#movies.php">Movies</a></li>
	 		<li><a class="nav__link px-3@xl" href="#series.php">Series</a></li>
	 		<li><a class="nav__link px-3@xl" href="#colections.php">Colections</a></li>

			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#categories.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				    Categories
				</a>

				<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
					<li><a class="dropdown-item" href="#">Action</a></li>
					<li><a class="dropdown-item" href="#">Terror</a></li>

					<!--<li><hr class="dropdown-divider"></li>-->

					<li><a class="dropdown-item" href="#">Fantasy</a></li>
					<li><a class="dropdown-item" href="#">Science</a></li>
					<li><a class="dropdown-item" href="#">Suspense</a></li>
					<li><a class="dropdown-item" href="#">Comedy</a></li>
				</ul>
			</li>

	 		<li><a class="nav__link px-3@xl" href="#kids.php">Kids</a></li>

	 		<!-- <form class="d-flex search-form" method="GET">
		    	<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
		    	<button class="btn btn-outline-secondary" type="submit">Search</button>
		    </form> -->

		</nav>

	</div>


	<div class="start">
		<a class="c-button bt" href="#subscription/subscribe.php">SUBSCRIBE</a>
		<a class="c-button buton" href="#register/register.php">ENTER</a>

		<button class="ml-3 icon--md c-link c-link--text search-icon" type="button" title="Busca en el catálogo..." data-toggle="modal" data-target="#filmin-search" name="search">
			<i class="fas fa-search"></i>
		</button>

	</div>


		<div class="floaiting-cover">
			<a class="portadas" href="#subscription">
				<img src="images/portada.png">
			</a>

			<a href="http://localhost/imdbplus/#suscription">
				<img class="friday" src="images/black-friday.svg">
			</a>

			<i class="oferta">1 año de cine y series por 60 €</i>

			<div class="buton1">
				<button type="button" id="buton2" class="btn">MORE INFORMATION</button>
			</div>

	        <a class="portadas" href="#subscription">
	        	<img src="images/portada2.webp.png">
	        </a>

	        <a class="portadas" href="#subscription">
	        	<video controls>
	        		<source src="images/sospechosas-inesperadas-tl.mp4" type="video/mp4">
	        	</video>
	        </a>

		</div>

		<div class="other-covers">
			<a src="covers/#suscription"><img src="images/corredor/canalnostalgia.webp"></a>
			<a src="covers/#suscription"><img src="images/corredor/decinema.webp"></a>
			<a src="covers/#suscription"><img src="images/corredor/elindividuo.webp"></a>
			<a src="covers/#suscription"><img src="images/corredor/femmes fatales.webp"></a>
			<a src="covers/#suscription"><img src="images/corredor/ficx.webp"></a>
		</div>


		<div class="other-covers-2">
			<h2>Las más vistas</h2>
			<a src="covers/#las-mas-vistas"><img src="covers/"></a>
			<a src="covers/#las-mas-vistas"><img src="covers/"></a>
			<a src="covers/#las-mas-vistas"><img src="covers/"></a>
			<a src="covers/#las-mas-vistas"><img src="covers/"></a>
			<a src="covers/#las-mas-vistas"><img src="covers/"></a>
		</div>


		<div class="other-covers-3">
			<h2>Títulos recomendados<h2>
			<a src="covers/#las-mas-vistas"><img src="covers/"></a>
			<a src="covers/#las-mas-vistas"><img src="covers/"></a>
			<a src="covers/#las-mas-vistas"><img src="covers/"></a>
			<a src="covers/#las-mas-vistas"><img src="covers/"></a>
			<a src="covers/#las-mas-vistas"><img src="covers/"></a>
		</div>


	<footer>
		
	</footer>

	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>


