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
    <!-- ======================================= NAV ========== -->
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
    <!-- ===================================== -->
    <h1 class="display-4 m-3">Total de sueldos</h1>
    <hr>
    <?php 
        # archivo "conexion.php"
        require('conexion.php');

        # llamada a la función "conection()"
        $idConn = conection();

        $sql = "SELECT Sueldo
                FROM empleado";
        
        $cont = 0;
        $sum = 0;
        $register = mysqli_query($idConn, $sql);
            echo '<table class="table table-striped m-3">';
            echo '<tr>';
            echo '<th>' . 'Sueldo';
            echo '</tr>';
            
            while($row = mysqli_fetch_array($register)){
                $cont++;
                echo '<tr>';
                echo '<td>' . $row['Sueldo'];
                echo '</tr>';

                $sum += $row['Sueldo'];
            }
        echo '</table>';
        echo '<br>';
            echo '<h3 class="text-info m-3">Cantidad de sueldos: ' . $cont . '</h3>';   
            echo '<h3 class="text-info m-3">La suma de todos los sueldos es: $' . $sum . '</h3>';   
            echo '<a href="index.html" class=" m-3">Ir al inicio</a>';
        
        # liberar memoria
        mysqli_free_result($register);

        # cierra la conexión
        mysqli_close($idConn);
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