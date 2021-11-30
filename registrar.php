<?php
include("con_db.php");

if (isset($_POST['Registrar'])){
    if (strlen($_POST['']) >=1 && strlen($_POST['']) >=1) {
        $matricula = trim($_POST['matricula']);
        $nombre = trim($_POST['nombre']);
        $apellido = trim($_POST['apellidos']);
        $grupo = trim($_POST['grupo']);
        $correo = trim($_POST['correo']);
        $contraseña = trim($_POST['contraseña']);
        $comentario = trim($_POST['comentario']);
        $fecharegistro = date ("d/m/y");
        $consulta = "INSERT INTO registro(matricula, nombre, apellidos, grupo, correo, 
        contraseña, opinion, fecha_registro) 
        VALUES (['$matricula','nombre','apellidos','grupo','correo','contraseña','comentario','fecharegistro')";
        $resultado = mysqli_query($conex,$consulta);

        if ($resultado) {
            ?>
            <h3 class= "ok">¡GRACIAS TE HAS REGISTRADO CORRECTAMENTE DATTEBAYO!</h3>
            <?php
        } else {
            ?>
            <h3 class= "bad">¡UY HAY UN EROR DATTEBAYO!</h3>
            <?php
        }
    } else {
        ?>
            <h3 class= "bad">¡DATTEBAYO, COMPLETA LOS DATOS!</h3>
            <?php




    }
}
?>