<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="css" href="style.css">
  <title>Formulario Registro</title>
</head>
<body>
    <from method="post">
  
    <h4>Formulario Registro</h4>
    <input type="text" name="matricula" id="matricula" placeholder="Numero de Matricula">
    <input type="text" name="nombres" id="nombres" placeholder="Ingrese su Nombre">
    <input type="text" name="apellidos" id="apellidos" placeholder="Ingrese su Apellido">
    <input type="text" name="grupo" id="grupo" placeholder="Ingrese su grupo">
    <input type="email" name="correo" id="correo" placeholder="Ingrese su Correo">
    <input type="password" name="correo" id="correo" placeholder="Ingrese su Contraseña">
    
    <input type="submit" name="Registro">
</from>
<?php
  include=("registrar.php")
  ?>
</body>
</html>