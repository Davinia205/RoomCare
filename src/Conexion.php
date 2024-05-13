<?php

  
 
namespace Clases;

use PDO;
use PDOException;

class Conexion
{
    /**
     * clase que permite establecer conexión con la base de datos
     */
    private $host;
    private $db;
    private $username;
    private $password;
    private $dsn;
    protected $conexion;

    public function __construct()
    {
        /**
         * Contructor de la conexión con la base de datos
         */
        $this->host = "localhost";
        $this->db = "perfectroom";
        $this->username = "gestor";
        $this->password = "secreto";
        $this->dsn = "mysql:host={$this->host};dbname={$this->db};charset=utf8mb4";
        $this->crearConexion();
    }

    public function crearConexion()
    {
        /**
         * método que establece la conexión con la base de datos
         */
        try {
            $this->conexion = new PDO($this->dsn, $this->username, $this->password);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $ex) {
            die("Error en la conexión: mensaje: " . $ex->getMessage());
        }
        return $this->conexion;
    }


public function cerrar(&$con){
    /**
     * método para cerrar la conexión con la base de datos
     */
    $con = null;
   }
}