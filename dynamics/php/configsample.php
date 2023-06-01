<?php    
    //(CONSTANTES)
    const DBHOST = "localhost";
    const DBUSER = "root";
    const PASSWORD = "";
    const DB = "mytuiterprueba";

    // --PASO: Establecer las constantes
    // --PASO: Establecer la funcion de conexión
    function connect()
    {
        $conexion = mysqli_connect(DBHOST, DBUSER, PASSWORD, DB);
        

        
        return $conexion;
        /*
        --PASO : var_dump de $conexion:
        ? objeto de conexion : 1 warning & 'bool(false)'
         */
        //var_dump($conexion); //objeto : bool

        // --PASO: regresar variable para un archivo externo
        
    }
    // --PASO : llamar a la funcion antes de pasarla a otro archivo
    //connect();


?>