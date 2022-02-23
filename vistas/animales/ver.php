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
            <a class="navbar-brand" href="#page-top">Start Bootstrap</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <!-- About-->
    <section class="page-section bg-primary" id="about">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8">
                    <img src="assets/img/mascotas/<?php echo $animal->imagen ?>" style="object-fit: contain; width: 100%; height: 400px; margin-bottom: 1rem;" />
                    <h2 class="text-white mt-0 text-center">Adopta a <?php echo $animal->nombre; ?></h2>
                    <hr class="divider divider-light" />
                    <div class="d-flex justify-content-between">
                        <div class="text-white-75 mb-4">
                            <div>
                                <span>Nombre:</span>
                                <span class="h6"><?php echo $animal->nombre; ?></span>
                            </div>
                            <div>
                                <span>Especie:</span>
                                <span class="h6"><?php echo $animal->especie; ?></span>
                            </div>
                            <div>
                                <span>Edad:</span>
                                <span class="h6"><?php echo $animal->edad; ?></span>
                            </div>
                            <div>
                                <span>Dirección:</span>
                                <span class="h6"><?php echo $animal->direccion; ?></span>
                            </div>
                        </div>
                        <div class="d-flex">
                            <?php if (true) { ?>
                                <form style='margin-right: 0.5rem'>
                                    <button class="btn btn-success">Editar</button>
                                </form>
                                <form method='POST' action='animales.php?accion=eliminar'>
                                    <input type='hidden' name='id' value='<?php echo $animal->id ?>' />
                                    <button class="btn btn-danger" onclick="return confirm('Seguro que quiere eliminar?')">Eliminar</button>
                                </form>
                            <?php } ?>
                        </div>
                    </div>
                    <a class="btn btn-light btn-xl" href="mailto:prueba@gmail.com">Ponte en contacto!</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="bg-light py-5">
        <div class="container px-4 px-lg-5">
            <div class="small text-center text-muted">Copyright &copy; 2021 - Company Name</div>
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