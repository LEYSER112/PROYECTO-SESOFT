<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conectar a la base de datos
    include "php/conexion.php";
    
    $id_colegios = $_POST['id_colegios'];
    
    $colegios_icfes_prom_global = isset($_POST['colegios_icfes_prom_global']) ? $_POST['colegios_icfes_prom_global'] : '';
    $colegios_icfes_prom_matematicas = isset($_POST['colegios_icfes_prom_matematicas']) ? $_POST['colegios_icfes_prom_matematicas'] : '';
    $colegios_icfes_prom_lectura = isset($_POST['colegios_icfes_prom_lectura']) ? $_POST['colegios_icfes_prom_lectura'] : '';
    $colegios_icfes_prom_sociales = isset($_POST['colegios_icfes_prom_sociales']) ? $_POST['colegios_icfes_prom_sociales'] : '';
    $colegios_icfes_prom_cienciasn = isset($_POST['colegios_icfes_prom_cienciasn']) ? $_POST['colegios_icfes_prom_cienciasn'] : '';
    $colegios_icfes_prom_ingles = isset($_POST['colegios_icfes_prom_ingles']) ? $_POST['colegios_icfes_prom_ingles'] : '';
    
    $prom_global_2021 = isset($_POST['prom_global_2021']) ? $_POST['prom_global_2021'] : '';
    $prom_global_2020 = isset($_POST['prom_global_2020']) ? $_POST['prom_global_2020'] : '';
    $prom_global_2019 = isset($_POST['prom_global_2019']) ? $_POST['prom_global_2019'] : '';
    $prom_global_2018 = isset($_POST['prom_global_2018']) ? $_POST['prom_global_2018'] : '';
    $prom_global_2017 = isset($_POST['prom_global_2017']) ? $_POST['prom_global_2017'] : '';

    $prom_matematicas_2021 = isset($_POST['prom_matematicas_2021']) ? $_POST['prom_matematicas_2021'] : '';
    $prom_matematicas_2020 = isset($_POST['prom_matematicas_2020']) ? $_POST['prom_matematicas_2020'] : '';
    $prom_matematicas_2019 = isset($_POST['prom_matematicas_2019']) ? $_POST['prom_matematicas_2019'] : '';
    $prom_matematicas_2018 = isset($_POST['prom_matematicas_2018']) ? $_POST['prom_matematicas_2018'] : '';
    $prom_matematicas_2017 = isset($_POST['prom_matematicas_2017']) ? $_POST['prom_matematicas_2017'] : '';

    $prom_lectura_2021 = isset($_POST['prom_lectura_2021']) ? $_POST['prom_lectura_2021'] : '';
    $prom_lectura_2020 = isset($_POST['prom_lectura_2020']) ? $_POST['prom_lectura_2020'] : '';
    $prom_lectura_2019 = isset($_POST['prom_lectura_2019']) ? $_POST['prom_lectura_2019'] : '';
    $prom_lectura_2018 = isset($_POST['prom_lectura_2018']) ? $_POST['prom_lectura_2018'] : '';
    $prom_lectura_2017 = isset($_POST['prom_lectura_2017']) ? $_POST['prom_lectura_2017'] : '';
    
    $prom_sociales_2021 = isset($_POST['prom_sociales_2021']) ? $_POST['prom_sociales_2021'] : '';
    $prom_sociales_2020 = isset($_POST['prom_sociales_2020']) ? $_POST['prom_sociales_2020'] : '';
    $prom_sociales_2019 = isset($_POST['prom_sociales_2019']) ? $_POST['prom_sociales_2019'] : '';
    $prom_sociales_2018 = isset($_POST['prom_sociales_2018']) ? $_POST['prom_sociales_2018'] : '';
    $prom_sociales_2017 = isset($_POST['prom_sociales_2017']) ? $_POST['prom_sociales_2017'] : '';

    $prom_cienciasn_2021 = isset($_POST['prom_cienciasn_2021']) ? $_POST['prom_cienciasn_2021'] : '';
    $prom_cienciasn_2020 = isset($_POST['prom_cienciasn_2020']) ? $_POST['prom_cienciasn_2020'] : '';
    $prom_cienciasn_2019 = isset($_POST['prom_cienciasn_2019']) ? $_POST['prom_cienciasn_2019'] : '';
    $prom_cienciasn_2018 = isset($_POST['prom_cienciasn_2018']) ? $_POST['prom_cienciasn_2018'] : '';
    $prom_cienciasn_2017 = isset($_POST['prom_cienciasn_2017']) ? $_POST['prom_cienciasn_2017'] : '';
    
    $prom_ingles_2021 = isset($_POST['prom_ingles_2021']) ? $_POST['prom_ingles_2021'] : '';
    $prom_ingles_2020 = isset($_POST['prom_ingles_2020']) ? $_POST['prom_ingles_2020'] : '';
    $prom_ingles_2019 = isset($_POST['prom_ingles_2019']) ? $_POST['prom_ingles_2019'] : '';
    $prom_ingles_2018 = isset($_POST['prom_ingles_2018']) ? $_POST['prom_ingles_2018'] : '';
    $prom_ingles_2017 = isset($_POST['prom_ingles_2017']) ? $_POST['prom_ingles_2017'] : '';

    



    
    // Actualizar los datos en la tabla "promedio global"
    if (!empty($colegios_icfes_prom_global)) {
        $sql_check = "SELECT * FROM colegios_icfes_prom_global WHERE id_colegios = $id_colegios";
        $result = $conn->query($sql_check);
        if ($result->num_rows > 0) {
            $sql_colegios_icfes_prom_global = "UPDATE colegios_icfes_prom_global SET promedio_global='$colegios_icfes_prom_global' WHERE id_colegios=$id_colegios";
        } else {
            $sql_colegios_icfes_prom_global = "INSERT INTO colegios_icfes_prom_global (id_colegios, promedio_global) VALUES ('$id_colegios', '$colegios_icfes_prom_global')";
        }

        if ($conn->query($sql_colegios_icfes_prom_global) === TRUE) {
           // echo "Datos del promedio de matematicas correctamente.";
        } else {
            echo "Error al actualizar los datos del promedio globlal: " . $conn->error;
        }
    }

    // Actualizar los datos en la tabla "promedio matematicas"
    if (!empty($colegios_icfes_prom_matematicas)) {
        $sql_check = "SELECT * FROM colegios_icfes_prom_matematicas WHERE id_colegios = $id_colegios";
        $result = $conn->query($sql_check);
        if ($result->num_rows > 0) {
            $sql_colegios_icfes_prom_matematicas = "UPDATE colegios_icfes_prom_matematicas SET promedio_matematicas='$colegios_icfes_prom_matematicas' WHERE id_colegios=$id_colegios";
        } else {
            $sql_colegios_icfes_prom_matematicas = "INSERT INTO colegios_icfes_prom_matematicas (id_colegios, promedio_matematicas) VALUES ('$id_colegios', '$colegios_icfes_prom_matematicas')";
        }

        if ($conn->query($sql_colegios_icfes_prom_matematicas) === TRUE) {
            // echo "Datos del promedio de matematicas correctamente.";
        } else {
            echo "Error al actualizar los datos del promedio de matematicas: " . $conn->error;
        }
    }

    // Actualizar los datos en la tabla "lectura critica"
    if (!empty($colegios_icfes_prom_lectura)) {
        $sql_check = "SELECT * FROM colegios_icfes_prom_lectura WHERE id_colegios = $id_colegios";
        $result = $conn->query($sql_check);
        if ($result->num_rows > 0) {
            $sql_colegios_icfes_prom_lectura = "UPDATE colegios_icfes_prom_lectura SET promedio_lectura='$colegios_icfes_prom_lectura' WHERE id_colegios=$id_colegios";
        } else {
            $sql_colegios_icfes_prom_lectura = "INSERT INTO colegios_icfes_prom_lectura (id_colegios, promedio_lectura) VALUES ('$id_colegios', '$colegios_icfes_prom_lectura')";
        }

        if ($conn->query($sql_colegios_icfes_prom_lectura) === TRUE) {
            // echo "Datos del promedio de lectura critica actualizados correctamente.";
        } else {
            echo "Error al actualizar los datos del promedio de lectura critica: " . $conn->error;
        }
    }
    // Actualizar los datos en la tabla "ciencias sociales"
    if (!empty($colegios_icfes_prom_sociales)) {
        $sql_check = "SELECT * FROM colegios_icfes_prom_sociales WHERE id_colegios = $id_colegios";
        $result = $conn->query($sql_check);
        if ($result->num_rows > 0) {
            $sql_colegios_icfes_prom_sociales = "UPDATE colegios_icfes_prom_sociales SET promedio_ciencias_sociales='$colegios_icfes_prom_sociales' WHERE id_colegios=$id_colegios";
        } else {
            $sql_colegios_icfes_prom_sociales = "INSERT INTO colegios_icfes_prom_sociales (id_colegios, promedio_ciencias_sociales) VALUES ('$id_colegios', '$colegios_icfes_prom_sociales')";
        }

        if ($conn->query($sql_colegios_icfes_prom_sociales) === TRUE) {
            // echo "Datos del promedio de ciencias sociales actualizados correctamente.";
        } else {
            echo "Error al actualizar los datos del promedio de ciencias sociales: " . $conn->error;
        }
    }

    // Actualizar los datos en la tabla "Ciencias naturales"
    if (!empty($colegios_icfes_prom_cienciasn)) {
        $sql_check = "SELECT * FROM colegios_icfes_prom_cienciasn WHERE id_colegios = $id_colegios";
        $result = $conn->query($sql_check);
        if ($result->num_rows > 0) {
            $sql_colegios_icfes_prom_cienciasn = "UPDATE colegios_icfes_prom_cienciasn SET promedio_ciencias_naturales='$colegios_icfes_prom_cienciasn' WHERE id_colegios=$id_colegios";
        } else {
            $sql_colegios_icfes_prom_cienciasn = "INSERT INTO colegios_icfes_prom_cienciasn (id_colegios, promedio_ciencias_naturales) VALUES ('$id_colegios', '$colegios_icfes_prom_cienciasn')";
        }

        if ($conn->query($sql_colegios_icfes_prom_cienciasn) === TRUE) {
            // echo "Datos del promedio de ciencias naturales actualizados correctamente.";
        } else {
            echo "Error al actualizar los datos del promedio de ciencias naturales: " . $conn->error;
        }
    }

    // Actualizar los datos en la tabla "ingles"
    if (!empty($colegios_icfes_prom_ingles)) {
        $sql_check = "SELECT * FROM colegios_icfes_prom_ingles WHERE id_colegios = $id_colegios";
        $result = $conn->query($sql_check);
        if ($result->num_rows > 0) {
            $sql_colegios_icfes_prom_ingles = "UPDATE colegios_icfes_prom_ingles SET promedio_ingles='$colegios_icfes_prom_ingles' WHERE id_colegios=$id_colegios";
        } else {
            $sql_colegios_icfes_prom_ingles = "INSERT INTO colegios_icfes_prom_ingles (id_colegios, promedio_ingles) VALUES ('$id_colegios', '$colegios_icfes_prom_ingles')";
        }

        if ($conn->query($sql_colegios_icfes_prom_ingles) === TRUE) {
            // echo "Datos del promedio de ingles actualizados correctamente.";
        } else {
            echo "Error al actualizar los datos del promedio de ingles: " . $conn->error;
        }
    }

        // Actualizar datos de la tabla glogal de los ultimos 5 años 

        if (!empty($prom_global_2021 || $prom_global_2020 || $prom_global_2019 || $prom_global_2018 || $prom_global_2017)) {
            $sql_check = "SELECT * FROM  colegios_icfes_prom_global_5_años WHERE id_colegios = $id_colegios";
            $result = $conn->query($sql_check);
            if ($result->num_rows > 0) {
                $sql_global_5_años = "UPDATE  colegios_icfes_prom_global_5_años SET prom_global_2021='$prom_global_2021', prom_global_2020='$prom_global_2020', prom_global_2019='$prom_global_2019', prom_global_2018='$prom_global_2018', prom_global_2017='$prom_global_2017' WHERE id_colegios=$id_colegios";
            } else {
                $sql_global_5_años = "INSERT INTO  colegios_icfes_prom_global_5_años (id_colegios, prom_global_2021, prom_global_2020, prom_global_2019, prom_global_2018, prom_global_2017) VALUES ('$id_colegios', '$prom_global_2021', '$prom_global_2020', '$prom_global_2019', '$prom_global_2018', '$prom_global_2017')";
            }
    
            if ($conn->query($sql_global_5_años) === TRUE) {
                echo "Datos de jornada sabatina actualizados correctamente.";
            } else {
                echo "Error al actualizar los datos de la jornada sabatina: " . $conn->error;
            }
        }

        // Actualizar datos de la tabla matematicas de los ultimos 5 años 

        if (!empty($prom_matematicas_2021 || $prom_matematicas_2020 || $prom_matematicas_2019 || $prom_matematicas_2018 || $prom_matematicas_2017)) {
            $sql_check = "SELECT * FROM  colegios_icfes_prom_matematicas_5_años WHERE id_colegios = $id_colegios";
            $result = $conn->query($sql_check);
            if ($result->num_rows > 0) {
                $sql_matematicas_5_años = "UPDATE  colegios_icfes_prom_matematicas_5_años SET prom_matematicas_2021='$prom_matematicas_2021', prom_matematicas_2020='$prom_matematicas_2020', prom_matematicas_2019='$prom_matematicas_2019', prom_matematicas_2018='$prom_matematicas_2018', prom_matematicas_2017='$prom_matematicas_2017' WHERE id_colegios=$id_colegios";
            } else {
                $sql_matematicas_5_años = "INSERT INTO  colegios_icfes_prom_matematicas_5_años (id_colegios, prom_matematicas_2021, prom_matematicas_2020, prom_matematicas_2019, prom_matematicas_2018, prom_matematicas_2017) VALUES ('$id_colegios', '$prom_matematicas_2021', '$prom_matematicas_2020', '$prom_matematicas_2019', '$prom_matematicas_2018', '$prom_matematicas_2017')";
            }
    
            if ($conn->query($sql_matematicas_5_años) === TRUE) {
                echo "Datos de jornada sabatina actualizados correctamente.";
            } else {
                echo "Error al actualizar los datos de la jornada sabatina: " . $conn->error;
            }
        }

        // Actualizar datos de la tabla lectura critica de los ultimos 5 años 

        if (!empty($prom_lectura_2021 || $prom_lectura_2020 || $prom_lectura_2019 || $prom_lectura_2018 || $prom_lectura_2017)) {
            $sql_check = "SELECT * FROM  colegios_icfes_prom_lectura_5_años WHERE id_colegios = $id_colegios";
            $result = $conn->query($sql_check);
            if ($result->num_rows > 0) {
                $sql_lectura_5_años = "UPDATE  colegios_icfes_prom_lectura_5_años SET prom_lectura_2021='$prom_lectura_2021', prom_lectura_2020='$prom_lectura_2020', prom_lectura_2019='$prom_lectura_2019', prom_lectura_2018='$prom_lectura_2018', prom_lectura_2017='$prom_lectura_2017' WHERE id_colegios=$id_colegios";
            } else {
                $sql_lectura_5_años = "INSERT INTO  colegios_icfes_prom_lectura_5_años (id_colegios, prom_lectura_2021, prom_lectura_2020, prom_lectura_2019, prom_lectura_2018, prom_lectura_2017) VALUES ('$id_colegios', '$prom_lectura_2021', '$prom_lectura_2020', '$prom_lectura_2019', '$prom_lectura_2018', '$prom_lectura_2017')";
            }
    
            if ($conn->query($sql_lectura_5_años) === TRUE) {
                echo "Datos de jornada sabatina actualizados correctamente.";
            } else {
                echo "Error al actualizar los datos de la jornada sabatina: " . $conn->error;
            }
        }

        // Actualizar datos de la tabla ciencias sociales de los ultimos 5 años 

        if (!empty($prom_sociales_2021 || $prom_sociales_2020 || $prom_sociales_2019 || $prom_sociales_2018 || $prom_sociales_2017)) {
            $sql_check = "SELECT * FROM  colegios_icfes_prom_sociales_5_años WHERE id_colegios = $id_colegios";
            $result = $conn->query($sql_check);
            if ($result->num_rows > 0) {
                $sql_sociales_5_años = "UPDATE  colegios_icfes_prom_sociales_5_años SET prom_sociales_2021='$prom_sociales_2021', prom_sociales_2020='$prom_sociales_2020', prom_sociales_2019='$prom_sociales_2019', prom_sociales_2018='$prom_sociales_2018', prom_sociales_2017='$prom_sociales_2017' WHERE id_colegios=$id_colegios";
            } else {
                $sql_sociales_5_años = "INSERT INTO  colegios_icfes_prom_sociales_5_años (id_colegios, prom_sociales_2021, prom_sociales_2020, prom_sociales_2019, prom_sociales_2018, prom_sociales_2017) VALUES ('$id_colegios', '$prom_sociales_2021', '$prom_sociales_2020', '$prom_sociales_2019', '$prom_sociales_2018', '$prom_sociales_2017')";
            }
    
            if ($conn->query($sql_sociales_5_años) === TRUE) {
                echo "Datos de jornada sabatina actualizados correctamente.";
            } else {
                echo "Error al actualizar los datos de la jornada sabatina: " . $conn->error;
            }
        }

        // Actualizar datos de la tabla ciencias naturales de los ultimos 5 años 

        if (!empty($prom_cienciasn_2021 || $prom_cienciasn_2020 || $prom_cienciasn_2019 || $prom_cienciasn_2018 || $prom_cienciasn_2017)) {
            $sql_check = "SELECT * FROM  colegios_icfes_prom_cienciasn_5_años WHERE id_colegios = $id_colegios";
            $result = $conn->query($sql_check);
            if ($result->num_rows > 0) {
                $sql_cienciasn_5_años = "UPDATE  colegios_icfes_prom_cienciasn_5_años SET prom_cienciasn_2021='$prom_cienciasn_2021', prom_cienciasn_2020='$prom_cienciasn_2020', prom_cienciasn_2019='$prom_cienciasn_2019', prom_cienciasn_2018='$prom_cienciasn_2018', prom_cienciasn_2017='$prom_cienciasn_2017' WHERE id_colegios=$id_colegios";
            } else {
                $sql_cienciasn_5_años = "INSERT INTO  colegios_icfes_prom_cienciasn_5_años (id_colegios, prom_cienciasn_2021, prom_cienciasn_2020, prom_cienciasn_2019, prom_cienciasn_2018, prom_cienciasn_2017) VALUES ('$id_colegios', '$prom_cienciasn_2021', '$prom_cienciasn_2020', '$prom_cienciasn_2019', '$prom_cienciasn_2018', '$prom_cienciasn_2017')";
            }
    
            if ($conn->query($sql_cienciasn_5_años) === TRUE) {
                echo "Datos de jornada sabatina actualizados correctamente.";
            } else {
                echo "Error al actualizar los datos de la jornada sabatina: " . $conn->error;
            }
        }

        // Actualizar datos de la tabla ingles de los ultimos 5 años 

        if (!empty($prom_ingles_2021 || $prom_ingles_2020 || $prom_ingles_2019 || $prom_ingles_2018 || $prom_ingles_2017)) {
            $sql_check = "SELECT * FROM  colegios_icfes_prom_ingles_5_años WHERE id_colegios = $id_colegios";
            $result = $conn->query($sql_check);
            if ($result->num_rows > 0) {
                $sql_ingles_5_años = "UPDATE  colegios_icfes_prom_ingles_5_años SET prom_ingles_2021='$prom_ingles_2021', prom_ingles_2020='$prom_ingles_2020', prom_ingles_2019='$prom_ingles_2019', prom_ingles_2018='$prom_ingles_2018', prom_ingles_2017='$prom_ingles_2017' WHERE id_colegios=$id_colegios";
            } else {
                $sql_ingles_5_años = "INSERT INTO  colegios_icfes_prom_ingles_5_años (id_colegios, prom_ingles_2021, prom_ingles_2020, prom_ingles_2019, prom_ingles_2018, prom_ingles_2017) VALUES ('$id_colegios', '$prom_ingles_2021', '$prom_ingles_2020', '$prom_ingles_2019', '$prom_ingles_2018', '$prom_ingles_2017')";
            }
    
            if ($conn->query($sql_ingles_5_años) === TRUE) {
                echo "Datos de jornada sabatina actualizados correctamente.";
            } else {
                echo "Error al actualizar los datos de la jornada sabatina: " . $conn->error;
            }
        }


    // Cerrar la conexión a la base de datos
    $conn->close();
    ?>
    <script type="text/javascript">alert("Datos del colegio actualizados correctamente.");window.location.href = "Tabla-Colegios-Icfes.php";</script>
    <?php
}
?>
