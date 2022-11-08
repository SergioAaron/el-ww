<<?php 

include 'conexion_bd.php';

$nombre_completo=$_POST['nombre_completo'];
$correo= $_POST['correo'];
$usuario= $_POST['usuario'];
$contrasena= $_POST['contrasena'];


$queri = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena) 
            VALUES('$nombre_completo','$correo','$usuario','$contrasena')";


//--------------------------------Eliminar repetidores-----------------------------------//

//verificar que no se repita el correo 
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' ");

    if(mysqli_num_rows($verificar_correo)> 0){
        echo'
            <script>
                alert("Este correo ya esta registrado, Intenta con otro diferente");   
                window.location= "../index.php"; 
            </script>
        ';
    exit();
    }

//verificar que no se repita el usuario 
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' ");

    if(mysqli_num_rows($verificar_usuario)> 0){
        echo'
            <script>
                alert("Este usuario ya esta registrado, Intenta con otro diferente");   
                window.location= "../index.php"; 
            </script>
        ';
    exit();
    }

//verificar que no se repita el numero 
    $verificar_telefono = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$telefono' ");

    if(mysqli_num_rows($verificar_telefono)> 0){
        echo'
            <script>
                alert("Este numero ya esta registrado, Intenta con otro diferente");   
                window.location= "../index.php"; 
            </script>
        ';
    exit(); 
    }
    


//-----------------------mensajes de alerta-------------------------//

$ejecutar = mysqli_query($conexion, $queri);

    if($ejecutar){
        echo '
            <script>
                alert ("Usuario almacenado exitosamente");
                window.location= "../pw/inicio.php"; 
            </script>
        ';
    }
    
    else{
        echo '
            <script>
                alert ("Intentelo de nuevo, Usuario no almacendo");
                window.location= "../index.php"; 
            </script>
        ';
    }

mysqli_close($conexion);

?>