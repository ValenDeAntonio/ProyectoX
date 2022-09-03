<?php

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

$conex = mysqli_connect("localhost", "root", "", "brain");

$consulta = "SELECT * FROM escuelas WHERE usuario='$usuario' AND contraseña='$contraseña' ";
$resultado = mysqli_query($conex,$consulta);

$filas = mysqli_num_rows($resultado);

if($filas) {
    header("location:../HTML/admin-dashboard.html");
} else {
    echo " Los datos ingresados son incorrectos";
}


?>