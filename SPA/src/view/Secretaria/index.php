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
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../../../index.php">
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
              
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
  <path d="M8 .5a1.5 1.5 0 0 1 1.06.44l6 6a1.5 1.5 0 0 1-2.12 2.12L8 2.62l-5.94 5.94a1.5 1.5 0 0 1-2.12-2.12l6-6A1.5 1.5 0 0 1 8 .5zm6 7.5v6a1.5 1.5 0 0 1-1.5 1.5H11v-5H5v5H3.5A1.5 1.5 0 0 1 2 14V8a1.5 1.5 0 1 1 3 0v5h6V8a1.5 1.5 0 1 1 3 0z"/>
</svg>
                    <span>Inicio</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                General
            </div>


            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link" href="buscarCita.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-calendar-check" viewBox="0 0 16 16">
  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1zm11.854 3.646a.5.5 0 1 1 .707.708l-4 4a.5.5 0 0 1-.708 0l-2-2a.5.5 0 0 1 .708-.708L9 11.293l3.646-3.647z"/>
</svg>

                    <span>Consultar citas</span></a>
            </li>
        
                  <li class="nav-item active">
                <a class="nav-link" href="generarFactura.php">
                   <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
  <path d="M4 3a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v1h2a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2V3z"/>
  <path d="M4 4v8h8V4H4zm1 1h6v6H5V5z"/>
</svg>

                    <span>Hacer factura</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="crearCliente.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 1a5 5 0 0 0-4.546 2.916A7.487 7.487 0 0 1 8 15c1.658 0 3.182-.526 4.546-1.414A5 5 0 0 0 8 9zm4.5-2a.5.5 0 0 1 .5.5V8h1.5a.5.5 0 0 1 0 1H13v1.5a.5.5 0 0 1-1 0V9H10.5a.5.5 0 0 1 0-1H12V6.5a.5.5 0 0 1 .5-.5z"/>
</svg>

                    <span>Gestionar cliente</span></a>
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
                                        <span class="font-weight-bold">Previene mala atencion!</span>
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
                                    Separa las citas personales a nuestros clientes!
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
                                        Ayudanos a crecer como SPA especialisado de la región.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">No hay mas alertas</a>
                            </div>
                        </li>

                     

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small" id="NombreSesionPaciente">Aca va el nombre de la persona</span>                                <img class="img-profile rounded-circle"
                                    src="../img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                             
                            
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
                    <h1 class="h3 mb-4 text-gray-800">Realizar cita</h1>

                    <div class="row">

                        <div class="col-lg-6">

                            <!-- Circle Buttons -->
                            <div class="card shadow mb-4">
                             
                                <div class="card-body bg-light text-dark">
                                    <form action="#" method="POST">
                                        <div class="form-group">
                                            <label for="nombre">Fecha de la cita:</label>
                                            <input type="date" id="fechaCita" name="nombre" required class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Hora de la cita:</label>
                                            <input type="time" id="horaCita" name="email" required class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="fecha">Cédula:</label>
                                            <input type="number" id="cedulaPaciente" name="fecha" required class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Terapeuta especializado</label>
                                            <select name="tipoCita" id="selectEspecialista" class="form-control">
                                                <!-- Opciones del select -->
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Terapeuta</label>
                                            <select name="terapeuta" id="selectTerapeuta" class="form-control">
                                                <!-- Opciones del select -->
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <button type="button" class="btn btn-primary">Programar cita</button>
                                        </div>
                                    </form>
                                </div>
                                
                            </div>

                        

                        </div>

                        <div class="col-lg-6">

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Informacion importante!!</h6>
                                </div>
                                <div class="card-body">
                                    <p>Recuerda que la cita son programadas a los especialistas de preferencia, tomando asi en cuenta que todo lo que hagas quedara a la espera 
                                        de la persona encargada, tomando en cuenta esto, su cita quedara en pendiente, cuando sea aceptada, le llegara al correo registrado en la base de datos su cita en proceso.
                                    </p>
                                    <a href="#" id="EnviarMensajeLeido" class="btn btn-primary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-flag"></i>
                                        </span>
                                        <span class="text" id="Notificacion">Leído correctamente</span>
                                    </a>
                                    <div class="my-2"></div>
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
                        <span>SPA &copy; ADSO</span>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>
    <script src="../js/demo/ProgramarCita.js"></script>
    <script src="../js/LoginNombrePersona.js"></script>
</body>

</html>