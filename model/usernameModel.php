<?php
    class modelousuario{
        private $PDO;
        public function __construct()
        {
            require_once("c://xampp/htdocs/proyecto/config/db.php");
            $con = new db();
            $this->PDO = $con->conexion();
        }
        public function insertar($nombre,$a_paterno,$a_materno,$usuario,$correo,$contrasena,$fecha_n){
            $stament = $this->PDO->prepare("INSERT INTO usuario VALUES(null,:nombre,:a_paterno,:a_materno,:usuario,:correo,:contrasena,:fecha_n)");
            $stament->bindParam(":nombre",$nombre);
            $stament->bindParam(":a_paterno",$a_paterno);
            $stament->bindParam(":a_materno",$a_materno);
            $stament->bindParam(":usuario",$usuario);
            $stament->bindParam(":correo",$correo);
            $stament->bindParam(":contrasena",$contrasena);
            $stament->bindParam(":fecha_n",$fecha_n);
            return ($stament->execute()) ? $this->PDO->lastInsertId() : false ;
        }
        public function show($id){
            $stament = $this->PDO->prepare("SELECT * FROM usuario where id = :id limit 1");
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? $stament->fetch() : false ;
        }
        public function index(){
            $stament = $this->PDO->prepare("SELECT * FROM usuario");
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }
        public function update($id,$nombre,$a_paterno,$a_materno,$usuario,$correo,$contrasena,$fecha_n){
            $stament = $this->PDO->prepare("UPDATE usuario SET nombre = :nombre, a_paterno = :a_paterno, a_materno = :a_materno, usuario = :usuario, correo = :correo, contrasena = :contrasena, fecha_n = :fecha_n WHERE id = :id");
            $stament->bindParam(":nombre",$nombre);
            $stament->bindParam(":a_paterno",$a_paterno);
            $stament->bindParam(":a_materno",$a_materno);
            $stament->bindParam(":usuario",$usuario);
            $stament->bindParam(":correo",$correo);
            $stament->bindParam(":contrasena",$contrasena);
            $stament->bindParam(":fecha_n",$fecha_n);
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? $id : false;
        }
        public function delete($id){
            $stament = $this->PDO->prepare("DELETE FROM usuario WHERE id = :id");
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? true : false;
        }
    }

?>