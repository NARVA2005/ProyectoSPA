let opcion = document.getElementById("opcionInforme");
let fechaInicio = document.getElementById("fechaInicio");
let fechaFin = document.getElementById("fechaFin");
let generarInforme = document.getElementById("generarInforme");
let mensaje = document.getElementById("mensaje");

// opcion.addEventListener("change", function () {
//   if (opcion.value == "Ingresos" || opcion.value == "Ocupacion") {
//     fechaInicio.removeAttribute("disabled");
//     fechaFin.removeAttribute("disabled");
//   } else {
//     fechaInicio.setAttribute("disabled", "");
//     fechaFin.setAttribute("disabled", "");
//   }
// });

generarInforme.addEventListener("click", function () {
  if (fechaFin.value == "" || fechaInicio.value == "") {
    mensaje.innerText = "Seleccione el límite de búsqueda, por favor";
    mensaje.setAttribute("class", "bg-warning rounded p-2 m-3  text-white");
    return;
  }
  if (opcion.value == "Ingresos") {
    let fechaInicioAdaptada = fechaInicio.value;
    let fechaFinAdaptada = fechaFin.value;

    mensaje.innerText = "";
    mensaje.setAttribute("class", "");
    document.querySelectorAll(
      ".table-responsive"
    )[6].innerHTML = `<table id="datatable6" class="table table-bordered" width="100%" cellspacing="0"><thead><tr><td>Servicio</td><td>Total</td></tr></thead><tbody></tbody></table>`;
    $("#datatable6").dataTable(
      returnDatatableOption(
        6,
        "../controller/Data/graphsinfo.php?query=ingresos&fechaInicio=" +
          fechaInicioAdaptada +
          "&fechaFin=" +
          fechaFinAdaptada
      )
    );
  } else if (opcion.value == "Ocupacion") {
    {
      fetch("../controller/Data/graphsinfo.php?query=ocupacion")
        .then(function (response) {
          return response.json();
        })

        .then(function (data) {
          console.log(data);
          mensaje.innerText = "";
          mensaje.setAttribute("class", "");
          //funcion
        });
    }
  } else if (opcion.value == "Clientes") {
    document.querySelectorAll(
      ".table-responsive"
    )[6].innerHTML = `<table id="datatable6" class="table table-bordered" width="100%" cellspacing="0"><thead><tr><td>Identificación</td><td>Nombres</td><td>Apellidos</td><td>Nombres</td><td>Nombre servicio</td><td>Frecuencia</td></tr></thead><tbody></tbody></table>`;
    $("#datatable6").dataTable(
      returnDatatableOption(
        8,
        "../controller/Data/graphsinfo.php?query=clientes"
      )
    );
  } else if (opcion.value == "Inventario") {
    {
      fetch("../controller/Data/graphsinfo.php?query=inventario")
        .then(function (response) {
          return response.json();
        })

        .then(function (data) {
          console.log(data);
          mensaje.innerText = "";
          mensaje.setAttribute("class", "");
        });
    }
  }
});
