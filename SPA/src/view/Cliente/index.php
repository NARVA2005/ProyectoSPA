<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SPA</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SPA<sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Inicio</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Citas
            </div>

            <li class="nav-item active">
                <a class="nav-link" href="citasProgramadas.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bag-heart" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0M14 14V5H2v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1M8 7.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132"/>
                       
                    </svg>
                    <span>Agendar cita</span></a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link" href="citasPendientes.html">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-ban" viewBox="0 0 16 16">
                        <path d="M15 8a6.97 6.97 0 0 0-1.71-4.584l-9.874 9.875A7 7 0 0 0 15 8M2.71 12.584l9.874-9.875a7 7 0 0 0-9.874 9.874ZM16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0"/>
                      </svg>
                    <span>Citas pendientes</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
           General
            </div>
            <li class="nav-item active">
                <a class="nav-link" href="datosPersonales.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-fingerprint" viewBox="0 0 16 16">
                        <path d="M8.06 6.5a.5.5 0 0 1 .5.5v.776a11.5 11.5 0 0 1-.552 3.519l-1.331 4.14a.5.5 0 0 1-.952-.305l1.33-4.141a10.5 10.5 0 0 0 .504-3.213V7a.5.5 0 0 1 .5-.5Z"/>
                        <path d="M6.06 7a2 2 0 1 1 4 0 .5.5 0 1 1-1 0 1 1 0 1 0-2 0v.332q0 .613-.066 1.221A.5.5 0 0 1 6 8.447q.06-.555.06-1.115zm3.509 1a.5.5 0 0 1 .487.513 11.5 11.5 0 0 1-.587 3.339l-1.266 3.8a.5.5 0 0 1-.949-.317l1.267-3.8a10.5 10.5 0 0 0 .535-3.048A.5.5 0 0 1 9.569 8m-3.356 2.115a.5.5 0 0 1 .33.626L5.24 14.939a.5.5 0 1 1-.955-.296l1.303-4.199a.5.5 0 0 1 .625-.329"/>
                        <path d="M4.759 5.833A3.501 3.501 0 0 1 11.559 7a.5.5 0 0 1-1 0 2.5 2.5 0 0 0-4.857-.833.5.5 0 1 1-.943-.334m.3 1.67a.5.5 0 0 1 .449.546 10.7 10.7 0 0 1-.4 2.031l-1.222 4.072a.5.5 0 1 1-.958-.287L4.15 9.793a9.7 9.7 0 0 0 .363-1.842.5.5 0 0 1 .546-.449Zm6 .647a.5.5 0 0 1 .5.5c0 1.28-.213 2.552-.632 3.762l-1.09 3.145a.5.5 0 0 1-.944-.327l1.089-3.145c.382-1.105.578-2.266.578-3.435a.5.5 0 0 1 .5-.5Z"/>
                        <path d="M3.902 4.222a5 5 0 0 1 5.202-2.113.5.5 0 0 1-.208.979 4 4 0 0 0-4.163 1.69.5.5 0 0 1-.831-.556m6.72-.955a.5.5 0 0 1 .705-.052A4.99 4.99 0 0 1 13.059 7v1.5a.5.5 0 1 1-1 0V7a3.99 3.99 0 0 0-1.386-3.028.5.5 0 0 1-.051-.705M3.68 5.842a.5.5 0 0 1 .422.568q-.044.289-.044.59c0 .71-.1 1.417-.298 2.1l-1.14 3.923a.5.5 0 1 1-.96-.279L2.8 8.821A6.5 6.5 0 0 0 3.058 7q0-.375.054-.736a.5.5 0 0 1 .568-.422m8.882 3.66a.5.5 0 0 1 .456.54c-.084 1-.298 1.986-.64 2.934l-.744 2.068a.5.5 0 0 1-.941-.338l.745-2.07a10.5 10.5 0 0 0 .584-2.678.5.5 0 0 1 .54-.456"/>
                        <path d="M4.81 1.37A6.5 6.5 0 0 1 14.56 7a.5.5 0 1 1-1 0 5.5 5.5 0 0 0-8.25-4.765.5.5 0 0 1-.5-.865m-.89 1.257a.5.5 0 0 1 .04.706A5.48 5.48 0 0 0 2.56 7a.5.5 0 0 1-1 0c0-1.664.626-3.184 1.655-4.333a.5.5 0 0 1 .706-.04ZM1.915 8.02a.5.5 0 0 1 .346.616l-.779 2.767a.5.5 0 1 1-.962-.27l.778-2.767a.5.5 0 0 1 .617-.346m12.15.481a.5.5 0 0 1 .49.51c-.03 1.499-.161 3.025-.727 4.533l-.07.187a.5.5 0 0 1-.936-.351l.07-.187c.506-1.35.634-2.74.663-4.202a.5.5 0 0 1 .51-.49"/>
                      </svg>
                    <span>Datos personales</span></a>
            </li>
           
            <li class="nav-item active">
                <a class="nav-link" href="citasRealizadas.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
                    <span>Citas realizadas</span></a>
            </li>
        

        

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

           
        </ul>
        <!-- End of Sidebar -->

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

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                              Alertas
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">Diciembre 12, 2024</div>
                                        <span class="font-weight-bold">Previene el cancer!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">Diciembre 7, 2024</div>
                                    Separa tus citas personales con el medico general!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">Diciembre 2, 2024</div>
                                        Ayudanos a crecer como hospital de la región.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">No hay mas alertas</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                               Mensajes del centro
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">¡Hola! Me pregunto si me pueden ayudar con un
                                            problema que he estado teniendo.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Tengo las fotos que ordenaste el mes pasado, ¿cómo?
                                            ¿Quieres que te los envíen?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">El informe del mes pasado parece fantástico, estoy muy contento con
                                            El progreso hasta ahora, ¡sigan con el buen trabajo!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">¿Soy un buen chico? La razón por la que pregunto es porque alguien
                                            me dijo que la gente le dice esto a todos los perros, incluso si no son buenos...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">No hay más</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small" id="NombreSesionPaciente">Aca va el nombre de la persona</span>
                                <img class="img-profile rounded-circle"
                                    src="../img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="datosPersonales.html">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Datos personales
                                </a>
                            
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Salir
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Campañas publicitarias</h1>
                       
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Citas generales</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                               Medico general</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Citas hechas por mes
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                               Mensaje</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Siempre pendiente de la vida de nuestros usuarios</h6>
                                   <!--  <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div> -->
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="myAreaChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Prevencion de infecciones sexuales</h6>
                                   
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2">
                                      <img src="data:image/jpeg;base64,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" style="width: 100%;" alt="" srcset="">
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Siempre manejando los mejores medicamnetos</h6>
                                </div>
                                <div class="card-body">
                                    <h4 class="small font-weight-bold">Acetaminofen<span
                                            class="float-right">20%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 20%"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Ibuprofeno<span
                                            class="float-right">40%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 40%"
                                            aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Parasetamol<span
                                            class="float-right">60%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar" role="progressbar" style="width: 60%"
                                            aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Novarable<span
                                            class="float-right">80%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 80%"
                                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Complejo B<span
                                            class="float-right">Complete!</span></h4>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>

                        

                        </div>

                        <div class="col-lg-6 mb-4">

                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Prevenciones</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                            src="data:image/jpeg;base64,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" alt="...">
                                    </div>
                                    <p>Tapar los recipientes con agua, eliminar la basura acumulada en patios y áreas al aire libre, eliminar llantas o almacenamiento en sitios cerrados. Utilizar repelentes en las áreas del cuerpo que están descubiertas. Usar ropa adecuada camisas de manga larga y pantalones largos.</p>
                                    <a target="_blank" rel="nofollow" href="#">Más información&rarr;</a>
                                </div>
                            </div>

                            <!-- Approach -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">¡Todos podemos prevenir los criaderos de mosquitos!</h6>
                                </div>
                                <div class="card-body">
                                    <p>-Eliminando todos los recipientes en desuso que puedan acumular agua (como latas, botellas, neumáticos).
                                       -  Dando vuelta los objetos que se encuentran en el exterior y pueden acumular agua cuando llueve (baldes, palanganas, tambores, botellas).
                                       - Cambiando el agua de bebederos de animales, colectores de desagües de aire acondicionado o lluvia, dentro y fuera de la casa, cada 3 días. Recordá frotar las paredes de los recipientes con una esponja o cepillo a fin de desprender los huevos de mosquito que puedan estar adheridos.
                                       - Rellenando los floreros y portamacetas con arena húmeda.
                                       - Manteniendo los patios y jardines limpios, ordenados y desmalezados.
                                       - Limpiando canaletas y desagües de lluvia de los techos.
                                       - Tapando los tanques y recipientes que se usan para recolectar agua.
                                       - También es importante para prevenir la picadura del mosquito:
                                       - Usar siempre repelentes siguiendo cuidadosamente las recomendaciones del envase.
                                       - Utilizar ropa clara que cubra los brazos y las piernas, especialmente durante las actividades al aire libre.
                                       - Colocar mosquiteros en puertas y ventanas, y cuando sea posible usar ventiladores o aire acondicionado en las habitaciones.
                                       - Proteger cunas y cochecitos de bebés con telas mosquiteras.
                                       - Utilizar repelentes ambientales como tabletas y espirales.</p>
                                    <p class="mb-0">Before working with this theme, you should become familiar with the
                                        Bootstrap framework, especially the utility classes.</p>
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

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/chart-area-demo.js"></script>
    <script src="../js/demo/chart-pie-demo.js"></script>
    <script src="../js/LoginNombrePersona.js"></script>

</body>

</html>