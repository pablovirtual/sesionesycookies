<?php

session_start();

// Array asociativo
$usuario = array (
    'nombre' => 'pedro',
    'correo' => 'pedro@udg.com',
    'fecha' => '2024-02-02',
    'password' => '123' 
);

// Validación de variables del formulario
if(isset($_POST['enviar'])){
    $nombre = $_POST['nombre'];
    $email = $_POST['correo'];
    $fecha = $_POST['fecha'];
    $password = $_POST['password'];

    // Verificar si las variables coinciden con los valores esperados
    if($email == $usuario['correo'] && $password == $usuario['password']){
        // Asignar valores a las variables de sesión
        $_SESSION['nombre'] = $usuario['nombre']; 
        $_SESSION['correo'] = $usuario['correo']; 
        $_SESSION['fecha'] = $usuario['fecha'];
        $_SESSION['password'] = $usuario['password'];

        // Obtain the current date and time
        $fecha_actual = date('Y-m-d H:i:s');

        // Crear un array con los datos de sesión y la fecha y hora actual
        $datosSesion = array(
            'sesion' => $_SESSION,
            'ultimo_ingreso' => $fecha_actual
        );

        // Convertir a JSON para almacenar en la cookie
        $cookie_data = json_encode($datosSesion);

        // Crear la cookie con los datos de sesión y la fecha y hora del último ingreso
        setcookie('datosSesion', $cookie_data, time() + (86400 * 30), "/");

        // Redirigir antes de mostrar cualquier contenido
        header('Location: bienvenida.php');
        exit();
    } else {
        // Mostrar mensaje de acceso denegado
        echo "Acceso denegado.";
    }
}
?>
