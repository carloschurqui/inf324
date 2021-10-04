    <html>
    <head>
        <title>NOTAS</title>
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
        $usu=$_GET['usu'];
        $conexion = mysqli_connect("localhost", "usu324", "123456", "BDCARLOS");
        $consulta = "SELECT * FROM USUARIO WHERE USUARIO = '$usu'";
        $resultado = mysqli_query($conexion, $consulta);
        $row = $resultado->fetch_array();
        $ci = $row['CI'];
        //echo $ci;
        $consulta1 = "SELECT sigla, nota1, nota2,nota3, notaf FROM NOTA WHERE CI = '$ci'";
        $resultado1 = mysqli_query($conexion, $consulta1);
        $consulta2 = "SELECT nombre FROM PERSONA WHERE CI = '$ci'";
        $resultado2 = mysqli_query($conexion, $consulta2);
        $row2 = $resultado2->fetch_array();
        $nombre = $row2['nombre'];
        echo "ESTUDIANTE: $nombre";
        ?>
        
        <table border="1">
            <tr>
                <td>SIGLA</td>
                <td>NOTA 1</td>  
                <td>NOTA 2</td>
                <td>NOTA 3</td>
                <td>NOTA FINAL</td>
            </tr>
        <?php
        while($fila = mysqli_fetch_array($resultado1)){
            echo "<tr>";
            echo "<td>".$fila["sigla"]."</td>";
            echo "<td>".$fila["nota1"]."</td>";
            echo "<td>".$fila["nota2"]."</td>";
            echo "<td>".$fila["nota3"]."</td>";
            echo "<td>".$fila["notaf"]."</td>";
            echo "</tr>";
        }
        ?>
    </table>
    </body>
    </html>