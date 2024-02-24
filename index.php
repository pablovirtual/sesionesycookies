<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--css-->
    <link rel="stylesheet" href="style.css">
    <title>Sesiones y cookies</title>
</head>
<body>

<!--formulario para enviar la informacion a validacion.php el cual enviara nombre,email,fecha de nacimiento y password-->
    <div class="container col-lg-12 d-flex justify-content-center">


        <div class="col-lg-5 align-items-center">

            <form action="validacion.php" method="post">

                <label for="nombre">Nombre</label>

                <input type="text" class="form-control" id="nombre" name="nombre"> 

                <label for="correo">Correo</label>

                <input type="email" class="form-control" id="correo" name="correo">

                <label for="fecha">Fecha de nacimiento</label>

                <input type="date" class="form-control"  id="fecha" name="fecha">

                <label for="password">password</label>

                <input type="password" class="form-control" id="password" name="password"><br>

                <input type="submit" id="enviar" name="enviar" value="enviar">
            </form>

        </div>
    <!--datos para ingresar al sistema-->
    </div class="col-2">
        <div class="row">
            <h4>Datos de usuario</h4>
            <h5>Nombre:pedro</h5>
            <h5>Correo:pedro@udg.com</h5>
            <h5>Fecha de nacimiento:02/02/2024</h5>
            <h5>Constraseña:123</h5>
        </div>
    <div>

    </div>

</body>

</html>