<?php 
    # function conection
    function conection(){
        #host
        $host = 'localhost';
        # usuario
        $user = 'root';
        # contraseña
        $pass = '';
        # base de datos
        $database = 'empresa';

        # conexión
        $idConn = mysqli_connect($host, $user, $pass) or die('Error al conectar al ' . $host . ' con el usuario ' . $user);

        # selecciona la base de datos
        mysqli_select_db($idConn, $database) or die('Error al seleccionar la base de datos.');

        # return 
        return $idConn;
    }
?>