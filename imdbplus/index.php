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

		<h1 class="logo"><a href="./" class="mr-4">IMDBPLUS</a></h1>

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
		<a class="c-button bt" href="subscription/subscribe.php">SUBSCRIBE</a>
		<a class="c-button buton" href="#register/register.php">ENTER</a>
	</div>


		<div class="floating-cover">
			<div class="mySlider" href="#subscription">
				<img src="images/portada.png">
			</div>

	        <div class="mySlider" href="#subscription">
	        	<img src="images/portada2.webp.png">
	        </div>

	        <div class="mySlider" href="#subscription">
	        	<video class="video" controls id="video">
	        		<source src="images/sospechosas-inesperadas-tl.mp4" type="video/mp4">
	        	</video>
	        </div>

	        <div class="directions">
	        	<a href="" class="back" onclick="backSlide(-1)">&#10094</a>
	        	<a href="" class="next" onclick="goSlide(1)">&#10095</a>
	        </div>

	        <div class="bars">
	        	<span class="bar active" onclick="positionSlide(1)"></span>
	        	<span class="bar" onclick="positionSlide(2)"></span>
	        	<span class="bar" onclick="positionSlide(3)"></span>
	        </div>

		</div>


		<div class="other-covers">
			<a src="covers/#suscription"><img src="images/corredor/canalnostalgia.webp"></a>
			<a src="covers/#suscription"><img src="images/corredor/decinema.webp"></a>
			<a src="covers/#suscription"><img src="images/corredor/elindividuo.webp"></a>
			<a src="covers/#suscription"><img src="images/corredor/femmes fatales.webp"></a>
			<a src="covers/#suscription"><img src="images/corredor/ficx.webp"></a>
		</div>


		<div class="other-covers-2">
			<h2 class="mUp">Las más vistas</h2>
			<a src="covers/#las-mas-vistas"><img src="images/corredor/canalnostalgia.webp"></a>
			<a src="covers/#las-mas-vistas"><img src="images/corredor/decinema.webp"></a>
			<a src="covers/#las-mas-vistas"><img src="images/corredor/elindividuo.webp"></a>
			<a src="covers/#las-mas-vistas"><img src="images/corredor/femmes fatales.webp"></a>
			<a src="covers/#las-mas-vistas"><img src="images/corredor/ficx.webp"></a>
		</div>


		<div class="other-covers-3">
			<h2 class="mUp">Títulos recomendados<h2>
			<a src="covers/#las-mas-vistas"><img src="images/corredor/canalnostalgia.webp"></a>
			<a src="covers/#las-mas-vistas"><img src="images/corredor/decinema.webp"></a>
			<a src="covers/#las-mas-vistas"><img src="images/corredor/elindividuo.webp"></a>
			<a src="covers/#las-mas-vistas"><img src="images/corredor/femmes fatales.webp"></a>
			<a src="covers/#las-mas-vistas"><img src="images/corredor/ficx.webp"></a>
		</div>


	<footer>
		
	</footer>

	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>


