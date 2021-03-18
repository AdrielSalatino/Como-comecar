<?php

class usuario {
   private $id;
   private $nome;
   private $email;
   private $senha;
   private $telefone;
   private $ramo;
   private $sql;
   
   
   public function getId(){
       return $this->id;
       
}
     public function setId($id){
       $this->id = $id;
       
}
   public function getNome(){
       return $this->nome;
       
}
     public function setNome($nome){
       $this->nome = $nome;
       
}
   public function getEmail(){
       return $this->email;
       
}
     public function setEmail($email){
       $this->email = $email;
       
}
   public function getSenha(){
       return $this->senha;
       
}
     public function setSenha($senha){
        $this->senha = $senha;
       
}
   public function getTelefone(){
       return $this->telefone;
       
}
     public function setTelefone($tel){
      $this->telefone = $tel;
       
}
   public function getRamo(){
       return $this->ramo;
       
}
     public function SetRamo($ramo){
       return $this->ramo = $ramo;
       
}


    
    
    
}
