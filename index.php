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
    <section id="inicio" class="d-flex justify-content-center align-items-center vh-100 bg-dark text-white">
        <div class="text-center">
            <h1 class="animate-typewriter" data-aos="fade-down">Hola, soy Luciano Gastón Barros, Desarrollador Backend</h1>
            <div class="mt-4">
                <a href="./PDF/Luciano Gaston Barros CV.pdf" class="btn btn-primary">Descargar CV</a>
                <a href="#contacto" class="btn btn-secondary">Contáctame</a>
            </div>
        </div>
    </section>

    <!-- Sección de Conocimientos -->
    <section id="conocimientos" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4" data-aos="fade-up">Mis Conocimientos Técnicos</h2>
            <div class="row text-center" data-aos="fade-up">
                <!-- Ejemplo de conocimiento -->
                <div class="col-md-3 mb-3">
                    <div class="icono-lenguaje mb-2">
                        <img src="./imagenes/JavaScript.png" alt="JavaScript" class="img-fluid">
                    </div>
                    <h5 data-aos="fade-up">JavaScript</h5>
                </div>
                <!-- Repetir para más conocimientos -->
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
