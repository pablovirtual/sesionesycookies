<?php
// Iniciar sesión
session_start();

//verifica si la sesion esta activa
if(!isset($_SESSION['nombre'], $_SESSION['correo'],$_SESSION['fecha'],$_SESSION['password'])){

    //redirecciona a la pagina bienvenida
    header('Location: validacion.php');
    exit();
 } 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--css-->
    <link rel="stylesheet" href="style.css">
    <title>Bienvenida</title>
</head>
<body>
<?php

//verifica si la cookie datos seesion tiene los datos validos
if (isset($_COOKIE['datosSesion'])) {
    $datosSesion = json_decode($_COOKIE['datosSesion'], true);
    $_SESSION = $datosSesion['sesion'];
    $_SESSION['ultimo_ingreso'] = isset($datosSesion['ultimo_ingreso']) ? $datosSesion['ultimo_ingreso'] : "No disponibles";
}

// Verificar si la sesión está iniciada y si existe la información del usuario mostrando los datos ingresados
if (isset($_SESSION['nombre'], $_SESSION['correo'], $_SESSION['fecha'], $_SESSION['password'])) {
    echo "<h1>Bienvenido </h1>";
    echo "<p>Nombre: " . $_SESSION['nombre'] . "</p>";
    echo "<p>Correo: " . $_SESSION['correo'] . "</p>";
    echo "<p>Fecha de nacimiento: " . $_SESSION['fecha'] . "</p>";
    echo "<p>Ultimo ingreso: " . $_SESSION['ultimo_ingreso'] . "</p>";
} else {
    echo "Acceso denegado no tienes credenciales para acceder.";
} 

?> 
<!--boton de cierre de sesion-->
<a href="cerrarSesion.php">Cerrar Sesion</a>

</body>
</html>


