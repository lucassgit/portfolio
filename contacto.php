<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="contacto" class="d-flex flex-column h-100">
    <header class="container">
        <nav class="navbar navbar-expand-md mb-4">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>

                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sobre-mi.php">Sobre mi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="proyectos.php">Proyectos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="contacto.php">Contacto</a>
                        </li>
                    </ul>
                    <div class="d-inline">
                        <a href="" class="btn btn-rojo">Descargar mi CV <i class="fas fa-download"></i></a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main class="container">
        <div class="row">
            <div class="col12 pt-3 pb-5">
                <h1>Contacto</h1>
            </div>
            <div class="col-12 col-sm-6">
                <p>Te invito a que te contactes enviandome un mensaje o bien por whatsapp.</p>
            </div>
            <div class="col-12 col-sm-6">
                <form action="" method="POST">
                    <div class="pb-3">
                        <input type="text" name="txtNombre" placeholder="Nombre" class="form-control shadow">
                    </div>
                    <div class="pb-3">
                        <input type="email" name="txtCorreo" placeholder="Correo" class="form-control shadow">
                    </div>
                    <div class="pb-3">
                        <input type="tel" name="txtTelefono" placeholder="Telefono/whatsapp"
                            class="form-control shadow">
                    </div>
                    <div class="pb-3">
                        <textarea name="txtMensaje" id="txtMensaje" class="form-control shadow"
                            placeholder="Escribe aqui tu mensaje"></textarea>
                    </div>
                    <div class="button">
                        <button type="submit" id="btnEnviar" name="btnEnviar" class="btn">ENVIAR</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <footer class="container mt-auto pb-4">

        <div class="row mt-5 pb-3">
            <div class="col-12 col-sm-3 text-center text-sm-start">
                <a href="https://github.com" target="_blank" title="Github"><i class="fab fa-github"></i></a>
                </a>
                <a href="https://www.linkedin.com/in/lucas-oviedo-19a911231" target="_blank" title="Linkedin">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
            <div class="col-12 col-sm-3 text-center text-sm-start pt-2 p-sm-0">
                Sponsor <a href="https://depcsuite.com" target="_blank" title="DEPCSUITE">DePC Suite</a>
            </div>
            <div class="col-12 col-sm-3 text-sm-start pt-2 p-sm-0">
                <a href="mailto:lucaseoviedo.92@gmail.com">lucaseoviedo.92@gmail.com</a>
            </div>
            <div class="whatsapp">
                <a href="https://api.whatsapp.com/send?phone=541123922388" title="Whatsapp">
                    <i class="fab fa-whatsapp"></i></a>
            </div>
        </div>
    </footer>

</body>

</html>