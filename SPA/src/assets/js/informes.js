let opcion = document.getElementById("opcionInforme");
let fechaInicio = document.getElementById("fechaInicio");
let fechaFin = document.getElementById("fechaFin");
let generarInforme = document.getElementById("generarInforme");
let mensaje = document.getElementById("mensaje");

opcion.addEventListener("change", function () {
  if (opcion.value == "Ingresos" || opcion.value == "Ocupacion") {
    fechaInicio.removeAttribute("disabled");
    fechaFin.removeAttribute("disabled");
  } else {
    fechaInicio.setAttribute("disabled", "");
    fechaFin.setAttribute("disabled", "");
  }
});

generarInforme.addEventListener("click", function () {
  if (
    opcion.value == "Ingresos" &&
    fechaFin.value != "" &&
    fechaInicio.value != ""
  ) {
    {
      let fechaInicioAdaptada = fechaInicio.value
      let fechaFinAdaptada = fechaFin.value
      
          fetch("../controller/Data/graphsinfo.php?query=ingresos&fechaInicio="+fechaInicioAdaptada+"&fechaFin="+fechaFinAdaptada)
        .then(function (response) {
          return response.json();
        })

        .then(function (data) {
          console.log(data);
          mensaje.innerText = ""
          mensaje.setAttribute("class","")
          //funcion
        });
      
    }
  }
  else{
    mensaje.innerText = "Seleccione el límite de búsqueda, por favor"
    mensaje.setAttribute("class","bg-warning rounded p-2 m-3  text-white")
  }

  if (
    opcion.value == "Ocupacion" &&
    fechaFin.value != "" &&
    fechaInicio.value != ""
  ) {
    {
      fetch("../controller/Data/graphsinfo.php?query=ocupacion")
        .then(function (response) {
          return response.json();
        })

        .then(function (data) {
          console.log(data);
          mensaje.innerText = ""
          mensaje.setAttribute("class","")
          //funcion
        });
    }

  }
  else{
    mensaje.innerText = "Seleccione el límite de búsqueda, por favor"
    mensaje.setAttribute("class","bg-warning rounded p-2 m-3 text-white")
  }

  if (opcion.value == "Clientes") {
    fetch("../controller/Data/graphsinfo.php?query=clientes")
      .then(function (response) {
        return response.json();
      })

      .then(function (data) {
        console.log(data);
        //funcion
      });
  }

  if (opcion.value == "Inventario") {
 

    {fetch("../controller/Data/graphsinfo.php?query=inventario")
    .then(function (response) {
      return response.json();
    })
  
    .then(function (data) {
    console.log(data)
 //funcion
 
    })
    }


  }
});
