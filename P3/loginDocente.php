<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FCPN DOCENTE</title>
    <link rel = "stylesheet" href="estilo.css">
</head>
<body>
    <div class="loginBox">
    <img class="imagen" src="logoFCPN.jpg" alt="logo">
    <h1>DATOS DOCENTE</h1>
    <form action="verificarD.php" method="post">
        <label for="USUARIO">DOCENTE</label>
        <input type="text" placeholder="nombre de usuario" name="usuario">

        <label for="password">CONTRASEÑA</label>
        <input type="password" placeholder="contraseña" name="contraseña">
        <input type="submit" value="INGRESE">  
    </form>  
    </div>
</body>
</html>