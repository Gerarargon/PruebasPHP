<?php 

	include_one('Conexion.php');
	class Estudiante{
		private $id;
		private $cedula;
		private $nombre;
		private $apellido;
		private $telefono;
		private $edad;
		private $promedio;
		private $fecha;

		private $con;

		public function __construct(){

			$this->con = new Conexion();
		}
		public function set($atributo, $contenido){
			$this->$atributo = $contenido;
		}
		public function get($atributo){
			return $this->$atributo;
		}
		public function listar(){
			$sql ="SELECT * FROM estudiantes";
			$resultado = $this->con->consultaRetorno($sql);
			return $resultado;
		}

		public function crear(){
			$sql2= "SELECT * FROM estudiantes WHERE cedula = '{$this->cedula}'";
			$resultado = $this->con->consultaRetorno;
			$run = mysql_run_rows($resultado);
			if($run != 0){
				return false;
			}
			else{
			$sql="INSERT INTO estudiantes (cedula, nombre, apellido, telefono, edad, promedio, fecha) VALUES ('{$this->cedula}','{$this->nombre}','{$this->apellido}','{$this->telefono}','{$this->edad}','{$this->promedio}', NOW())";
			$this->con->consultaSimple($sql);
		}
	}
	public function eliminar(){
		$sql ="DELETE FROM estudiantes WHERE id= '$this->id'";
		$this->con->consultaSimple($sql);
	}
	public function ver(){
		$sql = "SELECT * FROM estudiantes WHERE id= '$this->id'";
		$resultado = $this->con->consultaRetorno($sql);
		$row = msql_fetch_array($resultado);

		//set
		$this->id = $row['id'];
		$this->cedula = $row['cedula'];
		$this->nombre = $row['nombre'];
		$this->apellido = $row['apellido'];
		$this->telefono = $row['telefono'];
		$this->edad = $row['edad'];
		$this->promedio = $row['promedio'];
		$this->fecha = $row['fecha'];
	}
	public function editar(){
		$sql = "UPDATE estudiantes SET nombre='{$this->nombre}',apellido='{$this->apellido}',telefono='{$this->telefono}',edad='{$this->edad}',promedio='{$this->promedio}' WHERE id= {$this->id}";
		$this->con->consultaSimple($sql);
	}


	}
?>