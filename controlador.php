<?php
   
include("conexion.php");
$conex = mysqli_connect("localhost", "root", "", "login");

if (!empty($_POST["btningresar"])){
    if (empty($_POST["usuario"])and empty($_POST["password"])) {
        echo '<div class="alert alert-danger">Los Campos Estan Vacios</div>';
    } else {
        $usuario=$_POST["usuario"];
        $clave=$_POST["password"];
        $sql=$conex->query(" select * from usuario where usuario='$usuario' and clave='$clave' ");

        if ($datos=$sql->fetch_object() ) {
            header("location:principal.php");

        } else {
            echo '<div class="alert alert-danger">Usuario o Contraseña incorrectos</div>';
        }
        
    }
    
}

if (!empty($_POST["btnregistro"])){
    if (empty($_POST["nombres"])and empty($_POST["apellidos"]) and empty($_POST["usuario"]) and empty($_POST["password"])) {
        echo '<div class="alert alert-danger">Los Campos Estan Vacios</div>';
    } else {
        $nombres=trim($_POST["nombres"]);
        $apellidos=trim($_POST["apellidos"]);
        $usuario=trim($_POST["usuario"]);
        $clave=trim($_POST["password"]);
        $consulta= "INSERT INTO usuario(nombres, apellidos, usuario, clave) VALUES ('$nombres','$apellidos','$usuario','$clave')";
        $resultado= mysqli_query($conex,$consulta);
        
    }
    
}




?>