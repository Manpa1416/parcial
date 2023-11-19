<?php
// Inicia la sesión si aún no se ha iniciado
session_start();

// Destruye todas las variables de sesión
session_destroy();

// Redirecciona a la página de inicio de sesión
header("Location: login.php");
exit();
?>