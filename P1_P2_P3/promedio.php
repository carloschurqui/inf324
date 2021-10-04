<html>
<head>
        <title>PROMEDIOS</title>
        <style>
            body{
            margin: 0;
            padding: 0;
            background: url(facultad.jpg) no-repeat center top;
            background-size: cover;
            font-family: sans-serif;
            height: 60px;
            }
            table{
                padding: auto ;
                margin: auto;
                margin-top: 150px;
                
            }
            td{
                padding: 15px;
                text-align: left;
                vertical-align:middle;
                font-weight: 300;
                font-size: 12px;
                color:#000;
                border-bottom: solid 1px rgba(255,255,255,0.1);
                }
            table td{
                padding: 25px;
                background-color: #33EFFB;
                border-color: #0C0D0D;
            }
        
        </style>
    </head>
<body>    
<?php
    $conexion = mysqli_connect("localhost", "usu324", "123456", "BDCARLOS");
    
    
    $consulta = "SELECT P.DEPARTAMENTO, AVG(N.NOTAF) AS PROMEDIO FROM NOTA N INNER JOIN PERSONA P ON N.CI = P.CI WHERE P.DEPARTAMENTO = '01'
    GROUP BY P.DEPARTAMENTO";
    $consulta2 = "SELECT P.DEPARTAMENTO, AVG(N.NOTAF) AS PROMEDIO FROM NOTA N INNER JOIN PERSONA P ON N.CI = P.CI WHERE P.DEPARTAMENTO = '02'
    GROUP BY P.DEPARTAMENTO";
    $consulta3 = "SELECT P.DEPARTAMENTO, AVG(N.NOTAF) AS PROMEDIO FROM NOTA N INNER JOIN PERSONA P ON N.CI = P.CI WHERE P.DEPARTAMENTO = '03'
    GROUP BY P.DEPARTAMENTO";
    $consulta4 = "SELECT P.DEPARTAMENTO, AVG(N.NOTAF) AS PROMEDIO FROM NOTA N INNER JOIN PERSONA P ON N.CI = P.CI WHERE P.DEPARTAMENTO = '04'
    GROUP BY P.DEPARTAMENTO";
    $consulta5 = "SELECT P.DEPARTAMENTO, AVG(N.NOTAF) AS PROMEDIO FROM NOTA N INNER JOIN PERSONA P ON N.CI = P.CI WHERE P.DEPARTAMENTO = '05'
    GROUP BY P.DEPARTAMENTO";
    $consulta6 = "SELECT P.DEPARTAMENTO, AVG(N.NOTAF) AS PROMEDIO FROM NOTA N INNER JOIN PERSONA P ON N.CI = P.CI WHERE P.DEPARTAMENTO = '06'
    GROUP BY P.DEPARTAMENTO";
    $consulta7 = "SELECT P.DEPARTAMENTO, AVG(N.NOTAF) AS PROMEDIO FROM NOTA N INNER JOIN PERSONA P ON N.CI = P.CI WHERE P.DEPARTAMENTO = '07'
    GROUP BY P.DEPARTAMENTO";
    $consulta8 = "SELECT P.DEPARTAMENTO, AVG(N.NOTAF) AS PROMEDIO FROM NOTA N INNER JOIN PERSONA P ON N.CI = P.CI WHERE P.DEPARTAMENTO = '08'
    GROUP BY P.DEPARTAMENTO";
    $consulta9 = "SELECT P.DEPARTAMENTO, AVG(N.NOTAF) AS PROMEDIO FROM NOTA N INNER JOIN PERSONA P ON N.CI = P.CI WHERE P.DEPARTAMENTO = '09'
    GROUP BY P.DEPARTAMENTO";
    
    $resultado = mysqli_query($conexion, $consulta);
    $resultado2 = mysqli_query($conexion, $consulta2);
    $resultado3 = mysqli_query($conexion, $consulta3);
    $resultado4 = mysqli_query($conexion, $consulta4);
    $resultado5 = mysqli_query($conexion, $consulta5);
    $resultado6 = mysqli_query($conexion, $consulta6);
    $resultado7 = mysqli_query($conexion, $consulta7);
    $resultado8 = mysqli_query($conexion, $consulta8);
    $resultado9 = mysqli_query($conexion, $consulta9);
    

    $row = $resultado->fetch_array(); 
    $prom01 = $row['PROMEDIO'];
    $row2 = $resultado2->fetch_array(); 
    $prom02 = $row2['PROMEDIO'];
    $row3 = $resultado3->fetch_array(); 
    $prom03 = $row3['PROMEDIO'];
    $row4 = $resultado4->fetch_array(); 
    $prom04 = $row4['PROMEDIO'];
    $row5 = $resultado5->fetch_array(); 
    $prom05 = $row5['PROMEDIO'];
    $row6 = $resultado6->fetch_array(); 
    $prom06 = $row6['PROMEDIO'];
    $row7 = $resultado7->fetch_array(); 
    $prom07 = $row7['PROMEDIO'];
    $row8 = $resultado8->fetch_array(); 
    $prom08 = $row8['PROMEDIO'];
    $row9 = $resultado9->fetch_array(); 
    $prom09 = $row9['PROMEDIO'];

    echo "PROMEDIO POR DEPARTAMENTOS";
 ?>   

    <table border="1">
    <tr>
    <tD>CHURQUISACA</tD>  
    <tD>LA PAZ</tD>  
    <tD>COCHABAMBA</tD>
    <tD>ORURO</tD>  
    <tD>POTOSI</tD>  
    <tD>TARIJA</tD>
    <tD>SANTA CRUZ</tD>  
    <tD>BENI</tD>  
    <tD>PANDO</tD>
           
    </tr>
<?php
        echo "<TR>";
        echo "<td>".$prom01."</td>";
        echo "<td>".$prom02."</td>";
        echo "<td>".$prom03."</td>";
        echo "<td>".$prom04."</td>";
        echo "<td>".$prom05."</td>";
        echo "<td>".$prom06."</td>";
        echo "<td>".$prom07."</td>";
        echo "<td>".$prom08."</td>";
        echo "<td>".$prom09."</td>";
        echo "</TR>";
?>
</table>
</body>
</html>