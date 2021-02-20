<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Registro</h3>
    <form action="agregar_usuario.php" method = "POST">
        <input type="text" name = "nombre_usuario" placeholder = "Nombre">    
        <input type="text" name = "correo_usuario" placeholder = "Correo">  
        <input type="text" name = "contrasena" placeholder = "Contraseña">  
        <input type="text" name = "contrasena2" placeholder = "Contraseña">  
        <button type = "submit">Guardar</button>
    </form>

    <h3>Login</h3>
    <form action="login.php" method = "POST">  
        <input type="text" name = "correo_usuario" placeholder = "Correo">  
        <input type="text" name = "contrasena" placeholder = "Contraseña">    
        <button type = "submit">Ingresar</button>

    </form>
</body>

</html>