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
           width:100%;
}
.enviar a  {

    border: none;
    border-radius: 4px;
    background-color: #0DCAF0;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
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
    .inspeccion-container {
        width: 100%;
        padding: 15px;
    }
}
</style>


</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<div class="inspeccion-container">
<img src="../views/images/room.jpg">
<div id="errorMessage" style="color: red; display: none;"></div>
    </div>
<div id="confirmMessage" style="color: green; display: none;"></div>
    </div>
<br></br>
    <b><p>Rellene los datos de la Inspección Habitación Ocupada:</p></b>
        
    <form id="login" method="post" onsubmit="return validateUser()">
    <div class="form-group">
        <p>Realizada por(introduzca usuario) <input type="text" class="form-control"  name="usuario" id="usuario" required></p><br>
        <p>Código de Hotel <input type="text" class="form-control" name="id_hotel" id="id_hotel" required></p><br>
        <p>Número de habitación <input type="text" class="form-control" name="id_habitacion" id="id_habitacion" required></p><br>
        <p>Planta<input type="number" class="form-control"name="planta" id="planta"></p>
        <p>Check List </p>
         <label for="Ropa sucia">Ropa sucia</label>
        <select name="ropa_sucia" class="form-control" id="ropa_sucia">
            <option value="Sí">Sí</option>
            <option value="No">No</option>
        </select>
        <br></br>
          
         <label for="Papeleras">Papeleras</label>
        <select name="papeleras" class="form-control" id="papeleras">
            <option value="Sí">Sí</option>
            <option value="No">No</option>
        </select>
        <br></br>
          
         <label for="Camas">Camas</label>
        <select name="camas" class="form-control" id="camas">
            <option value="Sí">Sí</option>
            <option value="No">No</option>
        </select>
        <br></br>
          
         <label for="Polvo">Polvo</label>
        <select name="polvo" class="form-control" id="polvo">
            <option value="Sí">Sí</option>
            <option value="No">No</option>
        </select>
        <br></br>
          
         <label for="Suelo">Suelo</label>
        <select name="suelo" class="form-control" id="suelo">
            <option value="Sí">Sí</option>
            <option value="No">No</option>
        </select>
        <br></br>
          
         <label for="Servicio">Servicio</label>
        <select name="servicio" class="form-control" id="servicio">
            <option value="Sí">Sí</option>
            <option value="No">No</option>
        </select>
        <br></br>
          
         <label for="Toallas">Toallas</label>
        <select name="toallas" class="form-control" id="toallas">
            <option value="Sí">Sí</option>
            <option value="No">No</option>
        </select>
        <br></br>
          
        <label for="Minibar">Minibar</label>
        <select name="minibar" class="form-control" id="minibar">
            <option value="Sí">Sí</option>
            <option value="No">No</option>
        </select>
        <br></br>
         
         <label for="Amenities">Amenities</label>
        <select name="amenities" class="form-control" id="amenities">
            <option value="Sí">Sí</option>
            <option value="No">No</option>
        </select>
        <br></br>
         <label for="Olor">Olor</label>
        <select name="olor" class="form-control" id="olor">
            <option value="Sí">Sí</option>
            <option value="No">No</option>
        </select>
        <br></br>
        <div class="enviar"> 
        <center><input type="submit" class="btn btn-info" role="button"name="enviar">  <a href="../views/dashboard_view.php" class="btn btn-info" role="button"> Volver  </a>   <a href="../view/login_view.php" class="btn btn-info" role="button"> Salir   </a> 
    </a></center>
        </div>
          
    </form>
    
</div>
</body>
<script>
function validateUser() {
    var username = document.getElementById('usuario').value;
   

    // Validación básica del lado del cliente
    if (usuario.trim() === '') {
        document.getElementById('errorMessage').textContent = 'Por favor, introduce un nombre de usuario';
        document.getElementById('errorMessage').style.display = 'block';
        return false;
    }
     
    return true; // Envía el formulario si la validación del cliente pasa
}
</script>


</body>

</html>