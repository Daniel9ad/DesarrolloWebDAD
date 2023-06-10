function pregunta2() {
    document.getElementById('titulo').innerHTML = 'Pregunta 2 DOM en Javascript'
    var contenedor;
    contenedor = document.getElementById('contenido');
    var ajax = new XMLHttpRequest() //crea el objeto ajax 
    ajax.open("get", '../Pregunta2/gtabla.html', true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}

function generarTabla(){
    var m = document.getElementById('fila').value
    var n = document.getElementById('columna').value
    var contenedor;
    contenedor = document.getElementById('conTabla');
    var ajax = new XMLHttpRequest() //crea el objeto ajax 
    ajax.open("get", '../Pregunta2/tabla.php?m='+m+'&n='+n, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}

function crearLibro() {
    var contenedor;
    contenedor = document.getElementById('mensaje');
    var formulario = document.getElementById("form-libro");
    var parametros = new FormData(formulario);
    fetch("../Pregunta3/insertar.php",
        {
            method: "POST",
            body: parametros
        })
        .then(response => response.text())
        .then(data => contenedor.innerHTML = data);
}

function pregunta4() {
    document.getElementById('titulo').innerHTML = 'Listado'
    var contenedor;
    contenedor = document.getElementById('contenido');
    var ajax = new XMLHttpRequest() //crea el objeto ajax 
    ajax.open("get", '../Pregunta4/listar.php', true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}

function listarF() {
    document.getElementById('titulo').innerHTML = 'Listado'
    var contenedor;
    contenedor = document.getElementById('contenido');
    var ajax = new XMLHttpRequest() //crea el objeto ajax 
    ajax.open("get", '../Pregunta4/listar.php?orden=titulo', true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}

function pregunta5() {
    document.getElementById('titulo').innerHTML = 'Desplegable'
    var contenedor;
    contenedor = document.getElementById('contenido');
    var ajax = new XMLHttpRequest() //crea el objeto ajax 
    ajax.open("get", '../Pregunta5/Datos.php', true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}

function cambiarImagen(event){
    document.getElementById('titulo').innerHTML = 'Desplegable'
    var contenedor;
    contenedor = document.getElementById('conImagen');
    var ajax = new XMLHttpRequest() //crea el objeto ajax 
    ajax.open("get", '../Pregunta5/mostrar.php?id='+event.target.value, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}
