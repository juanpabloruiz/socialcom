document.querySelector('form').addEventListener('submit', function (e) {
    const clave = document.querySelector('input[name="pass"]').value;
    const confirma = document.querySelector('input[name="confirm_pass"]').value;

    if (clave !== confirma) {
        e.preventDefault(); // Detiene el envío del formulario
        document.getElementById('alert').innerHTML = '<div class="alert bg-danger text-white">Las contraseñas no coinciden</div>';
        // alert("Las contraseñas no coinciden.");
    }
});
