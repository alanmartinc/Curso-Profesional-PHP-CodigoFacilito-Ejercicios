<?php
session_start();
if(isset($_SESSION['login'])){
    echo 'Bienvenido '.$_SESSION['login'];
} else{
    echo 'Sin sesión';
}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form method="post" action="login_sesion.php">
            Usuario: <input type="text" name="userName"></br>
            Contraseña: <input type="password" name="password"></br>
            <input type="submit" name="send" text="Enviar">
        </form>
    </body>
</html>