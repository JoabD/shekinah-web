document.addEventListener("DOMContentLoaded", function () {    const body = document.body;
    
    $('#perfilSelect').on('change', function () {
        let valor = $(this).val();

        if (valor == 4) {
            $('#seccReg').show();
        } else {
            $('#seccReg').hide();
        }
    });

    $('#perfilSelect').trigger('change');
    
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
    document.getElementById("Agregar").style.display = "none";

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
    const divAgregar = document.getElementById("Agregar");
    const divVisualizar = document.getElementById("Visualizar");
    const btnAgregar = document.querySelector(".btn-agregar");
    const btnVisualizar = document.querySelector(".btn-visualizar");

    function aplicarEstiloBoton(btn){
        if(!btn) return;

        btn.style.backgroundColor = "#1a2744";
        btn.style.color = "#ffffff";
        btn.style.border = "none";
        btn.style.padding = "10px 22px";
        btn.style.borderRadius = "10px";
        btn.style.fontSize = "15px";
        btn.style.fontWeight = "600";
        btn.style.cursor = "pointer";
        btn.style.transition = "all 0.2s ease-in-out";
        btn.style.boxShadow = "0 4px 10px rgba(0,0,0,0.15)";
        btn.style.marginLeft = "10px";

        btn.addEventListener("mouseenter", () => {
            btn.style.backgroundColor = "#2563eb";
            btn.style.transform = "scale(1.05)";
        });

        btn.addEventListener("mouseleave", () => {
            btn.style.backgroundColor = "#1a2744";
            btn.style.transform = "scale(1)";
        });
    }

    aplicarEstiloBoton(btnAgregar);
    aplicarEstiloBoton(btnVisualizar);
  
    if(divAgregar) divAgregar.style.display = "none";
    if(divVisualizar) divVisualizar.style.display = "block";

    if(btnAgregar){
        btnAgregar.addEventListener("click", function(){
            divAgregar.style.display = "block";
            divVisualizar.style.display = "none";
        });
    }

    if(btnVisualizar){
        btnVisualizar.addEventListener("click", function(){
            divAgregar.style.display = "none";
            divVisualizar.style.display = "block";
        });
    }

    document.querySelectorAll(".btn-actualizar").forEach(btn => {

        btn.addEventListener("click", function () {

            const id = this.getAttribute("data-id");

            const modal = document.getElementById("modalActualizar");
            const h3 = document.getElementById("id_encuesta");

            h3.textContent = id;
            h3.style.display = "none";
            modal.style.display = "flex";
            fetch("/datos/" + id)
            .then(response => response.json())
            .then(data => {

                console.log(data);
                
                let datos = data[0]; 

                document.getElementById("estatus2").value = datos.estatus;
                
                document.getElementById("perfil2").value = datos.perfil;

                let divCuatrimestre = document.getElementById("cuatrimestre2");
                let inputCuatri = document.getElementById("cuatri2");

                let divModalidad = document.getElementById("madalidad2");
                let divRegion = document.getElementById("divRegi2");

                if(datos.perfil == 1){

                    divCuatrimestre.style.display = "block";
                    divModalidad.style.display = "block";
                    divRegion.style.display = "block";

                    inputCuatri.value = datos.cuatrimestre ?? "";
                    let selectModalidad = document.getElementById("modali2");

                    if(datos.presencial == 1){
                        selectModalidad.value = "1";
                    }else if(datos.diplomado == 1){
                        selectModalidad.value = "2";
                    }else if(datos.virtual1 == 1){
                        selectModalidad.value = "3";
                    }
                    document.getElementById("region2").value = datos.region;

                }else if(datos.perfil == 4){
                    divCuatrimestre.style.display = "none";
                    divModalidad.style.display = "none";
                    inputCuatri.value = "";
                    divRegion.style.display = "block";
                    document.getElementById("region2").value = datos.region;
                    
                }else{

                    divCuatrimestre.style.display = "none";
                    divModalidad.style.display = "none";
                    divRegion.style.display = "none";

                    inputCuatri.value = "";

                }

                modal.style.display = "flex";

            })
            .catch(error => console.error("Error:", error));

        });
    });
    document.getElementById("cerrarActualizacion").addEventListener("click", function () {
        document.getElementById("modalActualizar").style.display = "none";
    });

    document.getElementById("btnConfirmarActualizar").addEventListener("click", function(){

        let id = document.getElementById("id_encuesta").textContent;

        let perfil = document.getElementById("perfil2").value;
        let modalidad = document.getElementById("modali2").value;
        let region = document.getElementById("region2").value;
        let estatus = document.getElementById("estatus2").value;
        let cuatrimestre = document.getElementById("cuatri2").value;
        let password = document.getElementById("password2").value;

        fetch("/actualizarUsuario", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content")
            },
            body: JSON.stringify({
                id_encuesta: id,
                perfil: perfil,
                modalidad: modalidad,
                region: region,
                estatus: estatus,
                cuatrimestre: cuatrimestre,
                password: password
            })
        })
        .then(response => response.json())
        .then(data => {

            console.log(data);

            alert("Usuario actualizado correctamente");

            document.getElementById("modalActualizar").style.display = "none";
            location.reload();

        })
        .catch(error => console.error("Error:", error));

    });

});
