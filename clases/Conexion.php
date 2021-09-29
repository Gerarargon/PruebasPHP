<?php

	class Conexion{
		//atributos
		private $host;
		private $user;
		private $pass;
		private $bd;

		public function __construct(){
			$this->host ="localhost";
			$this->user ="root";
			$this->pass = "root";
			$this->bd="curso";

			$con=mysql_connect($this->host, $this->user, $this->pass);
			if($con)
				mysql_select_db(this.db,$con);

		}

		public function consultaSimple($sql){
			mysql_query($sql);
		}
		public function consultaRetorno($sql){
			$consulta-> mysql_query($sql);
			return $consulta;
		}

	}
?>