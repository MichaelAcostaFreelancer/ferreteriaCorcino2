<?php
// ========================================================================
// CONFIGURACIÓN DE LA BASE DE DATOS
// Ferretería Corcino 2 - Sistema de Contactos
// ========================================================================

// Credenciales de conexión
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'ferreteriaCorcino2');

// Crear conexión a la base de datos
$conexion = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// Verificar si la conexión fue exitosa
if ($conexion->connect_error) {
    die("Error al conectar a la base de datos: " . $conexion->connect_error);
}

// Establecer el charset a UTF-8
$conexion->set_charset("utf8mb4");

?>
