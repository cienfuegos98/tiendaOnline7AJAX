<?php

require_once "Smarty.class.php";

spl_autoload_register(function($nombre_clase) {
    include $nombre_clase . '.php';
});

$lista = "holaa";
$plantilla = new Smarty();
$plantilla->template_dir = "./template";
$plantilla->compile_dir = "./template_c";
$con = new BD();
$listado = obtenerListado($con);
$plantilla->assign('error', $listado);

function obtenerListado($con) {
    $listado = "";
    $datos = $con->selection("SELECT * FROM productos");
    foreach ($datos as $dato) {
        $n_corto = $dato['nombre_corto'];
        $precio = $dato['PVP'];
        $listado .= "<form action='sitio.php' method='post'>"
                . "<input type='submit' value'Añadir' name='datos'>"
                . $n_corto . $precio
                . "</form>";
    }
    return $listado;
}
