<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

   
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

        <!-- Bootstrap CSS -->

       <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <title>Login Spa</title>
  </head>
  <body>
  

  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('./img/imagenLogin.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <h3>Inicio Sesion <strong>Spa</strong></h3>
            <p class="mb-4">¡Relájate y déjate consentir por nuestras exclusivas terapias y tratamientos diseñados para tu bienestar. ¡Estamos encantados de tenerte con nosotros!.</p>
            <form action="#" method="post">
                  <!-- MENSAJE DE ALERTA -->
                  <div id="mensajeAlerta" class="contenedorAlerta">

                  </div>
                  
                  <!--- FIN MENSAJE ALERTA --->
            <div class="form-floating mb-3">
              <input type="email" class="form-control" id="inputCorreo" placeholder="name@example.com">
              <label for="floatingInput">Ingrese Email</label>
              </div>
                <div class="form-floating mb-3">
                  <input type="password" class="form-control" id="inputContra" placeholder="name@example.com">
                  <label for="floatingInput">Ingrese la Contraseña</label>
                  </div>
              
              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">¿Se te olvido la Contraseña? </span>
                </label>

                <span class="ml-auto"><a href="#" class="forgot-pass"> Recuperar Contraseña</a></span> 
              </div>
              <div class="d-flex mb-5 align-items-center">

              <button style="width: 100%; background-color: #ECD69A;"   id="btnIniciarSesion" type="button"  class="btn btn-block">Iniciar Sesion</button>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    
<script src="../../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
   <script src="./js/login.js"></script>
  </body>
</html>