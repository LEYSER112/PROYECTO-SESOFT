<?php

  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "proyectodb";
 
            // Conecta a la base de datos
   $conn = new mysqli($servername, $username, $password, $database);
            
           
            // Verifica la conexión
    if ($conn->connect_error) {
        die("Error de conexión a la base de datos: " . $conn->connect_error);
    }

?>    