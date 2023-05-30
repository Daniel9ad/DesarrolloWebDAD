function cargarD() {
    var contenedor;
    contenedor = document.getElementById('d');
    var ajax = new XMLHttpRequest() //crea el objeto ajax 
    ajax.open("get", 'generar1.php', true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}

function cargarP(id) {
    var contenedor;
    contenedor = document.getElementById('p');
    var ajax = new XMLHttpRequest() //crea el objeto ajax 
    ajax.open("get", 'generar2.php?id='+id, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}