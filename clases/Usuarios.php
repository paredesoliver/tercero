<?php 
require_once("Conexion.php");
class Usuarios extends Conexion
{
	function lista_usuarios(){
		if($this->con){
			return $this->con->query("SELECT * FROM usuarios");
		}
    }
    function create_user($datos){
		if($this->con){
			return $this->con->query("INSERT INTO usuarios (apellidos,
															nombres,
															correo,
															telefono,
															direccion,
															ciudad,
															sexo,
															username,
															password) 
												VALUES (    '$datos[0]',
														    '$datos[1]',
															'$datos[2]',
														    '$datos[3]',
														    '$datos[4]',
														    '$datos[5]',
														    '$datos[6]',
														    '$datos[7]',
														    '$datos[8]'
															)
															");
		}
	}
	function actualizar_usuario($ap,$nm,$cu,$dir,$tlf,$co,$sex,$us,$pss,$id){
		if($this->con){
			return $this->con->query("UPDATE usuarios set 
										apellido='$ap',
										nombre='$nm',
										ciudad='$cu',
										direccion='$dir',
										telefono='$tlf',
										correo='$co',
										sexo='$sex',
										usuario='$us',
										password='$pss'
										WHERE id=$id
										");
		}
	}
}
// $Usuarios=new Usuarios(); $datos=$Usuarios->lista_usuarios();
// var_dump($datos);

?>