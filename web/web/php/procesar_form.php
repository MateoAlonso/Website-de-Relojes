<?php
    require_once("functions.php");
    $form=LeerArrayJson("Json","formulario.json");
    $index=count($form)+1;
    $form[$index]=
    [
        "nombre"=>$_GET["nombre"],
        "apellido"=>$_GET["apellido"],
        "correo"=>$_GET["correo"],
        "comentarios"=>$_GET["comentarios"],
        "seccionEmpresa"=>$_GET["seccionEmpresa"],
        "aceptaTOS"=>$_GET["aceptaTOS"],
    ];
    


    GrabarArrayJson("Json","formulario.json",$form);
    require_once("../html/contacto.html");
?>