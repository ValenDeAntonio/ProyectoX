<?php

//$_SESSION['persona'] = 'lorenzo el putisimo amo';
include("../con_db.php");

if($conex===false){
  die("No hay conexión con la base de datos");
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "select * from instituciones where escuelas = '$username' AND contraseña='$password'";
    
    $result = mysqli_query($conex,$sql);
    $row = mysqli_fetch_array($result);

    if($row["usertype"]=="escuela"){
      session_start();
      //$codigoesc = $conex ->query("SELECT escuelas from instituciones where codigo = $contraseña");

      $codigoesc = $conex ->query ("SELECT codigo FROM instituciones WHERE escuelas = '$username'");
      $codigoescuela = $codigoesc->fetch_object();

      $_SESSION["codigoesc"] = $codigoescuela;
      $_SESSION["username"] = $username;
      $_SESSION["Logeado"] = TRUE; //ACA ESTABA EL PROBLEMA

        header("location: admin-dashboard.php");

    }elseif($row["usertype"]=="admin"){
        $SESSION["username"] = $username;
        echo "administrador";
        header("location: adminhome.php");
    }else{
        echo "usuario o contraseña incorrectos";
    }

}



?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>

  <!-- Importar Bootstrap --> 
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <!-- Importar stylesheet -->
  <link rel="stylesheet" href="../../style.css">

</head>

<body>
    <section id="navbar" class="sticky-top">
        <div class="container-fluid admin">
          <nav class="navbar navbar-expand-lg navbar-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
              <a class="navbar-brand" href="index.html">Nombre</a>
    
              <ul class="navbar-nav ml-auto mr-2">
                <li class="nav-item">
                  <a class="nav-link" href="../recursos.html">Recursos</a>
                </li>
    
                <li class="nav-item">
                  <a class="nav-link" href="../user-login.html">Reportar</a>
                </li>
              </ul>
            </div>
          </nav>
      </section>

    <section id="adminLoginForm">
      <div class="login text-center"">
        <form class=" form-signin" action="#" method="POST">

        <img class="mb-4" src="" alt="Logo" width="72" height="72">

        <h1 class="h3 mb-3 font-weight-normal">Ingreso Directivos</h1>

        <label for="inputEmail" class="sr-only">Codigo de profesores</label>

        <input type="text" id="inputEmail" class="form-control" placeholder="Escuela" name="username" required autofocus>
        <label for="inputPassword" class="sr-only">Contraseña</label>

        <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Contraseña" required><br>
        <button class="btn btn-lg btn-primary btn-block" type="submit" value="Login">Continuar</button>
        <a href="../index.php">¿Buscas reportar como alumno?</a>
      </div>
      </form>
    </section>

      <section id="footer">
        <i class="fa-brands fa-instagram fot"></i>
        <i class="fa-solid fa-envelope fot"></i>
        <p>© Copyright Nombre</p>
      </section>
    
      <!-- importar bootstrap JS -->
      <script src=" https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
      </script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
      <!-- importar Javascript -->
      <script src="script.js"></script>

</body>
</html>