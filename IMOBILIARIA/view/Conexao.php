<?php
class Conexao{
private $servername="localhost3306";
private $username="root";
private $password="HORTETEC_115";
private $database="imobiliaria";
private $conection;

        public function getConection(){
            if(is_null($this->conection)){
                $this->conection = new PDD('mysql:host='.$this->servername.';dbname='.$this->database,$this->username,$this->password);
                $this->conection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
                $this->conection->exec('set names utf8');
            }
            return $this->conection;
        }
}
