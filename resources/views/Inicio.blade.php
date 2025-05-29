<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Portafolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Carrusel</title>
    <style>
        .carousel-container {
            width: 90%;
            overflow-x: auto;
            scroll-behavior: smooth;
            display: flex;
            gap: 16px;
            padding: 10px;
            scroll-snap-type: x mandatory;
        }

        .carousel-container iframe {
            flex: 0 0 auto;
            scroll-snap-align: center;
            width: 320px;
            height: 180px;
            border: none;
        }

        .carousel-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 15px;
        }

        .carousel-buttons button {
            padding: 8px 16px;
            font-weight: bold;
            cursor: pointer;
        }
    </style>

</head>
<body>
    <!-- Encabezado y menú -->
    <header class="bg-dark text-white p-3">
        <div class="container d-flex justify-content-between align-items-center">
            <h1 class="h3"><a href="/Inicio" class="nav-link text-white">Mi portafolio.</a></h1>
            <nav>
                <ul class="nav">
                    <li class="nav-item"><a href="/mi" class="nav-link text-white">Sobre mí</a></li>
                    <li class="nav-item"><a href="/Porfolio" class="nav-link text-white">Portafolio</a></li>
                    <li class="nav-item"><a href="/Servicios" class="nav-link text-white">Servicios</a></li>
                    <li class="nav-item"><a href="/Blog" class="nav-link text-white">Blog</a></li>
                    <li class="nav-item"><a href="/Contacto" class="nav-link text-white">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Inicio -->
    <section id="inicio" class="p-5 bg-light">
        <div class="container text-center">
            <h2>Bienvenido a mi Portafolio</h2>
            <p>Aquí encontrarás información sobre mí, mis trabajos y servicios.</p>
        </div>
    </section>

    <!-- Portafolio con carrusel -->
    <h2>Arte</h2>

    <div class="carousel-buttons">
        <button onclick="scrollCarousel(-1)">⟵ Anterior</button>
        <button onclick="scrollCarousel(1)">Siguiente ⟶</button>
    </div>

    <div class="carousel-container" id="Carousel">
    <img src="img/arte1.png" alt="" width="200" height="250" class="carousel-img">
    <img src="img/arte2.png" alt="" width="200" height="250" class="carousel-img">
    <img src="img/arte3.png" alt="" width="200" height="250" class="carousel-img">
    <img src="img/arte4.png" alt="" width="200" height="250" class="carousel-img">
    <img src="img/arte5.png" alt="" width="200" height="250" class="carousel-img">
    <img src="img/arte6.png" alt="" width="200" height="250" class="carousel-img">
    <img src="img/arte7.png" alt="" width="200" height="250" class="carousel-img">
    </div>

    <script>
        function scrollCarousel(direction) {
            const carousel = document.getElementById('Carousel');
            const scrollAmount = 440; // ancho del imagen + margen

            carousel.scrollBy({
                left: direction * scrollAmount,
                behavior: 'smooth'
            });
        }
    </script>

        <!-- Blog -->
    <section id="blog" class="bg-light p-5">
        <div class="container">
            <h2>Arte</h2>
            <div class="row">
                <div class="col-md-6">
                    <h5>Tipos de arte visual.</h5>
                    <p>Se muestran diferentes estilos de arte en el portafolio algunos de estos son:</p>
                    <br>
                    <ul>
                        <li><img src="img/tema1.png" alt="" width="50" height="50"><a>Pintura tradicional.</a></li>
                        <br>
                        <li><img src="img/tema2.png" alt="" width="50" height="50"><a>Arte digital.</a></li>
                        <br>
                        <li><img src="img/tema3.png" alt="" width="50" height="50"><a>Murales y arte urbano</a></li>
                        <br>
                        <li><img src="img/tema4.png" alt="" width="50" height="50"><a>Arte abstracto / conceptual</a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <!--<video width="100%" controls>
                        <source src="ruta-a-tu-video.mp4" type="video/mp4">
                        Tu navegador no soporta la reproducción de video.
                            <source src="{{ asset('video/video.mp4') }}" type="video/mp4">
                            Tu navegador no soporta la etiqueta de video.
                    </video>--->
                    <br>
                    <br>
                    <br>
                    <img src="{{ asset('video/animacion.gif') }}" alt="Mi GIF" width="460" height="300">
                </div>
            </div>
        </div>
    </section>

    <!-- Servicios -->
    <section id="servicios" class="p-5">
        <div class="container">
            <h2>Servicios</h2>
            <div class="row">
                <div class="col-md-4">
                    <h4>Servicios creativos</h4>
                    <p>Aprovecha tus habilidades digitales; trabajos recurrentes para editoriales y músicos.</p>
                    <li><img src="img/servicio1.png" alt="" width="250" height="200"></li>
                </div>
                <div class="col-md-4">
                    <h4>Licencias.</h4>
                    <p>Licencia de uso de imágenes, cobras “royalties” sin desprenderte del original.</p>
                    <li><img src="img/servicio2.png" alt="" width="200" height="200"></li>
                </div>
                <div class="col-md-4">
                    <h4>Educación.</h4>
                    <p>Workshops online en vivo, Genera comunidad y autoridad; modelos “ticket” o suscripción.</p>
                    <li><img src="img/servicio3.png" alt="" width="200" height="200"></li>
                </div>
            </div>
        </div>
    </section>

    <!-- Pie de página -->
    <footer class="bg-dark text-white text-center p-3 mt-4">
        <div class="container">
            &copy; {{ date('Y') }} Rosa Rivera.
        </div>
    </footer>

    <!---<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>-->
</body>
</html>
