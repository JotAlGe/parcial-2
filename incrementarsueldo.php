<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desempeño 2</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <style>
        .table{
        max-width: 90%;
    }
    </style>
</head>
<body>
    <!-- =========== NAV ========================================== -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="index.html">HOME</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarText"
        aria-controls="navbarText"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="consultapordepartamento.html"
              >Consulta por Departamento</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="totalsueldos.php"
              >Mostrar total de sueldos</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="incrementarsueldo.html"
              >Incremento de sueldo por legajo</a
            >
          </li>
        </ul>
        <!-- <span class="navbar-text"> Navbar text with an inline element </span> -->
      </div>
    </nav>
    <!-- ================================================================ -->
    <h1 class="display-4 m-3">Incremento de sueldo</h1>
    <hr />
    <?php 
        # archivo "conexion.php"
        require('conexion.php');

        # llamada a la función "conection()"
        $idConn = conection();
        $leg = $_REQUEST['legajo'];
        $sql = "SELECT Legajo, Nombre, Departamento, Sueldo
                    FROM empleado
                    WHERE (Legajo LIKE '$leg')";
    
        $register = mysqli_query($idConn, $sql);

        if(empty($leg)){
            ?>
            <!-- alerta si el campo está vacío -->
            <div class="alert alert-danger">
                <strong>Error !</strong>Debe completar los campos! <a href="index.html" class="alert-link">Volver.</a>.
            </div>
            <?php
        }else{
             if($row = mysqli_fetch_array($register)){
               /* $legajo = $row['Legajo']; */
               $name = $row['Nombre'];
               $dpto = $row['Departamento'];
               $sueld = $row['Sueldo'];

            ?>
      <!--=================== formulario de edición de datos=================== -->
        <form action="actualizar.php" method="POST" class="p-3">
          <div class="form-group">
            <!-- <input class="form-control" type="hidden" name="beforename" id="beforename" /> -->
            <!-- <label for="nom">Nombre:</label> -->
            <input type="hidden" name="nom" id="nom" class="form-control" required value="<?php echo $name ?>"/>
          </div>
          <!-- <div class="form-group">
            <label for="dep">Departamento:</label>
            <input type="text" name="dep" id="dep" class="form-control" required value="<?php echo $dpto ?>"/>
          </div> -->

          <h4>Sueldo de "<?php echo $name ?>:" $<?php echo $sueld ?></h4>
          <div class="form-group">
            <label for="suel">¿Desea aumentar a ..?</label>
            <input type="text" name="suel" id="suel" class="form-control" required value="<?php echo ($sueld * 1.10) ?>"/>
          </div>
          <input type="submit" value="Aumentar sueldo" class="btn btn-info" name="btn-actualizar"/>
          <input type="submit" value="Cancelar" class="btn btn-danger" name="btn-cancelar"/>
        </form>
            <?php
             }else{
            ?>
            <div class="alert alert-danger">
                <strong>Error !</strong>El legajo "<?php echo $leg ?>", no existe en la base de datos. <a href="incrementarsueldo.html" class="alert-link">Volver.</a>.
            </div>
            <?php
      }  
      ?>
      <?php
            # liberar memoria
            mysqli_free_result($register);
    
            # cerrar conexión
            mysqli_close($idConn);
        }
    ?>
<!-- ============== SCRIPTS BOOTSTRAP ============================== -->
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
</body>
</html>