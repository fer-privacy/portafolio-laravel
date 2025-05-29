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

    <!-- Servicios -->
    <section id="servicios" class="p-5">
        <div class="container">
            <h2>Servicios</h2>
            <div class="row">
                <div class="col-md-4">
                    <h4>Servicios creativos</h4>
                    <p>Aprovecha tus habilidades digitales; trabajos recurrentes para editoriales y músicos.</p>
                    <li><img src="img/servicio1.png" alt="" width="250" height="200"></li>
                    <ul>
                        <li>Ilustración para cuentos, ensayos, revistas</li>
                        <li>Diseño de portadas para libros o música</li>
                        <li>Creación de personajes o escenas</li>
                     </ul>
                     <p><em>Clientes frecuentes:</em> editoriales, autores independientes, músicos.</p>
                </div>
                <div class="col-md-4">
                    <h4>Licencias.</h4>
                    <p>Licencia de uso de imágenes, cobras “royalties” sin desprenderte del original.</p>
                    <li><img src="img/servicio2.png" alt="" width="200" height="200"></li>
                    <ul>
                        <li>Licencia no exclusiva o exclusiva</li>
                        <li>Resoluciones para impresión o digital</li>
                        <li>Contratos claros y simples</li>
                    </ul>
                    <p><em>Ideal para:</em> marcas, diseñadores, emprendedores visuales.</p>
                </div>
                <div class="col-md-4">
                    <h4>Educación.</h4>
                    <p>Workshops online en vivo, Genera comunidad y autoridad; modelos “ticket” o suscripción.</p>
                    <li><img src="img/servicio3.png" alt="" width="200" height="200"></li>
                    <ul>
                        <li>Talleres grupales o individuales</li>
                        <li>Temas: pintura libre, ilustración digital, creatividad emocional</li>
                        <li>Se entrega material digital y certificado</li>
                    </ul>
                    <p><strong>¿Te interesa participar?</strong> <a href="/Contacto">Contáctame para conocer fechas y precios.</a></p>
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
