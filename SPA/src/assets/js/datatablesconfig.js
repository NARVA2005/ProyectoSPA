const datatableOptionsFichas = {
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
          } else {
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
  columns: [
    {
      data: null,
      defaultContent: "",
    },
    { data: "id_aspirante" },
    { data: "nombres" },
    { data: "id" },
    { data: "nombre_ficha" },
    { data: "estado" },
  ],

  layout: {
    topCenter: {
      buttons: [
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
        },
      ],
    },
  },
  columnDefs: [
    {
      className: "dt-control",
      orderable: false,
      targets: 0,
    },
    {
      responsivePriority: 1,
      targets: [1],
    },
    {
      responsivePriority: 2,
      targets: 2,
    },
  ],
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
};

const returnDatatableOption = (condition) => {
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
            } else {
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
  };
  if (condition == 0 || condition > 2) {
    datatableOptions.ajax.url = fetchURL[0] + condition;
    datatableOptions.columns = columnConfig[0];
    datatableOptions.layout.topCenter.buttons[1].title =
      "LISTA DE INSCRIPCIONES";
    datatableOptions.layout.topCenter.buttons[2].title =
      "LISTA DE INSCRIPCIONES";
    datatableOptions.layout.topCenter.buttons[3].title =
      "LISTA DE INSCRIPCIONES";
    datatableOptions.layout.topCenter.buttons[1].filename = layoutConfig[0];
    datatableOptions.layout.topCenter.buttons[2].filename = layoutConfig[0];

    datatableOptions.layout.topCenter.buttons[1].exportOptions = {
      columns: [1, 2, 3, 4, 5, 6, 7],
      format: {
        body: function (data, row, column, node) {
          return column === 1
            ? data.replace(/\B(?=(\d{3})+(?!\d))/g, ".")
            : data;
        },
      },
    };
    datatableOptions.layout.topCenter.buttons[2].exportOptions = {
      columns: [1, 2, 3, 4, 5, 6, 7],
      format: {
        body: function (data, row, column, node) {
          return column === 1
            ? data.replace(/\B(?=(\d{3})+(?!\d))/g, ".")
            : data;
        },
      },
    };
    datatableOptions.layout.topCenter.buttons[3].exportOptions = {
      columns: [1, 2, 3, 4, 5, 6, 7],
    };

    datatableOptions.layout.topCenter.buttons.push(
      {
        text: `<i class="fa-regular fa-file-excel"></i>`,
        className: "btn btn-success mx-2 datatable-buttons",
        attr: {
          "data-bs-toggle": "tooltip",
          "data-bs-placement": "top",
          "data-bs-custom-class": "custom-tooltip-excel",
          "data-bs-title": "Generar Excel de base de datos completa",
        },
        action: () => {
          window.open("../controllers/exportall.php", "_blank");
        },
      },
      {
        text: `<i class="fa-regular fa-file-excel"></i>`,
        className: "btn btn-success mx-2 datatable-buttons",
        attr: {
          "data-bs-toggle": "tooltip",
          "data-bs-placement": "top",
          "data-bs-custom-class": "custom-tooltip-excel",
          "data-bs-title": "Generar Excel de base de datos separada",
        },
        action: () => {
          window.open("../controllers/exportallsplit.php", "_blank");
        },
      }
    );

    datatableOptions.columnDefs = columnDefsConfig[0];
  } else if (condition == 1) {
    datatableOptions.ajax.url = fetchURL[0] + condition;
    datatableOptions.columns = columnConfig[1];
    datatableOptions.layout.topCenter.buttons[1].title = "LISTA DE FICHAS";
    datatableOptions.layout.topCenter.buttons[2].title = "LISTA DE FICHAS";
    datatableOptions.layout.topCenter.buttons[3].title = "LISTA DE FICHAS";
    datatableOptions.layout.topCenter.buttons[1].filename = layoutConfig[1];
    datatableOptions.layout.topCenter.buttons[2].filename = layoutConfig[1];

    datatableOptions.layout.topCenter.buttons[1].exportOptions = {
      columns: [1, 2, 3, 4],
    };
    datatableOptions.layout.topCenter.buttons[2].exportOptions = {
      columns: [1, 2, 3, 4],
    };
    datatableOptions.layout.topCenter.buttons[3].exportOptions = {
      columns: [1, 2, 3, 4],
    };

    datatableOptions.columnDefs = columnDefsConfig[1];
  } else if (condition == 2) {
    datatableOptions.ajax.url = fetchURL[0] + condition;
    datatableOptions.columns = columnConfig[2];
    datatableOptions.layout.topCenter.buttons[1].title = "LISTA DE PENDIENTES";
    datatableOptions.layout.topCenter.buttons[2].title = "LISTA DE PENDIENTES";
    datatableOptions.layout.topCenter.buttons[3].title = "LISTA DE PENDIENTES";
    datatableOptions.layout.topCenter.buttons[1].filename = layoutConfig[2];
    datatableOptions.layout.topCenter.buttons[2].filename = layoutConfig[2];

    datatableOptions.layout.topCenter.buttons[1].exportOptions = {
      columns: [1, 2, 3, 4, 5, 6],
      format: {
        body: function (data, row, column, node) {
          return column === 1
            ? data.replace(/\B(?=(\d{3})+(?!\d))/g, ".")
            : data;
        },
      },
    };
    datatableOptions.layout.topCenter.buttons[2].exportOptions = {
      columns: [1, 2, 3, 4, 5, 6],
      format: {
        body: function (data, row, column, node) {
          return column === 1
            ? data.replace(/\B(?=(\d{3})+(?!\d))/g, ".")
            : data;
        },
      },
    };
    datatableOptions.layout.topCenter.buttons[3].exportOptions = {
      columns: [1, 2, 3, 4, 5, 6],
    };

    datatableOptions.layout.topCenter.buttons.push(
      {
        text: `<i class="fa-solid fa-list-check"></i>`,
        className: "btn btn-success mx-2 datatable-buttons",
        attr: {
          "data-bs-toggle": "tooltip",
          "data-bs-placement": "top",
          "data-bs-custom-class": "custom-tooltip-excel",
          "data-bs-title": "Resolver todo",
        },
        action: () => {
          $("#solveAllModal").modal("show");
        },
      },
      {
        text: `<i class="fa-regular fa-calendar-xmark"></i>`,
        className: "btn btn-danger mx-2 datatable-buttons",
        attr: {
          "data-bs-toggle": "tooltip",
          "data-bs-placement": "top",
          "data-bs-custom-class": "custom-tooltip-pdf",
          "data-bs-title": "Descartar todo",
        },
        action: () => {
          $("#discardAllModal").modal("show");
        },
      }
    );

    datatableOptions.columnDefs = columnDefsConfig[2];
  }

  return datatableOptions;
};
const resetTables = () => {
  const tableContainer = document.querySelectorAll(".table-responsive");

  tableContainer[0].innerHTML = `<table id="datatable" class="table table-bordered" width="100%" cellspacing="0">
  <thead>
      <tr>
          <th>#</th>
          <th>Identificación</th>
          <th>Nombres aspirante</th>
          <th>Código de empresa</th>
          <th>Número de ficha</th>
          <th>Nombre del programa</th>
          <th>Vigencia</th>
          <th>Estado</th>
      </tr>
  </thead>
  <tbody>
  </tbody>

</table>`;
  tableContainer[1].innerHTML = `<table id="datatable1" class="table table-bordered" width="100%" cellspacing="0">
  <thead>
      <tr>
          <th>#</th>
          <th>Número de ficha</th>
          <th>Nombre del programa</th>
          <th>Código de empresa</th>
          <th>Vigencia</th>
      </tr>
  </thead>
  <tbody>
  </tbody>

</table>`;
  tableContainer[2].innerHTML = `<table id="datatable2" class="table table-bordered" width="100%" cellspacing="0">
  <thead>
      <tr>
          <th>#</th>
          <th>Identificación</th>
          <th>Nombres aspirante</th>
          <th>Número de ficha</th>
          <th>Nombre del programa</th>
          <th>Detalles</th>
          <th>Estado</th>
          <th>Acción</th>
      </tr>
  </thead>
  <tbody>
  </tbody>

</table>`;

  table1 = $("#datatable");
  table2 = $("#datatable1");
  table3 = $("#datatable2");
  table1.DataTable().destroy();
  table2.DataTable().destroy();
  table3.DataTable().destroy();
  table1.children("tbody").empty();
  table2.children("tbody").empty();
  table3.children("tbody").empty();
};

let table1 = $("#datatable");
table1.dataTable(returnDatatableOption(0));
let table2 = $("#datatable1");
let table3 = $("#datatable2");
