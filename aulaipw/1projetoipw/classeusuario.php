<?php

  class usuario
  {
      private $id,$nome,$email,$login,$senha,$ativo;
      public function __set($name,$value){
          $this-> $name=$value;
      }
      public function __get($name){
          return $this->$name;
      }
  
  
  public function cadastrarUsuario($nome,$email,$login ,$senha,$ativo){
    $this->nome=$nome;
        $this->email =$email;
            $this->login=$login;
                $this->senha=$senha;
                    $this->ativo=$ativo;
                    
    $sql="INSERT INTO usuario(nome,email,login ,senha,ativo) values ('$this->nome',
    '$this->email','$this->login','$this->senha','$this->ativo')";
    
    include ("conecta_bd.php");
    $cadastro=$conectar->query($sql);
    if($cadastro){
      return 1;
    }
    else {return 0;
    }
  }
  
  
  
  
  
  public function listartodos(){
    include ("conecta_bd.php");
    $sql="select * from usuario order by nome asc";
    $listar =$conectar->query($sql);
    $array=array();
    while($linha=$listar->fetch_array()){
      $array[]=$linha;
    }
    return $array;
  }
  
  public function listarUm($codigo){
    include ("conecta_bd.php");
    $this->id = $codigo;
    $sql="select * from usuario where ID = '$this->id' order by nome asc";
    $listar =$conectar->query($sql);
    $array=array();
    while($linha=$listar->fetch_array()){
      $array[]=$linha;
    }
    return $array;
  }
  
  public function alterar($id, $nome,$email,$senha,$ativo){
    $this->ID=$id;
    $this->nome =$nome;
    $this->email =$email;
    $this->senha =$senha;
    $this->ativo =$ativo;
    $sql="UPDATE usuario SET Nome = '$this->nome' ,Email ='$this->email', 
    Senha ='$this->senha', Ativo='$this->ativo'
    where ID = '$this->ID'";
  
 include ("conecta_bd.php");
    $retorne=$conectar->query($sql);
    if ($retorne){
      return 1;
     } else {
       return 0;
     }
  }
}
  ?>