<?php
//include 'Producto';
class ConsultaProductos{
    
private function Conexion(){
     $miconn = new mysqli("localhost", "root", "avaras08", "ventas");
     if ($miconn->connect_errno) {
        return "Fallo al conectar a MySQL: (" . $miconn->connect_errno . ") " . $miconn->connect_error;
     }
     return $miconn;  
  }
}


