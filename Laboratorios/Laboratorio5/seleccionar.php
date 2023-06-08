<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <label for="">Mes</label>
        <select id="mes" onchange="cargar()">
            <option value="1">Enero</option>
            <option value="2">Febrero</option>
            <option value="3">Marzo</option>
            <option value="4">Abril</option>
            <option value="5">Mayo</option>
            <option value="6">Junio</option>
            <option value="7">Julio</option>
            <option value="8">Agosto</option>
            <option value="9">Septiembre</option>
            <option value="10">Octubre</option>
            <option value="11">Noviembre</option>
            <option value="12">Diciembre</option>
        </select>
    </div>
    <div>
        <label for="">Año</label>
        <select id="anio" onchange="cargar()">
            <?php
            // Obtener el año actual
            $currentYear = date('Y');
            // Generar opciones desde 1975 hasta el año actual (2023)
            for ($year = 1975; $year <= $currentYear; $year++) {
              echo "<option value='$year'>$year</option>";
            }
            ?>
          </select>                  
    </div>
    <div id="resultado">
        
    </div>
</body>

</html>