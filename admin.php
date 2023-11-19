
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
    <style>
        /* Estilos para los botones de editar, modificar y eliminar */
        .boton {
            display: inline-block;
            padding: 8px 16px;
            text-align: center;
            text-decoration: none;
            margin-right: 5px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .boton-agregar {
            display: inline-block;
            padding: 12px 25px;
            text-align: center;
            text-decoration: none;
            margin-right: 5px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            background-color: blue;
            color: white;
            font-size: 13px;
        }

        .modificar {
            background-color: green;
            color: white;
        }

        .eliminar {
            background-color: red;
            color: white;
        }

        /* Cambio de color al pasar el cursor por encima */
     
    </style>

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
						<h1 class="logo"><a href="/">Restaurante Gastronomico Mar y Luna</a></h1>
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

			    <div class="container-navbar">
				<nav class="navbar container">
					<i class="fa-solid fa-bars"></i>
					<ul class="menu">
						<li><a>Seccion de Administrador</a></li>
					</ul>
				</nav>
			</div>
		</header>

    </header>
<?php
$conex = mysqli_connect("localhost", "root", "", "login");
if (mysqli_connect_errno()) {
    die("Error en la conexión a la base de datos: " . mysqli_connect_error());
}
?>

<div id="main-container">
<table>
        <tr>
            <td>ID</td>
            <td>Nombres</td>
            <td>Apellidos</td>
            <td>Usuario</td>
            <td>Clave</td>
            <td>Rol</td>
        </tr>
        <?php
        $sql1="select * from usuario";
        $resul1= mysqli_query($conex,$sql1);
        while ($mostrar=mysqli_fetch_array($resul1)) {
        ?>
        <tr>
            <td><?php echo $mostrar["id"]?></td>
            <td><?php echo $mostrar["nombres"]?></td>
            <td><?php echo $mostrar["apellidos"]?></td>
            <td><?php echo $mostrar["usuario"]?></td>
            <td><?php echo $mostrar["clave"]?></td>
            <td><?php echo $mostrar["id_rol"]?></td>
        </td>
        <td>

                    <a href="editar.php?id=<?php echo $mostrar['id']; ?>" class="boton modificar">Modificar</a>
                    <a href="#" class="boton eliminar" onclick="eliminarRegistro(<?php echo $mostrar['id']; ?>)">Eliminar</a>

        </tr>
        
    <?php
        }
    ?>



</table>
<br>
<center>
<a href="agregar.php" class="boton-agregar">Agregar</a>

</div>
</body>
<script
			src="https://kit.fontawesome.com/81581fb069.js"
			crossorigin="anonymous"
		></script>
<script>
    function eliminarRegistro(id) {
    // Realiza una petición AJAX para eliminar
    if (confirm("¿Estás seguro de eliminar este registro?")) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState === 4 && this.status === 200) {
                alert("Registro eliminado");

                location.reload(); // Recarga la página después de la eliminación
            }
        };
        xhttp.open("GET", "eliminar.php?id=" + id, true);
        xhttp.send();
    }
}

</script>
</html>