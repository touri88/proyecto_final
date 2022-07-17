<?php

class conexion{
    #atributos que son propios del objeto
    private $servidor ="us-cdbr-east-06.cleardb.net";
    private $usuario ="b1558c6ef0931c";
    private $pass = "64f6be32";
    private $conexion_pdo;#objeto de tipo pdo, de la clase propia de php
    private $base = "heroku_312ba91e3f6cf95";
   
    public function __construct(){
        try{
            $this->conexion_pdo = new PDO("mysql:host=$this->servidor;dbname=$this->base",$this->usuario,$this->pass);
            #ACTIVAMOS LOS ERRORES Y LAS EXCEPTIONES
            $this->conexion_pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        }catch(PDOException $e){
            return "Falla de Conexión".$e;
        }
    }

     #creo un metodo de ejecucion a sql de insert, update, delete   
    public function ejecutar($sql){
        #Execute una consulta de sql
        $this->conexion_pdo->exec($sql);
        #esto nos da el valor de id insertado
        return $this->conexion_pdo->lastInsertId();
    }
    public function consultar($sql){ # select 
        #ejecuta la consulta y nos devuelve la info de la base
        $sentencia = $this->conexion_pdo->prepare($sql);
        $sentencia->execute();
        #retorna todos los registros de la consulta sql
        return $sentencia->fetchAll();
    }


}

?>