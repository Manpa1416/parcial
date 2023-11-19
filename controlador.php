<?php
   
include("conexion.php");
$conex = mysqli_connect("localhost", "root", "", "login");

/* ROLES */

if(isset($_SESSION["rol"])){
    switch ($_SESSION["rol"]) {
        case '1':
            header("location: admin.php");
            break;
        case '2':
            header('location: principal.php');
            break;
        
        default:
            echo '<div class="alert alert-warning">No tienes un rol asignado</div>';
            break;
    }
}

/* INICIAR SESION */

if (!empty($_POST["btningresar"])){
    if (empty($_POST["usuario"])and empty($_POST["password"])) {
        echo '<div class="alert alert-danger">Los Campos Estan Vacios</div>';
    } else {
        $usuario=$_POST["usuario"];
        $clave=$_POST["password"];
        $sql=$conex->query(" select * from usuario where usuario='$usuario' and clave='$clave' "); 

        if ($datos=$sql->fetch_object() ) {
                $rol = $datos->id_rol;
                $_SESSION["rol"] = $rol;
    
                switch ($_SESSION["rol"]) {
                    case '1':
                        header("location: admin.php");
                        break;
                    case '2':
                        header('location: principal.php');
                        break;
                    
                    default:
                    echo '<div class="alert alert-warning">No tienes un rol asignado</div>';
                        
                }

        } else {
            echo '<div class="alert alert-danger">Usuario o Contraseña incorrectos</div>';
        }
        
    }
    
}
/* REGISTRARSE */
if (!empty($_POST["btnregistro"])){
    if (empty($_POST["nombres"])and empty($_POST["apellidos"]) and empty($_POST["usuario"]) and empty($_POST["password"])) {
        echo '<div class="alert alert-danger">Los Campos Estan Vacios</div>';
    } else {
        $nombres=trim($_POST["nombres"]);
        $apellidos=trim($_POST["apellidos"]);
        $usuario=trim($_POST["usuario"]);
        $clave=trim($_POST["password"]);
        $consulta= "INSERT INTO usuario(nombres, apellidos, usuario, clave, id_rol) VALUES ('$nombres','$apellidos','$usuario','$clave','2')";
        $resultado= mysqli_query($conex,$consulta);

        if ($resultado) {
            // Registro exitoso, muestra la alerta y redirige a login.php después de 3 segundos
            echo '<script>alert("Te has registrado exitosamente"); setTimeout(function(){ window.location.href = "login.php"; }, 1);</script>';
        }
        
    }
    
}
/* AGREGAR */
if (!empty($_POST["btnregistro2"])){
    if (empty($_POST["nombres"])and empty($_POST["apellidos"]) and empty($_POST["usuario"]) and empty($_POST["password"])) {
        echo '<div class="alert alert-danger">Los Campos Estan Vacios</div>';
    } else {
        $nombres=trim($_POST["nombres"]);
        $apellidos=trim($_POST["apellidos"]);
        $usuario=trim($_POST["usuario"]);
        $clave=trim($_POST["password"]);
        $rol=trim($_POST["rol"]);
        $consulta= "INSERT INTO usuario(nombres, apellidos, usuario, clave, id_rol) VALUES ('$nombres','$apellidos','$usuario','$clave','$rol')";
        $resultado= mysqli_query($conex,$consulta);

        if ($resultado) {
            echo '<script>alert("Registrado exitosamente"); setTimeout(function(){ window.location.href = "admin.php"; }, 1);</script>';
        }
        
    }
    
}



/* ELIMINAR */

// Verifica si se proporcionó un ID válido para eliminar el registro
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    if (isset($_GET['confirm']) && $_GET['confirm'] === 'yes') {
        $id = $_GET['id'];

        // Sentencia SQL para eliminar el registro con el ID proporcionado
        $sql = "DELETE FROM usuario WHERE id = $id";

        if (mysqli_query($conex, $sql)) {
            echo "Registro eliminado correctamente";
        } else {
            echo "Error al eliminar el registro: " . mysqli_error($conex);
        }
    } else {
        echo "Eliminación cancelada";
    }
}
?>

