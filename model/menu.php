<?php
	
	/**
	* Clase menú
	*/
	class menu{
		
		private $id;
		private $cod;
		private $nombre;
		private $horizontal;
		private $vertical;
		private $padre;
		private $link;

		public function __construct(){
			$this->con = new Conexion();
		}

		public function set($atributo, $contenido){
			$this->$atributo = $contenido;
		}

		public function get($atributo){
			return $this->$atributo;
		}

		public function menuPadreV(){
			$sql = "SELECT * FROM menu WHERE vertical = 1 AND padre IS NULL";
			$datos = $this->con->consultaRetorno($sql);
			return $datos;
		}

		public function menuPadre(){
			$sql = "SELECT * FROM menu WHERE padre IS NULL";
			$datos = $this->con->consultaRetorno($sql);
			return $datos;
		}

		public function menuHijosV($padre){
			$sql = "SELECT * FROM menu WHERE vertical = 1 AND padre = ".$padre;
			$datos = $this->con->consultaRetorno($sql);
			return $datos;
		}		
	}
?>