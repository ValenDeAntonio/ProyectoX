<?php
session_start();
// $_SESSION['persona'] = 'lorenzo el putisimo amo';
include("con_db.php");

if(!empty($_POST["register"])){ //si no esta vacio, ejecutar lo siguiente
    if(empty($_POST["name"])){
        echo "<div> <h1>Porfavor complete los campos!</h1></div>"; //para dar estilos HTML
    } else{
        $contraseña = $_POST["name"]; //enviar contraseña
        $sql = $conex -> query("SELECT * from instituciones where codigo = $contraseña");

        if($datos =$sql->fetch_object()){
            header("location: inicio.php");
        }else{
            echo "<div> <h1>Los datos ingresados son incorrectos!</h1></div>";
        }
        
        $_SESSION['contraseña'] = $contraseña;
    } 
}
?>