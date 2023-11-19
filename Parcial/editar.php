<?php
$conex = mysqli_connect("localhost", "root", "", "login");
if (mysqli_connect_errno()) {
    die("Error en la conexión a la base de datos: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM usuario WHERE id = $id";
    $result = mysqli_query($conex, $sql);
    $row = mysqli_fetch_assoc($result);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['actualizar'])) {
    $id = $_POST['id'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];
    $rol = $_POST['rol'];

    $sql = "UPDATE usuario SET nombres='$nombres', apellidos='$apellidos', usuario='$usuario', clave='$clave', id_rol='$rol' WHERE id=$id";

    if (mysqli_query($conex, $sql)) {
        echo '<script>
                alert("Actualizado correctamente");
                window.location.href = "admin.php";
              </script>';
        exit();
    } else {
        echo "Error al actualizar el registro: " . mysqli_error($conex);
    }
}


?>
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
                    <form  action="cerrar_sesion.php" method="post">
                        <button type="submit" class="boton-cerrar-sesion">Cerrar sesión</button>
                    </form>
                    </div>
			    </div>
			</div>

			<div class="container-navbar">
				<nav class="navbar container">
					<i class="fa-solid fa-bars"></i>
					<ul class="menu">
						<li><a>Modificar Informacion</a></li>
					</ul>
				</nav>
			</div>
		</header>

    </header>
<style>
       
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        h2 {
            margin-bottom: 20px;
        }

        .form {
            background-color: rgb(211, 211, 211);
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px ;
            margin: 50px auto;
            max-width: 40%; 
            overflow-x: auto;
         
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        .form input[type="submit"],
        .form input[type="button"] {
            width: calc(100% - 22px);
            padding: 12px;
            margin-bottom: 15px;
            border: none;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 15px;
            transition: background-color 0.3s ease;
            cursor: pointer;
            display: inline-block;
            text-align: center;
            text-decoration: none;
            vertical-align: middle;
            white-space: nowrap;
            user-select: none;
            background-color: #007bff;
            color: #fff;
        }

        .form input[type="submit"]:hover,
        .form input[type="button"]:hover {
            background-color: #0056b3;
        }

        .form input[type="button"] {
            background-color: #ccc;
            color: #333;
            margin-right: 10px;
        }

        .form input[type="button"]:hover {
            background-color: #bbb;
        }

        /* Estilos más modernos */
        .form input[type="submit"],
        .form input[type="button"] {
            padding: 14px 22px;
            font-size: 16px;
            transition: all 0.3s ease;
            border: none;
            border-radius: 6px;
            outline: none;
        }

        .form input[type="submit"] {
            background-color: #4caf50;
            color: white;
        }

        .form input[type="button"] {
            background-color: #f44336;
            color: white;
        }

        .form input[type="submit"]:hover,
        .form input[type="button"]:hover {
            filter: brightness(90%);
        }

        p{
            font-size: 20px;
            margin-bottom: 15px;
        }
    </style>
<body>

    <form class="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <p>Nombres:<input type="text" name="nombres" value="<?php echo $row['nombres']; ?>"><br>
        Apellidos: <input type="text" name="apellidos" value="<?php echo $row['apellidos']; ?>"><br>
        Usuario: <input type="text" name="usuario" value="<?php echo $row['usuario']; ?>"><br>
        Clave: <input type="text" name="clave" value="<?php echo $row['clave']; ?>"><br>
        Rol: <input type="text" name="rol" value="<?php echo $row['id_rol']; ?>"><br>
        <input type="submit" name="actualizar" value="Actualizar">
        <input type="button" value="Retroceder" onclick="goBack()">
    </form>
</body>
<script
			src="https://kit.fontawesome.com/81581fb069.js"
			crossorigin="anonymous"
		></script>
        <script>
        function goBack() {
            window.history.back();
        }
    </script>
</html>
