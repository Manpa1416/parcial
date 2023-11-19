
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1.0"
		/>
		<title>Restaurate Mar y luna</title>
		<link rel="stylesheet" href="css/style2.css" />
	</head>
	<body>
		<header>
			<div class="container-hero">
				<div class="container hero">
					<div class="customer-support">
						<i class="fa-solid fa-headset"></i>
						<div class="content-customer-support">
							<span class="text">Contactanos</span>
							<span class="number">3223411433</span>
						</div>
					</div>

					<div class="container-logo">
						<i class="fa-solid fa-mug-hot"></i>
						<h1 class="logo"><a href="principal.php">Restaurante Gastronomico Mar y Luna</a></h1>
					</div>

					<div class="container-user">
						<i class="fa-solid fa-user"></i>
					</div>
					<div class="dropdown-menu">
                    <form action="cerrar_sesion.php" method="post">
        <button type="submit" class="boton-cerrar-sesion">Cerrar sesión</button>
    </form>
            </div>
				</div>
			</div>

			<div class="container-navbar">
				<nav class="navbar container">
					<i class="fa-solid fa-bars"></i>
					<ul class="menu">
						<li><a href="#">Inicio</a></li>
						<li><a href="#">Quienes somos?</a></li>
						<li><a href="#">Reservacion</a></li>
						<li><a href="#">Platos</a></li>
						<li><a href="#">Encuentranos</a></li>
					</ul>
				</nav>
			</div>
		</header>
		

        <div class="container-com">
        <img src="./img/galeria/1.jpeg" alt="Image 1">
        <img src="./img/galeria/2.jpeg" alt="Image 2">
        <img src="./img/galeria/3.jpeg" alt="Image 3">
        <img src="./img/galeria/4.jpeg" alt="Image 4">
        <img src="./img/galeria/5.jpeg" alt="Image 5">
        <img src="./img/galeria/6.jpeg" alt="Image 6">
        <img src="./img/galeria/7.jpeg" alt="Image 7">

    </div>
		<script
			src="https://kit.fontawesome.com/81581fb069.js"
			crossorigin="anonymous"
		></script>
	</body>
	<style>

		.contacto{
			margin-bottom: 60px;
		}

		.redes-sociales{
			padding: 1px;
			background-color: #c7a17a;
		}

		.redes-sociales img{
			padding: 9px;
			border-radius: 100%;
			width: 100px;
			transition: .3s ease all;
			position:inherit;		}

		.redes-sociales img:hover{
			transform: scale(1.2);
		}

		.negro {
			color:white
		}

	</style>
        <footer class="redes-sociales">
            <div class="col-auto">
                <a href="https://wa.link/p36co0"><img src="img/iconos/whatsapp1.png" alt="" width="50" height="50"></a>
                <a href="https://www.facebook.com/josemanuel.cobaledarodriguez.1"><img src="img/iconos/facebook1.png" alt="" width="50" height="50"></a>
                <a href="https://www.instagram.com/manpa17/"><img src="img/iconos/instagram.png" alt="" width="50" height="50"></a>
                
            </div>
            <p class="negro">Todos los derechos reservados 2021</p>
        </footer>
</html>