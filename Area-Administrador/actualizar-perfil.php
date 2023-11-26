<?php
session_start();

include "php/conexion.php";

// Obtén el ID de usuario de la sesión
$idUsuario = isset($_SESSION['id_usuario']) ? $_SESSION['id_usuario'] : null;

if ($_SERVER["REQUEST_METHOD"] == "POST" && $idUsuario) {
    // Recupera los datos del formulario
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $cedula = $_POST['cedula'];
    $telefono = $_POST['telefono'];

    // Actualiza los datos en la base de datos
    $sqlUpdate = "UPDATE usuarios SET nombre='$nombre', correo='$correo', cedula='$cedula', telefono='$telefono' WHERE id_usuario=$idUsuario";

    if ($conn->query($sqlUpdate) === TRUE) {
        ?>
        <script type="text/javascript">alert("Datos actualizados correctamente.");window.location.href = "perfil.php";</script>
        <?php
    } else {
        echo "Error al actualizar los datos: " . $conn->error;
    }

    // Subir la nueva foto de perfil si se proporcionó
    if ($_FILES['foto_perfil']['error'] === UPLOAD_ERR_OK) {
        // Elimina el logo anterior si existe
        $logoAnterior = "logos-perfil/FOTO_PERFIL_" . $nombre . ".jpg";
        if (file_exists($logoAnterior)) {
            unlink($logoAnterior);
        }

        // Construye el nuevo nombre de archivo
        $nombreArchivo = "FOTO_PERFIL_" . $nombre . ".jpg";
        $rutaArchivo = 'logos-perfil/' . $nombreArchivo;
        move_uploaded_file($_FILES['foto_perfil']['tmp_name'], $rutaArchivo);

        // Actualiza la ruta de la foto de perfil en la base de datos
        $sqlFoto = "UPDATE usuarios SET foto_de_perfil='$rutaArchivo' WHERE id_usuario=$idUsuario";
        $conn->query($sqlFoto);
    } elseif ($_FILES['foto_perfil']['error'] !== UPLOAD_ERR_NO_FILE) {
        echo "Error al subir la foto de perfil.";
    }
} else {
    echo "Acceso no permitido.";
}

$conn->close();
?>
