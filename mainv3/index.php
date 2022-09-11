<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Landing Page</title>

  <!-- Importar Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <!-- Importar stylesheet -->
  <link rel="stylesheet" href="style.css">

</head>
<body>
  <section id="navbar" class="sticky-top">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg navbar-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <a class="navbar-brand" href="index.html">Nombre</a>

          <ul class="navbar-nav ml-auto mr-2">
            <li class="nav-item">
              <a class="nav-link" href="HTML/recursos.html">Recursos</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#reportarCTA">Reportar</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="/HTML/ADMIN HTML/admin-login.html">Ingresar</a>
            </li>
          </ul>
        </div>
      </nav>
  </section>

  <section id="titulo">
    <div class="center">
      <h1>Lorem Ipsum</h1>
      <p>Hecho por estudiantes, para estudiantes</p>
      <a href=""><button>Comunicar</button></a>
    </div>
  </section>

  <section id="caracteristicas">
    <section id="caractertisticas">
      <div class="row">
        <div class="col-lg-4 caja">
          <h3>Easy to use.</h3>
          <p>So easy to use, even your dog could do it.</p>
        </div>

        <div class="col-lg-4 caja">
          <h3>Elite Clientele</h3>
          <p>We have all the dogs, the greatest dogs.</p>
        </div>

        <div class="col-lg-4 caja">
          <h3>Guaranteed to work.</h3>
          <p>Find the love of your dog's life or your money back.</p>
        </div>
      </div>
    </section>
  </section>

  <section id="contenido">
    <div class=" container">
      <h1>Lorem ipsum dolor sit amet consectetur</h1>
      <p>, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
    </div>
  </section>

  <section id="funcionamiento">

    <div class=" container">
      <div class="row">
        <div class="col-lg-6">
          <h2>Lorem ipsum dolor sit amet</h2>
          <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
          <br>
          <h2>Lorem ipsum dolor</h2>
          <p>, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
        </div>

        <div class="col-lg-6">
          <img src="imagenes/undraw_software_engineer_re_tnjc.svg" class="ilust" alt="imagen facha">
        </div>

      </div>
    </div>
  </section>

  <section id="valores">

    <div class="row">
      <div class="col">
        <img src="" alt="img 1">
      </div>

      <div class="col">
        <img src="" alt="img 1">
      </div>

      <div class="col">
        <img src="" alt="img 1">
      </div>
    </div>

    <div class="row">
      <div class="col">
  <h1>Lorem ipsum dolor</h1>
  <p>, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
</div>
</div>
  </section>

<section id="testimonios">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active fade-in-text">
          <img src="Imagenes/pfp1.png" alt="pfp here" class="testimonioPfp">
          <br>
          <h1>Un testimonio</h1>
          <p>Lorem ipsum dolor sit amet, consectetur </p>
        </div>
        <div class="carousel-item fade-in-text">
          <img src="Imagenes/pfp1.png" alt="pfp here" class="testimonioPfp">
          <br>
          <h1>Otro testimonio</h1>
          <p>Lorem ipsum dolor sit amet, consectetur </p>
        </div>
        <div class="carousel-item fade-in-text">
          <img src="Imagenes/pfp1.png" alt="pfp here" class="testimonioPfp">
          <br>
          <h1>Ultimo testimonio!</h1>
          <p>Lorem ipsum dolor sit amet, consectetur </p>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
</section>

  <section id="reportarCTA">
    <h2>Recibir ayuda ahora</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    <a href="HTML/user-login.html" class="btn btn-danger boton">Reportar</a>
  </section>

<hr>

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
