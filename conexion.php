<?php
$host="localhost";
$user="root";
$pwd="";
$db="trayectoria_escolar";
$mysqli =mysqli_connect($host,$user,$pwd,$db);
if(!$mysqli){
	echo 'Error al conectar a la base de datos desde conexion.';
}
$mysqli->set_charset("utf8");
/*else{
	echo 'Conectando a la base de datos.';
}*/

/*$mysqli = new mysqli("localhost","root","","trayectoria_escolar"); 		if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}*/
	
	/*
	function Conectar(){
		$conn = null;
		$host = 'localhost';
		$db = 'trayectoria_escolar';
		$user = 'root';
		$pwd = '';
		try{
			$conn = new PDO('mysql:host='.$host.';dbname='.$db,$user,$pwd);
			
		}catch(PDOExeption $e){
			echo ':( Error al conectar con la base de datos'.$e;
			exit;
		}
		return $conn;
	}
	*/
?>