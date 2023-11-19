<?php
// Conexión a la base de datos
$conex = mysqli_connect("localhost", "root", "", "login");
if (mysqli_connect_errno()) {
    die("Error en la conexión a la base de datos: " . mysqli_connect_error());
}

// Verifica si se proporcionó un ID válido para eliminar el registro
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    // Sentencia SQL para eliminar el registro con el ID proporcionado
    $sql = "DELETE FROM usuario WHERE id = $id";

    if (mysqli_query($conex, $sql)) {
        echo "Registro eliminado correctamente";
    } else {
        echo "Error al eliminar el registro: " . mysqli_error($conex);
    }
} else {
    echo "ID de registro no válido";
}
?>
