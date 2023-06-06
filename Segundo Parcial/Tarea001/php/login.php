<?php

session_start();
include("../db.php");
// Obtener los datos del formulario
$username = $_POST['username'];
$password = $_POST['password'];

// Consultar la base de datos para verificar la autenticación
$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($query);

if ($result->num_rows == 1) {
    // Autenticación exitosa, iniciar sesión
    $_SESSION['username'] = $username;
    header("Location: inicio.php"); // Redirigir a la página de inicio
} else {
    // Autenticación fallida, mostrar mensaje de error
    echo "Usuario o contraseña incorrectos.";
}

$conn->close();
?>