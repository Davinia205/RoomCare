<?php
// Conexión a la base de datos (reemplaza con tus propios detalles)
require '../vendor/autoload.php';
use Clases\Conexion;
use Clases\Status;
use Clases\Hotel;

session_start(); #iniciamos sesión

$usuario = $_SESSION['usuario'];


$conn = new Conexion();
$conn->crearConexion();

// Obtener el ID del registro enviado desde el formulario

if ($_SERVER["REQUEST_METHOD"]== "GET"){
    $id_habitacion = $_GET['id_habitacion'];
    $id_hotel = $_GET['id_hotel'];
    $planta = $_GET['planta'];

    

    $statusHab = new Status();
    $hot = new Hotel();
    if ($hot-> existeHabitacion($id_hotel, $id_habitacion, $planta) ){
    $estadoHabitacion = $statusHab->statusHabitacion($id_hotel, $id_habitacion);
    
    //var_dump($estadoHabitacion); utilizado para pruebas
    
    // Mostrar el resultado de la consulta
    if ($estadoHabitacion !== false  ) {
        // Mostrar los datos del registro recuperado

        echo "Estado: ".$estadoHabitacion['estado'];
        echo "<br></br>";
        echo "Fecha y Hora Inspección: ".$estadoHabitacion['fecha'];      
 
    } else {
        echo "No se encontró ningún registro con el ID proporcionado.";
    }
 } else {
     echo "No se proporcionó un ID válido.";
}

}