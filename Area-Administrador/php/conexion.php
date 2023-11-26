<?php

$DB_HOST=$_ENV["DB_HOST"];
$DB_USER=$_ENV["DB_USER"];
$DB_PASSWORD=$_ENV["DB_PASSWORD"];
$DB_NAME=$_ENV["DB_NAME"];
$DB_PORT=$_ENV["DB_PORT"];
 
            // Conecta a la base de datos
   $conn = new mysqli("$DB_HOST","$DB_USER","$DB_PASSWORD","$DB_NAME","$DB_PORT");
           
            // Verifica la conexión
    if ($conn->connect_error) {
        die("Error de conexión a la base de datos: " . $conn->connect_error);
    }

?>    