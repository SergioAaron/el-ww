

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reportes</title>

    <link rel="stylesheet" href="../assets/css/estilo_reporte.css">
    <script src="https://kit.fontawesome.com/2c56fed19d.js" crossorigin="anonymous"></script>

</head>
<body>
<header>
        <div class="header_superior">
            <!------------------------LOGO-------------------------->
            <div class="logo">
                <img src="../assets/imagenes/bj.png" alt="">  
            </div>
            <!-----------------------titulos------------------------>
            
            <div class="titulos">
                <h1>DIRECCIÓN GENERAL DE ADMINISTRACIÓN Y FINANZAS</h1>
                <h1>COORDINACIÓN DE TECNOLOGÍAS DE LA INFORMACIÓN Y COMUNICACIONES</h1>
                <h1>REPORTE DE ATENCIÓN A USUARIOS INTERNOS</h1>
            </div>
          
            <!-----------------------LOGO 2------------------------>
            <div class="logo2">
                <img src="../assets/imagenes/CDMX.png" alt="">  
            </div>
        </div>
        <div class="container__menu">
           <nav>
            <ul>
                <li><a href="../pw/inicio.php"></a></li>
                <li><a href="#" id="selected">Crear Reporte</a></li>
                <li><a href="../pw/lista de reportes.php"> Lista de Reportes</a></li>
                <li><a href="../index.php">Salir</a></li>            </ul>

           </nav> 
        </div>
    </header>
    

<main>
        <div class="bienvenido">
            <div class="imagen">
                <img src="../assets/imagenes/download20220302053959.png" alt="">
            </div>
            <div class="Text">
                <h1>Bienvenido</h1>
                <h3>Es indispensable llenar todos los campos</h3>
            </div>
        </div>
        
    </div>


    <div class="titulo">
        <h1>Reporte de atención a usuarios</h1>
            
                <form name= "formulario1" action:"#">                     
                    <select name = "Area del Problema" onchange="cambia()" >
                        <option value= 0>Sin asignar
                        <option value= 1>Hardware
                        <option value= 2>Software
                        <option value= 3>Redes
                        <option value= 4>Sistema Operativo
                    </select>
                    <select name="opt">
                        <option value="-">-
                    </select>
                </form>
    </div>



</main>

<script src="assets/js/script3.js"></script>
    </body>
</html>