<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Custom styles for this template-->
    <link href="./src/view/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

<style>
    <style>
    /* Estilos para el navbar */
    .navbar-custom {
        background-color: rgba(0, 0, 0, 0.8); /* Color de fondo semi-opaco */
        border-bottom: 2px solid rgba(255, 255, 255, 0.2); /* Borde inferior semi-transparente */
        border-radius: 10px; /* Bordes redondeados */
    }

    .navbar-brand {
        color: #ffffff; /* Color del texto del brand */
    }

    .navbar-nav .nav-link {
        color: #ffffff; /* Color del texto de los enlaces */
    }

    .navbar-nav .nav-link:hover {
        color: #ffffff; /* Color del texto de los enlaces al pasar el ratón */
        background-color: rgba(255, 255, 255, 0.2); /* Color de fondo semi-transparente al pasar el ratón */
        border-radius: 5px; /* Bordes redondeados al pasar el ratón */
    }
</style>

</style>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">

                            <a class="nav-link " href="./src/view/login.php" id="alertsDropdown" role="button"
                            >
                                <span class="mr-2  d-lg-inline text-gray-700 ">Iniciar</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
</svg>
    
                            </a>
                         
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2  d-lg-inline text-gray-700 ">Registrarse</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="50" fill="currentColor" class="bi bi-door-open" viewBox="0 0 16 16">
  <path d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1"/>
  <path d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117M11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5M4 1.934V15h6V1.077z"/>
</svg>
                                <!-- Counter - Messages -->

                            </a>
                            <!-- Dropdown - Messages -->
                         
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Bienvenidos</span>
                                <img class="img-profile rounded-circle"
                                    src="./src/view/img/logo.png">
                            </a>
                           
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                <style>
    .mi { 
        background-image: url('https://img.freepik.com/fotos-premium/fondo-borroso-azul_491279-1066.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        color: white; /* Color del texto */
    }
    #client-testimonial-carousel { min-height: 200px; }
</style>

<div class="col-lg-10 offset-lg-1 pt-5 pb-5 mi">
  <div id="client-testimonial-carousel" class="carousel slide" data-ride="carousel" style="height:200px;">
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active text-center p-4">
        <blockquote class="blockquote text-center">
          <p class="mb-0"><i class="fa fa-quote-left"></i>Los masajes nos ayudan a retomar la conciencia y el alma, relajándonos y mostrándonos la realidad mejor.</p>
         
          <!-- Client review stars -->
          <p class="client-review-stars">
          <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </p>
        </blockquote>
      </div>
      <div class="carousel-item text-center p-4">
        <blockquote class="blockquote text-center">
          <p class="mb-0"><i class="fa fa-quote-left"></i>Cada caricia durante un masaje es un recordatorio de que merecemos ser tratados con amor y respeto, tanto por nosotros mismos como por los demás.</p>
          <!-- Client review stars -->
          <p class="client-review-stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </p>
        </blockquote>
      </div>
      <div class="carousel-item text-center p-4">
        <blockquote class="blockquote text-center">
          <p class="mb-0"><i class="fa fa-quote-left"></i>En el silencio de la sala de masajes, encontramos la voz suave de nuestro propio ser interior, guiándonos hacia la paz y la plenitud.</p>
          <!-- Client review stars -->
          <p class="client-review-stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </p>
        </blockquote>
      </div>
    </div>
    <ol class="carousel-indicators">
      <li data-target="#client-testimonial-carousel" data-slide-to="0" class="active"></li>
      <li data-target="#client-testimonial-carousel" data-slide-to="1"></li>
      <li data-target="#client-testimonial-carousel" data-slide-to="2"></li>
    </ol>
  </div>
</div>
                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-6 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                               Medicina estetica</div>
                                               <p class="text-xs mb-0">La medicina estética es una disciplina médica que se enfoca en mejorar la apariencia física de las personas a través de procedimientos no quirúrgicos. Estos procedimientos pueden incluir desde tratamientos faciales y corporales.</p>

                                        </div>
                                        <div class="col-auto">
                                       <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxISEhUSEhMVFRUVFRUWFxUVGBUVFhUXFRUWFhUVFRUYHSggGBolHRUVITEhJikrLi
                                       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
                                       6gghgiOrH6lMS9BBQkaNj6hl1Vhp8OicLuF0EFoiGLGiibs0JCZjBs0eiCCokZy1ACZS1hXUEANDWIIIKqFZ//9k=" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-6 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                             Planes corporativos</div>
                                    <p class="text-xs mb-0">Spa udana, Spa samana, Spa vyana, Mineral spa, Spa ananda, Spa prana</p>
                                        </div>
                                        <div class="col-auto">
                                         <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhu92ZH2DxBre-pDm463T9YMq_TYbpzEagbw&s" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                     



                     


                      
                    </div>

                    <!-- Content Row -->


                

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-12 mb-4">

                        <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Quiénes somos?</h6>
    </div>
    <div class="card-body">
        <p>
            Somos un spa dedicado a ofrecer experiencias rejuvenecedoras y personalizadas para que nuestros clientes puedan desconectar del estrés diario y revitalizar cuerpo y mente. Contamos con un equipo de terapeutas altamente cualificados y dedicados, además de sistemas eficientes para garantizar una experiencia óptima. Nos comprometemos a brindar calidad, seguridad y mejora continua en nuestros servicios.
        </p>
    </div>
</div>
<!-- Illustrations -->
<div class="col-lg-12 mb-4">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Contactanos</h6>
        </div>

        <div class="card-body">
            <div class="row">
<div class="col-6">
<div class="col-12">
                <a href="#" id="alertsDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-phone" viewBox="0 0 16 16">
                        <path
                            d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                        <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                    </svg>
                    <span class="mr-2 text-gray-700">(+57) 300 726 9738</span>
                </a>
            </div>
            <br>


            <div class="col-12">
                <a href="#" id="alertsDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-telephone-inbound" viewBox="0 0 16 16">
                        <path
                            d="M15.854.146a.5.5 0 0 1 0 .708L11.707 5H14.5a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 1 0v2.793L15.146.146a.5.5 0 0 1 .708 0m-12.2 1.182a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                    </svg>
                    <span class="mr-2 text-gray-700">604 00 12</span>
                </a>
            </div>
            <br>
            <div class="col-12">
                <a href="#" id="alertsDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-envelope-at-fill" viewBox="0 0 16 16">
                        <path
                            d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2zm-2 9.8V4.698l5.803 3.546zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.5 4.5 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586zM16 9.671V4.697l-5.803 3.546.338.208A4.5 4.5 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671" />
                        <path
                            d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791" />
                    </svg>
                    <span class="mr-2 text-gray-700">spa@gmail.com</span>
                </a>
            </div>
            <br>
            <div class="col-12">
                <a href="#" id="alertsDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                        <path
                            d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                    </svg>
                    <span class="mr-2 text-gray-700">Carrera 8 #12-34 (Cartago valle)</span>
                </a>
            </div>
</div>


<div class="col-6">
<div class="col-12">
                <a href="#" id="alertsDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
</svg>
                    <span class="mr-2 text-gray-700">facebook</span>
                </a>
            </div>
            <br>


            <div class="col-12">
                <a href="#" id="alertsDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
</svg>
                    <span class="mr-2 text-gray-700">Instagram</span>
                </a>
            </div>
            <br>
            <div class="col-12">
                <a href="#" id="alertsDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
  <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15"/>
</svg>
                    <span class="mr-2 text-gray-700">Twitter</span>
                </a>
            </div>
            <br>
            <div class="col-12">
                <a href="#" id="alertsDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
  <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"/>
</svg>
                    <span class="mr-2 text-gray-700">Youtube</span>
                </a>
            </div>
</div>

            </div>
           

        </div>

    </div>
</div>


                        </div>

                   
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>SPA &copy; ADSO 2024</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="./src/view/vendor/jquery/jquery.min.js"></script>
    <script src="./src/view/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="./src/view/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="./src/view/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="./src/view/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="./src/view/js/demo/chart-area-demo.js"></script>
    <script src="./src/view/js/demo/chart-pie-demo.js"></script>

</body>

</html>