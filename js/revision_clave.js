document.querySelector('form').addEventListener('submit', function (e) {
    const clave = document.querySelector('input[name="clave"]').value;
    const confirma = document.querySelector('input[name="confirma_clave"]').value;

    if (clave !== confirma) {
        e.preventDefault(); // Detiene el envío del formulario
        document.getElementById('alerta').innerHTML = '<div class="alert bg-danger text-white">Las contraseñas no coinciden</div>';
        // alert("Las contraseñas no coinciden.");
    }
});
