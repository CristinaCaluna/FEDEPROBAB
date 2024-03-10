<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/sign-in.css">
    <link rel="stylesheet" href="/assets/css/util.css">

    <title><?= $titulo ?></title>
    <link rel="shortcut icon" href="/assets/img/boli.png" type="image/x-icon">
</head>

<body style="background-color: #fff;"> 

    <!-- Menú -->
    <div>
        <img src="/assets/img/Dulce (3).png" width="100%" height="450">
    </div>

    <header class="p-3 text-white" style="background-color: darkred;">
        <nav class="navbar border-bottom border-body">
            <a class="d-flex align-items-center mb-2 mb-lg-0">
                <img src="/assets/img/boli.png" width="100" height="100">
            </a>
            <ul class="nav mx-auto col-lg-8">
            <li><strong><front face="arial"> <h6><a href="/inicio" class="nav-link px-8 " style="color:aliceblue" > Inicio</a></h6> </front></strong></li>
              <li><strong><front face="arial"> <h6><a href="/" class="nav-link px-8 " style="color:aliceblue">Organización</a></h6> </front></strong></li>
              <li><strong><front face="arial"> <h6><a href="/" class="nav-link px-8 " style="color:aliceblue" > Eventos deportivos </a></h6> </front></strong></li>
              <li><strong><front face="arial"> <h6><a href="/" class="nav-link px-8" style="color:aliceblue" > Legislación</a></h6> </front></strong></li>
              <li><strong><front face="arial"> <h6><a href="/" class="nav-link px-8" style="color:aliceblue" > Planificación</a></h6> </front></strong></li>
              <li><strong><front face="arial"> <h6><a href="/" class="nav-link px-8" style="color:aliceblue" >LOTAIP</a></h6> </front></strong></li>
              <li><strong><front face="arial"> <h6><a href="/" class="nav-link px-8" style="color:aliceblue" >Transparencia</a></h6> </front></strong></li>
            </ul>
            <div class="text-left">
                <?php if (isset($_SESSION['usuario'])): ?>
                    <strong><a href='/logout' class="btn btn-dark me-2" style="color: aliceblue;">Cerrar Sesión</a></strong>
                <?php else: ?>
                    <strong><a href='/login' class="btn btn-dark me-2" style="color: aliceblue;">Iniciar Sesión</a></strong>
                <?php endif ?>
            </div>
        </nav>
    </header>

    <!-- Contenido -->
    <?= $contenido ?>

    <!-- Pie de página -->
    <footer class="footer p-2 text-white" style="background-color: darkred;">
    <div class="container">
  <div class="row">

  <div class="col-lg-6">
                    <h4>Contacto</h4>
                    <p>Teléfono: 099999999</p>
                </div>
                <div class="col-lg-6">
                    <h4>Síguenos en Redes Sociales</h4>
                    <ul class="social-icons">
                        <li><a href="#" target="_blank"><i class="fab fa-facebook"></i> FACEBOOK</a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-twitter"></i>INSTAGRAM</a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-instagram"></i> YOUTUBE</a></li>
                        
                    </ul>
                </div>
                <br>
                <div class="col-lg-12 text-center">

                    <p>&copy; 2024 FEDEPROBABS </p>
                    
                </div>
            </div>
  </div>
    </footer>

    <!-- Scripts de JavaScript -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>