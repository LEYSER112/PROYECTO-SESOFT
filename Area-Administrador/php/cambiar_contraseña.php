<?php
session_start();

if (!isset($_SESSION['id_usuario'])) {
    header("Location: ../login.php");
    exit();
}

require_once 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Verificar que las contraseñas coincidan
    if ($password !== $confirm_password) {
        ?>
        <script type="text/javascript">alert("Error las contraseñas no coinciden"); window.location.href = "../Tabla-Colegios.php";</script>
        <?php
        exit();
    }

    // Obtener el ID de usuario de la sesión
    $id_usuario = $_SESSION['id_usuario'];

    // Hash de la contraseña
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Actualizar la contraseña en la base de datos
    $sql = "UPDATE usuarios SET contraseña = ? WHERE id_usuario = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $hashed_password, $id_usuario);

    if ($stmt->execute()) {
        ?>
        <script type="text/javascript">alert("Contraseña actualizada correctamente"); window.location.href = "../Tabla-Colegios.php";</script>
        <?php
    } else {
        echo "Error al actualizar la contraseña: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>
