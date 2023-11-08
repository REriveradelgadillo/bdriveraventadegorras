<?php
    require_once("c://xampp/htdocs/proyecto/controller/usernameController.php");
    $obj = new usuarioclase();
    $obj->delete($_GET['id']);

?>