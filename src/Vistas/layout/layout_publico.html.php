<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/sign-in.css">
    <link rel="stylesheet" href="/assets/css/util.css">
    <link rel="stylesheet" href="/assets/css/estilos.css">

    <title><?= $titulo ?></title>
    <link rel="shortcut icon" href="/assets/img/boli.png" type="image/x-icon">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />



        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body style="background-color: #fff;"> 

    <!-- Menú -->


    <header class="p-3 text-white" style="background-color: red;">
    
        <nav class="navbar border-bottom border-body">
            <dIv class ="mx-2 "><front face="arial"> <h1  class=" fs-1" >FEDEPROBAB</h1> </front></dIv>
                   
            <ul class="nav mx-auto col-lg-8">
            <li><strong><front face="arial"> <h6><a href="/inicio" class="nav-link px-8 " style="color:aliceblue" > Inicio</a></h6> </front></strong></li>

            <li >
                <strong>
                    <h6>
                        <a class="nav-link dropdown-toggle" style="color: aliceblue;"  id="bd-versions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Organización
                        </a>
                        <div class="dropdown-menu dropdown-menu-right mr-md-0 " aria-labelledby="bd-versions" >
                        <table>
                                <tr>
                                    <td  style="border-right: 2px solid lightgreen; padding-right: 10px;"> 
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16" style="margin-left: 20px;">
                                            <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022zm2.004.45a7 7 0 0 0-.985-.299l.219-.976q.576.129 1.126.342zm1.37.71a7 7 0 0 0-.439-.27l.493-.87a8 8 0 0 1 .979.654l-.615.789a7 7 0 0 0-.418-.302zm1.834 1.79a7 7 0 0 0-.653-.796l.724-.69q.406.429.747.91zm.744 1.352a7 7 0 0 0-.214-.468l.893-.45a8 8 0 0 1 .45 1.088l-.95.313a7 7 0 0 0-.179-.483m.53 2.507a7 7 0 0 0-.1-1.025l.985-.17q.1.58.116 1.17zm-.131 1.538q.05-.254.081-.51l.993.123a8 8 0 0 1-.23 1.155l-.964-.267q.069-.247.12-.501m-.952 2.379q.276-.436.486-.908l.914.405q-.24.54-.555 1.038zm-.964 1.205q.183-.183.35-.378l.758.653a8 8 0 0 1-.401.432z"/>
                                            <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0z"/>
                                            <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5"/>
                                        </svg>
                                    </td> 

                                    <td  >
                                        <h5 >
                                        <a class="dropdown-item " style="color: black;" href="/historia">Historia</a></h5>
                                    
                                    </td>
                                    <td>
                                        <h5 >
                                        <a class="dropdown-item" style="color: black;" href="/autoridades">Autoridades</a></h5>
                                    </td>
                                    <td>
                                        <h5 >
                                        <a class="dropdown-item" href="/galeria" style="color: black;"> Galería de Presidentes</a>
                                        </h5>
                                    </td >
                                    <td>
                                        <h5 >
                                        <a class="dropdown-item" style="color: black;" href="/direccion">Dirección </a></h5>
                                    </td>
                                    
                                </tr>
                        </table>    
                        </div>
                    </h6>
                </strong>
            </li> 
            
            <li >
             <strong><h6><a class="nav-link dropdown-toggle" style="color: aliceblue;"  id="bd-versions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Eventos Deportivos</a>

            <div class="dropdown-menu dropdown-menu-right mr-md-0 " aria-labelledby="bd-versions" >
                        <table>
                                <tr>
                                    <td  style="border-right: 2px solid lightgreen; padding-right: 10px;"> 
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-dribbble" viewBox="0 0 16 16" style="margin-left: 20px;">
                                             <path fill-rule="evenodd" d="M8 0C3.584 0 0 3.584 0 8s3.584 8 8 8c4.408 0 8-3.584 8-8s-3.592-8-8-8m5.284 3.688a6.8 6.8 0 0 1 1.545 4.251c-.226-.043-2.482-.503-4.755-.217-.052-.112-.096-.234-.148-.355-.139-.33-.295-.668-.451-.99 2.516-1.023 3.662-2.498 3.81-2.69zM8 1.18c1.735 0 3.323.65 4.53 1.718-.122.174-1.155 1.553-3.584 2.464-1.12-2.056-2.36-3.74-2.551-4A7 7 0 0 1 8 1.18m-2.907.642A43 43 0 0 1 7.627 5.77c-3.193.85-6.013.833-6.317.833a6.87 6.87 0 0 1 3.783-4.78zM1.163 8.01V7.8c.295.01 3.61.053 7.02-.971.199.381.381.772.555 1.162l-.27.078c-3.522 1.137-5.396 4.243-5.553 4.504a6.82 6.82 0 0 1-1.752-4.564zM8 14.837a6.8 6.8 0 0 1-4.19-1.44c.12-.252 1.509-2.924 5.361-4.269.018-.009.026-.009.044-.017a28.3 28.3 0 0 1 1.457 5.18A6.7 6.7 0 0 1 8 14.837m3.81-1.171c-.07-.417-.435-2.412-1.328-4.868 2.143-.338 4.017.217 4.251.295a6.77 6.77 0 0 1-2.924 4.573z"/>

                                        </svg>
                                    </td> 

                                    <td  >
                                        <h5 >
                                        <a class="dropdown-item" href="/futbol" style="color: black;" id="futbol"> Futbol
                                    </td>
                                    <td>
                                        <h5 >
                                        <a class="dropdown-item" style="color: black;" href="/bascket">Basketbal</a></h5>
                                    </td >
                                    <td>
                                        <h5 >
                                        <a class="dropdown-item" style="color: black;" href="/ecuavoly">Ecuavoly </a></h5>
                                    </td>
                                    <td>
                                        <h5 >
                                        <a class="dropdown-item" style="color: black;" href="/indor">Indor Futbol </a></h5>
                                    </td>
                                    <td>
                                        <h5 >
                                        <a class="dropdown-item" style="color: black;" href="/futbolsala">Futbol Sala</a></h5>
                                    </td>
                                </tr>
                        </table>    
             </div>




        </h6>
</strong>
</li>


             
            <li>
                <strong>
                    <h6>
                        <a class="nav-link dropdown-toggle" style="color: aliceblue;"  id="bd-versions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Filiales 
                        </a>
                        <div class="dropdown-menu dropdown-menu-right mr-md-0 " aria-labelledby="bd-versions" >
                        <table>
                
                                <tr>
                                    <td  style="border-right: 2px solid lightgreen; padding-right: 10px;"> 
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-dribbble" viewBox="0 0 16 16" style="margin-left: 20px;">
                                             <path fill-rule="evenodd" d="M8 0C3.584 0 0 3.584 0 8s3.584 8 8 8c4.408 0 8-3.584 8-8s-3.592-8-8-8m5.284 3.688a6.8 6.8 0 0 1 1.545 4.251c-.226-.043-2.482-.503-4.755-.217-.052-.112-.096-.234-.148-.355-.139-.33-.295-.668-.451-.99 2.516-1.023 3.662-2.498 3.81-2.69zM8 1.18c1.735 0 3.323.65 4.53 1.718-.122.174-1.155 1.553-3.584 2.464-1.12-2.056-2.36-3.74-2.551-4A7 7 0 0 1 8 1.18m-2.907.642A43 43 0 0 1 7.627 5.77c-3.193.85-6.013.833-6.317.833a6.87 6.87 0 0 1 3.783-4.78zM1.163 8.01V7.8c.295.01 3.61.053 7.02-.971.199.381.381.772.555 1.162l-.27.078c-3.522 1.137-5.396 4.243-5.553 4.504a6.82 6.82 0 0 1-1.752-4.564zM8 14.837a6.8 6.8 0 0 1-4.19-1.44c.12-.252 1.509-2.924 5.361-4.269.018-.009.026-.009.044-.017a28.3 28.3 0 0 1 1.457 5.18A6.7 6.7 0 0 1 8 14.837m3.81-1.171c-.07-.417-.435-2.412-1.328-4.868 2.143-.338 4.017.217 4.251.295a6.77 6.77 0 0 1-2.924 4.573z"/>

                                        </svg>
                                    </td> 

                                    <td  >
                                        <h6 >
                                        <a class="dropdown-item" href="/filial" style="color: black;"> L.Barrial Guaranda </a>
                                    </td>
                                    <td>
                                        <h6 >
                                        <a class="dropdown-item" style="color: black;" href="/filial1">L.Barrial Dr. “Ángel Polibio Chaves”</a></h6>
                                    </td >
                                    <td>
                                        <h6 >
                                        <a class="dropdown-item" style="color: black;" href="/filial2">L.Barrial San Miguel  </a></h6>
                                    </td>
                                    <td  >
                                        <h6 >
                                        <a class="dropdown-item" href="/filial3" style="color: black;"> L.Guaranda </a>
                                    </td>
                                   
                                    
                                    
                                </tr>
                                <tr>
                                <td  style="border-right: 2px solid lightgreen; padding-right: 10px;"> </td>
                                     <td  >
                                        <h6>
                                        <a class="dropdown-item" href="/filial4" style="color: black;"> L.Guanujo </a>
                                    </td>
                                    <td  >
                                        <h6 >
                                        <a class="dropdown-item" href="/filial5" style="color: black;"> L.Salinas </a>
                                    </td>
                                    <td  >
                                        <h6>
                                        <a class="dropdown-item" href="/filial6" style="color: black;"> L.Simiatug</a>
                                    </td>
                                    <td  >
                                        <h6 >
                                        <a class="dropdown-item" href="/filial7" style="color: black;"> L.Chillanes</a>
                                    </td>
                                   
                                    
                                    
                                </tr>
                                <tr>
                                <td  style="border-right: 2px solid lightgreen; padding-right: 10px;"> </td>
                                    
                                    <td  >
                                        <h6 >
                                        <a class="dropdown-item" href="/filial8" style="color: black;"> L.San Pablo de Atenas</a>
                                    </td>
                                    <td  >
                                        <h6 >
                                        <a class="dropdown-item" href="/filial9" style="color: black;"> L.San Luis de Pambil  </a>
                                    </td>
                                    
                                    
                                </tr>
                        </table>    
                        </div>
                    </h6>
                </strong>
            </li> 
             
             

            <li><strong><front face="arial"> <h6><a href="/legislacion" class="nav-link px-8 " style="color:aliceblue" > Legislación</a></h6> </front></strong></li>

            <li >
                <strong>
                    <h6>
                        <a class="nav-link dropdown-toggle" style="color: aliceblue;"  id="bd-versions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Estadística 
                        </a>
                        <div class="dropdown-menu dropdown-menu-right mr-md-0 " aria-labelledby="bd-versions" >
                        <table>
                                <tr>
                                    <td  style="border-right: 2px solid lightgreen; padding-right: 10px;"> 
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16" style="margin-left: 20px;">
                                            <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022zm2.004.45a7 7 0 0 0-.985-.299l.219-.976q.576.129 1.126.342zm1.37.71a7 7 0 0 0-.439-.27l.493-.87a8 8 0 0 1 .979.654l-.615.789a7 7 0 0 0-.418-.302zm1.834 1.79a7 7 0 0 0-.653-.796l.724-.69q.406.429.747.91zm.744 1.352a7 7 0 0 0-.214-.468l.893-.45a8 8 0 0 1 .45 1.088l-.95.313a7 7 0 0 0-.179-.483m.53 2.507a7 7 0 0 0-.1-1.025l.985-.17q.1.58.116 1.17zm-.131 1.538q.05-.254.081-.51l.993.123a8 8 0 0 1-.23 1.155l-.964-.267q.069-.247.12-.501m-.952 2.379q.276-.436.486-.908l.914.405q-.24.54-.555 1.038zm-.964 1.205q.183-.183.35-.378l.758.653a8 8 0 0 1-.401.432z"/>
                                            <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0z"/>
                                            <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5"/>
                                        </svg>
                                    </td> 

                                    <td  >
                                        <h5 >
                                        <a class="dropdown-item" href="/galeria" style="color: black;"> Galeria de Presidentes
                                        </a>
                                    </td>
                                    <td>
                                        <h5 >
                                        <a class="dropdown-item" style="color: black;" href="/historia">Historia</a></h5>
                                    </td >
                                    <td>
                                        <h5 >
                                        <a class="dropdown-item" style="color: black;" href="/direccion">Dirección Actual</a></h5>
                                    </td>
                                </tr>
                        </table>    
                        </div>
                    </h6>
                </strong>
            </li> 

            <li >
                <strong>
                    <h6>
                        <a class="nav-link dropdown-toggle" style="color: aliceblue;"  id="bd-versions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Trasparencia
                        </a>
                        <div class="dropdown-menu dropdown-menu-right mr-md-0 " aria-labelledby="bd-versions" >
                        <table>
                                <tr>
                                    <td  style="border-right: 2px solid lightgreen; padding-right: 10px;"> 
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16" style="margin-left: 20px;">
                                            <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022zm2.004.45a7 7 0 0 0-.985-.299l.219-.976q.576.129 1.126.342zm1.37.71a7 7 0 0 0-.439-.27l.493-.87a8 8 0 0 1 .979.654l-.615.789a7 7 0 0 0-.418-.302zm1.834 1.79a7 7 0 0 0-.653-.796l.724-.69q.406.429.747.91zm.744 1.352a7 7 0 0 0-.214-.468l.893-.45a8 8 0 0 1 .45 1.088l-.95.313a7 7 0 0 0-.179-.483m.53 2.507a7 7 0 0 0-.1-1.025l.985-.17q.1.58.116 1.17zm-.131 1.538q.05-.254.081-.51l.993.123a8 8 0 0 1-.23 1.155l-.964-.267q.069-.247.12-.501m-.952 2.379q.276-.436.486-.908l.914.405q-.24.54-.555 1.038zm-.964 1.205q.183-.183.35-.378l.758.653a8 8 0 0 1-.401.432z"/>
                                            <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0z"/>
                                            <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5"/>
                                        </svg>
                                    </td> 

                                    <td  >
                                        <h5 >
                                        <a class="dropdown-item" href="/galeria" style="color: black;" > Galeria de Presidentes
                                        </a>
                                    </td>
                                    <td>
                                        <h5 >
                                        <a class="dropdown-item" style="color: black;" href="/historia">Historia</a></h5>
                                    </td >
                                    <td>
                                        <h5 >
                                        <a class="dropdown-item" style="color: black;" href="/direccion">Dirección Actual</a></h5>
                                    </td>
                                </tr>
                        </table>    
                        </div>
                    </h6>
                </strong>
            </li> 
                   
            </ul>

            <ul class="navbar-nav flex-row flex-wrap ms-md-auto">
                <li class="nav-item col-6 col-lg-auto" >
                    <a class="nav-link py-2 px-0 px-lg-2" style="color:aliceblue" href="https://www.facebook.com/p/Fedeprobab-Bol%C3%ADvar-100075558387597/?_rdr" target="_blank" rel="noopener">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16"><title>Facebook</title>
                    <path fill="currentColor" fill-rule="evenodd" d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"></path></svg>
                    <small class="d-lg-none ms-2"><front style="vertical-align: inherit;"><front style="vertical-align: inherit;">Facebook</front></front></small>
                    </a>
                </li>
                <li class="nav-item col-6 col-lg-auto">
                    <a class="nav-link py-2 px-0 px-lg-2" style="color:aliceblue" href="https://instagram.com" target="_blank" rel="noopener">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16"><title>Instagram</title>
                    <path fill="currentColor" d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"></path></svg>
                    <small class="d-lg-none ms-2"><front style="vertical-align: inherit;"><rfont style="vertical-align: inherit;">Instagram</front></front></small>
                    </a>
                </li>
                <li class="nav-item col-6 col-lg-auto">
                    <a class="nav-link py-2 px-0 px-lg-2" style="color:aliceblue"  href="https://youtube.com" target="_blank" rel="noopener">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16"> <title>Youtube</title>
                    <path fill="currentColor" d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"></path></svg>
                    <small class="d-lg-none ms-2"><front style="vertical-align: inherit;"><front style="vertical-align: inherit;">Youtube</front></front></small>
                    </a>
                </li>
             </ul><br><br>

            <div class="navbar-nav flex-row flex-wrap ms-md-auto">
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
 

<br><br><br><br><br>

    <!-- Pie de página -->
    <footer class="footer p-2 text-white" style="background-color: red;">
    <div class="container">
  
                <div class="col-lg-12 text-center">

                    <p>&copy; FEDEPROBAB 2024, Derechos Reservados </p>
                    
                </div>
         
  </div>
    </footer>

    <!-- Scripts de JavaScript -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="path/to/jquery.min.js"></script>
<script src="path/to/popper.min.js"></script>
<script src="path/to/bootstrap.min.js"></script>
</body>

</html>