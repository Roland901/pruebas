<?php
include 'conexion.php';

$cedula1 = $_POST['cedula2'];
$nombre1 = $_POST['nombre'];
 // echo "<script type='text/javascript'> alert(".$nombre1.");</script>";
$query="SELECT dd_cedula_prof, dd_nombre, dd_apellido_paterno, dd_apellido_materno, dd_id_doctor FROM datos_doctor WHERE dd_cedula_prof= '$cedula1' AND dd_nombre='$nombre";
$resultado=$mysqli->query($query);
// echo $resultado;
 $rows = $resultado->fetch_row();
 // echo "<script type='text/javascript'> alert('llego a rows');</script>";
header('Content-Type: application/json');
 $datos = array(
'cedula' => $rows[0], 
'nombre' => $rows[1], 
'paterno' => $rows[2],
'materno' => $rows[3],
'id' => $rows[4]
);
 echo json_encode($datos, JSON_FORCE_OBJECT);
// echo $nombre1."resultados: ".$rows[0].$rows[1].$rows[2].$rows[3].$rows[4];
?>
