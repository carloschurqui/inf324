<?php
    $usuario=$_POST['usuario'];
    $contraseña=$_POST['contraseña'];
    session_start();
    $_SESSION['usuario']=$usuario;
    $conexion = mysqli_connect("localhost", "root", "123456", "BDCARLOS");
    $consulta = "SELECT * FROM USUARIO WHERE USUARIO = '$usuario' AND PASSWORD ='$contraseña' AND TIPO='DOCENTE'";
    $resultado = mysqli_query($conexion, $consulta);

    $filas = mysqli_num_rows($resultado);
    $carrera = $row['carrera'];
    if($filas){
            header("Location:promedio.php");
    }
    else{
        ?>
        <?php
        include("loginDocente.php");
        ?>
        <h1>ERROR</h1>
        <?php
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);