<?php
    $usuario=$_POST['usuario'];
    $contraseña=$_POST['contraseña'];
    session_start();
    $_SESSION['usuario']=$usuario;
    $conexion = mysqli_connect("localhost", "root", "123456", "BDCARLOS");
    $consulta = "SELECT * FROM USUARIO WHERE USUARIO = '$usuario' AND PASSWORD ='$contraseña' AND TIPO='ESTUDIANTE' AND CARRERA='INFORMATICA'";
    $resultado = mysqli_query($conexion, $consulta);

    $consultaB= "SELECT * FROM USUARIO WHERE USUARIO = '$usuario' AND PASSWORD ='$contraseña' AND TIPO='ESTUDIANTE' AND CARRERA='BIOLOGIA'";
    $resultadoB = mysqli_query($conexion, $consultaB);

    $consultaM = "SELECT * FROM USUARIO WHERE USUARIO = '$usuario' AND PASSWORD ='$contraseña' AND TIPO='ESTUDIANTE' AND CARRERA='MATEMATICA'";
    $resultadoM = mysqli_query($conexion, $consultaM);


    $filas = mysqli_num_rows($resultado);
    $filas1 = mysqli_num_rows($resultadoB);
    $filas2 = mysqli_num_rows($resultadoM);
    $carrera = $row['carrera'];
    if($filas){
        if($_REQUEST['carrera']=='infor'){
            $_SESSION['usuario'] = $usuario;
            header("Location:informatica.php");
        }else{
            include("login.php");
            echo '<h1>ERROR</h1>';
        }
    }else if($filas1){
        if($_REQUEST['carrera']=='bio'){
            $_SESSION['usuario'] = $usuario;
            header("Location:biologia.php");
        }
        else{
            include("login.php");
            echo '<h1>ERROR</h1>';
        }
    }else if($filas2){
        if($_REQUEST['carrera']=='mate'){
            $_SESSION['usuario'] = $usuario;
            header("Location:matematica.php");
        }
        else{
            include("login.php");
            echo '<h1>ERROR</h1>';
        }
    }
    else{
        ?>
        <?php
        include("login.php");
        ?>
        <h1>ERROR</h1>
        <?php
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);