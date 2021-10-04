<!DOCTYPE html>
<html lang="en">
<head>
    <title>FACULTAD</title>
    <style>
        .titulo h1{
    color: rgb(25, 109, 219); letter-spacing: 5px;
    font-family:cursive;
    text-align: center;
}


.imagen{
    
    margin-top: 40px ;
    font-family:'Courier New', Courier, monospace;
}
.imagen .imgx{
    box-shadow: 5px 5px 10px #DB6116 ;
    border-radius: 40px 20px 10px 10px;
}
.imgx1{
    width: 100px;
    height: 100px;
    
}
.elementos{
    overflow: hidden;
    list-style-type: none;
    margin-left: 350px;

}
.xli{
    float: left;
}
.xli a {
    padding-left: 190px;
    text-decoration: none;
    color: rgb(39, 85, 235);
    font-size: 20px;
}
.div1{
    height: 35px;
    background-color: rgb(36, 138, 221);
    }
    </style>
</head>
<body>

    <?php
    session_start();
    $sql = $_SESSION['usuario'];
	echo "USUARIO CONECTADO: ".$sql;
    ?> 
    
    <div class="div1"><img class="imgx1" src="logoFCPN.jpg" ></div>
    <div class="titulo">
        <h1>BIOLOÍA</h1>
    </div>


    <div class="lista">
        <form action="principal.php" method="POST">
            <ul class="elementos" >
                <li class="xli"><?php echo '<a href="notas.php?usu='.urlencode($sql).'">NOTAS</a>';?></li>
            </ul>
        </form>
    </div>

    <div class="imagen">
    <p>La Carrera de Biología tiene como misión la generación, transmisión de conocimientos científicos 
	y formación de recursos humanos altamente calificados y competitivos en el campo de las ciencias biológicas, 
	con énfasis en la planificación, gestión de la conservación y aprovechamiento sostenible de los recursos de biodiversidad, 
	y en la resolución de los problemas ambientales, respondiendo a su alto compromiso con el desarrollo económico-social sostenible 
	de la región y del país.</p>

    </div>       
</body>
</html>