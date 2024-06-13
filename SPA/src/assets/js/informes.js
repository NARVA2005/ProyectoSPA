let opcion = document.getElementById("opcionInforme");
let fechaInicio = document.getElementById("fechaInicio");
let fechaFin = document.getElementById("fechaFin");
let generarInforme = document.getElementById("generarInforme");

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
          //funcion
        });
    }
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
          //funcion
        });
    }
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
