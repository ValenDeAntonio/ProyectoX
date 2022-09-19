<?php
session_start();
if(!isset($_SESSION['Logeado'])){
    header("location: admin-login.php");
}
unset($_SESSION["Logeado"]);
header("location: admin-login.php");
?>