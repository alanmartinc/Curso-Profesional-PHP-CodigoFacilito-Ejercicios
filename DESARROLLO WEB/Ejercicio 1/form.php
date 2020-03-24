<?php
if ($_SERVER['REQUEST_METHOD']=='POST') {
$name = $_REQUEST['name'];
$lastName = $_REQUEST['lastName'];
$adress = $_REQUEST['adress'];
$phone = $_REQUEST['phone'];
$sex = $_REQUEST['sex'];
echo "Nombre $name Apellido $lastName Direccion $adress Telefono $phone Sexo $sex";
header("location: index.php?answer=datos recibidos&name={$name}");
}
?>