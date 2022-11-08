<?php

include 'conexion_bd.php';

$usuario= $_POST['usuario'];
$contrasena= $_POST['contrasena'];

$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' and contrasena='$contrasena'");

if(mysqli_num_rows($validar_login) > 0){
    header("location: ../pw/inicio.php");
    exit;
}
else{
    echo'
    <script>
        alert("Usario no registrado, por favor verifique los datos");
        window.location="../index.php";
    </script>
    ';
    exit;
}

?>