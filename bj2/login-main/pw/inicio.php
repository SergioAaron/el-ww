<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="../assets/css/estilo_inicio.css">
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <title>home</title>

</head>

<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="../assets/imagenes/logobj 1.png" alt="">
                </span>

                <div class="text logo-text">
                <img src="../assets/imagenes/logobj 3.png " alt=""> 
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Buscar...">
                </li>

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="../pw/inicio.php">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Inicio</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                        <i class='bx bx-list-ul icon' style='color:707070'></i>
                            <span class="text nav-text">Reportes</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bxs-file-plus icon' style='color:707070'  ></i>
                            <span class="text nav-text">Nuevo Reporte</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-user icon'></i>
                            <span class="text nav-text">Perfil</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-cog icon'></i>
                            <span class="text nav-text">Configuración</span>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="../index.php">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Salir</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
                
            </div>
        </div>

    </nav>

    <!--pw-->
    <section class="home">
        <div class="text">DIRECCIÓN GENERAL DE ADMINISTRACIÓN Y FINANZAS COORDINACIÓN DE TECNOLOGÍAS DE LA INFORMACIÓN Y COMUNICACIONES.</div>
    </section>

    <div class="main__card">
                <div class="container_cards">
                    <div class="card">
                        <div class="cover__card">
                            <img src="../assets/imagenes/software.jpg" alt="Software">
                        </div>
                            <h1>Mantenimiento de Software</h1>
                            <p>El Software es el conjunto de los programas informaticos, procedimientos, reglas, documentación y datos asociados que forman parte 
                                de las operaciones de un sistema de computación.</p>
                            <!--separación-->
                            <hr>
                            <!--pie de la trajeta-->
                        <div class="footer__card">
                            <h2>Tipos de Mantenimiento</h2>
                            <p> Aplicaciones, Sistemas, Programación y virus </p>
                        </div>
                    </div>
                </div>

                <div class="container_cards">
                    <div class="card">
                        <div class="cover__card">
                            <img src="../assets/imagenes/hardware.jpg" alt="">
                        </div>
                            <h1>Mantenimiento Hardware</h1>
                            <p>Hardware es la parte física de un ordenador. Está formado por los componentes eléctricos
                                y mecánicos, tales como circuitos de cables y luz, placas, memorias y cualquier
                                otro material en estado físico que sea necesario para hacer que el equipo funcione.</p>
                            <!--separación-->
                            <hr>
                            <!--pie de la trajeta-->
                        <div class="footer__card">
                            <h2>Tipos de Mantenimiento</h2>
                            <p>Procesamiento, Almacenamiento y periféricos</p>
                        </div>
                    </div>
                </div>

                <div class="container_cards">
                    <div class="card">
                        <div class="cover__card">
                            <img src="../assets/imagenes/redes.jpg" alt="">
                        </div>
                            <h1>Mantenimiento de Redes</h1>
                            <p> Las redes es us conjunto de equipos o dispositivos conectados entre sí para el intercambio de recursos y de información.
                                Las redes tienden a fallar según su tamaño, velocidad y alcance de la red.</p>
                            <!--separación-->
                            <hr>
                            <!--pie de la trajeta-->
                        <div class="footer__card">
                            <h2>Tipos de Mantenimiento</h2>
                            <p>Caida del Sistema, Conexiones nuevas, Perdida de Contrseña.</p>
                        </div>
                    </div>
                </div>
    </div>

    <!--SCRIPTS-->
    <script>
        const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");


toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})

searchBtn.addEventListener("click" , () =>{
    sidebar.classList.remove("close");
})

modeSwitch.addEventListener("click" , () =>{
    body.classList.toggle("dark");
    
    if(body.classList.contains("dark")){
        modeText.innerText = "Light mode";
    }else{
        modeText.innerText = "Dark mode";
        
    }
});
    </script>

</body>
</html>
