<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['username'])) {
    // Si no ha iniciado sesión, redirigirlo a la página de inicio de sesión
    header('Location: index.html');
    exit;
}
?>
