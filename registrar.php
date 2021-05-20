<?php
    //variables que se toman del post
    $usuario=$_POST['usuario'];
    $contraseña=$_POST['contraseña'];
    
    //Conexion a la base de datos
    include 'conexion.php';
    //$conexion = mysqli_connect("localhost","root","","sistema");

    
    //query para consultar el usario en la base
    //$query="select * from usuarios where usuario = '$usuario' and constraseña='$contraseña'";
    $query="Insert into usuarios (usuario, constraseña) values ('$usuario', '$contraseña')";
    $resultado = mysqli_query($db,$query);
    
    if($resultado){
        header("location:index.html");
    }
    else{
        echo "<h1>Error de Registro</h1>";
    }
    mysqli_close($db);
?>