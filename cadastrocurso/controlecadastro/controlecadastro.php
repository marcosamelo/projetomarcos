<?php

$nome=$_POST["nome"];
$coordenador=$_POST["coordenador"];
$cargahoraria=$_POST["cargahoraria"];


   
    
   include ("../classecurso/classecurso.php");


        $teste = new Curso ();		
      $copia = $teste-> cadastroCurso($nome, $coordenador, $cargahoraria);
      
      
      
      
    foreach($copia as $curso => $cadastro){
     echo "Curso = " .$cadastro["Curso"]."<br>" ;
      echo "Coordenador = " .$cadastro["Coordenador"]."<br>" ;
       echo "Carga horaria = " .$cadastro["Cargahoraria"]."<br>" ;
   
}
        
//var_dump ($copia);
       // $teste-> setCoordenador ($coordenador);
		//$teste-> setCargaHoraria ($cargahoraria);
        
        // echo $teste->getNome();
        // echo "<br>";
        // echo $teste->getCoordenador();
        // echo "<br>";
       //  echo $teste->getCargaHoraria();

?>
