function pregunta3() {
    document.getElementById('titulo').innerHTML = 'Pregunta 3 Insertar en fetch'
    var contenedor;
    contenedor = document.getElementById('contenido');
    fetch('../Pregunta3/forminsertar.html')
        .then(response => response.text())
        .then(data => contenedor.innerHTML = data);
}