<?php
  namespace App\models;
  
  class Usuario{
      protected $id;
      protected $user;
      protected $pwd;

      function getId(){
          return $this->id;
      }

      function setId($value){
          $this->id = $value;
        }
        
      function getUsuario(){
          return $this->user;
        }
      
        function setUsuario($value){
          $this->user = $value;
        }
        
        function getPwd(){
          return $this->pwd;
        }
        
        function setPwd($value){
          $this->pwd = $value;
        }
    }
