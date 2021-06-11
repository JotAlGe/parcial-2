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
    <?php
        # si el botón actualizar es presionado
        if(isset($_REQUEST['btn-actualizar'])){
            # se llama alrchivo de la conexión
            require('conexion.php');

            # llamad a la función "conection()"
            $idConn = conection();

            /* $beforeName = $_REQUEST['beforename']; */
            $name = $_REQUEST['nom'];
            /*$dpto = $_REQUEST['dep']; */
            $suel = $_REQUEST['suel'];

            # sentencia sql
            $sql = "UPDATE empleado SET
                    Sueldo = '$suel'
                    WHERE (Nombre = '$name')";
            
            mysqli_query($idConn, $sql);
            
            # cierra la conexión
            mysqli_close($idConn);
            
        ?>
        <!-- alerta de éxito si aumentó el sueldo -->
        <div class="alert alert-success">
            <strong>Exito !</strong>Se incrementó el sueldo de: "<?php echo $name ?>"!<a href="index.html" class="alert-link"> Ir al inicio.</a>.
        </div>
        <?php
        }else{
        ?>
        <!-- alerta si se cancela la actualización -->
        <div class="alert alert-danger">
            <strong>Se canceló la actualización !</strong><a href="index.html" class="alert-link">Ir al inicio.</a>.
        </div>
        <?php
        }
    ?>
</body>
</html>