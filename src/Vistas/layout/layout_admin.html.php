<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titulo ?></title>
    <link rel="shortcut icon" href="/assets/img/boli.png" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/util.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
    <!-- Menú -->
    <header class="p-3 text-white" style="background-color: red;">
        <nav class="navbar border-bottom border-body">
        <dIv class ="mx-2 "><front face="arial"> <h1  style="color:aliceblue fs-1 ">FEDEPROBAB</h1> </front></dIv>
               
            <ul class="nav mx-auto col-lg-8">
                <li class="nav-item dropdown">
                    <strong>
                        <h5>
                            <a class="nav-link dropdown-toggle" style="color: aliceblue;" href="#" id="bd-versions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Noticias
                            </a>
                            <div class="dropdown-menu dropdown-menu-right mr-md-0" aria-labelledby="bd-versions">
                                <strong>
                                    <h5><a class="dropdown-item" style="color: black;" href="/admin/inicio">Crear Noticias</a></h5>
                                </strong>
                                <strong>
                                    <h5><a class="dropdown-item" style="color: black;" href="/admin/listado/anuncios">Listar Noticias</a></h5>
                                </strong>
                            </div>
                        </h5>
                    </strong>
                </li>
                <li class="nav-item dropdown">
                    <strong>
                        <h5>
                            <a class="nav-link dropdown-toggle" style="color: aliceblue;" href="#" id="bd-versions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               Usuarios
                            </a>
                            <div class="dropdown-menu dropdown-menu-right mr-md-0" aria-labelledby="bd-versions">
                                <strong>
                                    <h5><a class="dropdown-item" style="color: black;" href="/admin/registrar/adsucursal">Crear Usuario</a></h5>
                                </strong>
                                <strong>
                                    <h5><a class="dropdown-item" style="color: black;" href="/admin/listado/adsucursal">Listar Usuarios </a></h5>
                                </strong>
                            </div>
                        </h5>
                    </strong>
                </li>

                <li ><strong>
                    <h5>
                        <a class="nav-link px-8" style="color: aliceblue;" href="/admin/auditoria/publicaciones" > Auditoria </a>

                    </h5>
                    </strong>
                </li>

                <li>
                    <strong>
                        <h5><a href="/admin/cambio/clave" class="nav-link px-8" style="color: aliceblue;"> Cambiar Contraseña</a></h5>
                    </strong>
                </li>
            </ul>
            <div class="text-end">
                <strong>
                    <a href='/logout' class="btn btn-dark  me-2" style="color: aliceblue;"> Cerrar Sesión</a>
                </strong>
            </div>
        </nav>
    </header>

    <!-- Contenido -->
    <?= $contenido ?>

    <!-- Pie de página -->
    <footer class="footer p-2 text-white" style="background-color: red;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h4>Contacto</h4>
                    <p>Teléfono: 0999999</p>
                </div>
                <div class="col-lg-6">
                    <h4>Síguenos en Redes Sociales</h4>
                    <ul class="social-icons">
                        <li><a href="#" target="_blank"><i class="fab fa-facebook"></i> FACEBOOK</a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-twitter"></i> INSTAGRAM</a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-instagram"></i> YOUTUBE</a></li>
                        
                    </ul>
                </div>
                <br>
                <div class="col-lg-12 text-center">
                    <p>&copy; 2024 FEDEPROBAD </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts de JavaScript -->
    <script src="/assets/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="/assets/js/chechout.js"></script>
    <script src="/src/public/js/main.js" type="module"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script type="text/javascript">
        function mostrarclave1() {
            var cambio = document.getElementById("txtPassword");
            if (cambio.type == "password") {
                cambio.type = "text";
                $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
            } else {
                cambio.type = "password";
                $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
            }
        }

        function mostrarclave2() {
            var cambio = document.getElementById("txt-Password");
            if (cambio.type == "password") {
                cambio.type = "text";
                $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
            } else {
                cambio.type = "password";
                $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
            }
        }
    </script>
</body>

</html>
