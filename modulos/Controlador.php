<?php 

include_once("../clases/Estudiante.php");

class controladorEstudiantes{
	private $estudiante;
	public function __construct(){
		$this->estudiante = new Estudiante();
	}
	public function index(){
		$resultado =  $this->estudiante->listar();
		return $resultado;
	}

	public function crear($cedula, $nombre, $apellido, $edad, $nota1, $nota2, $nota3){
		$this->estudiante->set("cedula", $cedula);
		$this->estudiante->set("nombre", $nombre);
		$this->estudiante->set("apellido", $apellido);
		$this->estudiante->set("telefono", $telefono);
		$this->estudiante->set("edad", $edad);
		$this->estudiante->set("promedio", $promedio);

		$resultado=$this->estudiante->crear();
		return $resultado;

	}
	public function eliminar($id){
		$this->estudiante->set("id",$id);
		$this->estudiante->ver();

	}
	public function editar($id){
		$this->estudiante->set("id",$id);
		$this->estudiante->ver();
		$this->estudiante->editar();
	}


}



?>