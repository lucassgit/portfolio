<?php 
   $pg = "index";
?>

<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="index" class="d-flex flex-column h-100">
    <header class="container">
        <?php include_once("menu.php"); ?>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 mt-4 text-center div-cohete">
                <a href="proyectos.php"><img src="images/cohete.svg" class="cohete"></a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 my-4 mt-sm-5 text-center offset-sm-3 mb-3">
                <div class="input-home">
                    <p class="p-1">Bienvenid@ a mi sitio web sobre programación.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <a href="../portfolio/proyectos.php" class="btn shadow">Conoce mis proyectos</a>
            </div>
        </div>
    </main>

    <footer class="container mt-auto pb-4">

        <div class="row mt-5 pb-3">
            <div class="col-12 col-sm-3 text-center text-sm-start">
                <a href="https://github.com/lucassgit/portfolio.git" target="_blank" title="Github"><i class="fab fa-github"></i></a>
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

    </footer>

</body>

</html>