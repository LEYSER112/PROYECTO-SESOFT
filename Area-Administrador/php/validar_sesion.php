<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conexión a la base de datos
    include "conexion.php";

    // Obtén los datos del formulario
    $correo = isset($_POST['correo']) ? $_POST['correo'] : null;
    $contrasena = isset($_POST['contrasena']) ? $_POST['contrasena'] : null;

    // Consulta para verificar las credenciales
    $stmt = $conn->prepare("SELECT id_usuario, nombre, contraseña FROM usuarios WHERE correo = ?");
    $stmt->bind_param("s", $correo);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $stored_password = $row['contraseña'];

        // Verificar la contraseña usando password_verify()
        if (password_verify($contrasena, $stored_password)) {
            // Inicio de sesión exitoso
            $_SESSION['id_usuario'] = $row['id_usuario'];
            $_SESSION['nombre'] = $row['nombre'];
            header("Location: ../Tabla-Colegios.php");
            exit();
        } else {
            ?>
            <script type="text/javascript">alert("Credenciales incorrectas.");window.location.href = "../login.php";</script>
            <?php
        }
    } else {
        ?>
        <script type="text/javascript">alert("Credenciales incorrectas. .");window.location.href = "../login.php";</script>
        <?php
    }

    $stmt->close();
    $conn->close();
} 
?>
