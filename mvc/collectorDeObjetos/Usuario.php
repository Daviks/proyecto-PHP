<?php
  class usuario{
      
      private $idUsuario;
      private $usuario;
      private $contrasena;
      private $cliente;
      
      function construc($idUsuario,$usuario,$contrasena,$cliente){
          $this->idUsuario=$idUsuario;
          $this->usuario=$usuario;
          $this->Contraseña=$contrasena;
          $this->Cliente=$cliente;
      }
      
      function setId_Usuario($idUsuario){
          $this->idUsuario=$idUsuario;
      }
      function getId_Usuario(){
          $this->idUsuario;
      }
      
      function setUsuario($usuario){
          $this->usuario=$usuario;
      }
      function getUsuario(){
         return $this->usuario;
      }
      
      function setContrasena($contrasena){
          $this->contrasena=$contrasena;
      }
      function getContrasena(){
          return $this->contrasena;
      }
      
      function setCliente($cliente){
          $this->cliente=$cliente;
      }
      function getCliente(){
          return $this->cliente;
      }
      
  }?>