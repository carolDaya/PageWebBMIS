<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $celular = $_POST['celular'];
    $interes = $_POST['interes'];
    $espacio = $_POST['espacio'];
    $capacitacion = $_POST['capacitacion'];

    // Aquí solo mostramos los datos (para prueba)
    echo "¡Formulario recibido!<br>";
    echo "Nombre: $nombre<br>";
    echo "Dirección: $direccion<br>";
    echo "Celular: $celular<br>";
    echo "Interés: $interes<br>";
    echo "Espacio: $espacio<br>";
    echo "Capacitación: $capacitacion<br>";
} else {
    echo "Método no permitido.";
}
?>

