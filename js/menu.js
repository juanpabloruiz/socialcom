//const btn = document.getElementById('hamburguesa');
//const menu = document.getElementById('menu');
//btn.addEventListener('click', () => {
//    menu.classList.toggle('activo');
//});

document.getElementById('hamburguesa').addEventListener('click', function() {
    const menu = document.getElementById('menu');
    menu.classList.toggle('activo');
});