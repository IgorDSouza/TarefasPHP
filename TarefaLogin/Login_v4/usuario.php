<?php
    class Usuario{
        private $usuario;
        private $senha;
    
        public function setUsuario($usuario){
           $this->usuario = $usuario;
        }
        public function getUsuario(){
            return $this->usuario;
        }
    
        public function setSenha($senha){
            $this->senha= $senha;
        }
        public function getSenha(){
            return $this->senha;
        }
    }
?>