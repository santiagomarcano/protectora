<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Protectora</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="index.php">Protectora</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link" href="/animales.php?action=listar">Animales</a></li>
                    <li class="nav-item"><a class="nav-link" href="/login.php">Ingresar</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="page-section bg-dark text-white">
        <div class="container px-4 px-lg-5 text-center">
            <h2 class="mb-4">Encuentra un animal para adoptar</h2>
        </div>
    </section>
    <!-- Animales -->
    <div id="portfolio">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <?php foreach ($animales as $animal) { ?>
                    <div class="col-lg-4 col-sm-6 bloque-mascota">
                        <a class="portfolio-box" href="animales.php?accion=ver&id=<?php echo $animal->id ?>" title="<?php echo $animal->nombre; ?>">
                            <img class="img-fluid" src="assets/img/mascotas/<?php echo $animal->imagen ?>" alt="..." style="object-fit: cover; height: 300px; width: 100%" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50"><?php echo $animal->especie; ?></div>
                                <div class="project-name"><?php echo $animal->nombre; ?></div>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <!-- Call to action-->
    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 col-xl-6 text-center">
                    <h2 class="mt-0">Registra una mascota!</h2>
                    <hr class="divider" />
                    <p class="text-muted mb-5">Registra una mascota para listarla en la web y que puedan adoptarla!</p>
                </div>
            </div>
            <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                <div class="col-lg-6">
                    <form method="POST" action="animales.php?accion=crear" enctype="multipart/form-data">
                        <div class="form-floating mb-3">
                            <input class="form-control" name="nombre" type="text" placeholder="Nombre de mascota..." data-sb-validations="required" />
                            <label for="name">Nombre</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">Un nombre para la mascota es requerido.</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" name="edad" type="number" placeholder="Edad de mascota..." data-sb-validations="required" />
                            <label for="name">Edad</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">Una edad para la mascota es requerido.</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" name="especie" type="text" placeholder="Especie de mascota..." data-sb-validations="required" />
                            <label for="name">Especie</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">Una especie para la mascota es requerido.</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" name="direccion" type="text" placeholder="Dirección de mascota..." data-sb-validations="required" />
                            <label for="name">Dirección</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">Una dirección para la mascota es requerido.</div>
                        </div>
                        <div class="form-floating mb-3">
                            <div for="name" class="input-file btn btn-primary w-100">
                                Escoger imágen
                                <input type="file" name="picture" id="picture" />
                            </div>
                        </div>
                        <div class="d-grid"><button class="btn btn-primary btn-xl" type="submit">Submit</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="bg-light py-5">
        <div class="container px-4 px-lg-5">
            <div class="small text-center text-muted">Copyright &copy; 2022 - Protectora</div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SimpleLightbox plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>