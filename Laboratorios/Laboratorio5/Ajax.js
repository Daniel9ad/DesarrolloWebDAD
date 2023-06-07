function pregunta1() {
    var contenedor;
    contenedor = document.getElementById('contenido');
    var ajax = new XMLHttpRequest() //crea el objeto ajax 
    ajax.open("get", 'cambiaratributos.html', true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}

function modificar(){
    var alto = document.getElementById('alto').value;
    var ancho = document.getElementById('ancho').value;
    var opcionColor = document.getElementById('scolor').value;
    var mcolor = document.getElementById('color').value;
    var opcionElemento = document.getElementById('ids').value
    console.log(alto);
    console.log(ancho);
    console.log(opcionColor);
    console.log(mcolor);
    console.log(opcionElemento);
    var elemento = document.getElementById(opcionElemento)
    elemento.style.width = ancho+'px'
    elemento.style.height = alto+'px'
    if(opcionColor=='cf'){
        elemento.style.backgroundColor = mcolor
    }else if (opcionColor=='cl'){
        elemento.children[0].style.color = mcolor
    }
}

function pregunta3() {
    var contenedor;
    contenedor = document.getElementById('contenido');
    var ajax = new XMLHttpRequest() //crea el objeto ajax 
    ajax.open("get", 'seleccionar.html', true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
    cargarMapa()
}

function cargarMapa() {
    var contenedor;
    contenedor = document.getElementById('cal');
    var ajax = new XMLHttpRequest() //crea el objeto ajax 
    ajax.open("get", 'calendario.php?mes=1', true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}
