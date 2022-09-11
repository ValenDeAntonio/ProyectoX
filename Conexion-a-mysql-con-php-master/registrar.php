<?php 
session_start();
echo $_SESSION['contraseña'];

$conex = mysqli_connect("localhost","root","","registro"); 
// $sql = $conex -> query("SELECT * from escuelas");
// $result = mysql_query($sql)
// $row = mysql_fetch_assoc($result)

// echo $row['escuelas'];

// if ($_SESSION['contraseña'] = "12345"){
// 	echo "Bienvenido Maristas";
// }

if(!empty($_POST["enviar"])){
	echo "enviar presionado <br>";

	if(empty($_POST["problema"])){
		echo "complete los campos!";
	} else{
		$problema = $_POST["problema"];
		$fechareg = date("d/m/y");
		$horareg = date("H:i:s");
		$escuela = $_SESSION['contraseña'];

		$consulta = "INSERT INTO formularios(problema, fecha, hora, escuela) VALUES ('$problema', '$fechareg', '$horareg', '$escuela')";
		$resultado = mysqli_query($conex,$consulta);
}
}