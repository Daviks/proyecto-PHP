<?php
class Ayuda
{
    private $Id_Ayuda;
    private $Nombre;
    private $Email;
    private $Mensaje;
    
    
    function __construct($Id_Ayuda,$Nombre,$Email,$Mensaje)
    {
        $this->Id=$Id_Ayuda;
        $this->Nombre=$Nombre;
        $this->Email=$Email;
        $this->Mensaje=$Mensaje;
    }
    
    function setId($Id_Ayuda)
    {
        $this->Id=$Id_Ayuda;        
    }
    function getId()
    {
        return $this->Id;
    }
    
    function setNombre($Nombre)
    {
        $this->Nombre=$Nombre;
    }
    function getNombre()
    {
        return $this->Nombre;
    }
      
    function setEmail($Email)
    {
        $this->Email=$Email;
    }
    function getEmail()
    {
        return $this->Email;
    }
    
    function setMensaje($Mensaje)
    {
        $this->Mensaje=$Mensaje;
    }
    function getMensaje()
    {
        return $this->Mensaje;
    }

}
?>
