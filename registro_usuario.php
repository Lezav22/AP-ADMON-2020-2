<?php
session_start();
if (!empty($_POST)) {
    $alert = '';

    if (
        !empty($_post['nombre1']) || !empty($_post['apellido1']) || !empty($_post['identificacion']) ||
        !empty($_post['telefono']) || !empty($_post['correo']) || !empty($_post['username'])
        || !empty($_post['clave']) || !empty($_post['rol'])
    ) {

        $alert = '<p class="msg_error">Los campos con (*) son obligatorios.</p>';
    } else {
        include "../conexion.php";
        $nombre1 = $_POST['nombre1'];
        $nombre2 = $_POST['nombre2'];
        $apellido1 = $_POST['apellido1'];
        $apellido2 = $_POST['apellido2'];
        $identificacion = $_POST['identificacion'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $username = $_POST['username'];
        $clave = $_POST['clave'];
        $rol = $_POST['rol'];

        $clave = hash('sha512', $clave);
    }
}
?>



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <?php
    include 'includes/scripts.php';
    ?>
    <style>
        .form_register {
            widows: 400px;
            margin: auto;
        }

        #titulor {
            color: rgb(241, 8, 97);
            text-align: center;
            font-size: 25px;
        }

        hr {
            border: 0;
            background: rgb(107, 107, 107);
            height: 1px;
            margin: 10px 0;
            display: block;
        }

        form {
            background: rgb(245, 244, 244);
            margin: auto;
            margin-left: 150px;
            margin-right: 150px;
            padding: 20px 50px;
            border: 1px solid #2d9872;
        }

        label {
            display: block;
            font-size: 12pt;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            margin: 15px auto 5px 15px;
            color: rgb(3, 44, 224);
        }

        input,
        select {
            display: block;
            width: 100%;
            font-size: 1pt;
            padding: 5px;
            border: 1px solid rgb(101, 247, 82);
            border-radius: 5px;
        }

        .btn_save {
            font-size: 12pt;
            background: rgb(23, 156, 5);
            padding: 10px;
            color: #FFF;
            letter-spacing: 1px;
            border: 0;
            cursor: pointer;
            margin: 15px auto;
            width: 100px;
            height: 45px;
        }

        .alert {
            width: 100%;
            background: rgb(192, 44, 44);
            border-radius: 6px;
            margin: 20px auto;
        }

        .msg_error {
            color: rgb(228, 34, 0);
        }

        .msg_save {
            color: rgb(86, 235, 0);
        }

        .alert p {
            padding: 10px;
        }

        #rol {
            margin: 5px auto 5px 15px;
            width: 38%;
            height: 38px;
        }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    </style>
    <title>Registro Usuarios</title>
</head>

<body>
    <?php
    include 'includes/header.php';
    ?>
    <section id="container">

        <div class="form_register">

            <h1 id="titulor">Registro de Usuarios</h1>
            <hr>
            <div class="alert"></div>

            <form action="" method="post">

                <label for="nombre1">Nombres</label>
                <div class="container">
                    <div class="row">
                        <div class="col-5">
                            <input type="text" name="nombre1" id="nombre1" placeholder="Primer Nombre">
                        </div>
                        <div class="col-5 ml-auto">
                            <input type="text" name="nombre2" id="nombre2" placeholder="Segundo Nombre">
                        </div>
                    </div>

                </div>

                <label for="apellido1">Apellidos</label>
                <div class="container">
                    <div class="row">
                        <div class="col-5">
                            <input type="text" name="apellido1" id="apellido1" placeholder="Primer Apellido">
                        </div>
                        <div class="col-5 ml-auto">
                            <input type="text" name="apellido2" id="apellido2" placeholder="Segundo Apellido">
                        </div>
                    </div>
                </div>


                <label for="identificacion">Identificación y teléfono</label>
                <div class="container">
                    <div class="row">
                        <div class="col-5">
                            <input type="number" name="identificacion" id="identificacion" placeholder="Documento">
                        </div>
                        <div class="col-5 ml-auto">
                            <input type="text" name="telefono" id="telefono" placeholder="Teléfono">
                        </div>
                    </div>
                </div>


                <label for="email">Email y usuario</label>
                <div class="container">
                    <div class="row">
                        <div class="col-5">
                            <input type="email" name="correo" id="email" placeholder="Correo">
                        </div>
                        <div class="col-5 ml-auto">
                            <input type="text" name="username" id="username" placeholder="Usuario">
                        </div>
                    </div>
                </div>


                <label for="clave">Contraseña</label>
                <div class="container">
                    <div class="row">
                        <div class="col-5">
                            <input type="password" name="clave" id="clave" placeholder="Contraseña">
                        </div>
                        <div class="col-5 ml-auto">

                        </div>
                    </div>
                </div>


                <label for="rol">Tipo Usuario</label>
                <select name="rol" id="rol">
                    <option value="1">Administrador</option>
                    <option value="2">Vendedor</option>
                </select>

                <input type="submit" value="Registrar" class="btn_save">
            </form>

        </div>




    </section>

    <?php
    include 'includes/footer.php';
    ?>

</body>

</html>