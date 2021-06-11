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
    <!-- ============================================================== -->
    <?php
        # trae el archivo "conexion.php"
        require('conexion.php');

        # llama a la función "conection()"
        $idConn = conection();

        # captura los datos ingresados en el formulario
       /*  $leg = $_REQUEST['leg']; */
        $name = $_REQUEST['nom'];
        $dep = $_REQUEST['dep'];
        $suel = $_REQUEST['suel'];

        if(/* empty($leg) || */ empty($name) || empty($dep) || empty($suel)){
            ?>
            <div class="alert alert-danger">
                <strong>Error !</strong>Debe completar los campos! <a href="index.html" class="alert-link">Volver.</a>.
            </div>
            <?php
        }else{
            $sql = "INSERT INTO empleado (Nombre, Departamento, Sueldo)
                    VALUES ('$name', '$dep', '$suel')";
    
            if(mysqli_query($idConn, $sql)){
                echo '<h1 class="display-4 m-3">Se registró a "' . $name .'".</h1>';
                echo '<hr>';
                echo '<br>';
                echo '<a href="index.html" class="m-3">Registrar otro empleado.</a>';
            }else{
                ?>
                <div class="alert alert-danger">
                    <strong>Error !</strong> No se pudo registrar <?php echo '"' .$name . '"' ?> <a href="index.html" class="alert-link">Agregar otro empleado.</a>.
                </div>
                <?php
            }
        }


        # se cierra la conexión
        mysqli_close($idConn);
    ?>

<!-- ======================== scripts bootstrap ====================== -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"></script>
  </body>
</body>
</html>