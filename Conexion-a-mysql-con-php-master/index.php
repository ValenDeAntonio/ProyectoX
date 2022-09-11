<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<body>
    <form method="post">
    	<h1>Ingresar</h1>
    	<input type="text" name="name" placeholder="Codigo de escuela">
    	<input type="submit" name="register">
    </form>
        <?php 
		include "controlador.php";
        ?>
</body>
</html>