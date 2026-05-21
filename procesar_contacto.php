<?php
// ========================================================================
// PROCESAR FORMULARIO DE CONTACTO
// Ferretería Corcino 2 - Sistema de Contactos
// ========================================================================

// Incluir archivo de configuración de la base de datos
require_once 'config.php';

// Verificar que la solicitud sea POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Obtener y sanitizar los datos del formulario
    $nombre = trim($_POST['nombre'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $telefono = trim($_POST['telefono'] ?? '');
    $asunto = trim($_POST['asunto'] ?? '');
    $mensaje = trim($_POST['mensaje'] ?? '');
    
    // Variables para validación
    $errores = [];
    
    // Validar que los campos no estén vacíos
    if (empty($nombre)) {
        $errores[] = "El nombre es obligatorio";
    }
    
    if (empty($email)) {
        $errores[] = "El email es obligatorio";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores[] = "El formato del email no es válido";
    }
    
    if (empty($telefono)) {
        $errores[] = "El teléfono es obligatorio";
    }
    
    if (empty($asunto)) {
        $errores[] = "El asunto es obligatorio";
    }
    
    if (empty($mensaje)) {
        $errores[] = "El mensaje es obligatorio";
    }
    
    // Si no hay errores, proceder a guardar en la base de datos
    if (empty($errores)) {
        
        // Escapar caracteres especiales para prevenir SQL injection
        $nombre = $conexion->real_escape_string($nombre);
        $email = $conexion->real_escape_string($email);
        $telefono = $conexion->real_escape_string($telefono);
        $asunto = $conexion->real_escape_string($asunto);
        $mensaje = $conexion->real_escape_string($mensaje);
        
        // Crear la consulta SQL para insertar los datos
        $sql = "INSERT INTO contactos (nombre, email, telefono, asunto, mensaje, fecha_envio) 
                VALUES ('$nombre', '$email', '$telefono', '$asunto', '$mensaje', NOW())";
        
        // Ejecutar la consulta
        if ($conexion->query($sql) === TRUE) {
            // Mensaje de éxito
            header("Location: index.php?status=success");
            exit();
        } else {
            // Error en la consulta
            header("Location: index.php?status=error&mensaje=" . urlencode("Error al guardar el mensaje: " . $conexion->error));
            exit();
        }
        
    } else {
        // Si hay errores de validación
        $mensaje_error = implode(", ", $errores);
        header("Location: index.php?status=error&mensaje=" . urlencode($mensaje_error));
        exit();
    }
    
} else {
    // Si no es una solicitud POST, redirigir al inicio
    header("Location: index.php");
    exit();
}

// Cerrar conexión
$conexion->close();
?>
