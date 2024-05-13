<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
<!--bootstrap mobile first-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<style> 
   body {
    font-family: Verdana;
   
}
img {
           max-width:100%;
}

.btn {
    border: none;
    border-radius: 4px;
    background-color: #0DCAF0;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
}

@media (max-width: 600px) {
    .update-container {
        width: 100%;
        padding: 15px;
    }
}
</style>

<body>
<div class="update-container">
<img src="../views/images/room.jpg">
<div id="errorMessage" style="color: red; display: none;"></div>
    </div>
<div id="confirmMessage" style="color: green; display: none;"></div>
    </div>
<br></br>
    <b><p>Actualización de estado de habitaciones:</p></b>
    <!-- <form action="../public/inspeccion_ocupada.php" method="post"> -->
        
    <form id="status" method="post" onsubmit="return validateUser()">
    <div class="form-group">
        <label for="Numero">Número de habitación: </label><input type="text" class="form-control" name="id_habitacion" id="id_habitacion" required></ul><br>
        <label for="Planta">Planta: </label><input type="text" class="form-control" name="planta" id="planta" required></ul><br>
        <label for="Ocupada">Ocupada</label>
        <select name="ocupada" class="form-control" id="ocupada" required>
            <option value="sí">Sí</option>
            <option value="no">No</option>
        </select>
        <label for="Salida">Salida</label>
        <select name="salida" class="form-control" id="salida" required>
            <option value="sí">Sí</option>
            <option value="no">No</option>
        </select>
        <br></br>
        <center><input type="submit" class="btn btn-info" role="button" name="enviar"> <a href="../views/dashboard_view.php" class="btn btn-info" role="button"> Volver  </a>   <a href="../view/login_view.php" class="btn btn-info" role="button"> Salir   </a> 
    </a></center>

    <script>
// function validate() {
//     var username = document.getElementById('usuario').value;
   

//     // Validación básica del lado del cliente
//     if (usuario.trim() === '') {
//         document.getElementById('errorMessage').textContent = 'Por favor, introduce un nombre de usuario';
//         document.getElementById('errorMessage').style.display = 'block';
//         return false;
//     }

//     return true; // Envía el formulario si la validación del cliente pasa
// }
// </script>
</body>
</html>