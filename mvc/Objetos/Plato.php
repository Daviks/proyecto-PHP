<?
include_once('Categoria.php');

class Plato extends Categoria

{
	private $idPlato;
	private $nombre;
	private $precio;
	private $descripcion;


	function __construct($idPlato, $nombre, $precio, $descripcion){
		$this->idPlato = $idPlato;
       	$this->nombre = $nombre;
       	$this->precio = $precio;
       	$this->descripcion = $descripcion;
 
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
}