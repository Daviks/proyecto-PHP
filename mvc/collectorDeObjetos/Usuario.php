<?php
  class usuario{
      
      private $Id_Usuario;
      private $Usuario;
      private $Contrasena;
      private $Cliente;
      
      function construc($id_usuario,$usuario,$contrasena,$cliente){
          $this->Id_Usuario=$id_usuario;
          $this->Usuario=$usuario;
          $this->Contrase�a=$contrasena;
          $this->Cliente=$cliente;
      }
      
      function setId_Usuario($id_usuario){
          $this->Id_Usuario=$id_usuario;
      }
      function getId_Usuario(){
          $this->Id_Usuario;
      }
      
      function setUsuario($usuario){
          $this->Usuario=$usuario;
      }
      function getUsuario(){
         return $this->Usuario;
      }
      
      function setContrase�a($contrasena){
          $this->Contrase�a=$contrasena;
      }
      function getContrase�a(){
          return $this->Contrasena;
      }
      
      function setCliente($cliente){
          $this->CLiente=$cliente;
      }
      function getCliente(){
          return $this->Cliente;
      }
      
  }?>