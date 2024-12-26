<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luciano Gastón Barros - Portafolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
</head>
<body>
    <!-- Sección de Inicio -->
<section id="inicio" class="vh-100 bg-dark text-white">
    <div class="container d-flex justify-content-center align-items-center h-100 flex-column text-center">
        <!-- Título -->
        <h1 class="mb-4" data-aos="fade-down">Hola, soy Luciano Gastón Barros, Desarrollador Backend</h1>
        
        <!-- Carrusel de Proyectos -->
        <div id="carouselProyectos" class="carousel slide w-75" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselProyectos" data-bs-slide-to="0" class="active" aria-current="true"></button>
                <button type="button" data-bs-target="#carouselProyectos" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#carouselProyectos" data-bs-slide-to="2"></button>
            </div>
            <div class="carousel-inner">
                <!-- Primer Proyecto -->
                <div class="carousel-item active">
                    <img src="./imagenes/SGPM_login.jpg" class="d-block w-100" alt="Proyecto 1">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Proyecto 1</h5>
                        <p><a href="#proyectos">Ver Mas</a></p>
                    </div>
                </div>
                <!-- Segundo Proyecto -->
                <div class="carousel-item">
                    <img src="./imagenes/proyecto2.jpg" class="d-block w-100" alt="Proyecto 2">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Proyecto 2</h5>
                        <p>Descripción breve del proyecto 2.</p>
                    </div>
                </div>
                <!-- Tercer Proyecto -->
                <div class="carousel-item">
                    <img src="./imagenes/proyecto3.jpg" class="d-block w-100" alt="Proyecto 3">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Proyecto 3</h5>
                        <p>Descripción breve del proyecto 3.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselProyectos" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselProyectos" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>
        
        <!-- Botones -->
        <div class="mt-4">
            <a href="./PDF/Luciano Gaston Barros CV.pdf" class="btn btn-primary">Descargar CV</a>
            <a href="#contacto" class="btn btn-secondary">Contáctame</a>
        </div>
    </div>
</section>

   <!-- Sección de Conocimientos -->
<section id="conocimientos" class="py-5 bg-dark text-white">
    <div class="container">
        <h2 class="text-center mb-4" data-aos="fade-up">Mis Conocimientos Técnicos</h2>
        <div class="row">
            <!-- Columna Frontend -->
            <div class="col-md-6">
                <h3 class="text-center mb-4" data-aos="fade-up">Frontend</h3>
                <div class="row text-center">
                    <!-- JavaScript -->
                    <div class="col-md-6 mb-4">
                        <div class="icono-lenguaje">
                            <img src="./imagenes/JavaScript.png" alt="JavaScript">
                        </div>
                        <h5>JavaScript</h5>
                    </div>
                    <!-- HTML -->
                    <div class="col-md-6 mb-4">
                        <div class="icono-lenguaje">
                            <img src="./imagenes/html5-logo-2.png" alt="HTML">
                        </div>
                        <h5>HTML</h5>
                    </div>
                    <!-- CSS -->
                    <div class="col-md-6 mb-4">
                        <div class="icono-lenguaje">
                            <img src="./imagenes/css-3-logo.png" alt="CSS">
                        </div>
                        <h5>CSS</h5>
                    </div>
                    <!-- AJAX -->
                    <div class="col-md-6 mb-4">
                        <div class="icono-lenguaje">
                            <img src="./imagenes/ajax-1.jpg" alt="AJAX">
                        </div>
                        <h5>AJAX</h5>
                    </div>
                </div>
            </div>

            <!-- Columna Backend -->
            <div class="col-md-6">
                <h3 class="text-center mb-4" data-aos="fade-up">Backend</h3>
                <div class="row text-center">
                    <!-- PHP -->
                    <div class="col-md-6 mb-4">
                        <div class="icono-lenguaje">
                            <img src="./imagenes/php_PNG43.png" alt="PHP">
                        </div>
                        <h5>PHP</h5>
                    </div>
                    <!-- MySQL -->
                    <div class="col-md-6 mb-4">
                        <div class="icono-lenguaje">
                            <img src="./imagenes/mysql_PNG22.png" alt="MySQL">
                        </div>
                        <h5>MySQL</h5>
                    </div>
                    <!-- phpMyAdmin -->
                    <div class="col-md-6 mb-4">
                        <div class="icono-lenguaje">
                            <img src="./imagenes/phpmyadmin-logo-0.png" alt="phpMyAdmin">
                        </div>
                        <h5>phpMyAdmin</h5>
                    </div>
                    <!-- MariaDB -->
                    <div class="col-md-6 mb-4">
                        <div class="icono-lenguaje">
                            <img src="./imagenes/mariadb-1024.png" alt="MariaDB">
                        </div>
                        <h5>MariaDB</h5>
                    </div>
                    <!-- Python -->
                    <div class="col-md-6 mb-4">
                        <div class="icono-lenguaje">
                            <img src="./imagenes/python-logo.png" alt="Python">
                        </div>
                        <h5>Python</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Sección de Proyectos -->
<section id="proyectos" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4" data-aos="fade-up">Proyectos Recientes</h2>
        <div class="row">
            <!-- Proyecto 1 -->
            <div class="col-md-4 mb-4">
                <div class="carta-proyecto" data-aos="zoom-in">
                    <div class="frente">
                        <img src="./imagenes/SGPM_login.jpg" alt="Proyecto 1" class="img-fluid">
                        <h4 data-aos="fade-up">Sistema de Gestión Interna</h4>
                    </div>
                    <div class="atras">
                        <h5 data-aos="fade-up">Tecnologías:</h5>
                        <p>PHP, MySQL, JavaScript</p>
                        <p>Implementación de una solución para la gestión de datos y seguimiento de estudiantes.</p>
                    </div>
                </div>
            </div>
            <!-- Repetir para más proyectos -->
        </div>
    </div>
</section>


    <!-- Sección Sobre Mí -->
    <section id="sobre-mi" class="py-5">
        <div class="container text-center">
            <h2 data-aos="fade-right">Sobre Mí</h2>
            <p data-aos="fade-right">Estudiante de Analista en Sistemas, apasionado por el desarrollo backend y siempre en aprendizaje continuo.</p>
            <a href="https://www.linkedin.com/in/luciano-gaston-barros-67937725b" class="btn btn-info" data-aos="fade-right">Mi LinkedIn</a>
        </div>
    </section>

    <!-- Sección de Contacto -->
<section id="contacto" class="py-5 bg-dark text-white">
    <div class="container">
        <h2 class="text-center mb-4" data-aos="fade-up">Contáctame</h2>
        
<!-- Íconos de Redes Sociales -->
<div class="social-icons mt-4 text-center" data-aos="fade-up">
    <a href="https://www.facebook.com/100011633083400" target="_blank" class="me-3">
        <i class="fab fa-facebook fa-2x"></i>
    </a>
    <a href="https://www.instagram.com/lucianogastonbarros" target="_blank" class="me-3">
        <i class="fab fa-instagram fa-2x"></i>
    </a>
    <a href="https://wa.me/3764820012" target="_blank" class="me-3">
        <i class="fab fa-whatsapp fa-2x"></i>
    </a>
    <a href="https://www.linkedin.com/in/luciano-gaston-barros-67937725b" target="_blank" class="me-3">
        <i class="fab fa-linkedin fa-2x"></i>
    </a>
    <a href="https://github.com/Estraimor" target="_blank">
        <i class="fab fa-github fa-2x"></i>
    </a>
</div>
    </div>
</section>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000, // Duración de la animación en milisegundos
            offset: 100, // Desplazamiento en píxeles al activar la animación
            easing: 'ease-in-out', // Efecto de suavizado
            once: true // Animación solo una vez al desplazarse
        });
    </script>
</body>
</html>
