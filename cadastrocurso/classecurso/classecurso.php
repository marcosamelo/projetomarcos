<?php

class Curso
{
       
 public $nome, $coordenador, $cargahoraria, $vetorCurso;
 
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
   
   public function cadastroCurso($nome, $coordenador, $cargahoraria){
			$this-> setNome($nome); 
			$this-> setCoordenador($coordenador);
			$this-> setCargaHoraria($cargahoraria);
			$this-> vetorCurso[]= array("Curso" => $this-> getNome(), "Coordenador" => $this-> getCoordenador(), "Cargahoraria"=> $this-> getCargaHoraria());
			
			return $this->vetorCurso;
		//	var_dump($this-> vetorCurso);
	   //	echo $this->getNome();
			}
			
			 
   
     public function setNome($nome)
    {
        $this->nome=$nome;
        }
         public function getNome(){
             return $this->nome;
        }
        
     public function setCoordenador($coordenador)
    {
          $this->coordenador=$coordenador;
        }
             public function getCoordenador(){
                return $this->coordenador;
        }
      public function setCargaHoraria($cargahoraria)
    {
          $this->cargahoraria=$cargahoraria;
        }
             public function getCargaHoraria (){
                return $this->cargahoraria;
        }
		
		
}

       

?>
