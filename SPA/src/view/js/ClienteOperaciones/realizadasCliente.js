document.getElementById('BuscarCliente').addEventListener('click', () => {
    document.getElementById("mensajeAlerta").innerHTML = "";
    const id = document.getElementById("identificacionCliente").value;
    if (id.length > 0) {
        let datos = { identificacionCliente: id };
        $.ajax({
            url: "../../Controller/Cliente/consultaRealizadas.php",
            type: "POST",
            data: JSON.stringify(datos),
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            success: function(data) {
                if (data.status === true) {
                    llenarTabla(data.clientes);  
                } else {
                    mostrarAlerta("error", data.error);
                    llenarTabla([], true);  // Limpia la tabla si hay un error
                }
            },
            error: function(xhr, status, error) {
                console.error('Error:', error);
                mostrarAlerta("warning", "Fallo en la consulta");
                llenarTabla([], true);  // Limpia la tabla si hay un fallo en la consulta
            
            }
        });
    } else {
        mostrarAlerta("warning", "Faltan Casillas por Llenar.");
    }
});

function llenarTabla(clientes = [], limpiar = false) {
    // Inicializa DataTables si no está inicializado
    if (!$.fn.DataTable.isDataTable('#miTabla')) {
        $('#miTabla').DataTable();
    }

    // Selecciona la tabla con DataTables
    let tabla = $('#miTabla').DataTable();
    // Limpia cualquier contenido previo de la tabla
    tabla.clear();
      // Si se especifica que debe limpiar la tabla, simplemente detén aquí
      if (limpiar) {
        tabla.draw();
        return;
    }
    // Iterar sobre cada cliente (cita) y añadir las filas a la tabla
    clientes.forEach(cliente => {
         // Aquí accede a los nombres del terapeuta y del servicio
         let nombreTerapeuta = cliente.nombreTerapeuta;
         let nombreServicio = cliente.nombreServicio;
        tabla.row.add([
     
            cliente.FechaRegistro,
            cliente.DuracionRegistro,
            cliente.Clientes_idClientes,
    cliente.nombreTerapeuta,
    cliente.nombreServicio
        ]).draw();
    });
}

function mostrarAlerta(tipo, mensaje) {
    let claseAlerta = "";
    if (tipo === "warning") {
        claseAlerta = "alert-warning";
    } else if (tipo === "error") {
        claseAlerta = "alert-danger";
    } else {
        claseAlerta = "alert-info";
    }

    document.getElementById("mensajeAlerta").innerHTML = `<div class="alert ${claseAlerta} alert-dismissible fade show" role="alert"> 
        <strong>ADVERTENCIA!</strong> ${mensaje}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>`;
}
