<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- Los iconos tipo Solid de Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <!-- Estilos en la carpeta css -->
    <style type="text/css">
        <?=preg_replace('#[\r\n\t ]+#', ' ', file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'css/style-login.css')) ?>
    </style>

    <link rel="stylesheet" href="css/style-login.css">
    <!-- Icono principal -->
    <link rel="icon" type="image/png" href="/Logo_SISJAM_verde.png">
    <title>Iniciar sesión</title>
</head>

<!-- Cabeza principal del formulario -->

<body class="fondo-color">
    <center>
        <div>
            <img class="contendor-img-logo" src="/Logo_SISJAM_verde.png" alt="">
        </div>
        <div class="contenedor-form">
            <div class="toggle">
                <span></span>
            </div>
            <div class="formulario">
                <h2>Iniciar sesión</h2>
                <form action="<?php echo base_url('/login') ?>">
                    <div class="form-group">
                        <input name="email" type="email" class="form-control" placeholder="Nombre de Usuario">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Contraseña de Usuario">
                    </div>
                    <input type="submit" value="Iniciar sesión">
                </form>
            </div>
        </div>
    </center>
</body>

</html>