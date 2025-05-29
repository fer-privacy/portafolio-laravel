<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Portafolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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

    <!-- Sobre mí -->
    <section id="sobremi" class="p-5">
        <div class="container">
            <h2 class="text-center">¡Hola! Soy Rosa Rivera</h2>
            <div class="row">
                <div class="col-md-6">
                    <br>
                    <p class="text-center lead">Soy una artista visual especializada en diversas técnicas y estilos, con una profunda pasión por contar historias a través del color, la forma y el detalle. Mi trabajo busca capturar emociones complejas y momentos íntimos, transformándolos en piezas que conecten con el espectador a un nivel visual y emocional. Utilizo el arte como medio de reflexión y exploración, inspirándome en la naturaleza, las experiencias humanas y los símbolos culturales que nos rodean. Cada obra es una invitación a mirar más allá de lo evidente y descubrir nuevas perspectivas a través de una estética cuidada y expresiva.</p>
                    <br>
                    <br>
                    <a href="/Porfolio" class="btn btn-primary">Ver mi portafolio</a>
                </div>
                <div class="col-md-6">
                    <br>
                    <img src="img/arte3.png" alt="" width="300" height="350">
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
