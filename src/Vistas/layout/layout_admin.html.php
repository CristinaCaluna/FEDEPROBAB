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
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

    
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
                            <div class="dropdown-menu dropdown-menu-right mr-md-0" aria-labelledby="bd-versions" >
                            <table>
                                <tr>
                                    <td  style="border-right: 2px solid lightgreen; padding-right: 10px;"> 
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-clipboard2" viewBox="0 0 16 16" style="margin-left: 10px;">
                                    <path d="M3.5 2a.5.5 0 0 0-.5.5v12a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5v-12a.5.5 0 0 0-.5-.5H12a.5.5 0 0 1 0-1h.5A1.5 1.5 0 0 1 14 2.5v12a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 14.5v-12A1.5 1.5 0 0 1 3.5 1H4a.5.5 0 0 1 0 1z"/>
                                    <path d="M10 .5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5.5.5 0 0 1-.5.5.5.5 0 0 0-.5.5V2a.5.5 0 0 0 .5.5h5A.5.5 0 0 0 11 2v-.5a.5.5 0 0 0-.5-.5.5.5 0 0 1-.5-.5"/>
                                    </svg>
                                    </td> 
                                    <td>
                                    <h5>
                                                <a class="dropdown-item" href="/admin/inicio" style="color: black;">Crear Noticias&nbsp;  
                                                                                                  
                                                </a>
                                                </h5>
                                    </td>
                                    <td>
                                    <h5><a class="dropdown-item" style="color: black;" href="/admin/listado/anuncios">Listar Noticias&nbsp;  
                                                                                  
                                                </a></h5>
                                    </td>
                                
                                </tr>
                          </table>
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
                                <table>
                                    <tr>

                                        <td  style="border-right: 2px solid lightgreen; padding-right: 10px;"> 
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-person-fill-add" viewBox="0 0 16 16" style="margin-left: 10px;">
                                            <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                                            <path d="M2 13c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4"/>
                                            </svg>
                                        </td> 
                                        <td>
                                        <h5><a class="dropdown-item" style="color: black;" href="/admin/registrar/adsucursal">Crear Usuario
                                            
                                        </a></h5>
                                        </td>
                                        <td>
                                        <h5><a class="dropdown-item" style="color: black;" href="/admin/listado/adsucursal">Listar Usuarios 
                                            
                                        </a></h5>  
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </h5>
                    </strong>
                </li>


                <li ><strong>
                    <h5>
                        <a class="nav-link px-8" style="color: aliceblue;" href="/admin/registrar/evento_deportivo" > Eventos Deportivos</a>

                    </h5>
                    </strong>
                </li>

                <li ><strong>
                    <h5>
                        <a class="nav-link px-8" style="color: aliceblue;" href="/admin/auditoria/publicaciones" > Auditoria </a>

                    </h5>
                    </strong>
                </li>

                <li ><strong>
                    <h5>
                        <a class="nav-link px-8" style="color: aliceblue;" href="/admin/transparencia" > Transparencia </a>

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
    <br><br>
    <footer class="footer p-2 text-white" style="background-color: red;">
        <div class="container">
            <div class="row">
 
                <br>
                <div class="col-lg-12 text-center">
                    <p>&copy;  FEDEPROBAD 2024, Derechos reservados</p>
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
