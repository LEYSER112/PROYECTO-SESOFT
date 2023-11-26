<?php
session_start();

// Verifica si el usuario está autenticado
if (!isset($_SESSION['id_usuario'])) {
    header("Location: ../login.php");  // Redirige a la página de inicio de sesión si no está autenticado
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Colegio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="shortcut icon" href="../../Imagenes/icono.png" />
    <link rel="stylesheet" href="../styles/style.css">
</head>

<style>
    .form-container {
        margin-top: 133px;
        max-height: 500px;
        /* Altura máxima del contenedor */
        overflow-y: auto;
        /* Desplazamiento vertical automático si se excede la altura */
        padding: 20px;
        /* Espaciado interno */
        border: 1px solid #ccc;
        /* Borde para el contenedor */
    }
</style>

<body>
    <nav class="navbar navbar-expand-md navbar-dark custom-navbar fixed-top">
        <a class="navbar-brand" href="#">
            <img src="../img/ESCUDO-COLOR-H.png" alt="Logo" height="55">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
            <ul class="navbar-nav">
                <!-- Elementos para el menu -->
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user-circle user-icon"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="../perfil.php"><i class="fas fa-user"></i> Perfil</a>
                        <a class="dropdown-item" href="../configuraciones.php"><i class="fas fa-cog"></i> Configuraciones</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="cerrar_sesion.php"><i class="fas fa-sign-out-alt"></i> Cerrar Sesión</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div id="toggleSidebarButton" onclick="toggleSidebar()">
        <i class="fas fa-bars"></i>
    </div>

    <!-- Barra de navegación izquierda -->
    <nav class="sidebar">

        <a class="sidebar-item" href="../perfil.php">
            <i class="fas fa-user"></i> Perfil
        </a>
        <a class="sidebar-item" href="../Tabla-Colegios.php">
            <i class="fas fa-table"></i> Tabla Colegios
        </a>
        <a class="sidebar-item" href="../Tabla-Colegios-Icfes.php">
            <i class="fas fa-table"></i> Tabla Colegios ICFES
        </a>
        <a class="sidebar-item" href="../configuraciones.php">
            <i class="fas fa-cog"></i> Configuración
        </a>
        <a class="sidebar-item" href="cerrar_sesion.php">
            <i class="fas fa-sign-out-alt"></i> Cerrar Sesión
        </a>
    </nav>

    <div class="container">

    <?php include 'obtencion_datos.php'; ?>
    
                <div class="form-container">
                    <form action="../actualizar.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id_colegios" value="<?php echo $row['id_colegios']; ?>">
                        <div class="form-group">

                            <div class="row">

                                <div class="col-md-6">
                                    <label for="nombre">Nombre:</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $row['nombre']; ?>">
                                </div>
                                <div class="col-md-6">
                                    <label for="nombre">Total de estudiantes:</label>
                                    <input type="text" class="form-control" id="nombre" name="total_estudiantes" value="<?php echo $row['total_estudiantes']; ?>">
                                </div>
                                <!-- Dirección -->
                                <div class="col-md-6">
                                    <label for="direccion">Dirección:</label>
                                    <input type="text" class="form-control" id="direccion" name="direccion" value="<?php echo $row['direccion']; ?>">
                                </div>


                                <div class="col-md-6">
                                    <label for="tipo_de_colegio">Selecciona un tipo de colegio:</label>
                                    <br>
                                    <select class="form-select" id="tipo_de_colegio" name="tipo_de_colegio" required>
                                        <option value="" disabled>SELECCIONA UN TIPO DE COLEGIO</option>
                                        <?php
                                        $options = array("OFICIAL", "NO OFICIAL");
                                        foreach ($options as $option) {
                                            $selected = ($row['tipo_de_colegio'] === $option) ? 'selected' : '';
                                            echo '<option value="' . $option . '" ' . $selected . '>' . $option . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="nuevo_logo">Logo:</label>
                                    <input type="file" class="form-control" id="nuevo_logo" name="nuevo_logo" accept="image/*">
                                </div>

                                <div class="col-md-6">
                                    <label for="jornada_manana">Total Estudiantes de la jornada mañana:</label>
                                    <input type="number" class="form-control" id="jornada_manana" name="jornada_manana" value="<?php echo $row['estudiantes_manana']; ?>">
                                </div>
                                <div class="col-md-6">
                                    <label for="jornada_tarde">Total Estudiantes de la jornada tarde:</label>
                                    <input type="number" class="form-control" id="jornada_tarde" name="jornada_tarde" value="<?php echo $row['estudiantes_tarde']; ?>">
                                </div>
                                <div class="col-md-6">
                                    <label for="jornada_completa">Total Estudiantes de la jornada completa:</label>
                                    <input type="number" class="form-control" id="jornada_completa" name="jornada_completa" value="<?php echo $row['estudiantes_completa']; ?>">
                                </div>
                                <div class="col-md-6">
                                    <label for="jornada_noche">Total Estudiantes de la jornada noche:</label>
                                    <input type="number" class="form-control" id="jornada_noche" name="jornada_noche" value="<?php echo $row['estudiantes_noche']; ?>">
                                </div>
                                <div class="col-md-6">
                                    <label for="jornada_sabatina">Total Estudiantes de la jornada sabatina:</label>
                                    <input type="number" class="form-control" id="jornada_sabatina" name="jornada_sabatina" value="<?php echo $row['estudiantes_sabatina']; ?>">
                                    <br>
                                </div>


                                <div class="col-md-12">
                                    <button class="btn btn-primary btn-block" type="button" data-toggle="collapse" data-target="#collapseForm1" aria-expanded="false" aria-controls="collapseForm1" id="toggleButton">
                                        <span style="float: left;">Total Estudiante de los ultimos 5 años</span> <span id="toggleIcon" style="float: right;">+</span>
                                    </button>
                                </div>
                                <!-- Collapse con 5 inputs -->
                                <div class="col-md-12">
                                    <div class="collapse" id="collapseForm1">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label for="extra_input1">Año 2021:</label>
                                                <input type="number" class="form-control" id="total_2021" name="total_2021" value="<?php echo $row['total_2021']; ?>">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="extra_input2">Año 2020:</label>
                                                <input type="number" class="form-control" id="total_2020" name="total_2020" value="<?php echo $row['total_2020']; ?>">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="extra_input3">Año 2019:</label>
                                                <input type="number" class="form-control" id="total_2019" name="total_2019" value="<?php echo $row['total_2019']; ?>">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="extra_input4">Año 2018:</label>
                                                <input type="number" class="form-control" id="total_2018" name="total_2018" value="<?php echo $row['total_2018']; ?>">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="extra_input4">Año 2017:</label>
                                                <input type="number" class="form-control" id="total_2017" name="total_2017" value="<?php echo $row['total_2017']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                                <br>
                                <div class="col-md-12">
                                    <button class="btn btn-primary btn-block" type="button" data-toggle="collapse" data-target="#collapseForm2" aria-expanded="false" aria-controls="collapseForm2" id="toggleButton">
                                        <span style="float: left;">Total Estudiantes de la jornada mañana de los ultimos 5 años</span> <span id="toggleIcon" style="float: right;">+</span>
                                    </button>
                                </div>

                                <!-- Collapse con 5 inputs -->
                                <div class="col-md-12">
                                    <div class="collapse" id="collapseForm2">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label for="extra_input1">Año 2021:</label>
                                                <input type="number" class="form-control" id="manana_2021" name="manana_2021" value="<?php echo $row['manana_2021']; ?>">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="extra_input2">Año 2020:</label>
                                                <input type="number" class="form-control" id="manana_2020" name="manana_2020" value="<?php echo $row['manana_2020']; ?>">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="extra_input3">Año 2019:</label>
                                                <input type="number" class="form-control" id="manana_2019" name="manana_2019" value="<?php echo $row['manana_2019']; ?>">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="extra_input4">Año 2018:</label>
                                                <input type="number" class="form-control" id="manana_2018" name="manana_2018" value="<?php echo $row['manana_2018']; ?>">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="extra_input4">Año 2017:</label>
                                                <input type="number" class="form-control" id="manana_2017" name="manana_2017" value="<?php echo $row['manana_2017']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                                <br>
                                <div class="col-md-12">
                                    <button class="btn btn-primary btn-block" type="button" data-toggle="collapse" data-target="#collapseForm3" aria-expanded="false" aria-controls="collapseForm3" id="toggleButton">
                                        <span style="float: left;">Total Estudiantes de la jornada tarde de los ultimos 5 años</span> <span id="toggleIcon" style="float: right;">+</span>
                                    </button>
                                </div>

                                <!-- Collapse con 5 inputs -->
                                <div class="col-md-12">
                                    <div class="collapse" id="collapseForm3">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label for="extra_input1">Año 2021:</label>
                                                <input type="number" class="form-control" id="tarde_2021" name="tarde_2021" value="<?php echo $row['tarde_2021']; ?>">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="extra_input2">Año 2020:</label>
                                                <input type="number" class="form-control" id="tarde_2020" name="tarde_2020" value="<?php echo $row['tarde_2020']; ?>">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="extra_input3">Año 2019:</label>
                                                <input type="number" class="form-control" id="tarde_2019" name="tarde_2019" value="<?php echo $row['tarde_2019']; ?>">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="extra_input4">Año 2018:</label>
                                                <input type="number" class="form-control" id="tarde_2018" name="tarde_2018" value="<?php echo $row['tarde_2018']; ?>">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="extra_input4">Año 2017:</label>
                                                <input type="number" class="form-control" id="tarde_2017" name="tarde_2017" value="<?php echo $row['tarde_2017']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                                <br>
                                <div class="col-md-12">
                                    <button class="btn btn-primary btn-block" type="button" data-toggle="collapse" data-target="#collapseForm4" aria-expanded="false" aria-controls="collapseForm4" id="toggleButton">
                                        <span style="float: left;">Total Estudiantes de la jornada completa de los ultimos 5 años</span> <span id="toggleIcon" style="float: right;">+</span>
                                    </button>
                                </div>

                                <!-- Collapse con 5 inputs -->
                                <div class="col-md-12">
                                    <div class="collapse" id="collapseForm4">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label for="extra_input1">Año 2021:</label>
                                                <input type="number" class="form-control" id="completa_2021" name="completa_2021" value="<?php echo $row['completa_2021']; ?>">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="extra_input2">Año 2020:</label>
                                                <input type="number" class="form-control" id="completa_2020" name="completa_2020" value="<?php echo $row['completa_2020']; ?>">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="extra_input3">Año 2019:</label>
                                                <input type="number" class="form-control" id="completa_2019" name="completa_2019" value="<?php echo $row['completa_2019']; ?>">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="extra_input4">Año 2018:</label>
                                                <input type="number" class="form-control" id="completa_2018" name="completa_2018" value="<?php echo $row['completa_2018']; ?>">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="extra_input4">Año 2017:</label>
                                                <input type="number" class="form-control" id="completa_2017" name="completa_2017" value="<?php echo $row['completa_2017']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                                <br>
                                <div class="col-md-12">
                                    <button class="btn btn-primary btn-block" type="button" data-toggle="collapse" data-target="#collapseForm5" aria-expanded="false" aria-controls="collapseForm5" id="toggleButton">
                                        <span style="float: left;">Total Estudiantes de la jornada noche de los ultimos 5 años</span> <span id="toggleIcon" style="float: right;">+</span>
                                    </button>
                                </div>

                                <!-- Collapse con 5 inputs -->
                                <div class="col-md-12">
                                    <div class="collapse" id="collapseForm5">
                                        <div class="row">
                                        <div class="col-md-2">
                                                <label for="extra_input1">Año 2021:</label>
                                                <input type="number" class="form-control" id="noche_2021" name="noche_2021" value="<?php echo $row['noche_2021']; ?>">
                                            </div> 
                                            <div class="col-md-2">
                                                <label for="extra_input2">Año 2020:</label>
                                                <input type="number" class="form-control" id="noche_2020" name="noche_2020" value="<?php echo $row['noche_2020']; ?>">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="extra_input3">Año 2019:</label>
                                                <input type="number" class="form-control" id="noche_2019" name="noche_2019" value="<?php echo $row['noche_2019']; ?>">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="extra_input4">Año 2018:</label>
                                                <input type="number" class="form-control" id="noche_2018" name="noche_2018" value="<?php echo $row['noche_2018']; ?>">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="extra_input4">Año 2017:</label>
                                                <input type="number" class="form-control" id="noche_2017" name="noche_2017" value="<?php echo $row['noche_2017']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                                <br>
                                <div class="col-md-12">
                                    <button class="btn btn-primary btn-block" type="button" data-toggle="collapse" data-target="#collapseForm6" aria-expanded="false" aria-controls="collapseForm6" id="toggleButton">
                                        <span style="float: left;">Total Estudiantes de la jornada sabatina de los ultimos 5 años</span> <span id="toggleIcon" style="float: right;">+</span>
                                    </button>
                                </div>

                                <!-- Collapse con 5 inputs -->
                                <div class="col-md-12">
                                    <div class="collapse" id="collapseForm6">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label for="extra_input1">Año 2021:</label>
                                                <input type="number" class="form-control" id="sabatina_2021" name="sabatina_2021" value="<?php echo $row['sabatina_2021']; ?>">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="extra_input2">Año 2020:</label>
                                                <input type="number" class="form-control" id="sabatina_2020" name="sabatina_2020" value="<?php echo $row['sabatina_2020']; ?>">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="extra_input3">Año 2019:</label>
                                                <input type="number" class="form-control" id="sabatina_2019" name="sabatina_2019" value="<?php echo $row['sabatina_2019']; ?>">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="extra_input4">Año 2018:</label>
                                                <input type="number" class="form-control" id="sabatina_2018" name="sabatina_2018" value="<?php echo $row['sabatina_2018']; ?>">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="extra_input4">Año 2017:</label>
                                                <input type="number" class="form-control" id="sabatina_2017" name="sabatina_2017" value="<?php echo $row['sabatina_2017']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Actualizar</button>
                            <a type="button" href="../Tabla-Colegios.php" class="btn btn-success">Volver</a>
                    </form>
                </div>
    </div>
    <script>
        // Obtener referencias al botón y al ícono
        const toggleButton = document.getElementById('toggleButton');
        const toggleIcon = document.getElementById('toggleIcon');

        // Agregar un event listener para cambiar el ícono
        toggleButton.addEventListener('click', function() {
            if (toggleIcon.innerText === '+') {
                toggleIcon.innerText = '-';
            } else {
                toggleIcon.innerText = '+';
            }
        });

        const toggleSidebarButton = document.getElementById('toggleSidebarButton');
        const sidebar = document.querySelector('.sidebar');

        function toggleSidebar() {
            sidebar.classList.toggle('d-none');
        }

        // Ocultar la barra de navegación al cargar en pantallas pequeñas y al cambiar el tamaño
        function hideSidebarOnSmallScreen() {
            if (window.innerWidth <= 767) {
                sidebar.classList.add('d-none');
            } else {
                sidebar.classList.remove('d-none');
            }
        }

        // Llamar a la función para ocultar en carga y en cambio de tamaño
        window.addEventListener('resize', hideSidebarOnSmallScreen);
        window.addEventListener('load', hideSidebarOnSmallScreen);
    </script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>