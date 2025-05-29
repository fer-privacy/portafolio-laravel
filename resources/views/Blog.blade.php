<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Portafolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Carrusel de Videos</title>
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

    <!-- Blog -->
    <section id="blog" class="bg-light p-5">
        <div class="container">
            <h2>Blogs</h2>
            <div class="row">
                <div class="col-md-6">
                    <h5>Video arte.</h5>
                    <p>Algunos artistas mustran sus vidas en blogs de arte.</p>
                    <br>
                    <ul>
                        <li><img src="img/tema1.png" alt="" width="50" height="50"><a> Pintura tradicional.</a></li>
                        <br>
                        <li><img src="img/tema2.png" alt="" width="50" height="50"><a> Arte digital.</a></li>
                        <br>
                        <li><img src="img/tema3.png" alt="" width="50" height="50"><a> Murales y arte urbano</a></li>
                        <br>
                        <li><img src="img/tema4.png" alt="" width="50" height="50"><a> Arte abstracto / conceptual</a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                <br>
                <br>
                <br>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/z1zPR5gwmAs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <!--<video width="100%" controls>
                        <source src="video/animacion.mp4" type="video/mp4">
                        Tu navegador no soporta la reproducción de video.
                    </video>-->
                </div>
            </div>
        </div>
    </section>
                    <!-- Carusel de videos-->
    <h2>Mi Arte en Video</h2>

    <div class="carousel-buttons">
        <button onclick="scrollCarousel(-1)">⟵ Anterior</button>
        <button onclick="scrollCarousel(1)">Siguiente ⟶</button>
    </div>

    <div class="carousel-container" id="videoCarousel">
        <iframe src="https://www.youtube.com/embed/z1zPR5gwmAs" allowfullscreen></iframe>
        <iframe src="https://www.youtube.com/embed/WnYI-hXEKuw" allowfullscreen></iframe>
        <iframe src="https://www.youtube.com/embed/iQdep88pLSU" allowfullscreen></iframe>
        <iframe src="https://www.youtube.com/embed/sP8OT5Te-Bo" allowfullscreen></iframe>
        <iframe src="https://www.youtube.com/embed/0_CXwRNSjEw" allowfullscreen></iframe>
        <!-- Agrega más iframes aquí -->
    </div>

    <script>
        function scrollCarousel(direction) {
            const carousel = document.getElementById('videoCarousel');
            const scrollAmount = 340; // ancho del video + margen

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

    <!---<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>-->
</body>
</html>
