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
                            <table>
                                <tr>
                                    <td>
                                    <h5>
                                                <a class="dropdown-item" href="/admin/inicio" style="color: black;">Crear Noticias&nbsp;  
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                                </svg>&nbsp;
                                                    
                                                </a>
                                                </h5>
                                    </td>
                                    <td>
                                    <h5><a class="dropdown-item" style="color: black;" href="/admin/listado/anuncios">Listar Noticias&nbsp;  
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-card-checklist" viewBox="0 0 16 16">
                                                    <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2z"/>
                                                    <path d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0M7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0"/>
                                                </svg>&nbsp;                                    
                                                </a></h5>
                                    </td>
                                
                                </tr>
                          </table>
                            </div>
                        </h5>
                    </strong>
                </li>

                <li>
                    <strong>
                        <h5><a href="/adsucursal/cambio/clave" class="nav-link px-8" style="color: aliceblue;"> Cambiar Contraseña</a></h5>
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
