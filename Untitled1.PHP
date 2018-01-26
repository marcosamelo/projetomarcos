<?php
	/**
	* 
	*/
	class curso{
		public $nome, $coordenador, $cargaHoraria, $vetorCurso;

		public function setNome($nome){
			$this-> nome= $nome;
		}
		public function getNome(){
			return $this-> nome;
		}

		public function setCoordenador($coordenador){
			$this-> nome= $coordenador;
		}
		public function getCoordenador(){
			return $this-> coordenador;
		}

		public function setCargaHoraria($cargaHoraria){
			$this-> nome= $cargaHoraria;
		}
		public function getCargaHoraria(){
			return $this-> cargaHoraria;
		}

		public function setVetorCurso($vetorCurso){
			$this-> nome= $vetorCurso;
		}
		public function getVetorCurso(){
			return $this-> vetorCurso;
		}


		public function __construct(){
			$vetorCurso= array();
			$this-> vetorCurso= $vetorCurso;
		}

		public function cadastroCurso(
			$nome, $coordenador, $cargaHoraria){
			$this-> setNome($nome);
			$this-> setCoordenador($coordenador);
			$this-> setCargaHoraria($cargaHoraria);
			$this-> setVetorCurso[]= array($this-> getNome(), $this-> getCoordenador(), $this-> getCargaHoraria());
			var_dump($this-> setVetorCurso);
		}
	}
?>