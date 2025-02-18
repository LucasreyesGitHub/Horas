document.getElementById("formulario").addEventListener("submit", function(event) {
    event.preventDefault();

    const correo = document.getElementById("correo").value;
    const accion = document.getElementById("accion").value;
    const fechaHora = new Date();
    
    const registro = {
        correo: correo,
        accion: accion,
        fecha: fechaHora.toLocaleDateString(),
        hora: fechaHora.toLocaleTimeString()
    };

    // Guardar en localStorage (simulación de base de datos)
    let registros = JSON.parse(localStorage.getItem("registros")) || [];
    registros.push(registro);
    localStorage.setItem("registros", JSON.stringify(registros));

    document.getElementById("resultado").innerText = "Registro guardado exitosamente!";
});
