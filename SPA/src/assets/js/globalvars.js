// DEFINICIÓN DE VARIABLES GLOBALES, FUNCIONAMIENTO DE LAS TABLAS

const fetchURL = ["../models/returndata.php?datatoload="];

const columnDefault = [
  {
    data: null,
    defaultContent: "",
  },
  {
    data: null,
    defaultContent: `<i class="btn btn-dark action-button fa-solid fa-gears" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip-action" data-bs-title="Opciones"></i>`,
    render: () => {
      tooltipConfig();
    },
  },
  {
    className: "dt-control",
    orderable: false,
    targets: 0,
  },
  {
    className: "text-start",
    targets: 1,
  },
];

const columnConfig = [
  [
    columnDefault[0],
    { data: "id_aspirante" },
    { data: "nombres" },
    { data: "codigo_empresa" },
    { data: "id" },
    { data: "nombre_ficha" },
    { data: "fecha_registro" },
    { data: "estado" },
  ],
  [
    columnDefault[0],
    { data: "id" },
    { data: "nombre_ficha" },
    { data: "codigo_empresa" },
    { data: "fecha_registro" },
  ],
  [
    columnDefault[0],
    { data: "identificacion" },
    { data: "nombres" },
    { data: "numero_ficha" },
    { data: "nombre_programa" },
    { data: "descripcion" },
    { data: null, defaultContent: "En espera" },
    columnDefault[1],
  ],
];

const layoutConfig = [
  function () {
    return "INSCRIPCIONES.." + obtainFilaName();
  },
  function () {
    return "FICHAS.." + obtainFilaName();
  },
  function () {
    return "PENDIENTES.." + obtainFilaName();
  },
];

const columnDefsConfig = [
  [
    columnDefault[2],
    columnDefault[3],
    {
      className: "text-center",
      targets: [3, 4, 6],
    },
    {
      responsivePriority: 1,
      targets: [0, 1],
    },
    {
      responsivePriority: 2,
      targets: 2,
    },
  ],
  [
    columnDefault[2],
    {
      className: "text-center",
      targets: [1, 2, 3, 4],
    },
    {
      responsivePriority: 1,
      targets: [0, 1],
    },
    {
      responsivePriority: 2,
      targets: 2,
    },
  ],
  [
    columnDefault[2],
    columnDefault[3],
    {
      className: "text-center",
      targets: [3, 4, 6, 7],
    },
    {
      responsivePriority: 1,
      targets: [0, 1],
    },
    {
      responsivePriority: 2,
      targets: 7,
    },
  ],
];

const obtainFilaName = () => {
  let fechaHoy = new Date();
  return (
    fechaHoy.getFullYear() +
    "-" +
    fechaHoy.getMonth() +
    "-" +
    fechaHoy.getDate() +
    "." +
    fechaHoy.getHours() +
    "." +
    fechaHoy.getMinutes() +
    "." +
    fechaHoy.getSeconds() +
    "." +
    fechaHoy.getMilliseconds()
  );
};
