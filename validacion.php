<?php

// Iniciar sesión
session_start();
// Array asociativo
$usuario = array (
    array(
        'nombre' => 'sofia',
        'correo' => 'sofia@udg.com',
        'fecha' => '2024-02-01',
        'password' => '456'),
    array(
        'nombre' => 'pedro',
        'correo' => 'pedro@udg.com',
        'fecha' => '2024-02-02',
        'password' => '123',
    )
);

// Validación de variables del formulario
if(isset($_POST['enviar'])){
    $nombre = $_POST['nombre'];
    $email = $_POST['correo'];
    $fecha = $_POST['fecha'];
    $password = $_POST['password'];
    $marca = $_POST['marca'];

    // Verificar si las variables coinciden con los valores esperados por medio de un bucle
    $usuarioAccede = false;

    foreach($usuario as $u){
        if ($email == $u['correo'] && $password == $u['password']){
            // asigna valores a las variables de sesion
            $_SESSION['nombre'] = $u['nombre'];
            $_SESSION['correo'] = $u['correo'];
            $_SESSION['fecha'] = $u['fecha'];
            $_SESSION['password'] = $u['password'];
            $_SESSION['marca'] = $marca;
            $usuarioAccede = true;

            // Si las variables de sesión están definidas, redirigir a la página de bienvenida
            //se obtiene la fecha y hora actual
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
        }
    }

    if (!$usuarioAccede) {
        echo "Acceso denegado";
    }
}
?>