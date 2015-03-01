<?php
class Cliente{
    private $Id_Cliente;
    private $Nombre;
    private $Apellido;
    private $Email;
    private $Numero_Tarjeta;
    private $Tipo_Cliente;
    
    
    function construct($id_cliente,$nombre,$apellido,$email,$numero_tarjeta,$tipo_cliente){
        $this->Id_Cliente=$id_cliente;
        $this->Nombre=$nombre;
        $this->Apellido=$apellido;
        $this->Email=$email;
        $this->Numero_Tarjeta=$numero_tarjeta;
        $this->Tipo_Cliente=$tipo_cliente;
    }
    
    function setID_Cliente($id_cliente){
        $this->Id_Cliente=$id_cliente;        
    }
    function getID_Cliente(){
        return $this->Id_Cliente;
    }
    
    function setNombre($nombre){
        $this->Nombre=$nombre;
    }
    function getNombre(){
        return $this->Nombre;
    }
    
    function setApellido($apellido){
       $this->Apellido=$apellido;        
    }
    function getApellido(){
        return $this->Apellido;
    }
    
    Function setEmail($email){
        $this->Email=$email;
    }
    Function getEmail(){
        return $this->Email;
    }
    
    function setNumero_Tarjeta($numero_tarjeta){
        $this->Numero_Tarjeta=$numero_tarjeta;
    }
    function getNumero_Tarjeta(){
        return $this->Numero_Tarjeta;
    }
    function setTipo_Cliente($tipo_cliente){
        $this->Tipo_Cliente=$tipo_cliente;
    }
    Function getTipo_Cliente(){
        return $this->Tipo_Cliente;
    }
}?>