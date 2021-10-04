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
                <li class="xli"><?php echo '<a href="notas.php?usu='.urlencode($sql).'">NOTAS</a>';?></li>
            </ul>
        </form>
    </div>

    <div class="imagen">
    <p>La Carrera de Matemática de la UMSA, posee un nivel académico de excelencia, forma profesionales e investigadores, comprometidos con la sociedad y sus necesidades; orientados a la creación de conocimientos mediante los enfoques de la Matemática pura y aplicada,
	que respondan a los retos científicos y tecnológicos de la sociedad, enfatizando en la formación integral orientada al desarrollo y la creación de conocimientos matemáticos en las áreas de la Matemática Pura y Aplicada, para lograr la transformación del país con 
	responsabilidad social y contribuyendo a su desarrollo sostenible.</p>

    </div>       
</body>
</html>