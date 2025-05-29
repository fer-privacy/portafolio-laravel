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

<!-- Servicios -->
    <section id="servicios" class="p-5">
        <div class="container">
            <h2>Arte</h2>
            <div class="row">
                <div class="col-md-4">
                    <h4>Pintura Tradicional.</h4>
                    <p>La pintura tradicional es una técnica artística que utiliza materiales clásicos como óleo, acrílico o acuarela sobre soportes físicos. Se realiza a mano y refleja estilos y métodos transmitidos a lo largo del tiempo.</p>
                    <li><img src="img/pintura.png" alt="" width="200" height="200"></li>
                </div>
                <div class="col-md-4">
                    <h4>Arte digital</h4>
                    <p>El arte digital es una forma de creación artística realizada con herramientas tecnológicas. Utiliza software, tabletas y dispositivos digitales para producir obras visuales.</p>
                    <li><img src="img/digital.png" alt="" width="220" height="200"></li>
                </div>
                <div class="col-md-4">
                    <h4>Arte urbano</h4>
                    <p>El arte urbano es una expresión artística realizada en espacios públicos, como calles y muros. Incluye grafitis, murales y otras intervenciones que transmiten mensajes sociales o culturales.</p>
                    <li><img src="img/urbano.png" alt="" width="200" height="230"></li>
                </div>
            </div>
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

   
    <!-- Pie de página -->
    <footer class="bg-dark text-white text-center p-3 mt-4">
        <div class="container">
            &copy; {{ date('Y') }} Rosa Rivera.
        </div>
    </footer>

</body>
</html>
