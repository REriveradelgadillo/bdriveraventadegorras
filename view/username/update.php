<?php
    require_once("c://xampp/htdocs/proyecto/controller/usernameController.php");
    $obj = new usuarioclase();
    $obj->update($_POST['id'],$_POST['nombre'],$_POST['a_paterno'],$_POST['a_materno'],$_POST['usuario'],$_POST['correo'],$_POST['contrasena'],$_POST['fecha_n']);

?>