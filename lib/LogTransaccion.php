<?php
include '../lib/conexion.php';
/*Instanción objeto de conexion*/
$conn=new Conexion;
if ($conn->conectar()){
$idlogtrans=$_POST["IDLOGTRANSACCIONES"];
$acceso=$_POST["IDACCESO"];
$nomtabla=$_POST["NOMTABLA"];
$accion=$_POST["ACCION"];
$descrip=$_POST["DESCRIPCION"];
$sql="INSERT INTO logtransacciones(IDLOGTRANSACCIONES,IDACCESO,NOMTABLA,ACCION,DESCRIPCION) values('$idlogtrans','$acceso','$nomtabla','$accion','$descrip')";
$conn->objconn->query($sql);
echo $sql;
}