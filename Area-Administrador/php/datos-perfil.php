<?php
session_start();

// Verificar si el usuario está autenticado
if (!isset($_SESSION['id_usuario'])) {
    header("Location: login.php");
    exit();
}

include "conexion.php";

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener el ID del usuario de la sesión
$id_usuario = $_SESSION['id_usuario'];

// Consulta para obtener los datos del usuario
$sql = "SELECT nombre, correo, cedula, telefono, foto_de_perfil FROM usuarios WHERE id_usuario = $id_usuario";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $nombre = $row['nombre'];
    $correo = $row['correo'];
    $cedula = $row['cedula'];
    $telefono = $row['telefono'];
    $foto_perfil = $row['foto_de_perfil'];
} else {
    echo "No se encontraron registros para el usuario.";
}

$conn->close();



?>