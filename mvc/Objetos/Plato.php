<?php

class Plato 

{
	private $idPlato;
	private $nombre;
	private $precio;
	private $descripcion;
  private $categoria;

	function __construct($idPlato, $nombre, $precio, $descripcion, $categoria){
		$this->idPlato = $idPlato;
       	$this->nombre = $nombre;
       	$this->precio = $precio;
       	$this->descripcion = $descripcion;
        $this->categoria = $categoria;
 
	}
	function setIdPlato($idPlato){
       $this->idPlato = $idPlato;
     } 
     function getIdPlato(){
       return $this->idPlato;
     }

     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     }

     function setPrecio($precio){
       $this->precio = $precio;
     } 
     function getPrecio(){
       return $this->precio;
     }

      function setDescripcion($descripcion){
       $this->descripcion = $descripcion;
     } 
     function getDescripcion(){
       return $this->descripcion;
     }
     function setCategoria($categoria){
       $this->categoria = $categoria;
     } 
     function getCategoria(){
       return $this->categoria;
     }
}

?> 