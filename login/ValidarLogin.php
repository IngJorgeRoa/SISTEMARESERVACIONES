<?php

    //Mandar llamar conexion
    require_once("../bd/conexion.php");

    //Validaciòn del formulario

    $usuario = $_POST['user'];
    $password = $_POST['password'];

    //Creamos la consulta

    $consulta = "SELECT * FROM login WHERE user='$usuario' and password = '$password'";
    $resultado = mysqli_query($conn, $consulta);

    $filas= mysqli_num_rows($resultado);

    if (!$filas > 0) {
        echo '
        <script language="javascript">alert("ERROR EN LAS CREDENCIALES");
        location.href = "login.html";</script>';
        
    }else {
        echo 
        '
        <script>
        
             alert("BIENVENIDO AL PANEL DE ADMINISTRADOR");
             location.href = "admin/dashboard.html";

        </script>';
       
    }












