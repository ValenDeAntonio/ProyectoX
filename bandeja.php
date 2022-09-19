<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Reportes</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Bandeja de Entrada</li>
            </ol>
          </div>
        <?php
        session_start();
        include "../con_db.php";
        
        //print_r($_SESSION['codigoesc'] ->codigo);

        $codigoesc = $_SESSION['codigoesc'] ->codigo;
        $escuela = $conex ->query ("SELECT * FROM formularios WHERE escuela = $codigoesc");
        $nombrescuela = $escuela ->fetch_all();

        // for ($x = 0; $x <= count($nombrescuela) - 1; $x++) {
        //   echo "formulario numero $x ";
        //   echo "<br>";
        //   echo "mensaje: ";
        //   print_r($nombrescuela[$x][0]);
        //   echo "<br>";
        //   echo "fecha: ";
        //   print_r($nombrescuela[$x][1]);
        //   echo "<br>";
        //   echo "Enviado a las: ";
        //   print_r($nombrescuela[$x][2]);
        //   echo "<br>";
        //   echo "<br>";
        //   echo "<br>";
        // }

        for ($x = count($nombrescuela) - 1; $x >= 0; $x--) {
          echo "<div style='padding: 10%;'>";
          echo "formulario numero $x ";
          echo "<br>";
          echo "mensaje: ";
          print_r($nombrescuela[$x][1]);
          echo "<br>";
          echo "fecha: ";
          print_r($nombrescuela[$x][2]);
          echo "<br>";
          echo "Enviado a las: ";
          print_r($nombrescuela[$x][3]);
          echo "<br>";
          echo "<br>";
          echo "ESTADO: ";
          print_r($nombrescuela[$x][5]);
          // echo "<form method='post'>";
          // echo "<input type='submit' name='visto'>a</input>";
          // echo "</form>";
          echo "</div>";
          
        //   $id = $nombrescuela[$x][0];
        //   print_r($id);
          if(!empty($_POST["visto"])){
          $conex ->query("UPDATE `seguimiento` SET `apellido` = 'funciona de nuevo' WHERE `seguimiento`.`id` = 2;");
          // $conex ->query("UPDATE `formularios` SET `estado` = 'visto' WHERE `formularios`.`id` = $id");
        
        }

          // echo "<input type='submit' name='visto'>Marcar como visto</input>";
          echo "<br>";
          echo "<br>";
          echo "<br>";


        }

    // print_r($nombrescuela[0][1]);

      // $array ahora es array(2, 4, 6, 8)
 ?>

        
        </div>
      </div><!-- /.container-fluid -->
    </section>