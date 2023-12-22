<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <?php
    include("Backend/conexion.php");
    include("controller.php");
    ?>
    <form action="" method="post">
        <label for="user">Usuario</label>
        <input type="text" name="user"> <br>
        <label for="password">Contraseña</label>
        <input type="password" name="pwd"> <br>
        <input type="submit" name="entrar" value="Iniciar sesión">

    </form>
</body>
</html>

<?php

?>