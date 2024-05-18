
//  ACA VOY HACER EL EVENTO QUE SE VA EJECUTAR APENAS LE DE EN INICIAR SESION
document.getElementById("btnIniciarSesion").addEventListener('click', () => {
    document.getElementById("mensajeAlerta").innerHTML = "";
    let correo = document.getElementById("inputCorreo").value;
    let contra = document.getElementById("inputContra").value;

    if (correo.length > 0 && contra.length > 0) {

        let datos = {
            Correo: correo,
            Contra: contra
        }

        fetch("../view/validacionesLogin.php", {
            method: "POST",
            headers: {
                'Content-Type': 'application/json' // Tipo de contenido
            },
            body: JSON.stringify(datos)
        }).then((date) => { return date.json(); }).then((date) => {
            console.log(date)
            if (date.status == true) {
                if (date.formulario == "empleados") {
                    // ACA LO ENVIO A LA PAGINA DE LOS EMPLEADOS


                }
                else if (date.formulario == "terapeutas") {
                    // ACA LO ENVIO A LA PAGINA DE LOS TERAPEUTAS

                }

            }
            else {

                document.getElementById("mensajeAlerta").innerHTML = `  <div  class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>ADVERTENCIA! </strong> ${date.error}.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>`


            }
        })

    }
    else {
        document.getElementById("mensajeAlerta").innerHTML = `  <div  class="alert alert-warning alert-dismissible fade show" role="alert">
       <strong>ADVERTENCIA!</strong> Faltan Casillas por Llenar.
           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
           </div>`
    }



})

// -- FIN EVENTO --