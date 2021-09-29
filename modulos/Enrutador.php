<?php
	class Enrutador{
		public function cargarVista($vista){
			switch ($vista):
				case 'crear':
					include_once('vistas/'. $vista . '.php');
					break;
				default:
					include_once('vistas/error.php');
					break;
		endswitch;
		}
		public function validarGET($varible){
			if(empty($varible)){
				include_once('vistas/inicio.php');
			}else{
				 return true;
			}

			}
		}
?>