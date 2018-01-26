<?php

  class usuario
  {
      private $nome,$endereco,$bairro,$cidade,$estado,$email,$telefone,$login,$senha,$ativo;
      public function __set($name,$value){
          $this-> $name=$value;
      }
      public function __get($name){
          return $this->$name;
      }


  public function cadastrarUsuario($nome,$endereco,$bairro,$cidade,$estado,$email,$telefone,$login,$senha,$ativo){
    $this->nome=$nome;
    $this->endereco=$endereco;
    $this->bairro=$bairro;
    $this->cidade=$cidade;
    $this->estado=$estado;
    $this->email =$email;
    $this->telefone=$telefone;
    $this->login=$login;
    $this->senha=$senha;
    $this->ativo=$ativo;
             
    $sql="INSERT INTO usuario(Nome,Endereco,Bairro,Cidade,Estado,Email,Telefone,Login ,Senha,Ativo) values ('$this->nome',
    '$this->endereco','$this->bairro','$this->cidade','$this->estado','$this->email',$this->telefone','$this->login','$this->senha','$this->ativo')";
    
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
  
  public function alterar($id, $nome,$endereco,$bairro,$cidade,$estado,$email,$telefone,$login,$senha,$ativo){
    $this->id=$id;
    $this->nome=$nome;
    $this->endereco=$endereco;
    $this->bairro=$bairro;
    $this->cidade=$cidade;
    $this->estado=$estado;
    $this->email =$email;
    $this->telefone=$telefone;
    $this->senha=$senha;
    $this->ativo=$ativo;
    $sql="UPDATE usuario SET Nome ='$this->nome',Endereco ='$this->endereco',Bairro ='$this->bairro', 
    Cidade ='$this->cidade',Estado ='$this->estado',Email ='$this->email',Telefone ='$this->telefone',  
    Senha ='$this->senha', Ativo='$this->ativo'
    where ID = '$this->id'";
  
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