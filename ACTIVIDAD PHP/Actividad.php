<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
error_reporting(0);
$nombre = $_POST['Nombre'];
$Apellidos = $_POST['Apellido'];
$email = $_POST['Correo'];
$Telefono = $_POST['Telefono'];
$Contraseña = $_POST['Contraseña'];
$RepContra = $_POST['RepContra'];

echo "Que tal $nombre $Apellidos tu correo es $email y tu $Telefono mas $Contraseña mas $RepContra";
        // Mostrar mensaje de bienvenida
        echo "<h2>Bienvenido, $nombre </h2>";

        // Crear la tabla con los datos del formulario
        echo "<table style='border: 1px solid black;'>";
        echo "<tr>";
        echo "<th style='border: 1px solid black;'>Nombre</th>";
        echo "<th style='border: 1px solid black;'>Apellidos</th>";
        echo "<th style='border: 1px solid black;'>Email</th>";
        echo "<th style='border: 1px solid black;'>Telefono</th>";
        echo "<th style='border: 1px solid black;'>Contraseña</th>";
        echo "<th style='border: 1px solid black;'>RepContra</th>";
        echo "</tr>";
        echo "<tr>";
        echo "<td style='border: 1px solid black;'>$nombre</td>";
        echo "<td style='border: 1px solid black;'>$Apellidos</td>";
        echo "<td style='border: 1px solid black;'>$email</td>";
        echo "<td style='border: 1px solid black;'>$Telefono</td>";
        echo "<td style='border: 1px solid black;'>$Contraseña</td>";
        echo "<td style='border: 1px solid black;'>$RepContra</td>";
        echo "</tr>";
        echo "</table>";
    
    ?>
</body>
</html>