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
    //$usuario=$_POST['usuario'];
    $sql = $_SESSION['usuario'];
    ?> 
    
    <div class="div1"><img class="imgx1" src="logoFCPN.jpg" ></div>
    <div class="titulo">
        <h1>MATEMÁTICA</h1>
    </div>


    <div class="lista">
        <form action="principal.php" method="POST">
            <ul class="elementos" >
                <li class="xli"><?php echo '<a href="principal.php?usu='.urlencode($sql).'">NOTAS</a>';?></li>
            </ul>
        </form>
    </div>

    <div class="imagen">
    <p>El profesional de la Carrera de Informática, debe ser una persona investigadora, creativa, innovadora, emprendedora, analista y presta al cambio que exige las tecnologías de punta, aplicando metodologías vigentes, normas de calidad, técnicas de seguridad, plataformas tecnológicas de última generación, para brindar soluciones informáticas, prestando servicios a la comunidad, mejorando la calidad de vida de las personas y logrando un profesional exitoso.<br>
    Cada profesional informático tiende a la especialización en las áreas de la Ingeniería de Software, el área de Inteligencia Artificial, Robótica, Minería de datos, Seguridad Informática, Redes, en el área legal como Derecho Informático y otras.</p>

    </div>       
</body>
</html>