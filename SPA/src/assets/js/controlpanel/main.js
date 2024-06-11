//Configuración general de elementos
$.notify.defaults({
  style: "bootstrap",
  showDuration: 250,
  autoHide: true,
  autoHideDelay: 3000,
  arrowShow: true,
  elementPosition: "bottom center",
  globalPosition: "right bottom",
});

// Configuración del tooltip, Bootstrap
const tooltipConfig = () => {
  const tooltipTriggerList = document.querySelectorAll(
    '[data-bs-toggle="tooltip"]'
  );
  const tooltipList = [...tooltipTriggerList].map(
    (tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl)
  );
};

const tooltipRemove = () => {
  document.querySelectorAll(".tooltip").forEach((element) => {
    element.remove();
  });
};
tooltipConfig();

// Gestionar modales

const openModal = (target) => {
  $(target).modal("show");
};

// Elementos
let globalModal = "";

const idSearchUser = document.querySelector("#idSearchUser");
const idSearchClient = document.querySelector("#idSearchClient");
const idSearchService = document.querySelector("#idSearchService");
const idSearchProduct = document.querySelector("#idSearchProduct");
const idSearchquotes= document.querySelector("#idSearchquotes");
const filterUser = document.querySelector("#filterUser");

// Definimos un FormData global, el que contendrá los datos de todos los modales y operaciones.
let formData = new FormData();

const handleListAll = (target, action) => {
  resetTables();
  const carpets = ["Administrador", "Data"];
  const actionTarget = [
    "usersinfo.php",
    "clientsinfo.php",
    "servicesinfo.php",
    "productsinfo.php",
    "appointmentsinfo.php",
  ];
  const actionParams = [
    `rol=${filterUser.value}&all=true`,
    "all=true",
    "all=true",
    "all=true",
    "all=true",
  ];

  $("#datatable" + action).dataTable(
    returnDatatableOption(
      action,
      `../controller/${carpets[target]}/${actionTarget[action]}?${actionParams[action]}`
    )

  );
  tooltipRemove();
};

const handleSearch = (target, action) => {
  resetTables();
  const carpets = ["Administrador", "Data"];
  const actionTarget = [
    "usersinfo.php",
    "clientsinfo.php",
    "servicesinfo.php",
    "productsinfo.php",
    "appointmentsinfo.php",
  ];
  const actionParams = [
    idSearchUser.value,
    idSearchClient.value,
    idSearchService.value,
    idSearchProduct.value,
    idSearchquotes.value,
  ];
  $("#datatable" + action).dataTable(
    returnDatatableOption(
      action,
      `../controller/${carpets[target]}/${actionTarget[action]}?id=${actionParams[action]}`
    )
  );
  tooltipRemove();
};

// Métodos POST Y PUT que servirán para realizar todas las operaciones de las tablas, crear, editar, obtener datos etc..
const handleRequest = (element, target, method, action) => {
  prepareFormData(element);
  const urls = {
    post: [
      "../controller/Administrador/createuser.php",
      "../controller/Create/createclient.php",
      "../controller/Create/createservice.php",
      "../controller/Create/createproduct.php",

    ],
    put: [
      "../controller/Administrador/edituser.php",
      "../controller/Edit/editclient.php",
      "../controller/Edit/editservice.php",
      "../controller/Edit/editproduct.php",
      "../controller/Edit/editquote.php",
    ],
    status: [
      "../controller/Administrador/statususer.php",
      "../controller/Status/statusclient.php",
      "../controller/Status/statusservice.php",
      "../controller/Status/statusproduct.php",
      "../controller/Status/statusquote.php",
    ],
  };

  const successUrls = [
    "../controller/Administrador/usersinfo.php",
    "../controller/Data/clientsinfo.php",
    "../controller/Data/servicesinfo.php",
    "../controller/Data/productsinfo.php",
    "../controller/Data/appointmentsinfo.php",
  ];

  const url = urls[action][target];
  const success = successUrls[target];

  fetch(url, {
    method: method,
    body: formData,
  })
    .then((res) => res.json())
    .then((res) => {
      $.notify(res.data, res.response);
      if (res.response === "success") {
        resetTables();
        $("#datatable" + target).dataTable(
          returnDatatableOption(target, success)
        );
        clearData(element);
        if (action != "post") {
          $(globalModal).modal("hide");
        }
      }
    });
};

// Método para las funciones editar y cambiar estado
const handleModal = (element, target, action) => {
  const modals = [
    ["#editModalUsuario", "#statusModalUsuario"],
    ["#editModalCliente", "#statusModalCliente"],
    ["#editModalServicio", "#statusModalServicio"],
    ["#editModalProducto", "#statusModalProducto"],
    ["#editModalquote", "#statusModalquote"],
  ];
  globalModal = modals[target][action];
  const elements = Array.from(element.parentElement.parentElement.children);
  elements.shift();
  elements.pop();
  elements.pop();
  const newElements = elements.map((e) => {
    return e.innerHTML;
  });
  fillData(modals[target][action], newElements);
};

// Fin de los métodos

// Función para llenar el FormData
const prepareFormData = (element) => {
  formData = new FormData();
  // Recorremos los inputs y select del formulario, luego de eso se procede a manipular el FormData con esos datos.
  element.parentElement.parentElement.children[1]
    .querySelectorAll("input")
    .forEach((e) => {
      const attributeName = e.attributes["name"].value;
      formData.append(attributeName, e.value);
    });
  element.parentElement.parentElement.children[1]
    .querySelectorAll("select")
    .forEach((e) => {
      const attributeName = e.attributes["name"].value;
      formData.append(attributeName, e.value);
    });
};

// Función para limpiar los datos de la modal
const clearData = (element) => {
  element.parentElement.parentElement.children[1]
    .querySelectorAll("input")
    .forEach((e) => {
      e.value = "";
    });
};

//Recopilar los datos guardados en los options de forma dinamica
document.addEventListener("DOMContentLoaded", function() {
  fetch('../controller/Edit/prueba.php')
    .then(response => response.json())
    .then(data => {
      const select = document.getElementById('serviciosID');
      data.forEach(servicio => {
        const option = document.createElement('option');
        option.value = servicio.id;
        option.text = servicio.nombre;
        select.add(option);
      });
    })
    .catch(error => {
      console.error('Error loading services:', error);
    });
});



const fillData = (modal, data) => {
  let index = 0;
  const element = document.querySelector(modal);
  element.querySelectorAll("input").forEach((e, i) => {
    e.value = data[i];
    index++;
  });
  data.splice(0, index - 1);
  element.querySelectorAll("select").forEach((e) => {
    for (let i = 0; i < e.options.length; i++) {
      for (let j = 0; j < data.length; j++) {
        if (
          e.options[i].value.toUpperCase() == data[j].toUpperCase() ||
          e.options[i].text.toUpperCase() == data[j].toUpperCase()
        ) {
          e.selectedIndex = i;
        }
      }
    }
  });
  modal == "#editModalUsuario"
    ? (element.querySelectorAll("input")[5].value = "")
    : "";
  openModal(modal);
};
