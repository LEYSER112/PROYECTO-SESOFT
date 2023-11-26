<?php

  $servername = "sql207.infinityfree.com";
  $username = "if0_35504374";
  $password = "";
  $database = "if0_35504374_proyectodb";
 
            // Conecta a la base de datos
   $conn = new mysqli($servername, $username, $password, $database);
            
           
            // Verifica la conexión
    if ($conn->connect_error) {
        die("Error de conexión a la base de datos: " . $conn->connect_error);
    }

?>    