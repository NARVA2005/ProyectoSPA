// Configuración general de elementos
$.notify.defaults({
  style: "bootstrap",
  showDuration: 250,
  autoHide: true,
  autoHideDelay: 3000,
  arrowShow: true,
  elementPosition: "bottom center",
  globalPosition: "top center",
});

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

// Fin de la configuración

const applyChanges = document.querySelector("#applyChanges");

const cancelMyAccount = document.querySelector("#cancelMyAccount");

const cancelCreateUser = document.querySelector("#cancelCreateUser");

const myAccountModal = document.querySelector("#myAccountModal");

const linkmyaccount = document.querySelector("#link-myaccount");

const accept = document.querySelector("#accept");

const acceptCreate = document.querySelector("#acceptCreate");

const inputsModal = myAccountModal.querySelectorAll("input");

const id = document.querySelector("#id");

const names = document.querySelector("#names");

const lastname = document.querySelector("#lastname");

const email = document.querySelector("#email");

const password = document.querySelector("#password");

const idCreate = document.querySelector("#idCreate");

const namesCreate = document.querySelector("#namesCreate");

const lastnameCreate = document.querySelector("#lastnameCreate");

const emailCreate = document.querySelector("#emailCreate");

const passwordCreate = document.querySelector("#passwordCreate");

const uploadFile = document.querySelector("#uploadFile");

const uploadFileName = document.querySelector("#uploadFileName");

const uploadFileButton = document.querySelector("#uploadFileButton");

const toggleCreateUser = document.querySelector("#toggleCreateUser");

const userTable = document.querySelector("#toggleCreateUser");

const usersBody = document.querySelector("#usersBody");

let statusUser = document.querySelectorAll(".statusUser");

const searchBtnFicha = document.querySelector("#searchBtnFicha");

const solveButton = document.querySelector("#solveButton");

const discardButton = document.querySelector("#discardButton");

const discardAllButton = document.querySelector("#discardAllButton");

const solveAllButton = document.querySelector("#solveAllButton");

const numberFicha = document.querySelector("#numberFicha");

inputsModal.forEach((e) => {
  e.addEventListener("input", () => {
    applyChanges.classList.remove("btn-light");
    applyChanges.classList.add("applyChanges");
  });
});

cancelMyAccount.addEventListener("click", () => {
  applyChanges.classList.remove("applyChanges");
  applyChanges.classList.add("btn-light");
});
applyChanges.addEventListener("click", () => {
  applyChanges.classList.remove("applyChanges");
  applyChanges.classList.add("btn-light");
});

linkmyaccount.addEventListener("click", () => {
  fetch("../../src/modules/returnuserdata.php")
    .then((response) => {
      return response.json();
    })
    .then((response) => {
      let data = response.data;
      data = data.split(",");
      id.value = data[0];
      names.value = data[1];
      lastname.value = data[2];
      email.value = data[3];
      password.value = "";
    });
});

accept.addEventListener("click", () => {
  if (applyChanges.classList.contains("applyChanges")) {
    $("#accept").notify("Aplica los cambios", "info");
  } else {
    let formdata = new FormData();
    formdata.append("id", id.value);
    formdata.append("names", names.value);
    formdata.append("lastname", lastname.value);
    formdata.append("password", password.value);
    fetch("../../src/models/edituser.php", {
      method: "POST",
      body: formdata,
    })
      .then((response) => {
        return response.json();
      })
      .then((response) => {
        $.notify(response.data, response.response);
        $("#myAccountModal").modal("hide");
        document.querySelector(".namesText").innerHTML =
          names.value + " " + lastname.value;
      });
  }
});

uploadFile.addEventListener("change", () => {
  if (uploadFile.files[0]) {
    uploadFileName.innerHTML = uploadFile.files[0].name;
  } else {
    uploadFileName.innerHTML = "";
  }
});

uploadFileButton.addEventListener("click", () => {
  if (uploadFile.files[0] == undefined) {
    $("#uploadFileContainer").notify("Elige un formato", "info");
    return;
  }
  document.querySelector(".loader").style = "display:unset";
  const data = new FormData();
  data.append("formato", uploadFile.files[0]);
  fetch("../models/upload.php", {
    method: "POST",
    body: data,
  })
    .then((response) => {
      return response.json();
    })
    .then((response) => {
      $.notify(response.data, response.response);
      uploadFile.value = "";
      uploadFileName.innerHTML = "";
      resetTables();
      if (itemsList.item(0).classList.contains("selected")) {
        table1.dataTable(returnDatatableOption(0));
      } else if (itemsList.item(2).classList.contains("selected")) {
        table2.dataTable(returnDatatableOption(1));
      } else {
        table3.dataTable(returnDatatableOption(2));
      }
      document.querySelector(".loader").style = "display:none";
    });
  tooltipRemove();
});

toggleCreateUser.addEventListener("click", () => {
  $("#createUser").modal("show");
  $("#managmentUsers").modal("hide");
});
acceptCreate.addEventListener("click", () => {
  let formdata = new FormData();
  formdata.append("id", idCreate.value);
  formdata.append("email", emailCreate.value);
  formdata.append("names", namesCreate.value);
  formdata.append("lastname", lastnameCreate.value);
  formdata.append("password", passwordCreate.value);
  fetch("../models/createuser.php", {
    method: "POST",
    body: formdata,
  })
    .then((response) => {
      return response.json();
    })
    .then((response) => {
      $.notify(response.data, response.response);

      if (response.response != "error") {
        loadUserInfo();
        $("#createUser").modal("hide");
        $("#managmentUsers").modal("show");
      }
    });
});
cancelCreateUser.addEventListener("click", () => {
  $("#createUser").modal("hide");
  $("#managmentUsers").modal("show");
});

searchBtnFicha.addEventListener("click", () => {
  resetTables();
  table1.dataTable(returnDatatableOption(numberFicha.value));
});

const loadUserInfo = () => {
  fetch("../models/usersinfo.php", {})
    .then((response) => {
      return response.json();
    })
    .then((response) => {
      usersBody.innerHTML = "";
      response.forEach((element) => {
        if (element.status == "Activo") {
          usersBody.innerHTML += `<tr><td>${element.id}</td>
          <td>${element.names}</td><td><button type="button" class="btn btn-danger statusUser">Desactivar</button></td></tr>`;
        } else {
          usersBody.innerHTML += `<tr><td>${element.id}</td>
          <td>${element.names}</td><td><button type="button" class="btn btn-success statusUser">Activar</button></td></tr>`;
        }
      });
      statusUser = document.querySelectorAll(".statusUser");
      userRecorrido();
    });
};

const userRecorrido = () => {
  statusUser.forEach((element) => {
    let formdata = new FormData();
    formdata.append(
      "id",
      element.parentElement.parentElement.children.item(0).innerHTML
    );
    element.addEventListener("click", () => {
      fetch("../models/statususer.php", {
        method: "POST",
        body: formdata,
      })
        .then((response) => {
          return response.json();
        })
        .then((response) => {
          $.notify(response.data, response.response);
          loadUserInfo();
        });
    });
  });
};

userRecorrido();

// Cargando las tablas y las funcionalidades asociadas a estas.

const loadData = (datos) => {
  fetch("../models/returndata.php?id=" + datos[0])
    .then((response) => response.json())
    .then((response) => {
      const containerRegistrationInfo = document.querySelector(
        "#containerRegistrationInfo"
      );
      if (response.length == 0) {
        containerRegistrationInfo.innerHTML = `<p class="h6"></p>`;

        containerRegistrationInfo.firstElementChild.innerHTML = `<span class="text-success text-justify">'${datos[1]}'</span> con número de identificación <span class="text-success">'${datos[0]}'</span> no se encuentra actualmente en ninguna ficha, si desea insertarlo en la ficha <span class="text-danger">'${datos[2]}'</span> dale a <b>'Resolver'</b>, en caso contrario presiona <b>'Descartar'</b>.`;
      } else {
        containerRegistrationInfo.innerHTML = `<p class="h6"></p>
        <table class="table table-bordered" id="datatablefichas" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Identificación</th>
                    <th>Nombres</th>
                    <th>Ficha</th>
                    <th>Nombre del programa</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>`;

        containerRegistrationInfo.firstElementChild.innerHTML = `<span class="text-success text-justify">'${datos[1]}'</span> con número de identificación <span class="text-success">'${datos[0]}'</span> se encuentra actualmente en 1 o más fichas, si desea insertarlo en la ficha <span class="text-danger">'${datos[2]}'</span> dale a <b>'Resolver'</b>, en caso contrario presiona <b>'Descartar'</b>.`;

        datatableOptionsFichas.ajax.url =
          "../models/returndata.php?id=" + datos[0];
        datatableOptionsFichas.layout.topCenter.buttons[0].title = `NOMBRE: ${datos[1]} - IDENTIFICACIÓN: ${datos[0]} - FICHA: ${datos[2]}`;
        datatableOptionsFichas.layout.topCenter.buttons[1].title = `NOMBRE: ${datos[1]} - IDENTIFICACIÓN: ${datos[0]} - FICHA: ${datos[2]}`;
        datatableOptionsFichas.layout.topCenter.buttons[2].title = `NOMBRE: ${datos[1]} - IDENTIFICACIÓN: ${datos[0]} - FICHA: ${datos[2]}`;
        datatableOptionsFichas.layout.topCenter.buttons[0].filename = `REPORTE..${datos[0]}`;
        datatableOptionsFichas.layout.topCenter.buttons[1].filename = `REPORTE..${datos[0]}`;

        $("#datatablefichas").DataTable().destroy();
        $("#datatablefichas").dataTable(datatableOptionsFichas);
        tooltipConfig();
      }
    });
};

const table3Event = () => {
  table3.off("click", "tr td:last-child i");

  table3.on("click", "tr td:last-child i", (e) => {
    let datos = ["", "", ""];

    const buttonClick = e.target.parentElement.parentElement;
    if (buttonClick.parentElement.classList.contains("child")) {
      datos[0] =
        buttonClick.parentElement.children[1].lastElementChild.innerHTML;
      datos[1] =
        buttonClick.parentElement.children[2].lastElementChild.innerHTML;
      datos[2] =
        buttonClick.parentElement.children[3].lastElementChild.innerHTML;
    } else {
      datos[0] = buttonClick.children[1].innerHTML;
      datos[1] = buttonClick.children[2].innerHTML;
      datos[2] = buttonClick.children[3].innerHTML;
    }

    $("#myRegistrationInfoModal").modal("show");
    loadData(datos);
    tooltipRemove();
  });
  table3.off("click", "tr td:first-child");
  table3.on("click", "tr td:first-child", () => {
    tooltipConfig();
  });
  table3.off("draw.dt");
  table3.on("draw.dt", () => {
    tooltipConfig();
  });
};

$("#inscripcionesPagina").on("click", () => {
  resetTables();
  table1.dataTable(returnDatatableOption(0));
  tooltipConfig();
});
$("#fichasPagina").on("click", () => {
  resetTables();
  table2.dataTable(returnDatatableOption(1));
  tooltipConfig();
});
$("#pendientesPagina").on("click", async () => {
  resetTables();
  table3.dataTable(returnDatatableOption(2));
  table3Event();
});

solveButton.addEventListener("click", () => {
  pendienteaction("solve");
});
discardButton.addEventListener("click", () => {
  pendienteaction("discard");
});
solveAllButton.addEventListener("click", () => {
  document.querySelector(".loader").style = "display:unset";
  fetch("../models/pendienteactionAll.php?action=solveAll")
    .then((response) => response.json())
    .then((response) => {
      $.notify(response.data, response.response);
      resetTables();
      table3.dataTable(returnDatatableOption(2));
      table3Event();
      document.querySelector(".loader").style = "display:none";
    });
});
discardAllButton.addEventListener("click", () => {
  document.querySelector(".loader").style = "display:unset";
  fetch("../models/pendienteactionAll.php?action=discardAll")
    .then((response) => response.json())
    .then((response) => {
      $.notify(response.data, response.response);
      resetTables();
      table3.dataTable(returnDatatableOption(2));
      table3Event();
      document.querySelector(".loader").style = "display:none";
    });
});

const pendienteaction = (action) => {
  const data =
    containerRegistrationInfo.firstElementChild.querySelectorAll("span");
  let id = data[1].innerHTML;
  let ficha = data[2].innerHTML;
  id = id.substring(1, id.length - 1);
  ficha = ficha.substring(1, ficha.length - 1);
  let formData = new FormData();
  formData.append("id", id);
  formData.append("idficha", ficha);
  formData.append("action", action);

  fetch("../models/pendienteaction.php", {
    method: "POST",
    body: formData,
  })
    .then((response) => response.json())
    .then((response) => {
      $.notify(response.data, response.response);
      resetTables();
      table3.dataTable(returnDatatableOption(2));
      table3Event();
    });
};
