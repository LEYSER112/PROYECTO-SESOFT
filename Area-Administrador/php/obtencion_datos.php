<?php
session_start();

// Verifica si el usuario está autenticado
if (!isset($_SESSION['id_usuario'])) {
  header("Location: ../login.php");  // Redirige a la página de inicio de sesión si no está autenticado
  exit();
}
?>

<?php
// Verifica si se ha pasado un ID válido por la URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
  $id = $_GET['id'];

  include "conexion.php";

  // Consulta para obtener los datos del colegio con el ID dado
  $sql = "SELECT colegios.id_colegios, colegios.nombre, colegios.direccion, colegios.tipo_de_colegio, colegios.total_estudiantes, colegios.logo, 

  colegios_icfes_prom_global.promedio_global,
  colegios_icfes_prom_matematicas.promedio_matematicas,
  colegios_icfes_prom_lectura.promedio_lectura,
  colegios_icfes_prom_sociales.promedio_ciencias_sociales,
  colegios_icfes_prom_cienciasn.promedio_ciencias_naturales,
  colegios_icfes_prom_ingles.promedio_ingles,

  colegios_icfes_prom_global_5_años.prom_global_2021,	
  colegios_icfes_prom_global_5_años.prom_global_2020,	
  colegios_icfes_prom_global_5_años.prom_global_2019,	
  colegios_icfes_prom_global_5_años.prom_global_2018,	
  colegios_icfes_prom_global_5_años.prom_global_2017,

  colegios_icfes_prom_matematicas_5_años.prom_matematicas_2021,	
  colegios_icfes_prom_matematicas_5_años.prom_matematicas_2020,	
  colegios_icfes_prom_matematicas_5_años.prom_matematicas_2019,	
  colegios_icfes_prom_matematicas_5_años.prom_matematicas_2018,	
  colegios_icfes_prom_matematicas_5_años.prom_matematicas_2017,

  colegios_icfes_prom_lectura_5_años.prom_lectura_2021,	
  colegios_icfes_prom_lectura_5_años.prom_lectura_2020,	
  colegios_icfes_prom_lectura_5_años.prom_lectura_2019,	
  colegios_icfes_prom_lectura_5_años.prom_lectura_2018,	
  colegios_icfes_prom_lectura_5_años.prom_lectura_2017,

  colegios_icfes_prom_sociales_5_años.prom_sociales_2021,	
  colegios_icfes_prom_sociales_5_años.prom_sociales_2020,	
  colegios_icfes_prom_sociales_5_años.prom_sociales_2019,	
  colegios_icfes_prom_sociales_5_años.prom_sociales_2018,	
  colegios_icfes_prom_sociales_5_años.prom_sociales_2017,

  colegios_icfes_prom_cienciasn_5_años.prom_cienciasn_2021,	
  colegios_icfes_prom_cienciasn_5_años.prom_cienciasn_2020,	
  colegios_icfes_prom_cienciasn_5_años.prom_cienciasn_2019,	
  colegios_icfes_prom_cienciasn_5_años.prom_cienciasn_2018,	
  colegios_icfes_prom_cienciasn_5_años.prom_cienciasn_2017,

  colegios_icfes_prom_ingles_5_años.prom_ingles_2021,	
  colegios_icfes_prom_ingles_5_años.prom_ingles_2020,	
  colegios_icfes_prom_ingles_5_años.prom_ingles_2019,	
  colegios_icfes_prom_ingles_5_años.prom_ingles_2018,	
  colegios_icfes_prom_ingles_5_años.prom_ingles_2017,

  jornada_manana.estudiantes_manana, 
  jornada_tarde.estudiantes_tarde, 
  jornada_noche.estudiantes_noche,
  jornada_completa.estudiantes_completa,
  jornada_sabatina.estudiantes_sabatina,

  total_estudiantes_5_años.total_2021,
  total_estudiantes_5_años.total_2020,
  total_estudiantes_5_años.total_2019,
  total_estudiantes_5_años.total_2018,
  total_estudiantes_5_años.total_2017,

  jornada_manana_5_años.manana_2021,
  jornada_manana_5_años.manana_2020,
  jornada_manana_5_años.manana_2019,
  jornada_manana_5_años.manana_2018,
  jornada_manana_5_años.manana_2017,

  jornada_tarde_5_años.tarde_2021,
  jornada_tarde_5_años.tarde_2020,
  jornada_tarde_5_años.tarde_2019,
  jornada_tarde_5_años.tarde_2018,
  jornada_tarde_5_años.tarde_2017,

  jornada_completa_5_años.completa_2021,
  jornada_completa_5_años.completa_2020,
  jornada_completa_5_años.completa_2019,
  jornada_completa_5_años.completa_2018,
  jornada_completa_5_años.completa_2017,

  jornada_noche_5_años.noche_2021,
  jornada_noche_5_años.noche_2020,
  jornada_noche_5_años.noche_2019,
  jornada_noche_5_años.noche_2018,
  jornada_noche_5_años.noche_2017,

  jornada_sabatina_5_años.sabatina_2021,
  jornada_sabatina_5_años.sabatina_2020,
  jornada_sabatina_5_años.sabatina_2019,
  jornada_sabatina_5_años.sabatina_2018,
  jornada_sabatina_5_años.sabatina_2017


 FROM colegios

LEFT JOIN jornada_tarde ON colegios.id_colegios = jornada_tarde.id_colegios
LEFT JOIN jornada_noche ON colegios.id_colegios = jornada_noche.id_colegios
LEFT JOIN jornada_completa ON colegios.id_colegios = jornada_completa.id_colegios
LEFT JOIN jornada_manana ON colegios.id_colegios = jornada_manana.id_colegios
LEFT JOIN jornada_sabatina ON colegios.id_colegios = jornada_sabatina.id_colegios
                
LEFT JOIN total_estudiantes_5_años ON colegios.id_colegios = total_estudiantes_5_años.id_colegios
LEFT JOIN jornada_manana_5_años ON colegios.id_colegios = jornada_manana_5_años.id_colegios
LEFT JOIN jornada_tarde_5_años ON colegios.id_colegios = jornada_tarde_5_años.id_colegios
LEFT JOIN jornada_completa_5_años ON colegios.id_colegios = jornada_completa_5_años.id_colegios
LEFT JOIN jornada_noche_5_años ON colegios.id_colegios = jornada_noche_5_años.id_colegios
LEFT JOIN  jornada_sabatina_5_años ON colegios.id_colegios =  jornada_sabatina_5_años.id_colegios
 
 LEFT JOIN colegios_icfes_prom_cienciasn ON colegios.id_colegios = colegios_icfes_prom_cienciasn.id_colegios
 LEFT JOIN colegios_icfes_prom_global ON colegios.id_colegios = colegios_icfes_prom_global.id_colegios
 LEFT JOIN colegios_icfes_prom_ingles ON colegios.id_colegios = colegios_icfes_prom_ingles.id_colegios
 LEFT JOIN colegios_icfes_prom_matematicas ON colegios.id_colegios =  colegios_icfes_prom_matematicas.id_colegios
 LEFT JOIN colegios_icfes_prom_sociales ON colegios.id_colegios = colegios_icfes_prom_sociales.id_colegios
 LEFT JOIN colegios_icfes_prom_lectura ON colegios.id_colegios = colegios_icfes_prom_lectura.id_colegios
 
 LEFT JOIN colegios_icfes_prom_global_5_años ON colegios.id_colegios = colegios_icfes_prom_global_5_años.id_colegios
 LEFT JOIN colegios_icfes_prom_matematicas_5_años ON colegios.id_colegios = colegios_icfes_prom_matematicas_5_años.id_colegios
 LEFT JOIN colegios_icfes_prom_lectura_5_años ON colegios.id_colegios = colegios_icfes_prom_lectura_5_años.id_colegios
 LEFT JOIN colegios_icfes_prom_sociales_5_años ON colegios.id_colegios = colegios_icfes_prom_sociales_5_años.id_colegios
 LEFT JOIN colegios_icfes_prom_cienciasn_5_años ON colegios.id_colegios = colegios_icfes_prom_cienciasn_5_años.id_colegios
 LEFT JOIN colegios_icfes_prom_ingles_5_años ON colegios.id_colegios = colegios_icfes_prom_ingles_5_años.id_colegios
            WHERE colegios.id_colegios = $id";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
  } else {
    echo 'No se encontró ningún colegio con ese ID.';
  }

  // Cerrar la conexión a la base de datos
  $conn->close();
} else {
  echo 'ID no válido.';
}
?>