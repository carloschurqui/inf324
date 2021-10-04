<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FCPN ESTUDIANTE</title>
    <link rel = "stylesheet" href="estilo.css">
</head>
<body>
    <div class="loginBox">
    <img class="imagen" src="logoFCPN.jpg" alt="logo">
    <h1>DATOS ESTUDIANTE</h1>
    <form action="verificar.php" method="post">
        <label for="USUARIO">USUARIO</label>
        <input type="text" placeholder="nombre de usuario" name="usuario">

        <label for="password">CONTRASEÑA</label>
        <input type="password" placeholder="contraseña" name="contraseña">
      
        <input type="submit" value="INGRESE"><label for="carrera">CARRERA</label>
        <select name="carrera">
        <option value="infor">INFORMATICA</option>
        <option value="bio">BIOLOGIA</option>
        <option value="mate">MATEMATICA</option>
        </select>   
    </form>  
    </div>
</body>
</html>