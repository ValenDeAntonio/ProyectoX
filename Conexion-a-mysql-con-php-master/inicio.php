<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Bienvenido a formulario!</h1>
    <form method="post">
    	<h1>Ingresar</h1>
    	<input type="text" name="problema" placeholder="Que sucede">
    	<input type="submit" name="enviar">
    </form>
    <?php 
        include("registrar.php");
        ?>
</body>
</html>