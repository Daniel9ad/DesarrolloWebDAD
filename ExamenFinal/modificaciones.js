function autenticar(){
    console.log('Autentificando')
    var contenedor = document.getElementById('estado')
    var formulario = document.getElementById("form-login");
    var parametros = new FormData(formulario);
    var ajax = new XMLHttpRequest() //crea el objetov ajax 
    ajax.open("post", 'autenticar.php', true);
    ajax.onreadystatechange = function () {
      if (ajax.readyState == 4) {
        contenedor.innerHTML = ajax.responseText;
        inicializar()
      }
    }
    ajax.send(parametros);
}

function inicio() {
  var contenedor = document.getElementById('contenido');
  var ajax = new XMLHttpRequest() //crea el objeto ajax 
  ajax.open("get", 'inicio.html', true);
  ajax.onreadystatechange = function () {
      if (ajax.readyState == 4) {
          contenedor.innerHTML = ajax.responseText;
          visitas()
      }
  }
  ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
  ajax.send();
}

function inicializar() {
  //var contenedor = document.getElementById('estado2');
  var ajax = new XMLHttpRequest() //crea el objeto ajax 
  ajax.open("get", 'inicializar.php', true);
  ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
  ajax.send();
}

function visitas() {
  var contenedor = document.getElementById('v');
  var ajax = new XMLHttpRequest() //crea el objeto ajax 
  ajax.open("get", 'contador.php', true);
  ajax.onreadystatechange = function () {
      if (ajax.readyState == 4) {
          contenedor.innerHTML = ajax.responseText;
      }
  }
  ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
  ajax.send();
}

function productos() {
  var contenedor;
  contenedor = document.getElementById('contenido');
  fetch('read.php')
      .then(response => response.text())
      .then(data => contenedor.innerHTML = data);
}

function clientes() {
  var contenedor = document.getElementById('contenido');
  var ajax = new XMLHttpRequest() //crea el objeto ajax 
  ajax.open("get", 'mostrar.php', true);
  ajax.onreadystatechange = function () {
      if (ajax.readyState == 4) {
          contenedor.innerHTML = ajax.responseText;
      }
  }
  ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
  ajax.send();
}