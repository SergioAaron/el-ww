

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Registro</title>
    
    <!--links-->
    <link rel="stylesheet" href="assets/css/estilos.css">
    
</head>
<body>
    
    <main>

        <!--Caja de Inicio-->
    <div class="contenedor__todo">
        <div class="caja__trasera">
            <!--Login-->
                <div class="caja__trasera-login">
                    <h3> ¿Ya tienes una cuenta? </h3>
                    <p> Inicia sesión para entrar en la página </p>
                    <button id="btn__iniciar-sesion"> Iniciar Sesión </button>
                </div>

            <!--Registro-->
                <div class="caja__trasera-register">
                    <h3> ¿Aún no tienes una cuenta? </h3>
                    <p> Registrate para que puedas hacer un reporte </p>
                    <button id="btn__registrarse"> Registro </button>
                </div>

            </div>
        
        <!--Contenedor de Formularios-->
            <div class="contenedor__login-register">
            
            <!--Formulario Entrar-->
                <form action="php/login_usuario_bd.php" method="POST" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Usuario" name= "usuario">
                    <input type="password" placeholder="Contraseña" name= "contrasena">
                    <button> Entrar </button>
                </form>
            
            <!--Formulario de Registro-->
                <form action="php/registro_usuario_bd.php" method="POST" class="formulario__register">
                    <h2> Registro </h2>
                        <input type="text" placeholder="Nombre Completo" name="nombre_completo">
                        <input type="text" placeholder="Correo"name="correo">
                        <input type="text" placeholder="Usuario"name="usuario">
                        <input type="password" placeholder="Contraseña"name="contrasena">
                    <button> Entrar </button>
                </form>
            </div>
        </div>

    </main>


<script src="assets/js/script.js"></script>

</body>
</html>