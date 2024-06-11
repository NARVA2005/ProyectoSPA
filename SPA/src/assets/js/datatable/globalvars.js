// DEFINICIÓN DE VARIABLES GLOBALES, FUNCIONAMIENTO DE LAS TABLAS

// Botones y objetos con clases que serán predeterminadas (solo se usan en este archivo).
const columnDefault = [
  // Parte de columnConfig, este será la primera columna siempre de TODAS las tablas, sin datos.
  {
    data: null,
    defaultContent: "",
  },
  // Fin

  // Parte de ColumnsDefConfig, este será el dato de la primera columna de TODAS las tablas,
  // este permitirá desplegar los datos que no quepan en toda la tabla (responsive)
  {
    className: "dt-control",
    orderable: false,
    targets: 0,
  },
  //Fin

  // Columna por defecto que acomoda el titulo y los datos al inicio de la columna especificada, en este caso la columna 2
  {
    className: "text-start",
    targets: 1,
  },
  // Botones "Editar y Eliminar o Estado"
  {
    data: null,
    defaultContent: `<i class="fa-solid fa-pencil text-primary mx-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Editar" style="cursor:pointer" onclick="handleModal(this,0,0)">
</i><i class="fa-solid fa-gear text-warning mx-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Estado" style="cursor:pointer" onclick="handleModal(this,0,1)">
</i>`,
  },
  {
    data: null,
    defaultContent: `<i class="fa-solid fa-pencil text-primary mx-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Editar" style="cursor:pointer" onclick="handleModal(this,1,0)">
</i><i class="fa-solid fa-gear text-warning mx-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Estado" style="cursor:pointer" onclick="handleModal(this,1,1)">
</i>`,
  },
  {
    data: null,
    defaultContent: `<i class="fa-solid fa-pencil text-primary mx-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Editar" style="cursor:pointer" onclick="handleModal(this,2,0)">
</i><i class="fa-solid fa-gear text-warning mx-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Estado" style="cursor:pointer" onclick="handleModal(this,2,1)">
</i>`,
  },
  {
    data: null,
    defaultContent: `<i class="fa-solid fa-pencil text-primary mx-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Editar" style="cursor:pointer" onclick="handleModal(this,3,0)">
</i><i class="fa-solid fa-gear text-warning mx-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Estado" style="cursor:pointer" onclick="handleModal(this,3,1)">
</i>`,
  },
  {
    data: null,
    defaultContent: `<i class="fa-solid fa-pencil text-primary mx-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Editar" style="cursor:pointer" onclick="handleModal(this,4,0)">
</i><i class="fa-solid fa-gear text-warning mx-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Estado" style="cursor:pointer" onclick="handleModal(this,4,1)">
</i>`,
  },
  // Fin
];

const columnConfig = [
  // Tabla Usuario
  [
    columnDefault[0],
    { data: "id" },
    { data: "nombres" },
    { data: "apellidos" },
    { data: "telefono" },
    { data: "correo" },
    { data: "horario" },
    {
      data: "id_rol",
      render: (data, type, row) => {
        // Modificar el valor del campo rol
        if (data === 1) {
          return "Administrador";
        } else if (data === 2) {
          return "Secretaria";
        } else {
          return "Terapeuta";
        }
      },
    },
    {
      data: "estado",
      render: (data, type, row) => {
        // Modificar el valor del campo estado
        if (data === 1) {
          return "Activo";
        } else {
          return "Inactivo";
        }
      },
    },
    columnDefault[3],
  ],
  // Tabla Clientes
  [
    columnDefault[0],
    { data: "id" },
    { data: "nombres" },
    { data: "apellidos" },
    { data: "direccion" },
    { data: "telefono" },
    { data: "correo" },
    {
      data: "estado",
      render: (data, type, row) => {
        // Modificar el valor del campo estado
        if (data === 1) {
          return "Activo";
        } else {
          return "Inactivo";
        }
      },
    },
    columnDefault[4],
  ],
  // Tabla Servicios
  [
    columnDefault[0],
    { data: "id" },
    { data: "nombre" },
    { data: "tipo" },
    { data: "duracion" },
    { data: "precio" },
    {
      data: "estado",
      render: (data, type, row) => {
        // Modificar el valor del campo estado
        if (data === 1) {
          return "Activo";
        } else {
          return "Inactivo";
        }
      },
    },
    columnDefault[5],
  ],
  // Tabla Productos
  [
    columnDefault[0],
    { data: "id" },
    { data: "stock" },
    { data: "nombre" },
    { data: "tipo" },
    { data: "precio" },
    {
      data: "estado",
      render: (data, type, row) => {
        // Modificar el valor del campo estado
        if (data === 1) {
          return "Activo";
        } else {
          return "Inactivo";
        }
      },
    },
    columnDefault[6],
  ],
  //Tabla de citas
  [
    columnDefault[0],
    { data: "id" },
    { data: "fecha" },
    { data: "id_cliente" },
    { data: "id_servicio" }, 
    {
      data: "estado",
      render: (data, type, row) => {
        // Modificar el valor del campo estado
        if (data === 1) {
          return "Activo";
        } else {
          return "Inactivo";
        }
      },
    },
    columnDefault[7],
  ],
];

const layoutConfig = [
  // Tabla Usuario
  function () {
    return "USUARIOS.." + obtainFilaName();
  },
  // Tabla Clientes
  function () {
    return "CLIENTES.." + obtainFilaName();
  },
  // Tabla Servicios
  function () {
    return "SERVICIOS.." + obtainFilaName();
  },
  // Tabla Productos
  function () {
    return "PRODUCTOS.." + obtainFilaName();
  },
   // Tabla Citas
   function () {
    return "CITAS.." + obtainFilaName();
  },
];

const columnDefsConfig = [
  // Tabla Usuario
  [
    columnDefault[1],
    columnDefault[2],
    {
      className: "text-center",
      targets: [9],
    },
    {
      responsivePriority: 1,
      targets: [0, 1, 9],
    },
    {
      responsivePriority: 2,
      targets: [2, 3],
    },
  ],
  // Tabla Cliente
  [
    columnDefault[1],
    columnDefault[2],
    {
      className: "text-center",
      targets: [8],
    },
    {
      responsivePriority: 1,
      targets: [0, 8],
    },
    {
      responsivePriority: 2,
      targets: [1],
    },
    {
      responsivePriority: 3,
      targets: [2, 3],
    },
  ],
  // Tabla Servicios
  [
    columnDefault[1],
    columnDefault[2],
    {
      className: "text-center",
      targets: [7],
    },
    {
      responsivePriority: 1,
      targets: [0, 7],
    },
    {
      responsivePriority: 2,
      targets: [1, 2, 3],
    },
  ],
  // Tabla Productos
  [
    columnDefault[1],
    columnDefault[2],
    {
      className: "text-center",
      targets: [7],
    },
    {
      responsivePriority: 1,
      targets: [0, 7],
    },
    {
      responsivePriority: 2,
      targets: [1, 3, 4],
    },
  ],
  //Tabla de citas
  [
    columnDefault[1],
    columnDefault[2],
    {
      className: "text-center",
      targets: [6],
    },
    {
      responsivePriority: 1,
      targets: [0, 6  ],
    },
    {
      responsivePriority: 2,
      targets: [1, 3, 4],
    },
  ],
];

// Función para obtener el nombre del archivo, con la fecha actual
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
