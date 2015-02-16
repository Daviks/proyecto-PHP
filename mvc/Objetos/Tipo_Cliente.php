<?php
class Tipo_Cliente{
    
    private $id_Tipo_Cliente;
    private $descripcion;
    
    function construct($id_tipo_cliente,$descripcion){
        
        $this->id_Tipo_Cliente=$ide_tipo_cliente;
        $this->descripcion=$descripcion;
        
    }
    
    function setId_Tipo_Cliente($id_tipo_Cliente){
        $this->id_Tipo_Cliente=$id_tipo_cliente;
        }
    function getId_Tipo_Cliente(){
        return $this->id_Tipo_Cliente;
    }
    
    function setDescripcion($descripcion){
        $this->descripcion=$descripcion;        
    }
    function getDescripcion(){
        return $this->descripcion;
    }   
}?>