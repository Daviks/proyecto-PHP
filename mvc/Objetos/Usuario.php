<?php
  class Usuario{
      
      private $Id_Usuario;
      private $Usuario;
      private $Contrase�a;
      private $Cliente;
      
      function construc($id_usuario,$usuario,$contrase�a,$cliente){
          $this->Id_Usuario=$id_usuario;
          $this->Usuario=$usuario;
          $this->Contrase�a=$contrase�a;
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
      
      function setContrase�a($contrase�a){
          $this->Contrase�a=$contrase�a;
      }
      function getContrase�a(){
          return $this->Contrase�a;
      }
      
      function setCliente($cliente){
          $this->CLiente=$cliente;
      }
      function getCliente(){
          return $this->Cliente;
      }
      
  }?>