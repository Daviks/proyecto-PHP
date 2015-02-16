<?php
  class Usuario{
      
      private $Id_Usuario;
      private $Usuario;
      private $Contraseña;
      private $Cliente;
      
      function construc($id_usuario,$usuario,$contraseña,$cliente){
          $this->Id_Usuario=$id_usuario;
          $this->Usuario=$usuario;
          $this->Contraseña=$contraseña;
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
      
      function setContraseña($contraseña){
          $this->Contraseña=$contraseña;
      }
      function getContraseña(){
          return $this->Contraseña;
      }
      
      function setCliente($cliente){
          $this->CLiente=$cliente;
      }
      function getCliente(){
          return $this->Cliente;
      }
      
  }?>