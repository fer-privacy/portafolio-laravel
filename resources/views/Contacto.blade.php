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

    <!--Contactos --->
    <section id="servicios" class="p-5">
        <div class="container">
            <h2>Servicios</h2>
            <br>
            <div class="row">
                <div class="col-md-4">
                    <h4>Telefono.</h4>
                    <p>Contactanos por medio de nuestro numero de telefono.</p>
                    <img src="img/telefono.png" alt="" width="100" height="100">
                    <ul>
                        <li>0000-0000</li>
                    </ul>
                    <p><em>Horario de Oficina:</em> 8am-4pm</p>
                </div>
                <div class="col-md-4">
                    <img src="img/contactanos.png" alt="" width="350" height="350">
                </div>
                <div class="col-md-4">
                    <h4>Correo</h4>
                    <p>Contactanos con nuestro correo electronico.</p>
                    <img src="img/correo.png" alt="" width="100" height="100">
                    <ul>
                        <li>arte@gmail.com</li>
                    </ul>
                    <p><em>Horario de Oficina:</em> 8am-4pm</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Mensaje -->
    <section id="contacto" class="p-5">
        <div class="container">
            <h2>Contacto</h2>
            <p>Contáctate con nosotros para responder tus dudas.</p>
            <form>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" required>
                </div>
                <div class="mb-3">
                    <label for="correo" class="form-label">Correo electrónico</label>
                    <input type="email" class="form-control" id="correo" required>
                </div>
                <div class="mb-3">
                    <label for="mensaje" class="form-label">Mensaje</label>
                    <textarea class="form-control" id="mensaje" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
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