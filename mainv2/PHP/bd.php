<?php

$conex = mysqli_connect("localhost", "root", "", "brain");

if($conex) {
    echo"Conexión exitosa compa";
} else {
    echo"Error al conectar con la base de datos";
}
?>