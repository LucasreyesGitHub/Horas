const contraseñaAdmin = "admin123";  // Contraseña de administrador

document.getElementById("loginForm").addEventListener("submit", function(event) {
    event.preventDefault();

    const password = document.getElementById("password").value;

    if (password === contraseñaAdmin) {
        document.getElementById("loginForm").style.display = "none";
        document.getElementById("panelAdmin").style.display = "block";
        mostrarRegistros();
    } else {
        alert("Contraseña incorrecta.");
    }
});

function mostrarRegistros() {
    const registros = JSON.parse(localStorage.getItem("registros")) || [];
    const tablaBody = document.getElementById("tablaRegistros").getElementsByTagName("tbody")[0];
    
    // Limpiar la tabla
    tablaBody.innerHTML = "";
    
    registros.forEach(registro => {
        const row = tablaBody.insertRow();
        row.insertCell(0).innerText = registro.correo;
        row.insertCell(1).innerText = registro.accion;
        row.insertCell(2).innerText = registro.fecha;
        row.insertCell(3).innerText = registro.hora;
    });
}

function editar() {
    // Aquí puedes agregar funcionalidades para editar registros si lo necesitas
    alert("Función de edición aún no implementada.");
}
