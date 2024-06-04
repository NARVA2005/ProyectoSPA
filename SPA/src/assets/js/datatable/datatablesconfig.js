// En este archivo se utilizan los objetos del archivo "globalvars.js"

// Objetos utilizados: columnConfig, layoutConfig, columnDefsConfig.

const returnDatatableOption = (condition, URL) => {
  // Se crea el objeto con las opciones predeterminadas para cada tabla, para luego ser cambiadas según la tabla que se vaya a cargar
  const datatableOptions = {
    lengthMenu: [5, 10, 15, 50, 100, 150],
    pageLength: 5,
    responsive: {
      details: {
        type: "column",
        target: 0,
        renderer: function (api, rowIdx, columns) {
          var data = $.map(columns, function (col, i) {
            if (col.columnIndex == 0) {
              return (
                '<tr class="border-1 p-1" data-dt-row="' +
                col.rowIndex +
                '" data-dt-column="' +
                col.columnIndex +
                '">' +
                '<td class="border-1 p-1">' +
                col.title +
                "</td> " +
                "<td>" +
                "#" +
                "</td>" +
                "</tr>"
              );
            } else if (col.title != "Acciones") {
              return (
                '<tr class="border-1 p-1" data-dt-row="' +
                col.rowIndex +
                '" data-dt-column="' +
                col.columnIndex +
                '">' +
                '<td class="border-1 p-1">' +
                col.title +
                "</td> " +
                "<td>" +
                col.data +
                "</td>" +
                "</tr>"
              );
            }
          }).join("");
          return $("<table/>").append(data) ? data : false;
        },
      },
    },
    ajax: {
      url: "",
      dataSrc: "",
    },
    columns: "",
    layout: {
      topCenter: {
        buttons: [
          {
            extend: "colvis",
            text: `<i class="fa-solid fa-eye"></i>`,
            className: "btn btn-secondary mx-2 datatable-buttons",
            attr: {
              "data-bs-toggle": "tooltip",
              "data-bs-placement": "top",
              "data-bs-custom-class": "custom-tooltip-visibility",
              "data-bs-title": "Visibilidad de las columnas",
            },
          },
          {
            extend: "pdf",
            text: `<i class="fa-solid fa-file-pdf"></i>`,
            className: "btn btn-danger mx-2 datatable-buttons",
            title: "",
            filename: "",
            attr: {
              "data-bs-toggle": "tooltip",
              "data-bs-placement": "top",
              "data-bs-custom-class": "custom-tooltip-pdf",
              "data-bs-title": "Generar PDF",
            },
            action: (e, dt, node, config, cb) => {
              DataTable.ext.buttons.pdfHtml5.action.call(
                this,
                e,
                dt,
                node,
                config,
                cb
              );
              tooltipRemove();
            },
          },
          {
            extend: "excel",
            text: `<i class="fa-solid fa-file-excel"></i>`,
            className: "btn btn-success mx-2 datatable-buttons",
            title: "",
            filename: "",
            attr: {
              "data-bs-toggle": "tooltip",
              "data-bs-placement": "top",
              "data-bs-custom-class": "custom-tooltip-excel",
              "data-bs-title": "Generar Excel",
            },
            action: (e, dt, node, config, cb) => {
              DataTable.ext.buttons.excelHtml5.action.call(
                this,
                e,
                dt,
                node,
                config,
                cb
              );
              tooltipRemove();
            },
          },
          {
            extend: "print",
            text: `<i class="fa-solid fa-print"></i>`,
            className: "btn btn-warning mx-2 datatable-buttons",
            title: "",
            filename: "",
            customize: function (win) {
              $(win.document.body).find("h1").css("text-align", "center");
              $(win.document.body).css("font-size", "7px");
              $(win.document.body)
                .find("table")
                .addClass("compact")
                .css("font-size", "inherit");
            },
            attr: {
              "data-bs-toggle": "tooltip",
              "data-bs-placement": "top",
              "data-bs-custom-class": "custom-tooltip-print",
              "data-bs-title": "Imprimir",
            },
            action: (e, dt, node, config, cb) => {
              DataTable.ext.buttons.print.action.call(
                this,
                e,
                dt,
                node,
                config,
                cb
              );

              tooltipRemove();
            },
          },
        ],
      },
    },
    columnDefs: "",
    order: [],
    language: {
      lengthMenu: "Mostrar _MENU_ datos por página",
      zeroRecords: "Ningún dato encontrado",
      info: "_TOTAL_ Registros",
      infoEmpty: "Ningún dato encontrado",
      emptyTable: "Sin datos para mostrar",
      infoFiltered: "(filtrados desde _MAX_ datos totales)",
      search: "Buscar: ",
      searchPlaceholder: "Digite algún parámetro",
      loadingRecords: "Cargando...",
    },
    initComplete: function (settings, json) {
      tooltipConfig();
      $("#datatable" + condition).on("draw.dt", () => {
        tooltipConfig();
      });
    },
  };
  if (condition == 0) {
    // Si la condición es 0, significa que la tabla es Usuario o por defecto la que usted configuró anteriormente.

    // Se modifica el objeto anteriormente definido (datatableOptions), primero se le da la URL para cargar los datos de la tabla
    // Luego se procede asignar los titulos de los botones que exportarán los archivos (PDF,Excel,Print)
    datatableOptions.ajax.url = URL;
    datatableOptions.columns = columnConfig[0];
    datatableOptions.layout.topCenter.buttons[1].title = "LISTA DE USUARIOS";
    datatableOptions.layout.topCenter.buttons[2].title = "LISTA DE USUARIOS";
    datatableOptions.layout.topCenter.buttons[3].title = "LISTA DE USUARIOS";
    datatableOptions.layout.topCenter.buttons[1].filename = layoutConfig[0];
    datatableOptions.layout.topCenter.buttons[2].filename = layoutConfig[0];

    // Función que cambia el valor de un documento, por ejemplo si el documento es 1114149123 este pasará a: 1.114.149.123
    // Esta función se le asigna a los botones que exportan los archivos (PDF,Excel,Print)

    // Botón 1
    datatableOptions.layout.topCenter.buttons[1].exportOptions = {
      columns: [1, 2, 3, 4, 5, 6, 7, 8],
      format: {
        body: function (data, row, column, node) {
          let datos = data + "";
          return column === 1
            ? datos.replace(/\B(?=(\d{3})+(?!\d))/g, ".")
            : datos;
        },
      },
    };

    // Botón 2
    datatableOptions.layout.topCenter.buttons[2].exportOptions = {
      columns: [1, 2, 3, 4, 5, 6, 7, 8],
      format: {
        body: function (data, row, column, node) {
          let datos = data + "";
          return column === 1
            ? datos.replace(/\B(?=(\d{3})+(?!\d))/g, ".")
            : datos;
        },
      },
    };

    // Botón 3
    datatableOptions.layout.topCenter.buttons[3].exportOptions = {
      columns: [1, 2, 3, 4, 5, 6, 7, 8],
      format: {
        body: function (data, row, column, node) {
          let datos = data + "";
          return column === 1
            ? datos.replace(/\B(?=(\d{3})+(?!\d))/g, ".")
            : datos;
        },
      },
    };

    // Se asignan las clases y funcionalidad de las columnas.
    datatableOptions.columnDefs = columnDefsConfig[0];

    // Botón personalizado, este irá al final de todos los demás botones anteriormente asignados
    datatableOptions.layout.topCenter.buttons.push({
      extend: "",
      text: `<i class="fa-solid fa-user-plus"></i>`,
      className: "btn btn-secondary mx-2 datatable-buttons",
      attr: {
        "data-bs-toggle": "tooltip",
        "data-bs-placement": "top",
        "data-bs-custom-class": "custom-tooltip-visibility",
        "data-bs-title": "Agregar usuario",
        onclick: "openModal('#modalUsuario')",
      },
    });
  } else if (condition == 1) {
    // Misma estructura y funcionalidad que la anterior según la configuración que se de en globalvars.js y configuraciones extras.
    datatableOptions.ajax.url = URL;
    datatableOptions.columns = columnConfig[1];
    datatableOptions.layout.topCenter.buttons[1].title = "LISTA DE CLIENTES";
    datatableOptions.layout.topCenter.buttons[2].title = "LISTA DE CLIENTES";
    datatableOptions.layout.topCenter.buttons[3].title = "LISTA DE CLIENTES";
    datatableOptions.layout.topCenter.buttons[1].filename = layoutConfig[1];
    datatableOptions.layout.topCenter.buttons[2].filename = layoutConfig[1];

    datatableOptions.layout.topCenter.buttons[1].exportOptions = {
      columns: [1, 2, 3, 4, 5, 6, 7],
      format: {
        body: function (data, row, column, node) {
          let datos = data + "";
          return column === 1
            ? datos.replace(/\B(?=(\d{3})+(?!\d))/g, ".")
            : datos;
        },
      },
    };
    datatableOptions.layout.topCenter.buttons[2].exportOptions = {
      columns: [1, 2, 3, 4, 5, 6, 7],
      format: {
        body: function (data, row, column, node) {
          let datos = data + "";
          return column === 1
            ? datos.replace(/\B(?=(\d{3})+(?!\d))/g, ".")
            : datos;
        },
      },
    };
    datatableOptions.layout.topCenter.buttons[3].exportOptions = {
      columns: [1, 2, 3, 4, 5, 6, 7],
      format: {
        body: function (data, row, column, node) {
          let datos = data + "";
          return column === 1
            ? datos.replace(/\B(?=(\d{3})+(?!\d))/g, ".")
            : datos;
        },
      },
    };

    datatableOptions.columnDefs = columnDefsConfig[1];

    // Botón personalizado, este irá al final de todos los demás botones anteriormente asignados
    datatableOptions.layout.topCenter.buttons.push({
      extend: "",
      text: `<i class="fa-solid fa-user-plus"></i>`,
      className: "btn btn-secondary mx-2 datatable-buttons",
      attr: {
        "data-bs-toggle": "tooltip",
        "data-bs-placement": "top",
        "data-bs-custom-class": "custom-tooltip-visibility",
        "data-bs-title": "Agregar cliente",
        onclick: "openModal('#modalCliente')",
      },
    });
  } else if (condition == 2) {
    // Misma estructura y funcionalidad que las anteriores según la configuración que se de en globalvars.js y configuraciones extras.

    datatableOptions.ajax.url = URL;
    datatableOptions.columns = columnConfig[2];
    datatableOptions.layout.topCenter.buttons[1].title = "LISTA DE SERVICIOS";
    datatableOptions.layout.topCenter.buttons[2].title = "LISTA DE SERVICIOS";
    datatableOptions.layout.topCenter.buttons[3].title = "LISTA DE SERVICIOS";

    datatableOptions.layout.topCenter.buttons[1].exportOptions = {
      columns: [1, 2, 3, 4, 5, 6],
      format: {
        body: function (data, row, column, node) {
          let datos = data + "";
          return datos;
        },
      },
    };
    datatableOptions.layout.topCenter.buttons[2].exportOptions = {
      columns: [1, 2, 3, 4, 5, 6],
      format: {
        body: function (data, row, column, node) {
          let datos = data + "";
          return datos;
        },
      },
    };
    datatableOptions.layout.topCenter.buttons[3].exportOptions = {
      columns: [1, 2, 3, 4, 5, 6],
      format: {
        body: function (data, row, column, node) {
          let datos = data + "";
          return datos;
        },
      },
    };
    datatableOptions.layout.topCenter.buttons[1].filename = layoutConfig[2];
    datatableOptions.layout.topCenter.buttons[2].filename = layoutConfig[2];

    datatableOptions.columnDefs = columnDefsConfig[2];
    // Botón personalizado, este irá al final de todos los demás botones anteriormente asignados
    datatableOptions.layout.topCenter.buttons.push({
      extend: "",
      text: `<i class="fa-solid fa-bell-concierge"></i>`,
      className: "btn btn-secondary mx-2 datatable-buttons",
      attr: {
        "data-bs-toggle": "tooltip",
        "data-bs-placement": "top",
        "data-bs-custom-class": "custom-tooltip-visibility",
        "data-bs-title": "Agregar servicio",
        onclick: "openModal('#modalServicio')",
      },
    });
  } else if (condition == 3) {
    // Misma estructura y funcionalidad que las anteriores según la configuración que se de en globalvars.js y configuraciones extras.

    datatableOptions.ajax.url = URL;
    datatableOptions.columns = columnConfig[3];
    datatableOptions.layout.topCenter.buttons[1].title = "LISTA DE PRODUCTOS";
    datatableOptions.layout.topCenter.buttons[2].title = "LISTA DE PRODUCTOS";
    datatableOptions.layout.topCenter.buttons[3].title = "LISTA DE PRODUCTOS";
    datatableOptions.layout.topCenter.buttons[1].filename = layoutConfig[3];
    datatableOptions.layout.topCenter.buttons[2].filename = layoutConfig[3];

    datatableOptions.layout.topCenter.buttons[1].exportOptions = {
      columns: [1, 2, 3, 4, 5, 6],
      format: {
        body: function (data, row, column, node) {
          let datos = data + "";
          return datos;
        },
      },
    };
    datatableOptions.layout.topCenter.buttons[2].exportOptions = {
      columns: [1, 2, 3, 4, 5, 6],
      format: {
        body: function (data, row, column, node) {
          let datos = data + "";
          return datos;
        },
      },
    };
    datatableOptions.layout.topCenter.buttons[3].exportOptions = {
      columns: [1, 2, 3, 4, 5, 6],
      format: {
        body: function (data, row, column, node) {
          let datos = data + "";
          return datos;
        },
      },
    };

    datatableOptions.columnDefs = columnDefsConfig[3];
    // Botón personalizado, este irá al final de todos los demás botones anteriormente asignados
    datatableOptions.layout.topCenter.buttons.push({
      extend: "",
      text: `<i class="fa-solid fa-tag"></i>`,
      className: "btn btn-secondary mx-2 datatable-buttons",
      attr: {
        "data-bs-toggle": "tooltip",
        "data-bs-placement": "top",
        "data-bs-custom-class": "custom-tooltip-visibility",
        "data-bs-title": "Agregar producto",
        onclick: "openModal('#modalProducto')",
      },
    });
  }

  return datatableOptions;
};
const resetTables = () => {
  // En controlpanel.php hay contenedores con la clase "table-responsive", estos se encargarán de recargar las tablas
  // El proceso es eliminar todo lo que hay en el contenedor y llenarlo nuevamente
  const tableContainer = document.querySelectorAll(".table-responsive");

  tableContainer[0].innerHTML = `<table id="datatable0" class="table table-bordered" width="100%" cellspacing="0">
  <thead>
      <tr>
          <th>#</th>
          <th>Identificación</th>
          <th>Nombres</th>
          <th>Apellidos</th>
          <th>Teléfono</th>
          <th>Correo</th>
          <th>Horario</th>
          <th>Rol</th>
          <th>Estado</th>
          <th>Acciones</th>
      </tr>
  </thead>
  <tbody>
  </tbody>

</table>`;
  tableContainer[1].innerHTML = `<table id="datatable1" class="table table-bordered" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>#</th>
            <th>Identificación</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Correo</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    </tbody>

  </table>`;
  tableContainer[2].innerHTML = `<table id="datatable2" class="table table-bordered" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>#</th>
            <th>Id</th>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Duración</th>
            <th>Precio</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    </tbody>

  </table>`;
  tableContainer[3].innerHTML = `<table id="datatable3" class="table table-bordered" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>#</th>
            <th>Id</th>
            <th>Stock</th>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Precio</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    </tbody>

  </table>`;
};
