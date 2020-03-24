<?php
$user = 'Alan';
$pass = '123';

session_start();
if($_POST['userName']==$user && $_POST['password']==$pass){
    $_SESSION['login'] = 'Administrador';
    header('Location: index.php');
} else{
    echo 'Usuario y contraseña incorrectos';
}
?>