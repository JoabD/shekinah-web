document.addEventListener("DOMContentLoaded", function () {
    const body = document.body;



    const contenido = document.getElementById("contenido");
    contenido.style.backgroundColor = "#fff";
    contenido.style.padding = "40px";
    contenido.style.maxWidth = "900px";
    contenido.style.margin = "40px auto";
    contenido.style.borderRadius = "12px";
    contenido.style.boxShadow = "0 0 12px rgba(0,0,0,0.15)";
    contenido.style.color = "#333";
    contenido.style.fontSize = "16px";
    contenido.style.lineHeight = "1.6";



    const contenidoH2 = contenido.querySelector("h2");
    if (contenidoH2) {
        contenidoH2.style.textAlign = "center";
        contenidoH2.style.marginBottom = "25px";
        contenidoH2.style.color = "#1a2744";
    }


    const formPeriodo = document.querySelector(".form-informacion");
    document.querySelectorAll(".form-informacion .form-control").forEach(input => {
        input.style.width = "100%";
        input.style.padding = "10px 12px";
        input.style.borderRadius = "8px";
        input.style.border = "1px solid #cbd5e1";
        input.style.fontSize = "15px";
        input.style.transition = "all 0.2s ease";

        input.addEventListener("focus", () => {
            input.style.borderColor = "#2563eb";
            input.style.boxShadow = "0 0 0 2px rgba(37,99,235,0.25)";
        });

        input.addEventListener("blur", () => {
            input.style.borderColor = "#cbd5e1";
            input.style.boxShadow = "none";
        });
    });

    document.querySelectorAll(".form-informacion label").forEach(label => {
        label.style.fontWeight = "600";
        label.style.color = "#1a2744";
        label.style.display = "block";
        label.style.marginBottom = "6px";
    });

    const btnGuardar = document.querySelector(".btn-guardar");

    if (btnGuardar) {
        btnGuardar.style.backgroundColor = "#1a2744";
        btnGuardar.style.color = "#ffffff";
        btnGuardar.style.border = "none";
        btnGuardar.style.padding = "10px 22px";
        btnGuardar.style.borderRadius = "10px";
        btnGuardar.style.fontSize = "15px";
        btnGuardar.style.fontWeight = "600";
        btnGuardar.style.cursor = "pointer";
        btnGuardar.style.transition = "all 0.2s ease-in-out";
        btnGuardar.style.boxShadow = "0 4px 10px rgba(0,0,0,0.15)";

        btnGuardar.addEventListener("mouseenter", () => {
            btnGuardar.style.backgroundColor = "#2563eb";
            btnGuardar.style.transform = "scale(1.05)";
        });

        btnGuardar.addEventListener("mouseleave", () => {
            btnGuardar.style.backgroundColor = "#1a2744";
            btnGuardar.style.transform = "scale(1)";
        });
    }

    const btnBuscar = document.querySelector(".btn-buscar");

    if (btnBuscar) {
        btnBuscar.style.backgroundColor = "#1a2744";
        btnBuscar.style.color = "#ffffff";
        btnBuscar.style.border = "none";
        btnBuscar.style.padding = "10px 22px";
        btnBuscar.style.borderRadius = "10px";
        btnBuscar.style.fontSize = "15px";
        btnBuscar.style.fontWeight = "600";
        btnBuscar.style.cursor = "pointer";
        btnBuscar.style.transition = "all 0.2s ease-in-out";
        btnBuscar.style.boxShadow = "0 4px 10px rgba(0,0,0,0.15)";

        btnBuscar.addEventListener("mouseenter", () => {
            btnBuscar.style.backgroundColor = "#2563eb";
            btnBuscar.style.transform = "scale(1.05)";
        });

        btnBuscar.addEventListener("mouseleave", () => {
            btnBuscar.style.backgroundColor = "#1a2744";
            btnBuscar.style.transform = "scale(1)";
        });
    }

    const btnNoti = document.querySelector(".btn-noti");

    if (btnNoti) {
        btnNoti.style.backgroundColor = "#1a2744";
        btnNoti.style.color = "#ffffff";
        btnNoti.style.border = "none";
        btnNoti.style.padding = "10px 22px";
        btnNoti.style.borderRadius = "10px";
        btnNoti.style.fontSize = "15px";
        btnNoti.style.fontWeight = "600";
        btnNoti.style.cursor = "pointer";
        btnNoti.style.transition = "all 0.2s ease-in-out";
        btnNoti.style.boxShadow = "0 4px 10px rgba(0,0,0,0.15)";

        btnNoti.addEventListener("mouseenter", () => {
            btnNoti.style.backgroundColor = "#2563eb";
            btnNoti.style.transform = "scale(1.05)";
        });

        btnNoti.addEventListener("mouseleave", () => {
            btnNoti.style.backgroundColor = "#1a2744";
            btnNoti.style.transform = "scale(1)";
        });
    }

    const tabla = document.querySelector(".tabla-registros");
    const wrapper = document.querySelector(".tabla-wrapper");
    if (!tabla || !wrapper) return;

    wrapper.style.overflowX = "auto";
    wrapper.style.borderRadius = "10px";
    wrapper.style.boxShadow = "0 0 10px rgba(0,0,0,0.08)";
    wrapper.style.marginTop = "20px";

    tabla.style.width = "100%";
    tabla.style.minWidth = "1400px";
    tabla.style.borderCollapse = "collapse";
    tabla.style.fontSize = "14px";
    tabla.style.backgroundColor = "#ffffff";

    tabla.querySelectorAll("thead th").forEach(th => {
        th.style.backgroundColor = "#1a2744";
        th.style.color = "#ffffff";
        th.style.padding = "10px 12px";
        th.style.textAlign = "center";
        th.style.fontWeight = "600";
        th.style.position = "sticky";
        th.style.top = "0";
        th.style.zIndex = "2";
        th.style.borderBottom = "2px solid #dee2e6";
        th.style.whiteSpace = "nowrap";
    });

    tabla.querySelectorAll("tbody td").forEach(td => {
        td.style.padding = "8px 10px";
        td.style.borderBottom = "1px solid #e5e7eb";
        td.style.whiteSpace = "nowrap";
        td.style.verticalAlign = "middle";
    });

    tabla.querySelectorAll("tbody tr").forEach(tr => {
        tr.addEventListener("mouseenter", () => {
            tr.style.backgroundColor = "#f4f6f9";
        });
        tr.addEventListener("mouseleave", () => {
            tr.style.backgroundColor = "transparent";
        });
    });

    tabla.querySelectorAll("a").forEach(a => {
        a.style.color = "#1a2744";
        a.style.fontWeight = "600";
        a.style.textDecoration = "none";
    });

    tabla.querySelectorAll("a").forEach(a => {
        a.addEventListener("mouseenter", () => a.style.textDecoration = "underline");
        a.addEventListener("mouseleave", () => a.style.textDecoration = "none");
    });

    tabla.querySelectorAll(".btn-actualizar").forEach(btn => {
        btn.style.backgroundColor = "#1a2744";
        btn.style.color = "#fff";
        btn.style.border = "none";
        btn.style.padding = "6px 10px";
        btn.style.borderRadius = "6px";
        btn.style.cursor = "pointer";
        btn.style.fontWeight = "600";
    });

    const subida = document.getElementById("subidaArchivo");

    if (subida) {
        subida.style.backgroundColor = "#f8f9fa";
        subida.style.padding = "25px";
        subida.style.borderRadius = "12px";
        subida.style.boxShadow = "0 0 10px rgba(0,0,0,0.1)";
        subida.style.maxWidth = "500px";
        subida.style.margin = "0 auto 30px auto";
        subida.style.border = "1px solid #e5e7eb";
    }

    const inputFile = document.querySelector('#subidaArchivo input[type="file"]');

    if (inputFile) {
        inputFile.style.backgroundColor = "#ffffff";
        inputFile.style.cursor = "pointer";
    }

    const btnSubir = document.querySelector('#subidaArchivo .btn-guardar');

    if (btnSubir) {
        btnSubir.style.display = "block";
        btnSubir.style.margin = "0 auto";
        btnSubir.style.width = "100%";
        btnSubir.style.textAlign = "center";

        btnSubir.addEventListener("mouseenter", () => {
            btnSubir.style.backgroundColor = "#2563eb";
            btnSubir.style.transform = "scale(1.03)";
        });

        btnSubir.addEventListener("mouseleave", () => {
            btnSubir.style.backgroundColor = "#1a2744";
            btnSubir.style.transform = "scale(1)";
        });
    }


    document.querySelector(".btn-buscar").addEventListener("click", () => {
        const periodo = document.getElementById("periodo").value;

        fetch(URL_FILTRAR, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({ periodo })
        })
            .then(res => res.json())
            .then(data => {
                renderTabla(data);
            })
            .catch(err => console.error(err));
    });

    document.addEventListener("click", function (e) {
        if (
            e.target.classList.contains("btn-notificar") ||
            e.target.classList.contains("btn-noti")
        ) {
            const usuario = e.target.getAttribute("data-usuario");
            const pagos = e.target.getAttribute("data-pagos");
            const loader = document.getElementById("loaderGlobal");
            loader.style.display = "flex";
            fetch(URL_NOTIFICA, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content")
                },
                body: JSON.stringify({
                    usuario: usuario,
                    pagos: pagos
                })
            })
            .then(res => res.json())
            .then(data => {
                loader.style.display = "none";
                alert("Notificación enviada correctamente");
                this.location.reload();
            })
            .catch(err => {
                loader.style.display = "none";
                console.error(err);
                alert("Error al enviar notificación");
            });
        }
    });



});
function renderTabla(data) {

    let tabla = $('#tablaRegis').DataTable();

    tabla.destroy();

    $('#tablaRegis').empty();

    const agrupados = {};

    data.forEach(row => {
        if (!agrupados[row.USUARIO]) {
            agrupados[row.USUARIO] = [];
        }
        agrupados[row.USUARIO].push(row);
    });

    const periodos = [...new Set(data.map(d => d.PERIODO))].sort();

    let thead = `<thead><tr>
        <th>USUARIO</th>
        <th>NOMBRE</th>`;

    periodos.forEach(p => {
        thead += `<th>${p}</th>`;
    });
    thead += `<th>ESTATUS</th>`;
    thead += `<th>NOTIFICACIÓN</th></tr></thead>`;

    let tbody = `<tbody>`;

    Object.keys(agrupados).forEach(usuario => {
        const registros = agrupados[usuario];
        const nombre = registros[0].NOMBRE_COMPLETO;

        tbody += `<tr>
            <td>${usuario}</td>
            <td>${nombre}</td>`;

        periodos.forEach(periodo => {
            const pago = registros.find(r => r.PERIODO == periodo);

            if (pago && pago.PAGO == 1) {
                tbody += `<td style="text-align:center;color:green;">✔</td>`;
            } else {
                tbody += `<td style="text-align:center;color:red;">✖</td>`;
            }
        });
        const noti = registros[0].NOTIFICACION ?? 0;
        if (noti == 0) {
            tbody += `<td></td>`;
        } 
        else if (noti >= 1 && noti <= 3) {
            tbody += `<td style="text-align:center;">
                ${noti} NOTIFICACIÓN${noti > 1 ? 'ES' : ''}
            </td>`;
        } 
        else {
            tbody += `<td style="color:red;font-weight:bold;text-align:center;">
                USUARIO BLOQUEADO
            </td>`;
        }

        const debe = registros.filter(r => r.PAGO == 0).length;

        if (debe > 0) {
            tbody += `<td style="text-align:center;">
                <button class="btn-actualizar btn-notificar" data-usuario="${usuario}" data-pagos="${noti}">
                    Notificar
                </button>
            </td>`;
        } else {
            tbody += `<td style="color:green;text-align:center;">Al corriente</td>`;
        }

        tbody += `</tr>`;
    });

    tbody += `</tbody>`;

    $('#tablaRegis').html(thead + tbody);

    $('#tablaRegis').DataTable({
        pageLength: 5,
        scrollX: true,
        destroy: true,
        language: {
            lengthMenu: "Mostrar _MENU_ registros",
            zeroRecords: "No se encontraron resultados",
            info: "Mostrando _START_ a _END_ de _TOTAL_ registros",
            infoEmpty: "Mostrando 0 registros",
            search: "Buscar:",
            paginate: {
                first: "Primero",
                last: "Último",
                next: "Siguiente",
                previous: "Anterior"
            }
        }
    });
    aplicarEstilosTabla();
}
function aplicarEstilosTabla() {

    const tabla = document.querySelector("#tablaRegis");

    tabla.querySelectorAll("thead th").forEach(th => {
        th.style.backgroundColor = "#1a2744";
        th.style.color = "#ffffff";
        th.style.padding = "10px 12px";
        th.style.textAlign = "center";
        th.style.fontWeight = "600";
        th.style.position = "sticky";
        th.style.top = "0";
        th.style.zIndex = "2";
    });

    tabla.querySelectorAll("tbody td").forEach(td => {
        td.style.padding = "8px 10px";
        td.style.borderBottom = "1px solid #e5e7eb";
        td.style.whiteSpace = "nowrap";
    });

    tabla.querySelectorAll(".btn-actualizar").forEach(btn => {
        btn.style.backgroundColor = "#1a2744";
        btn.style.color = "#fff";
        btn.style.border = "none";
        btn.style.padding = "6px 10px";
        btn.style.borderRadius = "6px";
        btn.style.cursor = "pointer";
        btn.style.fontWeight = "600";
    });
}