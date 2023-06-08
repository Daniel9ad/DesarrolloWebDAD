function pregunta2() {
    var contenedor;
    contenedor = document.getElementById('contenido');
    fetch('tabla.html')
        .then(response => response.text())
        .then(data => contenedor.innerHTML = data);
}


function calcularOperacion() {
    //carga el contenido de una pagina en el lugar done estan los datos
    var contenedor = document.getElementById("resultado");
    var formulario = document.getElementById("options_nm");//le pasamos todo el  formulario en uno
    var parametros = new FormData(formulario);//aqui el formulario lo transforma en un objeto de tipo formdata
    console.log(parametros);
    fetch("calcular.php",
        {
            method: "POST",
            body: parametros
        })
        .then(response => response.text())
        .then(data => contenedor.innerHTML = data);
}















function mostrarTabla(tabla,seleccion,limite){
    console.log("En fetch");
    var contenedor;
    contenedor = document.getElementById('resultado');
    fetch('calcular.php?tabla='+tabla+'&seleccion='+seleccion+'&limite='+limite)
        .then(response => response.text())
        .then(data => {
            console.log(data);
            contenedor.innerHTML = data;
        });
}

function mostrar() {
    var tabla = document.getElementById("tablad").value
    var radios = document.getElementsByName('opcion');
    var seleccion;
    for (var i = 0; i < radios.length; i++) {
      if (radios[i].checked) {
        seleccion = radios[i].value
        break;
      }
    }
    var limite = document.getElementById('lim').value
    console.log("mostrando");
    mostrarTabla(tabla,seleccion,limite)
}