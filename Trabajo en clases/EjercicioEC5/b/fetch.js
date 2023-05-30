function cargarD() {
    var contenedor;
    contenedor = document.getElementById('d');
    fetch('generar1.php')
        .then(response => response.text())
        .then(data => contenedor.innerHTML = data);
}

function cargarP(id) {
    var contenedor;
    contenedor = document.getElementById('p');
    fetch('generar2.php?id='+id)
        .then(response => response.text())
        .then(data => contenedor.innerHTML = data);
}