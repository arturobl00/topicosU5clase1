<?php
    //variables que se toman del post
    $usuario=$_POST['usuario'];
    $contraseña=$_POST['contraseña'];
    
    //Conexion a la base de datos
    include('conexion.php');

    //inicio del proceso de sesion
    session_start();
    $_SESSION['usuario']=$usuario;
    
    //query para consultar el usario en la base
    $query="Select * from usuarios where usuario = '$usuario' and constraseña='$contraseña'";
    $resultado = mysqli_query($conexion,$query);
    
    $registro = mysqli_num_rows($resultado);

    if($registro){
        echo "<p>Hola luis</p>";
        //header("location:benivenida.php");
    }
    else{
        echo "<h1>Error de autentificación</h1>";
    }

    mysqli_close($conexion);

?>